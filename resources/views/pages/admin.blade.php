<!DOCTYPE html>

<html class="dark" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Console :: Nestor KPADJA — Back-Office Portfolio</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS with custom theme -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface-container-lowest": "#080e1d",
            "on-tertiary-fixed-variant": "#723600",
            "on-secondary-container": "#5b3800",
            "on-surface": "#dde2f8",
            "on-tertiary": "#502400",
            "tertiary": "#ffb786",
            "secondary-fixed": "#ffddb8",
            "surface-dim": "#0d1322",
            "on-primary-container": "#00285d",
            "tertiary-fixed-dim": "#ffb786",
            "surface-bright": "#33394a",
            "on-secondary-fixed-variant": "#653e00",
            "outline": "#8c909f",
            "error": "#ffb4ab",
            "on-error": "#690005",
            "inverse-primary": "#005ac2",
            "error-container": "#93000a",
            "surface-variant": "#2f3445",
            "on-background": "#dde2f8",
            "secondary-fixed-dim": "#ffb95f",
            "primary-container": "#4d8eff",
            "on-primary-fixed": "#001a42",
            "secondary-container": "#ee9800",
            "primary-fixed": "#d8e2ff",
            "primary": "#adc6ff",
            "on-surface-variant": "#c2c6d6",
            "surface-container-highest": "#2f3445",
            "on-secondary": "#472a00",
            "surface": "#0d1322",
            "on-tertiary-container": "#461f00",
            "inverse-on-surface": "#2a3040",
            "inverse-surface": "#dde2f8",
            "surface-container-low": "#151b2b",
            "primary-fixed-dim": "#adc6ff",
            "background": "#0d1322",
            "on-tertiary-fixed": "#311400",
            "tertiary-container": "#df7412",
            "surface-container": "#191f2f",
            "on-error-container": "#ffdad6",
            "outline-variant": "#424754",
            "on-secondary-fixed": "#2a1700",
            "on-primary": "#002e6a",
            "surface-tint": "#adc6ff",
            "tertiary-fixed": "#ffdcc6",
            "on-primary-fixed-variant": "#004395",
            "secondary": "#ffb95f",
            "surface-container-high": "#242a3a"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "space-xs": "0.25rem",
            "margin": "3rem",
            "gutter-mobile": "1rem",
            "gutter": "1.5rem",
            "space-2xl": "4rem",
            "space-sm": "0.5rem",
            "space-md": "1rem",
            "margin-mobile": "1.25rem",
            "space-lg": "1.5rem",
            "space-xl": "2.5rem"
          },
          "fontFamily": {
            "label-md": ["Inter"],
            "code-md": ["JetBrains Mono"],
            "body-sm": ["Inter"],
            "headline-sm": ["Space Grotesk"],
            "code-lg": ["JetBrains Mono"],
            "body-lg": ["Inter"],
            "label-sm": ["JetBrains Mono"],
            "headline-lg": ["Space Grotesk"],
            "headline-lg-mobile": ["Space Grotesk"],
            "headline-md": ["Space Grotesk"],
            "code-sm": ["JetBrains Mono"],
            "headline-xl": ["Space Grotesk"],
            "body-md": ["Inter"],
            "headline-xl-mobile": ["Space Grotesk"]
          },
          "fontSize": {
            "label-md": ["13px", { "lineHeight": "16px", "fontWeight": "500" }],
            "code-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }],
            "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "code-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
            "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "code-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500" }],
            "headline-xl": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-xl-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }]
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
    /* Subtle scanline and console glow */
    .terminal-border-glow:hover {
      box-shadow: 0 0 0 1px rgba(77, 142, 255, 0.4), 0 8px 24px -6px rgba(0, 0, 0, 0.5);
    }
    /* Custom scrollbar for technical density */
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #080e1d;
    }
    ::-webkit-scrollbar-thumb {
      background: #242a3a;
      border-radius: 3px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #424754;
    }
  </style>
