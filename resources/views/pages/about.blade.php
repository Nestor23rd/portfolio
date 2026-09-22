<!DOCTYPE html>

<html class="dark" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ __('site.title_about') }}</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
@include('partials.theme-head')
@include('partials.full-width')
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary terminal-grid-pattern antialiased">

@include('partials.navigation')
@include('partials.hero-globe', ['global' => true])
@include('partials.java-coffee')

<!-- Main Content Canvas -->
<main class="flex-grow pt-28 pb-20 max-w-7xl mx-auto px-6 md:px-12 w-full">

    <!-- ==================== HEADER BLOCK ==================== -->
    <section class="mb-14 pb-8 border-b border-outline-variant/30">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-surface-container-low border border-outline-variant/50 text-primary font-code-sm text-code-sm">
                    <span class="text-secondary font-semibold">&gt;_</span>
                    <span>profil_developpeur.md</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface font-bold tracking-tight">
                    {{ __('site.about_heading_pre') }} <span class="text-primary">Nestor KPADJA</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl font-normal leading-relaxed">
                    {{ __('site.about_tagline') }}
                </p>
            </div>
            <!-- Quick Status Badge -->
            <div class="flex flex-col items-start lg:items-end gap-2 shrink-0">
                <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40 font-code-sm text-code-sm text-on-surface-variant shadow-inner">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-outline">{{ __('site.status_label') }}</span>
                    <span class="text-emerald-400 font-semibold">{{ __('site.available') }}</span>
                    <span class="text-outline-variant">|</span>
                    <span class="text-on-surface">{{ __('site.remote_hybrid') }}</span>
                </div>
                <p class="font-code-sm text-code-sm text-outline">
                    {{ __('site.location_val') }}
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== BIO & IDENTITY BENTO (40% / 60%) ==================== -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start mb-20">
        
        <!-- COLONNE GAUCHE (5 cols) : Identity Card -->
        <div class="lg:col-span-5 flex flex-col gap-6">
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 overflow-hidden">
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
                        {{ __('site.backend_blockchain') }}
                    </div>
                </div>

                <!-- Structured Key Info Badges -->
                <div class="mt-6 flex flex-col gap-2.5">
                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-primary">location_on</span>
                            <span>{{ __('site.location_label') }}</span>
                        </span>
                        <span class="text-on-surface font-semibold">Lomé, Togo</span>
                    </div>

                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-secondary">school</span>
                            <span>{{ __('site.education_label') }}</span>
                        </span>
                        <span class="text-on-surface font-semibold">{{ __('site.education_val') }}</span>
                    </div>

                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-emerald-400">deployed_code</span>
                            <span>{{ __('site.specialization_label') }}</span>
                        </span>
                        <span class="text-on-surface font-semibold">{{ __('site.specialization_val') }}</span>
                    </div>

                    <div class="flex items-center justify-between px-3.5 py-2.5 rounded-lg bg-surface-container border border-outline-variant/30 text-on-surface-variant font-code-sm text-code-sm">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-primary">work_outline</span>
                            <span>{{ __('site.availability_label') }}</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-emerald-400 font-semibold">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            {{ __('site.immediate_val') }}
                        </span>
                    </div>
                </div>

                <!-- Action Links -->
                <div class="mt-6 pt-5 border-t border-outline-variant/30 flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3">
                    <a class="px-4 py-2.5 rounded-lg bg-secondary-container hover:bg-secondary text-on-secondary-container font-label-md font-bold text-center transition-all duration-150 active:scale-95 shadow-sm flex items-center justify-center gap-2" href="{{ route('contact') }}">
                        <span class="material-symbols-outlined text-base">mail</span>
                        <span>{{ __('site.contact') }}</span>
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
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8">
                <div class="flex items-center justify-between border-b border-outline-variant/30 pb-4 mb-6 font-code-sm text-code-sm text-on-surface-variant">
                    <div class="flex items-center gap-2">
                        <span class="inline-block w-2.5 h-2.5 rounded-full bg-error/70"></span>
                        <span class="inline-block w-2.5 h-2.5 rounded-full bg-secondary/70"></span>
                        <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-500/70"></span>
                        <span class="ml-2 text-on-surface font-mono">qui_suis_je.md</span>
                    </div>
                    <span class="text-primary font-mono text-[11px] bg-surface-container px-2 py-0.5 rounded">DEVELOPPEUR_BACKEND</span>
                </div>

                @php
                    $dbBackendFrameworks = $skills->where('category', 'Frameworks')
                        ->reject(fn($s) => in_array(strtolower($s->name), ['angular.js', 'angular', 'react', 'vue', 'vue.js']))
                        ->values();
                    if ($dbBackendFrameworks->isEmpty()) {
                        $dbBackendFrameworks = $skills->where('category', 'Frameworks')->values();
                    }
                    $joinWord = app()->getLocale() === 'en' ? ' and ' : ' et ';
                    $frameworksHtml = $dbBackendFrameworks->map(fn($s) => '<strong class="text-on-surface font-semibold">' . e($s->name) . '</strong>')->join(', ', $joinWord);

                    $dbDatabases = $skills->where('category', 'Data & Infra')
                        ->filter(fn($s) => in_array(strtolower($s->name), ['postgresql', 'mysql', 'sqlite', 'mongodb']))
                        ->values();
                    if ($dbDatabases->isEmpty()) {
                        $databasesHtml = '<strong class="text-on-surface font-semibold">PostgreSQL</strong>';
                    } else {
                        $databasesHtml = $dbDatabases->map(fn($s) => '<strong class="text-on-surface font-semibold">' . e($s->name) . '</strong>')->join(', ', $joinWord);
                    }
                @endphp

                <div class="space-y-4 font-body-md text-on-surface-variant leading-relaxed">
                    @if(app()->getLocale() === 'en')
                        <p class="text-on-surface font-body-lg text-body-lg font-medium leading-relaxed">
                            A backend and blockchain enthusiast with a Bachelor's degree in Software Engineering.
                        </p>
                        <p>
                            My journey is driven by the desire to build reliable, clean and well-structured applications. From relational modeling with {!! $databasesHtml !!} to building REST APIs with {!! $frameworksHtml !!}, I place strong emphasis on code clarity, security and maintainability.
                        </p>
                        <p>
                            Throughout my experience — including an exploratory project around a central bank digital currency (<strong class="text-secondary font-semibold">CBDC Blockchain</strong>) and applications such as <strong class="text-primary font-semibold">Titan / TitanEduc</strong> — I apply sound development practices: automated testing, Docker containerization, Git version control and continuous delivery.
                        </p>
                        <p>
                            Certified by the <strong class="text-on-surface font-semibold">Linux Foundation</strong> in Blockchain technologies and a finalist in the <strong class="text-on-surface font-semibold">CodeQuity</strong> Hackathon, I always favor pragmatism and careful execution to deliver concrete value to users.
                        </p>
                    @else
                        <p class="text-on-surface font-body-lg text-body-lg font-medium leading-relaxed">
                            Développeur passionné par le backend et l'écosystème blockchain, titulaire d'une Licence en Génie Logiciel.
                        </p>
                        <p>
                            Mon parcours est guidé par l'envie de concevoir des applications fiables, propres et bien structurées. De la modélisation relationnelle sous {!! $databasesHtml !!}, à la réalisation d'APIs REST sous {!! $frameworksHtml !!}, j'accorde une importance essentielle à la clarté du code, à la sécurité et à la maintenabilité.
                        </p>
                        <p>
                            Au fil de mes expériences — notamment sur un projet d'exploration autour d'une monnaie numérique de banque centrale (<strong class="text-secondary font-semibold">CBDC Blockchain</strong>) et sur des applications comme <strong class="text-primary font-semibold">Titan / TitanEduc</strong> —, j'applique de bonnes pratiques de développement : tests automatisés, conteneurisation avec <strong class="text-on-surface font-semibold">Docker</strong>, versionnement Git et déploiement continu.
                        </p>
                        <p>
                            Certifié par la <strong class="text-on-surface font-semibold">Linux Foundation</strong> en technologies Blockchain et finaliste du Hackathon <strong class="text-on-surface font-semibold">CodeQuity</strong>, je privilégie toujours le pragmatisme et le travail soigné pour répondre concrètement aux besoins des utilisateurs.
                        </p>
                    @endif
                </div>

                <!-- Stats Ribbon inside Bio Card -->
                <div class="mt-8 pt-6 border-t border-outline-variant/30 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-primary block">{{ $projectsCount }}+</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">{{ __('site.stat_projects') }}</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-secondary block">{{ $skillsCount }}</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">{{ __('site.stat_skills') }}</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-emerald-400 block">{{ $certificationsCount }}</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">{{ __('site.stat_certifications') }}</span>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container/60 border border-outline-variant/20">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface block">{{ $experiences->count() }}</span>
                        <span class="font-code-sm text-[11px] text-on-surface-variant uppercase tracking-wider">{{ __('site.stat_experiences') }}</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==================== PRINCIPES & BONNES PRATIQUES ==================== -->
    <section class="mb-20">
        <div class="flex items-center gap-3 mb-8">
            <span class="text-secondary font-code-md text-code-md font-bold">&gt;_</span>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">
                {{ __('site.principles_title') }}
            </h2>
            <div class="h-px bg-outline-variant/30 flex-grow ml-4"></div>
            <span class="font-code-sm text-code-sm text-outline hidden sm:inline">CORE_METHODOLOGY</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Pilier 1: Rigueur Architecturale -->
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 shrink-0 group-hover:border-primary/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">architecture</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">{{ __('site.pillar1_tag') }}</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            {{ __('site.principle1_title') }}
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            {{ __('site.principle1_desc') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pilier 2: Intégrité des Données & Résilience -->
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 hover:border-secondary/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-secondary border border-outline-variant/30 shrink-0 group-hover:border-secondary/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">database</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">{{ __('site.pillar2_tag') }}</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            {{ __('site.principle2_title') }}
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            {{ __('site.principle2_desc') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pilier 3: Culture Produit & Pragmatisme -->
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 hover:border-primary/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary border border-outline-variant/30 shrink-0 group-hover:border-primary/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">bolt</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">{{ __('site.pillar3_tag') }}</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            {{ __('site.principle3_title') }}
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            {{ __('site.principle3_desc') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pilier 4: Esprit d'Équipe & Collaboration Agile -->
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 hover:border-emerald-400/50 rounded-xl p-6 transition-all duration-200 group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-emerald-400 border border-outline-variant/30 shrink-0 group-hover:border-emerald-400/50 transition-colors">
                        <span class="material-symbols-outlined text-2xl">groups</span>
                    </div>
                    <div>
                        <span class="font-code-sm text-code-sm text-secondary font-semibold uppercase tracking-wider block mb-1">{{ app()->getLocale() === 'en' ? 'PILLAR 04' : 'PILIER 04' }}</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            {{ __('site.principle4_title') }}
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            {{ __('site.principle4_desc') }}
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
                    {{ __('site.career_title') }}
                </h2>
            </div>
            <a class="text-primary font-code-sm text-code-sm hover:underline flex items-center gap-1" href="{{ route('experience') }}">
                <span>{{ __('site.see_details') }}</span>
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="space-y-4">
            @forelse($experiences as $exp)
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 hover:border-primary/40 rounded-xl p-6 transition-all duration-200 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-surface-container border border-outline-variant/30 flex items-center justify-center text-primary shrink-0 mt-0.5">
                        <span class="material-symbols-outlined text-xl">
                            {{ $exp->is_current ? 'terminal' : ($exp->company === 'Formation' ? 'school' : 'business_center') }}
                        </span>
                    </div>
                    <div>
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                {{ __($exp->role) }}
                            </h3>
                            @if($exp->is_current)
                            <span class="font-code-sm text-[11px] px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 font-semibold">
                                {{ __('site.current_position') }}
                            </span>
                            @endif
                        </div>
                        <div class="font-code-sm text-code-sm text-secondary mb-2">
                            {{ __($exp->company ?: 'Indépendant / Projet') }}
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed max-w-3xl">
                            {{ __($exp->description) }}
                        </p>
                    </div>
                </div>

                <div class="shrink-0 md:text-right font-code-sm text-code-sm text-outline border-t md:border-t-0 border-outline-variant/20 pt-3 md:pt-0">
                    <div>{{ $exp->start_date ? $exp->start_date->format('Y') : '' }} — {{ $exp->is_current ? __('site.current_position') : ($exp->end_date ? $exp->end_date->format('Y') : '') }}</div>
                    @if($exp->location)
                    <div class="text-[11px] text-on-surface-variant mt-0.5">{{ $exp->location }}</div>
                    @endif
                </div>
            </div>
            @empty
            <div class="p-8 text-center text-on-surface-variant bg-surface-container-low border border-outline-variant/30 rounded-xl">
                {{ __('site.no_experience') }}
            </div>
            @endforelse
        </div>
    </section>

    <!-- ==================== MÉTHODOLOGIE & ENVIRONNEMENT DE TRAVAIL ==================== -->
    <section class="mb-20">
        <div class="flex items-center gap-3 mb-8">
            <span class="text-secondary font-code-md text-code-md font-bold">&gt;_</span>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">
                {{ __('site.workflow_title') }}
            </h2>
            <div class="h-px bg-outline-variant/30 flex-grow ml-4"></div>
            <span class="font-code-sm text-code-sm text-outline hidden sm:inline">WORKFLOW_STACK</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Box 1 -->
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4 text-primary">
                    <span class="material-symbols-outlined text-2xl">terminal</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ __('site.tools_title') }}</h3>
                </div>
                <ul class="space-y-2.5 font-code-sm text-code-sm text-on-surface-variant">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Linux & Bash environment' : 'Environnement Linux & Bash' }}</span>
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
                        <span>{{ app()->getLocale() === 'en' ? 'Automated CI/CD pipelines' : 'Pipelines CI/CD automatisés' }}</span>
                    </li>
                </ul>
            </div>

            <!-- Box 2 -->
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4 text-secondary">
                    <span class="material-symbols-outlined text-2xl">api</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ __('site.quality_title') }}</h3>
                </div>
                <ul class="space-y-2.5 font-code-sm text-code-sm text-on-surface-variant">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'RESTful APIs & OpenAPI contracts' : 'APIs RESTful & Contrats OpenAPI' }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Unit & integration testing' : "Tests unitaires & d'intégration" }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Layered architecture & MVC' : 'Architecture en couches & MVC' }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Secure authentication (OAuth2, JWT)' : 'Authentification sécurisée (OAuth2, JWT)' }}</span>
                    </li>
                </ul>
            </div>

            <!-- Box 3 -->
            <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4 text-emerald-400">
                    <span class="material-symbols-outlined text-2xl">handshake</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ __('site.collaboration_title') }}</h3>
                </div>
                <ul class="space-y-2.5 font-code-sm text-code-sm text-on-surface-variant">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Scrum methodology & Sprints' : 'Méthodologie Scrum / Sprints' }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Systematic code reviews' : 'Revues de code systématiques' }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Careful technical documentation' : 'Documentation technique soignée' }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ app()->getLocale() === 'en' ? 'Autonomy & proactive initiative' : "Autonomie et prise d'initiative" }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ==================== CENTRES D'INTÉRÊT ==================== -->
    <section class="mb-20">
        <div class="reveal-card specular-card bg-surface-container-low border border-outline-variant/40 rounded-xl p-6 md:p-8">
            <div class="flex items-center gap-2 font-code-sm text-code-sm text-primary mb-4">
                <span>&gt;_</span>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ __('site.passions_title') }}</h3>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed max-w-3xl">
                {{ __('site.passions_intro') }}
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/30 flex items-start gap-3">
                    <span class="text-2xl shrink-0">⚽</span>
                    <div>
                        <strong class="font-headline-sm text-[16px] text-on-surface block mb-1">{{ __('site.passion_football') }}</strong>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('site.passion_football_desc') }}</p>
                    </div>
                </div>
                <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/30 flex items-start gap-3">
                    <span class="text-2xl shrink-0">🎮</span>
                    <div>
                        <strong class="font-headline-sm text-[16px] text-on-surface block mb-1">{{ __('site.passion_gaming') }}</strong>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('site.passion_gaming_desc') }}</p>
                    </div>
                </div>
                <div class="p-4 rounded-xl bg-surface-container border border-outline-variant/30 flex items-start gap-3">
                    <span class="text-2xl shrink-0">⚡</span>
                    <div>
                        <strong class="font-headline-sm text-[16px] text-on-surface block mb-1">{{ __('site.passion_watch') }}</strong>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('site.passion_watch_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CALL TO ACTION ==================== -->
    <section class="mt-8">
        <div class="reveal-card relative overflow-hidden rounded-2xl bg-surface-container-low border border-outline-variant/40 p-8 md:p-12">
            <div class="absolute top-0 left-1/4 right-1/4 h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
            <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div class="max-w-2xl space-y-3">
                    <div class="flex items-center gap-2 text-secondary font-code-sm text-code-sm">
                        <span class="material-symbols-outlined text-[18px]">terminal</span>
                        <span>// {{ app()->getLocale() === 'en' ? 'AVAILABLE_FOR_COLLABORATION' : 'COLLABORATION_DISPONIBLE' }}</span>
                    </div>
                    <h2 class="font-headline-md text-headline-md text-on-surface font-bold">
                        {{ __('site.about_cta_title') }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ __('site.about_cta_desc') }}
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 shrink-0">
                    <a class="bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3.5 rounded-lg hover:bg-secondary-fixed-dim transition-all duration-150 text-center shadow-lg active:scale-95 flex items-center justify-center gap-2" href="{{ route('contact') }}">
                        <span>{{ __('site.start_conversation') }}</span>
                        <span class="material-symbols-outlined text-[18px]">send</span>
                    </a>
                    <a class="border border-outline-variant/50 text-on-surface hover:border-primary font-code-md text-code-md px-5 py-3.5 rounded-lg text-center transition-colors bg-surface-container hover:bg-surface-container-high" href="{{ route('projects') }}">
                        {{ __('site.projects') }} &gt;
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
            <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
        </div>
    </div>
</footer>

</body></html>
