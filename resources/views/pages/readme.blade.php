<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>README Oracle — Nestor KPADJA</title>
</head>
<body style="margin: 0; background: #f4f4f4; color: #111; font-family: Arial, sans-serif;">
    <main style="max-width: 960px; margin: 32px auto; padding: 0 20px;">
        <p><a href="{{ route('home') }}" style="color: #111;">← Retour à l’accueil</a></p>
        <section aria-label="Recherche dans le README" style="position: sticky; top: 0; display: flex; flex-wrap: wrap; align-items: center; gap: 8px; border: 1px solid #ccc; background: #f4f4f4; padding: 12px 0;">
            <label for="readme-search">Rechercher une commande ou un commentaire</label>
            <input id="readme-search" type="search" placeholder="Ex. STARTUP, Listener, sauvegarde" style="min-width: 240px; padding: 8px;">
            <button id="readme-search-clear" type="button">Effacer</button>
            <span id="readme-search-count" aria-live="polite"></span>
        </section>
        <article style="overflow-wrap: anywhere; border: 1px solid #ccc; background: #fff; padding: 24px;">
            <pre id="readme-content" style="margin: 0; white-space: pre-wrap; font: 14px/1.65 Consolas, 'Courier New', monospace;">{{ $readme }}</pre>
        </article>
    </main>
    <script>
        const searchInput = document.getElementById('readme-search');
        const readmeContent = document.getElementById('readme-content');
        const resultCount = document.getElementById('readme-search-count');
        const readmeLines = readmeContent.textContent.split('\n');

        function highlightLine(element, line, query) {
            const normalizedLine = line.toLocaleLowerCase();
            let cursor = 0;
            let matchIndex = normalizedLine.indexOf(query);

            while (matchIndex !== -1) {
                element.append(document.createTextNode(line.slice(cursor, matchIndex)));
                const match = document.createElement('mark');
                match.textContent = line.slice(matchIndex, matchIndex + query.length);
                element.append(match);
                cursor = matchIndex + query.length;
                matchIndex = normalizedLine.indexOf(query, cursor);
            }

            element.append(document.createTextNode(line.slice(cursor)));
        }

        function searchReadme() {
            const query = searchInput.value.trim().toLocaleLowerCase();
            const matchingLines = query
                ? readmeLines.filter((line) => line.toLocaleLowerCase().includes(query))
                : readmeLines;
            readmeContent.replaceChildren();

            matchingLines.forEach((line) => {
                const lineElement = document.createElement('span');
                if (query && line.toLocaleLowerCase().includes(query)) {
                    lineElement.dataset.searchMatch = 'true';
                }
                if (query) {
                    highlightLine(lineElement, line, query);
                } else {
                    lineElement.textContent = line;
                }
                readmeContent.append(lineElement, document.createTextNode('\n'));
            });

            resultCount.textContent = query ? `${matchingLines.length} ligne(s) trouvée(s)` : '';
            if (query) {
                readmeContent.querySelector('[data-search-match]')?.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }

        searchInput.addEventListener('input', searchReadme);
        document.getElementById('readme-search-clear').addEventListener('click', () => {
            searchInput.value = '';
            searchReadme();
            searchInput.focus();
        });
        searchReadme();
    </script>
</body>
</html>
