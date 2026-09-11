@extends('admin.layout')

@section('title', $skill->exists ? 'Modifier la compétence' : 'Nouvelle compétence')
@section('section', 'Compétences')

@section('content')
<div class="max-w-2xl">
    <h1 class="font-display text-3xl font-bold">{{ $skill->exists ? 'Modifier la compétence' : 'Nouvelle compétence' }}</h1>
    <form class="mt-8 space-y-5 rounded-xl border border-[#1f2c47] bg-[#131c31] p-6" method="POST" action="{{ $skill->exists ? route('admin.skills.update', $skill) : route('admin.skills.store') }}">
        @csrf
        @if($skill->exists) @method('PUT') @endif
        <label class="block text-sm">Nom
            <input name="name" required value="{{ old('name', $skill->name) }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5">
        </label>
        <label class="block text-sm">Description
            <textarea name="description" rows="4" maxlength="1000" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5">{{ old('description', $skill->description) }}</textarea>
        </label>
        <div class="grid gap-5 sm:grid-cols-2">
            <label class="block text-sm">Catégorie
                <input name="category" required value="{{ old('category', $skill->category) }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5">
            </label>
            <label class="block text-sm">Maîtrise (%)
                <input name="proficiency" type="number" min="0" max="100" value="{{ old('proficiency', $skill->proficiency) }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5">
            </label>
            <label class="block text-sm">Ordre
                <input name="sort_order" type="number" min="0" value="{{ old('sort_order', $skill->sort_order ?? 0) }}" class="mt-2 w-full rounded-lg border border-[#1f2c47] bg-[#0b1120] px-3 py-2.5">
            </label>
        </div>
        <label class="flex items-center gap-2 text-sm"><input type="checkbox" name="is_visible" value="1" @checked(old('is_visible', $skill->exists ? $skill->is_visible : true))> Visible sur le site</label>
        <div class="flex gap-3"><button class="rounded-lg bg-amber-400 px-5 py-3 font-bold text-[#0b1120]">Enregistrer</button><a href="{{ route('admin.skills.index') }}" class="rounded-lg border border-[#1f2c47] px-5 py-3">Annuler</a></div>
    </form>
</div>
@endsection
