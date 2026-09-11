<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('main section').forEach(section => {
        if (section.textContent.includes('Validations officielles & Engagements')) section.remove();
    });
    const skills = @json($skills ?? []);
    document.querySelectorAll('main .card-specular-top').forEach(card => {
        const heading = card.querySelector('h2');
        if (!heading) return;
        const group = skills.filter(skill => skill.category.toLowerCase() === heading.textContent.trim().toLowerCase());
        if (!group.length) return;
        const badge = heading.closest('.flex.items-center.justify-between')?.querySelector('span.font-code-sm:last-child');
        if (badge) badge.textContent = `${group.length} ITEMS`;
        const list = heading.closest('.card-specular-top').querySelector('[class*="space-y-"]');
        if (!list) return;
        list.replaceChildren(...group.map(skill => {
            const item = document.createElement('div');
            item.className = 'p-3 rounded-lg bg-surface-container/60 border border-outline-variant/30';
            item.innerHTML = `<div class="flex items-center justify-between"><div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span><span class="font-code-md text-code-md font-semibold text-on-surface"></span></div><span class="font-label-sm text-label-sm uppercase px-1.5 py-0.5 rounded bg-surface-container-high text-primary border border-primary/20"></span></div><p class="text-on-surface-variant font-body-sm text-body-sm pl-3.5 mt-2"></p>`;
            item.querySelectorAll('span')[1].textContent = skill.name;
            item.querySelectorAll('span')[2].textContent = skill.proficiency ? `${skill.proficiency}%` : 'Actif';
            item.querySelector('p').textContent = skill.description || '';
            return item;
        }));
    });
});
</script>
