<div class="java-coffee-widget pointer-events-none fixed right-3 top-[72%] z-20 h-24 w-24 -translate-y-1/2 sm:right-8 sm:top-1/2 sm:h-32 sm:w-32 lg:right-[clamp(1rem,8vw,8rem)] lg:h-44 lg:w-44">
    <img id="java-coffee-image" class="java-coffee-float h-full w-full object-contain" src="{{ asset('java-coffee.png') }}" alt="Tasse de café Java animée" width="176" height="176" loading="eager" decoding="async">
    <button id="java-coffee-toggle" type="button" class="pointer-events-auto absolute -right-1 -top-1 inline-flex h-7 w-7 items-center justify-center rounded-full border border-outline-variant/60 bg-surface-container-high/95 text-on-surface-variant shadow-lg backdrop-blur transition hover:border-primary hover:text-primary" aria-label="{{ __('site.hide_java') }}" title="{{ __('site.hide_java') }}">
        <span id="java-coffee-toggle-icon" class="material-symbols-outlined text-sm">close</span>
    </button>
</div>

<style>
    .java-coffee-float { animation: java-cup-float 4.8s ease-in-out infinite; transform-origin:50% 88%; }
    @keyframes java-cup-float { 0%,100% { transform:translateY(-50%) translateY(-16px) rotate(-2deg); } 50% { transform:translateY(-50%) translateY(18px) rotate(2deg); } }
    @media (prefers-reduced-motion:reduce) { .java-coffee-float { animation:none; } }
</style>
<script>
    (() => {
        const image = document.getElementById('java-coffee-image');
        const toggle = document.getElementById('java-coffee-toggle');
        const icon = document.getElementById('java-coffee-toggle-icon');
        if (!image || !toggle || !icon) return;
        const hideLabel = @json(__('site.hide_java'));
        const showLabel = @json(__('site.show_java'));
        const update = (hidden) => {
            image.hidden = hidden;
            icon.textContent = hidden ? 'visibility' : 'close';
            toggle.setAttribute('aria-label', hidden ? showLabel : hideLabel);
            toggle.setAttribute('title', hidden ? showLabel : hideLabel);
        };
        let hidden = false;
        try { hidden = localStorage.getItem('java-coffee-hidden') === '1'; } catch (error) {}
        update(hidden);
        toggle.addEventListener('click', () => {
            hidden = !hidden;
            try { localStorage.setItem('java-coffee-hidden', hidden ? '1' : '0'); } catch (error) {}
            update(hidden);
        });
    })();
</script>
