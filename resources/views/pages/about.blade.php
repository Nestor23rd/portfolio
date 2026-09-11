<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>À propos - Nestor KPADJA | Ingénierie Backend &amp; Systèmes Distribués</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Theme Config -->
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-primary": "#002e6a",
            "inverse-primary": "#005ac2",
            "inverse-surface": "#dde2f8",
            "primary": "#adc6ff",
            "on-primary-container": "#00285d",
            "secondary-container": "#ee9800",
            "on-secondary": "#472a00",
            "primary-fixed": "#d8e2ff",
            "on-surface-variant": "#c2c6d6",
            "on-error": "#690005",
            "surface-container-high": "#242a3a",
            "inverse-on-surface": "#2a3040",
            "surface-tint": "#adc6ff",
            "secondary-fixed-dim": "#ffb95f",
            "surface-container-lowest": "#080e1d",
            "surface-variant": "#2f3445",
            "surface-bright": "#33394a",
            "background": "#0d1322",
            "tertiary-container": "#df7412",
            "secondary": "#ffb95f",
            "on-primary-fixed-variant": "#004395",
            "surface-container-highest": "#2f3445",
            "on-secondary-fixed-variant": "#653e00",
            "tertiary-fixed": "#ffdcc6",
            "on-tertiary-fixed-variant": "#723600",
            "outline": "#8c909f",
            "on-surface": "#dde2f8",
            "on-primary-fixed": "#001a42",
            "on-secondary-container": "#5b3800",
            "secondary-fixed": "#ffddb8",
            "primary-container": "#4d8eff",
            "primary-fixed-dim": "#adc6ff",
            "surface-container": "#191f2f",
            "error": "#ffb4ab",
            "outline-variant": "#424754",
            "surface-container-low": "#151b2b",
            "surface": "#0d1322",
            "on-error-container": "#ffdad6",
            "on-tertiary-fixed": "#311400",
            "on-background": "#dde2f8",
            "tertiary": "#ffb786",
            "on-tertiary": "#502400",
            "surface-dim": "#0d1322",
            "on-tertiary-container": "#461f00",
            "error-container": "#93000a",
            "on-secondary-fixed": "#2a1700",
            "tertiary-fixed-dim": "#ffb786"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "space-xs": "0.25rem",
            "space-xl": "2.5rem",
            "margin-mobile": "1.25rem",
            "gutter": "1.5rem",
            "gutter-mobile": "1rem",
            "space-2xl": "4rem",
            "margin": "3rem",
            "space-lg": "1.5rem",
            "space-md": "1rem",
            "space-sm": "0.5rem"
          },
          "fontFamily": {
            "body-sm": ["Inter"],
            "headline-xl": ["Space Grotesk"],
            "body-lg": ["Inter"],
            "headline-sm": ["Space Grotesk"],
            "label-sm": ["JetBrains Mono"],
            "headline-xl-mobile": ["Space Grotesk"],
            "body-md": ["Inter"],
            "label-md": ["Inter"],
            "headline-lg-mobile": ["Space Grotesk"],
            "headline-md": ["Space Grotesk"],
            "code-lg": ["JetBrains Mono"],
            "code-md": ["JetBrains Mono"],
            "headline-lg": ["Space Grotesk"],
            "code-sm": ["JetBrains Mono"]
          },
          "fontSize": {
            "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
            "headline-xl": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
            "headline-xl-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
            "label-md": ["13px", { "lineHeight": "16px", "fontWeight": "500" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "code-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }],
            "code-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "code-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500" }]
          }
        }
      }
    };
  </script>