@include('partials.full-width')
</head>
<body class="bg-surface-container-lowest text-on-surface font-body-md antialiased min-h-screen flex flex-row overflow-x-hidden selection:bg-primary selection:text-on-primary">
<!-- ========================================================================= -->
<!-- 1. SIDEBAR LATÉRALE FIXE (260px) -->
<!-- ========================================================================= -->
<aside class="w-[260px] h-screen fixed left-0 top-0 bg-surface-container-lowest border-r border-outline-variant/30 flex flex-col justify-between z-40 select-none">
<!-- Top Branding & Status -->
<div class="p-5 border-b border-outline-variant/20">
<div class="flex items-center justify-between mb-3">
<div class="flex items-center gap-2">
<span class="text-secondary font-code-md text-code-lg font-bold tracking-tight">&gt;_</span>
<span class="font-code-md text-code-lg font-bold text-on-surface tracking-tight">Nestor KPADJA</span>
</div>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5 px-2 py-0.5 rounded bg-surface-container-low border border-outline-variant/40">
<span class="font-code-sm text-code-sm text-primary">ADMIN_CONSOLE</span>
<span class="font-code-sm text-code-sm text-on-surface-variant">v1.2</span>
</div>
<div class="flex items-center gap-1.5 px-2 py-0.5 rounded bg-surface-container-high border border-outline-variant/30">
<span class="w-2 h-2 rounded-full bg-[#10B981] animate-pulse"></span>
<span class="font-code-sm text-code-sm text-[#10B981] font-semibold">PROD</span>
</div>
</div>
</div>
<!-- Navigation List -->
<nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
<div class="px-3 pb-2 pt-1 font-label-sm text-label-sm text-outline tracking-wider uppercase">Console Navigation</div>
<!-- Item: Dashboard (Active) -->
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg bg-surface-container-high/80 text-primary border-l-2 border-primary font-code-md text-code-md group transition-all duration-150" href="#dashboard">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[20px]">dashboard</span>
<span class="font-medium text-on-surface">Tableau de bord</span>
</div>
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
</a>
<!-- Item: Projets -->
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low font-code-md text-code-md transition-colors duration-150 group" href="#projets">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors text-[20px]">terminal</span>
<span>Projets</span>
</div>
<span class="font-code-sm text-code-sm px-2 py-0.5 rounded bg-surface-container-high text-primary border border-outline-variant/30 font-semibold">5</span>
</a>
<!-- Item: Compétences -->
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low font-code-md text-code-md transition-colors duration-150 group" href="#competences">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors text-[20px]">memory</span>
<span>Compétences</span>
</div>
<span class="font-code-sm text-code-sm text-outline">18</span>
</a>
<!-- Item: Expériences -->
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low font-code-md text-code-md transition-colors duration-150 group" href="#experiences">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors text-[20px]">work_history</span>
<span>Expériences</span>
</div>
</a>
<!-- Item: Messages reçus -->
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low font-code-md text-code-md transition-colors duration-150 group" href="#messages">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors text-[20px]">mail</span>
<span>Messages reçus</span>
</div>
<span class="font-code-sm text-code-sm px-2 py-0.5 rounded bg-secondary-container/20 text-secondary border border-secondary/30 font-medium">3 nouv.</span>
</a>
<!-- Item: Paramètres -->
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low font-code-md text-code-md transition-colors duration-150 group" href="#parametres">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors text-[20px]">settings_ethernet</span>
<span>Paramètres</span>
</div>
</a>
</nav>
<!-- Bottom Sidebar Section: Git & Quick public link -->
<div class="p-3.5 border-t border-outline-variant/20 bg-surface-container-lowest/90 space-y-3">
<div class="p-2.5 rounded bg-surface-container-low border border-outline-variant/30 space-y-2">
<div class="flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-outline text-[16px]">device_hub</span>
<span class="font-code-sm text-code-sm text-outline">git main</span>
</div>
<span class="flex items-center gap-1 text-[#10B981] font-code-sm text-code-sm">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
            Sync
          </span>
</div>
<div class="font-code-sm text-code-sm text-on-surface-variant truncate">
          Commit 2026.02 :: Synchronisé
        </div>
