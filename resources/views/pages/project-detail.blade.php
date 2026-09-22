<!DOCTYPE html>
<html class="dark" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $project->title }} — {{ config('app.name') }}</title>
    @include('partials.theme-head')
    @include('partials.full-width')
</head>
<body class="min-h-screen bg-surface text-on-surface antialiased">
    @include('partials.navigation')
    @include('partials.hero-globe', ['global' => true, 'compact' => true])
    @include('partials.java-coffee')
    <main class="relative z-10 mx-auto w-full max-w-6xl px-6 pb-20 pt-28 md:px-12">
        <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 font-mono text-sm text-primary hover:underline">← {{ __('site.back_projects') }}</a>
        <header class="mt-8 max-w-4xl border-b border-outline-variant/30 pb-10">
            <span class="font-mono text-xs uppercase tracking-[.18em] text-secondary">{{ $project->category ?: __('site.case_study') }}</span>
            <h1 class="mt-3 font-display text-4xl font-bold tracking-tight text-on-surface md:text-6xl">{{ $project->title }}</h1>
            <p class="mt-5 text-lg leading-8 text-on-surface-variant">{{ $project->excerpt }}</p>
            <div class="mt-6 flex flex-wrap gap-2">
                @foreach($project->technologies ?? [] as $technology)
                    <span class="rounded-full border border-primary/25 bg-primary/10 px-3 py-1 font-mono text-xs text-primary">{{ $technology }}</span>
                @endforeach
            </div>
        </header>

        @if($project->image_url)
            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="mt-10 h-64 w-full rounded-2xl border border-outline-variant/30 object-cover shadow-2xl md:h-96">
        @endif

        <section class="mt-12 grid gap-6 md:grid-cols-3">
            @foreach([['challenge', 'problem', 'text-secondary'], ['solution', 'architecture', 'text-primary'], ['results', 'check_circle', 'text-emerald-400']] as [$field, $icon, $color])
                @if($project->{$field})
                    <article class="rounded-2xl border border-outline-variant/35 bg-surface-container-low/90 p-6 backdrop-blur-sm">
                        <span class="material-symbols-outlined {{ $color }}">{{ $icon }}</span>
                        <h2 class="mt-4 font-display text-xl font-semibold">{{ __('site.' . $field) }}</h2>
                        <p class="mt-3 whitespace-pre-line text-sm leading-7 text-on-surface-variant">{{ $project->{$field} }}</p>
                    </article>
                @endif
            @endforeach
        </section>

        @if($project->description)
            <section class="mt-12 max-w-4xl rounded-2xl border border-outline-variant/35 bg-surface-container-low/80 p-6 md:p-8">
                <h2 class="font-display text-2xl font-semibold">{{ __('site.project_overview') }}</h2>
                <p class="mt-4 whitespace-pre-line leading-8 text-on-surface-variant">{{ $project->description }}</p>
            </section>
        @endif

        <div class="mt-10 flex flex-wrap gap-3">
            @if($project->project_url)<a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer" class="rounded-lg bg-primary-container px-5 py-3 font-semibold text-on-primary-container">{{ __('site.visit_project') }} ↗</a>@endif
            @if($project->repository_url)<a href="{{ $project->repository_url }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-outline-variant/50 px-5 py-3 font-semibold text-on-surface">{{ __('site.source_code') }} ↗</a>@endif
        </div>
    </main>
</body>
</html>
