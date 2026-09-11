<script>
document.addEventListener('DOMContentLoaded', () => {
    const experiences = @json($experiences ?? []);
    experiences.forEach(experience => {
        experience.start_date = experience.start_date ? new Date(experience.start_date).toLocaleDateString('fr-FR', {month: 'short', year: 'numeric'}) : '';
        experience.end_date = experience.end_date ? new Date(experience.end_date).toLocaleDateString('fr-FR', {month: 'short', year: 'numeric'}) : '';
    });
    document.querySelectorAll('main .specular-card').forEach((card, index) => {
        const experience = experiences[index];
        if (!experience || !card.querySelector('h2')) return;
        card.querySelector('h2').textContent = experience.role;
        const paragraphs = card.querySelectorAll('p');
        if (paragraphs.length) paragraphs[paragraphs.length - 1].textContent = experience.description || '';
        const meta = card.querySelector('.inline-flex');
        if (meta) meta.lastChild.textContent = ` ${experience.start_date || ''} → ${experience.is_current ? 'maintenant' : (experience.end_date || '')}`;
        const location = card.querySelector('.text-secondary, .text-on-surface-variant');
        if (location && experience.company) location.lastChild.textContent = ` ${experience.company}${experience.location ? ` • ${experience.location}` : ''}`;
        const tags = card.querySelector('.border-t.border-outline-variant\/30');
        if (tags && experience.technologies?.length) tags.replaceChildren(...experience.technologies.map(technology => { const tag = document.createElement('span'); tag.className = 'font-code-sm text-code-sm text-on-surface-variant bg-surface-container-high/60 border border-outline-variant/40 px-2.5 py-1 rounded-md'; tag.textContent = technology; return tag; }));
    });
});
</script>
