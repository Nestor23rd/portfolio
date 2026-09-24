<!DOCTYPE html>
<html class="dark" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $project->title }} — {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    @include('partials.theme-head')
    @include('partials.full-width')
    <style>
        /* Hero image parallax */
        .project-hero-img {
            transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .project-hero-img:hover {
            transform: scale(1.02);
        }

        /* Animated gradient badge */
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        .badge-animated {
            background: linear-gradient(90deg,
                rgb(var(--color-primary) / 0.15) 0%,
                rgb(var(--color-primary) / 0.35) 40%,
                rgb(var(--color-primary) / 0.15) 100%);
            background-size: 200% auto;
            animation: shimmer 3s linear infinite;
        }

        /* Gallery thumbnail active state */
        .gallery-thumb.active {
            border-color: rgb(var(--color-primary));
            box-shadow: 0 0 0 2px rgb(var(--color-primary) / 0.4);
        }

        /* Lightbox */
        #lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 100;
            background: rgba(0, 0, 0, 0.92);
            backdrop-filter: blur(12px);
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        #lightbox.open {
            display: flex;
        }
        #lightbox-img {
            max-width: 100%;
            max-height: 90vh;
            border-radius: 1rem;
            box-shadow: 0 40px 80px rgba(0,0,0,0.6);
            object-fit: contain;
        }

        /* Stats counter animation */
        @keyframes count-up {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .stat-item {
            animation: count-up 0.6s ease forwards;
        }

        /* Section reveal */
        .project-section {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.65s cubic-bezier(0.16,1,0.3,1), transform 0.65s cubic-bezier(0.16,1,0.3,1);
        }
        .project-section.visible {
            opacity: 1;
            transform: none;
        }

        /* Glow card hover effect */
        .feature-card {
            position: relative;
            overflow: hidden;
            transition: border-color 0.2s, box-shadow 0.3s, transform 0.2s;
        }
        .feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgb(var(--color-primary) / 0.12);
        }
        .feature-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: radial-gradient(ellipse 80% 60% at 50% -10%, rgb(var(--color-primary) / 0.07), transparent);
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
        }
        .feature-card:hover::after {
            opacity: 1;
        }

        /* Mobile nav offset */
        @media (max-width: 768px) {
            .project-hero-banner { min-height: 55vw; }
        }

        /* Copy URL button */
        .copy-feedback {
            opacity: 0;
            transition: opacity 0.2s;
        }
        .copy-feedback.show {
            opacity: 1;
        }
    </style>
