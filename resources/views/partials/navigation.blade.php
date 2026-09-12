<style>
    body > header:not(.portfolio-topbar) { display: none !important; }
    .portfolio-topbar { width: 100% !important; height: 4rem !important; left: 0 !important; right: 0 !important; transition: background-color 0.2s, border-color 0.2s; }
    html.dark .portfolio-topbar { background-color: rgba(8,14,29,.94) !important; border-color: rgba(148,163,184,.25) !important; }
    html:not(.dark) .portfolio-topbar { background-color: rgba(255,255,255,.94) !important; border-color: rgba(203,213,225,.7) !important; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.05); }
    .portfolio-topbar > div { width: 100% !important; max-width: none !important; height: 4rem !important; display: flex !important; align-items: center !important; justify-content: space-between !important; }
    .portfolio-topbar nav { display: flex !important; align-items: center !important; gap: 2rem !important; }
    .portfolio-topbar nav a { white-space: nowrap; flex: 0 1 auto; }
    .portfolio-topbar .portfolio-brand { white-space: nowrap; flex-shrink: 0; }
    .portfolio-topbar .portfolio-contact { white-space: nowrap; flex-shrink: 0; min-width: 8.5rem; justify-content: center; }

    /* Mobile menu overlay */
    #mobile-menu {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 40;
        padding-top: 4rem;
    }
    #mobile-menu.open { display: flex; }

    /* Hamburger icon lines */
    #hamburger-icon span {
        display: block;
        width: 20px;
        height: 2px;
        border-radius: 2px;
        transition: transform 0.25s, opacity 0.25s;
    }
    #hamburger-icon.open span:nth-child(1) { transform: translateY(6px) rotate(45deg); }
    #hamburger-icon.open span:nth-child(2) { opacity: 0; }
    #hamburger-icon.open span:nth-child(3) { transform: translateY(-6px) rotate(-45deg); }

    @media (max-width: 767px) {
        .portfolio-topbar nav { display: none !important; }
        .portfolio-topbar .portfolio-contact { display: none !important; }
        #hamburger-btn { display: flex !important; }
    }
    @media (min-width: 768px) {
        #hamburger-btn { display: none !important; }
        #mobile-menu { display: none !important; }
    }
</style>
@php($publicSettings = \App\Models\SiteSetting::pluck('value', 'key'))
<header class="portfolio-topbar bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30 docked full-width top-0 fixed z-50">
    <div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
        <a class="portfolio-brand font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2 group" href="{{ route('home') }}"><span class="text-primary group-hover:text-primary-container transition-colors">>_</span><span>Nestor KPADJA</span></a>

        <nav class="hidden md:flex items-center gap-8 lg:gap-10">
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('home') }}">{{ __('site.home') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('about') }}">{{ __('site.about') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('projects') }}">{{ __('site.projects') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('skills') }}">{{ __('site.skills') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('certifications') }}">{{ __('site.certifications') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('experience') }}">{{ __('site.experience') }}</a>
        </nav>

        <div class="flex items-center gap-3">
            {{-- Lang switcher --}}
            <div class="flex items-center gap-1 rounded-lg border border-outline-variant/40 px-2 py-1" aria-label="{{ __('site.language') }}">
                <a class="px-1.5 py-0.5 text-xs font-semibold {{ app()->getLocale() === 'fr' ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('language.switch', 'fr') }}">FR</a>
                <span class="text-outline-variant">/</span>
                <a class="px-1.5 py-0.5 text-xs font-semibold {{ app()->getLocale() === 'en' ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('language.switch', 'en') }}">EN</a>
            </div>
            {{-- Theme Toggle --}}
            <button id="theme-toggle" type="button" class="w-9 h-9 rounded-lg border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-all flex items-center justify-center cursor-pointer bg-surface-container-low/50" aria-label="{{ __('site.toggle_theme') }}" title="{{ __('site.toggle_theme') }}">
                <span class="material-symbols-outlined text-[18px] hidden dark:inline-block text-secondary">light_mode</span>
                <span class="material-symbols-outlined text-[18px] inline-block dark:hidden text-primary">dark_mode</span>
            </button>
            {{-- Contact button (desktop only) --}}
            <a class="portfolio-contact hidden md:inline-flex items-center gap-2 bg-secondary-container hover:bg-tertiary-container text-on-secondary-container font-label-md text-label-md font-bold px-4 py-2 rounded-lg transition-all shadow-sm active:scale-95 duration-150" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
            {{-- Hamburger (mobile only) --}}
            <button id="hamburger-btn" type="button" class="w-9 h-9 rounded-lg border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-all items-center justify-center cursor-pointer bg-surface-container-low/50" aria-label="Menu" aria-expanded="false" aria-controls="mobile-menu">
                <span id="hamburger-icon" class="flex flex-col gap-1.5 items-center justify-center w-full h-full">
                    <span class="bg-current"></span>
                    <span class="bg-current"></span>
                    <span class="bg-current"></span>
                </span>
            </button>
        </div>
    </div>
</header>

