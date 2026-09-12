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
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('home') }}">{{ __('site.home') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('about') }}">{{ __('site.about') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('projects') }}">{{ __('site.projects') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('skills') }}">{{ __('site.skills') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('certifications') }}">{{ __('site.certifications') }}</a>
            <a class="text-on-surface-variant font-code-md text-code-md hover:text-on-surface transition-colors" href="{{ route('experience') }}">{{ __('site.experience') }}</a>
        </nav>
        <div class="flex items-center gap-3">
            <div class="flex items-center gap-1 rounded-lg border border-outline-variant/40 px-2 py-1" aria-label="{{ __('site.language') }}">
                <a class="px-1.5 py-0.5 text-xs font-semibold {{ app()->getLocale() === 'fr' ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('language.switch', 'fr') }}">FR</a>
                <span class="text-outline-variant">/</span>
                <a class="px-1.5 py-0.5 text-xs font-semibold {{ app()->getLocale() === 'en' ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('language.switch', 'en') }}">EN</a>
            </div>
            <!-- Theme Toggle -->
            <button id="theme-toggle" type="button" class="w-9 h-9 rounded-lg border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-all flex items-center justify-center cursor-pointer bg-surface-container-low/50" aria-label="{{ __('site.toggle_theme') }}" title="{{ __('site.toggle_theme') }}">
                <span class="material-symbols-outlined text-[18px] hidden dark:inline-block text-secondary">light_mode</span>
                <span class="material-symbols-outlined text-[18px] inline-block dark:hidden text-primary">dark_mode</span>
            </button>
            <a class="portfolio-contact inline-flex items-center gap-2 bg-secondary-container hover:bg-tertiary-container text-on-secondary-container font-label-md text-label-md font-bold px-4 py-2 rounded-lg transition-all shadow-sm active:scale-95 duration-150" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleBtn = document.getElementById('theme-toggle');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                var isDark = document.documentElement.classList.contains('dark');
                if (isDark) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            });
        }
    });
</script>
@include('partials.public-settings')
