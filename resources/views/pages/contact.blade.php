<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact — Nestor KPADJA | Ingénierie Backend &amp; Systèmes Distribués</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
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
        }
      }
    };
  </script>
<style>
    .terminal-grid {
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
<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col selection:bg-primary-container selection:text-on-primary-container terminal-grid">

@include('partials.navigation')

@php
    $siteSettings = \App\Models\SiteSetting::pluck('value', 'key');
    $emailAddress = $siteSettings['email'] ?? 'kpadjanestor78@gmail.com';
    $locationText = $siteSettings['location'] ?? 'Lomé, Togo';
    $githubUrl = $siteSettings['github_url'] ?? 'https://github.com';
    $linkedinUrl = $siteSettings['linkedin_url'] ?? 'https://linkedin.com';
@endphp

<!-- MAIN CONTACT SECTION -->
<main class="flex-grow pt-28 pb-20 px-6 md:px-12">
    <div class="w-full max-w-6xl mx-auto space-y-12">

        <!-- Section Header -->
        <div class="text-center space-y-4 max-w-2xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high border border-outline-variant/40">
                <span class="material-symbols-outlined text-primary text-xs">terminal</span>
                <span class="font-code-sm text-code-sm text-primary font-medium tracking-wide">&gt;_ CANAL DE COMMUNICATION</span>
            </div>
            <h1 class="font-headline-lg md:font-headline-xl text-headline-lg md:text-headline-xl text-on-surface font-bold tracking-tight">
                Discutons de votre <span class="bg-gradient-to-r from-primary via-primary-container to-secondary bg-clip-text text-transparent">projet</span>
            </h1>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                Une architecture backend à concevoir, un besoin en systèmes distribués ou une opportunité professionnelle ? Remplissez le formulaire ci-dessous ou contactez-moi directement.
            </p>
        </div>

        <!-- 2-Column Bento Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- LEFT COLUMN: Contact Form (7 cols) -->
            <div class="lg:col-span-7 specular-card bg-surface-container-low rounded-xl border border-outline-variant/30 overflow-hidden shadow-2xl relative">
                
                <!-- Terminal Shell Header -->
                <div class="bg-surface-container-lowest px-5 py-3.5 border-b border-outline-variant/30 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-error/80 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-secondary/80 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
                        <span class="font-code-sm text-code-sm text-on-surface-variant ml-2 font-mono">nouveau_message.sh</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="font-code-sm text-code-sm text-emerald-400 font-semibold uppercase tracking-wider">PRÊT</span>
                    </div>
                </div>

                <!-- Flash Messages -->
                @if(session('contact_success'))
                <div class="mx-6 mt-6 rounded-lg border border-emerald-500/40 bg-emerald-500/10 p-4 font-code-sm text-code-sm text-emerald-300 md:mx-8 flex items-center gap-3">
                    <span class="material-symbols-outlined text-emerald-400 text-xl">check_circle</span>
                    <div>
                        <strong class="block text-emerald-200 font-semibold">Message envoyé avec succès !</strong>
                        <span>{{ session('contact_success') }} Je reviendrai vers vous dans les plus brefs délais.</span>
                    </div>
                </div>
                @endif

                @if($errors->any())
                <div class="mx-6 mt-6 rounded-lg border border-red-500/40 bg-red-500/10 p-4 text-sm text-red-300 md:mx-8">
                    <div class="flex items-center gap-2 font-semibold text-red-200 mb-2">
                        <span class="material-symbols-outlined text-red-400 text-base">error</span>
                        <span>Veuillez corriger les informations suivantes :</span>
                    </div>
                    <ul class="list-inside list-disc space-y-1 font-body-sm text-body-sm">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Form -->
                <form action="{{ route('contact.store') }}" method="POST" class="p-6 md:p-8 space-y-6" id="contactForm">
                    @csrf

                    <!-- Name and Email Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Full Name Field -->
                        <div class="space-y-2">
                            <label class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="fullname">
                                <span class="text-primary font-bold">&gt;</span>
                                <span>Nom complet</span>
                                <span class="text-error font-mono">*</span>
                            </label>
                            <input class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg px-3.5 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all @error('name') border-red-500 @enderror" id="fullname" name="name" value="{{ old('name') }}" placeholder="ex. Marc Dupont" required type="text"/>
                            @error('name')
                            <p class="text-xs text-red-400 mt-1 font-code-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="email">
                                <span class="text-primary font-bold">&gt;</span>
                                <span>Adresse e-mail</span>
                                <span class="text-error font-mono">*</span>
                            </label>
                            <input class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg px-3.5 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="ex. marc.dupont@entreprise.com" required type="email"/>
                            @error('email')
                            <p class="text-xs text-red-400 mt-1 font-code-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Project Type Selector -->
                    <div class="space-y-2">
                        <label class="block font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5">
                            <span class="text-primary font-bold">&gt;</span>
                            <span>Type de projet ou opportunité</span>
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Backend & Architecture" @checked(old('project_type', 'Backend & Architecture') === 'Backend & Architecture')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    Backend Arch
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Blockchain / Web3" @checked(old('project_type') === 'Blockchain / Web3')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    Blockchain
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Recrutement" @checked(old('project_type') === 'Recrutement')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    Recrutement
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Autre" @checked(old('project_type') === 'Autre')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    Autre projet
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="space-y-2">
                        <label class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="message">
                            <span class="text-primary font-bold">&gt;</span>
                            <span>Votre message / Spécifications</span>
                            <span class="text-error font-mono">*</span>
                        </label>
                        <textarea class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg p-3.5 font-body-md text-body-md text-on-surface placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-y min-h-[140px] @error('message') border-red-500 @enderror" id="message" name="message" placeholder="Décrivez brièvement vos objectifs, le contexte technique ou l'opportunité de collaboration..." required minlength="20" rows="5">{{ old('message') }}</textarea>
                        <div class="flex items-center justify-between text-xs text-on-surface-variant font-code-sm">
                            <span>Minimum 20 caractères</span>
                            @error('message')
                            <span class="text-red-400 font-code-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Form Footer with Submit Action -->
                    <div class="pt-3 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-outline-variant/20">
                        <div class="flex items-center gap-2 text-on-surface-variant font-code-sm text-code-sm">
                            <span class="material-symbols-outlined text-emerald-400 text-base">verified_user</span>
                            <span>Réponse garantie sous 24h</span>
                        </div>
                        <button class="w-full sm:w-auto bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3 rounded-lg hover:bg-secondary-container transition-all duration-200 active:scale-95 shadow-md flex items-center justify-center gap-2 group cursor-pointer" type="submit">
                            <span>Envoyer le message</span>
                            <span class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">send</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- RIGHT COLUMN: Direct Coordonnées & Context (5 cols) -->
            <div class="lg:col-span-5 space-y-6">

                <!-- Availability Card -->
                <div class="specular-card bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-3 relative overflow-hidden">
                    <div class="flex items-center gap-3">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>
                        <span class="font-code-sm text-code-sm text-emerald-400 font-semibold tracking-wide">STATUT : DISPONIBLE</span>
                    </div>
                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                        Ouvert aux nouvelles opportunités
                    </h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        Disponible pour des opportunités en CDI, des missions freelance en architecture backend, la conception d'APIs résilientes et le développement de solutions blockchain.
                    </p>
                    <div class="pt-2 flex items-center gap-2 text-xs font-code-sm text-primary">
                        <span class="material-symbols-outlined text-sm">schedule</span>
                        <span>Mode Remote mondial ou Hybride</span>
                    </div>
                </div>

                <!-- Direct Coordinates Box -->
                <div class="specular-card bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-5">
                    <div class="font-code-sm text-code-sm text-primary flex items-center gap-2 pb-2 border-b border-outline-variant/20">
                        <span class="material-symbols-outlined text-sm">hub</span>
                        <span class="font-semibold uppercase tracking-wider">Coordonnées Directes</span>
                    </div>

                    <!-- Email with Copy Action -->
                    <div class="flex items-center justify-between group">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-lg">mail</span>
                            </div>
                            <div class="min-w-0">
                                <span class="block font-code-sm text-code-sm text-on-surface-variant">Email direct</span>
                                <a class="font-body-md text-body-md text-on-surface font-medium hover:text-primary transition-colors block truncate" href="mailto:{{ $emailAddress }}">
                                    {{ $emailAddress }}
                                </a>
                            </div>
                        </div>
                        <button class="p-2 rounded-lg border border-outline-variant/30 bg-surface-container hover:border-primary text-on-surface-variant hover:text-primary transition-colors text-xs flex items-center justify-center shrink-0 ml-2 font-code-sm cursor-pointer" id="copyBtn" onclick="copyEmail('{{ $emailAddress }}')" title="Copier l'email" type="button">
                            <span class="material-symbols-outlined text-sm" id="copyIcon">content_copy</span>
                        </button>
                    </div>

                    <!-- Phone & WhatsApp -->
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-secondary shrink-0">
                            <span class="material-symbols-outlined text-lg">call</span>
                        </div>
                        <div class="space-y-1">
                            <span class="block font-code-sm text-code-sm text-on-surface-variant">Téléphone &amp; WhatsApp</span>
                            <div class="font-body-md text-body-md text-on-surface font-medium space-y-0.5">
                                <a class="block hover:text-primary transition-colors" href="tel:+22896908492">
                                    Appel : +228 96 90 84 92
                                </a>
                                <a class="inline-flex items-center gap-1.5 text-emerald-400 hover:text-emerald-300 transition-colors text-sm" href="https://wa.me/22891311705" target="_blank" rel="noopener noreferrer">
                                    <span>WhatsApp : +228 91 31 17 05</span>
                                    <span class="material-symbols-outlined text-xs">north_east</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Geographical Anchor -->
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined text-lg">location_on</span>
                        </div>
                        <div>
                            <span class="block font-code-sm text-code-sm text-on-surface-variant">Localisation &amp; Fuseau</span>
                            <span class="font-body-md text-body-md text-on-surface font-medium">
                                {{ $locationText }} <span class="text-on-surface-variant text-sm font-normal">(GMT+0)</span>
                            </span>
                        </div>
                    </div>

                    <!-- Professional Links -->
                    <div class="pt-3 border-t border-outline-variant/20 flex flex-wrap items-center gap-3">
                        <span class="font-code-sm text-xs text-on-surface-variant mr-1">Réseaux :</span>
                        @if(!empty($siteSettings['github_url']))
                        <a class="px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 font-code-sm text-xs" href="{{ $siteSettings['github_url'] }}" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-sm">code</span>
                            <span>GitHub</span>
                        </a>
                        @endif
                        @if(!empty($siteSettings['linkedin_url']))
                        <a class="px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 font-code-sm text-xs" href="{{ $siteSettings['linkedin_url'] }}" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-sm">link</span>
                            <span>LinkedIn</span>
                        </a>
                        @endif
                        @if(isset($socialLinks))
                        @foreach($socialLinks as $sLink)
                        <a class="px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-emerald-400 text-on-surface-variant hover:text-emerald-400 transition-colors flex items-center gap-1.5 font-code-sm text-xs" href="{{ $sLink->url }}" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                            <span>{{ $sLink->label }}</span>
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>

                <!-- Process Card: Comment se déroule l'échange -->
                <div class="specular-card bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-4">
                    <div class="font-code-sm text-code-sm text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-base">route</span>
                        <span class="font-semibold uppercase tracking-wider">Comment se passe la suite ?</span>
                    </div>
                    <ol class="space-y-3 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2.5">
                            <span class="font-code-sm text-xs font-bold text-primary px-1.5 py-0.5 rounded bg-surface-container-high shrink-0 mt-0.5">01</span>
                            <span><strong>Analyse du besoin :</strong> Je lis votre message et examine le contexte technique sous 24h.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="font-code-sm text-xs font-bold text-primary px-1.5 py-0.5 rounded bg-surface-container-high shrink-0 mt-0.5">02</span>
                            <span><strong>Premier contact :</strong> Proposition d'un créneau d'échange (visio ou téléphone) pour clarifier les enjeux.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="font-code-sm text-xs font-bold text-primary px-1.5 py-0.5 rounded bg-surface-container-high shrink-0 mt-0.5">03</span>
                            <span><strong>Proposition concrète :</strong> Recommandation d'architecture, devis ou modalités de démarrage.</span>
                        </li>
                    </ol>
                </div>

            </div>

        </div>

    </div>
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
            <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('home') }}">Accueil</a>
            <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('about') }}">À propos</a>
        </div>
    </div>
</footer>

<!-- Copy Email Script -->
<script>
    function copyEmail(email) {
        if (!navigator.clipboard) return;
        navigator.clipboard.writeText(email).then(() => {
            const btn = document.getElementById('copyBtn');
            const icon = document.getElementById('copyIcon');
            if (!btn || !icon) return;
            
            icon.textContent = 'check';
            icon.classList.add('text-emerald-400');
            btn.classList.add('border-emerald-400');

            setTimeout(() => {
                icon.textContent = 'content_copy';
                icon.classList.remove('text-emerald-400');
                btn.classList.remove('border-emerald-400');
            }, 2000);
        });
    }
</script>

</body></html>
