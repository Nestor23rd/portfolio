<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Compétences techniques | Nestor KPADJA — Ingénieur Logiciel &amp; Architecte</title>
<!-- Google Fonts: Space Grotesk, Inter, JetBrains Mono -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config Verbatim from System Guidance -->
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface-dim": "#0d1322",
            "surface-container-lowest": "#080e1d",
            "primary": "#adc6ff",
            "secondary-fixed-dim": "#ffb95f",
            "on-primary-container": "#00285d",
            "inverse-primary": "#005ac2",
            "on-secondary-fixed": "#2a1700",
            "surface-container-high": "#242a3a",
            "error": "#ffb4ab",
            "secondary-fixed": "#ffddb8",
            "error-container": "#93000a",
            "surface": "#0d1322",
            "tertiary-container": "#df7412",
            "on-error-container": "#ffdad6",
            "on-background": "#dde2f8",
            "secondary-container": "#ee9800",
            "tertiary-fixed-dim": "#ffb786",
            "surface-container": "#191f2f",
            "on-tertiary": "#502400",
            "background": "#0d1322",
            "inverse-surface": "#dde2f8",
            "surface-container-low": "#151b2b",
            "on-surface-variant": "#c2c6d6",
            "secondary": "#ffb95f",
            "inverse-on-surface": "#2a3040",
            "on-secondary-fixed-variant": "#653e00",
            "on-secondary": "#472a00",
            "tertiary-fixed": "#ffdcc6",
            "on-secondary-container": "#5b3800",
            "tertiary": "#ffb786",
            "outline-variant": "#424754",
            "on-surface": "#dde2f8",
            "outline": "#8c909f",
            "on-tertiary-fixed": "#311400",
            "on-tertiary-container": "#461f00",
            "surface-variant": "#2f3445",
            "on-primary": "#002e6a",
            "primary-fixed": "#d8e2ff",
            "primary-fixed-dim": "#adc6ff",
            "on-error": "#690005",
            "surface-bright": "#33394a",
            "on-tertiary-fixed-variant": "#723600",
            "on-primary-fixed": "#001a42",
            "surface-container-highest": "#2f3445",
            "primary-container": "#4d8eff",
            "surface-tint": "#adc6ff",
            "on-primary-fixed-variant": "#004395"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "gutter-mobile": "1rem",
            "gutter": "1.5rem",
            "space-sm": "0.5rem",
            "space-lg": "1.5rem",
            "margin": "3rem",
            "space-md": "1rem",
            "margin-mobile": "1.25rem",
            "space-xl": "2.5rem",
            "space-2xl": "4rem",
            "space-xs": "0.25rem"
          },
          "fontFamily": {
            "headline-sm": ["Space Grotesk"],
            "label-md": ["Inter"],
            "headline-lg-mobile": ["Space Grotesk"],
            "body-md": ["Inter"],
            "code-lg": ["JetBrains Mono"],
            "code-sm": ["JetBrains Mono"],
            "body-sm": ["Inter"],
            "headline-md": ["Space Grotesk"],
            "label-sm": ["JetBrains Mono"],
            "body-lg": ["Inter"],
            "code-md": ["JetBrains Mono"],
            "headline-xl-mobile": ["Space Grotesk"],
            "headline-xl": ["Space Grotesk"],
            "headline-lg": ["Space Grotesk"]
          },
          "fontSize": {
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "label-md": ["13px", { "lineHeight": "16px", "fontWeight": "500" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
            "code-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }],
            "code-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500" }],
            "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
            "code-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }],
            "headline-xl-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-xl": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }]
          }
        },
      },
    }
  </script>
