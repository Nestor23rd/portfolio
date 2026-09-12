@php
    $translatedProjects = collect($projects->items())->map(function($p) {
        $arr = is_array($p) ? $p : $p->toArray();
        $arr['category'] = __($arr['category'] ?? 'Projet');
        $arr['title'] = __($arr['title'] ?? '');
        $arr['excerpt'] = __($arr['excerpt'] ?? $arr['description'] ?? '');
        return $arr;
    });
@endphp
<script>
document.addEventListener('DOMContentLoaded', () => {
    const projects = @json($translatedProjects);
    const grid = document.getElementById('projects-grid');
    if (!grid) return;

    const viewProjectText = @json(__('site.view_project'));
    const sourceCodeText = @json(__('site.source_code'));

    grid.replaceChildren(...projects.map((project, index) => {
        const card = document.createElement('article');
        card.className = 'reveal-card bg-surface-container-low border border-outline-variant/40 rounded-xl flex flex-col overflow-hidden hover:border-primary/50 transition-all duration-200 group';
        card.style.setProperty('--stagger', index);
        const technologies = Array.isArray(project.technologies) ? project.technologies : [];
        card.innerHTML = `<div class="p-6 flex-grow flex flex-col justify-between"><div><div class="flex items-center justify-between mb-3"><span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-primary/10 border border-primary/30 text-primary font-code-sm text-code-sm font-semibold"></span><span class="font-code-sm text-code-sm text-outline">#${String(index + 1).padStart(2, '0')}</span></div><h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors"></h3><p class="font-body-sm text-body-sm text-on-surface-variant mt-2"></p><div class="project-technologies flex flex-wrap gap-1.5 mt-4"></div></div><div class="mt-6 pt-4 border-t border-outline-variant/30 flex items-center justify-between"><a class="project-url inline-flex items-center gap-1 text-primary hover:text-primary-container font-headline-sm text-body-sm font-semibold transition-colors" target="_blank" rel="noopener noreferrer" href="#">${viewProjectText} <span class="text-xs">↗</span></a><a class="repository-url inline-flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface font-code-sm text-code-sm transition-colors" target="_blank" rel="noopener noreferrer" href="#"><span class="material-symbols-outlined text-[16px]">code</span>${sourceCodeText}</a></div></div>`;
        if (project.image_path) {
            const cover = document.createElement('img');
            cover.src = `/storage/${project.image_path}`;
            cover.alt = project.title;
            cover.className = 'h-48 w-full object-cover';
            card.insertBefore(cover, card.firstChild);
        }
        card.querySelector('span.inline-flex').textContent = project.category || 'Projet';
        card.querySelector('h3').textContent = project.title;
        card.querySelector('p').textContent = project.excerpt || project.description || '';
        const techContainer = card.querySelector('.project-technologies');
        technologies.forEach(technology => {
            const pill = document.createElement('span');
            pill.className = 'px-2 py-0.5 rounded bg-surface-container border border-outline-variant/40 text-on-surface-variant font-code-sm text-code-sm';
            pill.textContent = technology;
            techContainer.appendChild(pill);
        });
        const projectLink = card.querySelector('.project-url');
        const repositoryLink = card.querySelector('.repository-url');
        if (project.project_url) projectLink.href = project.project_url; else projectLink.hidden = true;
        if (project.repository_url) repositoryLink.href = project.repository_url; else repositoryLink.hidden = true;
        return card;
    }));

    if (typeof window.initScrollReveal === 'function') {
        window.initScrollReveal();
    } else {
        requestAnimationFrame(() => {
            grid.querySelectorAll('.reveal-card').forEach(c => c.classList.add('is-revealed'));
        });
    }
});
</script>
