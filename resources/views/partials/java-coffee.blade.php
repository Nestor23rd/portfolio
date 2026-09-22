<img class="java-coffee-float pointer-events-none fixed right-3 top-[72%] z-20 h-24 w-24 -translate-y-1/2 object-contain sm:right-8 sm:top-1/2 sm:h-32 sm:w-32 lg:right-[clamp(1rem,8vw,8rem)] lg:h-44 lg:w-44" src="{{ asset('java-coffee.png') }}" alt="Tasse de café Java animée" width="176" height="176" loading="eager" decoding="async">

<style>
    .java-coffee-float { animation: java-cup-float 4.8s ease-in-out infinite; transform-origin:50% 88%; }
    @keyframes java-cup-float { 0%,100% { transform:translateY(-50%) translateY(-16px) rotate(-2deg); } 50% { transform:translateY(-50%) translateY(18px) rotate(2deg); } }
    @media (prefers-reduced-motion:reduce) { .java-coffee-float { animation:none; } }
</style>
