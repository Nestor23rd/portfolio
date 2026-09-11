<style>
    body > header:not(.portfolio-topbar) { display: none !important; }
    .portfolio-topbar { width: 100% !important; height: 4rem !important; left: 0 !important; right: 0 !important; background-color: rgba(8,14,29,.94) !important; border-color: rgba(148,163,184,.25) !important; }
    .portfolio-topbar > div { width: 100% !important; max-width: none !important; height: 4rem !important; display: grid !important; grid-template-columns: minmax(12rem, auto) minmax(0, 1fr) minmax(8.5rem, auto) !important; align-items: center !important; gap: 1rem !important; }
    .portfolio-topbar nav { display: flex !important; flex: none !important; min-width: 0 !important; width: 100% !important; justify-content: space-evenly !important; align-items: center !important; gap: .5rem !important; }
    .portfolio-topbar nav a { white-space: nowrap; flex: 0 1 auto; }
    .portfolio-topbar .portfolio-brand { white-space: nowrap; flex-shrink: 0; }
    .portfolio-topbar .portfolio-contact { white-space: nowrap; flex-shrink: 0; min-width: 8.5rem; justify-content: center; }
    @media (max-width: 767px) {
        .portfolio-topbar > div { display: flex !important; }
        .portfolio-topbar nav { display: none !important; }
        .portfolio-topbar .portfolio-contact { margin-left: auto; }
    }
</style>
<header class="portfolio-topbar bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30 docked full-width top-0 fixed z-50">
    <div class="w-full px-6 md:px-12 flex items-center justify-between h-16 gap-4">
        <a class="portfolio-brand font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight" href="{{ route('home') }}">Nestor KPADJA</a>
        <nav class="hidden md:flex flex-1 items-center justify-between gap-6 lg:gap-8">
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('home') }}">Accueil</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('about') }}">À propos</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('projects') }}">Projets</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('skills') }}">Compétences</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('certifications') }}">Certifications</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('experience') }}">Expérience</a>
        </nav>
        <a class="portfolio-contact inline-flex items-center justify-center bg-secondary-container hover:bg-tertiary-container text-on-primary-container font-headline-sm text-label-md px-4 py-2 rounded-lg font-semibold transition-all duration-150 shadow-sm active:scale-95" href="{{ route('contact') }}">Me contacter</a>
    </div>
</header>
