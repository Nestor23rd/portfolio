<script>
document.addEventListener('DOMContentLoaded', () => {
    const certifications = @json($certifications ?? []);
    const cards = [...document.querySelectorAll('main .card-specular-top')].filter(card => card.querySelector('h3') && !card.querySelector('h2'));
    cards.forEach((card, index) => {
        const certification = certifications[index];
        if (!certification) { card.hidden = true; return; }
        const issuer = card.querySelector('h3')?.parentElement?.querySelector('span');
        const title = card.querySelector('h3');
        const description = card.querySelector('p');
        const status = card.querySelector('h3')?.closest('.flex.items-start')?.querySelector('span.shrink-0');
        if (issuer) issuer.textContent = certification.issuer || '';
        if (title) title.textContent = certification.title;
        if (description) description.textContent = certification.description || '';
        if (status) status.textContent = certification.status || '';
        const links = card.querySelectorAll('a');
        links.forEach(link => { if (link.textContent.includes('Vérifier') || link.textContent.includes('projet Github')) { link.href = certification.credential_url || '#'; link.toggleAttribute('hidden', !certification.credential_url); } });
    });
});
</script>
