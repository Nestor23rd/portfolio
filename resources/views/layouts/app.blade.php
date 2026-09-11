<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio de Nestor KPADJA, ingénieur backend et architectures distribuées.">
    <title>@yield('title', config('app.name'))</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-screen antialiased">
    <header class="fixed inset-x-0 top-0 z-50 border-b border-[#1f2c47]/80 bg-[#080e1d]/85 backdrop-blur-md">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-5 sm:px-8 lg:px-12">
            <a href="{{ route('home') }}" class="flex items-center gap-2 font-mono text-sm font-bold tracking-tight">
                <span class="text-[#3b82f6]">&gt;_</span><span>Nestor KPADJA</span>
                <span class="ml-1 hidden items-center gap-1.5 rounded-full border border-[#1f2c47] bg-[#131c31] px-2 py-0.5 text-[10px] text-emerald-400 sm:flex"><span class="h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-400"></span> Online</span>
            </a>
            <nav class="hidden items-center gap-7 font-mono text-xs text-slate-400 md:flex">
                <a class="transition hover:text-white" href="{{ route('home') }}">Accueil</a><a class="transition hover:text-white" href="{{ route('home') }}#apropos">À propos</a><a class="transition hover:text-white" href="{{ route('home') }}#projets">Projets</a><a class="transition hover:text-white" href="{{ route('home') }}#competences">Compétences</a><a class="transition hover:text-white" href="{{ route('home') }}#experience">Expérience</a><a class="transition hover:text-white" href="{{ route('home') }}#contact">Contact</a>
            </nav>
            <a href="{{ route('home') }}#contact" class="rounded-lg bg-[#f59e0b] px-3.5 py-2 text-xs font-bold text-[#0b1120] transition hover:bg-amber-300">Me contacter <span aria-hidden="true">↗</span></a>
        </div>
    </header>
    <main class="pt-16">@yield('content')</main>
    <footer class="border-t border-[#1f2c47] bg-[#080e1d]"><div class="mx-auto flex max-w-7xl flex-col gap-3 px-5 py-8 text-xs text-slate-500 sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-12"><span class="font-mono">© {{ now()->year }} Nestor KPADJA</span><span class="font-mono">Construit avec Laravel {{ app()->version() }}</span></div></footer>
</body>
</html>
