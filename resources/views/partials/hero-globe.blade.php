@php($isGlobalGlobe = $global ?? false)
@php($isCompactGlobe = $compact ?? false)
<div class="hero-globe-card {{ $isGlobalGlobe ? 'hero-globe-global fixed inset-0' : 'hero-globe-background absolute inset-0' }} {{ $isCompactGlobe ? 'hero-globe-compact' : '' }} z-0 overflow-hidden pointer-events-none">
    <div class="hero-globe-stars absolute inset-0"></div>
    <div class="absolute left-5 top-5 z-10 flex items-center gap-2 rounded-lg border border-outline-variant/40 bg-surface-container-lowest/80 px-3 py-2 font-mono text-[10px] uppercase tracking-[.14em] text-on-surface-variant backdrop-blur">
        <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-400"></span>{{ __('site.globe_status') }}
    </div>
    <div class="absolute right-5 top-5 z-10 rounded-lg border border-secondary/30 bg-secondary/10 px-3 py-2 font-mono text-[10px] uppercase tracking-[.14em] text-secondary">{{ __('site.journey_live') }}</div>

    <div class="hero-globe-orbit hero-globe-orbit-a"></div>
    <div class="hero-globe-orbit hero-globe-orbit-b"></div>
    <svg class="hero-globe-svg absolute left-1/2 top-1/2 pointer-events-auto" viewBox="0 0 500 500" role="img" aria-label="{{ __('site.globe_label') }}">
        <defs>
            <radialGradient id="heroEarth" cx="34%" cy="25%"><stop offset="0" stop-color="#78aaff"/><stop offset=".48" stop-color="#2455a2"/><stop offset="1" stop-color="#071326"/></radialGradient>
            <filter id="heroGlow"><feGaussianBlur stdDeviation="9" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
            <clipPath id="heroClip"><circle cx="250" cy="250" r="164"/></clipPath>
        </defs>
        <circle cx="250" cy="250" r="180" fill="#4d8eff" opacity=".14" filter="url(#heroGlow)"/>
        <circle cx="250" cy="250" r="164" fill="url(#heroEarth)" stroke="#adc6ff" stroke-opacity=".8" stroke-width="2"/>
        <g clip-path="url(#heroClip)" fill="none" stroke="#d8e2ff" stroke-opacity=".2">
            <ellipse cx="250" cy="250" rx="164" ry="55"/><ellipse cx="250" cy="250" rx="164" ry="110"/><ellipse cx="250" cy="250" rx="55" ry="164"/><ellipse cx="250" cy="250" rx="110" ry="164"/><path d="M86 250h328M100 190h300M100 310h300"/>
        </g>
        <g clip-path="url(#heroClip)" fill="#b8d1ff" fill-opacity=".28" stroke="#d8e2ff" stroke-opacity=".38">
            <path d="M126 162l28-25 34-6 18 17 28 8 6 25-20 19-28-2-18 19-31-9-12-23z"/><path d="M207 225l28-10 31 10 9 27-16 19-7 37-21 44-19-15 4-34-16-29z"/><path d="M284 154l31-16 42 13 17 25 36 18 23 35-28 15-34-10-18 20-29-3-18-30-26-18 8-25z"/><path d="M337 270l35-9 29 22-11 27-25 5-15 35-23-12 4-31z"/>
        </g>
        <path class="hero-globe-route" d="M126 298 Q205 170 302 270 T372 207" fill="none" stroke="#ffb95f" stroke-dasharray="5 8" stroke-linecap="round" stroke-width="2.5"/>
        <circle cx="126" cy="298" r="8" fill="#ffb95f"/><circle cx="126" cy="298" r="18" fill="none" stroke="#ffb95f" stroke-opacity=".6"><animate attributeName="r" values="8;24;8" dur="2.5s" repeatCount="indefinite"/><animate attributeName="opacity" values=".9;0;.9" dur="2.5s" repeatCount="indefinite"/></circle>
        <circle cx="302" cy="270" r="6" fill="#adc6ff"/><circle cx="372" cy="207" r="6" fill="#6ee7b7"/>
    </svg>

    <div class="absolute bottom-5 left-5 right-5 z-10 flex items-end justify-between gap-4 border-t border-outline-variant/30 bg-gradient-to-t from-[#080e1d] via-[#080e1d]/85 to-transparent px-1 pt-8">
        <div><p class="font-mono text-[10px] uppercase tracking-[.16em] text-secondary">{{ __('site.globe_origin') }}</p><p class="mt-1 font-display text-xl font-bold text-on-surface">Lomé, Togo</p></div>
        <div class="text-right"><p class="font-mono text-[10px] text-emerald-400">06°08′N · 01°13′E</p><p class="mt-1 text-xs text-on-surface-variant">{{ isset($experiences) ? $experiences->count() : 0 }} {{ __('site.path_milestones') }}</p></div>
    </div>
