<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Mes Projets — Nestor KPADJA | Ingénieur Backend &amp; Blockchain</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS with custom plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Theme Config -->
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-error-container": "#ffdad6",
            "secondary-container": "#ee9800",
            "surface-container": "#191f2f",
            "on-background": "#dde2f8",
            "on-secondary-fixed-variant": "#653e00",
            "on-primary-fixed-variant": "#004395",
            "secondary-fixed": "#ffddb8",
            "secondary": "#ffb95f",
            "error-container": "#93000a",
            "primary-fixed": "#d8e2ff",
            "tertiary-fixed-dim": "#ffb786",
            "on-tertiary-fixed": "#311400",
            "on-surface-variant": "#c2c6d6",
            "surface-bright": "#33394a",
            "surface-container-high": "#242a3a",
            "on-primary-container": "#00285d",
            "surface": "#0d1322",
            "on-surface": "#dde2f8",
            "on-tertiary-container": "#461f00",
            "surface-variant": "#2f3445",
            "on-tertiary": "#502400",
            "on-secondary-fixed": "#2a1700",
            "secondary-fixed-dim": "#ffb95f",
            "tertiary": "#ffb786",
            "on-secondary": "#472a00",
            "outline": "#8c909f",
            "surface-container-low": "#151b2b",
            "surface-tint": "#adc6ff",
            "surface-container-lowest": "#080e1d",
            "inverse-surface": "#dde2f8",
            "tertiary-container": "#df7412",
            "tertiary-fixed": "#ffdcc6",
            "on-primary-fixed": "#001a42",
            "surface-dim": "#0d1322",
            "primary": "#adc6ff",
            "surface-container-highest": "#2f3445",
            "inverse-on-surface": "#2a3040",
            "error": "#ffb4ab",
            "on-tertiary-fixed-variant": "#723600",
            "on-error": "#690005",
            "inverse-primary": "#005ac2",
            "primary-container": "#4d8eff",
            "on-primary": "#002e6a",
            "outline-variant": "#424754",
            "background": "#0d1322",
            "primary-fixed-dim": "#adc6ff",
            "on-secondary-container": "#5b3800"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "margin": "3rem",
            "space-2xl": "4rem",
            "space-lg": "1.5rem",
            "space-md": "1rem",
            "gutter": "1.5rem",
            "space-sm": "0.5rem",
            "space-xl": "2.5rem",
            "margin-mobile": "1.25rem",
            "space-xs": "0.25rem",
            "gutter-mobile": "1rem"
          },
          "fontFamily": {
            "headline-sm": ["Space Grotesk"],
            "label-sm": ["JetBrains Mono"],
            "code-lg": ["JetBrains Mono"],
            "headline-lg-mobile": ["Space Grotesk"],
            "headline-lg": ["Space Grotesk"],
            "body-lg": ["Inter"],
            "headline-xl-mobile": ["Space Grotesk"],
            "code-sm": ["JetBrains Mono"],
            "headline-md": ["Space Grotesk"],
            "body-sm": ["Inter"],
            "body-md": ["Inter"],
            "headline-xl": ["Space Grotesk"],
            "label-md": ["Inter"],
            "code-md": ["JetBrains Mono"]
          },
          "fontSize": {
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
            "code-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
            "headline-xl-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "code-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
            "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-xl": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "label-md": ["13px", { "lineHeight": "16px", "fontWeight": "500" }],
            "code-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }]
          }
        }
      }
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      vertical-align: middle;
      line-height: 1;
    }
    /* Blueprint engineer grid overlay */
    .grid-bg {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(66, 71, 84, 0.12) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(66, 71, 84, 0.12) 1px, transparent 1px);
    }
    .specular-card {
      position: relative;
    }
    .specular-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(173, 198, 255, 0.4) 50%, transparent);
      opacity: 0;
      transition: opacity 0.3s ease;
      border-top-left-radius: inherit;
      border-top-right-radius: inherit;
    }
    .specular-card:hover::before {
      opacity: 1;
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-surface-container-lowest text-on-surface antialiased font-body-md min-h-screen relative flex flex-col selection:bg-primary-container selection:text-on-primary-container grid-bg">
<!-- ========================================================================= -->
<!-- TopNavBar (Shared Component Execution via JSON Blueprint)                 -->
<!-- ========================================================================= -->
@if(false)<header class="bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30 docked full-width top-0 fixed z-50">
<div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
<!-- Brand Logo / Identity -->
<a class="font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2 group" href="#">
<span class="text-primary group-hover:text-primary-container transition-colors">&gt;_</span>
<span>Nestor KPADJA</span>
<!-- Online Node Status Badge -->
<span class="inline-flex items-center gap-1.5 ml-2 px-2 py-0.5 rounded-full bg-surface-container-high border border-outline-variant/40">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="font-code-sm text-code-sm text-primary font-medium hidden sm:inline">Online</span>
</span>
</a>
<!-- Desktop Navigation Links -->
<nav class="hidden md:flex items-center gap-8 lg:gap-10">
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">Accueil</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">À propos</a>
<!-- ACTIVE NAVIGATION: "Projets" mapped with exact tokens -->
<a class="text-primary dark:text-primary font-code-md text-code-md border-b-2 border-primary pb-1" href="#">Projets</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">Compétences</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">Expérience</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">Contact</a>
</nav>
<!-- Trailing Action: Accent CTA Button -->
<div class="flex items-center gap-3">
<a class="inline-flex items-center gap-2 bg-secondary-container hover:bg-tertiary-container text-on-primary-container font-headline-sm text-label-md px-4 py-2 rounded-lg font-semibold transition-all duration-150 shadow-sm active:scale-95" href="{{ route('contact') }}">
<span>Me contacter</span>
<span class="material-symbols-outlined text-[16px]">terminal</span>
</a>
</div>
</div>
</header>@endif
<!-- ========================================================================= -->
<!-- MAIN CONTENT: Portfolio Section                                           -->
<!-- ========================================================================= -->
<main class="flex-grow pt-28 pb-20 px-6 md:px-12 max-w-7xl mx-auto w-full">
<!-- Section Header Block -->
<div class="mb-10 lg:mb-12">
<!-- Terminal Tag -->
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-surface-container-high/80 border border-outline-variant/40 mb-4">
<span class="text-primary font-code-sm text-code-sm">&gt;_</span>
<span class="font-code-sm text-code-sm text-on-surface-variant">Ce que j'ai construit</span>
<span class="w-2 h-3.5 bg-primary/70 inline-block animate-pulse"></span>
</div>
<!-- Main Headline with Accent -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div>
<h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface tracking-tight">
            Mes <span class="text-primary-container bg-gradient-to-r from-primary via-primary-container to-secondary bg-clip-text text-transparent">projets</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-3 max-w-2xl">
            Architectures distribuées, protocoles décentralisés et solutions à impact sociétal livrées en production.
          </p>
</div>
<!-- Terminal Status Pill -->
<div class="hidden lg:flex items-center gap-3 px-3.5 py-2 rounded-lg bg-surface-container border border-outline-variant/30 font-code-sm text-code-sm text-on-surface-variant">
<span class="text-primary font-bold">SHA-256</span>
<span class="text-outline">::</span>
<span>v2.4.1_prod</span>
<span class="w-1.5 h-1.5 rounded-full bg-primary-container"></span>
</div>
</div>
</div>
<!-- Filter Bar & Counter Header -->
<div class="flex flex-wrap items-center justify-between gap-4 pb-6 mb-8 border-b border-outline-variant/30">
<!-- Filter Chips -->
<div id="project-filters" class="flex flex-wrap items-center gap-2">
<!-- "Tous" (ACTIF) -->
<a href="{{ route('projects') }}" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg {{ !$selectedCategory ? 'bg-primary-container text-on-primary' : 'bg-surface-container-low text-on-surface-variant' }} font-code-md text-code-sm font-semibold shadow-sm transition-all">
<span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span>
<span>Tous</span>
</a>
@foreach($categories as $category)
<a href="{{ route('projects', ['category' => $category]) }}" class="px-3.5 py-1.5 rounded-lg {{ $selectedCategory === $category ? 'bg-primary-container text-on-primary' : 'bg-surface-container-low border border-outline-variant/40 text-on-surface-variant hover:text-on-surface hover:border-primary/50' }} font-code-md text-code-sm transition-all">{{ $category }}</a>
@endforeach
</div>
<!-- Count Badge -->
<div class="font-code-sm text-code-sm text-outline flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">data_object</span>
<span>[ {{ $projects->total() }} livrable(s) répertorié(s) ]</span>
</div>
</div>
<!-- ===================================================================== -->
<!-- Projects Grid (3 columns on lg)                                      -->
<!-- ===================================================================== -->
<div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- ========================================================= -->
<!-- CARD 1: TitanEduc (EdTech)                                -->
<!-- ========================================================= -->
<article class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl flex flex-col overflow-hidden hover:border-primary/50 transition-all duration-200 group">
<!-- Visual Terminal Header / Mockup Representation -->
<div class="bg-surface-container-lowest border-b border-outline-variant/30 p-3 flex flex-col">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-rose-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-amber-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-emerald-500/70"></span>
</div>
<span class="font-code-sm text-code-sm text-outline">~/edtech/lmd_engine.ts</span>
</div>
<!-- Stylized Schematic Workspace -->
<div class="h-32 rounded bg-surface-container/60 border border-outline-variant/20 p-3 flex flex-col justify-between overflow-hidden relative">
<div class="flex items-center justify-between">
<span class="font-code-sm text-code-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">school</span>
                LMD_FRAMEWORK
              </span>
<span class="font-code-sm text-code-sm text-outline">AI_EVAL: PASS</span>
</div>
<!-- Architectural flow schematic -->
<div class="space-y-1.5 my-auto">
<div class="flex items-center gap-2">
<div class="h-1.5 w-16 bg-secondary-container/60 rounded"></div>
<div class="h-1 w-20 bg-outline-variant/50 rounded"></div>
<span class="font-code-sm text-[9px] text-outline">98.4% MATCH</span>
</div>
<div class="flex items-center gap-2">
<div class="h-1.5 w-24 bg-primary-container/60 rounded"></div>
<div class="h-1 w-12 bg-outline-variant/50 rounded"></div>
</div>
</div>
<div class="flex items-center justify-between pt-1 border-t border-outline-variant/20 font-code-sm text-code-sm text-on-surface-variant">
<span>CERTIFICATION_INDEX</span>
<span class="text-secondary font-mono">100% OK</span>
</div>
</div>
</div>
<!-- Card Content Body -->
<div class="p-6 flex-grow flex flex-col justify-between">
<div>
<!-- Category Badge -->
<div class="flex items-center justify-between mb-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-amber-500/10 border border-amber-500/30 text-secondary font-code-sm text-code-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                EdTech
              </span>
<span class="font-code-sm text-code-sm text-outline">#01</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">
              TitanEduc
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 line-clamp-2">
              Écosystème EdTech panafricain regroupant la gestion scolaire LMD, formations IA appliquées et recrutement certifié.
            </p>
<!-- Tech Pills -->
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Laravel</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Spring Boot</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Micro-services</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">IA</span>
</div>
</div>
<!-- Bottom Action Bar -->
<div class="mt-6 pt-4 border-t border-outline-variant/30 flex items-center justify-between">
<a class="inline-flex items-center gap-1 text-primary hover:text-primary-container font-headline-sm text-body-sm font-semibold transition-colors" href="#">
<span>Voir le projet</span>
<span class="text-xs">↗</span>
</a>
<a class="inline-flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[16px]">code</span>
<span>Code source</span>
</a>
</div>
</div>
</article>
<!-- ========================================================= -->
<!-- CARD 2: CBDC — Blockchain Banque Centrale                 -->
<!-- ========================================================= -->
<article class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl flex flex-col overflow-hidden hover:border-primary/50 transition-all duration-200 group">
<!-- Visual Terminal Header / Mockup Representation -->
<div class="bg-surface-container-lowest border-b border-outline-variant/30 p-3 flex flex-col">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-rose-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-amber-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-emerald-500/70"></span>
</div>
<span class="font-code-sm text-code-sm text-outline">~/node_01/cbdc_ledger.rs</span>
</div>
<!-- Stylized Schematic Block Ledger -->
<div class="h-32 rounded bg-surface-container/60 border border-outline-variant/20 p-3 flex flex-col justify-between overflow-hidden relative">
<div class="flex items-center justify-between">
<span class="font-code-sm text-code-sm text-primary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">account_tree</span>
                BFT_CONSENSUS
              </span>
<span class="font-code-sm text-code-sm text-emerald-400">SYNCED (0.12s)</span>
</div>
<!-- Ledger blocks nodes -->
<div class="grid grid-cols-4 gap-1.5 my-auto">
<div class="bg-primary/20 border border-primary/40 rounded p-1 text-center">
<span class="font-code-sm text-[9px] text-primary block">BLOCK #829</span>
<span class="font-code-sm text-[8px] text-outline truncate block">0x3f..b1</span>
</div>
<div class="bg-primary/20 border border-primary/40 rounded p-1 text-center">
<span class="font-code-sm text-[9px] text-primary block">BLOCK #830</span>
<span class="font-code-sm text-[8px] text-outline truncate block">0xa4..e8</span>
</div>
<div class="bg-primary/20 border border-primary/40 rounded p-1 text-center">
<span class="font-code-sm text-[9px] text-primary block">BLOCK #831</span>
<span class="font-code-sm text-[8px] text-outline truncate block">0x7c..29</span>
</div>
<div class="bg-surface-container-high border border-outline-variant/40 rounded p-1 text-center animate-pulse">
<span class="font-code-sm text-[9px] text-secondary block">MINING...</span>
<span class="font-code-sm text-[8px] text-outline truncate block">pending</span>
</div>
</div>
<div class="flex items-center justify-between pt-1 border-t border-outline-variant/20 font-code-sm text-code-sm text-on-surface-variant">
<span>STATE_ROOT</span>
<span class="text-primary font-mono truncate">0xbf782e4f00d2</span>
</div>
</div>
</div>
<!-- Card Content Body -->
<div class="p-6 flex-grow flex flex-col justify-between">
<div>
<!-- Category Badge -->
<div class="flex items-center justify-between mb-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-blue-500/10 border border-blue-500/30 text-primary font-code-sm text-code-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                Blockchain
              </span>
<span class="font-code-sm text-code-sm text-outline">#02</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">
              CBDC — Banque Centrale
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 line-clamp-2">
              Projet de stage : blockchain décentralisée souveraine, exécution de smart contracts financiers et consensus résistant aux pannes byzantines.
            </p>
<!-- Tech Pills -->
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Spring Boot</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Angular</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Docker</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Consensus</span>
</div>
</div>
<!-- Bottom Action Bar -->
<div class="mt-6 pt-4 border-t border-outline-variant/30 flex items-center justify-between">
<a class="inline-flex items-center gap-1 text-primary hover:text-primary-container font-headline-sm text-body-sm font-semibold transition-colors" href="#">
<span>Voir le projet</span>
<span class="text-xs">↗</span>
</a>
<a class="inline-flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[16px]">code</span>
<span>Code source</span>
</a>
</div>
</div>
</article>
<!-- ========================================================= -->
<!-- CARD 3: Titan (Module Immobilier)                         -->
<!-- ========================================================= -->
<article class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl flex flex-col overflow-hidden hover:border-primary/50 transition-all duration-200 group">
<!-- Visual Terminal Header / Mockup Representation -->
<div class="bg-surface-container-lowest border-b border-outline-variant/30 p-3 flex flex-col">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-rose-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-amber-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-emerald-500/70"></span>
</div>
<span class="font-code-sm text-code-sm text-outline">~/s3_cluster/minio_rbac.go</span>
</div>
<!-- Stylized S3 Object Storage Console -->
<div class="h-32 rounded bg-surface-container/60 border border-outline-variant/20 p-3 flex flex-col justify-between overflow-hidden relative">
<div class="flex items-center justify-between">
<span class="font-code-sm text-code-sm text-sky-400 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">dns</span>
                S3_MINIO_PIPELINE
              </span>
<span class="font-code-sm text-code-sm text-outline">ACL: MULTI-TENANT</span>
</div>
<!-- Storage Pipeline metrics -->
<div class="space-y-1 my-auto font-code-sm text-[10px]">
<div class="flex justify-between text-on-surface-variant">
<span>/vault/docs_enc_aes256/</span>
<span class="text-sky-300">READ_WRITE</span>
</div>
<div class="w-full bg-surface-container-high h-1.5 rounded overflow-hidden">
<div class="bg-sky-400 h-full w-3/4"></div>
</div>
<div class="flex justify-between text-[8px] text-outline">
<span>POSTGRESQL RBAC: ACTIVE</span>
<span>LATENCY: 4ms</span>
</div>
</div>
<div class="flex items-center justify-between pt-1 border-t border-outline-variant/20 font-code-sm text-code-sm text-on-surface-variant">
<span>NITCHCORP_INFRA</span>
<span class="text-sky-400 font-mono">STATUS: UP</span>
</div>
</div>
</div>
<!-- Card Content Body -->
<div class="p-6 flex-grow flex flex-col justify-between">
<div>
<!-- Category Badge -->
<div class="flex items-center justify-between mb-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-sky-500/10 border border-sky-500/30 text-sky-400 font-code-sm text-code-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                Backend
              </span>
<span class="font-code-sm text-code-sm text-outline">#03</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">
              Titan — Module Immobilier
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 line-clamp-2">
              Application modulaire entreprise chez NitchCorp : pipeline de stockage objet Minio S3, sécurité RBAC et conformité multi-tenants.
            </p>
<!-- Tech Pills -->
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Spring Boot</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Minio S3</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Sécurité</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">PostgreSQL</span>
</div>
</div>
<!-- Bottom Action Bar -->
<div class="mt-6 pt-4 border-t border-outline-variant/30 flex items-center justify-between">
<a class="inline-flex items-center gap-1 text-primary hover:text-primary-container font-headline-sm text-body-sm font-semibold transition-colors" href="#">
<span>Voir le projet</span>
<span class="text-xs">↗</span>
</a>
<a class="inline-flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[16px]">code</span>
<span>Code source</span>
</a>
</div>
</div>
</article>
<!-- ========================================================= -->
<!-- CARD 4: Gestion Scolaire & 2FA                            -->
<!-- ========================================================= -->
<article class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl flex flex-col overflow-hidden hover:border-primary/50 transition-all duration-200 group">
<!-- Visual Terminal Header / Mockup Representation -->
<div class="bg-surface-container-lowest border-b border-outline-variant/30 p-3 flex flex-col">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-rose-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-amber-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-emerald-500/70"></span>
</div>
<span class="font-code-sm text-code-sm text-outline">~/auth/totp_engine.py</span>
</div>
<!-- Stylized Administration Graph & 2FA Flow -->
<div class="h-32 rounded bg-surface-container/60 border border-outline-variant/20 p-3 flex flex-col justify-between overflow-hidden relative">
<div class="flex items-center justify-between">
<span class="font-code-sm text-code-sm text-indigo-400 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">shield</span>
                2FA_OTP_VERIFIED
              </span>
<span class="font-code-sm text-code-sm text-emerald-400">AUTH: 100%</span>
</div>
<!-- Dynamic ASCII / bar visual -->
<div class="space-y-1.5 my-auto">
<div class="flex items-center justify-between font-code-sm text-[9px] text-on-surface-variant">
<span>ELEVES_INDEXED: 1,420</span>
<span class="text-indigo-300">AUTO_REPORT: RUNNING</span>
</div>
<div class="grid grid-cols-6 gap-1 items-end h-7 pt-1">
<div class="bg-indigo-400/40 h-3 rounded-t"></div>
<div class="bg-indigo-400/60 h-5 rounded-t"></div>
<div class="bg-indigo-400/80 h-4 rounded-t"></div>
<div class="bg-indigo-400/90 h-6 rounded-t"></div>
<div class="bg-indigo-400 h-5 rounded-t"></div>
<div class="bg-indigo-400/70 h-7 rounded-t"></div>
</div>
</div>
<div class="flex items-center justify-between pt-1 border-t border-outline-variant/20 font-code-sm text-code-sm text-on-surface-variant">
<span>AI_SEARCH_INDEX</span>
<span class="text-indigo-400 font-mono">Q_LATENCY: 1.8ms</span>
</div>
</div>
</div>
<!-- Card Content Body -->
<div class="p-6 flex-grow flex flex-col justify-between">
<div>
<!-- Category Badge -->
<div class="flex items-center justify-between mb-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-indigo-500/10 border border-indigo-500/30 text-indigo-400 font-code-sm text-code-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                Full Stack
              </span>
<span class="font-code-sm text-code-sm text-outline">#04</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">
              Gestion scolaire &amp; 2FA
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 line-clamp-2">
              Système complet : inscription en ligne, relevés et bulletins automatisés, authentification 2FA et moteur IA d'indexation d'élèves.
            </p>
<!-- Tech Pills -->
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">PostgreSQL</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">IA</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">CRUD complet</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">2FA Auth</span>
</div>
</div>
<!-- Bottom Action Bar -->
<div class="mt-6 pt-4 border-t border-outline-variant/30 flex items-center justify-between">
<a class="inline-flex items-center gap-1 text-primary hover:text-primary-container font-headline-sm text-body-sm font-semibold transition-colors" href="#">
<span>Voir le projet</span>
<span class="text-xs">↗</span>
</a>
<a class="inline-flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[16px]">code</span>
<span>Code source</span>
</a>
</div>
</div>
</article>
<!-- ========================================================= -->
<!-- CARD 5: Hisaa — Plateforme de Tontine NFC                  -->
<!-- ========================================================= -->
<article class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl flex flex-col overflow-hidden hover:border-primary/50 transition-all duration-200 group">
<!-- Visual Terminal Header / Mockup Representation -->
<div class="bg-surface-container-lowest border-b border-outline-variant/30 p-3 flex flex-col">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-rose-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-amber-500/70"></span>
<span class="w-2.5 h-2.5 rounded-full bg-emerald-500/70"></span>
</div>
<span class="font-code-sm text-code-sm text-outline">~/nfc_daemon/apdu_relay.c</span>
</div>
<!-- Stylized NFC Reader Visualizer -->
<div class="h-32 rounded bg-surface-container/60 border border-outline-variant/20 p-3 flex flex-col justify-between overflow-hidden relative">
<div class="flex items-center justify-between">
<span class="font-code-sm text-code-sm text-emerald-400 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">nfc</span>
                ISO14443_SAM_READER
              </span>
<span class="font-code-sm text-code-sm text-emerald-400">PROXIMITY: OK</span>
</div>
<!-- Transaction payload -->
<div class="my-auto border border-emerald-500/20 bg-emerald-950/20 p-2 rounded">
<div class="flex justify-between items-center font-code-sm text-[10px]">
<span class="text-emerald-300">TX: TONTINE_COLLECT</span>
<span class="text-on-surface font-mono">15,000 XOF</span>
</div>
<div class="text-[8px] font-code-sm text-outline truncate mt-1">
                SIG: e3b0c44298fc1c149afbf4c8996fb92427ae41e4
              </div>
</div>
<div class="flex items-center justify-between pt-1 border-t border-outline-variant/20 font-code-sm text-code-sm text-on-surface-variant">
<span>OFFLINE_CAPABLE</span>
<span class="text-emerald-400 font-mono">LEDGER_PENDING</span>
</div>
</div>
</div>
<!-- Card Content Body -->
<div class="p-6 flex-grow flex flex-col justify-between">
<div>
<!-- Category Badge -->
<div class="flex items-center justify-between mb-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 font-code-sm text-code-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                Full Stack
              </span>
<span class="font-code-sm text-code-sm text-outline">#05</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">
              Hisaa — Tontine NFC
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 line-clamp-2">
              Digitalisation des tontines communautaires via cartes à puce NFC et micro-transactions sécurisées sans dépendance bancaire lourde.
            </p>
<!-- Tech Pills -->
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">NFC</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Fintech</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Mobile API</span>
<span class="px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm">Security</span>
</div>
</div>
<!-- Bottom Action Bar -->
<div class="mt-6 pt-4 border-t border-outline-variant/30 flex items-center justify-between">
<a class="inline-flex items-center gap-1 text-primary hover:text-primary-container font-headline-sm text-body-sm font-semibold transition-colors" href="#">
<span>Voir le projet</span>
<span class="text-xs">↗</span>
</a>
<a class="inline-flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[16px]">code</span>
<span>Code source</span>
</a>
</div>
</div>
</article>
<!-- ========================================================= -->
<!-- CARD 6: Carte Spéciale "Bientôt disponible"                -->
<!-- ========================================================= -->
<div class="border-2 border-dashed border-outline-variant/60 hover:border-primary/60 bg-surface-container-low/40 rounded-xl flex flex-col items-center justify-center text-center p-8 transition-all duration-200 group">
<!-- Stylized Terminal Plus Glyph -->
<div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/60 group-hover:scale-110 group-hover:border-primary/80 group-hover:bg-primary-container/10 transition-all duration-200 mb-4">
<span class="material-symbols-outlined text-primary text-2xl">add</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">
          + D'autres projets bientôt ajoutés
        </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs mb-5">
          En cours de synchronisation via le tableau de bord d'administration et pipelines CI/CD.
        </p>
<!-- Monospace Status Badge -->
<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-surface-container-lowest border border-outline-variant/40">
<span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
<span class="font-code-sm text-code-sm text-secondary">status: sync_pending...</span>
</div>
</div>
</div>
@if($projects->hasPages())
<div class="mt-10 flex justify-center">{{ $projects->onEachSide(1)->links() }}</div>
@endif
<!-- Architectural Terminal Banner at the Bottom -->
<div class="mt-16 bg-surface-container border border-outline-variant/40 rounded-xl p-6 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container-lowest border border-outline-variant/50 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-2xl">terminal</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface">Besoin d'une revue technique ou d'un audit de smart contracts ?</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Discutons de vos enjeux d'architecture distribuée et de sécurité cryptographique.</p>
</div>
</div>
<a class="inline-flex items-center gap-2 bg-secondary-container hover:bg-tertiary-container text-on-primary-container font-headline-sm text-label-md px-6 py-2.5 rounded-lg font-semibold transition-all duration-150 shadow-md active:scale-95 whitespace-nowrap" href="{{ route('contact') }}">
<span>Initier une discussion</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</main>
<!-- ========================================================================= -->
<!-- Footer (Shared Component Execution via JSON Blueprint)                    -->
<!-- ========================================================================= -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30 docked full-width bottom mt-auto">
<div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
<!-- Brand & Copyright Text from JSON -->
<div class="flex flex-col sm:flex-row items-center gap-3 text-center sm:text-left">
<div class="font-code-md text-code-md font-bold text-on-surface dark:text-on-surface flex items-center gap-1.5">
<span class="text-primary">&gt;_</span>
<span>Nestor KPADJA</span>
</div>
<span class="text-outline-variant hidden sm:inline">|</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
          © 2025 Nestor KPADJA. Architectures Distribuées &amp; Protocoles Décentralisés. Lomé, Togo.
        </p>
</div>
<!-- Links from JSON -->
<nav class="flex flex-wrap items-center justify-center gap-6">
@if(!empty($siteSettings['github_url']))
<a class="text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="{{ $siteSettings['github_url'] }}" rel="noopener noreferrer" target="_blank">GitHub</a>
@endif
@if(!empty($siteSettings['linkedin_url']))
<a class="text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="{{ $siteSettings['linkedin_url'] }}" rel="noopener noreferrer" target="_blank">LinkedIn</a>
@endif
@if(isset($socialLinks))
@foreach($socialLinks as $sLink)
<a class="text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="{{ $sLink->url }}" rel="noopener noreferrer" target="_blank">{{ $sLink->label }}</a>
@endforeach
@endif
<a class="text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" href="{{ route('contact') }}">Contact</a>
</nav>
</div>
</footer>
@include('partials.project-links')
@include('partials.navigation')
</body></html>
