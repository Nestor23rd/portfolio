<!DOCTYPE html>

<html class="dark" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ __('site.title_skills') }}</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
@include('partials.theme-head')
<style>
    /* Skills-specific animations */
    @keyframes console-blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0; }
    }
    .console-cursor {
      animation: console-blink 1.06s infinite step-start;
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-background text-on-surface font-body-md text-body-md min-h-screen selection:bg-primary selection:text-on-primary-container bg-grid-engineer relative antialiased flex flex-col">

@include('partials.navigation')
@include('partials.hero-globe', ['global' => true])
@include('partials.java-coffee')

<!-- ========================================================================= -->
<!-- Main Content Canvas -->
<!-- ========================================================================= -->
<main class="flex-grow pt-28 pb-20 w-full max-w-7xl mx-auto px-6 md:px-12">

<!-- 1. Section Header -->
<section class="mb-14">
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-8 border-b border-outline-variant/30">
<div class="space-y-3">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-surface-container-low border border-outline-variant/40">
<span class="text-primary font-code-sm text-code-sm tracking-wide">{{ __('site.technical_skills') }}</span>
</div>
<h1 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface tracking-tight">
            {{ __('site.technical_skills') }}
</h1>
<p class="text-on-surface-variant font-body-lg text-body-lg max-w-2xl">
            {{ __('site.skills_intro') }}
          </p>
</div>
<div class="flex flex-col items-start lg:items-end gap-2 shrink-0">
<div class="flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 font-code-sm text-code-sm text-on-surface-variant shadow-inner">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="text-outline font-normal">STATUS:</span>
<span class="text-on-surface font-semibold">ACTIVE_TOOLCHAIN</span>
</div>
<p class="font-code-sm text-code-sm text-outline">
            {{ $skills->count() }} {{ __('site.stat_skills') }} · {{ $skills->pluck('category')->unique()->count() }} {{ app()->getLocale() === 'en' ? 'categories' : 'catégories' }}
          </p>
</div>
</div>
</section>

<!-- 2. Technical Skills Grid (dynamique depuis la DB) -->
@php
    $categoryIcons = [
        'Langages' => 'code',
        'Frameworks' => 'deployed_code',
        'Data & Infra' => 'database',
        'Workflow' => 'schema',
    ];
    $groupedSkills = $skills->groupBy('category');
@endphp

<section class="mb-20">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-{{ min($groupedSkills->count(), 4) }} gap-6">

@foreach($groupedSkills as $category => $categorySkills)
<div class="reveal-card card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 hover:border-primary/40 group" style="--stagger: {{ $loop->index }};">
<div>
<!-- Column Header -->
<div class="flex items-center justify-between pb-4 mb-5 border-b border-outline-variant/30">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 group-hover:border-primary/50 transition-colors">
<span class="material-symbols-outlined text-[20px]">{{ $categoryIcons[$category] ?? 'category' }}</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary block leading-none mb-1">MODULE_{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">{{ __($category) }}</h2>
</div>
</div>
<span class="font-code-sm text-code-sm text-outline px-2 py-0.5 rounded bg-surface-container">{{ $categorySkills->count() }} ITEMS</span>
</div>
<!-- Skills Items -->
<div class="space-y-3">
@foreach($categorySkills as $skill)
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">{{ $skill->name }}</span>
</div>
@if($skill->proficiency)
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-primary border border-primary/20">{{ $skill->proficiency }}%</span>
@endif
</div>
@if($skill->description)
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  {{ __($skill->description) }}
                </p>
@endif
</div>
@endforeach
</div>
</div>
<!-- Bottom Footer Metric -->
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center justify-between text-outline font-code-sm text-code-sm">
<span>{{ Str::upper(Str::slug($category, '_')) }}</span>
<span class="text-primary font-mono font-medium">{{ $categorySkills->count() }} {{ app()->getLocale() === 'en' ? 'ACTIVE' : 'ACTIFS' }}</span>
</div>
</div>
@endforeach

</div>
</section>

<!-- 3. Section: Certifications & Distinctions -->
@if($certifications->isNotEmpty())
<section class="mb-20">
<!-- Section Title -->
<div class="flex items-center gap-3 mb-8">
<h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">
          Validations officielles &amp; Engagements
        </h2>
<div class="h-px bg-outline-variant/30 flex-grow ml-4"></div>
<span class="font-code-sm text-code-sm text-outline hidden sm:inline">VERIFIED_CREDENTIALS</span>
</div>
<!-- Certification Cards -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
@foreach($certifications as $certification)
<div class="reveal-card card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 flex flex-col justify-between hover:border-primary/50 transition-all duration-200" style="--stagger: {{ $loop->index }};">
<div>
<!-- Header -->
<div class="flex items-start justify-between gap-4 mb-4">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary border border-outline-variant/40 shrink-0">
<span class="material-symbols-outlined text-[28px]">{{ $certification->status === 'CERTIFIED' ? 'verified' : 'emoji_events' }}</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block">{{ $certification->issuer ?: 'Organisme' }}</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">{{ $certification->title }}</h3>
</div>
</div>
<span class="font-code-sm text-code-sm px-2.5 py-1 rounded {{ $certification->status === 'CERTIFIED' ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/30' : 'bg-secondary/15 text-secondary border border-secondary/30' }} shrink-0 font-medium">
                {{ $certification->status }}
              </span>
</div>
<!-- Description -->
@if($certification->description)
<p class="text-on-surface-variant font-body-md text-body-md mb-6 leading-relaxed">
              {{ $certification->description }}
            </p>
@endif
<!-- Metadata -->
<div class="p-3.5 rounded-lg bg-surface-container-lowest border border-outline-variant/30 font-code-sm text-code-sm text-on-surface-variant flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
@if($certification->credential_id)
<div class="flex items-center gap-2">
<span class="text-outline">ID:</span>
<span class="text-primary font-mono">{{ $certification->credential_id }}</span>
</div>
@endif
@if($certification->issued_at)
<div class="flex items-center gap-2">
<span class="text-outline">DATE:</span>
<span class="text-on-surface font-mono">{{ $certification->issued_at->translatedFormat('F Y') }}</span>
</div>
@endif
</div>
</div>
<!-- Bottom Action -->
<div class="pt-4 border-t border-outline-variant/25 flex items-center justify-between">
@if($certification->issued_at)
<span class="font-code-sm text-code-sm text-outline">Date d'émission : {{ $certification->issued_at->translatedFormat('F Y') }}</span>
@else
<span></span>
@endif
@if($certification->credential_url)
<a class="inline-flex items-center gap-1.5 text-primary font-code-sm text-code-sm font-semibold hover:underline group" href="{{ $certification->credential_url }}" target="_blank" rel="noopener noreferrer">
<span>Vérifier</span>
<span class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">north_east</span>
</a>
@endif
</div>
</div>
@endforeach
</div>
</section>
@endif

<!-- 4. Call to Action -->
<section id="contact" class="mt-8">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-low border border-outline-variant/40 p-8 md:p-12">
<div class="absolute top-0 left-1/4 right-1/4 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
<div class="max-w-2xl space-y-3">
<h2 class="font-headline-md text-headline-md text-on-surface">
              {{ __('site.skills_cta_title') }}
            </h2>
<p class="text-on-surface-variant font-body-md text-body-md">
              {{ __('site.skills_cta_desc') }}
            </p>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 shrink-0">
<a class="bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3.5 rounded-lg hover:bg-secondary-fixed-dim transition-all duration-150 text-center shadow-lg active:scale-95 flex items-center justify-center gap-2" href="{{ route('contact') }}">
<span>{{ __('site.contact') }}</span>
<span class="material-symbols-outlined text-[18px]">send</span>
</a>
</div>
</div>
</div>
</section>
</main>

<!-- Footer -->
<footer class="docked full-width bottom bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
<div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
<div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
<p class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant">
          © {{ date('Y') }} {{ $siteSettings['footer_text'] ?? 'Nestor KPADJA · Lomé, Togo' }}
        </p>
</div>
<div class="flex flex-wrap items-center justify-center gap-6">
@if(!empty($siteSettings['github_url']))
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="{{ $siteSettings['github_url'] }}" rel="noopener noreferrer" target="_blank">
          GitHub
        </a>
@endif
@if(!empty($siteSettings['linkedin_url']))
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="{{ $siteSettings['linkedin_url'] }}" rel="noopener noreferrer" target="_blank">
          LinkedIn
        </a>
@endif
@if(isset($socialLinks))
@foreach($socialLinks as $sLink)
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="{{ $sLink->url }}" rel="noopener noreferrer" target="_blank">
          {{ $sLink->label }}
        </a>
@endforeach
@endif
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="{{ route('contact') }}">
          {{ __('site.contact') }}
        </a>
</div>
</div>
</footer>
</body></html>
