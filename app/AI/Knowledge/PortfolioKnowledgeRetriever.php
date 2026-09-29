<?php

namespace App\AI\Knowledge;

use App\Models\Certification;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Skill;
use App\Models\SocialLink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

final class PortfolioKnowledgeRetriever
{
    /**
     * @return array{profile: array<string, string>, skills: list<array<string, mixed>>, projects: list<array<string, mixed>>, experiences: list<array<string, mixed>>, certifications: list<array<string, mixed>>, services: list<array<string, mixed>>, contact: array<string, mixed>}
     */
    public function retrieve(string $question, ?string $projectSlug = null): array
    {
        $terms = $this->searchTerms($question);
        $projects = Project::query()
            ->where('is_published', true)
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->latest('published_at')
            ->get(['title', 'slug', 'category', 'excerpt', 'description', 'challenge', 'solution', 'results', 'technologies', 'project_url', 'repository_url', 'sort_order', 'is_featured', 'published_at']);
        $skills = Skill::query()->where('is_visible', true)->orderBy('sort_order')->get(['name', 'name_en', 'description', 'description_en', 'category', 'category_en', 'proficiency']);
        $experiences = Experience::query()->orderByDesc('start_date')->get(['role', 'company', 'location', 'start_date', 'end_date', 'is_current', 'description', 'technologies']);
        $certifications = Certification::query()->where('is_visible', true)->orderBy('sort_order')->get(['title', 'issuer', 'description', 'credential_url', 'status', 'issued_at']);
        $services = Service::query()->where('is_visible', true)->orderBy('sort_order')->get(['title', 'description']);

        $projectDocuments = $this->rank($projects, $terms, fn (Project $project): string => implode(' ', [
            $this->raw($project, 'title'), $this->raw($project, 'category'), $this->raw($project, 'excerpt'),
            $this->raw($project, 'description'), $this->raw($project, 'challenge'), $this->raw($project, 'solution'),
            $this->raw($project, 'results'), json_encode($project->technologies ?? [], JSON_UNESCAPED_UNICODE) ?: '',
        ]));

        if ($projectSlug !== null) {
            $projectDocuments = $projects->where('slug', $projectSlug)->values();
        }

        return [
            'profile' => [
                'name' => 'Nestor KPADJA',
                'location' => (string) (SiteSetting::query()->where('key', 'location')->value('value') ?? 'Lomé, Togo'),
                'introduction' => (string) __('site.about_tagline'),
                'specialization' => (string) __('site.specialization_val'),
            ],
            'skills' => $this->mapDocuments($this->rank($skills, $terms, fn (Skill $skill): string => implode(' ', [
                $this->raw($skill, 'name'), $this->raw($skill, 'name_en'), $this->raw($skill, 'category'),
                $this->raw($skill, 'category_en'), $this->raw($skill, 'description'), $this->raw($skill, 'description_en'),
            ]))->take(6), fn (Skill $skill): array => array_filter([
                'name' => $this->raw($skill, 'name'),
                'name_en' => $this->raw($skill, 'name_en'),
                'category' => $this->raw($skill, 'category'),
                'category_en' => $this->raw($skill, 'category_en'),
                'description' => $this->clean($this->raw($skill, 'description')),
                'description_en' => $this->clean($this->raw($skill, 'description_en')),
            ], fn (?string $value): bool => filled($value))),
            'projects' => $this->mapDocuments($projectDocuments->take(5), fn (Project $project): array => array_filter([
                'title' => $this->raw($project, 'title'),
                'category' => $this->raw($project, 'category'),
                'excerpt' => $this->clean($this->raw($project, 'excerpt')),
                'description' => $this->clean($this->raw($project, 'description')),
                'challenge' => $this->clean($this->raw($project, 'challenge')),
                'solution' => $this->clean($this->raw($project, 'solution')),
                'results' => $this->clean($this->raw($project, 'results')),
                'technologies' => $project->technologies ?? [],
                'project_url' => $this->safeUrl($this->raw($project, 'project_url')),
                'repository_url' => $this->safeUrl($this->raw($project, 'repository_url')),
                'portfolio_url' => route('projects.show', ['project' => $this->raw($project, 'slug')]),
            ], static fn (mixed $value): bool => $value !== null && $value !== '')),
            'experiences' => $this->mapDocuments($this->rank($experiences, $terms, fn (Experience $experience): string => implode(' ', [
                $this->raw($experience, 'role'), $this->raw($experience, 'company'), $this->raw($experience, 'description'),
                json_encode($experience->technologies ?? [], JSON_UNESCAPED_UNICODE) ?: '',
            ]))->take(4), fn (Experience $experience): array => array_filter([
                'role' => $this->raw($experience, 'role'),
                'company' => $this->raw($experience, 'company'),
                'location' => $this->raw($experience, 'location'),
                'start_date' => $this->raw($experience, 'start_date'),
                'end_date' => $this->raw($experience, 'end_date'),
                'current' => $experience->is_current,
                'description' => $this->clean($this->raw($experience, 'description')),
                'technologies' => $experience->technologies ?? [],
            ], static fn (mixed $value): bool => $value !== null && $value !== '')),
            'certifications' => $this->mapDocuments($this->rank($certifications, $terms, fn (Certification $certification): string => implode(' ', [
                $this->raw($certification, 'title'), $this->raw($certification, 'issuer'), $this->raw($certification, 'description'),
            ]))->take(3), fn (Certification $certification): array => array_filter([
                'title' => $this->raw($certification, 'title'),
                'issuer' => $this->raw($certification, 'issuer'),
                'description' => $this->clean($this->raw($certification, 'description')),
                'credential_url' => $this->safeUrl($this->raw($certification, 'credential_url')),
                'status' => $this->raw($certification, 'status'),
                'issued_at' => $this->raw($certification, 'issued_at'),
            ], static fn (mixed $value): bool => $value !== null && $value !== '')),
            'services' => $this->mapDocuments($this->rank($services, $terms, fn (Service $service): string => $this->raw($service, 'title').' '.$this->raw($service, 'description'))->take(3), fn (Service $service): array => [
                'title' => $this->raw($service, 'title'),
                'description' => $this->clean($this->raw($service, 'description')),
            ]),
            'contact' => $this->publicContactDetails(),
        ];
    }

