<!DOCTYPE html>
<html class="dark" lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ __('site.title_projects') }}</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
@include('partials.theme-head')
@include('partials.full-width')
<style>
    /* Card hover lift */
    .project-card {
        transition: transform 0.22s cubic-bezier(0.16,1,0.3,1), box-shadow 0.22s ease, border-color 0.15s;
    }
    .project-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 40px rgb(var(--color-primary) / 0.09), 0 4px 12px rgb(0 0 0 / 0.12);
    }
    /* Image zoom */
    .card-img-inner {
        transition: transform 0.55s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .project-card:hover .card-img-inner { transform: scale(1.05); }
    /* Placeholder grid pattern */
    .placeholder-grid {
        background-image:
            linear-gradient(to right, rgb(var(--color-outline-variant) / 0.09) 1px, transparent 1px),
            linear-gradient(to bottom, rgb(var(--color-outline-variant) / 0.09) 1px, transparent 1px);
        background-size: 22px 22px;
    }
    /* Featured badge shimmer */
    @keyframes badge-shine {
        0%   { background-position: -200% center; }
        100% { background-position:  200% center; }
    }
    .badge-featured {
        background: linear-gradient(90deg, rgb(var(--color-secondary)/0.07) 0%, rgb(var(--color-secondary)/0.22) 40%, rgb(var(--color-secondary)/0.07) 100%);
        background-size: 200% auto;
        animation: badge-shine 3s linear infinite;
    }
    /* Hero ambient glow */
    .hero-glow {
        background: radial-gradient(ellipse 60% 40% at 50% 0%, rgb(var(--color-primary)/0.10) 0%, transparent 70%);
    }
    /* Stagger reveal */
    @keyframes card-in {
        from { opacity: 0; transform: translateY(18px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .project-card { opacity: 0; animation: card-in 0.5s cubic-bezier(0.16,1,0.3,1) forwards; }
    @media (prefers-reduced-motion: reduce) {
        .project-card { animation: none; opacity: 1; transform: none; }
    }
</style>
</head>
<body class="bg-surface-container-lowest text-on-surface antialiased font-body-md min-h-screen flex flex-col selection:bg-primary-container selection:text-on-primary-container">

@include('partials.navigation')

{{-- ═══ HERO ═══ --}}
<section class="relative pt-28 pb-12 px-6 md:px-12 overflow-hidden">
    <div class="hero-glow absolute inset-x-0 top-0 h-56 pointer-events-none -z-10"></div>
    <div class="absolute inset-0 grid-bg opacity-25 pointer-events-none -z-10"></div>
    <div class="max-w-7xl mx-auto w-full">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-high/80 border border-outline-variant/40 mb-5">
            <span class="text-primary font-mono text-xs font-bold">&gt;_</span>
            <span class="font-mono text-xs text-on-surface-variant">{{ __('site.my_projects') }}</span>
            <span class="w-1.5 h-3 bg-primary/70 inline-block animate-pulse rounded-sm"></span>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h1 class="font-display text-4xl md:text-6xl font-bold text-on-surface tracking-tight leading-[1.05]">
                    {{ __('site.my_projects') }}
                </h1>
                <p class="mt-4 text-lg text-on-surface-variant max-w-2xl leading-relaxed">
                    {{ __('site.projects_intro') }}
                </p>
            </div>
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-surface-container border border-outline-variant/30 font-mono text-sm text-on-surface-variant self-start md:self-auto shrink-0">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-on-surface font-semibold">{{ $projects->total() }}</span>
                <span>projet{{ $projects->total() > 1 ? 's' : '' }}</span>
            </div>
        </div>
    </div>
</section>

{{-- ═══ FILTER BAR ═══ --}}
<div class="sticky top-16 z-30 bg-surface-container-lowest/90 backdrop-blur-md border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-3 flex flex-wrap items-center justify-between gap-3">
        <div class="flex flex-wrap items-center gap-2">
            @php($isAllActive = empty($selectedCategory))
            <a href="{{ route('projects') }}"
               class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg font-mono text-xs transition-all
                      {{ $isAllActive ? 'bg-primary text-on-primary font-semibold shadow-sm' : 'bg-surface-container border border-outline-variant/40 text-on-surface-variant hover:border-primary/50 hover:bg-surface-container-high hover:text-on-surface' }}">
                @if($isAllActive)<span class="w-1.5 h-1.5 rounded-full bg-current animate-pulse"></span>@endif
                {{ __('site.all_projects') }}
            </a>
            @foreach($categories as $category)
                @php($isCatActive = ($selectedCategory === $category))
                @php($localizedCategory = __($category))
                <a href="{{ route('projects', ['category' => $category]) }}"
                   class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg font-mono text-xs transition-all
                          {{ $isCatActive ? 'bg-primary text-on-primary font-semibold shadow-sm' : 'bg-surface-container border border-outline-variant/40 text-on-surface-variant hover:border-primary/50 hover:bg-surface-container-high hover:text-on-surface' }}">
                    @if($isCatActive)<span class="w-1.5 h-1.5 rounded-full bg-current animate-pulse"></span>@endif
                    {{ $localizedCategory !== $category ? $localizedCategory : app(\App\Services\LibreTranslate::class)->translate($category, app()->getLocale()) }}
                </a>
            @endforeach
        </div>
        <div class="font-mono text-xs text-outline flex items-center gap-1.5">
            <span class="material-symbols-outlined" style="font-size:14px;">data_object</span>
            <span>{{ $projects->total() }} résultat{{ $projects->total() > 1 ? 's' : '' }}</span>
        </div>
    </div>
</div>

{{-- ═══ MAIN CONTENT ═══ --}}
<main class="flex-grow px-6 md:px-12 py-10 max-w-7xl mx-auto w-full">

    @php($collection      = $projects->getCollection())
    @php($first           = $collection->first())
    @php($featuredProject = ($first && $first->is_featured) ? $first : null)
    @php($restProjects    = $featuredProject ? $collection->slice(1) : $collection)

    @if($collection->isEmpty())
        {{-- Empty state --}}
        <div class="rounded-2xl border border-dashed border-outline-variant/40 p-16 text-center">
            <span class="material-symbols-outlined text-outline block mb-3" style="font-size:40px;">search_off</span>
            <p class="text-on-surface-variant font-mono text-sm">{{ __('site.no_projects') }}</p>
        </div>
    @else

        {{-- ─── Featured card (plein largeur) ─── --}}
        @if($featuredProject)
        <article class="project-card group mb-6 flex flex-col md:flex-row overflow-hidden rounded-2xl border border-outline-variant/40 bg-surface-container-low hover:border-primary/50"
                 style="animation-delay:0ms">
            {{-- Image --}}
            <div class="shrink-0 overflow-hidden md:w-5/12" style="min-height:220px; max-height:360px;">
                @if($featuredProject->image_url)
                    <div class="w-full overflow-hidden" style="height:100%; min-height:220px; max-height:360px;">
                        <img src="{{ $featuredProject->image_url }}"
                             alt="{{ $featuredProject->title }}"
                             class="card-img-inner w-full object-cover object-top"
                             style="height:100%; min-height:220px; max-height:360px;"
                             loading="eager">
                    </div>
                @else
                    <div class="placeholder-grid w-full h-full flex flex-col items-center justify-center gap-4 bg-surface-container" style="min-height:220px;">
                        <span class="material-symbols-outlined text-primary/30" style="font-size:52px;">code_blocks</span>
                        <span class="font-mono text-xs text-outline uppercase tracking-widest">{{ $featuredProject->category ?: 'projet' }}</span>
                    </div>
                @endif
            </div>
            {{-- Content --}}
            <div class="flex flex-col justify-between p-7 md:p-10 flex-grow">
                <div>
                    <div class="flex flex-wrap items-center gap-2 mb-4">
                        <span class="badge-featured inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-secondary/30 font-mono text-xs text-secondary font-semibold">
                            <span class="material-symbols-outlined" style="font-size:12px;">star</span>
                            {{ __('site.featured') }}
                        </span>
                        @if($featuredProject->category)
                        <span class="inline-flex items-center px-3 py-1 rounded-full border border-primary/25 bg-primary/10 font-mono text-xs text-primary font-semibold">
                            {{ $featuredProject->category }}
                        </span>
                        @endif
                    </div>
                    <h2 class="font-display text-2xl md:text-3xl font-bold text-on-surface group-hover:text-primary transition-colors leading-tight">
                        {{ $featuredProject->title }}
                    </h2>
                    <p class="mt-3 text-on-surface-variant leading-7 line-clamp-3">{{ $featuredProject->excerpt }}</p>
                    @if($featuredProject->technologies)
                    <div class="flex flex-wrap gap-1.5 mt-5">
                        @foreach(collect($featuredProject->technologies)->take(6) as $tech)
                            <span class="px-2.5 py-1 rounded-lg bg-surface-container border border-outline-variant/40 font-mono text-xs text-on-surface-variant">{{ $tech }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="flex flex-wrap items-center gap-3 mt-7 pt-6 border-t border-outline-variant/30">
                    <a href="{{ route('projects.show', $featuredProject) }}"
                       class="inline-flex items-center gap-2 rounded-xl bg-primary px-5 py-2.5 font-semibold text-on-primary shadow-lg shadow-primary/20 hover:bg-primary/90 active:scale-95 transition-all">
                        {{ __('site.view_case_study') }}
                        <span class="material-symbols-outlined" style="font-size:16px;">north_east</span>
                    </a>
                    @if($featuredProject->project_url)
                    <a href="{{ $featuredProject->project_url }}" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 rounded-xl border border-outline-variant/50 px-4 py-2.5 font-mono text-xs text-on-surface-variant hover:border-primary/50 hover:text-on-surface transition-all">
                        <span class="material-symbols-outlined" style="font-size:14px;">open_in_new</span>
                        Site live
                    </a>
                    @endif
                </div>
            </div>
        </article>
        @endif

        {{-- ─── Grille régulière ─── --}}
        @if($restProjects->isNotEmpty())
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($restProjects->values() as $gIdx => $project)
            <article class="project-card group flex flex-col overflow-hidden rounded-2xl border border-outline-variant/40 bg-surface-container-low hover:border-primary/50"
                     style="animation-delay: {{ min($gIdx, 8) * 70 + 60 }}ms">
                {{-- Image / placeholder --}}
                <div class="overflow-hidden shrink-0" style="height:176px;">
                    @if($project->image_url)
                        <div class="w-full overflow-hidden" style="height:176px;">
                            <img src="{{ $project->image_url }}"
                                 alt="{{ $project->title }}"
                                 class="card-img-inner w-full object-cover object-top"
                                 style="height:176px;"
                                 loading="lazy">
                        </div>
                    @else
                        <div class="placeholder-grid w-full h-full flex flex-col items-center justify-center gap-3 bg-surface-container">
                            <div class="w-36 rounded-lg border border-outline-variant/30 bg-surface-container-lowest/80 p-2.5">
                                <div class="flex items-center gap-1 mb-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-error/50"></span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary/50"></span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500/50"></span>
                                </div>
                                <div class="space-y-1">
                                    <div class="h-1.5 w-full bg-primary/20 rounded"></div>
                                    <div class="h-1.5 w-3/4 bg-outline-variant/40 rounded"></div>
                                    <div class="h-1.5 w-1/2 bg-outline-variant/25 rounded"></div>
                                </div>
                            </div>
                            <span class="font-mono text-[10px] text-outline uppercase tracking-widest">{{ $project->category ?: 'projet' }}</span>
                        </div>
                    @endif
                </div>
                {{-- Contenu --}}
                <div class="flex flex-col flex-grow p-5">
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full border border-primary/25 bg-primary/10 font-mono text-[11px] text-primary font-semibold">
                            {{ $project->category ?: __('site.case_study') }}
                        </span>
                        <div class="flex items-center gap-1.5">
                            @if($project->is_featured)
                                <span class="material-symbols-outlined text-secondary" style="font-size:13px;">star</span>
                            @endif
                            <span class="font-mono text-[10px] text-outline">#{{ str_pad($gIdx + ($featuredProject ? 2 : 1), 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                    </div>
                    <h2 class="font-display text-base font-bold text-on-surface group-hover:text-primary transition-colors leading-snug">
                        {{ $project->title }}
                    </h2>
                    <p class="mt-2 text-sm text-on-surface-variant leading-6 line-clamp-2 flex-grow">{{ $project->excerpt }}</p>
                    @if($project->technologies)
                    <div class="flex flex-wrap gap-1 mt-3">
                        @foreach(collect($project->technologies)->take(3) as $tech)
                            <span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/35 font-mono text-[10px] text-on-surface-variant">{{ $tech }}</span>
                        @endforeach
                        @if(count($project->technologies) > 3)
                            <span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/35 font-mono text-[10px] text-outline">+{{ count($project->technologies) - 3 }}</span>
                        @endif
                    </div>
                    @endif
                    <div class="flex items-center justify-between gap-2 mt-4 pt-4 border-t border-outline-variant/30">
                        <a href="{{ route('projects.show', $project) }}"
                           class="inline-flex items-center gap-1.5 rounded-lg bg-primary-container px-3 py-1.5 font-semibold text-xs text-on-primary-container shadow-sm hover:bg-primary hover:text-on-primary active:scale-95 transition-all duration-150">
                            {{ __('site.view_case_study') }}
                            <span class="material-symbols-outlined" style="font-size:12px;">north_east</span>
                        </a>
                        <div class="flex items-center gap-1.5">
                            @if($project->project_url)
                                <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer"
                                   class="w-7 h-7 flex items-center justify-center rounded-lg border border-outline-variant/40 text-on-surface-variant hover:border-primary/50 hover:text-primary transition-all"
                                   title="Voir le site">
                                    <span class="material-symbols-outlined" style="font-size:13px;">open_in_new</span>
                                </a>
                            @endif
                            @if($project->repository_url)
                                <a href="{{ $project->repository_url }}" target="_blank" rel="noopener noreferrer"
                                   class="w-7 h-7 flex items-center justify-center rounded-lg border border-outline-variant/40 text-on-surface-variant hover:border-primary/50 hover:text-primary transition-all"
                                   title="{{ __('site.source_code') }}">
                                    <span class="material-symbols-outlined" style="font-size:13px;">code</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @endif

    @endif

    {{-- Pagination --}}
    @if($projects->hasPages())
    <div class="mt-10 flex justify-center">{{ $projects->onEachSide(1)->links() }}</div>
    @endif

    {{-- CTA banner --}}
    <div class="mt-16 relative overflow-hidden rounded-2xl border border-outline-variant/40 bg-surface-container p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="pointer-events-none absolute -top-16 -right-16 w-60 h-60 rounded-full bg-primary/5 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-10 -left-10 w-48 h-48 rounded-full bg-secondary/5 blur-3xl"></div>
        <div class="relative flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-surface-container-lowest border border-outline-variant/40 flex items-center justify-center text-primary shrink-0">
                <span class="material-symbols-outlined" style="font-size:24px;">terminal</span>
            </div>
            <div>
                <h4 class="font-display text-xl font-bold text-on-surface">{{ __('site.projects_cta_title') }}</h4>
                <p class="text-sm text-on-surface-variant mt-0.5">{{ __('site.projects_cta_desc') }}</p>
            </div>
        </div>
        <a href="{{ route('contact') }}"
           class="relative inline-flex items-center gap-2 rounded-xl bg-primary px-6 py-3 font-semibold text-on-primary shadow-lg shadow-primary/20 hover:bg-primary/90 active:scale-95 transition-all shrink-0">
            {{ __('site.start_conversation') }}
            <span class="material-symbols-outlined" style="font-size:18px;">arrow_forward</span>
        </a>
    </div>

</main>

{{-- ═══ FOOTER ═══ --}}
<footer class="border-t border-outline-variant/30 mt-auto bg-surface-container-lowest">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col sm:flex-row items-center justify-between gap-6">
        <div class="flex items-center gap-3">
            <span class="font-mono font-bold text-on-surface flex items-center gap-1">
                <span class="text-primary">&gt;_</span>
                <span>Nestor KPADJA</span>
            </span>
            <span class="text-outline-variant hidden sm:inline">|</span>
            <span class="text-on-surface-variant font-mono text-xs">© {{ date('Y') }} {{ $siteSettings['footer_text'] ?? 'Lomé, Togo' }}</span>
        </div>
        <nav class="flex flex-wrap items-center justify-center gap-5">
            @if(!empty($siteSettings['github_url']))
                <a class="text-on-surface-variant hover:text-on-surface font-mono text-xs transition-colors" href="{{ $siteSettings['github_url'] }}" rel="noopener noreferrer" target="_blank">GitHub</a>
            @endif
            @if(!empty($siteSettings['linkedin_url']))
                <a class="text-on-surface-variant hover:text-on-surface font-mono text-xs transition-colors" href="{{ $siteSettings['linkedin_url'] }}" rel="noopener noreferrer" target="_blank">LinkedIn</a>
            @endif
            <a class="text-on-surface-variant hover:text-on-surface font-mono text-xs transition-colors" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
        </nav>
    </div>
</footer>

@include('partials.hero-globe', ['global' => true, 'compact' => true])
</body>
</html>
