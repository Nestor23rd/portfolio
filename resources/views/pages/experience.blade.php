<!DOCTYPE html>

<html class="dark" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ __('site.title_experience') }}</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS with custom config -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-secondary-fixed": "#2a1700",
            "on-tertiary-fixed-variant": "#723600",
            "secondary": "#ffb95f",
            "on-primary": "#002e6a",
            "on-surface-variant": "#c2c6d6",
            "secondary-container": "#ee9800",
            "on-primary-fixed-variant": "#004395",
            "primary": "#adc6ff",
            "on-secondary-container": "#5b3800",
            "inverse-on-surface": "#2a3040",
            "on-surface": "#dde2f8",
            "on-secondary": "#472a00",
            "on-tertiary-fixed": "#311400",
            "on-secondary-fixed-variant": "#653e00",
            "primary-container": "#4d8eff",
            "primary-fixed": "#d8e2ff",
            "secondary-fixed": "#ffddb8",
            "error": "#ffb4ab",
            "on-tertiary": "#502400",
            "surface-variant": "#2f3445",
            "on-primary-fixed": "#001a42",
            "error-container": "#93000a",
            "outline": "#8c909f",
            "surface-bright": "#33394a",
            "on-error": "#690005",
            "surface-dim": "#0d1322",
            "tertiary-container": "#df7412",
            "surface-container-high": "#242a3a",
            "tertiary": "#ffb786",
            "on-error-container": "#ffdad6",
            "surface-container": "#191f2f",
            "on-background": "#dde2f8",
            "surface-tint": "#adc6ff",
            "on-tertiary-container": "#461f00",
            "surface": "#0d1322",
            "tertiary-fixed": "#ffdcc6",
            "outline-variant": "#424754",
            "surface-container-low": "#151b2b",
            "on-primary-container": "#00285d",
            "surface-container-highest": "#2f3445",
            "background": "#0d1322",
            "primary-fixed-dim": "#adc6ff",
            "secondary-fixed-dim": "#ffb95f",
            "inverse-primary": "#005ac2",
            "inverse-surface": "#dde2f8",
            "tertiary-fixed-dim": "#ffb786",
            "surface-container-lowest": "#080e1d"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "margin-mobile": "1.25rem",
            "space-2xl": "4rem",
            "space-md": "1rem",
            "space-xs": "0.25rem",
            "space-sm": "0.5rem",
            "margin": "3rem",
            "space-xl": "2.5rem",
            "space-lg": "1.5rem",
            "gutter": "1.5rem",
            "gutter-mobile": "1rem"
          },
          "fontFamily": {
            "body-sm": ["Inter"],
            "headline-xl-mobile": ["Space Grotesk"],
            "headline-lg": ["Space Grotesk"],
            "code-sm": ["JetBrains Mono"],
            "headline-lg-mobile": ["Space Grotesk"],
            "body-md": ["Inter"],
            "body-lg": ["Inter"],
            "headline-sm": ["Space Grotesk"],
            "headline-md": ["Space Grotesk"],
            "code-lg": ["JetBrains Mono"],
            "label-md": ["Inter"],
            "headline-xl": ["Space Grotesk"],
            "code-md": ["JetBrains Mono"],
            "label-sm": ["JetBrains Mono"]
          },
          "fontSize": {
            "body-sm": ["13px", {"lineHeight": "20px", "fontWeight": "400"}],
            "headline-xl-mobile": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
            "headline-lg": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
            "code-sm": ["11px", {"lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500"}],
            "headline-lg-mobile": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
            "body-md": ["15px", {"lineHeight": "24px", "fontWeight": "400"}],
            "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
            "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
            "headline-md": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "code-lg": ["15px", {"lineHeight": "22px", "fontWeight": "500"}],
            "label-md": ["13px", {"lineHeight": "16px", "fontWeight": "500"}],
            "headline-xl": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700"}],
            "code-md": ["13px", {"lineHeight": "18px", "fontWeight": "500"}],
            "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600"}]
          }
        }
      }
    }
  </script>
