<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nestor KPADJA — Ingénieur Backend &amp; Architectures Blockchain</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<!-- TOP NAV BAR (Shared Component Anchor) -->
<header class="bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md docked full-width top-0 fixed z-50 border-b border-outline-variant/30">
<div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
<!-- Brand Anchor -->
<a class="font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2 group" href="#">
<span class="text-primary group-hover:text-secondary transition-colors">&gt;_</span>
<span class="text-on-surface tracking-tight">Nestor KPADJA</span>
<span class="flex items-center gap-1.5 ml-2.5 px-2 py-0.5 rounded-full bg-surface-container-low border border-outline-variant/40">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="font-code-sm text-code-sm text-emerald-400 tracking-normal font-semibold">Online</span>
</span>
</a>
<!-- Desktop Nav Links -->
<nav class="hidden md:flex items-center gap-8 lg:gap-10">
<a class="text-primary dark:text-primary font-code-md text-code-md border-b-2 border-primary pb-1" href="#">Accueil</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#apropos">À propos</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#projets">Projets</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#competences">Compétences</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#experience">Expérience</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#contact">Contact</a>
</nav>
<!-- Trailing Primary Action -->
<div class="flex items-center gap-3">
<button class="hidden sm:inline-flex p-2 text-on-surface-variant hover:text-primary transition-colors duration-150" title="Terminal Interface" type="button">
<span class="material-symbols-outlined">terminal</span>
</button>
<a class="inline-flex items-center gap-2 bg-secondary-container hover:bg-secondary text-surface-container-lowest font-body-md text-label-md font-semibold px-4 py-2 rounded-lg transition-all duration-150 shadow-[0_0_16px_rgba(245,158,11,0.25)] hover:shadow-[0_0_20px_rgba(245,158,11,0.45)] active:scale-95" href="#contact">
<span>Me contacter</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</header>
<!-- MAIN CANVAS -->
<main class="flex-grow pt-16">
<!-- HERO SECTION -->
<section class="relative min-h-[calc(100vh-4rem)] flex flex-col justify-between max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-16">
<!-- Subtle Grid Background Overlay -->
<div class="absolute inset-0 bg-[radial-gradient(#191f2f_1px,transparent_1px)] [background-size:28px_28px] opacity-40 pointer-events-none -z-10"></div>
<!-- Hero Core Content (2 Columns Desktop) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center flex-grow py-8">
<!-- Left Column: Content & Engineering Identity -->
<div class="lg:col-span-7 flex flex-col items-start gap-6">
<!-- Terminal Badge Indicator -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/60 shadow-sm">
<span class="text-primary font-code-md text-code-md font-bold">&gt;</span>
<span class="font-code-md text-code-sm text-primary tracking-wide">Développeur Backend &amp; Blockchain</span>
<span class="w-2 h-2 rounded-full bg-secondary animate-ping ml-1"></span>
</div>
<!-- Main Title (H1) -->
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight leading-tight">
            Kokoussè Nestor <br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-primary-fixed to-secondary">KPADJA</span>
</h1>
<!-- Lead Subtitle -->
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
            Je conçois des architectures backend robustes et des solutions blockchain pour des projets à impact réel.
          </p>
