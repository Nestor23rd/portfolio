<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>À propos — Nestor KPADJA | Ingénierie Backend &amp; Architectures Distribuées</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
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
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary terminal-grid-pattern antialiased">

@include('partials.navigation')

<!-- Main Content Canvas -->
<main class="flex-grow pt-28 pb-20 max-w-7xl mx-auto px-6 md:px-12 w-full">

    <!-- ==================== HEADER BLOCK ==================== -->
    <section class="mb-14 pb-8 border-b border-outline-variant/30">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-surface-container-low border border-outline-variant/50 text-primary font-code-sm text-code-sm">
                    <span class="text-secondary font-semibold">&gt;_</span>
                    <span>profil_ingenieur.md</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface font-bold tracking-tight">
                    À propos de <span class="bg-gradient-to-r from-primary via-primary-container to-secondary bg-clip-text text-transparent">Nestor KPADJA</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl font-normal leading-relaxed">
                    Développeur Backend &amp; Architecte Systèmes Distribués. Je transforme des exigences complexes en architectures logicielles pérennes, performantes et scalables.
                </p>
            </div>
            <!-- Quick Status Badge -->
            <div class="flex flex-col items-start lg:items-end gap-2 shrink-0">
                <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 font-code-sm text-code-sm text-on-surface-variant shadow-inner">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-outline">STATUT :</span>
                    <span class="text-emerald-400 font-semibold">DISPONIBLE</span>
                    <span class="text-outline-variant">|</span>
                    <span class="text-on-surface">Remote &amp; Hybride</span>
                </div>
                <p class="font-code-sm text-code-sm text-outline">
                    Lomé, Togo (GMT+0) · Français &amp; Anglais technique
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== BIO & IDENTITY BENTO (40% / 60%) ==================== -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start mb-20">
        
        <!-- COLONNE GAUCHE (5 cols) : Identity Card -->
        <div class="lg:col-span-5 flex flex-col gap-6">
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 overflow-hidden">
                <!-- Image Wrapper with dual glow gradient border -->
                <div class="relative mx-auto w-full max-w-[260px] aspect-square rounded-xl p-1 bg-gradient-to-tr from-primary via-outline-variant to-secondary">
                    <div class="w-full h-full rounded-[10px] overflow-hidden bg-surface-container-lowest relative group">
                        <img alt="Kokoussè Nestor KPADJA" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-out" src="{{ asset('profil.jpeg') }}"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/70 via-transparent to-transparent"></div>
                    </div>
                </div>

                <!-- Identity Details -->
                <div class="mt-6 text-center">
                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">
                        Kokoussè Nestor KPADJA
                    </h2>
                    <div class="font-code-sm text-code-sm text-primary mt-1 font-semibold">
                        Backend &amp; Distributed Systems Engineer
                    </div>
                </div>

                <!-- Structured Key Info Badges -->
                <div class="mt-6 flex flex-col gap-2.5">
                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-primary">location_on</span>
                            <span>Localisation</span>
                        </span>
                        <span class="text-on-surface font-semibold">Lomé, Togo</span>
                    </div>

                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-secondary">school</span>
                            <span>Formation</span>
                        </span>
                        <span class="text-on-surface font-semibold">Licence Génie Logiciel</span>
                    </div>

                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-emerald-400">deployed_code</span>
                            <span>Spécialisation</span>
                        </span>
                        <span class="text-on-surface font-semibold">Backend, APIs &amp; Blockchain</span>
                    </div>

                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-primary">work_outline</span>
                            <span>Disponibilité</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-400 font-semibold">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            Immédiate
                        </span>
                    </div>
                </div>

                <!-- Action Links -->
                <div class="mt-6 pt-5 border-t border-outline-variant/30 flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3">
                    <a class="px-4 py-2.5 rounded-lg bg-secondary-container hover:bg-secondary text-on-secondary-container font-label-md font-bold text-center transition-all duration-150 active:scale-95 shadow-sm flex items-center justify-center gap-2" href="{{ route('contact') }}">
                        <span class="material-symbols-outlined text-base">mail</span>
                        <span>Me contacter</span>
                    </a>
                    <div class="flex items-center justify-center gap-2">
                        @if(!empty($siteSettings['github_url']))
                        <a class="p-2.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" href="{{ $siteSettings['github_url'] }}" rel="noopener noreferrer" target="_blank" title="Profil GitHub">
                            <span class="material-symbols-outlined text-base">code</span>
                        </a>
                        @endif
                        @if(!empty($siteSettings['linkedin_url']))
                        <a class="p-2.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" href="{{ $siteSettings['linkedin_url'] }}" rel="noopener noreferrer" target="_blank" title="Profil LinkedIn">
                            <span class="material-symbols-outlined text-base">link</span>
                        </a>
                        @endif
                        @if(isset($socialLinks))
                        @foreach($socialLinks as $sLink)
                        <a class="p-2.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-emerald-400 text-on-surface-variant hover:text-emerald-400 transition-colors flex items-center justify-center" href="{{ $sLink->url }}" rel="noopener noreferrer" target="_blank" title="{{ $sLink->label }}">
                            <span class="material-symbols-outlined text-base">open_in_new</span>
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- COLONNE DROITE (7 cols) : Mon Histoire & Vision -->
        <div class="lg:col-span-7 flex flex-col gap-6">
            
            <!-- Biography Card with Terminal Header -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8">
                <div class="flex items-center justify-between border-b border-outline-variant/30 pb-4 mb-6 font-code-sm text-code-sm text-on-surface-variant">
                    <div class="flex items-center gap-2">
                        <span class="inline-block w-2.5 h-2.5 rounded-full bg-error/70"></span>
                        <span class="inline-block w-2.5 h-2.5 rounded-full bg-secondary/70"></span>
                        <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-500/70"></span>
                        <span class="ml-2 text-on-surface font-mono">qui_suis_je.md</span>
                    </div>
                    <span class="text-primary font-mono text-[11px] bg-surface-container px-2 py-0.5 rounded">INGENIEUR_LOGICIEL</span>
                </div>

                <div class="space-y-4 font-body-md text-on-surface-variant leading-relaxed">
                    <p class="text-on-surface font-body-lg text-body-lg font-medium leading-relaxed">
                        Ingénieur logiciel passionné par le développement backend, les architectures distribuées et l'écosystème blockchain.
                    </p>
                    
                    <p>
                        Mon parcours est guidé par une fascination pour la conception de systèmes capables de traiter des flux critiques en toute fiabilité. De la modélisation relationnelle rigoureuse sous <strong class="text-on-surface font-semibold">PostgreSQL</strong> et <strong class="text-on-surface font-semibold">MySQL</strong>, à l'architecture d'APIs REST haute vélocité sous <strong class="text-on-surface font-semibold">Laravel</strong>, <strong class="text-on-surface font-semibold">Spring Boot</strong> et <strong class="text-on-surface font-semibold">Node.js</strong>, j'accorde une importance primordiale à la robustesse, à la lisibilité et à l'évolutivité du code.
                    </p>

                    <p>
                        Au fil de mes expériences sur des chantiers d'envergure — notamment sur un projet de monnaie numérique de banque centrale (<strong class="text-secondary font-semibold">CBDC Blockchain</strong>) et sur des plateformes de gestion d'entreprise comme <strong class="text-primary font-semibold">Titan / TitanEduc</strong> —, j'ai développé une solide culture d'ingénierie : rigueur des tests automatisés, conteneurisation avec <strong class="text-on-surface font-semibold">Docker</strong>, pipelines <strong class="text-on-surface font-semibold">CI/CD</strong> et livraison continue.
                    </p>

                    <p>
                        Certifié par la <strong class="text-on-surface font-semibold">Linux Foundation</strong> en technologies Blockchain et finaliste du Hackathon <strong class="text-on-surface font-semibold">CodeQuity</strong>, je combine maîtrise théorique et pragmatisme opérationnel pour donner vie à des solutions à fort impact réel.
                    </p>
                </div>

                <!-- Stats Ribbon inside Bio Card -->
                <div class="mt-8 pt-6 border-t border-outline-variant/30 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-primary block">{{ $projectsCount }}+</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">Projets livrés</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-secondary block">{{ $skillsCount }}</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">Compétences</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-emerald-400 block">{{ $certificationsCount }}</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">Certifications</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface block">{{ $experiences->count() }}</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">Expériences</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==================== 4 PILIERS D'INGÉNIERIE ==================== -->
    <section class="mb-20">
        <div class="flex items-center gap-3 mb-8">
            <span class="text-secondary font-code-md text-code-md font-bold">&gt;_</span>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">
                Piliers &amp; Principes d'Ingénierie
            </h2>
            <div class="h-px bg-outline-variant/30 flex-grow ml-4"></div>
            <span class="font-code-sm text-code-sm text-outline hidden sm:inline">CORE_METHODOLOGY</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Pilier 1: Rigueur Architecturale -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 shrink-0 group-hover:border-primary/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">architecture</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">PILIER 01</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            Rigueur Architecturale &amp; Code Propre
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Application stricte des principes SOLID, Clean Architecture et séparation des responsabilités. Le code n'est pas seulement écrit pour la machine, mais pour être lisible, auditable et maintenable sur le long terme par toute l'équipe.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pilier 2: Intégrité des Données & Résilience -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 hover:border-secondary/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-secondary border border-outline-variant/30 shrink-0 group-hover:border-secondary/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">database</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">PILIER 02</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            Intégrité des Données &amp; Résilience
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Modélisation relationnelle soignée, conformité ACID, gestion des verrous et transactions concurrentes. Utilisation stratégique de caches mémoires (Redis) et conteneurisation isolée (Docker) pour des déploiements sans surprise.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pilier 3: Culture Produit & Pragmatisme -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 shrink-0 group-hover:border-primary/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">bolt</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">PILIER 03</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            Culture Produit &amp; Pragmatisme
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Un bon système résout d'abord un problème métier réel. Je privilégie l'efficacité opérationnelle, la simplicité judicieuse et la valeur délivrée à l'utilisateur final plutôt que la sur-ingénierie inutile.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pilier 4: Esprit d'Équipe & Collaboration Agile -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 hover:border-emerald-400/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-emerald-400 border border-outline-variant/30 shrink-0 group-hover:border-emerald-400/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">groups</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">PILIER 04</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            Esprit d'Équipe &amp; Démarche Agile
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Communication proactive, revues de code constructives et respect des cadences Agile (Scrum). Je m'intègre avec aisance dans des équipes pluridisciplinaires, en remote comme en présentiel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PARCOURS & EXPÉRIENCES CHRONOLOGIQUES ==================== -->
    <section class="mb-20">
        <div class="flex items-center justify-between gap-3 mb-8">
            <div class="flex items-center gap-3">
                <span class="text-secondary font-code-md text-code-md font-bold">&gt;_</span>
                <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">
                    Parcours &amp; Évolution
                </h2>
            </div>
            <a class="text-primary font-code-sm text-code-sm hover:underline flex items-center gap-1" href="{{ route('experience') }}">
                <span>Voir le détail complet</span>
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="space-y-4">
            @forelse($experiences as $exp)
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 hover:border-primary/40 rounded-xl p-6 transition-all duration-200 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-surface-container border border-outline-variant/30 flex items-center justify-center text-primary shrink-0 mt-0.5">
                        <span class="material-symbols-outlined text-xl">
                            {{ $exp->is_current ? 'terminal' : ($exp->company === 'Formation' ? 'school' : 'business_center') }}
                        </span>
                    </div>
                    <div>
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                {{ $exp->role }}
                            </h3>
                            @if($exp->is_current)
                            <span class="font-code-sm text-[11px] px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 font-semibold">
                                En cours
                            </span>
                            @endif
                        </div>
                        <div class="font-code-sm text-code-sm text-secondary mb-2">
                            {{ $exp->company ?: 'Indépendant / Projet' }}
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed max-w-3xl">
                            {{ $exp->description }}
                        </p>
                    </div>
                </div>

                <div class="shrink-0 md:text-right font-code-sm text-code-sm text-outline border-t md:border-t-0 border-outline-variant/20 pt-3 md:pt-0">
                    <div>{{ $exp->start_date ? $exp->start_date->format('Y') : '' }} — {{ $exp->is_current ? 'Présent' : ($exp->end_date ? $exp->end_date->format('Y') : '') }}</div>
                    @if($exp->location)
                    <div class="text-[11px] text-on-surface-variant mt-0.5">{{ $exp->location }}</div>
                    @endif
                </div>
            </div>
            @empty
            <div class="p-8 text-center text-on-surface-variant bg-surface-container-low border border-outline-variant/30 rounded-xl">
                Parcours en cours de mise à jour.
            </div>
            @endforelse
        </div>
    </section>

    <!-- ==================== MÉTHODOLOGIE & ENVIRONNEMENT DE TRAVAIL ==================== -->
    <section class="mb-20">
        <div class="flex items-center gap-3 mb-8">
            <span class="text-secondary font-code-md text-code-md font-bold">&gt;_</span>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">
                Environnement &amp; Pratiques Opérationnelles
            </h2>
            <div class="h-px bg-outline-variant/30 flex-grow ml-4"></div>
            <span class="font-code-sm text-code-sm text-outline hidden sm:inline">WORKFLOW_STACK</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Box 1 -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4 text-primary">
                    <span class="material-symbols-outlined text-2xl">terminal</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Systèmes &amp; Outils</h3>
                </div>
                <ul class="space-y-2.5 font-code-sm text-code-sm text-on-surface-variant">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Environnement Linux &amp; Bash</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Docker &amp; Docker Compose</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Git, Gitflow, GitHub / GitLab</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Pipelines CI/CD automatisés</span>
                    </li>
                </ul>
            </div>

            <!-- Box 2 -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4 text-secondary">
                    <span class="material-symbols-outlined text-2xl">api</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Conception &amp; Qualité</h3>
                </div>
                <ul class="space-y-2.5 font-code-sm text-code-sm text-on-surface-variant">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>APIs RESTful &amp; Contrats OpenAPI</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Tests unitaires &amp; d'intégration</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Architecture en couches &amp; MVC</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Authentification sécurisée (OAuth2, JWT)</span>
                    </li>
                </ul>
            </div>

            <!-- Box 3 -->
            <div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4 text-emerald-400">
                    <span class="material-symbols-outlined text-2xl">handshake</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Collaboration</h3>
                </div>
                <ul class="space-y-2.5 font-code-sm text-code-sm text-on-surface-variant">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Méthodologie Scrum / Sprints</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Revues de code systématiques</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Documentation technique soignée</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>Autonomie et prise d'initiative</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ==================== CENTRES D'INTÉRÊT ==================== -->
    <section class="mb-20">
        <div class="specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8">
            <div class="flex items-center gap-2 font-code-sm text-code-sm text-primary mb-4">
                <span>&gt;_</span>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Au-delà de l'écran &amp; passions</h3>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed max-w-3xl">
                L'ingénierie logicielle requiert de la concentration et de la créativité. Pour maintenir cet équilibre, je nourris plusieurs passions qui stimulent l'esprit d'équipe, l'analyse stratégique et la curiosité intellectuelle :
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/30 flex items-start gap-3">
                    <span class="text-2xl shrink-0">⚽</span>
                    <div>
                        <strong class="font-headline-sm text-[16px] text-on-surface block mb-1">Football</strong>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Culture de l'effort collectif, tactique sur le terrain et solidarité d'équipe.</p>
                    </div>
                </div>
                <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/30 flex items-start gap-3">
                    <span class="text-2xl shrink-0">🎮</span>
                    <div>
                        <strong class="font-headline-sm text-[16px] text-on-surface block mb-1">Jeux Vidéo &amp; Systèmes</strong>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Analyse des mécaniques complexes, résolution d'énigmes et prise de décision rapide.</p>
                    </div>
                </div>
                <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/30 flex items-start gap-3">
                    <span class="text-2xl shrink-0">⚡</span>
                    <div>
                        <strong class="font-headline-sm text-[16px] text-on-surface block mb-1">Veille Technologique</strong>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Exploration des tendances Web3, protocoles décentralisés et outils d'assistance IA.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CALL TO ACTION ==================== -->
    <section class="mt-8">
        <div class="relative overflow-hidden rounded-2xl bg-surface-container-low border border-outline-variant/40 p-8 md:p-12">
            <div class="absolute top-0 left-1/4 right-1/4 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
            <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div class="max-w-2xl space-y-3">
                    <div class="flex items-center gap-2 text-secondary font-code-sm text-code-sm">
                        <span class="material-symbols-outlined text-[18px]">terminal</span>
                        <span>// COLLABORATION_DISPONIBLE</span>
                    </div>
                    <h2 class="font-headline-md text-headline-md text-on-surface font-bold">
                        Envie d'échanger sur un projet ou une opportunité ?
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Que ce soit pour concevoir une architecture backend robuste, auditer une API ou collaborer sur un produit d'envergure, je suis ouvert aux opportunités professionnelles.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 shrink-0">
                    <a class="bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3.5 rounded-lg hover:bg-secondary-fixed-dim transition-all duration-150 text-center shadow-lg active:scale-95 flex items-center justify-center gap-2" href="{{ route('contact') }}">
                        <span>Démarrer une conversation</span>
                        <span class="material-symbols-outlined text-[18px]">send</span>
                    </a>
                    <a class="border border-outline-variant/50 text-on-surface hover:border-primary font-code-md text-code-md px-5 py-3.5 rounded-lg text-center transition-colors bg-surface-container hover:bg-surface-container-high" href="{{ route('projects') }}">
                        Voir les projets &gt;
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Footer -->
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