</head>
<body class="min-h-screen bg-surface text-on-surface antialiased font-body-md">

    @include('partials.navigation')

    {{-- ═══════════════════════════════════════════
         HERO BANNER — Image pleine largeur avec overlay
    ═══════════════════════════════════════════════ --}}
    @php($primaryImage = $project->image_url ?: ($project->gallery_urls[0] ?? null))
    <div class="relative w-full project-hero-banner overflow-hidden" style="height: clamp(280px, 45vw, 520px); margin-top: 4rem;">
        {{-- Image de fond --}}
        @if($primaryImage)
            <img src="{{ $primaryImage }}" alt="{{ $project->title }}"
                 class="project-hero-img absolute inset-0 w-full h-full object-cover object-top"
                 loading="eager">
        @else
            <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-surface-container to-secondary/10"></div>
        @endif

        {{-- Gradient overlay multi-couches --}}
        <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/60 to-surface/10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-surface/30 via-transparent to-surface/10"></div>

        {{-- Grid pattern décoratif --}}
        <div class="absolute inset-0 grid-bg opacity-20 pointer-events-none"></div>

        {{-- Contenu positionné en bas du banner --}}
        <div class="absolute bottom-0 left-0 right-0 px-6 md:px-12 pb-8 max-w-7xl mx-auto">
            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 font-mono text-xs text-on-surface-variant mb-4">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors">{{ __('site.home') }}</a>
                <span class="text-outline">/</span>
                <a href="{{ route('projects') }}" class="hover:text-primary transition-colors">{{ __('site.projects') }}</a>
                <span class="text-outline">/</span>
                <span class="text-primary">{{ $project->title }}</span>
            </div>

            {{-- Category badge --}}
            @if($project->category)
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md badge-animated border border-primary/30 mb-3">
                    <span class="material-symbols-outlined text-primary" style="font-size:14px;">category</span>
                    <span class="font-mono text-xs uppercase tracking-widest text-primary font-semibold">{{ __($project->category) }}</span>
                </div>
            @endif

            {{-- Titre principal --}}
            <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold leading-[1.0] tracking-tight text-on-surface drop-shadow-lg">
                {{ $project->title }}
            </h1>

            @if($project->excerpt)
                <p class="mt-3 text-lg text-on-surface-variant max-w-2xl leading-relaxed">{{ $project->excerpt }}</p>
            @endif
        </div>
    </div>

    {{-- ═══════════════════════════════════════════
         MAIN CONTENT
    ═══════════════════════════════════════════════ --}}
    <main class="relative z-10 mx-auto w-full max-w-7xl px-6 md:px-12 pb-24">

        {{-- ─── Row : Meta + Actions ─────────────────── --}}
        <div class="project-section mt-8 flex flex-wrap items-start justify-between gap-6">
            {{-- Technologies pills --}}
            <div class="flex flex-wrap gap-2 items-center">
                <span class="font-mono text-xs text-outline uppercase tracking-wider mr-1">{{ __('site.stack_label') }}</span>
                @forelse($project->technologies ?? [] as $tech)
                    <span class="inline-flex items-center gap-1.5 rounded-full border border-primary/30 bg-primary/10 px-3.5 py-1.5 font-mono text-xs font-semibold text-primary">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary/60"></span>
                        {{ $tech }}
                    </span>
                @empty
                    <span class="text-xs text-outline font-mono italic">{{ __('site.not_specified') }}</span>
                @endforelse
            </div>

            {{-- Action buttons --}}
            <div class="flex flex-wrap gap-3">
                @if($project->project_url)
                    <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 rounded-xl bg-primary px-5 py-2.5 font-semibold text-on-primary shadow-lg shadow-primary/25 hover:bg-primary/90 active:scale-95 transition-all duration-150">
                        <span class="material-symbols-outlined" style="font-size:18px;">open_in_new</span>
                        {{ __('site.visit_project') }}
                    </a>
                @endif
                @if($project->repository_url)
                    <a href="{{ $project->repository_url }}" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 rounded-xl border border-outline-variant/60 px-5 py-2.5 font-semibold text-on-surface hover:border-primary/50 hover:bg-surface-container-low active:scale-95 transition-all duration-150">
                        <span class="material-symbols-outlined" style="font-size:18px;">code</span>
                        {{ __('site.source_code') }}
                    </a>
                @endif
                <a href="{{ route('projects') }}"
                   class="inline-flex items-center gap-2 rounded-xl border border-outline-variant/40 px-4 py-2.5 font-mono text-sm text-on-surface-variant hover:border-primary/40 hover:text-primary transition-all duration-150">
                    <span class="material-symbols-outlined" style="font-size:16px;">arrow_back</span>
                    {{ __('site.back') }}
                </a>
            </div>
        </div>

        {{-- ─── GALLERY SECTION ─────────────────────── --}}
        @if($project->image_url || count($project->gallery_urls ?? []) > 0)
        <section class="project-section mt-10" style="transition-delay: 0.1s">

            @php($allImages = array_values(array_unique(array_filter([
                $project->image_url,
                ...($project->gallery_urls ?? [])
            ]))))

            @if(count($allImages) > 0)
            <div class="space-y-4">
                {{-- Image principale grande --}}
                <div class="relative rounded-3xl overflow-hidden border border-outline-variant/40 bg-surface-container-lowest cursor-zoom-in shadow-2xl shadow-primary/5 group"
                     style="height: clamp(260px, 50vw, 560px);"
                     onclick="openLightbox('{{ $allImages[0] }}')">
                    <img id="project-main-image"
                         src="{{ $allImages[0] }}"
                         alt="{{ $project->title }}"
                         class="w-full h-full object-contain object-center transition duration-700 ease-out group-hover:scale-[1.012]"
                         loading="eager">

                    {{-- Overlay hover --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-start p-6">
                        <span class="inline-flex items-center gap-2 text-white font-mono text-sm bg-black/60 backdrop-blur-md rounded-lg px-3 py-2 border border-white/20">
                            <span class="material-symbols-outlined" style="font-size:16px;">zoom_in</span>
                            {{ __('site.enlarge') }}
                        </span>
                    </div>

                    {{-- Label flottant --}}
                    <div class="absolute bottom-4 left-4">
                        <div class="inline-flex items-center gap-2 rounded-lg border border-white/15 bg-black/60 px-3 py-1.5 font-mono text-xs text-white backdrop-blur-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            {{ __('site.case_study') }} · {{ $project->title }}
                        </div>
                    </div>
                </div>

                {{-- Thumbnails galerie --}}
                @if(count($allImages) > 1)
                <div class="flex items-start gap-3 overflow-x-auto pb-2" id="gallery-strip" style="scrollbar-width: thin;">
                    @foreach($allImages as $idx => $imgUrl)
                        <button type="button"
                                data-img="{{ $imgUrl }}"
                                data-idx="{{ $idx }}"
                                onclick="selectGalleryImage(this)"
                                class="gallery-thumb flex-shrink-0 relative rounded-xl overflow-hidden border-2 transition-all duration-200 focus:outline-none
                                       {{ $idx === 0 ? 'active border-primary' : 'border-outline-variant/40 hover:border-primary/60' }}"
                                style="width: clamp(80px, 14vw, 120px); height: clamp(60px, 10vw, 90px);">
                            <img src="{{ $imgUrl }}"
                                 alt="{{ $project->title }} — {{ __('site.image_number', ['number' => $idx + 1]) }}"
                                 loading="lazy"
                                 class="w-full h-full object-cover">
                            {{-- Numéro --}}
                            <span class="absolute bottom-1 right-1 text-[9px] font-mono font-bold text-white bg-black/60 rounded px-1">{{ $idx + 1 }}/{{ count($allImages) }}</span>
                        </button>
                    @endforeach
                </div>
                @endif
            </div>
            @endif
        </section>
        @endif

        {{-- ─── STATS / OVERVIEW ROW ────────────────── --}}
        @if($project->challenge || $project->solution || $project->results)
        <section class="project-section mt-14 grid gap-5 md:grid-cols-3" style="transition-delay: 0.15s">
            @foreach([
                ['field' => 'challenge', 'icon' => 'problem', 'label' => __('site.challenge'), 'accent' => 'secondary', 'bg' => 'secondary'],
                ['field' => 'solution',  'icon' => 'architecture', 'label' => __('site.solution'), 'accent' => 'primary', 'bg' => 'primary'],
                ['field' => 'results',   'icon' => 'check_circle', 'label' => __('site.results'),  'accent' => 'emerald', 'bg' => 'emerald'],
            ] as $card)
                @if($project->{$card['field']})
                <article class="feature-card rounded-2xl border border-outline-variant/35 bg-surface-container-low/90 p-6 backdrop-blur-sm">
                    {{-- Icône accent --}}
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center
                            @if($card['accent'] === 'emerald') bg-emerald-500/15 @else bg-{{ $card['accent'] }}/15 @endif">
                            <span class="material-symbols-outlined
                                @if($card['accent'] === 'emerald') text-emerald-400 @else text-{{ $card['accent'] }} @endif
                            ">{{ $card['icon'] }}</span>
                        </div>
                        <h2 class="font-display text-base font-bold text-on-surface uppercase tracking-wide">{{ $card['label'] }}</h2>
                    </div>
                    <p class="whitespace-pre-line text-sm leading-7 text-on-surface-variant">{{ $project->{$card['field']} }}</p>
                </article>
                @endif
            @endforeach
        </section>
        @endif

        {{-- ─── DESCRIPTION FULL ────────────────────── --}}
        @if($project->description)
        <section class="project-section mt-10" style="transition-delay: 0.2s">
            <div class="rounded-2xl border border-outline-variant/35 bg-surface-container-low/70 p-7 md:p-10">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-9 h-9 rounded-xl bg-primary/15 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">article</span>
                    </div>
                    <h2 class="font-display text-xl font-bold text-on-surface">{{ __('site.project_overview') }}</h2>
                </div>
                <div class="prose prose-sm max-w-none text-on-surface-variant leading-8 whitespace-pre-line">
                    {{ $project->description }}
                </div>
            </div>
        </section>
        @endif

        {{-- ─── LIVE PREVIEW (iFrame) ──────────────── --}}
        @if($project->project_url)
        <section class="project-section mt-10" style="transition-delay: 0.25s">
            <div class="rounded-2xl border border-outline-variant/35 overflow-hidden bg-surface-container-lowest shadow-xl">
                {{-- Browser chrome --}}
                <div class="flex items-center gap-3 px-5 py-3 bg-surface-container border-b border-outline-variant/30">
                    <div class="flex gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-error/60"></span>
                        <span class="w-3 h-3 rounded-full bg-secondary/60"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500/60"></span>
                    </div>
                    <div class="flex-1 flex items-center gap-2 bg-surface-container-high/60 rounded-lg px-3 py-1.5 border border-outline-variant/30">
                        <span class="material-symbols-outlined text-outline" style="font-size:13px;">lock</span>
                        <span class="font-mono text-xs text-on-surface-variant truncate">{{ $project->project_url }}</span>
                    </div>
                    <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer"
                       class="text-on-surface-variant hover:text-primary transition-colors">
                        <span class="material-symbols-outlined" style="font-size:16px;">open_in_new</span>
                    </a>
                </div>
                {{-- Preview screenshot / placeholder --}}
                @if($primaryImage)
                    <div class="relative overflow-hidden cursor-pointer" style="height: clamp(240px, 42vw, 480px);"
                         onclick="openLightbox('{{ $primaryImage }}')">
                        <img src="{{ $primaryImage }}" alt="{{ __('site.preview') }} {{ $project->title }}"
                             class="w-full h-full object-cover object-top hover:scale-[1.015] transition duration-700">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/0 hover:bg-black/30 transition-all group">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity bg-black/70 backdrop-blur-md rounded-xl px-5 py-3 flex items-center gap-2 text-white font-mono text-sm border border-white/20">
                                <span class="material-symbols-outlined" style="font-size:18px;">zoom_in</span>
                                {{ __('site.view_large') }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        @endif

        {{-- ─── PROJECT METADATA FOOTER ─────────────── --}}
        @php($technologyCount = count($project->technologies ?? []))
        @php($imageCount = count($project->gallery_urls ?? []) + ($project->image_url ? 1 : 0))
        <section class="project-section mt-12" style="transition-delay: 0.3s">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                {{-- Categorie --}}
                <div class="rounded-xl border border-outline-variant/30 bg-surface-container-low/50 p-5 text-center">
                    <span class="material-symbols-outlined text-secondary block mb-2" style="font-size:22px;">category</span>
                    <div class="font-mono text-xs text-outline uppercase tracking-wider mb-1">{{ __('site.category') }}</div>
                    <div class="font-semibold text-sm text-on-surface">{{ $project->category ? __($project->category) : '—' }}</div>
                </div>
                {{-- Technologies count --}}
                <div class="rounded-xl border border-outline-variant/30 bg-surface-container-low/50 p-5 text-center">
                    <span class="material-symbols-outlined text-primary block mb-2" style="font-size:22px;">code_blocks</span>
                    <div class="font-mono text-xs text-outline uppercase tracking-wider mb-1">{{ __('site.technologies') }}</div>
                    <div class="font-semibold text-sm text-on-surface">{{ trans_choice('site.project_tools_count', $technologyCount, ['count' => $technologyCount]) }}</div>
                </div>
                {{-- Gallery count --}}
                <div class="rounded-xl border border-outline-variant/30 bg-surface-container-low/50 p-5 text-center">
                    <span class="material-symbols-outlined text-tertiary block mb-2" style="font-size:22px;">photo_library</span>
                    <div class="font-mono text-xs text-outline uppercase tracking-wider mb-1">{{ __('site.gallery') }}</div>
                    <div class="font-semibold text-sm text-on-surface">{{ trans_choice('site.project_images_count', $imageCount, ['count' => $imageCount]) }}</div>
                </div>
                {{-- Lien live --}}
                <div class="rounded-xl border border-outline-variant/30 bg-surface-container-low/50 p-5 text-center">
                    <span class="material-symbols-outlined text-emerald-400 block mb-2" style="font-size:22px;">public</span>
                    <div class="font-mono text-xs text-outline uppercase tracking-wider mb-1">{{ __('site.live_site') }}</div>
                    @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center justify-center gap-1 font-semibold text-sm text-emerald-400 hover:underline">
                            {{ __('site.visit') }} <span class="material-symbols-outlined" style="font-size:13px;">north_east</span>
                        </a>
                    @else
                        <div class="font-semibold text-sm text-outline">—</div>
                    @endif
                </div>
            </div>
        </section>

        {{-- ─── CTA BOTTOM ──────────────────────────── --}}
        <section class="project-section mt-16" style="transition-delay: 0.35s">
            <div class="relative overflow-hidden rounded-3xl border border-outline-variant/30 bg-surface-container p-8 md:p-12">
                {{-- Ambient glow --}}
                <div class="pointer-events-none absolute -top-20 -right-20 w-72 h-72 rounded-full bg-primary/8 blur-3xl"></div>
                <div class="pointer-events-none absolute -bottom-16 -left-16 w-56 h-56 rounded-full bg-secondary/8 blur-3xl"></div>

                <div class="relative flex flex-col md:flex-row items-center justify-between gap-8">
                    <div>
                        <div class="font-mono text-xs text-primary uppercase tracking-widest mb-3">{{ __('site.similar_project_prompt') }}</div>
                        <h3 class="font-display text-2xl md:text-3xl font-bold text-on-surface">{{ __('site.work_together') }}</h3>
                        <p class="mt-2 text-on-surface-variant max-w-md">{{ __('site.project_cta_desc') }}</p>
                    </div>
                    <div class="flex flex-wrap gap-3 shrink-0">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center gap-2 rounded-xl bg-primary px-6 py-3 font-semibold text-on-primary shadow-lg shadow-primary/25 hover:bg-primary/90 active:scale-95 transition-all duration-150">
                            <span class="material-symbols-outlined" style="font-size:18px;">mail</span>
                            {{ __('site.contact') }}
                        </a>
                        <a href="{{ route('projects') }}"
                           class="inline-flex items-center gap-2 rounded-xl border border-outline-variant/60 px-6 py-3 font-semibold text-on-surface hover:border-primary/50 hover:bg-surface-container-low active:scale-95 transition-all duration-150">
                            <span class="material-symbols-outlined" style="font-size:18px;">grid_view</span>
                            {{ __('site.see_all_projects') }}
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- ─── LIGHTBOX ─────────────────────────────────── --}}
    <div id="lightbox" role="dialog" aria-modal="true" aria-label="{{ __('site.image_viewer') }}"
         onclick="closeLightbox(event)">
        <div class="relative max-w-6xl w-full">
            <button onclick="closeLightbox(null)"
                    class="absolute -top-10 right-0 text-white/70 hover:text-white transition-colors font-mono text-sm flex items-center gap-1">
                <span class="material-symbols-outlined" style="font-size:20px;">close</span>
                {{ __('site.close_esc') }}
            </button>
            <img id="lightbox-img" src="" alt="">
        </div>
    </div>

    <script>
        // ── Gallery switcher ───────────────────────
        function selectGalleryImage(btn) {
            const url = btn.dataset.img;
            const mainImg = document.getElementById('project-main-image');
            if (mainImg) {
                mainImg.style.opacity = '0.6';
                mainImg.src = url;
                mainImg.onload = function () { mainImg.style.opacity = '1'; };
                mainImg.style.transition = 'opacity 0.25s';
            }
            document.querySelectorAll('.gallery-thumb').forEach(function(t) {
                t.classList.remove('active', 'border-primary');
                t.classList.add('border-outline-variant/40');
            });
            btn.classList.add('active', 'border-primary');
            btn.classList.remove('border-outline-variant/40');
        }

        // ── Lightbox ──────────────────────────────
        function openLightbox(src) {
            var lb = document.getElementById('lightbox');
            var img = document.getElementById('lightbox-img');
            if (!lb || !img) return;
            img.src = src;
            lb.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox(event) {
            if (event && event.target.id !== 'lightbox' && !event.target.closest('#lightbox > div > button')) return;
            var lb = document.getElementById('lightbox');
            if (lb) { lb.classList.remove('open'); document.body.style.overflow = ''; }
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') { closeLightbox(null); }
        });

        // ── Scroll reveal ─────────────────────────
        (function() {
            var sections = document.querySelectorAll('.project-section');
            if (!('IntersectionObserver' in window)) {
                sections.forEach(function(s) { s.classList.add('visible'); });
                return;
            }
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
            sections.forEach(function(s) { obs.observe(s); });
        })();
    </script>

</body>
</html>