<!-- Dual CTAs -->
<div class="flex flex-wrap items-center gap-4 pt-2 w-full sm:w-auto">
<a class="inline-flex items-center justify-center gap-2.5 bg-primary-container text-on-surface font-body-md text-label-md font-semibold px-6 py-3 rounded-lg shadow-[0_0_20px_rgba(77,142,255,0.35)] hover:bg-primary hover:text-on-primary transition-all duration-150 active:scale-95 group" href="#projets">
<span>Voir mes projets</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">east</span>
</a>
<a class="inline-flex items-center justify-center gap-2.5 bg-transparent border border-outline-variant/70 hover:border-primary text-on-surface hover:bg-surface-container-low font-body-md text-label-md font-medium px-6 py-3 rounded-lg transition-all duration-150 active:scale-95" href="#cv">
<span class="material-symbols-outlined">download</span>
<span>Télécharger mon CV</span>
</a>
</div>
<!-- Cryptographic Signature / Commit Stamp -->
<div class="flex items-center gap-3 pt-4 border-t border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
<span class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px]">verified</span>
<span>GPG Signed</span>
</span>
<span class="text-outline-variant">•</span>
<span class="text-on-surface-variant">Commit: <span class="text-on-surface">3f88c21a</span></span>
<span class="text-outline-variant">•</span>
<span class="text-on-surface-variant">Lomé, TG (+00:00 UTC)</span>
</div>
</div>
<!-- Right Column: Interactive Distributed System & Terminal Architecture Window -->
<div class="lg:col-span-5">
<div class="specular-card bg-surface-container-lowest border border-outline-variant/50 rounded-xl overflow-hidden shadow-2xl">
<!-- Terminal Header -->
<div class="flex items-center justify-between px-4 py-3 bg-surface-container border-b border-outline-variant/40">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-error/70"></span>
<span class="w-3 h-3 rounded-full bg-secondary/70"></span>
<span class="w-3 h-3 rounded-full bg-emerald-500/70"></span>
<span class="ml-2 font-code-sm text-code-sm text-on-surface-variant font-mono">~/cluster/mainnet-observer.sh</span>
</div>
<span class="font-code-sm text-code-sm text-secondary bg-surface-container-high px-2 py-0.5 rounded border border-outline-variant/30">L1 :: SYNC</span>
</div>
<!-- Terminal Visual & Distributed Blocks -->
<div class="p-5 font-code-md text-code-sm space-y-4 text-on-surface-variant bg-surface-container-lowest/90">
<div class="flex items-center justify-between border-b border-outline-variant/20 pb-2">
<span class="text-primary flex items-center gap-1.5 font-semibold">
<span class="material-symbols-outlined text-[16px]">dns</span>
<span>CONSENSUS_ENGINE</span>
</span>
<span class="text-emerald-400">POW_BYZANTINE_OK</span>
</div>
<!-- Interconnected Block 1 -->
<div class="p-3 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/60 transition-colors">
<div class="flex items-center justify-between">
<span class="text-secondary font-mono font-bold">BLOCK #18,492,104</span>
<span class="text-[10px] text-on-surface-variant">3s ago</span>
</div>
<p class="text-on-surface text-[12px] truncate mt-1">Hash: <span class="text-primary font-mono">0x7f8a849d...c3a9cf10</span></p>
<div class="flex items-center justify-between mt-2 pt-2 border-t border-outline-variant/20 text-[11px]">
<span>Tx Count: 142</span>
<span class="text-emerald-400">Validated by 32 Nodes</span>
</div>
</div>
<!-- Connecting Line with glowing accent -->
<div class="flex items-center justify-center -my-2 relative z-10">
<div class="h-5 w-0.5 bg-gradient-to-b from-primary to-secondary"></div>
</div>
<!-- Interconnected Block 2 -->
<div class="p-3 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/60 transition-colors">
<div class="flex items-center justify-between">
<span class="text-secondary font-mono font-bold">BLOCK #18,492,105</span>
<span class="text-[10px] text-emerald-400 animate-pulse">MINED NOW</span>
</div>
<p class="text-on-surface text-[12px] truncate mt-1">Merkle Root: <span class="text-primary font-mono">0x4b91a92e...f8120be7</span></p>
<div class="flex items-center justify-between mt-2 pt-2 border-t border-outline-variant/20 text-[11px]">
<span>Gas Used: 84.2%</span>
<span class="text-primary">EVM Execution OK</span>
</div>
</div>
<!-- Live Stream Micro-Console Log -->
<div class="p-2.5 rounded bg-surface-dim font-code-sm text-[11px] leading-tight space-y-1 text-on-surface-variant border border-outline-variant/30">
<div class="flex items-center gap-2">
<span class="text-primary">&gt;&gt;</span>
<span>[RPC:8545] Handshake verified via TLS 1.3</span>
</div>
<div class="flex items-center gap-2 text-secondary">
<span class="text-secondary">&gt;&gt;</span>
<span>Hyperledger Fabric channel 'supply-chain' active</span>
</div>
<div class="flex items-center gap-2 text-on-surface">
<span class="text-emerald-400">&gt;&gt;</span>
<span>Zero-Knowledge Proof verified (Groth16 - 12ms)</span>
</div>
</div>
</div>
<!-- Card Bottom Metrics Tray -->
<div class="grid grid-cols-3 px-4 py-2.5 bg-surface-container-high/60 border-t border-outline-variant/40 text-center font-code-sm text-code-sm">
<div>
<span class="text-on-surface-variant text-[10px] uppercase block">Throughput</span>
<span class="font-bold text-on-surface">4,200 TPS</span>
</div>
<div class="border-x border-outline-variant/30">
<span class="text-on-surface-variant text-[10px] uppercase block">Latency</span>
<span class="font-bold text-emerald-400">14 ms</span>
</div>
<div>
<span class="text-on-surface-variant text-[10px] uppercase block">Network Uptime</span>
<span class="font-bold text-primary">99.99%</span>
</div>
</div>
</div>
</div>
</div>
<!-- Bottom Tech Stack Ribbon / Ticker -->
<div class="pt-8 pb-4 border-t border-outline-variant/30">
<div class="flex flex-col md:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-2 text-on-surface-variant font-code-md text-code-sm shrink-0">
<span class="material-symbols-outlined text-primary text-[18px]">terminal</span>
<span class="uppercase tracking-wider">Technologies Clés</span>
</div>
<!-- Stack Badges -->
<div class="flex flex-wrap items-center gap-2.5 justify-center md:justify-end">
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 transition-colors">
<span class="font-code-md text-code-sm text-on-surface font-semibold">Java</span>
<span class="text-[11px] text-secondary font-mono">SE 21+</span>
</div>
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 transition-colors">
<span class="font-code-md text-code-sm text-on-surface font-semibold">Spring Boot</span>
<span class="text-[11px] text-primary font-mono">3.x</span>
</div>
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 transition-colors">
<span class="font-code-md text-code-sm text-on-surface font-semibold">Angular</span>
<span class="text-[11px] text-on-surface-variant font-mono">v17</span>
</div>
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 transition-colors">
<span class="font-code-md text-code-sm text-on-surface font-semibold">Docker</span>
<span class="text-[11px] text-emerald-400 font-mono">Containers</span>
</div>
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 transition-colors">
<span class="font-code-md text-code-sm text-on-surface font-semibold">PostgreSQL</span>
<span class="text-[11px] text-primary font-mono">RDBMS</span>
</div>
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 transition-colors">
<span class="font-code-md text-code-sm text-on-surface font-semibold">Kotlin</span>
<span class="text-[11px] text-secondary font-mono">Coroutines</span>
</div>
</div>
</div>
</div>
</section>
<!-- SECTION APERÇU RAPIDE (Key Metrics / Quick Overview) -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-24 border-t border-outline-variant/20">
<!-- Section Header -->
<div class="flex items-center justify-between mb-8 pb-4 border-b border-outline-variant/30">
<div class="flex items-center gap-3">
<span class="font-code-md text-code-md text-primary font-semibold">// apercu-rapide.sh</span>
<span class="text-outline-variant">--telemetry</span>
</div>
<div class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span>Données vérifiées</span>
</div>
</div>
<!-- 4 Columns Key Metrics Bento Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Metric Card 1: Major Projects -->
<div class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-primary/70 rounded-[10px] p-6 flex flex-col justify-between transition-all duration-200">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-primary-container/20 border border-primary/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">deployed_code</span>
</div>
<span class="font-code-sm text-code-sm text-on-surface-variant uppercase tracking-wider">Livrables</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">3+</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">projets majeurs livrés</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-primary flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">verified_user</span>
<span>Production-ready &amp; audits validés</span>
</div>
</div>
<!-- Metric Card 2: Blockchain Certification -->
<div class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-secondary/70 rounded-[10px] p-6 flex flex-col justify-between transition-all duration-200">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-secondary-container/20 border border-secondary/30 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">workspace_premium</span>
</div>
<span class="font-code-sm text-code-sm text-secondary uppercase tracking-wider">Certifié</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">1</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">certification Blockchain (Linux Foundation)</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-secondary flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">token</span>
<span>Hyperledger / Linux Foundation</span>
</div>
</div>
<!-- Metric Card 3: Enterprise Tech Stack -->
<div class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-primary/70 rounded-[10px] p-6 flex flex-col justify-between transition-all duration-200">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-surface-container border border-outline-variant/50 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">memory</span>
</div>
<span class="font-code-sm text-code-sm text-on-surface-variant uppercase tracking-wider">Core Engine</span>
</div>
<div>
<div class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">Stack</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">Java, Kotlin, Spring Boot, Angular</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">hub</span>
<span>Microservices &amp; Event-Driven</span>
</div>
</div>
<!-- Metric Card 4: Location & Work Mode -->
<div class="specular-card bg-surface-container-low border border-outline-variant/50 hover:border-emerald-500/70 rounded-[10px] p-6 flex flex-col justify-between transition-all duration-200">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
<span class="material-symbols-outlined">location_on</span>
</div>
<span class="flex items-center gap-1 font-code-sm text-code-sm text-emerald-400">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span>Ouvert</span>
</span>
</div>
<div>
<div class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight" data-location="Lomé, Togo" style="">Lomé, Togo</div>
<div class="font-body-md text-body-md text-on-surface-variant mt-1">Basé à Lomé, Togo</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/30 font-code-sm text-code-sm text-on-surface flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-emerald-400">public</span>
<span>Remote &amp; Hybride disponible</span>
</div>
</div>
</div>
</section>
</main>
<!-- FOOTER (Shared Component Anchor) -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30">
<div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
<div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
<span class="font-code-md text-code-md font-bold text-on-surface dark:text-on-surface">
          &gt;_ Nestor KPADJA
        </span>
<span class="hidden sm:inline text-outline-variant">|</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
          © 2025 Nestor KPADJA. Architectures Distribuées &amp; Protocoles Décentralisés. Lomé, Togo.
        </p>
</div>
<!-- Links matching JSON exactly -->
<div class="flex items-center flex-wrap justify-center gap-6 font-code-sm text-code-sm">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors" href="https://github.com" rel="noopener noreferrer" target="_blank">GitHub</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors" href="https://linkedin.com" rel="noopener noreferrer" target="_blank">LinkedIn</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#documentation">Documentation</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#pgp">PGP Key</a>
<a class="text-primary dark:text-primary font-medium flex items-center gap-1.5" href="#status">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
<span>Status</span>
</a>
</div>
</div>
</footer>
@include('partials.navigation')
@include('partials.public-home-data')
</body></html>
