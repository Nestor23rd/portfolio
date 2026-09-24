<!DOCTYPE html>

<html class="dark" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ __('site.title_home') }}</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
@include('partials.theme-head')
@include('partials.full-width')
</head>
<body class="bg-surface text-on-surface font-body-md text-body-md antialiased selection:bg-primary selection:text-on-primary min-h-screen flex flex-col">

@include('partials.navigation')

<!-- MAIN CANVAS -->
<main class="flex-grow pt-16">

<!-- ==================== 1. HERO SECTION ==================== -->
<section class="relative min-h-[calc(100vh-4rem)] flex flex-col justify-between max-w-none px-6 md:px-12 py-12 md:py-16 overflow-hidden">
<!-- Subtle Grid Background -->
<div class="absolute inset-0 hero-dot-pattern [background-size:28px_28px] opacity-40 pointer-events-none -z-10"></div>
@include('partials.hero-globe', ['global' => true])
@include('partials.java-coffee')

<!-- Hero Content -->
<div class="relative z-10 grid grid-cols-1 gap-10 items-center flex-grow py-8 w-full max-w-7xl mx-auto">
<!-- Identity and presentation -->
<div class="lg:col-span-12 min-w-0 w-full flex flex-col items-start gap-6">
<!-- Badge -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/60 shadow-sm">
<span class="text-secondary font-code-md text-code-sm font-bold">&gt;_</span>
<span class="font-code-md text-code-sm text-primary tracking-wide">{{ __('site.backend_blockchain') }}</span>
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
</div>

<!-- Main Title -->
<h1 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface tracking-tight leading-tight">
    Kokoussè Nestor <br/>
    <span class="text-primary">KPADJA</span>
</h1>

<!-- Subtitle -->
<p class="font-body-lg text-body-md md:text-body-lg text-on-surface-variant max-w-3xl leading-relaxed">
    {{ __('site.hero_subtitle') }}
</p>

<!-- CTAs -->
<div class="flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3 pt-2 w-full sm:w-auto">
<a class="inline-flex items-center justify-center gap-2.5 bg-primary-container text-on-surface font-body-md text-label-md font-semibold px-6 py-3 rounded-lg shadow-[0_0_20px_rgba(77,142,255,0.35)] hover:bg-primary hover:text-on-primary transition-all duration-150 active:scale-95 group" href="{{ route('projects') }}">
<span>{{ __('site.see_projects') }}</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">east</span>
</a>
<a class="inline-flex items-center justify-center gap-2.5 bg-transparent border border-outline-variant/70 hover:border-primary text-on-surface hover:bg-surface-container-low font-body-md text-label-md font-medium px-6 py-3 rounded-lg transition-all duration-150 active:scale-95" href="{{ route('contact') }}">
<span class="material-symbols-outlined">mail</span>
<span>{{ __('site.contact') }}</span>
</a>
@if(!empty($siteSettings['cv_path']))<a class="inline-flex items-center justify-center gap-2.5 rounded-lg border border-secondary/50 px-6 py-3 font-body-md text-label-md font-semibold text-secondary transition hover:bg-secondary/10" href="{{ asset('storage/'.$siteSettings['cv_path']) }}" download><span class="material-symbols-outlined">download</span>{{ __('site.download_cv') }}</a>@endif
</div>

<!-- Location & Status -->
<div class="flex items-center gap-3 pt-4 border-t border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-emerald-400">location_on</span>
<span>Lomé, Togo</span>
</span>
<span class="text-outline-variant">•</span>
<span>{{ __('site.remote_hybrid') }}</span>
</div>
</div>

<!-- Key figures -->
<div class="lg:col-span-12 w-full mt-4">
@if(false)
<div class="reveal-card specular-card bg-surface-container-lowest border border-outline-variant/50 rounded-xl overflow-hidden shadow-2xl">
<!-- Terminal Header -->
<div class="flex items-center justify-between px-4 py-3 bg-surface-container border-b border-outline-variant/40">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-error/70"></span>
<span class="w-3 h-3 rounded-full bg-secondary/70"></span>
<span class="w-3 h-3 rounded-full bg-emerald-500/70"></span>
<span class="ml-2 font-code-sm text-code-sm text-on-surface-variant font-mono">~/portfolio/status.sh</span>
</div>
<span class="font-code-sm text-code-sm text-emerald-400 bg-surface-container-high px-2 py-0.5 rounded border border-outline-variant/30">ONLINE</span>
</div>

<!-- Terminal Content -->
<div class="p-5 font-code-md text-code-sm space-y-4 text-on-surface-variant bg-surface-container-lowest/90">
<!-- Status Header -->
<div class="flex items-center justify-between border-b border-outline-variant/20 pb-2">
<span class="text-primary flex items-center gap-1.5 font-semibold">
<span class="material-symbols-outlined text-[16px]">dns</span>
<span>PORTFOLIO_ENGINE</span>
</span>
<span class="text-emerald-400">ALL_SYSTEMS_OK</span>
</div>