{{-- Mobile Menu Drawer --}}
<div id="mobile-menu" class="flex-col" role="dialog" aria-modal="true" aria-label="Navigation mobile">
    {{-- Backdrop --}}
    <div id="mobile-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    {{-- Drawer panel --}}
    <div class="relative ml-auto w-72 h-full flex flex-col bg-surface-container-low border-l border-outline-variant/40 shadow-2xl overflow-y-auto">
        {{-- Drawer Header --}}
        <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant/30 h-16 shrink-0">
            <span class="font-code-md text-code-md font-bold text-on-surface flex items-center gap-1.5">
                <span class="text-primary">>_</span>
                <span>Navigation</span>
            </span>
            <button id="mobile-close" type="button" class="w-8 h-8 rounded-lg border border-outline-variant/40 hover:border-primary flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors" aria-label="Fermer le menu">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </div>
        {{-- Nav Links --}}
        <nav class="flex flex-col px-4 py-5 gap-1 flex-grow">
            @foreach([
                ['route' => 'home',          'label' => __('site.home'),           'icon' => 'home'],
                ['route' => 'about',         'label' => __('site.about'),          'icon' => 'person'],
                ['route' => 'projects',      'label' => __('site.projects'),       'icon' => 'deployed_code'],
                ['route' => 'skills',        'label' => __('site.skills'),         'icon' => 'code'],
                ['route' => 'certifications','label' => __('site.certifications'), 'icon' => 'verified'],
                ['route' => 'experience',    'label' => __('site.experience'),     'icon' => 'work'],
                ['route' => 'contact',       'label' => __('site.contact'),        'icon' => 'mail'],
            ] as $link)
            <a href="{{ route($link['route']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl font-code-md text-code-md transition-all
                      {{ request()->routeIs($link['route'])
                           ? 'bg-primary-container/30 text-primary border border-primary/30 font-semibold'
                           : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container border border-transparent' }}">
                <span class="material-symbols-outlined text-[18px] shrink-0">{{ $link['icon'] }}</span>
                <span>{{ $link['label'] }}</span>
                @if(request()->routeIs($link['route']))
                <span class="ml-auto w-1.5 h-1.5 rounded-full bg-primary"></span>
                @endif
            </a>
            @endforeach
        </nav>
        {{-- Drawer Footer --}}
        <div class="px-4 py-4 border-t border-outline-variant/30 space-y-3 shrink-0">
            {{-- Lang switcher --}}
            <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-surface-container border border-outline-variant/30">
                <span class="material-symbols-outlined text-[16px] text-on-surface-variant">language</span>
                <span class="text-xs text-on-surface-variant font-code-sm">{{ __('site.language') }}</span>
                <div class="ml-auto flex items-center gap-1">
                    <a class="px-2 py-0.5 text-xs font-semibold rounded {{ app()->getLocale() === 'fr' ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:text-on-surface' }}" href="{{ route('language.switch', 'fr') }}">FR</a>
                    <span class="text-outline-variant text-xs">/</span>
                    <a class="px-2 py-0.5 text-xs font-semibold rounded {{ app()->getLocale() === 'en' ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:text-on-surface' }}" href="{{ route('language.switch', 'en') }}">EN</a>
                </div>
            </div>
            {{-- Theme toggle --}}
            <button id="theme-toggle-mobile" type="button" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl bg-surface-container border border-outline-variant/30 hover:border-primary text-on-surface-variant hover:text-primary transition-all">
                <span class="material-symbols-outlined text-[18px] hidden dark:inline-block text-secondary">light_mode</span>
                <span class="material-symbols-outlined text-[18px] inline-block dark:hidden text-primary">dark_mode</span>
                <span class="text-xs font-code-sm">{{ __('site.toggle_theme') }}</span>
            </button>
        </div>
    </div>
</div>

<script>
    (function() {
        var hamburgerBtn  = document.getElementById('hamburger-btn');
        var hamburgerIcon = document.getElementById('hamburger-icon');
        var mobileMenu    = document.getElementById('mobile-menu');
        var mobileClose   = document.getElementById('mobile-close');
        var backdrop      = document.getElementById('mobile-backdrop');
        var themeToggle   = document.getElementById('theme-toggle');
        var themeToggleMob= document.getElementById('theme-toggle-mobile');

        function openMenu() {
            mobileMenu.classList.add('open');
            hamburgerIcon.classList.add('open');
            hamburgerBtn.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        }
        function closeMenu() {
            mobileMenu.classList.remove('open');
            hamburgerIcon.classList.remove('open');
            hamburgerBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
        function toggleTheme() {
            var isDark = document.documentElement.classList.contains('dark');
            if (isDark) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMenu);
        if (mobileClose)  mobileClose.addEventListener('click', closeMenu);
        if (backdrop)     backdrop.addEventListener('click', closeMenu);
        // Close on Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeMenu();
        });
        // Close on link click inside drawer
        if (mobileMenu) {
            mobileMenu.querySelectorAll('a[href]').forEach(function(link) {
                link.addEventListener('click', closeMenu);
            });
        }
        if (themeToggle)    themeToggle.addEventListener('click', toggleTheme);
        if (themeToggleMob) themeToggleMob.addEventListener('click', function() { toggleTheme(); closeMenu(); });
    })();
</script>
@include('partials.public-settings')
