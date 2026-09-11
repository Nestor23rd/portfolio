<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact | Nestor KPADJA - Architectures Distribuées</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "secondary": "#ffb95f",
            "background": "#0d1322",
            "surface-container-high": "#242a3a",
            "on-tertiary-fixed": "#311400",
            "on-primary": "#002e6a",
            "outline-variant": "#424754",
            "on-tertiary": "#502400",
            "tertiary": "#ffb786",
            "inverse-primary": "#005ac2",
            "on-error-container": "#ffdad6",
            "surface": "#0d1322",
            "on-surface-variant": "#c2c6d6",
            "inverse-surface": "#dde2f8",
            "tertiary-fixed": "#ffdcc6",
            "surface-container": "#191f2f",
            "surface-dim": "#0d1322",
            "secondary-container": "#ee9800",
            "surface-container-highest": "#2f3445",
            "tertiary-fixed-dim": "#ffb786",
            "on-primary-fixed-variant": "#004395",
            "surface-container-low": "#151b2b",
            "on-error": "#690005",
            "on-tertiary-fixed-variant": "#723600",
            "on-surface": "#dde2f8",
            "primary": "#adc6ff",
            "on-secondary-container": "#5b3800",
            "surface-bright": "#33394a",
            "on-primary-fixed": "#001a42",
            "primary-fixed": "#d8e2ff",
            "surface-variant": "#2f3445",
            "on-tertiary-container": "#461f00",
            "tertiary-container": "#df7412",
            "on-secondary": "#472a00",
            "on-secondary-fixed": "#2a1700",
            "surface-tint": "#adc6ff",
            "primary-container": "#4d8eff",
            "primary-fixed-dim": "#adc6ff",
            "error-container": "#93000a",
            "secondary-fixed-dim": "#ffb95f",
            "secondary-fixed": "#ffddb8",
            "on-primary-container": "#00285d",
            "surface-container-lowest": "#080e1d",
            "outline": "#8c909f",
            "on-background": "#dde2f8",
            "inverse-on-surface": "#2a3040",
            "on-secondary-fixed-variant": "#653e00",
            "error": "#ffb4ab"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "space-xl": "2.5rem",
            "gutter-mobile": "1rem",
            "margin": "3rem",
            "margin-mobile": "1.25rem",
            "space-xs": "0.25rem",
            "gutter": "1.5rem",
            "space-2xl": "4rem",
            "space-sm": "0.5rem",
            "space-md": "1rem",
            "space-lg": "1.5rem"
          },
          "fontFamily": {
            "code-sm": ["JetBrains Mono"],
            "label-sm": ["JetBrains Mono"],
            "body-sm": ["Inter"],
            "body-md": ["Inter"],
            "headline-xl": ["Space Grotesk"],
            "code-md": ["JetBrains Mono"],
            "headline-md": ["Space Grotesk"],
            "headline-lg": ["Space Grotesk"],
            "code-lg": ["JetBrains Mono"],
            "headline-xl-mobile": ["Space Grotesk"],
            "label-md": ["Inter"],
            "headline-sm": ["Space Grotesk"],
            "headline-lg-mobile": ["Space Grotesk"],
            "body-lg": ["Inter"]
          },
          "fontSize": {
            "code-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500" }],
            "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
            "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
            "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-xl": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "code-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "code-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }],
            "headline-xl-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "label-md": ["13px", { "lineHeight": "16px", "fontWeight": "500" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
          }
        },
      },
    }
  </script>