<!-- Storage indicator -->
<div class="w-full bg-surface-container-highest rounded-full h-1 mt-1">
<div class="bg-primary h-1 rounded-full w-2/5"></div>
</div>
<div class="flex justify-between font-code-sm text-code-sm text-outline pt-0.5">
<span>Storage</span>
<span>412 MB / 1 GB</span>
</div>
</div>
<!-- Shortcut to Public Site -->
<a class="w-full flex items-center justify-center gap-2 px-3 py-2 rounded bg-surface-container-high hover:bg-surface-variant border border-outline-variant/40 text-on-surface font-code-sm text-code-sm transition-colors duration-150" href="https://nestorkpadja.com" rel="noopener noreferrer" target="_blank">
<span>Voir le site public</span>
<span class="material-symbols-outlined text-[16px] text-primary">open_in_new</span>
</a>
</div>
</aside>
<!-- ========================================================================= -->
<!-- MAIN WRAPPER (Left margin 260px for fixed sidebar) -->
<!-- ========================================================================= -->
<div class="ml-[260px] flex-1 flex flex-col min-w-0">
<!-- ======================================================================= -->
<!-- 2. EN-TÊTE SUPÉRIEUR (TOP BAR) -->
<!-- ======================================================================= -->
<header class="h-16 sticky top-0 z-30 bg-surface-container-lowest/85 backdrop-blur-md border-b border-outline-variant/30 px-6 flex items-center justify-between gap-4">
<!-- Current View & Breadcrumb -->
<div class="flex items-center gap-3">
<div class="flex items-center gap-1.5 font-code-sm text-code-sm text-outline">
<span>Admin</span>
<span>/</span>
<span class="text-primary font-medium">Tableau de bord &amp; Gestion des livrables</span>
</div>
</div>
<!-- Search Box with Ctrl + K Shortcut -->
<div class="hidden md:flex items-center flex-1 max-w-md mx-6">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-outline text-[18px]">search</span>
<input class="w-full pl-9 pr-14 py-1.5 bg-surface-container-low border border-outline-variant/40 rounded-lg text-on-surface placeholder-outline font-body-sm text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Rechercher un projet, tag, commit, commande..." type="text"/>
<kbd class="absolute right-2.5 top-2 px-1.5 py-0.5 rounded bg-surface-container-highest border border-outline-variant/60 font-code-sm text-code-sm text-on-surface-variant select-none">Ctrl + K</kbd>
</div>
</div>
<!-- Right Header Actions & Profile -->
<div class="flex items-center gap-3">
<!-- Primary Amber Action: + Ajouter un projet -->
<button class="flex items-center gap-1.5 px-3.5 py-2 rounded-lg bg-secondary text-[#0B1120] font-headline-sm text-[13px] font-bold tracking-tight hover:bg-secondary-fixed-dim transition-all shadow-[0_0_16px_rgba(245,158,11,0.25)] active:scale-95" onclick="document.getElementById('new-project-modal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[18px] font-bold">add</span>
<span class="hidden sm:inline">Ajouter un projet</span>
</button>
<!-- Notification Bell -->
<div class="relative">
<button aria-label="Notifications" class="p-2 rounded-lg bg-surface-container-low hover:bg-surface-container-high border border-outline-variant/40 text-on-surface-variant hover:text-on-surface transition-colors relative">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-secondary border border-surface-container-low"></span>
</button>
</div>
<div class="h-6 w-px bg-outline-variant/30 mx-1"></div>
<!-- User Profile Avatar & Role -->
<div class="flex items-center gap-3 pl-1">
<div class="relative">
<img alt="Portrait professionnel de Nestor KPADJA, ingénieur logiciel souriant avec lunettes de vue et hoodie sobre" class="w-9 h-9 rounded-lg object-cover border border-primary/40 p-0.5 bg-surface-container-low" src="https://lh3.googleusercontent.com/aida/AEtjO1XMXMveSmqIWZrK9w4KhXY2c-ntSfUYEv3aj-DM2yP1F_TvqVM2znUahz29lRMaC7PBtJC6FYgluYosewD0yt-voSg_TgmbB5DILSF41mrqqGpCvDko1P3yoK2HUgkH5BgO46Y88QRuTCoXWJPPcdIV2RI4I_3ctvEQYQKw-nqMn_dhAWPA2Fss1N-CzlOnWnpa9pMw-agL57v0-UYML6RFkF9U2CQha10HFuq8XCqwGJbuu-Ie8sWNu2Zo"/>
<span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 rounded-full bg-[#10B981] border-2 border-surface-container-lowest"></span>
</div>
<div class="hidden lg:flex flex-col text-left">
<span class="font-code-md text-code-md font-semibold text-on-surface leading-tight">Nestor KPADJA</span>
<span class="font-code-sm text-code-sm text-secondary font-medium tracking-wide">Super Admin</span>
</div>
<!-- Subtle Logout Button -->
<button aria-label="Déconnexion" class="p-2 rounded-lg text-outline hover:text-error hover:bg-error-container/20 transition-colors ml-1" title="Fermer la session">
<span class="material-symbols-outlined text-[20px]">logout</span>
</button>
</div>
</div>
</header>
<!-- ======================================================================= -->
<!-- 3. CONTENU PRINCIPAL (DASHBOARD VIEW) -->
<!-- ======================================================================= -->
<main class="p-6 md:p-8 space-y-8 flex-1 max-w-[1400px] w-full">
<!-- Page Header Description -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<h1 class="font-headline-lg text-headline-md sm:text-headline-lg font-bold text-on-surface tracking-tight flex items-center gap-3">
<span class="text-primary font-code-md">&gt;</span> Console d'Administration
          </h1>
<p class="font-body-md text-body-sm text-on-surface-variant mt-1">
            Supervision des micro-services, métriques de consultations et déploiement continu des livrables techniques.
          </p>
</div>
<div class="flex items-center gap-2">
<span class="font-code-sm text-code-sm px-2.5 py-1 rounded bg-surface-container-low border border-outline-variant/40 text-on-surface-variant flex items-center gap-1.5">
<span class="material-symbols-outlined text-[15px] text-primary">terminal</span>
            cluster-west-1a
          </span>
<button class="px-3 py-1.5 rounded bg-surface-container-low hover:bg-surface-container-high border border-outline-variant/40 font-code-sm text-code-sm text-primary flex items-center gap-1.5 transition-colors">
<span class="material-symbols-outlined text-[16px]">refresh</span>
<span>Recharger</span>
</button>
</div>
</div>
<!-- ===================================================================== -->
<!-- SECTION: 4 KPI CARDS (Architectural Blocks) -->
<!-- ===================================================================== -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Card 1: Nombre de projets -->
<div class="bg-surface-container-low p-5 rounded-xl border border-outline-variant/30 relative overflow-hidden terminal-border-glow transition-all duration-200">
<div class="flex items-start justify-between mb-3">
<span class="font-code-sm text-code-sm text-outline tracking-wider uppercase">Livrables Déployés</span>
<div class="p-2 rounded bg-surface-container-high border border-outline-variant/30 text-primary">
<span class="material-symbols-outlined text-[20px]">layers</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-headline-lg text-[32px] font-bold text-on-surface leading-tight">5</span>
<span class="font-code-sm text-code-sm text-[#10B981] font-semibold">4 actifs / 1 draft</span>
</div>
<div class="mt-3">
<div class="flex justify-between font-code-sm text-code-sm text-outline mb-1">
<span>Cadence déploiement</span>
<span class="text-primary font-medium">80%</span>
</div>
<div class="w-full bg-surface-container-highest rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full w-4/5"></div>
</div>
</div>
</div>
<!-- Card 2: Vues portfolio ce mois -->
<div class="bg-surface-container-low p-5 rounded-xl border border-outline-variant/30 relative overflow-hidden terminal-border-glow transition-all duration-200">
<div class="flex items-start justify-between mb-3">
<span class="font-code-sm text-code-sm text-outline tracking-wider uppercase">Audience Mensuelle</span>
<div class="p-2 rounded bg-surface-container-high border border-outline-variant/30 text-secondary">
<span class="material-symbols-outlined text-[20px]">insights</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-headline-lg text-[32px] font-bold text-on-surface leading-tight">3,842</span>
<span class="font-code-sm text-code-sm text-[#10B981] font-semibold flex items-center">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span> +18.4%
            </span>
</div>
<div class="mt-3 flex items-center gap-1 h-5 pt-1">
<span class="w-1.5 h-2 bg-primary/40 rounded-sm"></span>
<span class="w-1.5 h-3 bg-primary/40 rounded-sm"></span>
<span class="w-1.5 h-2.5 bg-primary/50 rounded-sm"></span>
<span class="w-1.5 h-4 bg-primary/70 rounded-sm"></span>
<span class="w-1.5 h-3.5 bg-primary/60 rounded-sm"></span>
<span class="w-1.5 h-5 bg-primary rounded-sm"></span>
<span class="w-1.5 h-4 bg-secondary rounded-sm"></span>
<span class="font-code-sm text-code-sm text-outline ml-2">Vs M-1 (Recruteurs Web3)</span>
</div>
</div>
<!-- Card 3: Messages reçus -->
<div class="bg-surface-container-low p-5 rounded-xl border border-outline-variant/30 relative overflow-hidden terminal-border-glow transition-all duration-200">
<div class="flex items-start justify-between mb-3">
<span class="font-code-sm text-code-sm text-outline tracking-wider uppercase">Boîte de Réception</span>
<div class="p-2 rounded bg-surface-container-high border border-outline-variant/30 text-primary">
<span class="material-symbols-outlined text-[20px]">mark_email_unread</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-headline-lg text-[32px] font-bold text-on-surface leading-tight">14</span>
<span class="font-code-sm text-code-sm text-secondary font-medium">3 non lus</span>
</div>
<div class="mt-3 flex items-center justify-between font-code-sm text-code-sm text-outline pt-1 border-t border-outline-variant/20">
<span>Délai réponse moy.</span>
<span class="text-on-surface font-semibold">&lt; 4h (SLA optimal)</span>
</div>
</div>
<!-- Card 4: Dernière mise à jour -->
<div class="bg-surface-container-low p-5 rounded-xl border border-outline-variant/30 relative overflow-hidden terminal-border-glow transition-all duration-200">
<div class="flex items-start justify-between mb-3">
<span class="font-code-sm text-code-sm text-outline tracking-wider uppercase">Pipeline CI/CD</span>
<div class="p-2 rounded bg-surface-container-high border border-outline-variant/30 text-[#10B981]">
<span class="material-symbols-outlined text-[20px]">rocket_launch</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface leading-tight">Il y a 2 heures</span>
</div>
<div class="mt-3 flex items-center justify-between font-code-sm text-code-sm pt-1 border-t border-outline-variant/20">
<span class="text-outline">Déploiement</span>
<span class="text-[#10B981] flex items-center gap-1 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span> Auto (GitHub Actions)
            </span>
</div>
</div>
</div>
<!-- ===================================================================== -->
<!-- SECTION PRINCIPALE: GESTION DES PROJETS (TABLE) -->
<!-- ===================================================================== -->
<section class="bg-surface-container-low rounded-xl border border-outline-variant/30 overflow-hidden shadow-2xl">
<!-- Toolbar Header -->
<div class="p-5 border-b border-outline-variant/30 flex flex-col md:flex-row md:items-center justify-between gap-4 bg-surface-container-low/50">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[22px]">view_list</span>
<div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">Gestion des projets</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Livrables techniques, dApps et architectures indexées dans le portfolio.</p>
</div>
</div>
<!-- Filters & Action Buttons -->
<div class="flex flex-wrap items-center gap-2.5">
<!-- Filter Tabs -->
<div class="flex items-center p-1 rounded-lg bg-surface-container-highest/60 border border-outline-variant/40 text-code-sm font-code-sm">
<button class="px-2.5 py-1 rounded bg-primary text-on-primary-fixed font-semibold transition-all">Tous (5)</button>
<button class="px-2.5 py-1 rounded text-on-surface-variant hover:text-on-surface transition-colors">Publiés (4)</button>
<button class="px-2.5 py-1 rounded text-on-surface-variant hover:text-on-surface transition-colors">Brouillons (1)</button>
</div>
<!-- Search in table -->
<div class="relative">
<span class="material-symbols-outlined absolute left-2.5 top-2 text-outline text-[16px]">search</span>
<input class="pl-8 pr-3 py-1.5 bg-surface-container-high border border-outline-variant/40 rounded-lg text-on-surface text-body-sm placeholder-outline focus:outline-none focus:border-primary text-xs w-36 sm:w-44" placeholder="Filtrer..." type="text"/>
</div>
<!-- Export Buttons -->
<button class="p-2 rounded-lg bg-surface-container-high hover:bg-surface-variant border border-outline-variant/40 text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1 font-code-sm text-code-sm" title="Exporter JSON">
<span class="material-symbols-outlined text-[16px]">file_download</span>
<span class="hidden sm:inline">Export</span>
</button>
</div>
</div>
<!-- Table Container -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse font-body-sm text-body-sm">
<thead>
<tr class="border-b border-outline-variant/30 bg-surface-container-lowest/60 text-outline font-label-sm text-label-sm uppercase tracking-wider select-none">
<th class="py-3.5 px-5 font-semibold">Miniature &amp; Projet</th>
<th class="py-3.5 px-4 font-semibold">Catégorie</th>
<th class="py-3.5 px-4 font-semibold">Stack Technique</th>
<th class="py-3.5 px-4 font-semibold">Statut</th>
<th class="py-3.5 px-4 font-semibold text-right">Vues / Clics</th>
<th class="py-3.5 px-5 font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/20 font-body-sm">
<!-- Row 1: TitanEduc -->
<tr class="hover:bg-surface-container-high/40 transition-colors group">
<td class="py-4 px-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center border border-outline-variant/40 text-primary shrink-0 font-code-md font-bold">
                      TE
                    </div>
<div>
<div class="font-headline-sm text-[15px] font-semibold text-on-surface group-hover:text-primary transition-colors flex items-center gap-1.5">
                        TitanEduc
                        <span class="material-symbols-outlined text-[14px] text-outline">verified</span>
</div>
<div class="font-code-sm text-code-sm text-outline">v2.4.1 :: Micro-services EdTech</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<span class="px-2.5 py-1 rounded-full bg-surface-container-highest text-primary font-code-sm text-code-sm border border-outline-variant/30">EdTech</span>
</td>
<td class="py-4 px-4">
<div class="flex flex-wrap gap-1.5 max-w-xs">
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Laravel</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Spring Boot</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Micro-services</span>
</div>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-[#10B981]/15 text-[#10B981] font-code-sm text-code-sm border border-[#10B981]/30 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                    Publié
                  </span>
</td>
<td class="py-4 px-4 text-right font-code-sm text-code-sm text-on-surface-variant">
<span class="text-on-surface font-semibold">1,420</span> <span class="text-outline">/ 312</span>
</td>
<td class="py-4 px-5 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded hover:bg-surface-container-highest text-outline hover:text-primary transition-colors" title="Éditer">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded hover:bg-surface-container-highest text-outline hover:text-on-surface transition-colors" title="Dupliquer">
<span class="material-symbols-outlined text-[18px]">content_copy</span>
</button>
<button class="p-1.5 rounded hover:bg-error-container/20 text-outline hover:text-error transition-colors" title="Supprimer">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: CBDC — Blockchain Banque Centrale -->
<tr class="hover:bg-surface-container-high/40 transition-colors group">
<td class="py-4 px-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center border border-outline-variant/40 text-secondary shrink-0 font-code-md font-bold">
                      BC
                    </div>
<div>
<div class="font-headline-sm text-[15px] font-semibold text-on-surface group-hover:text-primary transition-colors">
                        CBDC — Blockchain Banque Centrale
                      </div>
<div class="font-code-sm text-code-sm text-outline">Protocole décentralisé &amp; Tokenomics</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<span class="px-2.5 py-1 rounded-full bg-surface-container-highest text-secondary font-code-sm text-code-sm border border-outline-variant/30">Blockchain</span>
</td>
<td class="py-4 px-4">
<div class="flex flex-wrap gap-1.5 max-w-xs">
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Spring Boot</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Angular</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Docker</span>
</div>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-[#10B981]/15 text-[#10B981] font-code-sm text-code-sm border border-[#10B981]/30 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                    Publié
                  </span>
</td>
<td class="py-4 px-4 text-right font-code-sm text-code-sm text-on-surface-variant">
<span class="text-on-surface font-semibold">1,085</span> <span class="text-outline">/ 245</span>
</td>
<td class="py-4 px-5 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded hover:bg-surface-container-highest text-outline hover:text-primary transition-colors" title="Éditer">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded hover:bg-error-container/20 text-outline hover:text-error transition-colors" title="Supprimer">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3: Titan — Module Immobilier -->
<tr class="hover:bg-surface-container-high/40 transition-colors group">
<td class="py-4 px-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center border border-outline-variant/40 text-primary shrink-0 font-code-md font-bold">
                      TI
                    </div>
<div>
<div class="font-headline-sm text-[15px] font-semibold text-on-surface group-hover:text-primary transition-colors">
                        Titan — Module Immobilier
                      </div>
<div class="font-code-sm text-code-sm text-outline">Moteur d'indexation &amp; Stockage S3</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<span class="px-2.5 py-1 rounded-full bg-surface-container-highest text-primary font-code-sm text-code-sm border border-outline-variant/30">Backend</span>
</td>
<td class="py-4 px-4">
<div class="flex flex-wrap gap-1.5 max-w-xs">
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Spring Boot</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Minio S3</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Sécurité</span>
</div>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-[#10B981]/15 text-[#10B981] font-code-sm text-code-sm border border-[#10B981]/30 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                    Publié
                  </span>
</td>
<td class="py-4 px-4 text-right font-code-sm text-code-sm text-on-surface-variant">
<span class="text-on-surface font-semibold">680</span> <span class="text-outline">/ 98</span>
</td>
<td class="py-4 px-5 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded hover:bg-surface-container-highest text-outline hover:text-primary transition-colors" title="Éditer">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded hover:bg-error-container/20 text-outline hover:text-error transition-colors" title="Supprimer">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4: Gestion scolaire & 2FA -->
<tr class="hover:bg-surface-container-high/40 transition-colors group">
<td class="py-4 px-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center border border-outline-variant/40 text-primary shrink-0 font-code-md font-bold">
                      2F
                    </div>
<div>
<div class="font-headline-sm text-[15px] font-semibold text-on-surface group-hover:text-primary transition-colors">
                        Gestion scolaire &amp; 2FA
                      </div>
<div class="font-code-sm text-code-sm text-outline">Authentification biométrique &amp; TOTP</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<span class="px-2.5 py-1 rounded-full bg-surface-container-highest text-primary font-code-sm text-code-sm border border-outline-variant/30">Full Stack</span>
</td>
<td class="py-4 px-4">
<div class="flex flex-wrap gap-1.5 max-w-xs">
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">PostgreSQL</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">IA</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">CRUD</span>
</div>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-[#10B981]/15 text-[#10B981] font-code-sm text-code-sm border border-[#10B981]/30 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                    Publié
                  </span>
</td>
<td class="py-4 px-4 text-right font-code-sm text-code-sm text-on-surface-variant">
<span class="text-on-surface font-semibold">430</span> <span class="text-outline">/ 76</span>
</td>
<td class="py-4 px-5 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded hover:bg-surface-container-highest text-outline hover:text-primary transition-colors" title="Éditer">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded hover:bg-error-container/20 text-outline hover:text-error transition-colors" title="Supprimer">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 5: Hisaa — Plateforme de tontine NFC -->
<tr class="hover:bg-surface-container-high/40 transition-colors group bg-surface-container-high/10">
<td class="py-4 px-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-secondary-container/20 flex items-center justify-center border border-secondary/30 text-secondary shrink-0 font-code-md font-bold">
                      HS
                    </div>
<div>
<div class="font-headline-sm text-[15px] font-semibold text-on-surface group-hover:text-secondary transition-colors">
                        Hisaa — Plateforme de tontine NFC
                      </div>
<div class="font-code-sm text-code-sm text-secondary">En cours de finalisation &amp; testnet</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<span class="px-2.5 py-1 rounded-full bg-surface-container-highest text-secondary font-code-sm text-code-sm border border-outline-variant/30">Full Stack</span>
</td>
<td class="py-4 px-4">
<div class="flex flex-wrap gap-1.5 max-w-xs">
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">NFC</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">Fintech</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest text-on-surface-variant font-code-sm text-code-sm border border-outline-variant/40">API</span>
</div>
</td>
<td class="py-4 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-secondary-container/20 text-secondary font-code-sm text-code-sm border border-secondary/40 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Brouillon
                  </span>
</td>
<td class="py-4 px-4 text-right font-code-sm text-code-sm text-on-surface-variant">
<span class="text-outline">0 / 0</span>
</td>
<td class="py-4 px-5 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="px-2.5 py-1 rounded bg-secondary/10 hover:bg-secondary/20 text-secondary border border-secondary/30 font-code-sm text-code-sm font-semibold transition-colors" title="Publier immédiatement">
                      Publier
                    </button>
<button class="p-1.5 rounded hover:bg-surface-container-highest text-outline hover:text-primary transition-colors" title="Éditer">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded hover:bg-error-container/20 text-outline hover:text-error transition-colors" title="Supprimer">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Footer / Pagination -->
<div class="p-4 border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-3 bg-surface-container-lowest/40 font-code-sm text-code-sm text-outline">
<div>
            Affichage de <span class="text-on-surface font-semibold">1</span> à <span class="text-on-surface font-semibold">5</span> sur <span class="text-on-surface font-semibold">5</span> entrées répertoriées
          </div>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded bg-surface-container-high text-outline cursor-not-allowed border border-outline-variant/30" disabled="">Précédent</button>
<button class="px-3 py-1 rounded bg-primary text-on-primary-fixed font-bold border border-primary">1</button>
<button class="px-2.5 py-1 rounded bg-surface-container-high text-outline cursor-not-allowed border border-outline-variant/30" disabled="">Suivant</button>
</div>
</div>
</section>
<!-- System Diagnostic Terminal Log -->
<section class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/40 space-y-2 font-code-sm text-code-sm">
<div class="flex items-center justify-between text-outline pb-2 border-b border-outline-variant/20">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-primary">terminal</span>
<span class="text-on-surface font-medium">Console Daemon Log :: Event stream</span>
</div>
<span class="text-[#10B981] flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span> CONNECTED (port: 9002)
          </span>
</div>
<div class="space-y-1 text-on-surface-variant font-code-sm">
<p><span class="text-outline">[2026-02-27 14:22:04]</span> <span class="text-primary">INFO</span> Auto-sync trigger received from github-webhook (ref: refs/heads/main)</p>
<p><span class="text-outline">[2026-02-27 14:22:07]</span> <span class="text-[#10B981]">SUCCESS</span> Next.js SSG build generated 14 static pages in 4.82s</p>
<p><span class="text-outline">[2026-02-27 15:10:31]</span> <span class="text-secondary">AUDIT</span> Super Admin Nestor KPADJA logged in via Hardware TOTP Key</p>
</div>
</section>
</main>
<!-- Page Footer (From shared component requirements) -->
<footer class="bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
<div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4 w-full font-code-sm text-code-sm">
<div class="text-on-surface-variant">
          © 2025 Nestor KPADJA. Architectures Distribuées &amp; Protocoles Décentralisés. Lomé, Togo.
        </div>
<div class="flex items-center gap-5 text-on-surface-variant">
<a class="hover:text-primary transition-colors" href="#">GitHub</a>
<a class="hover:text-primary transition-colors" href="#">LinkedIn</a>
<a class="hover:text-primary transition-colors" href="#">Documentation</a>
<a class="hover:text-primary transition-colors" href="#">PGP Key</a>
<a class="hover:text-primary transition-colors" href="#">Status</a>
</div>
</div>
</footer>
</div>
<!-- ========================================================================= -->
<!-- 4. MODALE / TIROIR D'AJOUT RAPIDE "Ajouter un nouveau projet" -->
<!-- ========================================================================= -->
<div class="fixed inset-0 z-50 bg-[#080e1d]/80 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto hidden" id="new-project-modal">
<!-- Modal Card Content -->
<div class="bg-surface-container-low border border-outline-variant/50 rounded-2xl w-full max-w-2xl shadow-[0_24px_48px_-12px_rgba(3,7,18,0.9)] overflow-hidden my-8 animate-in fade-in zoom-in-95 duration-200">
<!-- Modal Header -->
<div class="p-5 border-b border-outline-variant/30 flex items-center justify-between bg-surface-container-lowest/80">
<div class="flex items-center gap-2.5">
<span class="text-secondary font-code-md font-bold">&gt;_</span>
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface tracking-tight">Formulaire d'injection : Nouveau Projet</h3>
</div>
<button class="p-1.5 rounded-lg text-outline hover:text-on-surface hover:bg-surface-container-high transition-colors" onclick="document.getElementById('new-project-modal').classList.add('hidden')">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<!-- Form Body -->
<form class="p-6 space-y-4 max-h-[75vh] overflow-y-auto" onsubmit="event.preventDefault(); document.getElementById('new-project-modal').classList.add('hidden');">
<!-- Grid: Title & Category -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Project Title -->
<div class="space-y-1.5">
<label class="font-code-sm text-code-sm text-on-surface font-semibold flex items-center gap-1">
              Titre du projet <span class="text-secondary">*</span>
</label>
<input class="w-full px-3.5 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant/40 text-on-surface placeholder-outline font-body-sm text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Ex: DePay — Smart Contract Escrow" required="" type="text"/>
</div>
<!-- Category Dropdown -->
<div class="space-y-1.5">
<label class="font-code-sm text-code-sm text-on-surface font-semibold flex items-center gap-1">
              Catégorie technique <span class="text-secondary">*</span>
</label>
<select class="w-full px-3.5 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant/40 text-on-surface font-body-sm text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
<option value="Blockchain">Blockchain &amp; Protocoles Décentralisés</option>
<option value="Backend">Backend &amp; Systèmes Distribués</option>
<option value="Full Stack">Full Stack</option>
<option value="EdTech">EdTech</option>
<option value="Autre">Autre architecture</option>
</select>
</div>
</div>
<!-- Short Description -->
<div class="space-y-1.5">
<label class="font-code-sm text-code-sm text-on-surface font-semibold flex items-center gap-1">
            Description courte (Accroche 2 lignes) <span class="text-secondary">*</span>
</label>
<input class="w-full px-3.5 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant/40 text-on-surface placeholder-outline font-body-sm text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Ex: Protocole de paiement pair-à-pair non dépositif déployé sur EVM avec réconciliation en temps réel." required="" type="text"/>
</div>
<!-- Long Description / Markdown Architecture -->
<div class="space-y-1.5">
<div class="flex items-center justify-between">
<label class="font-code-sm text-code-sm text-on-surface font-semibold flex items-center gap-1">
              Architecture technique &amp; Détails
            </label>
<span class="font-code-sm text-code-sm text-primary">Support Markdown activé</span>
</div>
<textarea class="w-full px-3.5 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant/40 text-on-surface placeholder-outline font-code-sm text-code-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="### Topologie du système
- Consensus RAFT
- Message broker Kafka avec tolérance aux pannes
- Découpage en sous-réseaux Docker isolés" rows="4"></textarea>
</div>
<!-- Tech Stack & Tags Input -->
<div class="space-y-1.5">
<label class="font-code-sm text-code-sm text-on-surface font-semibold flex items-center gap-1">
            Technologies &amp; Tags
          </label>
<div class="p-2 rounded-lg bg-surface-container-lowest border border-outline-variant/40 flex flex-wrap items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded bg-surface-container-high text-primary border border-outline-variant/40 font-code-sm text-code-sm">
              Spring Boot
              <button class="text-outline hover:text-error" type="button">×</button>
</span>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded bg-surface-container-high text-primary border border-outline-variant/40 font-code-sm text-code-sm">
              Docker
              <button class="text-outline hover:text-error" type="button">×</button>
</span>
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded bg-surface-container-high text-secondary border border-outline-variant/40 font-code-sm text-code-sm">
              Solidity
              <button class="text-outline hover:text-error" type="button">×</button>
</span>
<input class="bg-transparent border-none text-xs text-on-surface placeholder-outline focus:ring-0 p-1 w-24" placeholder="+ Ajouter tag..." type="text"/>
</div>
</div>
<!-- URLs: Demo & GitHub Repo -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Demo URL -->
<div class="space-y-1.5">
<label class="font-code-sm text-code-sm text-on-surface font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-outline">link</span>
              URL Démo / Production
            </label>
<input class="w-full px-3.5 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant/40 text-on-surface placeholder-outline font-body-sm text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="https://app.depay.network" type="url"/>
</div>
<!-- GitHub Repo -->
<div class="space-y-1.5">
<label class="font-code-sm text-code-sm text-on-surface font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-outline">code</span>
              Dépôt GitHub / Source Code
            </label>
<input class="w-full px-3.5 py-2 rounded-lg bg-surface-container-lowest border border-outline-variant/40 text-on-surface placeholder-outline font-body-sm text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="https://github.com/nkpadja/depay-core" type="text"/>
</div>
</div>
<!-- Dropzone / Image Upload -->
<div class="space-y-1.5">
<label class="font-code-sm text-code-sm text-on-surface font-semibold">
            Capture d'écran / Bannière d'illustration
          </label>
<div class="border-2 border-dashed border-outline-variant/50 hover:border-primary/60 rounded-xl p-5 text-center bg-surface-container-lowest/50 hover:bg-surface-container-lowest transition-colors cursor-pointer group">
<div class="flex flex-col items-center justify-center gap-2">
<div class="p-2.5 rounded-full bg-surface-container-high border border-outline-variant/40 text-primary group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[24px]">cloud_upload</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface font-medium">
                Glissez une capture d'écran PNG, JPG jusqu'à 5 Mo
              </div>
<p class="font-code-sm text-code-sm text-outline">
                Dimensions recommandées : 1920x1080px (Ratio 16:9)
              </p>
</div>
</div>
</div>
<!-- Modal Footer Actions -->
<div class="pt-4 border-t border-outline-variant/30 flex items-center justify-end gap-3">
<button class="px-4 py-2 rounded-lg bg-surface-container-high hover:bg-surface-variant border border-outline-variant/40 text-on-surface font-code-sm text-code-sm transition-colors" onclick="document.getElementById('new-project-modal').classList.add('hidden')" type="button">
            Annuler
          </button>
<button class="flex items-center gap-2 px-5 py-2 rounded-lg bg-secondary text-[#0B1120] font-headline-sm text-body-sm font-bold tracking-tight hover:bg-secondary-fixed-dim transition-all shadow-[0_0_16px_rgba(245,158,11,0.3)] active:scale-95" type="submit">
<span class="material-symbols-outlined text-[18px]">publish</span>
            Publier le projet
          </button>
</div>
</form>
</div>
</div>
<!-- Micro-Interactions Script -->
<script>
    // Keyboard shortcut handler for Ctrl+K
    window.addEventListener('keydown', (e) => {
      if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
        e.preventDefault();
        const searchInput = document.querySelector('input[type="text"]');
        if (searchInput) {
          searchInput.focus();
        }
      }
      // Escape closes modal
      if (e.key === 'Escape') {
        const modal = document.getElementById('new-project-modal');
        if (modal && !modal.classList.contains('hidden')) {
          modal.classList.add('hidden');
        }
      }
    });
  </script>
</body></html>