<!-- Projets récents -->
@if($projects->count() > 0)
<div class="p-3 rounded-lg bg-surface-container-low border border-outline-variant/40">
<div class="flex items-center justify-between mb-2">
<span class="text-secondary font-mono font-bold text-[12px]">PROJETS RÉCENTS</span>
<span class="text-[10px] text-emerald-400">{{ $projects->count() }} publiés</span>
</div>
@foreach($projects->take(3) as $project)
<div class="flex items-center justify-between gap-2 {{ !$loop->last ? 'mb-1.5' : '' }}">
<div class="flex items-center gap-2 truncate">
<span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
<span class="text-on-surface text-[12px] truncate">{{ $project->title }}</span>
</div>
<span class="text-[10px] text-outline px-1.5 py-0.5 rounded bg-surface-container shrink-0 uppercase">{{ __($project->category ?? 'Projet') }}</span>
</div>
@endforeach
</div>
@endif

<!-- Stack technique -->
<div class="p-3 rounded-lg bg-surface-container-low border border-outline-variant/40">
<div class="flex items-center justify-between mb-2">
<span class="text-secondary font-mono font-bold text-[12px]">{{ app()->getLocale() === 'en' ? 'ACTIVE TECH STACK' : 'STACK TECHNIQUE ACTIVE' }}</span>
<span class="text-[10px] text-on-surface-variant">{{ $skills->count() }} skills</span>
</div>
<div class="flex flex-wrap gap-1.5">
@foreach($skills->pluck('name')->unique()->take(6) as $name)
<span class="text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-primary border border-primary/20">{{ $name }}</span>
@endforeach
</div>
</div>

<!-- Console Log -->
<div class="p-2.5 rounded bg-surface-dim font-code-sm text-[11px] leading-tight space-y-1 text-on-surface-variant border border-outline-variant/30">
<div class="flex items-center gap-2">
<span class="text-primary">&gt;&gt;</span>
<span>{{ __('site.skills') }} : {{ $skills->count() }} {{ __('site.telemetry_skills') }}</span>
</div>
<div class="flex items-center gap-2 text-secondary">
<span class="text-secondary">&gt;&gt;</span>
<span>{{ __('site.projects') }} : {{ $projects->count() }} {{ __('site.telemetry_projects') }}</span>
</div>
<div class="flex items-center gap-2 text-on-surface">
<span class="text-emerald-400">&gt;&gt;</span>
<span>{{ __('site.experience') }} : {{ $experiences->count() }} {{ __('site.telemetry_experiences') }}</span>
</div>
</div>
@endif
</div>

<!-- Bottom Metrics -->
<div class="grid grid-cols-3 w-full max-w-3xl rounded-xl border border-outline-variant/40 bg-surface-container-low/85 px-4 py-5 text-center font-code-sm text-code-sm shadow-lg backdrop-blur-sm">
<div>
<span class="text-on-surface-variant text-[10px] uppercase block">{{ __('site.projects') }}</span>
<span class="font-bold text-on-surface">{{ $projects->count() }}</span>
</div>
<div class="border-x border-outline-variant/30">
<span class="text-on-surface-variant text-[10px] uppercase block">{{ __('site.skills') }}</span>
<span class="font-bold text-primary">{{ $skills->count() }}</span>
</div>
<div>
<span class="text-on-surface-variant text-[10px] uppercase block">{{ __('site.experience') }}</span>
<span class="font-bold text-emerald-400">{{ $experiences->count() }}</span>
</div>
</div>
</div>
</div>
</div>

</section>

@include('partials.public-services')

<!-- ==================== 2. PROJETS À LA UNE ==================== -->
@if($projects->count() > 0)
<section class="max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-16 border-t border-outline-variant/20">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
<div>
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-surface-container border border-outline-variant/40 font-code-sm text-code-sm text-primary mb-3">
<span class="text-secondary font-bold">&gt;_</span>
<span>{{ __('site.featured_section') }}</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
    {{ __('site.featured_subtitle') }}
</h2>
</div>
<a href="{{ route('projects') }}" class="font-code-sm text-code-sm text-primary hover:underline flex items-center gap-1.5 group">
<span>{{ __('site.see_all_projects') }} ({{ $projects->count() }})</span>
<span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
@foreach($projects->take(3) as $proj)
<div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 flex flex-col justify-between hover:border-primary/50 transition-all duration-200 group">
<div>
<!-- Header -->
<div class="flex items-center justify-between gap-2 mb-4">
<span class="font-code-sm text-[11px] uppercase tracking-wider text-secondary px-2 py-0.5 rounded bg-surface-container border border-outline-variant/30">
    {{ __($proj->category ?? 'Projet') }}