<style>
    .terminal-grid-pattern {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(66, 71, 84, 0.08) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(66, 71, 84, 0.08) 1px, transparent 1px);
    }
    @keyframes pulse-emerald {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(1.15); }
    }
    .pulse-dot {
      animation: pulse-emerald 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary terminal-grid-pattern">
<!-- TopNavBar (Shared Component JSON execution) -->
<header class="docked full-width top-0 fixed z-50 bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30">
<div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
<!-- Brand Logo -->
<a class="font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2 group" href="#">
<span class="text-primary font-bold transition-transform duration-200 group-hover:scale-110">&gt;_</span>
<span class="tracking-normal">Nestor KPADJA</span>
</a>
<!-- Desktop Navigation Links -->
<nav class="hidden md:flex items-center gap-8 lg:gap-10">
<!-- Accueil -->
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">
          Accueil
        </a>
<!-- À propos (ACTIVE) -->
<a class="text-primary dark:text-primary font-code-md text-code-md border-b-2 border-primary pb-1 flex items-center gap-1.5" href="#">
<span class="w-1.5 h-1.5 rounded-full bg-primary inline-block"></span>
          À propos
        </a>
<!-- Projets -->
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">
          Projets
        </a>
<!-- Compétences -->
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">
          Compétences
        </a>
<!-- Expérience -->
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">
          Expérience
        </a>
<!-- Contact -->
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#">
          Contact
        </a>
</nav>
<!-- Trailing Action Cluster -->
<div class="flex items-center gap-3">
<button aria-label="Terminal" class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded flex items-center justify-center" title="Console interactive">
<span class="material-symbols-outlined text-primary text-xl">terminal</span>
</button>
<a class="bg-secondary text-on-secondary font-body-md font-semibold px-4 py-2 rounded-lg transition-all duration-150 active:scale-95 shadow-sm hover:brightness-110 flex items-center gap-1.5" href="#contact">
<span>Me contacter</span>
</a>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="flex-grow pt-28 pb-20 max-w-7xl mx-auto px-6 md:px-12 w-full">
<!-- Section Header Block -->
<div class="mb-12">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-surface-container border border-outline-variant/50 text-primary font-code-sm text-code-sm mb-3">
<span class="material-symbols-outlined text-sm">terminal</span>
<span>&gt;_ Qui suis-je</span>
</div>
<h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface font-bold tracking-tight">
        À propos de <span class="bg-gradient-to-r from-primary via-primary-container to-secondary bg-clip-text text-transparent">moi</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-2 max-w-2xl font-normal">
        Ingénierie logicielle, rigueur d'exécution et culture produit.
      </p>
</div>
<!-- Asymmetric Bento / 2-Column Grid (40% / 60%) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- COLONNE GAUCHE (approx 40% -> 5 cols desktop) -->
<div class="lg:col-span-5 flex flex-col gap-6">
<!-- Profile Frame Card -->
<div class="relative bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 overflow-hidden group">
<!-- Specular top border highlight -->
<div class="absolute inset-x-0 top-0 h-[1px] bg-gradient-to-r from-transparent via-primary/40 to-transparent"></div>
<!-- Image Wrapper with dual glow gradient border -->
<div class="relative mx-auto w-full max-w-xs aspect-square rounded-xl p-1 bg-gradient-to-tr from-primary-container via-outline-variant to-secondary">
<div class="w-full h-full rounded-[10px] overflow-hidden bg-surface-container-lowest relative">
<img alt="Kokoussè Nestor KPADJA" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-out" src="{{ asset('profil.jpeg') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 via-transparent to-transparent"></div>
</div>
</div>
<!-- Identity Details -->
<div class="mt-6 text-center">
<div class="font-headline-sm text-headline-sm text-on-surface tracking-tight">
              Kokoussè Nestor KPADJA
            </div>
<div class="font-code-sm text-code-sm text-primary mt-1 font-medium">
              Backend &amp; Distributed Systems Engineer
            </div>
</div>
<!-- Structured Info Badges -->
<div class="mt-6 flex flex-col gap-2.5">
<!-- Location Badge -->
<div class="flex items-center justify-between px-3.5 py-2 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-base text-primary">location_on</span>
<span>Localisation</span>
</span>
<span class="text-on-surface font-semibold">Lomé, Togo</span>
</div>
<!-- Degree Badge -->
<div class="flex items-center justify-between px-3.5 py-2 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-base text-secondary">school</span>
<span>Formation</span>
</span>
<span class="text-on-surface font-semibold">Licence Génie Logiciel (2026)</span>
</div>
<!-- Status Indicator Badge -->
<div class="flex items-center justify-between px-3.5 py-2 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-base text-primary">verified_user</span>
<span>Statut actuel</span>
</span>
<span class="inline-flex items-center gap-2 text-on-surface font-semibold">
<span class="relative flex h-2 w-2">
<span class="pulse-dot absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
</span>
                Disponible pour opportunités
              </span>
</div>
</div>
<!-- Social & Protocol Links Cluster -->
<div class="mt-6 pt-5 border-t border-outline-variant/30 flex items-center justify-center gap-3">
<a class="px-3 py-2 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 font-code-sm text-code-sm" href="https://linkedin.com" rel="noopener noreferrer" target="_blank" title="LinkedIn">
<span class="material-symbols-outlined text-base">link</span>
<span>LinkedIn</span>
</a>
<a class="px-3 py-2 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 font-code-sm text-code-sm" href="https://github.com" rel="noopener noreferrer" target="_blank" title="GitHub">
<span class="material-symbols-outlined text-base">code</span>
<span>GitHub</span>
</a>
<a class="px-3 py-2 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-secondary text-on-surface-variant hover:text-secondary transition-colors flex items-center gap-1.5 font-code-sm text-code-sm" href="mailto:contact@nestorkpadja.dev" title="Email &amp; Clé PGP">
<span class="material-symbols-outlined text-base">key</span>
<span>PGP / Contact</span>
</a>
</div>
</div>
</div>
<!-- COLONNE DROITE (approx 60% -> 7 cols desktop) -->
<div class="lg:col-span-7 flex flex-col gap-6">
<!-- Bio Card with Terminal Decoration -->
<div class="bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8 relative">
<!-- Terminal Toolbar -->
<div class="flex items-center justify-between border-b border-outline-variant/30 pb-4 mb-5 font-code-sm text-code-sm text-on-surface-variant">
<div class="flex items-center gap-2">
<span class="inline-block w-2.5 h-2.5 rounded-full bg-error/60"></span>
<span class="inline-block w-2.5 h-2.5 rounded-full bg-secondary/60"></span>
<span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-500/60"></span>
<span class="ml-2 text-outline">profile_overview.md</span>
</div>
<span class="text-outline-variant font-code-sm">UTF-8 // Markdown</span>
</div>
<!-- Professional Biography -->
<p class="font-body-lg text-body-lg text-on-surface leading-relaxed mb-4">
            Développeur backend et passionné par les systèmes distribués, je consacre mon énergie à concevoir des solutions logicielles concrètes, fiables et à fort impact. Mon approche allie rigueur architecturale, modélisation solide et pragmatisme opérationnel.
          </p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Au-delà du code, je m'investis activement dans la coordination d'équipes techniques et la gestion rigoureuse de projets informatiques, veillant à transformer des exigences complexes en systèmes pérennes et efficients.
          </p>
</div>
<!-- Atouts Majeurs Section -->
<div>
<!-- Sub-header with terminal tag -->
<div class="flex items-center gap-2 mb-4 font-code-sm text-code-sm text-outline">
<span class="text-secondary font-bold">//</span>
<span class="text-on-surface">atouts_cles.config</span>
<span class="text-outline-variant">— 4 piliers d'ingénierie</span>
</div>
<!-- 4 Pillars Grid (2x2) -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<!-- Atout 1: Autonomie -->
<div class="bg-surface-container-low border border-outline-variant/40 hover:border-primary/40 rounded-xl p-5 transition-all duration-200 group">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-3 border border-outline-variant/30 group-hover:border-primary/50 transition-colors">
<span class="material-symbols-outlined text-lg">bolt</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">
                Autonomie
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Capacité à mener des chantiers de bout en bout, de l'analyse du besoin au déploiement en production.
              </p>
</div>
<!-- Atout 2: Rigueur -->
<div class="bg-surface-container-low border border-outline-variant/40 hover:border-primary/40 rounded-xl p-5 transition-all duration-200 group">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-secondary mb-3 border border-outline-variant/30 group-hover:border-secondary/50 transition-colors">
<span class="material-symbols-outlined text-lg">architecture</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">
                Rigueur
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Respect des standards industriels, architectures propres (Clean Arch, SOLID) et tests automatisés.
              </p>
</div>
<!-- Atout 3: Esprit d'équipe -->
<div class="bg-surface-container-low border border-outline-variant/40 hover:border-primary/40 rounded-xl p-5 transition-all duration-200 group">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-3 border border-outline-variant/30 group-hover:border-primary/50 transition-colors">
<span class="material-symbols-outlined text-lg">groups</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">
                Esprit d'équipe
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Collaboration transparente, revues de code constructives et coordination agile.
              </p>
</div>
<!-- Atout 4: Capacité d'adaptation -->
<div class="bg-surface-container-low border border-outline-variant/40 hover:border-primary/40 rounded-xl p-5 transition-all duration-200 group">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-secondary mb-3 border border-outline-variant/30 group-hover:border-secondary/50 transition-colors">
<span class="material-symbols-outlined text-lg">sync_saved_locally</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">
                Capacité d'adaptation
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Veille technologique continue, maîtrise rapide de nouvelles stacks et environnements distribués.
              </p>
</div>
</div>
</div>
<!-- Centres d'intérêt & passions Block -->
<div class="bg-surface-container-low border border-outline-variant/40 rounded-xl p-6">
<div class="flex items-center gap-2 font-code-sm text-code-sm text-primary mb-3">
<span>&gt;_</span>
<span class="text-on-surface font-semibold">Centres d'intérêt &amp; passions</span>
</div>
<div class="flex flex-wrap gap-2.5">
<!-- Chip 1 -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 text-on-surface font-code-sm text-code-sm hover:border-outline transition-colors">
<span class="text-base">⚽</span>
<span>Football (Stratégie &amp; esprit collectif)</span>
</div>
<!-- Chip 2 -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 text-on-surface font-code-sm text-code-sm hover:border-outline transition-colors">
<span class="text-base">🎮</span>
<span>Jeux vidéo (Analyse systémique &amp; immersion)</span>
</div>
<!-- Chip 3 -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 text-on-surface font-code-sm text-code-sm hover:border-outline transition-colors">
<span class="text-base">⚡</span>
<span>Veille technologique &amp; Open Source</span>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer (Shared Component JSON execution) -->
<footer class="docked full-width bottom bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30">
<div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
<!-- Copyright text from JSON -->
<div class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant text-center md:text-left">
        © 2025 Nestor KPADJA. Architectures Distribuées &amp; Protocoles Décentralisés. Lomé, Togo.
      </div>
<!-- Footer Links from JSON -->
<div class="flex flex-wrap items-center justify-center gap-6 font-code-sm text-code-sm">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors hover:text-primary dark:hover:text-primary" href="https://github.com">
          GitHub
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors hover:text-primary dark:hover:text-primary" href="https://linkedin.com">
          LinkedIn
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors hover:text-primary dark:hover:text-primary" href="#">
          Documentation
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors hover:text-primary dark:hover:text-primary" href="#">
          PGP Key
        </a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors hover:text-primary dark:hover:text-primary flex items-center gap-1.5" href="#">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
          Status
        </a>
</div>
</div>
</footer>
@include('partials.navigation')
</body></html>
