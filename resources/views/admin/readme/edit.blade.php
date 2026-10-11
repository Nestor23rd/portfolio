@extends('admin.layout')

@section('title', 'Modifier le README Oracle')
@section('section', 'README Oracle')

@section('content')
    <div class="mx-auto max-w-6xl">
        <div class="mb-5 flex flex-wrap items-end justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold">README Oracle</h1>
                <p class="mt-2 text-sm text-slate-400">Éditeur texte simple : écrivez et organisez le contenu comme dans un bloc-notes.</p>
            </div>
            <a class="text-sm text-slate-300 underline hover:text-white" href="{{ route('readme.show') }}" target="_blank" rel="noopener noreferrer">Consulter la version publique</a>
        </div>

        <div class="mb-3 flex flex-wrap items-center gap-2">
            <label class="sr-only" for="readme-search">Rechercher une commande ou un commentaire</label>
            <input id="readme-search" type="search" placeholder="Rechercher une commande ou un commentaire…" class="min-w-64 flex-1 rounded border border-[#1f2c47] bg-[#131c31] px-3 py-2 text-sm text-white placeholder:text-slate-500">
            <button id="readme-search-previous" type="button" class="rounded border border-[#1f2c47] px-3 py-2 text-sm hover:border-blue-500">Précédent</button>
            <button id="readme-search-next" type="button" class="rounded border border-[#1f2c47] px-3 py-2 text-sm hover:border-blue-500">Suivant</button>
            <span id="readme-search-count" class="min-w-28 text-xs text-slate-400" aria-live="polite"></span>
        </div>

        <form method="POST" action="{{ route('admin.readme.update') }}">
            @csrf
            @method('PUT')
            <label class="sr-only" for="readme-content">Contenu du README</label>
            <textarea id="readme-content" name="content" required spellcheck="false" class="min-h-[70vh] w-full resize-y rounded border border-[#b9b9b9] bg-white p-5 font-mono text-sm leading-6 text-black shadow-inner focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30">{{ old('content', $readme) }}</textarea>
            <div class="mt-4 flex flex-wrap items-center justify-between gap-3">
                <p class="text-xs text-slate-500">Les retours à la ligne et les espaces sont conservés.</p>
                <button class="rounded bg-amber-400 px-5 py-3 font-bold text-[#0b1120] hover:bg-amber-300">Enregistrer le README</button>
            </div>
        </form>
    </div>
    <script>
        const searchInput = document.getElementById('readme-search');
        const editor = document.getElementById('readme-content');
        const resultCount = document.getElementById('readme-search-count');
        let matches = [];

        function updateSearchMatches() {
            const query = searchInput.value;
            matches = [];
            if (query) {
                const content = editor.value.toLocaleLowerCase();
                const normalizedQuery = query.toLocaleLowerCase();
                let position = content.indexOf(normalizedQuery);
                while (position !== -1) {
                    matches.push(position);
                    position = content.indexOf(normalizedQuery, position + normalizedQuery.length);
                }
            }

            resultCount.textContent = matches.length ? `${matches.length} résultat(s)` : (query ? 'Aucun résultat' : '');
        }

        function moveToMatch(direction, jumpToFirstMatch = false) {
            updateSearchMatches();
            if (!matches.length) {
                return;
            }

            const currentIndex = matches.findIndex((position) => position >= editor.selectionEnd);
            const matchIndex = jumpToFirstMatch
                ? 0
                : direction > 0
                ? (currentIndex === -1 ? 0 : currentIndex)
                : (currentIndex <= 0 ? matches.length - 1 : currentIndex - 1);
            const position = matches[matchIndex];
            editor.setSelectionRange(position, position + searchInput.value.length);
            const lineNumber = editor.value.slice(0, position).split('\n').length - 1;
            const lineHeight = Number.parseFloat(getComputedStyle(editor).lineHeight) || 24;
            editor.scrollTop = Math.max(0, lineNumber * lineHeight - editor.clientHeight / 2);
            resultCount.textContent = `${matchIndex + 1} / ${matches.length}`;
        }

        searchInput.addEventListener('input', () => moveToMatch(1, true));
        searchInput.addEventListener('keydown', (event) => {
            if (event.key === 'Enter') {
                event.preventDefault();
                moveToMatch(event.shiftKey ? -1 : 1);
            }
        });
        editor.addEventListener('input', updateSearchMatches);
        document.getElementById('readme-search-previous').addEventListener('click', () => moveToMatch(-1));
        document.getElementById('readme-search-next').addEventListener('click', () => moveToMatch(1));
    </script>
@endsection
