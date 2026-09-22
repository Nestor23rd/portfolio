@php
    $journeySteps = $experiences->sortBy('start_date')->values();
    $journeySkills = $skills->pluck('name')->unique()->take(7)->values();
@endphp

<section id="journey" class="guided-journey relative overflow-hidden border-y border-outline-variant/20 bg-surface-container-lowest/70 px-6 py-20 md:px-12 md:py-28" aria-labelledby="journey-title">
    <div class="pointer-events-none absolute inset-0 opacity-50 [background-image:radial-gradient(circle_at_20%_20%,rgba(77,142,255,.16),transparent_28%),radial-gradient(circle_at_85%_70%,rgba(255,185,95,.10),transparent_25%)]"></div>
    <div class="relative mx-auto w-full max-w-7xl">
        <div class="mx-auto max-w-4xl text-center">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-2 font-code-sm text-xs uppercase tracking-[.18em] text-primary">
                <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-400"></span>
                {{ __('site.journey_live') }}
            </div>
            <h2 id="journey-title" class="font-display text-3xl font-bold tracking-tight text-on-surface md:text-5xl">
                {{ __('site.journey_title') }}
            </h2>
            <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-on-surface-variant">
                {{ __('site.journey_intro') }}
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-2">
                @foreach($journeySkills as $skillName)
                    <span class="rounded-full border border-outline-variant/50 bg-surface-container px-3 py-1.5 font-mono text-xs text-on-surface-variant transition hover:border-primary/60 hover:text-primary">{{ $skillName }}</span>
                @endforeach
            </div>

            <div class="mx-auto mt-8 inline-flex items-center gap-3 rounded-full border border-outline-variant/40 bg-surface-container px-4 py-2 text-xs text-on-surface-variant">
                <span class="text-emerald-400">⌖</span>
                <strong class="text-on-surface">Lomé, Togo</strong>
                <span class="text-outline-variant">•</span>
                <span>{{ __('site.journey_anchor') }}</span>
            </div>
        </div>

        @if(false)
        <div class="relative mx-auto w-full max-w-2xl">
            <div class="globe-stage relative aspect-square overflow-hidden rounded-3xl border border-primary/20 bg-[#080e1d] shadow-[0_0_80px_rgba(77,142,255,.12)]">
                <div class="globe-stars absolute inset-0 opacity-60"></div>
                <div class="globe-orbit globe-orbit-one"></div>
                <div class="globe-orbit globe-orbit-two"></div>
                <svg class="globe-svg absolute inset-[8%] h-[84%] w-[84%]" viewBox="0 0 500 500" role="img" aria-label="{{ __('site.globe_label') }}">
                    <defs>
                        <radialGradient id="earthFill" cx="35%" cy="28%">
                            <stop offset="0" stop-color="#4d8eff" stop-opacity=".85"/>
                            <stop offset=".55" stop-color="#183e83" stop-opacity=".92"/>
                            <stop offset="1" stop-color="#071326"/>
                        </radialGradient>
                        <filter id="earthGlow"><feGaussianBlur stdDeviation="8" result="blur"/><feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
                        <clipPath id="earthClip"><circle cx="250" cy="250" r="174"/></clipPath>
                    </defs>
                    <circle cx="250" cy="250" r="187" fill="#adc6ff" opacity=".08" filter="url(#earthGlow)"/>
                    <circle cx="250" cy="250" r="174" fill="url(#earthFill)" stroke="#adc6ff" stroke-opacity=".65" stroke-width="2"/>
                    <g clip-path="url(#earthClip)" fill="none" stroke="#adc6ff" stroke-opacity=".2" stroke-width="1">
                        <ellipse cx="250" cy="250" rx="174" ry="58"/><ellipse cx="250" cy="250" rx="174" ry="116"/>
                        <ellipse cx="250" cy="250" rx="58" ry="174"/><ellipse cx="250" cy="250" rx="116" ry="174"/>
                        <path d="M76 250h348M91 190h318M91 310h318"/>
                    </g>
                    <g clip-path="url(#earthClip)" fill="#9cc2ff" fill-opacity=".26" stroke="#adc6ff" stroke-opacity=".38" stroke-width="1">
                        <path d="M122 163l24-25 33-8 18 18 28 7 7 26-20 20-28-2-18 19-29-7-13-23z"/>
                        <path d="M207 230l27-14 34 9 10 27-16 21-7 35-22 43-18-13 4-35-17-27z"/>
                        <path d="M284 154l30-16 43 13 16 25 37 19 20 34-26 14-35-10-16 21-30-3-20-30-25-18 9-25z"/>
                        <path d="M337 270l35-9 29 22-11 27-26 5-13 36-24-12 4-31z"/>
                    </g>
                    <path class="globe-route" d="M125 300 Q205 170 303 270 T373 207" fill="none" stroke="#ffb95f" stroke-dasharray="5 8" stroke-linecap="round" stroke-width="2"/>
                    <g class="globe-pin globe-pin-home"><circle cx="125" cy="300" r="7" fill="#ffb95f"/><circle cx="125" cy="300" r="14" fill="none" stroke="#ffb95f" stroke-opacity=".5"><animate attributeName="r" values="8;20;8" dur="2.4s" repeatCount="indefinite"/><animate attributeName="opacity" values=".8;0;.8" dur="2.4s" repeatCount="indefinite"/></circle></g>
                    <g class="globe-pin"><circle cx="303" cy="270" r="5" fill="#adc6ff"/><circle cx="373" cy="207" r="5" fill="#6ee7b7"/></g>
                </svg>
                <div class="absolute left-5 top-5 rounded-lg border border-outline-variant/40 bg-surface-container-lowest/80 px-3 py-2 font-mono text-[10px] uppercase tracking-[.15em] text-on-surface-variant backdrop-blur">
                    <span class="text-emerald-400">●</span> {{ __('site.globe_status') }}
                </div>
                <div class="absolute bottom-5 left-5 right-5 flex items-end justify-between gap-4">
                    <div>
                        <p class="font-mono text-[10px] uppercase tracking-[.18em] text-secondary">{{ __('site.globe_origin') }}</p>
                        <p class="mt-1 font-display text-xl font-semibold text-on-surface">Lomé, TG</p>
                    </div>
                    <span class="rounded-md border border-primary/30 bg-primary/10 px-2 py-1 font-mono text-[10px] text-primary">06°08′N · 01°13′E</span>
                </div>
            </div>
        </div>
        @endif
    </div>

    <div class="relative mx-auto mt-20 w-full max-w-none">
        <div class="mb-8 mt-20 flex flex-col justify-between gap-3 border-b border-outline-variant/30 pb-4 sm:flex-row sm:items-end">
            <div>
                <p class="font-mono text-xs uppercase tracking-[.18em] text-primary">01 — {{ __('site.path_label') }}</p>
                <h3 class="mt-2 font-display text-2xl font-bold text-on-surface">{{ __('site.path_title') }}</h3>
            </div>
            <p class="font-mono text-xs text-on-surface-variant">{{ $journeySteps->count() }} {{ __('site.path_milestones') }}</p>
        </div>
        @if($journeySteps->isNotEmpty())
            <div class="guided-timeline grid w-full grid-cols-1 gap-5" style="--journey-columns: {{ min(max($journeySteps->count(), 1), 4) }};">
                @foreach($journeySteps as $step)
                    <article class="guided-step group relative rounded-2xl border border-outline-variant/35 bg-surface-container-low/90 p-5 transition duration-300 hover:-translate-y-1 hover:border-primary/60" style="--step-index: {{ $loop->index }};" tabindex="0">
                        <div class="mb-5 flex items-center justify-between">
                            <span class="font-mono text-xs font-semibold text-secondary">{{ $step->start_date?->format('Y') }}</span>
                            <span class="h-2 w-2 rounded-full {{ $step->is_current ? 'bg-emerald-400 shadow-[0_0_12px_#34d399]' : 'bg-primary/70' }}"></span>
                        </div>
                        <h4 class="font-display text-lg font-semibold leading-tight text-on-surface">{{ $step->role }}</h4>
                        <p class="mt-2 text-sm text-primary">{{ $step->company ?: __('site.independent') }}</p>
                        <p class="mt-4 line-clamp-3 text-sm leading-6 text-on-surface-variant">{{ $step->description }}</p>
                        @if($step->is_current)
                            <span class="mt-5 inline-flex rounded-full border border-emerald-400/30 bg-emerald-400/10 px-2.5 py-1 font-mono text-[10px] uppercase tracking-wider text-emerald-400">{{ __('site.current_step') }}</span>
                        @endif
                    </article>
                @endforeach
            </div>
        @else
            <div class="rounded-2xl border border-dashed border-outline-variant/40 p-8 text-center text-on-surface-variant">{{ __('site.no_path') }}</div>
        @endif
    </div>
