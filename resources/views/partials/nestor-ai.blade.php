@php($isFrench = app()->getLocale() === 'fr')
<div id="nestor-ai-widget" class="fixed bottom-5 right-5 z-[70] flex flex-col items-end gap-3">
    <section id="nestor-ai-panel" class="hidden h-[min(690px,calc(100dvh-7rem))] w-[min(430px,calc(100vw-2rem))] flex-col overflow-hidden rounded-3xl border border-outline-variant/50 bg-surface shadow-2xl shadow-black/30" role="dialog" aria-labelledby="nestor-ai-title">
        <header class="flex items-center justify-between gap-3 border-b border-outline-variant/30 bg-surface-container-low px-5 py-4">
            <div class="flex min-w-0 items-center gap-3">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-primary/15 text-primary"><span class="material-symbols-outlined">auto_awesome</span></div>
                <div class="min-w-0">
                    <h2 id="nestor-ai-title" class="font-display text-base font-bold text-on-surface">Nestor AI</h2>
                    <p class="font-mono text-[10px] text-on-surface-variant">{{ $isFrench ? 'Assistant du portfolio' : 'Portfolio assistant' }}</p>
                </div>
            </div>
            <div class="flex shrink-0 items-center gap-1">
                <button id="nestor-ai-new" type="button" class="rounded-lg px-2 py-2 font-mono text-[10px] text-on-surface-variant transition hover:bg-surface-container-high hover:text-primary" title="{{ $isFrench ? 'Nouvelle conversation' : 'New conversation' }}"><span class="material-symbols-outlined align-middle text-[17px]">add_comment</span></button>
                <button id="nestor-ai-close" type="button" class="rounded-lg p-2 text-on-surface-variant transition hover:bg-surface-container-high hover:text-primary" aria-label="{{ $isFrench ? 'Fermer' : 'Close' }}"><span class="material-symbols-outlined text-[18px]">close</span></button>
            </div>
        </header>

        <div class="border-b border-outline-variant/20 px-4 py-3">
            <label for="nestor-ai-mode" class="sr-only">{{ $isFrench ? 'Mode de discussion' : 'Conversation mode' }}</label>
            <select id="nestor-ai-mode" class="w-full rounded-xl border border-outline-variant/40 bg-surface-container-low px-3 py-2.5 text-xs text-on-surface focus:border-primary focus:outline-none">
                <option value="chat">{{ $isFrench ? 'Découvrir le portfolio' : 'Explore the portfolio' }}</option>
                <option value="recruiter">{{ $isFrench ? 'Mode recruteur' : 'Recruiter mode' }}</option>
                <option value="job">{{ $isFrench ? 'Comparer une offre d’emploi' : 'Compare a job description' }}</option>
                <option value="developer">{{ $isFrench ? 'Mode développeur' : 'Developer mode' }}</option>
                <option value="project" class="hidden">{{ $isFrench ? 'Expliquer un projet' : 'Explain a project' }}</option>
            </select>
            <textarea id="nestor-ai-job-description" class="mt-2 hidden max-h-28 min-h-20 w-full resize-y rounded-xl border border-outline-variant/40 bg-surface-container-low px-3 py-2.5 text-xs text-on-surface placeholder:text-outline focus:border-primary focus:outline-none" maxlength="5000" placeholder="{{ $isFrench ? 'Collez ici la description du poste…' : 'Paste the job description here…' }}"></textarea>
        </div>

        <div id="nestor-ai-messages" class="min-h-0 flex-1 space-y-4 overflow-y-auto px-4 py-4" aria-live="polite" aria-relevant="additions text">
            <div id="nestor-ai-welcome" class="space-y-4">
                <div class="max-w-[92%] rounded-2xl rounded-tl-md border border-outline-variant/30 bg-surface-container-low p-4 text-sm leading-6 text-on-surface">
                    {{ $isFrench ? 'Bonjour 👋 Je suis Nestor AI, l’assistant du portfolio de Nestor.' : 'Hi 👋 I’m Nestor AI, the assistant for Nestor’s portfolio.' }}
                    <br><br>{{ $isFrench ? 'Je peux vous aider à découvrir ses projets, ses compétences techniques, son expérience et son parcours.' : 'I can help you explore his projects, technical skills, experience and background.' }}
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($isFrench ? ['Qui est Nestor ?', 'Quelles sont ses compétences clés ?', 'Quels projets utilisent Spring Boot ?', 'Explique TITAN HISAA', 'Je cherche un développeur backend', 'Comment contacter Nestor ?'] : ['Who is Nestor?', 'What are his strongest technical skills?', 'Show me his Spring Boot projects.', 'Explain TITAN HISAA.', 'I’m looking for a backend developer.', 'How can I contact Nestor?'] as $suggestion)
                        <button type="button" data-ai-suggestion="{{ $suggestion }}" class="rounded-full border border-outline-variant/40 bg-surface-container-low px-3 py-2 text-left text-[11px] text-on-surface-variant transition hover:border-primary/50 hover:text-primary">{{ $suggestion }}</button>
                    @endforeach
                </div>
            </div>
        </div>

        <form id="nestor-ai-form" class="border-t border-outline-variant/30 bg-surface-container-low p-3">
            <div id="nestor-ai-status" class="mb-2 hidden text-xs text-on-surface-variant" role="status"></div>
            <div class="flex items-end gap-2 rounded-2xl border border-outline-variant/40 bg-surface px-3 py-2 focus-within:border-primary/60">
                <label for="nestor-ai-input" class="sr-only">{{ $isFrench ? 'Votre question' : 'Your question' }}</label>
                <textarea id="nestor-ai-input" rows="1" maxlength="1500" class="max-h-28 min-h-10 flex-1 resize-y bg-transparent py-2 text-sm text-on-surface outline-none placeholder:text-outline" placeholder="{{ $isFrench ? 'Posez votre question…' : 'Ask a question…' }}" required></textarea>
                <button id="nestor-ai-send" type="submit" class="mb-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary text-on-primary transition hover:bg-primary/90 disabled:cursor-wait disabled:opacity-50" aria-label="{{ $isFrench ? 'Envoyer' : 'Send' }}"><span class="material-symbols-outlined text-[19px]">arrow_upward</span></button>
            </div>
            <p class="mt-2 px-1 text-[10px] leading-4 text-outline">{{ $isFrench ? 'Réponses basées sur les informations publiques du portfolio.' : 'Answers are based on public information in the portfolio.' }}</p>
        </form>
    </section>

    <button id="nestor-ai-open" type="button" aria-controls="nestor-ai-panel" aria-expanded="false" class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-surface-container-low px-5 py-3 font-semibold text-on-surface shadow-xl shadow-black/20 transition hover:-translate-y-0.5 hover:border-primary/60 hover:text-primary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary">
        <span class="material-symbols-outlined text-[18px] text-primary">auto_awesome</span>
        <span>✨ {{ $isFrench ? 'Demander à Nestor AI' : 'Ask Nestor AI' }}</span>
    </button>