</div>

<style>
    .hero-globe-card { isolation:isolate; perspective:1200px; }
    .hero-globe-background { min-height:100%; opacity:.62; }
    .hero-globe-global { opacity:.34; }
    .hero-globe-compact { opacity:.2; }
    .hero-globe-compact .hero-globe-svg { width:min(68vw, 680px); height:min(68vw, 680px); }
    .hero-globe-compact .hero-globe-orbit { left:16%; width:68%; }
    .hero-globe-global > .absolute.z-10 { display:none; }
    html:not(.dark) .hero-globe-global { opacity:.48; }
    html:not(.dark) .hero-globe-global.hero-globe-compact { opacity:.3; }
    html:not(.dark) .hero-globe-global .hero-globe-svg { filter:saturate(1.12) contrast(1.08); }
    html:not(.dark) .hero-globe-global::after { background:linear-gradient(90deg,rgba(248,250,253,.58) 0%,rgba(248,250,253,.28) 25%,rgba(248,250,253,.04) 58%,transparent 100%),linear-gradient(180deg,rgba(248,250,253,.04) 0%,transparent 35%,rgba(248,250,253,.18) 100%); }
    .hero-globe-background::after, .hero-globe-global::after { content:""; position:absolute; inset:0; z-index:2; pointer-events:none; background:linear-gradient(90deg,rgba(7,13,29,.92) 0%,rgba(7,13,29,.72) 22%,rgba(7,13,29,.18) 52%,rgba(7,13,29,.08) 100%),linear-gradient(180deg,rgba(7,13,29,.25) 0%,transparent 28%,rgba(7,13,29,.5) 100%); }
    .hero-globe-stars { opacity:.55; background-image:radial-gradient(circle,rgba(173,198,255,.8) 0 1px,transparent 1.5px),radial-gradient(circle,rgba(255,185,95,.6) 0 1px,transparent 1.5px); background-position:0 0,30px 24px; background-size:55px 55px,79px 79px; }
    .hero-globe-orbit { position:absolute; z-index:1; left:3%; top:25%; width:94%; height:50%; border:1px solid rgba(173,198,255,.16); border-radius:50%; transform:rotate(-24deg); }
    .hero-globe-orbit-b { transform:rotate(40deg) scaleY(.7); border-color:rgba(255,185,95,.16); }
    .hero-globe-svg { width:min(96vw, 920px); height:min(96vw, 920px); max-width:none; opacity:.9; transform:translate(-50%,-50%) translate3d(var(--globe-x, 0px),var(--globe-y, 0px),0) rotate(var(--globe-r, 0deg)); transition:transform .18s ease-out; will-change:transform; }
    .hero-globe-route { animation:hero-route-dash 10s linear infinite; }
    @keyframes hero-route-dash { to { stroke-dashoffset:-52; } }
    @media (prefers-reduced-motion:reduce) { .hero-globe-svg,.hero-globe-route { transition:none;animation:none; } }
</style>
<script>
    (() => {
        const stage = document.querySelector('.hero-globe-background, .hero-globe-global');
        if (!stage || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        const globe = stage.querySelector('.hero-globe-svg');
        stage.addEventListener('pointermove', (event) => {
            const rect = stage.getBoundingClientRect();
            const x = (event.clientX - rect.left) / rect.width - .5;
            const y = (event.clientY - rect.top) / rect.height - .5;
            globe.style.setProperty('--globe-x', `${x * 18}px`);
            globe.style.setProperty('--globe-y', `${y * 14}px`);
            globe.style.setProperty('--globe-r', `${x * 2}deg`);
        });
        stage.addEventListener('pointerleave', () => {
            globe.style.setProperty('--globe-x', '0px');
            globe.style.setProperty('--globe-y', '0px');
            globe.style.setProperty('--globe-r', '0deg');
        });
    })();
</script>