</section>

<style>
    .globe-stage { isolation: isolate; }
    .globe-stars { background-image: radial-gradient(circle, rgba(173,198,255,.75) 0 1px, transparent 1.5px), radial-gradient(circle, rgba(255,185,95,.5) 0 1px, transparent 1.5px); background-position: 0 0, 34px 26px; background-size: 58px 58px, 83px 83px; }
    .globe-orbit { position:absolute; left:10%; top:28%; width:80%; height:44%; border:1px solid rgba(173,198,255,.16); border-radius:50%; transform:rotate(-25deg); }
    .globe-orbit-two { transform:rotate(38deg) scaleY(.72); border-color:rgba(255,185,95,.13); }
    .globe-svg { animation: globe-float 8s ease-in-out infinite; transform-origin:center; }
    .globe-route { animation: route-dash 12s linear infinite; }
    .globe-pin { filter: drop-shadow(0 0 7px rgba(173,198,255,.8)); }
    .globe-pin-home { filter: drop-shadow(0 0 8px rgba(255,185,95,.9)); }
    .guided-timeline { align-items:stretch; }
    .guided-step { opacity:0; transform:translateY(24px); transition:opacity .7s ease,transform .7s ease,border-color .3s ease; }
    .guided-step.is-visible { opacity:1; transform:translateY(0); transition-delay:calc(var(--step-index) * 110ms); }
    .guided-step:focus-visible { outline:2px solid #adc6ff; outline-offset:3px; }
    @media (min-width:768px) { .guided-timeline { grid-template-columns:repeat(var(--journey-columns),minmax(0,1fr)); } }
    @keyframes globe-float { 0%,100% { transform:translateY(0) rotate(-1deg); } 50% { transform:translateY(-8px) rotate(1deg); } }
    @keyframes route-dash { to { stroke-dashoffset:-52; } }
    @media (prefers-reduced-motion: reduce) { .globe-svg, .globe-route { animation:none; } .guided-step { opacity:1; transform:none; transition:none; } }
</style>
<script>
    (() => {
        const steps = document.querySelectorAll('.guided-step');
        if (!steps.length) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) {
            steps.forEach((step) => step.classList.add('is-visible'));
            return;
        }
        const observer = new IntersectionObserver((entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                currentObserver.unobserve(entry.target);
            });
        }, { threshold: .16 });
        steps.forEach((step) => observer.observe(step));
    })();
</script>