<style>
    .terminal-grid {
      background-size: 32px 32px;
      background-image: 
        linear-gradient(to right, rgba(66, 71, 84, 0.08) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(66, 71, 84, 0.08) 1px, transparent 1px);
    }
    @keyframes pulse-dot {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(0.85); }
    }
    .animate-beacon {
      animation: pulse-dot 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col justify-between selection:bg-primary-container selection:text-on-primary-container terminal-grid">
<!-- TOP APP BAR -->
@if(false)<header class="docked full-width top-0 fixed z-50 bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30 flat no shadows">
<div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
<!-- Brand Logo -->
<a class="font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2" href="#">
<span class="text-primary font-code-lg">&gt;_</span>
<span>Nestor KPADJA</span>
<span class="flex h-2 w-2 relative ml-1">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
</span>
</a>
<!-- Desktop Navigation Links -->
<nav class="hidden md:flex items-center gap-8 lg:gap-10">
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#accueil">Accueil</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#a-propos">À propos</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#projets">Projets</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#competences">Compétences</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md hover:text-on-surface dark:hover:text-on-surface transition-colors" href="#experience">Expérience</a>
<a class="text-primary dark:text-primary font-code-md text-code-md border-b-2 border-primary pb-1" href="#contact">Contact</a>
</nav>
<!-- Trailing Action -->
<div class="flex items-center gap-4">
<button class="hidden sm:flex items-center gap-1.5 p-2 text-on-surface-variant hover:text-primary transition-colors" title="Console Active" type="button">
<span class="material-symbols-outlined text-base">terminal</span>
</button>
<a class="bg-secondary text-on-secondary font-label-md text-label-md font-bold px-4 py-2 rounded-lg hover:bg-secondary-container transition-colors shadow-sm active:scale-95 duration-100 flex items-center gap-1.5" href="#contact">
<span>Me contacter</span>
<span class="material-symbols-outlined text-sm">north_east</span>
</a>
</div>
</div>
</header>@endif
<!-- MAIN CONTACT SECTION -->
<main class="flex-grow pt-28 pb-20 px-6 md:px-12 flex items-center justify-center">
<div class="w-full max-w-6xl mx-auto space-y-12">
<!-- Section Header -->
<div class="text-center space-y-4 max-w-2xl mx-auto">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high border border-outline-variant/40">
<span class="material-symbols-outlined text-primary text-xs" data-icon="terminal">terminal</span>
<span class="font-code-sm text-code-sm text-primary font-medium tracking-wide">// CONTACT_CHANNEL : INITIALISER LA CONNEXION</span>
</div>
<h1 class="font-headline-lg md:font-headline-xl text-headline-lg md:text-headline-xl text-on-surface tracking-tight">
          Travaillons <span class="text-primary">ensemble</span>
</h1>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
          Une idée de projet ? Une opportunité d'ingénierie distribuée ? Écrivez-moi pour concevoir des architectures résilientes et des protocoles sur mesure.
        </p>
</div>
<!-- 2-Column Bento Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- LEFT COLUMN: Terminal Contact Form (7 cols) -->
<div class="lg:col-span-7 bg-surface-container-low rounded-xl border border-outline-variant/30 overflow-hidden shadow-2xl relative">
<!-- Terminal Top Shell Header -->
<div class="bg-surface-container-lowest px-5 py-3 border-b border-outline-variant/30 flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-error inline-block"></span>
<span class="w-3 h-3 rounded-full bg-secondary inline-block"></span>
<span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span>
<span class="font-code-sm text-code-sm text-on-surface-variant ml-2 font-medium tracking-wide">new_message.sh</span>
</div>
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-secondary animate-beacon"></span>
<span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider">READY_TO_SEND</span>
</div>
</div>
<!-- Interactive Terminal Prompt Form -->
@if(session('contact_success'))
<div class="mx-6 mt-6 rounded-lg border border-emerald-500/40 bg-emerald-500/10 px-4 py-3 font-code-sm text-code-sm text-emerald-300 md:mx-8">{{ session('contact_success') }}</div>
@endif
@if($errors->any())
<div class="mx-6 mt-6 rounded-lg border border-red-500/40 bg-red-500/10 px-4 py-3 text-sm text-red-300 md:mx-8"><ul class="list-inside list-disc">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
@endif
<form action="{{ route('contact.store') }}" method="POST" class="p-6 md:p-8 space-y-6" id="contactForm">
@csrf
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
<!-- Full Name Field -->
<div class="space-y-2">
<label class="block font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="fullname">
<span class="text-primary font-bold">&gt;</span>
<span>Nom complet</span>
<span class="text-error font-mono">*</span>
</label>
<div class="relative">
<input class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg px-3.5 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-outline-variant/70 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all duration-150" id="fullname" name="name" value="{{ old('name') }}" placeholder="ex. Marc Dupont" required="" type="text"/>
</div>
</div>
<!-- Email Field -->
<div class="space-y-2">
<label class="block font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="email">
<span class="text-primary font-bold">&gt;</span>
<span>Email</span>
<span class="text-error font-mono">*</span>
</label>
<div class="relative">
<input class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg px-3.5 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-outline-variant/70 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all duration-150" id="email" name="email" value="{{ old('email') }}" placeholder="ex. marc.dupont@entreprise.com" required="" type="email"/>
</div>
</div>
</div>
<!-- Project Type Segmented Selector -->
<div class="space-y-2">
<label class="block font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5">
<span class="text-primary font-bold">&gt;</span>
<span>Objet &amp; Typologie de projet</span>
</label>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
<label class="cursor-pointer">
<input checked="" class="peer sr-only" name="project_type" type="radio" value="backend"/>
<div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                    Backend Arch
                  </div>
</label>
<label class="cursor-pointer">
<input class="peer sr-only" name="project_type" type="radio" value="smart_contract"/>
<div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                    Smart Contract
                  </div>
</label>
<label class="cursor-pointer">
<input class="peer sr-only" name="project_type" type="radio" value="recrutement"/>
<div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                    Recrutement
                  </div>
</label>
<label class="cursor-pointer">
<input class="peer sr-only" name="project_type" type="radio" value="autre"/>
<div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                    Autre
                  </div>
</label>
</div>
</div>
<!-- Message Field -->
<div class="space-y-2">
<label class="block font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="message">
<span class="text-primary font-bold">&gt;</span>
<span>Payload / Spécifications</span>
<span class="text-error font-mono">*</span>
</label>
<textarea class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg p-3.5 font-body-md text-body-md text-on-surface placeholder:text-outline-variant/70 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all duration-150 resize-none" id="message" name="message" placeholder="Décrivez brièvement vos besoins, contexte d'infrastructure ou opportunité technique..." required="" rows="5">{{ old('message') }}</textarea>
</div>
<!-- Terminal Meta and Submit Button -->
<div class="pt-2 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-on-surface-variant font-code-sm text-code-sm">
<span class="text-primary font-mono">&gt;_</span>
<span>GPG payload encrypted prior to dispatch</span>
</div>
<button class="w-full sm:w-auto bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3 rounded-lg hover:bg-secondary-container transition-all duration-200 active:scale-95 shadow-md flex items-center justify-center gap-2 group cursor-pointer" type="submit">
<span>Envoyer le message</span>
<span class="material-symbols-outlined text-base group-hover:translate-x-1 group-hover:-translate-y-0.5 transition-transform" data-icon="send">send</span>
</button>
</div>
</form>
</div>
<!-- RIGHT COLUMN: Direct Telemetry & Identity Panel (5 cols) -->
<div class="lg:col-span-5 space-y-6">
<!-- Availability Signal Card -->
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-3 relative overflow-hidden">
<div class="flex items-center gap-3">
<span class="relative flex h-3 w-3">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
</span>
<span class="font-code-sm text-code-sm text-emerald-400 font-semibold tracking-wide">STATUS: ACTIVE / DISPONIBLE</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Disponible pour nouveaux projets</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Ouvert aux opportunités en CDI senior, architecture de protocoles, audits de contrats intelligents et missions de conseil freelance de haut niveau.
            </p>
</div>
<!-- Direct Coordinates Box -->
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-5">
<div class="font-code-sm text-code-sm text-primary flex items-center gap-2 pb-2 border-b border-outline-variant/20">
<span class="material-symbols-outlined text-sm" data-icon="hub">hub</span>
<span>CANAUX DIRECTS &amp; HORODATAGE</span>
</div>
<!-- Email Coordinate with Copy Action -->
<div class="flex items-center justify-between group">
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg" data-icon="mail">mail</span>
</div>
<div>
<span class="block font-code-sm text-code-sm text-on-surface-variant">Email direct</span>
<a class="font-body-md text-body-md text-on-surface font-medium hover:text-primary transition-colors" href="mailto:kpadjanestor78@gmail.com">
                    kpadjanestor78@gmail.com
                  </a>
</div>
</div>
<button class="p-2 rounded-lg border border-outline-variant/30 bg-surface-container hover:border-primary text-on-surface-variant hover:text-primary transition-colors text-xs flex items-center gap-1 font-code-sm" id="copyBtn" onclick="copyEmail()" title="Copier l'email" type="button">
<span class="material-symbols-outlined text-sm" data-icon="content_copy">content_copy</span>
</button>
</div>
<!-- Phone / WhatsApp Coordinate -->
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-lg" data-icon="call">call</span>
</div>
<div>
<span class="block font-code-sm text-code-sm text-on-surface-variant">Téléphone &amp; WhatsApp</span>
<span class="mt-1 block font-body-md text-body-md text-on-surface font-medium">
                  <a class="block hover:text-primary" href="tel:+22896908492">Tél. : +228 96 90 84 92</a>
                  <a class="block hover:text-primary" href="https://wa.me/22891311705" target="_blank" rel="noopener">WhatsApp : +228 91 31 17 05</a>
                </span>
</div>
</div>
<!-- Geographical Anchor -->
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg" data-icon="location_on">location_on</span>
</div>
<div>
<span class="block font-code-sm text-code-sm text-on-surface-variant">Localisation &amp; Fuseau</span>
<span class="font-body-md text-body-md text-on-surface font-medium">
                  Lomé, Togo <span class="text-on-surface-variant text-sm font-normal">(GMT+0 · Remote mondial)</span>
</span>
</div>
</div>
<!-- SLA / Response Time Indicator -->
<div class="p-3 bg-surface-container-lowest rounded-lg border border-outline-variant/20 flex items-center gap-2.5">
<span class="material-symbols-outlined text-primary text-base" data-icon="timer">timer</span>
<span class="font-code-sm text-code-sm text-on-surface-variant">
                Temps de réponse habituel : <strong class="text-on-surface font-semibold">&lt; 24 heures</strong>
</span>
</div>
</div>
<!-- Cryptographic Security & Identity Handshake -->
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-4">
<div class="flex items-center justify-between">
<span class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5">
<span class="material-symbols-outlined text-sm text-secondary" data-icon="lock">lock</span>
<span>Signatures cryptographiques &amp; PGP</span>
</span>
<span class="px-2 py-0.5 rounded text-[10px] font-code-sm bg-surface-container-high text-primary border border-outline-variant/30">ED25519</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Les communications chiffrées de bout en bout et les spécifications sensibles sont prises en charge.
            </p>
<!-- Social and Technical Channels -->
<div class="pt-2 border-t border-outline-variant/20 flex items-center gap-3">
<!-- GitHub Button -->
<a class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant/40 flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:border-primary hover:bg-surface-container-high transition-all" href="https://github.com" rel="noreferrer" target="_blank" title="Profil GitHub">
<span class="material-symbols-outlined text-lg" data-icon="code">code</span>
</a>
<!-- LinkedIn Button -->
<a class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant/40 flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary hover:bg-surface-container-high transition-all" href="https://linkedin.com" rel="noreferrer" target="_blank" title="Profil LinkedIn">
<span class="material-symbols-outlined text-lg" data-icon="badge">badge</span>
</a>
<!-- Telegram / Protocol Channel -->
<a class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant/40 flex items-center justify-center text-on-surface-variant hover:text-secondary hover:border-secondary hover:bg-surface-container-high transition-all" href="#" title="Canal Telegram">
<span class="material-symbols-outlined text-lg" data-icon="send">send</span>
</a>
<!-- Key Download -->
<a class="ml-auto font-code-sm text-code-sm text-primary hover:text-primary-fixed transition-colors flex items-center gap-1 underline underline-offset-4" href="#">
<span class="material-symbols-outlined text-xs" data-icon="key">key</span>
<span>Obtenir la clé PGP</span>
</a>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- SHARED COMPONENT: FOOTER -->
<footer class="docked full-width bottom bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30 flat no shadows mt-auto">
<div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
<!-- Brand & Copyright -->
<div class="flex flex-col sm:flex-row items-center gap-3 text-center sm:text-left">
<span class="font-code-md text-code-md font-bold text-on-surface dark:text-on-surface">
          Nestor KPADJA
        </span>
<span class="hidden sm:inline text-outline-variant">|</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">
          © 2025 Kokoussè Nestor KPADJA. Architectures Distribuées &amp; Protocoles Décentralisés. Lomé, Togo.
        </span>
</div>
<!-- Footer Quick Links & System Health Status -->
<div class="flex flex-wrap items-center justify-center gap-6">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors font-code-sm text-code-sm" href="https://github.com">GitHub</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors font-code-sm text-code-sm" href="https://linkedin.com">LinkedIn</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors font-code-sm text-code-sm" href="#doc">Documentation</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-on-surface dark:hover:text-on-surface transition-colors font-code-sm text-code-sm" href="#pgp">PGP Key</a>
<!-- Live Status Pulse Indicator -->
<div class="flex items-center gap-1.5 pl-2 border-l border-outline-variant/30">
<span class="h-2 w-2 rounded-full bg-emerald-400"></span>
<span class="font-code-sm text-code-sm text-primary font-medium">Status</span>
</div>
</div>
</div>
</footer>
<!-- Micro-interactions Script -->
<script>
    function copyEmail() {
      const email = 'kpadjanestor78@gmail.com';
      navigator.clipboard.writeText(email).then(() => {
        const btn = document.getElementById('copyBtn');
        const originalContent = btn.innerHTML;
        btn.innerHTML = '<span class="material-symbols-outlined text-sm text-emerald-400">check</span>';
        btn.classList.add('border-emerald-400');
        setTimeout(() => {
          btn.innerHTML = originalContent;
          btn.classList.remove('border-emerald-400');
        }, 2000);
      });
    }

    function handleSend() {
      const form = document.getElementById('contactForm');
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      
      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <span class="animate-spin inline-block w-4 h-4 border-2 border-on-secondary border-t-transparent rounded-full"></span>
        <span>Transmission...</span>
      `;

      setTimeout(() => {
        submitBtn.innerHTML = `
          <span class="material-symbols-outlined text-base">check_circle</span>
          <span>Message transmis</span>
        `;
        submitBtn.classList.remove('bg-secondary');
        submitBtn.classList.add('bg-emerald-500', 'text-white');
        form.reset();

        setTimeout(() => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
          submitBtn.classList.add('bg-secondary');
          submitBtn.classList.remove('bg-emerald-500', 'text-white');
        }, 3000);
      }, 1200);
    }
  </script>
@include('partials.navigation')
</body></html>
