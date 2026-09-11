<!doctype html>
<html lang="fr" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Administration — Nestor KPADJA')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-[#0b1120] text-slate-100 antialiased">
<div class="flex min-h-screen">
    <aside class="hidden w-64 shrink-0 border-r border-[#1f2c47] bg-[#080e1d] p-5 md:block">
        <a href="{{ route('home') }}" class="flex items-center gap-3 font-mono font-bold">
            <img src="{{ asset('profil.jpeg') }}" class="h-9 w-9 rounded-lg object-cover" alt="Nestor KPADJA">
            <span>Nestor KPADJA</span>
        </a>
        <p class="mt-2 font-mono text-[10px] uppercase tracking-widest text-amber-400">Admin Console</p>
        <nav class="mt-8 space-y-1 text-sm">
            <a class="block rounded-lg px-3 py-2 transition hover:bg-[#131c31]" href="{{ route('admin.dashboard') }}">Tableau de bord</a>
            <a class="block rounded-lg px-3 py-2 transition hover:bg-[#131c31]" href="{{ route('admin.projects.index') }}">Projets</a>
            <a class="block rounded-lg px-3 py-2 transition hover:bg-[#131c31]" href="{{ route('admin.skills.index') }}">Compétences</a>
            <a class="block rounded-lg px-3 py-2 transition hover:bg-[#131c31]" href="{{ route('admin.certifications.index') }}">Certifications</a>
            <a class="block rounded-lg px-3 py-2 transition hover:bg-[#131c31]" href="{{ route('admin.experiences.index') }}">Expériences</a>
            <a class="block rounded-lg px-3 py-2 transition hover:bg-[#131c31]" href="{{ route('admin.messages.index') }}">Messages</a>
        </nav>
    </aside>

    <div class="min-w-0 flex-1">
        <header class="flex min-h-16 items-center justify-between border-b border-[#1f2c47] bg-[#080e1d] px-5 sm:px-8">
            <div><span class="font-mono text-xs text-slate-500">Admin /</span> <span class="font-mono text-xs text-blue-400">@yield('section', 'Dashboard')</span></div>
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="text-xs text-slate-400 hover:text-white">Voir le site</a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="rounded-lg border border-[#1f2c47] px-3 py-2 text-xs text-slate-300 hover:border-amber-400 hover:text-amber-300">Déconnexion</button>
                </form>
            </div>
        </header>

        <main class="p-5 sm:p-8">
            @if (session('success'))
                <div class="mb-6 rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-300">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="mb-6 rounded-lg border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-300">
                    <ul class="list-inside list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
