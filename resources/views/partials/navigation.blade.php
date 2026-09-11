<style>
    body > header:not(.portfolio-topbar) { display: none !important; }
    .portfolio-topbar { width: 100% !important; height: 4rem !important; left: 0 !important; right: 0 !important; background-color: rgba(8,14,29,.94) !important; border-color: rgba(148,163,184,.25) !important; }
    .portfolio-topbar > div { width: 100% !important; max-width: none !important; height: 4rem !important; display: flex !important; align-items: center !important; justify-content: space-between !important; }
    .portfolio-topbar nav { display: flex !important; align-items: center !important; gap: 2rem !important; }
    .portfolio-topbar nav a { white-space: nowrap; flex: 0 1 auto; }
    .portfolio-topbar .portfolio-brand { white-space: nowrap; flex-shrink: 0; }
    .portfolio-topbar .portfolio-contact { white-space: nowrap; flex-shrink: 0; min-width: 8.5rem; justify-content: center; }
    @media (max-width: 767px) {
        .portfolio-topbar nav { display: none !important; }
        .portfolio-topbar .portfolio-contact { margin-left: auto; }
    }
</style>
@php($publicSettings = \App\Models\SiteSetting::pluck('value', 'key'))
<header class="portfolio-topbar bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30 docked full-width top-0 fixed z-50">
    <div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
        <a class="portfolio-brand font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2 group" href="{{ route('home') }}"><span class="text-primary group-hover:text-primary-container transition-colors">&gt;_</span><span>Nestor KPADJA</span></a>
        <nav class="hidden md:flex items-center gap-8 lg:gap-10">
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('home') }}">Accueil</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('about') }}">À propos</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('projects') }}">Projets</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('skills') }}">Compétences</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('certifications') }}">Certifications</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('experience') }}">Expérience</a>
        </nav>
        <div class="flex items-center gap-4"><a class="portfolio-contact inline-flex items-center gap-2 bg-secondary-container hover:bg-tertiary-container text-on-secondary-container font-label-md text-label-md font-bold px-4 py-2 rounded-lg transition-all shadow-sm active:scale-95 duration-150" href="{{ route('contact') }}">Me contacter</a></div>
    </div>
</header>
@include('partials.public-settings')
