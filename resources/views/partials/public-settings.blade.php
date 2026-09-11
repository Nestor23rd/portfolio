<script>
document.addEventListener('DOMContentLoaded', () => {
    const settings = @json($publicSettings ?? []);
    const socialLinks = @json(\App\Models\SocialLink::where('is_visible', true)->orderBy('sort_order')->get(['label', 'url']));
    const links = { GitHub: 'github_url', LinkedIn: 'linkedin_url', Telegram: 'telegram_url', Documentation: 'documentation_url', 'PGP Key': 'pgp_url' };
    document.querySelectorAll('footer a, main a').forEach(link => {
        const key = Object.keys(links).find(label => link.textContent.trim().includes(label) || (label === 'Telegram' && link.title?.includes('Telegram')));
        if (key && settings[links[key]]) { link.href = settings[links[key]]; link.target = '_blank'; link.rel = 'noopener noreferrer'; }
    });
    document.querySelectorAll('footer nav').forEach(nav => {
        socialLinks.forEach(profile => {
            if ([...nav.querySelectorAll('a')].some(link => link.textContent.trim().toLowerCase() === profile.label.toLowerCase())) return;
            const link = document.createElement('a');
            link.href = profile.url; link.target = '_blank'; link.rel = 'noopener noreferrer'; link.textContent = profile.label;
            link.className = 'text-on-surface-variant hover:text-on-surface transition-colors font-code-sm text-code-sm';
            nav.appendChild(link);
        });
    });
    const aboutSocialGroup = document.querySelector('main a[title="GitHub"]')?.parentElement;
    if (aboutSocialGroup) {
        socialLinks.forEach(profile => {
            if ([...aboutSocialGroup.querySelectorAll('a')].some(link => link.textContent.trim().toLowerCase() === profile.label.toLowerCase())) return;
            const link = document.createElement('a');
            link.href = profile.url; link.target = '_blank'; link.rel = 'noopener noreferrer'; link.title = profile.label; link.textContent = profile.label;
            link.className = 'px-3 py-2 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 font-code-sm text-code-sm';
            aboutSocialGroup.appendChild(link);
        });
    }
    document.querySelectorAll('a[href^="mailto:"]').forEach(link => { if (settings.email) link.href = `mailto:${settings.email}`; });
    document.querySelectorAll('footer p, [data-site-footer]').forEach(paragraph => { if (settings.footer_text) paragraph.textContent = `© ${new Date().getFullYear()} ${settings.footer_text}`; });
    document.querySelectorAll('[data-site-location]').forEach(element => { if (settings.location) element.textContent = settings.location; });
});
</script>
