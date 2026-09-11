<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifications — Nestor KPADJA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    @include('partials.full-width')
</head>
<body style="background-color:#080e1d;color:#e2e8f0" class="bg-[#080e1d] text-slate-100 antialiased font-body-md min-h-screen relative flex flex-col selection:bg-blue-500/30">
<main class="flex-grow pt-28 pb-20 px-6 md:px-12 max-w-7xl mx-auto w-full"><div class="mb-10 lg:mb-12"><p class="font-code-sm text-code-sm uppercase tracking-widest text-secondary">// verified_credentials</p><h1 class="mt-3 font-headline-xl text-headline-xl font-bold tracking-tight">Certifications & distinctions</h1><p class="mt-4 max-w-2xl text-on-surface-variant">Les validations et distinctions de mon parcours, gérées depuis le tableau de bord.</p></div>
<div class="grid grid-cols-1 gap-6 lg:grid-cols-2">@forelse($certifications as $certification)<article class="card-specular-top flex flex-col justify-between rounded-xl border border-[#1f2c47] bg-[#131c31] p-6 md:p-8"><div><div class="mb-5 flex items-start justify-between gap-4"><div><span class="issuer block font-mono text-sm uppercase tracking-wider text-amber-400">{{ $certification->issuer ?: 'Organisme non renseigné' }}</span><h2 class="mt-2 text-2xl font-bold">{{ $certification->title }}</h2></div><span class="status shrink-0 rounded border border-emerald-500/30 bg-emerald-500/10 px-2.5 py-1 font-mono text-xs text-emerald-400">{{ $certification->status }}</span></div><p class="description leading-7 text-slate-400">{{ $certification->description ?: 'Aucune description renseignée.' }}</p><div class="mt-6 grid gap-3 rounded-lg border border-[#1f2c47] bg-[#0b1120] p-4 font-mono text-xs text-slate-400 sm:grid-cols-2"><span>IDENTIFIANT : {{ $certification->credential_id ?: 'Non renseigné' }}</span><span>DATE : {{ $certification->issued_at?->format('d/m/Y') ?: 'Non renseignée' }}</span></div></div><div class="mt-6 border-t border-[#1f2c47] pt-5">@if($certification->credential_url)<a href="{{ $certification->credential_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex text-sm font-semibold text-blue-400 hover:underline">Vérifier la certification ↗</a>@else<span class="font-mono text-xs text-slate-500">Lien de vérification non renseigné</span>@endif</div></article>@empty<div class="rounded-xl border border-dashed border-[#1f2c47] p-10 text-slate-400">Aucune certification publiée pour le moment.</div>@endforelse</div></main>
<footer class="border-t border-[#1f2c47] px-6 py-8 text-center font-mono text-sm text-slate-500">© {{ date('Y') }} Nestor KPADJA</footer>
@include('partials.navigation')
</body></html>
