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
@include('partials.theme-head')
<style>
    /* Experience-specific animations */
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
  </style>
@include('partials.full-width')
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col selection:bg-primary selection:text-on-primary antialiased relative terminal-grid overflow-x-hidden">

@include('partials.navigation')

<!-- Ambient Light Orbs -->
<div class="fixed top-20 left-1/2 -translate-x-1/2 w-[320px] sm:w-[500px] md:w-[700px] h-[250px] md:h-[350px] bg-primary-container/10 blur-[100px] md:blur-[130px] pointer-events-none rounded-full -z-10"></div>
<div class="fixed bottom-40 right-4 sm:right-10 w-[260px] sm:w-[400px] md:w-[500px] h-[200px] md:h-[300px] bg-secondary-container/10 blur-[100px] md:blur-[140px] pointer-events-none rounded-full -z-10"></div>

<!-- Main Canvas Container -->
<main class="flex-grow pt-24 sm:pt-28 pb-16 sm:pb-20 max-w-7xl mx-auto px-4 sm:px-6 md:px-12 w-full">

    <!-- Hero / Header Section -->
    <section class="mb-12 sm:mb-16 md:mb-20">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-outline-variant/30 pb-8 sm:pb-10">
            <div class="space-y-3 sm:space-y-4 max-w-3xl">
                <!-- Terminal Sub-badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-surface-container-high border border-outline-variant/50 text-primary font-code-sm text-code-sm">
                    <span class="text-secondary">&gt;_</span>
                    <span>{{ __('site.exp_tag') }}</span>
                    <span class="inline-block w-1.5 h-3.5 bg-primary cursor-blink ml-0.5"></span>
                </div>
                <!-- Page Title -->
                <h1 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface tracking-tight">
                    {{ __('site.journey_experience') }}
                </h1>
                <p class="font-body-md sm:font-body-lg text-body-md sm:text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
                    {{ __('site.experience_intro') }}
                </p>
            </div>

            <!-- Terminal Status Metadata -->
            <div class="flex flex-col sm:flex-row md:flex-col items-start md:items-end justify-between sm:justify-start gap-2 font-code-sm text-xs sm:text-code-sm text-outline p-3.5 sm:p-4 bg-surface-container-lowest/90 rounded-lg border border-outline-variant/40 shrink-0 w-full md:w-auto">
                <div class="flex items-center gap-2 text-on-surface">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 status-pulse"></span>
                    <span class="font-bold tracking-wider">{{ __('site.verified_timeline') }}</span>
                </div>
                <div class="flex flex-wrap items-center gap-2 sm:gap-3 text-on-surface-variant">
                    <span>{{ $experiences->count() }} {{ __('site.milestones_recorded') }}</span>
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
        <!-- Vertical Gradient Line (Mobile: left-4 / Desktop: center left-1/2) -->
        <div class="absolute left-4 sm:left-5 md:left-1/2 top-4 bottom-10 w-0.5 -translate-x-1/2 bg-gradient-to-b from-primary via-primary-container to-secondary pointer-events-none opacity-80"></div>

        <div class="space-y-8 sm:space-y-12 md:space-y-16">
            @forelse($experiences as $index => $exp)
            @php
                $isAcademic = ($exp->company === 'Formation') || \Illuminate\Support\Str::contains(mb_strtolower($exp->role), ['licence', 'baccalauréat', 'bac', 'formation', 'diplôme', 'master', 'université', 'école', 'cursus']);
                $iconName = $isAcademic ? 'school' : ($exp->is_current ? 'deployed_code' : 'apartment');
                $isOdd = ($loop->iteration % 2 !== 0);
            @endphp

            <div class="relative flex flex-col md:flex-row items-start md:items-center w-full">
                <!-- Node Icon (Mobile: aligned with top badge at left-4 / Desktop: centered at md:left-1/2) -->
                <div class="absolute left-4 sm:left-5 md:left-1/2 -translate-x-1/2 top-5 sm:top-6 md:top-1/2 md:-translate-y-1/2 flex items-center justify-center z-10">
                    <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-surface-container-lowest border-2 {{ $exp->is_current ? 'border-emerald-400 shadow-[0_0_16px_rgba(52,211,153,0.4)]' : ($isAcademic ? 'border-outline shadow-md' : 'border-primary shadow-[0_0_16px_rgba(77,142,255,0.3)]') }} flex items-center justify-center">
                        <span class="material-symbols-outlined {{ $exp->is_current ? 'text-emerald-400' : ($isAcademic ? 'text-on-surface-variant' : 'text-primary') }} text-sm sm:text-base">
                            {{ $iconName }}
                        </span>
                    </div>
                </div>

                @if($isOdd)
                    <!-- Left Column on Desktop / Full width with left padding on Mobile -->
                    <div class="w-full pl-9 sm:pl-12 md:pl-0 md:w-1/2 md:pr-8 lg:pr-12">
                        <div class="specular-card bg-surface-container-low border {{ $exp->is_current ? 'border-emerald-500/40 hover:border-emerald-400' : 'border-outline-variant/50 hover:border-primary/40' }} p-5 sm:p-6 md:p-7 rounded-xl transition-all duration-200 relative overflow-hidden">
                            @if($exp->is_current)
                            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 blur-2xl pointer-events-none"></div>
                            @endif

                            <!-- Meta Header -->
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                <div class="inline-flex items-center gap-1.5 sm:gap-2 px-2.5 py-1 rounded-md bg-surface-container-high border border-outline-variant/60 font-code-sm text-xs sm:text-code-sm {{ $exp->is_current ? 'text-emerald-400 border-emerald-500/30' : 'text-primary' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $exp->is_current ? 'bg-emerald-400 status-pulse' : 'bg-primary' }}"></span>
                                    <span>
                                        {{ $exp->start_date ? $exp->start_date->translatedFormat('M Y') : '' }}
                                        →
                                        {{ $exp->is_current ? __('site.present') : ($exp->end_date ? $exp->end_date->translatedFormat('M Y') : __('site.present')) }}
                                    </span>
                                </div>

                                @if($exp->is_current)
                                <span class="font-code-sm text-xs sm:text-code-sm text-emerald-400 font-semibold tracking-wider bg-emerald-950/40 border border-emerald-800/50 px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                    {{ __('site.in_progress') }}
                                </span>
                                @elseif($isAcademic)
                                <span class="font-code-sm text-xs sm:text-code-sm text-on-surface-variant font-semibold tracking-wider bg-surface-container px-2 py-0.5 rounded border border-outline-variant/30">
                                    {{ __('site.academic_curriculum') }}
                                </span>
                                @else
                                <span class="font-code-sm text-xs sm:text-code-sm text-primary font-semibold tracking-wider bg-primary/10 border border-primary/20 px-2 py-0.5 rounded">
                                    {{ __('site.completed') }}
                                </span>
                                @endif
                            </div>

                            <!-- Titles -->
                            <h2 class="font-headline-sm text-lg sm:text-headline-sm text-on-surface font-bold mb-1 leading-snug">
                                {{ __($exp->role) }}
                            </h2>
                            @if($exp->company || $exp->location)
                            <div class="font-code-md text-xs sm:text-code-md {{ $exp->is_current ? 'text-secondary' : 'text-on-surface-variant' }} mb-3 sm:mb-4 flex flex-wrap items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm">{{ $isAcademic ? 'school' : 'business_center' }}</span>
                                <span>{{ __($exp->company ?: __('site.independent_project')) }}{{ $exp->location ? ' • ' . __($exp->location) : '' }}</span>
                            </div>
                            @endif

                            <!-- Body Description -->
                            <p class="font-body-md text-sm sm:text-body-md text-on-surface-variant mb-4 sm:mb-5 leading-relaxed">
                                {{ __($exp->description) }}
                            </p>

                            <!-- Tech Badges -->
                            @if(!empty($exp->technologies) && is_array($exp->technologies) && count($exp->technologies) > 0)
                            <div class="flex flex-wrap gap-1.5 sm:gap-2 pt-3 border-t border-outline-variant/30">
                                @foreach($exp->technologies as $tech)
                                <span class="font-code-sm text-xs text-on-surface-variant bg-surface-container-high/60 border border-outline-variant/40 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2"></div>
                @else
                    <!-- Right Column on Desktop / Full width with left padding on Mobile -->
                    <div class="hidden md:block md:w-1/2"></div>
                    <div class="w-full pl-9 sm:pl-12 md:pl-8 lg:pl-12 md:w-1/2">
                        <div class="specular-card bg-surface-container-low border {{ $exp->is_current ? 'border-emerald-500/40 hover:border-emerald-400' : 'border-outline-variant/50 hover:border-primary/40' }} p-5 sm:p-6 md:p-7 rounded-xl transition-all duration-200 relative overflow-hidden">
                            @if($exp->is_current)
                            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 blur-2xl pointer-events-none"></div>
                            @endif

                            <!-- Meta Header -->
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                <div class="inline-flex items-center gap-1.5 sm:gap-2 px-2.5 py-1 rounded-md bg-surface-container-high border border-outline-variant/60 font-code-sm text-xs sm:text-code-sm {{ $exp->is_current ? 'text-emerald-400 border-emerald-500/30' : 'text-primary' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $exp->is_current ? 'bg-emerald-400 status-pulse' : 'bg-primary' }}"></span>
                                    <span>
                                        {{ $exp->start_date ? $exp->start_date->translatedFormat('M Y') : '' }}
                                        →
                                        {{ $exp->is_current ? __('site.present') : ($exp->end_date ? $exp->end_date->translatedFormat('M Y') : __('site.present')) }}
                                    </span>
                                </div>

                                @if($exp->is_current)
                                <span class="font-code-sm text-xs sm:text-code-sm text-emerald-400 font-semibold tracking-wider bg-emerald-950/40 border border-emerald-800/50 px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                    {{ __('site.in_progress') }}
                                </span>
                                @elseif($isAcademic)
                                <span class="font-code-sm text-xs sm:text-code-sm text-on-surface-variant font-semibold tracking-wider bg-surface-container px-2 py-0.5 rounded border border-outline-variant/30">
                                    {{ __('site.academic_curriculum') }}
                                </span>
                                @else
                                <span class="font-code-sm text-xs sm:text-code-sm text-primary font-semibold tracking-wider bg-primary/10 border border-primary/20 px-2 py-0.5 rounded">
                                    {{ __('site.completed') }}
                                </span>
                                @endif
                            </div>

                            <!-- Titles -->
                            <h2 class="font-headline-sm text-lg sm:text-headline-sm text-on-surface font-bold mb-1 leading-snug">
                                {{ __($exp->role) }}
                            </h2>
                            @if($exp->company || $exp->location)
                            <div class="font-code-md text-xs sm:text-code-md {{ $exp->is_current ? 'text-secondary' : 'text-on-surface-variant' }} mb-3 sm:mb-4 flex flex-wrap items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm">{{ $isAcademic ? 'school' : 'business_center' }}</span>
                                <span>{{ __($exp->company ?: __('site.independent_project')) }}{{ $exp->location ? ' • ' . __($exp->location) : '' }}</span>
                            </div>
                            @endif

                            <!-- Body Description -->
                            <p class="font-body-md text-sm sm:text-body-md text-on-surface-variant mb-4 sm:mb-5 leading-relaxed">
                                {{ __($exp->description) }}
                            </p>

                            <!-- Tech Badges -->
                            @if(!empty($exp->technologies) && is_array($exp->technologies) && count($exp->technologies) > 0)
                            <div class="flex flex-wrap gap-1.5 sm:gap-2 pt-3 border-t border-outline-variant/30">
                                @foreach($exp->technologies as $tech)
                                <span class="font-code-sm text-xs text-on-surface-variant bg-surface-container-high/60 border border-outline-variant/40 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md">
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
            <div class="specular-card bg-surface-container-low border border-dashed border-outline-variant/60 rounded-xl p-8 sm:p-12 text-center max-w-xl mx-auto">
                <span class="material-symbols-outlined text-4xl text-outline mb-3">work_outline</span>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">{{ __('site.no_experience') }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ app()->getLocale() === 'en' ? 'Published experiences from the admin dashboard will appear here.' : 'Les expériences publiées depuis le tableau de bord d\'administration apparaîtront ici.' }}</p>
            </div>
            @endforelse
        </div>
    </section>

    <!-- Bottom Collaboration Callout -->
    <section class="mt-16 sm:mt-20 md:mt-24">
        <div class="specular-card bg-surface-container-low border border-outline-variant/60 rounded-xl p-5 sm:p-8 md:p-12 relative overflow-hidden">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-outline-variant/30 pb-4 mb-6 sm:mb-8">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-error/80 inline-block"></span>
                    <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-secondary/80 inline-block"></span>
                    <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-primary/80 inline-block"></span>
                    <span class="font-code-sm text-xs sm:text-code-sm text-primary ml-2 sm:ml-3 font-semibold">&gt;_ {{ __('site.available_collaboration') }}</span>
                </div>
                <span class="font-code-sm text-xs sm:text-code-sm text-emerald-400 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    {{ __('site.available_missions') }}
                </span>
            </div>

            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 sm:gap-8">
                <div class="max-w-2xl space-y-2 sm:space-y-3">
                    <h3 class="font-headline-md text-xl sm:text-headline-md text-on-surface tracking-tight font-bold">
                        {{ __('site.exp_cta_title') }}
                    </h3>
                    <p class="font-body-md text-sm sm:text-body-md text-on-surface-variant leading-relaxed">
                        {{ __('site.exp_cta_desc') }}
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full lg:w-auto shrink-0">
                    <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3 rounded-lg hover:bg-secondary-container transition-all active:scale-95 shadow-md duration-150 text-center" href="{{ route('contact') }}">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 py-8 sm:py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
        <div class="space-y-1 text-center md:text-left">
            <p class="font-body-sm text-body-sm text-on-surface-variant">
                © {{ date('Y') }} {{ $siteSettings['footer_text'] ?? 'Nestor KPADJA · Lomé, Togo' }}
            </p>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 font-code-sm text-xs sm:text-code-sm">
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