</div>

<script>
    (() => {
        const panel = document.getElementById('nestor-ai-panel');
        const openButton = document.getElementById('nestor-ai-open');
        const closeButton = document.getElementById('nestor-ai-close');
        const newButton = document.getElementById('nestor-ai-new');
        const form = document.getElementById('nestor-ai-form');
        const input = document.getElementById('nestor-ai-input');
        const messages = document.getElementById('nestor-ai-messages');
        const welcome = document.getElementById('nestor-ai-welcome');
        const sendButton = document.getElementById('nestor-ai-send');
        const status = document.getElementById('nestor-ai-status');
        const mode = document.getElementById('nestor-ai-mode');
        const jobDescription = document.getElementById('nestor-ai-job-description');
        const french = {{ Illuminate\Support\Js::from($isFrench) }};
        const conversationStorageKey = 'nestor-ai-conversation-v1';
        let conversationId = sessionStorage.getItem('nestor-ai-conversation-id') || crypto.randomUUID();
        let busy = false;

        sessionStorage.setItem('nestor-ai-conversation-id', conversationId);

        function setOpen(isOpen) {
            panel.classList.toggle('hidden', !isOpen);
            panel.classList.toggle('flex', isOpen);
            openButton.classList.toggle('hidden', isOpen);
            openButton.setAttribute('aria-expanded', String(isOpen));
            if (isOpen) input.focus();
            else openButton.focus();
        }

        function addMessage(role, content, sources = []) {
            welcome.classList.add('hidden');
            const message = document.createElement('div');
            message.className = role === 'user'
                ? 'ml-auto max-w-[90%] whitespace-pre-wrap rounded-2xl rounded-tr-md bg-primary px-4 py-3 text-sm leading-6 text-on-primary'
                : 'mr-auto max-w-[94%] whitespace-pre-wrap rounded-2xl rounded-tl-md border border-outline-variant/30 bg-surface-container-low px-4 py-3 text-sm leading-6 text-on-surface';
            message.textContent = content;
            messages.append(message);

            if (sources.length > 0) {
                const sourceList = document.createElement('div');
                sourceList.className = 'mt-2 flex flex-wrap gap-2';
                sources.forEach((source) => {
                    const link = document.createElement('a');
                    link.href = source.url;
                    link.textContent = `${source.title} →`;
                    link.className = 'rounded-full border border-primary/30 px-3 py-1.5 text-xs font-semibold text-primary transition hover:bg-primary/10';
                    sourceList.append(link);
                });
                message.append(sourceList);
            }

            messages.scrollTop = messages.scrollHeight;
        }

        function persistMessage(role, content) {
            let history = [];
            try { history = JSON.parse(sessionStorage.getItem(conversationStorageKey) || '[]'); } catch (_) { history = []; }
            history.push({ role, content });
            sessionStorage.setItem(conversationStorageKey, JSON.stringify(history.slice(-12)));
        }

        function restoreConversation() {
            let history = [];
            try { history = JSON.parse(sessionStorage.getItem(conversationStorageKey) || '[]'); } catch (_) { history = []; }
            if (Array.isArray(history)) history.forEach((message) => addMessage(message.role, message.content));
        }

        openButton.addEventListener('click', () => setOpen(true));
        closeButton.addEventListener('click', () => setOpen(false));
        newButton.addEventListener('click', () => {
            conversationId = crypto.randomUUID();
            sessionStorage.setItem('nestor-ai-conversation-id', conversationId);
            sessionStorage.removeItem(conversationStorageKey);
            messages.replaceChildren(welcome);
            welcome.classList.remove('hidden');
            status.classList.add('hidden');
            status.textContent = '';
            mode.value = 'chat';
            delete form.dataset.projectSlug;
            jobDescription.classList.add('hidden');
            jobDescription.value = '';
        });
        mode.addEventListener('change', () => jobDescription.classList.toggle('hidden', mode.value !== 'job'));
        document.addEventListener('click', (event) => {
            const suggestion = event.target.closest('[data-ai-suggestion]');
            const explain = event.target.closest('[data-ai-explain]');
            if (suggestion) {
                mode.value = 'chat';
                mode.dispatchEvent(new Event('change'));
                delete form.dataset.projectSlug;
                input.value = suggestion.dataset.aiSuggestion;
                setOpen(true);
                form.requestSubmit();
            }
            if (explain) {
                mode.value = 'project';
                input.value = french ? `Explique-moi le projet ${explain.dataset.projectTitle}.` : `Explain the project ${explain.dataset.projectTitle}.`;
                setOpen(true);
                form.dataset.projectSlug = explain.dataset.projectSlug;
                form.requestSubmit();
            }
        });

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const question = mode.value === 'job' ? jobDescription.value.trim() : input.value.trim();
            if (busy || !question) {
                if (mode.value === 'job' && !question) jobDescription.focus();
                return;
            }

            const requestMode = mode.value;
            const projectSlug = form.dataset.projectSlug || null;
            addMessage('user', question);
            persistMessage('user', question);
            input.value = '';
            busy = true;
            sendButton.disabled = true;
            status.textContent = french ? 'Nestor AI prépare une réponse…' : 'Nestor AI is preparing an answer…';
            status.classList.remove('hidden');

            try {
                const response = await fetch({{ Illuminate\Support\Js::from(route('nestor-ai.chat')) }}, {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': {{ Illuminate\Support\Js::from(csrf_token()) }},
                    },
                    body: JSON.stringify({
                        conversation_id: conversationId,
                        message: question,
                        mode: requestMode,
                        project_slug: projectSlug,
                    }),
                });
                const payload = await response.json();
                if (!response.ok) throw new Error(payload.message || 'unavailable');
                addMessage('assistant', payload.answer, payload.sources || []);
                persistMessage('assistant', payload.answer);
                if (requestMode === 'job') jobDescription.value = '';
                status.classList.add('hidden');
                status.textContent = '';
            } catch (_) {
                if (requestMode === 'job') jobDescription.value = question;
                status.textContent = french
                    ? 'Nestor AI est momentanément indisponible. Vous pouvez continuer à parcourir le portfolio ou contacter Nestor.'
                    : 'Nestor AI is temporarily unavailable. You can keep exploring the portfolio or contact Nestor.';
                status.classList.remove('hidden');
            } finally {
                busy = false;
                sendButton.disabled = false;
                input.focus();
            }
        });

        input.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault();
                form.requestSubmit();
            }
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && !panel.classList.contains('hidden')) setOpen(false);
        });

        restoreConversation();
    })();
</script>