<style>
    /* Engineering Blueprint Grid Texture */
    .bg-grid-engineer {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(66, 71, 84, 0.12) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(66, 71, 84, 0.12) 1px, transparent 1px);
    }
    
    /* Terminal caret blinking */
    @keyframes console-blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0; }
    }
    .console-cursor {
      animation: console-blink 1.06s infinite step-start;
    }

    /* Subtle Cathode Ray Card Inset Glow */
    .card-specular-top {
      position: relative;
    }
    .card-specular-top::before {
      content: '';
      position: absolute;
      top: 0;
      left: 10%;
      right: 10%;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(173, 198, 255, 0.45) 50%, transparent);
      opacity: 0;
      transition: opacity 0.25s ease-in-out;
    }
    .card-specular-top:hover::before {
      opacity: 1;
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-background text-on-surface font-body-md text-body-md min-h-screen selection:bg-primary selection:text-on-primary-container bg-grid-engineer relative antialiased flex flex-col">
<!-- ========================================================================= -->
<!-- 1. TopNavBar (Shared Component JSON Execution) -->
<!-- ========================================================================= -->
<header class="docked full-width top-0 fixed z-50 bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30">
<div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
<!-- Brand Logo -->
<a class="font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2 group" href="#">
<span class="text-secondary font-code-md text-code-lg">&gt;_</span>
<span class="hover:text-primary transition-colors duration-150">Nestor KPADJA</span>
</a>
<!-- Navigation Links (Active: "Compétences") -->
<nav class="hidden md:flex items-center gap-8 lg:gap-10">
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#accueil">
          Accueil
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#a-propos">
          À propos
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#projets">
          Projets
        </a>
<!-- ACTIVE MATCH: Compétences -->
<a aria-current="page" class="text-primary dark:text-primary font-code-md text-code-md border-b-2 border-primary pb-1" href="#competences">
          Compétences
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#experience">
          Expérience
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="{{ route('contact') }}">
          Contact
        </a>
</nav>
<!-- Trailing Action: "Me contacter" & Icon: "terminal" -->
<div class="flex items-center gap-4">
<button aria-label="Ouvrir console" class="hidden sm:flex items-center justify-center p-2 rounded text-on-surface-variant hover:text-primary transition-colors duration-150" type="button">
<span class="material-symbols-outlined text-[20px]" data-icon="terminal">terminal</span>
</button>
<a class="bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold px-4 py-2 rounded-lg hover:bg-secondary transition-colors duration-150 shadow-sm flex items-center gap-1.5 active:scale-95" href="{{ route('contact') }}">
<span>Me contacter</span>
<span class="material-symbols-outlined text-[16px]" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</header>
<!-- ========================================================================= -->
<!-- Main Content Canvas -->
<!-- ========================================================================= -->
<main class="flex-grow pt-28 pb-20 w-full max-w-7xl mx-auto px-6 md:px-12">
<!-- 2. Section Header: Terminal Protocol Style -->
<section class="mb-14">
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-8 border-b border-outline-variant/30">
<div class="space-y-3">
<!-- Terminal Prompt Subhead -->
<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-surface-container-low border border-outline-variant/40">
<span class="text-secondary font-code-sm text-code-sm font-semibold">&gt;_</span>
<span class="text-primary font-code-sm text-code-sm tracking-wide">Ma boîte à outils</span>
<span class="w-2 h-4 bg-primary inline-block console-cursor ml-0.5"></span>
</div>
<!-- Main Headline with Electric Blue to Amber Subtle Gradient -->
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
            Compétences <span class="bg-gradient-to-r from-primary via-primary-fixed-dim to-secondary bg-clip-text text-transparent">techniques</span>
</h1>
<!-- Engineer Subtitle -->
<p class="text-on-surface-variant font-body-lg text-body-lg max-w-2xl">
            Technologies maîtrisées, architectures éprouvées et standards de développement appliqués en production sur des systèmes transactionnels et distribués.
          </p>
</div>
<!-- Terminal Status Badge Cluster -->
<div class="flex flex-col items-start lg:items-end gap-2 shrink-0">
<div class="flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 font-code-sm text-code-sm text-on-surface-variant shadow-inner">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="text-outline font-normal">STATUS:</span>
<span class="text-on-surface font-semibold">ACTIVE_TOOLCHAIN</span>
<span class="text-outline-variant">|</span>
<span class="text-secondary font-semibold">v2.4.0</span>
</div>
<p class="font-code-sm text-code-sm text-outline">
            SYS_HASH: <span class="text-on-surface-variant">0x7F4A...B91C</span> · Lomé (GMT+0)
          </p>
</div>
</div>
</section>
<!-- 3. Technical Skills 4-Column Grid -->
<section class="mb-20">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Column 1: Langages -->
<div class="card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 hover:border-primary/40 group">
<div>
<!-- Column Header -->
<div class="flex items-center justify-between pb-4 mb-5 border-b border-outline-variant/30">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 group-hover:border-primary/50 transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="code">code</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary block leading-none mb-1">MODULE_01</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Langages</h2>
</div>
</div>
<span class="font-code-sm text-code-sm text-outline px-2 py-0.5 rounded bg-surface-container">6 ITEMS</span>
</div>
<!-- Skills Items -->
<div class="space-y-3">
<!-- Item: Java -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Java</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-primary border border-primary/20">Principal</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Core, SE 21+, multi-threading, concurrency models &amp; garbage collection tuning.
                </p>
</div>
<!-- Item: Kotlin -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Kotlin</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface-variant border border-outline-variant/30">Avancé</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Coroutines, asynchronous flows, backend microservices &amp; mobile interop.
                </p>
</div>
<!-- Item: Python -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Python</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface-variant border border-outline-variant/30">Prod</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Scripting système, intégrations IA &amp; data parsing, architectures API FastAPI.
                </p>
</div>
<!-- Item: PHP -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">PHP</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface-variant border border-outline-variant/30">Modern 8.x</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Backend robuste, POO stricte, design patterns &amp; écosystème web d'entreprise.
                </p>
</div>
<!-- Item: TypeScript -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">TypeScript</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-primary border border-primary/20">Fullstack</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Typage strict, interfaces complexes, runtime validation &amp; tooling moderne.
                </p>
</div>
<!-- Item: SQL / NoSQL -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">SQL / NoSQL</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-secondary border border-secondary/20">Querying</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Requêtes avancées, CTEs, modélisation relationnelle &amp; documents JSONB.
                </p>
</div>
</div>
</div>
<!-- Bottom Footer Metric -->
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center justify-between text-outline font-code-sm text-code-sm">
<span>CORE_LANGS</span>
<span class="text-primary font-mono font-medium">STRICT_TYPES</span>
</div>
</div>
<!-- Column 2: Frameworks & Librairies -->
<div class="card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 hover:border-primary/40 group">
<div>
<!-- Column Header -->
<div class="flex items-center justify-between pb-4 mb-5 border-b border-outline-variant/30">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 group-hover:border-primary/50 transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="deployed_code">deployed_code</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary block leading-none mb-1">MODULE_02</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Frameworks</h2>
</div>
</div>
<span class="font-code-sm text-code-sm text-outline px-2 py-0.5 rounded bg-surface-container">3 STACKS</span>
</div>
<!-- Skills Items -->
<div class="space-y-4">
<!-- Item: Spring Boot -->
<div class="p-4 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Spring Boot</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-2 py-0.5 rounded bg-primary-container/20 text-primary border border-primary/30">Microservices</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm mb-3">
                  Architecture résiliente d'entreprise, Spring Security (OAuth2/JWT), Spring Data JPA &amp; REST APIs scalables.
                </p>
<!-- Detailed Tags -->
<div class="flex flex-wrap gap-1.5">
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Spring Cloud</span>
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Hibernate</span>
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Maven</span>
</div>
</div>
<!-- Item: Angular -->
<div class="p-4 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Angular</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-2 py-0.5 rounded bg-surface-container-high text-primary border border-primary/30">Enterprise SPA</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm mb-3">
                  Single Page Applications complexes, RxJS reactive patterns, composabilité modulaire &amp; state management.
                </p>
<div class="flex flex-wrap gap-1.5">
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">RxJS</span>
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">NgRx</span>
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Signals</span>
</div>
</div>
<!-- Item: Laravel -->
<div class="p-4 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Laravel</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-2 py-0.5 rounded bg-secondary/10 text-secondary border border-secondary/30">RESTful MVC</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm mb-3">
                  Conception d'APIs REST haute vélocité, architecture MVC structurée, Eloquent ORM &amp; workers asynchrones.
                </p>
<div class="flex flex-wrap gap-1.5">
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Eloquent</span>
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Queues</span>
<span class="font-code-sm text-[10px] px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Artisan</span>
</div>
</div>
</div>
</div>
<!-- Bottom Footer Metric -->
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center justify-between text-outline font-code-sm text-code-sm">
<span>APP_FRAMEWORK</span>
<span class="text-emerald-400 font-mono font-medium">TIER_1_TESTED</span>
</div>
</div>
<!-- Column 3: Bases de données & Outils -->
<div class="card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 hover:border-primary/40 group">
<div>
<!-- Column Header -->
<div class="flex items-center justify-between pb-4 mb-5 border-b border-outline-variant/30">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 group-hover:border-primary/50 transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="database">database</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary block leading-none mb-1">MODULE_03</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Data &amp; Infra</h2>
</div>
</div>
<span class="font-code-sm text-code-sm text-outline px-2 py-0.5 rounded bg-surface-container">4 ENGINES</span>
</div>
<!-- Skills Items -->
<div class="space-y-3">
<!-- Item: PostgreSQL -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">PostgreSQL</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-primary border border-primary/20">ACID Core</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Indexation avancée (B-Tree, GIN), plans d'exécution EXPLAIN ANALYZE &amp; clustering.
                </p>
</div>
<!-- Item: MySQL -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">MySQL</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface-variant border border-outline-variant/30">RDBMS</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Moteur InnoDB, réplication primaire/secondaire, intégrité référentielle et locking.
                </p>
</div>
<!-- Item: Oracle Database -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Oracle DB</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-secondary border border-secondary/20">Enterprise</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Procédures stockées PL/SQL, schémas critiques et gestion de volumétrie bancaire.
                </p>
</div>
<!-- Item: Docker -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Docker</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-primary-container/20 text-primary border border-primary/30">Container</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Multi-stage builds légers, orchestrations Docker Compose locales &amp; isolation des environnements.
                </p>
</div>
</div>
</div>
<!-- Bottom Footer Metric -->
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center justify-between text-outline font-code-sm text-code-sm">
<span>STORAGE_SPEC</span>
<span class="text-primary font-mono font-medium">ACID_COMPLIANT</span>
</div>
</div>
<!-- Column 4: Méthodologies & Workflow -->
<div class="card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 flex flex-col justify-between transition-all duration-200 hover:border-primary/40 group">
<div>
<!-- Column Header -->
<div class="flex items-center justify-between pb-4 mb-5 border-b border-outline-variant/30">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 group-hover:border-primary/50 transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="schema">schema</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary block leading-none mb-1">MODULE_04</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Workflow</h2>
</div>
</div>
<span class="font-code-sm text-code-sm text-outline px-2 py-0.5 rounded bg-surface-container">4 PRAXIS</span>
</div>
<!-- Skills Items -->
<div class="space-y-3">
<!-- Item: Agile / Scrum -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Agile / Scrum</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface-variant border border-outline-variant/30">Cadence</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Gestion de sprints itératifs, rédaction de user stories techniques et rituels d'ingénierie.
                </p>
</div>
<!-- Item: CI / CD -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">CI / CD</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-primary border border-primary/20">Pipelines</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Pipelines automatisés (GitHub Actions / GitLab CI), exécution de tests unitaires et intégration continue.
                </p>
</div>
<!-- Item: Git / GitHub / GitLab -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">Git Ecosystem</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface-variant border border-outline-variant/30">VCS</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Gitflow rigoureux, rebases atomiques, revues de code critiques et gestion des pull requests.
                </p>
</div>
<!-- Item: DevOps -->
<div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30 hover:border-primary/40 hover:bg-surface-container transition-all">
<div class="flex items-center justify-between mb-1.5">
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span class="font-code-md text-code-md font-semibold text-on-surface">DevOps Culture</span>
</div>
<span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-secondary border border-secondary/20">Automations</span>
</div>
<p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5">
                  Observabilité, logging centralisé, gestion sécurisée des secrets d'infrastructure.
                </p>
</div>
</div>
</div>
<!-- Bottom Footer Metric -->
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center justify-between text-outline font-code-sm text-code-sm">
<span>DELIVERY_CYCLE</span>
<span class="text-secondary font-mono font-medium">AUTOMATED</span>
</div>
</div>
</div>
</section>
<!-- 4. Section: Certifications & Distinctions -->
<section class="mb-20">
<!-- Section Title Terminal Prompt -->
<div class="flex items-center gap-3 mb-8">
<span class="text-secondary font-code-md text-code-md font-bold">&gt;_</span>
<h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">
          Validations officielles &amp; Engagements
        </h2>
<div class="h-px bg-outline-variant/30 flex-grow ml-4"></div>
<span class="font-code-sm text-code-sm text-outline hidden sm:inline">VERIFIED_CREDENTIALS</span>
</div>
<!-- Two Modern Horizontal Cards -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<!-- Card 1: Blockchain - Linux Foundation -->
<div class="card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 flex flex-col justify-between hover:border-primary/50 transition-all duration-200">
<div>
<!-- Header with Badge & Organization -->
<div class="flex items-start justify-between gap-4 mb-4">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary border border-outline-variant/40 shrink-0">
<span class="material-symbols-outlined text-[28px]" data-icon="token">token</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block">The Linux Foundation</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">
                    Blockchain — Understanding Its Uses and Implications
                  </h3>
</div>
</div>
<span class="font-code-sm text-code-sm px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 shrink-0 font-medium">
                CERTIFIED
              </span>
</div>
<!-- Description -->
<p class="text-on-surface-variant font-body-md text-body-md mb-6 leading-relaxed">
              Validation formelle des mécanismes de consensus décentralisés (PoW, PoS, BFT), structures de registres immuables, smart contracts et cas d'usage industriels au sein de consortia d'entreprise.
            </p>
<!-- Verification Metadata Box -->
<div class="p-3.5 rounded-lg bg-surface-container-lowest border border-outline-variant/30 font-code-sm text-code-sm text-on-surface-variant flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
<div class="flex items-center gap-2">
<span class="text-outline">ISSUER_ID:</span>
<span class="text-primary font-mono">LF-BC-89410-NX</span>
</div>
<div class="flex items-center gap-2">
<span class="text-outline">RECORD_SHA:</span>
<span class="text-on-surface font-mono">c47b9...e281</span>
</div>
</div>
</div>
<!-- Bottom Action -->
<div class="pt-4 border-t border-outline-variant/25 flex items-center justify-between">
<span class="font-code-sm text-code-sm text-outline">Date d'émission : Mai 2024</span>
<a class="inline-flex items-center gap-1.5 text-primary font-code-sm text-code-sm font-semibold hover:underline group" href="#">
<span>Vérifier la certification</span>
<span class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" data-icon="north_east">north_east</span>
</a>
</div>
</div>
<!-- Card 2: Hackathon CodeQuity -->
<div class="card-specular-top bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 flex flex-col justify-between hover:border-secondary/50 transition-all duration-200">
<div>
<!-- Header with Badge & Organization -->
<div class="flex items-start justify-between gap-4 mb-4">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-secondary border border-outline-variant/40 shrink-0">
<span class="material-symbols-outlined text-[28px]" data-icon="emoji_events">emoji_events</span>
</div>
<div>
<span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block">Compétition Technologique</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">
                    Hackathon CodeQuity — Participation &amp; Finaliste
                  </h3>
</div>
</div>
<span class="font-code-sm text-code-sm px-2.5 py-1 rounded bg-secondary/15 text-secondary border border-secondary/30 shrink-0 font-medium">
                FINALISTE
              </span>
</div>
<!-- Description -->
<p class="text-on-surface-variant font-body-md text-body-md mb-6 leading-relaxed">
              Conception et prototypage intensif en 48 heures d'une solution logicielle à fort impact sociétal. Architecture d'un backend scalable intégrant des micro-services découplés pour traiter des flux de données en temps réel.
            </p>
<!-- Verification Metadata Box -->
<div class="p-3.5 rounded-lg bg-surface-container-lowest border border-outline-variant/30 font-code-sm text-code-sm text-on-surface-variant flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
<div class="flex items-center gap-2">
<span class="text-outline">RANG:</span>
<span class="text-secondary font-mono">Top 5 Finalistes</span>
</div>
<div class="flex items-center gap-2">
<span class="text-outline">PROJET:</span>
<span class="text-on-surface font-mono">CivicLedger-Core</span>
</div>
</div>
</div>
<!-- Bottom Action -->
<div class="pt-4 border-t border-outline-variant/25 flex items-center justify-between">
<span class="font-code-sm text-code-sm text-outline">Mention honorable du jury</span>
<a class="inline-flex items-center gap-1.5 text-secondary font-code-sm text-code-sm font-semibold hover:underline group" href="#">
<span>Voir le projet Github</span>
<span class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" data-icon="north_east">north_east</span>
</a>
</div>
</div>
</div>
</section>
<!-- 5. Engineer Call to Action Banner -->
<section id="contact" class="mt-8">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-low border border-outline-variant/40 p-8 md:p-12">
<!-- Subtle Top Specular Line -->
<div class="absolute top-0 left-1/4 right-1/4 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
<div class="max-w-2xl space-y-3">
<div class="flex items-center gap-2 text-secondary font-code-sm text-code-sm">
<span class="material-symbols-outlined text-[18px]" data-icon="terminal">terminal</span>
<span>// DIRECT_COLLABORATION_CHANNEL</span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface">
              Un projet technique spécifique en tête ?
            </h2>
<p class="text-on-surface-variant font-body-md text-body-md">
              Échangeons sur l'architecture adaptée, le dimensionnement des bases de données ou la robustesse de vos futures APIs.
            </p>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 shrink-0">
<a class="bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3.5 rounded-lg hover:bg-secondary-fixed-dim transition-all duration-150 text-center shadow-lg active:scale-95 flex items-center justify-center gap-2" href="{{ route('contact') }}">
<span>Initier une session technique</span>
<span class="material-symbols-outlined text-[18px]" data-icon="send">send</span>
</a>
<a class="border border-outline-variant/50 text-on-surface hover:border-primary font-code-md text-code-md px-5 py-3.5 rounded-lg text-center transition-colors bg-surface-container hover:bg-surface-container-high" href="mailto:contact@nestorkpadja.dev">
              &gt; copier_email
            </a>
</div>
</div>
</div>
</section>
</main>
<!-- ========================================================================= -->
<!-- 6. Footer (Shared Component JSON Execution) -->
<!-- ========================================================================= -->
<footer class="docked full-width bottom bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
<div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
<!-- Brand & Copyright -->
<div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
<span class="font-code-md text-code-md font-bold text-on-surface dark:text-on-surface">
          &gt;_ Nestor KPADJA
        </span>
<span class="text-outline-variant hidden sm:inline">|</span>
<p class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant">
          © 2025 Nestor KPADJA. Architectures Distribuées &amp; Protocoles Décentralisés. Lomé, Togo.
        </p>
</div>
<!-- Footer Links & Node Status -->
<div class="flex flex-wrap items-center justify-center gap-6">
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="https://github.com" rel="noopener noreferrer" target="_blank">
          GitHub
        </a>
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="https://linkedin.com" rel="noopener noreferrer" target="_blank">
          LinkedIn
        </a>
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="#documentation">
          Documentation
        </a>
<a class="font-code-sm text-code-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary transition-colors duration-150" href="#pgp">
          PGP Key
        </a>
<!-- System Node Operational Status -->
<div class="flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container border border-outline-variant/40 font-code-sm text-code-sm">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span class="text-emerald-400 font-medium">Status: 100% OPERATIONAL</span>
</div>
</div>
</div>
</footer>
@include('partials.navigation')
@include('partials.public-skills')
</body></html>