    /** @return list<string> */
    private function searchTerms(string $question): array
    {
        $words = preg_split('/[^\pL\pN+#.]+/u', Str::lower($question), -1, PREG_SPLIT_NO_EMPTY) ?: [];
        $stopWords = ['what', 'which', 'where', 'when', 'who', 'show', 'tell', 'about', 'with', 'does', 'have', 'from', 'this', 'that', 'the', 'and', 'for', 'his', 'her', 'are', 'use', 'uses', 'project', 'projects', 'explain', 'experience', 'background', 'profile', 'contact', 'skill', 'skills', 'developer', 'parle', 'quels', 'quelles', 'quel', 'quelle', 'comment', 'dans', 'avec', 'pour', 'les', 'des', 'une', 'un', 'qui', 'que', 'est', 'ses', 'son', 'sur', 'expérience', 'parcours', 'profil', 'contacter', 'compétence', 'compétences', 'competences', 'projets', 'utilise', 'utilisent', 'technologies'];

        return array_values(array_unique(array_filter($words, static fn (string $word): bool => mb_strlen($word) > 2 && ! in_array($word, $stopWords, true))));
    }

    /** @param Collection<int, Model> $models
     * @param  callable(Model): string  $searchableText
     * @return Collection<int, Model>
     */
    private function rank(Collection $models, array $terms, callable $searchableText): Collection
    {
        $ranked = $models->map(function (Model $model) use ($terms, $searchableText): array {
            $text = Str::lower((string) $searchableText($model));
            $score = collect($terms)->sum(static fn (string $term): int => str_contains($text, $term) ? 1 : 0);

            return ['model' => $model, 'score' => $score];
        })->sortByDesc('score');

        if ($terms !== []) {
            $ranked = $ranked->filter(static fn (array $item): bool => $item['score'] > 0);
        }

        return $ranked->values()->pluck('model');
    }

    /** @param Collection<int, Model> $models
     * @param  callable(Model): array<string, mixed>  $mapper
     * @return list<array<string, mixed>>
     */
    private function mapDocuments(Collection $models, callable $mapper): array
    {
        return $models->map(fn (Model $model): array => $mapper($model))->values()->all();
    }

    private function raw(Model $model, string $key): ?string
    {
        $value = $model->getRawOriginal($key);

        return is_string($value) ? $value : null;
    }

    private function clean(?string $value): ?string
    {
        if ($value === null) {
            return null;
        }

        return Str::limit(trim(strip_tags($value)), 1400);
    }

    private function safeUrl(?string $url): ?string
    {
        return is_string($url) && str_starts_with($url, 'https://') ? $url : null;
    }

    /** @return array<string, string> */
    private function publicContactDetails(): array
    {
        $allowedKeys = ['email', 'phone_number', 'whatsapp_number', 'location', 'github_url', 'linkedin_url'];
        $settings = SiteSetting::query()->whereIn('key', $allowedKeys)->pluck('value', 'key');
        $socialLinks = SocialLink::query()->where('is_visible', true)->orderBy('sort_order')->get(['label', 'url']);
        $details = $settings->only($allowedKeys)->filter()->all();

        foreach ($socialLinks as $socialLink) {
            $url = $this->safeUrl($socialLink->url);

            if ($url !== null) {
                $details['social_'.$socialLink->label] = $url;
            }
        }

        $details['contact_page'] = route('contact');
        $cvPath = SiteSetting::query()->where('key', 'cv_path')->value('value');

        if (is_string($cvPath) && $cvPath !== '') {
            $details['cv_url'] = asset('storage/'.$cvPath);
        }

        return $details;
    }
}
