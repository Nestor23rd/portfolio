<script>
document.addEventListener('DOMContentLoaded', () => {
    const projects = @json($projects ?? []);
    const skills = @json($skills ?? []);
    const firstMetric = [...document.querySelectorAll('main .font-headline-lg')].find(element => element.textContent.trim() === '3+');
    if (firstMetric) firstMetric.textContent = `${projects.length}+`;
    const technologyNames = [...new Set(skills.map(skill => skill.name))].slice(0, 8);
    const ribbon = [...document.querySelectorAll('main div')].find(element => element.textContent.trim() === 'Technologies Clés')?.parentElement?.querySelector('.flex.flex-wrap');
    if (ribbon && technologyNames.length) ribbon.replaceChildren(...technologyNames.map(name => { const item = document.createElement('div'); item.className = 'inline-flex items-center px-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/40'; item.innerHTML = `<span class="font-code-md text-code-sm text-on-surface font-semibold"></span>`; item.firstElementChild.textContent = name; return item; }));
});
</script>
