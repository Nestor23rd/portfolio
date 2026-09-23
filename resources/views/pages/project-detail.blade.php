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
    <main class="relative z-10 mx-auto w-full max-w-7xl px-6 pb-24 pt-32 md:px-12">
        <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 rounded-lg border border-outline-variant/40 px-3.5 py-2 font-mono text-sm text-primary transition hover:border-primary/60 hover:bg-primary/10">← {{ __('site.back_projects') }}</a>
        <header class="mt-8 max-w-5xl border-b border-outline-variant/30 pb-10">
            <div class="flex flex-wrap items-center gap-3 font-mono text-xs uppercase tracking-[.18em] text-secondary">
                <span>{{ $project->category ?: __('site.case_study') }}</span>
                <span class="h-1 w-1 rounded-full bg-outline-variant"></span>
                <span class="text-on-surface-variant">{{ __('site.case_study') }}</span>
            </div>
            <h1 class="mt-4 font-display text-4xl font-bold leading-[1.05] tracking-tight text-on-surface md:text-6xl">{{ $project->title }}</h1>
            <p class="mt-6 max-w-3xl text-lg leading-8 text-on-surface-variant">{{ $project->excerpt }}</p>
            <div class="mt-7 flex flex-wrap gap-2">
                @foreach($project->technologies ?? [] as $technology)
                    <span class="rounded-full border border-primary/25 bg-primary/10 px-3 py-1 font-mono text-xs text-primary">{{ $technology }}</span>
                @endforeach
            </div>
        </header>

        <figure class="group relative mx-auto mt-10 flex h-[clamp(16rem,42vw,30rem)] w-full max-w-5xl items-center justify-center overflow-hidden rounded-3xl border border-outline-variant/40 bg-surface-container-lowest p-2 shadow-2xl shadow-primary/5 md:p-4">
            @php($primaryImage = $project->image_url ?: ($project->gallery_urls[0] ?? null))
            @if($primaryImage)
                <img id="project-main-image" src="{{ $primaryImage }}" alt="{{ $project->title }}" class="h-full w-full object-contain object-center p-2 md:p-4 transition duration-700 ease-out group-hover:scale-[1.015]" loading="eager">
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[#07101f]/55 via-transparent to-white/5"></div>
                <figcaption class="absolute bottom-4 left-4 rounded-lg border border-white/15 bg-[#07101f]/70 px-3 py-2 font-mono text-xs text-white backdrop-blur-md md:bottom-6 md:left-6">{{ __('site.case_study') }} · {{ $project->title }}</figcaption>
            @else
                <div class="flex h-full items-center justify-center bg-gradient-to-br from-primary/10 via-surface-container-low to-secondary/10 font-mono text-sm text-on-surface-variant">{{ __('site.no_cover_image') }}</div>
            @endif
        </figure>

        @if($project->gallery_urls)
            <section class="mx-auto mt-8 max-w-5xl">
                <div class="mb-4 flex items-center justify-between gap-4">
                    <h2 class="font-mono text-xs uppercase tracking-[.18em] text-on-surface-variant">{{ __('site.project_gallery') }}</h2>
                    <span class="font-mono text-xs text-outline">{{ count($project->gallery_urls) }} {{ __('site.images') }}</span>
                </div>
                <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                    @foreach($project->gallery_urls as $index => $galleryUrl)
                        <button type="button" data-gallery-image="{{ $galleryUrl }}" data-gallery-alt="{{ $project->title }} — image {{ $index + 1 }}" class="group/gallery relative aspect-[4/3] overflow-hidden rounded-xl border border-outline-variant/35 bg-surface-container-low transition hover:border-primary/70 focus:outline-none focus:ring-2 focus:ring-primary">
                            <img src="{{ $galleryUrl }}" alt="{{ $project->title }} — image {{ $index + 1 }}" loading="lazy" class="h-full w-full object-contain p-1 transition duration-500 group-hover/gallery:scale-[1.02]">
                            <span class="absolute bottom-2 right-2 rounded-md bg-black/65 px-2 py-1 font-mono text-[10px] text-white opacity-0 backdrop-blur transition group-hover/gallery:opacity-100">Voir</span>
                        </button>
                    @endforeach
                </div>
            </section>
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
    <script>
        document.querySelectorAll('[data-gallery-image]').forEach(function (thumbnail) {
            thumbnail.addEventListener('click', function () {
                const mainImage = document.getElementById('project-main-image');
                if (!mainImage) return;
                mainImage.src = thumbnail.dataset.galleryImage;
                mainImage.alt = thumbnail.dataset.galleryAlt || mainImage.alt;
                document.querySelectorAll('[data-gallery-image]').forEach(function (item) {
                    item.classList.remove('border-primary', 'ring-2', 'ring-primary');
                });
                thumbnail.classList.add('border-primary', 'ring-2', 'ring-primary');
            });
        });
    </script>
</body>
</html>
