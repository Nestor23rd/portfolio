@extends('admin.layout')
@section('title', 'Paramètres du site')
@section('section', 'Paramètres du site')
@section('content')
<div class="max-w-5xl">
    <h1 class="font-display text-3xl font-bold">Paramètres du site</h1>
    <p class="mt-2 text-slate-400">Les informations enregistrées ici sont utilisées sur les pages publiques et les footers.</p>

    <form class="mt-8 space-y-6 rounded-xl border border-[#1f2c47] bg-[#131c31] p-6" method="POST" enctype="multipart/form-data" action="{{ route('admin.settings.update') }}">
        @csrf @method('PUT')
        <div><h2 class="text-lg font-semibold">Informations publiques</h2><p class="mt-1 text-sm text-slate-500">Email et identité affichés sur le portfolio.</p></div>
        <div class="grid gap-5 md:grid-cols-2"><label class="block text-sm">Email public<input name="email" type="email" required value="{{ old('email', $settings['email'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label><label class="block text-sm">Localisation<input name="location" value="{{ old('location', $settings['location'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label><label class="block text-sm">Numéro d’appel<input name="phone_number" type="tel" placeholder="+228 96 90 84 92" value="{{ old('phone_number', $settings['phone_number'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label><label class="block text-sm">Numéro WhatsApp<input name="whatsapp_number" type="tel" placeholder="+228 91 31 17 05" value="{{ old('whatsapp_number', $settings['whatsapp_number'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label></div>
        <div><h2 class="text-lg font-semibold">Liens principaux</h2><p class="mt-1 text-sm text-slate-500">Ces liens remplacent les valeurs par défaut du site.</p></div>
        <div class="grid gap-5 md:grid-cols-2"><label class="block text-sm">GitHub<input name="github_url" type="url" value="{{ old('github_url', $settings['github_url'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label><label class="block text-sm">LinkedIn<input name="linkedin_url" type="url" value="{{ old('linkedin_url', $settings['linkedin_url'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label><label class="block text-sm">Telegram<input name="telegram_url" type="url" value="{{ old('telegram_url', $settings['telegram_url'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label><label class="block text-sm">Documentation<input name="documentation_url" type="url" value="{{ old('documentation_url', $settings['documentation_url'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label><label class="block text-sm">Clé PGP<input name="pgp_url" type="url" value="{{ old('pgp_url', $settings['pgp_url'] ?? '') }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5"></label></div>
        <label class="block text-sm">Texte du footer<textarea name="footer_text" rows="3" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5">{{ old('footer_text', $settings['footer_text'] ?? '') }}</textarea></label>
        <div class="rounded-lg border border-blue-400/30 bg-blue-400/5 p-4">
            <h2 class="text-lg font-semibold">CV téléchargeable</h2>
            <p class="mt-1 text-sm text-slate-400">Le dernier PDF envoyé sera automatiquement proposé sur le site.</p>
            <input name="cv" type="file" accept="application/pdf" class="mt-4 block w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5 text-sm">
            @if(!empty($settings['cv_path']))
                <div class="mt-3 flex flex-wrap items-center gap-4 text-sm"><a class="text-blue-300 hover:underline" href="{{ asset('storage/'.$settings['cv_path']) }}" target="_blank" rel="noopener noreferrer">Voir le CV actuel</a><label class="flex items-center gap-2 text-red-300"><input type="checkbox" name="remove_cv" value="1"> Supprimer le CV actuel</label></div>
            @endif
        </div>
        <button class="rounded-lg bg-amber-400 px-5 py-3 font-bold text-[#0b1120]">Enregistrer les paramètres</button>
    </form>

    <section class="mt-8 rounded-xl border border-[#1f2c47] bg-[#131c31] p-6">
        <div><h2 class="text-lg font-semibold">Profils sociaux supplémentaires</h2><p class="mt-1 text-sm text-slate-500">Ajoute GitLab, WhatsApp, X/Twitter, YouTube ou tout autre profil. Les profils visibles apparaissent dans les footers.</p></div>
        <form class="mt-6 grid gap-4 rounded-lg border border-dashed border-[#2a3a59] bg-[#0b1120] p-4 md:grid-cols-[1fr_2fr_6rem_auto] md:items-end" method="POST" action="{{ route('admin.social-links.store') }}">
            @csrf
            <label class="block text-sm">Nom<input name="label" required placeholder="GitLab, WhatsApp..." class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#131c31] px-3 py-2.5"></label>
            <label class="block text-sm">URL<input name="url" type="url" required placeholder="https://..." class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#131c31] px-3 py-2.5"></label>
            <label class="block text-sm">Ordre<input name="sort_order" type="number" min="0" value="0" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#131c31] px-3 py-2.5"></label>
            <button class="rounded-lg bg-amber-400 px-4 py-2.5 font-bold text-[#0b1120]">Ajouter</button>
        </form>
        <div class="mt-6 space-y-4">
            @forelse($socialLinks as $socialLink)
                <div class="rounded-lg border border-[#1f2c47] bg-[#0b1120] p-4">
                    <form class="grid gap-4 lg:grid-cols-[1fr_2fr_6rem_auto_auto] lg:items-end" method="POST" action="{{ route('admin.social-links.update', $socialLink) }}">
                        @csrf @method('PUT')
                        <label class="block text-sm">Nom<input name="label" required value="{{ $socialLink->label }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#131c31] px-3 py-2.5"></label>
                        <label class="block text-sm">URL<input name="url" type="url" required value="{{ $socialLink->url }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#131c31] px-3 py-2.5"></label>
                        <label class="block text-sm">Ordre<input name="sort_order" type="number" min="0" value="{{ $socialLink->sort_order }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#131c31] px-3 py-2.5"></label>
                        <label class="flex items-center gap-2 pb-3 text-sm"><input type="checkbox" name="is_visible" value="1" @checked($socialLink->is_visible)> Visible</label>
                        <button class="rounded-lg border border-blue-400/40 px-4 py-2.5 text-sm font-semibold text-blue-300 hover:bg-blue-400/10">Enregistrer</button>
                    </form>
                    <form class="mt-3 text-right" method="POST" action="{{ route('admin.social-links.destroy', $socialLink) }}">@csrf @method('DELETE')<button class="text-xs text-red-400 hover:underline" onclick="return confirm('Supprimer ce profil ?')">Supprimer {{ $socialLink->label }}</button></form>
                </div>
            @empty
                <p class="rounded-lg border border-dashed border-[#2a3a59] p-5 text-sm text-slate-500">Aucun profil supplémentaire. Ajoute GitLab, WhatsApp ou un autre réseau ci-dessus.</p>
            @endforelse
        </div>
    </section>
</div>
@endsection