</span>
@if($proj->is_featured)
<span class="font-code-sm text-[10px] text-emerald-400 bg-emerald-500/10 border border-emerald-500/30 px-2 py-0.5 rounded font-semibold">
    {{ app()->getLocale() === 'en' ? 'FEATURED' : 'VEDETTE' }}
</span>
@endif
</div>

<!-- Title -->
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2 group-hover:text-primary transition-colors">
    {{ __($proj->title) }}
</h3>

<!-- Excerpt -->
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-6">
    {{ __($proj->excerpt ?? \Illuminate\Support\Str::limit($proj->description, 110)) }}
</p>
</div>

<div>
<!-- Tech pills -->
@if(!empty($proj->technologies) && is_array($proj->technologies))
<div class="flex flex-wrap gap-1.5 mb-5 pt-3 border-t border-outline-variant/20">
@foreach(array_slice($proj->technologies, 0, 4) as $tech)
<span class="font-code-sm text-[11px] text-on-surface-variant px-2 py-0.5 rounded bg-surface-container/80 border border-outline-variant/30">
    {{ $tech }}
</span>
@endforeach
</div>
@endif

<!-- Action links -->
<div class="flex items-center justify-between pt-2 text-xs font-code-sm">
@if($proj->project_url)
<a href="{{ $proj->project_url }}" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline flex items-center gap-1">
<span>{{ app()->getLocale() === 'en' ? 'Visit website' : 'Accéder au site' }}</span>
<span class="material-symbols-outlined text-xs">north_east</span>
</a>
@else
<span class="text-outline">{{ app()->getLocale() === 'en' ? 'Deployed to production' : 'Déployé en production' }}</span>
@endif

@if($proj->repository_url)
<a href="{{ $proj->repository_url }}" target="_blank" rel="noopener noreferrer" class="text-on-surface-variant hover:text-on-surface flex items-center gap-1" title="Voir le code source">
<span class="material-symbols-outlined text-sm">code</span>
<span>{{ __('site.source_code') }}</span>
</a>
@endif
</div>
</div>
</div>
@endforeach
</div>
</section>
@endif

<!-- ==================== 3. CALL TO ACTION ==================== -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-16 border-t border-outline-variant/20">
<div class="reveal-card relative overflow-hidden rounded-2xl bg-surface-container-low border border-outline-variant/40 p-8 md:p-12">
<div class="absolute top-0 left-1/4 right-1/4 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
<div class="max-w-2xl space-y-3">
<div class="inline-flex items-center gap-2 text-secondary font-code-sm text-code-sm">
<span class="material-symbols-outlined text-[18px]">terminal</span>
<span>// {{ app()->getLocale() === 'en' ? 'ACTIVE_COLLABORATION' : 'COLLABORATION_ACTIVE' }}</span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">
    {{ __('site.home_cta_title') }}
</h2>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
    {{ __('site.home_cta_desc') }}
</p>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 shrink-0">
<a class="bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3.5 rounded-lg hover:bg-secondary-container transition-all duration-150 text-center shadow-lg active:scale-95 flex items-center justify-center gap-2" href="{{ route('contact') }}">
<span>{{ __('site.start_conversation') }}</span>
<span class="material-symbols-outlined text-[18px]">send</span>
</a>
@if(!empty($siteSettings['cv_path']))
<a class="inline-flex items-center justify-center gap-2 rounded-lg border border-primary/40 bg-primary/10 px-6 py-3.5 font-label-md text-label-md font-semibold text-primary transition hover:bg-primary/20" href="{{ asset('storage/'.$siteSettings['cv_path']) }}" download>
<span class="material-symbols-outlined text-[18px]">download</span>
<span>{{ __('site.download_cv') }}</span>
</a>
@endif
<a class="border border-outline-variant/60 text-on-surface hover:border-primary font-code-md text-code-md px-5 py-3.5 rounded-lg text-center transition-colors bg-surface-container hover:bg-surface-container-high" href="{{ route('about') }}">
{{ __('site.about') }} &gt;
</a>
</div>
</div>
</div>
</section>

</main>

<!-- FOOTER -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
<div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
<p class="font-body-sm text-body-sm text-on-surface-variant">
    © {{ date('Y') }} {{ $siteSettings['footer_text'] ?? 'Nestor KPADJA · Lomé, Togo' }}
</p>
<div class="flex items-center flex-wrap justify-center gap-6 font-code-sm text-code-sm">
@if(!empty($siteSettings['github_url']))
<a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ $siteSettings['github_url'] }}" rel="noopener noreferrer" target="_blank">GitHub</a>
@endif
@if(!empty($siteSettings['linkedin_url']))
<a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ $siteSettings['linkedin_url'] }}" rel="noopener noreferrer" target="_blank">LinkedIn</a>
@endif
@if(isset($socialLinks))
@foreach($socialLinks as $sLink)
<a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ $sLink->url }}" rel="noopener noreferrer" target="_blank">{{ $sLink->label }}</a>
@endforeach
@endif
<a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
</div>
</div>
</footer>

</body></html>