<style>
    .terminal-grid {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(66, 71, 84, 0.08) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(66, 71, 84, 0.08) 1px, transparent 1px);
    }
    .specular-card {
      position: relative;
    }
    .specular-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 15%;
      right: 15%;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(173, 198, 255, 0.35), transparent);
      opacity: 0;
      transition: opacity 0.25s ease-in-out;
    }
    .specular-card:hover::before {
      opacity: 1;
    }
    @keyframes pulse-dot {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(0.85); }
    }
    .status-pulse {
      animation: pulse-dot 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    @keyframes cursor-blink {
      0%, 49% { opacity: 1; }
      50%, 100% { opacity: 0; }
    }
    .cursor-blink {
      animation: cursor-blink 1s infinite;
    }
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
      font-size: 1.25rem;
      line-height: 1;
      display: inline-block;
      vertical-align: middle;
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col selection:bg-primary selection:text-on-primary antialiased relative terminal-grid">

@include('partials.navigation')

<!-- Ambient Light Orbs -->
<div class="fixed top-20 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-primary-container/10 blur-[130px] pointer-events-none rounded-full -z-10"></div>
<div class="fixed bottom-40 right-10 w-[500px] h-[300px] bg-secondary-container/10 blur-[140px] pointer-events-none rounded-full -z-10"></div>

<!-- Main Canvas Container -->
<main class="flex-grow pt-28 pb-20 max-w-7xl mx-auto px-6 md:px-12 w-full">

    <!-- Hero / Header Section -->
    <section class="mb-16 md:mb-20">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-outline-variant/30 pb-10">
            <div class="space-y-4 max-w-3xl">
                <!-- Terminal Sub-badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-surface-container-high border border-outline-variant/50 text-primary font-code-sm text-code-sm">
                    <span class="text-secondary">&gt;_</span>
                    <span>{{ __('site.exp_tag') }}</span>
                    <span class="inline-block w-1.5 h-3.5 bg-primary cursor-blink ml-0.5"></span>
                </div>
                <!-- Page Title -->
                <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
                    {{ __('site.journey_experience') }}
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    {{ __('site.experience_intro') }}
                </p>
            </div>

            <!-- Terminal Status Metadata -->
            <div class="flex flex-col items-start md:items-end gap-2 font-code-sm text-code-sm text-outline p-4 bg-surface-container-lowest/90 rounded-lg border border-outline-variant/40 shrink-0">
                <div class="flex items-center gap-2 text-on-surface">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 status-pulse"></span>
                    <span class="font-bold tracking-wider">{{ __('HISTORIQUE VÉRIFIÉ') }}</span>
                </div>
                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span>{{ $experiences->count() }} {{ app()->getLocale() === 'en' ? 'milestone(s) recorded' : 'jalon(s) enregistré(s)' }}</span>
                    @if($experiences->where('is_current', true)->count() > 0)
                    <span class="text-outline-variant">|</span>
                    <span class="text-emerald-400 font-semibold">{{ $experiences->where('is_current', true)->count() }} {{ __('site.current_position') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="relative">
        <!-- Center Vertical Gradient Line -->
        <div class="absolute left-4 md:left-1/2 top-4 bottom-10 w-0.5 -translate-x-1/2 bg-gradient-to-b from-primary via-primary-container to-secondary pointer-events-none opacity-80"></div>

        <div class="space-y-12 md:space-y-16">
            @forelse($experiences as $index => $exp)
            @php
                $isAcademic = ($exp->company === 'Formation') || \Illuminate\Support\Str::contains(mb_strtolower($exp->role), ['licence', 'baccalauréat', 'bac', 'formation', 'diplôme', 'master', 'université', 'école', 'cursus']);
                $iconName = $isAcademic ? 'school' : ($exp->is_current ? 'deployed_code' : 'apartment');
                $isOdd = ($loop->iteration % 2 !== 0);
            @endphp

            <div class="relative flex flex-col md:flex-row items-start md:items-center w-full">
                <!-- Central Node Icon -->
                <div class="absolute left-4 md:left-1/2 -translate-x-1/2 flex items-center justify-center z-10">
                    <div class="w-9 h-9 rounded-full bg-surface-container-lowest border-2 {{ $exp->is_current ? 'border-emerald-400 shadow-[0_0_16px_rgba(52,211,153,0.4)]' : ($isAcademic ? 'border-outline shadow-md' : 'border-primary shadow-[0_0_16px_rgba(77,142,255,0.3)]') }} flex items-center justify-center">
                        <span class="material-symbols-outlined {{ $exp->is_current ? 'text-emerald-400' : ($isAcademic ? 'text-on-surface-variant' : 'text-primary') }} text-base">
                            {{ $iconName }}
                        </span>
                    </div>
                </div>

                @if($isOdd)
                    <!-- Card on Left Column on Desktop -->
                    <div class="ml-12 md:ml-0 md:w-1/2 md:pr-12 w-full">
                        <div class="specular-card bg-surface-container-low border {{ $exp->is_current ? 'border-emerald-500/40 hover:border-emerald-400' : 'border-outline-variant/50 hover:border-primary/40' }} p-6 md:p-7 rounded-xl transition-all duration-200 relative overflow-hidden">
                            @if($exp->is_current)
                            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 blur-2xl pointer-events-none"></div>
                            @endif

                            <!-- Meta Header -->
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-surface-container-high border border-outline-variant/60 font-code-sm text-code-sm {{ $exp->is_current ? 'text-emerald-400 border-emerald-500/30' : 'text-primary' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $exp->is_current ? 'bg-emerald-400 status-pulse' : 'bg-primary' }}"></span>
                                    <span>
                                        {{ $exp->start_date ? $exp->start_date->translatedFormat('M Y') : '' }}
                                        →
                                        {{ $exp->is_current ? __('Présent') : ($exp->end_date ? $exp->end_date->translatedFormat('M Y') : __('Présent')) }}
                                    </span>
                                </div>

                                @if($exp->is_current)
                                <span class="font-code-sm text-code-sm text-emerald-400 font-semibold tracking-wider bg-emerald-950/40 border border-emerald-800/50 px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                    {{ __('EN COURS') }}
                                </span>
                                @elseif($isAcademic)
                                <span class="font-code-sm text-code-sm text-on-surface-variant font-semibold tracking-wider bg-surface-container px-2 py-0.5 rounded border border-outline-variant/30">
                                    {{ __('CURSUS') }}
                                </span>
                                @else
                                <span class="font-code-sm text-code-sm text-primary font-semibold tracking-wider bg-primary/10 border border-primary/20 px-2 py-0.5 rounded">
                                    {{ __('TERMINÉ') }}
                                </span>
                                @endif
                            </div>

                            <!-- Titles -->
                            <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">
                                {{ __($exp->role) }}
                            </h2>
                            @if($exp->company || $exp->location)
                            <div class="font-code-md text-code-md {{ $exp->is_current ? 'text-secondary' : 'text-on-surface-variant' }} mb-4 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm">{{ $isAcademic ? 'school' : 'business_center' }}</span>
                                <span>{{ __($exp->company ?: 'Indépendant') }}{{ $exp->location ? ' • ' . __($exp->location) : '' }}</span>
                            </div>
                            @endif

                            <!-- Body Description -->
                            <p class="font-body-md text-body-md text-on-surface-variant mb-5 leading-relaxed">
                                {{ __($exp->description) }}
                            </p>

                            <!-- Tech Badges -->
                            @if(!empty($exp->technologies) && is_array($exp->technologies) && count($exp->technologies) > 0)
                            <div class="flex flex-wrap gap-2 pt-3 border-t border-outline-variant/30">
                                @foreach($exp->technologies as $tech)
                                <span class="font-code-sm text-code-sm text-on-surface-variant bg-surface-container-high/60 border border-outline-variant/40 px-2.5 py-1 rounded-md">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2"></div>
                @else
                    <!-- Card on Right Column on Desktop -->
                    <div class="hidden md:block md:w-1/2"></div>
                    <div class="ml-12 md:ml-0 md:w-1/2 md:pl-12 w-full">
                        <div class="specular-card bg-surface-container-low border {{ $exp->is_current ? 'border-emerald-500/40 hover:border-emerald-400' : 'border-outline-variant/50 hover:border-primary/40' }} p-6 md:p-7 rounded-xl transition-all duration-200 relative overflow-hidden">
                            @if($exp->is_current)
                            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 blur-2xl pointer-events-none"></div>
                            @endif

                            <!-- Meta Header -->
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-md bg-surface-container-high border border-outline-variant/60 font-code-sm text-code-sm {{ $exp->is_current ? 'text-emerald-400 border-emerald-500/30' : 'text-primary' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $exp->is_current ? 'bg-emerald-400 status-pulse' : 'bg-primary' }}"></span>
                                    <span>
                                        {{ $exp->start_date ? $exp->start_date->translatedFormat('M Y') : '' }}
                                        →
                                        {{ $exp->is_current ? __('Présent') : ($exp->end_date ? $exp->end_date->translatedFormat('M Y') : __('Présent')) }}
                                    </span>
                                </div>

                                @if($exp->is_current)
                                <span class="font-code-sm text-code-sm text-emerald-400 font-semibold tracking-wider bg-emerald-950/40 border border-emerald-800/50 px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                    {{ __('EN COURS') }}
                                </span>
                                @elseif($isAcademic)
                                <span class="font-code-sm text-code-sm text-on-surface-variant font-semibold tracking-wider bg-surface-container px-2 py-0.5 rounded border border-outline-variant/30">
                                    {{ __('CURSUS') }}
                                </span>
                                @else
                                <span class="font-code-sm text-code-sm text-primary font-semibold tracking-wider bg-primary/10 border border-primary/20 px-2 py-0.5 rounded">
                                    {{ __('TERMINÉ') }}
                                </span>
                                @endif
                            </div>

                            <!-- Titles -->
                            <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">
                                {{ __($exp->role) }}
                            </h2>
                            @if($exp->company || $exp->location)
                            <div class="font-code-md text-code-md {{ $exp->is_current ? 'text-secondary' : 'text-on-surface-variant' }} mb-4 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm">{{ $isAcademic ? 'school' : 'business_center' }}</span>
                                <span>{{ __($exp->company ?: 'Indépendant') }}{{ $exp->location ? ' • ' . __($exp->location) : '' }}</span>
                            </div>
                            @endif

                            <!-- Body Description -->
                            <p class="font-body-md text-body-md text-on-surface-variant mb-5 leading-relaxed">
                                {{ __($exp->description) }}
                            </p>

                            <!-- Tech Badges -->
                            @if(!empty($exp->technologies) && is_array($exp->technologies) && count($exp->technologies) > 0)
                            <div class="flex flex-wrap gap-2 pt-3 border-t border-outline-variant/30">
                                @foreach($exp->technologies as $tech)
                                <span class="font-code-sm text-code-sm text-on-surface-variant bg-surface-container-high/60 border border-outline-variant/40 px-2.5 py-1 rounded-md">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            @empty
            <div class="specular-card bg-surface-container-low border border-dashed border-outline-variant/60 rounded-xl p-12 text-center max-w-xl mx-auto">
                <span class="material-symbols-outlined text-4xl text-outline mb-3">work_outline</span>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">{{ __('site.no_experience') }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ app()->getLocale() === 'en' ? 'Published experiences from the admin dashboard will appear here.' : 'Les expériences publiées depuis le tableau de bord d\'administration apparaîtront ici.' }}</p>
            </div>
            @endforelse
        </div>
    </section>

    <!-- Bottom Collaboration Callout -->
    <section class="mt-24">
        <div class="specular-card bg-surface-container-low border border-outline-variant/60 rounded-xl p-8 md:p-12 relative overflow-hidden">
            <div class="flex items-center justify-between border-b border-outline-variant/30 pb-4 mb-8">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-error/80 inline-block"></span>
                    <span class="w-3 h-3 rounded-full bg-secondary/80 inline-block"></span>
                    <span class="w-3 h-3 rounded-full bg-primary/80 inline-block"></span>
                    <span class="font-code-sm text-code-sm text-primary ml-3 font-semibold">&gt;_ {{ app()->getLocale() === 'en' ? 'AVAILABLE_FOR_COLLABORATION' : 'COLLABORATION_DISPONIBLE' }}</span>
                </div>
                <span class="font-code-sm text-code-sm text-emerald-400 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    {{ app()->getLocale() === 'en' ? 'AVAILABLE FOR MISSIONS' : 'DISPONIBLE POUR MISSIONS' }}
                </span>
            </div>

            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                <div class="max-w-2xl space-y-3">
                    <h3 class="font-headline-md text-headline-md text-on-surface tracking-tight font-bold">
                        {{ __('site.exp_cta_title') }}
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        {{ __('site.exp_cta_desc') }}
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-4 w-full lg:w-auto">
                    <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3 rounded-lg hover:bg-secondary-container transition-all active:scale-95 shadow-md duration-150" href="{{ route('contact') }}">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        <span>{{ __('site.contact') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
        <div class="space-y-1 text-center md:text-left">
            <p class="font-body-sm text-body-sm text-on-surface-variant">
                © {{ date('Y') }} {{ $siteSettings['footer_text'] ?? 'Nestor KPADJA · Lomé, Togo' }}
            </p>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-6 font-code-sm text-code-sm">
            @if(!empty($siteSettings['github_url']))
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-150" href="{{ $siteSettings['github_url'] }}" rel="noopener noreferrer" target="_blank">GitHub</a>
            @endif
            @if(!empty($siteSettings['linkedin_url']))
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-150" href="{{ $siteSettings['linkedin_url'] }}" rel="noopener noreferrer" target="_blank">LinkedIn</a>
            @endif
            @if(isset($socialLinks))
            @foreach($socialLinks as $sLink)
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-150" href="{{ $sLink->url }}" rel="noopener noreferrer" target="_blank">{{ $sLink->label }}</a>
            @endforeach
            @endif
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-150" href="{{ route('contact') }}">{{ __('site.contact_short') }}</a>
        </div>
    </div>
</footer>

</body></html>
