<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifications — Nestor KPADJA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    @include('partials.full-width')
</head>
<body style="background:#080e1d;color:#e2e8f0" class="min-h-screen antialiased font-body-md">
<header class="bg-surface-container-lowest/80 dark:bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/30 docked full-width top-0 fixed z-50">
<div class="w-full px-6 md:px-12 flex items-center justify-between h-16">
<a class="font-code-md text-code-lg font-bold text-on-surface dark:text-on-surface tracking-tight flex items-center gap-2 group" href="{{ route('home') }}"><span class="text-primary group-hover:text-primary-container transition-colors">&gt;_</span><span>Nestor KPADJA</span><span class="inline-flex items-center gap-1.5 ml-2 px-2 py-0.5 rounded-full bg-surface-container-high border border-outline-variant/40"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span><span class="font-code-sm text-code-sm text-primary font-medium hidden sm:inline">Online</span></span></a>
<nav class="hidden md:flex items-center gap-8 lg:gap-10"><a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md transition-colors" href="{{ route('home') }}">Accueil</a><a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md transition-colors" href="{{ route('about') }}">À propos</a><a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md transition-colors" href="{{ route('projects') }}">Projets</a><a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md transition-colors" href="{{ route('skills') }}">Compétences</a><a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md transition-colors" href="{{ route('certifications') }}">Certifications</a><a class="text-on-surface-variant dark:text-on-surface-variant font-code-md text-code-md transition-colors" href="{{ route('experience') }}">Expérience</a></nav>
<div class="flex items-center gap-3"><a class="inline-flex items-center gap-2 bg-secondary-container hover:bg-tertiary-container text-on-primary-container font-headline-sm text-label-md px-4 py-2 rounded-lg font-semibold transition-all duration-150 shadow-sm active:scale-95" href="{{ route('contact') }}"><span>Me contacter</span></a></div>
</div>
</header>
<main class="min-h-screen w-full px-6 pb-20 pt-28 md:px-12">
    <section class="mx-auto w-full max-w-7xl">
        <div class="mb-10 flex items-center gap-3 border-b border-slate-700/40 pb-5">
            <span class="font-mono text-sm font-bold text-amber-400">&gt;_</span>
            <div>
                <p class="font-mono text-xs uppercase tracking-widest text-amber-400">verified_credentials</p>
                <h1 class="mt-2 font-display text-4xl font-bold tracking-tight text-slate-100 md:text-5xl">Certifications &amp; distinctions</h1>
            </div>
        </div>
        <p class="mb-10 max-w-3xl text-base leading-7 text-slate-400">Les validations officielles et distinctions de mon parcours, publiées et administrées depuis le tableau de bord.</p>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            @forelse($certifications as $certification)
                <article class="flex flex-col justify-between rounded-xl border border-slate-700/60 bg-[#131c31] p-6 transition-all duration-200 hover:border-blue-400/60 md:p-8">
                    <div>
                        <div class="mb-5 flex items-start justify-between gap-4">
                            <div class="min-w-0">
                                <span class="block truncate font-mono text-xs font-semibold uppercase tracking-wider text-amber-400">{{ $certification->issuer ?: 'Organisme non renseigné' }}</span>
                                <h2 class="mt-2 font-display text-2xl font-bold leading-tight text-slate-100">{{ $certification->title }}</h2>
                            </div>
                            <span class="shrink-0 rounded border border-emerald-500/30 bg-emerald-500/10 px-2.5 py-1 font-mono text-xs font-medium text-emerald-400">{{ $certification->status }}</span>
                        </div>
                        <p class="leading-7 text-slate-400">{{ $certification->description ?: 'Aucune description renseignée.' }}</p>
                        <div class="mt-6 grid gap-3 rounded-lg border border-slate-700/50 bg-[#0b1120] p-4 font-mono text-xs text-slate-400 sm:grid-cols-2">
                            <div><span class="text-slate-500">IDENTIFIANT :</span> {{ $certification->credential_id ?: 'Non renseigné' }}</div>
                            <div><span class="text-slate-500">DATE :</span> {{ $certification->issued_at?->format('d/m/Y') ?: 'Non renseignée' }}</div>
                        </div>
                    </div>
                    <div class="mt-6 border-t border-slate-700/50 pt-5">
                        @if($certification->credential_url)
                            <a href="{{ $certification->credential_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 font-mono text-sm font-semibold text-blue-400 transition hover:text-blue-300 hover:underline">Vérifier la certification <span aria-hidden="true">↗</span></a>
                        @else
                            <span class="font-mono text-xs text-slate-500">Lien de vérification non renseigné dans l’administration</span>
                        @endif
                    </div>
                </article>
            @empty
                <div class="rounded-xl border border-dashed border-slate-700 p-10 text-slate-400">Aucune certification publiée pour le moment.</div>
            @endforelse
        </div>
    </section>
</main>
<footer class="border-t border-slate-700/40 bg-[#080e1d] px-6 py-8 text-center font-mono text-xs text-slate-500">© {{ date('Y') }} Nestor KPADJA</footer>
</body>
</html>
