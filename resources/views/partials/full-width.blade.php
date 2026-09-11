<style>
    .portfolio-logo-image {
        width: 1.75rem;
        height: 1.75rem;
        object-fit: cover;
        border-radius: .4rem;
        border: 1px solid rgba(59, 130, 246, .55);
        box-shadow: 0 0 12px rgba(59, 130, 246, .2);
    }
    html, body { width: 100%; min-width: 100%; }
    body { overflow-x: hidden; }
    header > div[class~="max-w-7xl"],
    footer > div[class~="max-w-7xl"],
    main[class~="max-w-7xl"],
    main[class~="max-w-6xl"],
    main[class*="max-w-[1400px]"] {
        width: 100% !important;
        max-width: none !important;
    }
    main > section[class~="max-w-7xl"],
    main > section[class~="max-w-6xl"] {
        width: 100% !important;
        max-width: none !important;
    }
</style>
<link rel="icon" type="image/jpeg" href="{{ asset('profil.jpeg') }}">
<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('span').forEach((element) => {
        if (element.children.length === 0 && element.textContent.includes('>_')) {
            element.textContent = element.textContent.replace(/>_\s*/g, '');
        }
        if (element.children.length === 0 && element.textContent.trim() === '>') {
            element.remove();
        }
    });

    document.querySelectorAll('header button').forEach((button) => {
        const icon = button.querySelector('.material-symbols-outlined');
        if (icon && icon.textContent.trim() === 'terminal') button.remove();
    });
    document.querySelectorAll('header a').forEach((link) => {
        const icon = link.querySelector('.material-symbols-outlined');
        if (icon && icon.textContent.trim() === 'terminal' && link.textContent.includes('Me contacter')) icon.remove();
    });
});
</script>
