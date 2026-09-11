<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nestor KPADJA — Ingénieur Backend &amp; Architectures Blockchain</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "primary": "#adc6ff",
            "surface-dim": "#0d1322",
            "on-primary-fixed-variant": "#004395",
            "surface-container": "#191f2f",
            "outline-variant": "#424754",
            "inverse-primary": "#005ac2",
            "on-primary-container": "#00285d",
            "inverse-on-surface": "#2a3040",
            "tertiary-fixed": "#ffdcc6",
            "secondary-fixed-dim": "#ffb95f",
            "error": "#ffb4ab",
            "surface-container-high": "#242a3a",
            "on-tertiary": "#502400",
            "tertiary-container": "#df7412",
            "inverse-surface": "#dde2f8",
            "on-tertiary-container": "#461f00",
            "outline": "#8c909f",
            "on-primary": "#002e6a",
            "on-tertiary-fixed": "#311400",
            "on-secondary-fixed": "#2a1700",
            "background": "#0d1322",
            "secondary-container": "#ee9800",
            "surface-variant": "#2f3445",
            "surface-container-highest": "#2f3445",
            "on-surface-variant": "#c2c6d6",
            "on-tertiary-fixed-variant": "#723600",
            "on-background": "#dde2f8",
            "surface-container-lowest": "#080e1d",
            "surface-container-low": "#151b2b",
            "surface": "#0d1322",
            "on-error": "#690005",
            "tertiary-fixed-dim": "#ffb786",
            "on-secondary-container": "#5b3800",
            "error-container": "#93000a",
            "primary-fixed": "#d8e2ff",
            "secondary-fixed": "#ffddb8",
            "primary-container": "#4d8eff",
            "primary-fixed-dim": "#adc6ff",
            "on-error-container": "#ffdad6",
            "secondary": "#ffb95f",
            "tertiary": "#ffb786",
            "on-primary-fixed": "#001a42",
            "on-secondary-fixed-variant": "#653e00",
            "surface-bright": "#33394a",
            "on-surface": "#dde2f8",
            "on-secondary": "#472a00",
            "surface-tint": "#adc6ff"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "space-sm": "0.5rem",
            "space-xl": "2.5rem",
            "space-xs": "0.25rem",
            "space-2xl": "4rem",
            "margin-mobile": "1.25rem",
            "gutter": "1.5rem",
            "space-lg": "1.5rem",
            "gutter-mobile": "1rem",
            "margin": "3rem",
            "space-md": "1rem"
          },
          "fontFamily": {
            "headline-lg-mobile": ["Space Grotesk"],
            "code-sm": ["JetBrains Mono"],
            "label-sm": ["JetBrains Mono"],
            "body-sm": ["Inter"],
            "body-md": ["Inter"],
            "headline-xl-mobile": ["Space Grotesk"],
            "headline-md": ["Space Grotesk"],
            "code-md": ["JetBrains Mono"],
            "headline-xl": ["Space Grotesk"],
            "code-lg": ["JetBrains Mono"],
            "headline-sm": ["Space Grotesk"],
            "headline-lg": ["Space Grotesk"],
            "label-md": ["Inter"],
            "body-lg": ["Inter"]
          },
          "fontSize": {
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "code-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500" }],
            "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
            "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
            "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-xl-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "code-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }],
            "headline-xl": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "code-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "label-md": ["13px", { "lineHeight": "16px", "fontWeight": "500" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
          }
        },
      },
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
      font-size: 1.25rem;
      line-height: 1;
      display: inline-block;
      vertical-align: middle;
    }
    .specular-card {
      position: relative;
    }
    .specular-card::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: inherit;
      padding: 1px;
      background: linear-gradient(180deg, rgba(59, 130, 246, 0.25) 0%, rgba(31, 44, 71, 0.4) 100%);
      -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      pointer-events: none;
    }
    .specular-card:hover::before {
      background: linear-gradient(180deg, rgba(59, 130, 246, 0.6) 0%, rgba(245, 158, 11, 0.3) 100%);
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-surface text-on-surface font-body-md text-body-md antialiased selection:bg-primary selection:text-on-primary min-h-screen flex flex-col">

@include('partials.navigation')

<!-- MAIN CANVAS -->
<main class="flex-grow pt-16">

<!-- ==================== 1. HERO SECTION ==================== -->
<section class="relative min-h-[calc(100vh-4rem)] flex flex-col justify-between max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-16">
<!-- Subtle Grid Background -->
<div class="absolute inset-0 bg-[radial-gradient(#191f2f_1px,transparent_1px)] [background-size:28px_28px] opacity-40 pointer-events-none -z-10"></div>

<!-- Hero Content (2 Columns Desktop) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center flex-grow py-8">
<!-- Left Column: Content & Identity (7 cols) -->
<div class="lg:col-span-7 flex flex-col items-start gap-6">
<!-- Badge -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/60 shadow-sm">
<span class="text-secondary font-code-md text-code-sm font-bold">&gt;_</span>
<span class="font-code-md text-code-sm text-primary tracking-wide">Développeur Backend &amp; Blockchain</span>
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
</div>

<!-- Main Title -->
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight leading-tight">
    Kokoussè Nestor <br/>
    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-primary-fixed to-secondary">KPADJA</span>
</h1>

<!-- Subtitle -->
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
    Je conçois des architectures backend fiables, des APIs bien structurées et des solutions logicielles adaptées aux besoins réels de vos projets.
</p>

<!-- CTAs -->
<div class="flex flex-wrap items-center gap-4 pt-2 w-full sm:w-auto">
<a class="inline-flex items-center justify-center gap-2.5 bg-primary-container text-on-surface font-body-md text-label-md font-semibold px-6 py-3 rounded-lg shadow-[0_0_20px_rgba(77,142,255,0.35)] hover:bg-primary hover:text-on-primary transition-all duration-150 active:scale-95 group" href="{{ route('projects') }}">
<span>Voir mes projets</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">east</span>
</a>
<a class="inline-flex items-center justify-center gap-2.5 bg-transparent border border-outline-variant/70 hover:border-primary text-on-surface hover:bg-surface-container-low font-body-md text-label-md font-medium px-6 py-3 rounded-lg transition-all duration-150 active:scale-95" href="{{ route('contact') }}">
<span class="material-symbols-outlined">mail</span>
<span>Me contacter</span>
</a>
</div>

<!-- Location & Status -->
<div class="flex items-center gap-3 pt-4 border-t border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-emerald-400">location_on</span>
<span>Lomé, Togo</span>
</span>
<span class="text-outline-variant">•</span>
<span>Disponible en remote &amp; hybride</span>
</div>
</div>

<!-- Right Column: Terminal Card (5 cols) -->
<div class="lg:col-span-5">
<div class="specular-card bg-surface-container-lowest border border-outline-variant/50 rounded-xl overflow-hidden shadow-2xl">
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
<span class="text-[10px] text-outline px-1.5 py-0.5 rounded bg-surface-container shrink-0 uppercase">{{ $project->category ?? 'Projet' }}</span>
</div>
@endforeach
</div>
@endif

<!-- Stack technique -->
<div class="p-3 rounded-lg bg-surface-container-low border border-outline-variant/40">
<div class="flex items-center justify-between mb-2">
<span class="text-secondary font-mono font-bold text-[12px]">STACK TECHNIQUE ACTIVE</span>
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
<span>Compétences : {{ $skills->count() }} technologies actives</span>
</div>
<div class="flex items-center gap-2 text-secondary">
<span class="text-secondary">&gt;&gt;</span>
<span>Projets : {{ $projects->count() }} déployés en production</span>
</div>
<div class="flex items-center gap-2 text-on-surface">
<span class="text-emerald-400">&gt;&gt;</span>
<span>Expériences : {{ $experiences->count() }} jalons vérifiés</span>
</div>
</div>
</div>

<!-- Bottom Metrics -->
<div class="grid grid-cols-3 px-4 py-2.5 bg-surface-container-high/60 border-t border-outline-variant/40 text-center font-code-sm text-code-sm">
<div>
<span class="text-on-surface-variant text-[10px] uppercase block">Projets</span>
<span class="font-bold text-on-surface">{{ $projects->count() }}</span>
</div>
<div class="border-x border-outline-variant/30">
<span class="text-on-surface-variant text-[10px] uppercase block">Skills</span>
<span class="font-bold text-primary">{{ $skills->count() }}</span>
</div>
<div>
<span class="text-on-surface-variant text-[10px] uppercase block">Expériences</span>
<span class="font-bold text-emerald-400">{{ $experiences->count() }}</span>
</div>
</div>
</div>
</div>
</div>

<!-- Bottom Tech Stack Ribbon -->
<div class="pt-8 pb-4 border-t border-outline-variant/30">
<div class="flex flex-col md:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-2 text-on-surface-variant font-code-md text-code-sm shrink-0">
<span class="uppercase tracking-wider">Technologies clés</span>
</div>
<div class="flex flex-wrap items-center gap-2.5 justify-center md:justify-end">
@foreach($skills->pluck('name')->unique()->take(8) as $skillName)
<div class="inline-flex items-center px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 transition-colors">
<span class="font-code-md text-code-sm text-on-surface font-semibold">{{ $skillName }}</span>
</div>
@endforeach
</div>
</div>
</div>
</section>

<!-- ==================== 2. CHIFFRES CLÉS & TÉLÉMÉTRIE ==================== -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-20 border-t border-outline-variant/20">
<div class="flex items-center justify-between mb-8 pb-4 border-b border-outline-variant/30">
<div class="flex items-center gap-2 font-code-sm text-code-sm text-primary">
<span class="text-secondary font-bold">&gt;_</span>
<span>APERÇU DU SYSTÈME</span>
</div>
<span class="font-code-sm text-code-sm text-outline hidden sm:inline">DONNÉES EN TEMPS RÉEL</span>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

<!-- Metric: Projets -->
<a href="{{ route('projects') }}" class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-primary/70 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 group block">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-primary-container/20 border border-primary/30 flex items-center justify-center text-primary group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined">deployed_code</span>
</div>
<span class="font-code-sm text-code-sm text-on-surface-variant uppercase tracking-wider">Projets</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">{{ $projects->count() }}+</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">projets livrés en production</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-primary flex items-center justify-between">
<span>Explorer les réalisations</span>
<span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</a>

<!-- Metric: Compétences -->
<a href="{{ route('skills') }}" class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-secondary/70 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 group block">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-secondary-container/20 border border-secondary/30 flex items-center justify-center text-secondary group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined">code</span>
</div>
<span class="font-code-sm text-code-sm text-on-surface-variant uppercase tracking-wider">Compétences</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">{{ $skills->count() }}</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">technologies maîtrisées</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-secondary flex items-center justify-between">
<span>Voir la boîte à outils</span>
<span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</a>

<!-- Metric: Expériences -->
<a href="{{ route('experience') }}" class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-primary/70 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 group block">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-surface-container border border-outline-variant/50 flex items-center justify-center text-primary group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined">work</span>
</div>
<span class="font-code-sm text-code-sm text-on-surface-variant uppercase tracking-wider">Expérience</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">{{ $experiences->count() }}</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">expériences professionnelles</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-primary flex items-center justify-between">
<span>Consulter le parcours</span>
<span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</a>

<!-- Metric: Certifications & Localisation -->
<a href="{{ route('certifications') }}" class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-emerald-500/70 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 group block">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined">verified</span>
</div>
<span class="font-code-sm text-code-sm text-emerald-400 uppercase tracking-wider">Certifié</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">{{ $certifications->count() }}</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">certifications &amp; distinctions</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-emerald-400 flex items-center justify-between">
<span>Voir les accréditations</span>
<span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</a>

</div>
</section>

<!-- ==================== 3. DOMAINES D'EXPERTISE ==================== -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-20 border-t border-outline-variant/20">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
<div>
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-surface-container border border-outline-variant/40 font-code-sm text-code-sm text-primary mb-3">
<span class="material-symbols-outlined text-sm">terminal</span>
<span>&gt;_ SAVOIR-FAIRE TECHNIQUE</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
    Domaines d'expertise &amp; Architectures
</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">
    Des fondations solides pour des applications hautement scalables, sécurisées et maintenables.
</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

<!-- Pilier 1: Backend & APIs -->
<div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 flex flex-col justify-between hover:border-primary/50 transition-all duration-200">
<div>
<div class="w-12 h-12 rounded-xl bg-surface-container border border-outline-variant/40 flex items-center justify-center text-primary mb-6">
<span class="material-symbols-outlined text-2xl">database</span>
</div>
<span class="font-code-sm text-xs text-secondary font-semibold uppercase tracking-wider block mb-1">PILIER 01</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-3">
    Backend &amp; Microservices
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-6">
    Conception d'APIs RESTful performantes sous Laravel, Spring Boot et Node.js. Modélisation relationnelle rigoureuse sous PostgreSQL et MySQL, caching Redis et architecture événementielle.
</p>
</div>
<div class="pt-4 border-t border-outline-variant/20 flex flex-wrap gap-1.5 font-code-sm text-xs text-on-surface-variant">
<span class="px-2 py-0.5 rounded bg-surface-container">Laravel</span>
<span class="px-2 py-0.5 rounded bg-surface-container">PostgreSQL</span>
<span class="px-2 py-0.5 rounded bg-surface-container">REST APIs</span>
<span class="px-2 py-0.5 rounded bg-surface-container">Redis</span>
</div>
</div>

<!-- Pilier 2: Blockchain & Web3 -->
<div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 flex flex-col justify-between hover:border-secondary/50 transition-all duration-200">
<div>
<div class="w-12 h-12 rounded-xl bg-surface-container border border-outline-variant/40 flex items-center justify-center text-secondary mb-6">
<span class="material-symbols-outlined text-2xl">token</span>
</div>
<span class="font-code-sm text-xs text-secondary font-semibold uppercase tracking-wider block mb-1">PILIER 02</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-3">
    Blockchain &amp; Systèmes Distribués
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-6">
    Compréhension approfondie des mécanismes de consensus, registres immuables et smart contracts. Expérience concrète sur un projet de monnaie numérique de banque centrale (CBDC).
</p>
</div>
<div class="pt-4 border-t border-outline-variant/20 flex flex-wrap gap-1.5 font-code-sm text-xs text-secondary">
<span class="px-2 py-0.5 rounded bg-surface-container">Smart Contracts</span>
<span class="px-2 py-0.5 rounded bg-surface-container">CBDC</span>
<span class="px-2 py-0.5 rounded bg-surface-container">Consensus</span>
<span class="px-2 py-0.5 rounded bg-surface-container">Linux Foundation</span>
</div>
</div>

<!-- Pilier 3: DevOps & Qualité -->
<div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 flex flex-col justify-between hover:border-emerald-500/50 transition-all duration-200">
<div>
<div class="w-12 h-12 rounded-xl bg-surface-container border border-outline-variant/40 flex items-center justify-center text-emerald-400 mb-6">
<span class="material-symbols-outlined text-2xl">verified_user</span>
</div>
<span class="font-code-sm text-xs text-secondary font-semibold uppercase tracking-wider block mb-1">PILIER 03</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-3">
    DevOps, Sécurité &amp; Rigueur
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-6">
    Conteneurisation reproductible avec Docker, automatisation CI/CD, tests automatisés unitaires et d'intégration, et respect scrupuleux des principes Clean Architecture et SOLID.
</p>
</div>
<div class="pt-4 border-t border-outline-variant/20 flex flex-wrap gap-1.5 font-code-sm text-xs text-emerald-400">
<span class="px-2 py-0.5 rounded bg-surface-container">Docker</span>
<span class="px-2 py-0.5 rounded bg-surface-container">CI/CD</span>
<span class="px-2 py-0.5 rounded bg-surface-container">Clean Arch</span>
<span class="px-2 py-0.5 rounded bg-surface-container">RBAC / 2FA</span>
</div>
</div>

</div>
</section>

<!-- ==================== 4. PROJETS À LA UNE ==================== -->
@if($projects->count() > 0)
<section class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-20 border-t border-outline-variant/20">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
<div>
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-surface-container border border-outline-variant/40 font-code-sm text-code-sm text-primary mb-3">
<span class="text-secondary font-bold">&gt;_</span>
<span>RÉALISATIONS MAJEURES</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
    Projets phares &amp; Produits livrés
</h2>
</div>
<a href="{{ route('projects') }}" class="font-code-sm text-code-sm text-primary hover:underline flex items-center gap-1.5 group">
<span>Explorer tous les projets ({{ $projects->count() }})</span>
<span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
@foreach($projects->take(3) as $proj)
<div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 flex flex-col justify-between hover:border-primary/50 transition-all duration-200 group">
<div>
<!-- Header -->
<div class="flex items-center justify-between gap-2 mb-4">
<span class="font-code-sm text-[11px] uppercase tracking-wider text-secondary px-2 py-0.5 rounded bg-surface-container border border-outline-variant/30">
    {{ $proj->category ?? 'Projet' }}
</span>
@if($proj->is_featured)
<span class="font-code-sm text-[10px] text-emerald-400 bg-emerald-500/10 border border-emerald-500/30 px-2 py-0.5 rounded font-semibold">
    VEDETTE
</span>
@endif
</div>

<!-- Title -->
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2 group-hover:text-primary transition-colors">
    {{ $proj->title }}
</h3>

<!-- Excerpt -->
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-6">
    {{ $proj->excerpt ?? \Illuminate\Support\Str::limit($proj->description, 110) }}
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
<span>Accéder au site</span>
<span class="material-symbols-outlined text-xs">north_east</span>
</a>
@else
<span class="text-outline">Déployé en production</span>
@endif

@if($proj->repository_url)
<a href="{{ $proj->repository_url }}" target="_blank" rel="noopener noreferrer" class="text-on-surface-variant hover:text-on-surface flex items-center gap-1" title="Voir le code source">
<span class="material-symbols-outlined text-sm">code</span>
<span>Code source</span>
</a>
@endif
</div>
</div>
</div>
@endforeach
</div>
</section>
@endif

<!-- ==================== 5. VALIDATIONS OFFICIELLES ==================== -->
@if($certifications->count() > 0)
<section class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-20 border-t border-outline-variant/20">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
<div>
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-surface-container border border-outline-variant/40 font-code-sm text-code-sm text-primary mb-3">
<span class="text-secondary font-bold">&gt;_</span>
<span>ACCRÉDITATIONS</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
    Validations officielles &amp; Distinctions
</h2>
</div>
<a href="{{ route('certifications') }}" class="font-code-sm text-code-sm text-primary hover:underline flex items-center gap-1.5 group">
<span>Consulter les vérifications</span>
<span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
@foreach($certifications as $cert)
<div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 flex flex-col justify-between hover:border-primary/50 transition-all duration-200">
<div>
<div class="flex items-start justify-between gap-4 mb-4">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary border border-outline-variant/40 shrink-0">
<span class="material-symbols-outlined text-[26px]">verified</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block">{{ $cert->issuer ?: 'Organisme' }}</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ $cert->title }}</h3>
</div>
</div>
<span class="font-code-sm text-xs px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 font-semibold shrink-0">
{{ $cert->status }}
</span>
</div>
@if($cert->description)
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
{{ $cert->description }}
</p>
@endif
</div>

@if($cert->credential_url)
<div class="pt-4 border-t border-outline-variant/20 flex items-center justify-end">
<a href="{{ $cert->credential_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-primary font-code-sm text-code-sm font-semibold hover:underline">
<span>Vérifier l'authenticité</span>
<span class="material-symbols-outlined text-sm">north_east</span>
</a>
</div>
@endif
</div>
@endforeach
</div>
</section>
@endif

<!-- ==================== 6. CALL TO ACTION ==================== -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-20 border-t border-outline-variant/20">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-low border border-outline-variant/40 p-8 md:p-12">
<div class="absolute top-0 left-1/4 right-1/4 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
<div class="max-w-2xl space-y-3">
<div class="inline-flex items-center gap-2 text-secondary font-code-sm text-code-sm">
<span class="material-symbols-outlined text-[18px]">terminal</span>
<span>// COLLABORATION_ACTIVE</span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">
    Prêt à construire une architecture logicielle robuste ?
</h2>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
    Que ce soit pour concevoir une API, structurer une base de données ou collaborer sur un projet technique, discutons simplement de vos besoins.
</p>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 shrink-0">
<a class="bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3.5 rounded-lg hover:bg-secondary-container transition-all duration-150 text-center shadow-lg active:scale-95 flex items-center justify-center gap-2" href="{{ route('contact') }}">
<span>Démarrer un échange</span>
<span class="material-symbols-outlined text-[18px]">send</span>
</a>
<a class="border border-outline-variant/60 text-on-surface hover:border-primary font-code-md text-code-md px-5 py-3.5 rounded-lg text-center transition-colors bg-surface-container hover:bg-surface-container-high" href="{{ route('about') }}">
À propos de moi &gt;
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
<a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('contact') }}">Contact</a>
</div>
</div>
</footer>

</body></html>
