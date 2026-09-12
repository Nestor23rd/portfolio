<!-- Early Anti-FOUC Theme Initialization Script -->
<script>
    (function() {
        try {
            var theme = localStorage.getItem('theme');
            if (theme === 'light' || (!theme && window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches)) {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        } catch (e) {
            document.documentElement.classList.add('dark');
        }
    })();
</script>

<!-- Material Design 3 CSS Variables (Light / Dark) -->
<style id="theme-tokens">
:root {
    /* Base & Surface (Light Mode) */
    --color-background: 248 250 253;
    --color-surface: 248 250 253;
    --color-surface-dim: 235 239 246;
    --color-surface-bright: 255 255 255;
    --color-surface-variant: 226 232 240;
    --color-surface-container-lowest: 255 255 255;
    --color-surface-container-low: 241 245 249;
    --color-surface-container: 232 238 246;
    --color-surface-container-high: 222 228 238;
    --color-surface-container-highest: 203 213 225;

    /* Typography & Borders (Light Mode) */
    --color-on-background: 15 23 42;
    --color-on-surface: 15 23 42;
    --color-on-surface-variant: 71 85 105;
    --color-outline: 100 116 139;
    --color-outline-variant: 203 213 225;

    /* Primary Accent (Light Mode: Vibrant Royal Blue) */
    --color-primary: 26 86 219;
    --color-on-primary: 255 255 255;
    --color-primary-container: 219 234 254;
    --color-on-primary-container: 30 58 138;
    --color-primary-fixed: 216 226 255;
    --color-primary-fixed-dim: 173 198 255;
    --color-on-primary-fixed: 0 26 66;
    --color-on-primary-fixed-variant: 0 67 149;
    --color-inverse-primary: 147 197 253;

    /* Secondary Accent (Light Mode: Deep Warm Amber) */
    --color-secondary: 180 83 9;
    --color-on-secondary: 255 255 255;
    --color-secondary-container: 254 243 199;
    --color-on-secondary-container: 120 53 15;
    --color-secondary-fixed: 255 221 184;
    --color-secondary-fixed-dim: 255 185 95;
    --color-on-secondary-fixed: 42 23 0;
    --color-on-secondary-fixed-variant: 101 62 0;

    /* Tertiary Accent (Light Mode) */
    --color-tertiary: 2 132 199;
    --color-on-tertiary: 255 255 255;
    --color-tertiary-container: 224 242 254;
    --color-on-tertiary-container: 12 74 110;
    --color-tertiary-fixed: 255 220 198;
    --color-tertiary-fixed-dim: 255 183 134;
    --color-on-tertiary-fixed: 49 20 0;
    --color-on-tertiary-fixed-variant: 114 54 0;

    /* Error & Status (Light Mode) */
    --color-error: 220 38 38;
    --color-on-error: 255 255 255;
    --color-error-container: 254 226 226;
    --color-on-error-container: 127 29 29;

    /* Inverses (Light Mode) */
    --color-inverse-surface: 15 23 42;
    --color-inverse-on-surface: 248 250 253;
    --color-surface-tint: 26 86 219;
}

.dark {
    /* Base & Surface (Dark Mode - Original Precision Palette) */
    --color-background: 13 19 34;
    --color-surface: 13 19 34;
    --color-surface-dim: 13 19 34;
    --color-surface-bright: 51 57 74;
    --color-surface-variant: 47 52 69;
    --color-surface-container-lowest: 8 14 29;
    --color-surface-container-low: 21 27 43;
    --color-surface-container: 25 31 47;
    --color-surface-container-high: 36 42 58;
    --color-surface-container-highest: 47 52 69;

    /* Typography & Borders (Dark Mode) */
    --color-on-background: 221 226 248;
    --color-on-surface: 221 226 248;
    --color-on-surface-variant: 194 198 214;
    --color-outline: 140 144 159;
    --color-outline-variant: 66 71 84;

    /* Primary Accent (Dark Mode) */
    --color-primary: 173 198 255;
    --color-on-primary: 0 46 106;
    --color-primary-container: 77 142 255;
    --color-on-primary-container: 0 40 93;
    --color-primary-fixed: 216 226 255;
    --color-primary-fixed-dim: 173 198 255;
    --color-on-primary-fixed: 0 26 66;
    --color-on-primary-fixed-variant: 0 67 149;
    --color-inverse-primary: 0 90 194;

    /* Secondary Accent (Dark Mode) */
    --color-secondary: 255 185 95;
    --color-on-secondary: 71 42 0;
    --color-secondary-container: 238 152 0;
    --color-on-secondary-container: 91 56 0;
    --color-secondary-fixed: 255 221 184;
    --color-secondary-fixed-dim: 255 185 95;
    --color-on-secondary-fixed: 42 23 0;
    --color-on-secondary-fixed-variant: 101 62 0;

    /* Tertiary Accent (Dark Mode) */
    --color-tertiary: 255 183 134;
    --color-on-tertiary: 80 36 0;
    --color-tertiary-container: 223 116 18;
    --color-on-tertiary-container: 70 31 0;
    --color-tertiary-fixed: 255 220 198;
    --color-tertiary-fixed-dim: 255 183 134;
    --color-on-tertiary-fixed: 49 20 0;
    --color-on-tertiary-fixed-variant: 114 54 0;

    /* Error & Status (Dark Mode) */
    --color-error: 255 180 171;
    --color-on-error: 105 0 5;
    --color-error-container: 147 0 10;
    --color-on-error-container: 255 218 214;

    /* Inverses (Dark Mode) */
    --color-inverse-surface: 221 226 248;
    --color-inverse-on-surface: 42 48 64;
    --color-surface-tint: 173 198 255;
}

.material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
    font-size: 1.25rem;
    line-height: 1;
    display: inline-block;
    vertical-align: middle;
}

/* Light Mode Overrides for Specific Components */
html:not(.dark) .portfolio-topbar {
    background-color: rgba(255, 255, 255, 0.94) !important;
    border-color: rgba(203, 213, 225, 0.7) !important;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
}
html.dark .portfolio-topbar {
    background-color: rgba(8, 14, 29, 0.94) !important;
    border-color: rgba(148, 163, 184, 0.25) !important;
}

html:not(.dark) .specular-card::before {
    background: linear-gradient(180deg, rgba(37, 99, 235, 0.22) 0%, rgba(203, 213, 225, 0.6) 100%);
}

html:not(.dark) .terminal-grid-pattern,
html:not(.dark) .terminal-grid,
html:not(.dark) .grid-bg,
html:not(.dark) .bg-grid-engineer {
    background-image: 
        linear-gradient(to right, rgba(148, 163, 184, 0.12) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(148, 163, 184, 0.12) 1px, transparent 1px);
}

/* Light mode contrast enhancements for status badges */
html:not(.dark) .text-emerald-400 {
    color: #059669 !important;
}
html:not(.dark) .bg-emerald-950\/40 {
    background-color: rgba(209, 250, 229, 0.8) !important;
    border-color: rgba(5, 150, 105, 0.3) !important;
    color: #047857 !important;
}
html:not(.dark) .border-emerald-800\/50 {
    border-color: rgba(5, 150, 105, 0.3) !important;
}
html:not(.dark) .border-emerald-500\/30 {
    border-color: rgba(5, 150, 105, 0.35) !important;
}
html:not(.dark) .bg-emerald-500\/10 {
    background-color: rgba(209, 250, 229, 0.8) !important;
}
html:not(.dark) .border-emerald-500\/40 {
    border-color: rgba(5, 150, 105, 0.3) !important;
}
html:not(.dark) .text-emerald-300 {
    color: #047857 !important;
}

/* Ambient glow subtle opacity on light mode */
html:not(.dark) .pointer-events-none.rounded-full.-z-10 {
    opacity: 0.35;
}

/* ──── Shared Grid Patterns ──── */
.terminal-grid,
.terminal-grid-pattern,
.grid-bg,
.bg-grid-engineer {
    background-size: 32px 32px;
    background-image:
        linear-gradient(to right, rgb(var(--color-outline-variant) / 0.12) 1px, transparent 1px),
        linear-gradient(to bottom, rgb(var(--color-outline-variant) / 0.12) 1px, transparent 1px);
}

/* ──── Hero Dot Pattern ──── */
.hero-dot-pattern {
    background-image: radial-gradient(rgb(var(--color-outline-variant)) 1px, transparent 1px);
}

/* ──── Specular Card (inset border shimmer variant) ──── */
.specular-card {
    position: relative;
}
.specular-card::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: inherit;
    padding: 1px;
    background: linear-gradient(180deg,
        rgb(var(--color-primary) / 0.22) 0%,
        rgb(var(--color-surface-variant) / 0.5) 100%);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
}
.specular-card:hover::before {
    background: linear-gradient(180deg,
        rgb(var(--color-primary) / 0.55) 0%,
        rgb(var(--color-secondary) / 0.25) 100%);
}

/* ──── Specular Card (top-line shimmer variant) ──── */
.card-specular-top {
    position: relative;
}
.card-specular-top::before,
.specular-card.specular-line::before {
    content: '';
    position: absolute;
    top: 0;
    left: 10%;
    right: 10%;
    height: 1px;
    background: linear-gradient(90deg,
        transparent,
        rgb(var(--color-primary-fixed-dim) / 0.45) 50%,
        transparent);
    opacity: 0;
    transition: opacity 0.25s ease-in-out;
}
.card-specular-top:hover::before,
.specular-card.specular-line:hover::before {
    opacity: 1;
}

/* ──── Staggered Entrance Reveal Animations ──── */
.reveal-card {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                transform 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                border-color 0.2s ease,
                background-color 0.2s ease,
                box-shadow 0.2s ease;
    transition-delay: calc(var(--stagger, 0) * 110ms);
    will-change: opacity, transform;
}

.reveal-card.is-revealed {
    opacity: 1;
    transform: translateY(0);
}

.reveal-timeline {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity 0.85s cubic-bezier(0.16, 1, 0.3, 1),
                transform 0.85s cubic-bezier(0.16, 1, 0.3, 1);
    transition-delay: calc(var(--stagger, 0) * 140ms);
    will-change: opacity, transform;
}

.reveal-timeline.is-revealed {
    opacity: 1;
    transform: translateY(0);
}

.reveal-timeline .timeline-node {
    transform: scale(0.5);
    opacity: 0;
    transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1),
                opacity 0.6s ease;
    transition-delay: calc(var(--stagger, 0) * 140ms + 100ms);
}

.reveal-timeline.is-revealed .timeline-node {
    transform: scale(1);
    opacity: 1;
}

@media (prefers-reduced-motion: reduce) {
    .reveal-card,
    .reveal-timeline,
    .reveal-timeline .timeline-node {
        opacity: 1 !important;
        transform: none !important;
        transition: none !important;
    }
}
</style>

<!-- Tailwind CDN Script & Dynamic Configuration -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "primary": "rgb(var(--color-primary) / <alpha-value>)",
            "surface-dim": "rgb(var(--color-surface-dim) / <alpha-value>)",
            "on-primary-fixed-variant": "rgb(var(--color-on-primary-fixed-variant) / <alpha-value>)",
            "surface-container": "rgb(var(--color-surface-container) / <alpha-value>)",
            "outline-variant": "rgb(var(--color-outline-variant) / <alpha-value>)",
            "inverse-primary": "rgb(var(--color-inverse-primary) / <alpha-value>)",
            "on-primary-container": "rgb(var(--color-on-primary-container) / <alpha-value>)",
            "inverse-on-surface": "rgb(var(--color-inverse-on-surface) / <alpha-value>)",
            "tertiary-fixed": "rgb(var(--color-tertiary-fixed) / <alpha-value>)",
            "secondary-fixed-dim": "rgb(var(--color-secondary-fixed-dim) / <alpha-value>)",
            "error": "rgb(var(--color-error) / <alpha-value>)",
            "surface-container-high": "rgb(var(--color-surface-container-high) / <alpha-value>)",
            "on-tertiary": "rgb(var(--color-on-tertiary) / <alpha-value>)",
            "tertiary-container": "rgb(var(--color-tertiary-container) / <alpha-value>)",
            "inverse-surface": "rgb(var(--color-inverse-surface) / <alpha-value>)",
            "on-tertiary-container": "rgb(var(--color-on-tertiary-container) / <alpha-value>)",
            "outline": "rgb(var(--color-outline) / <alpha-value>)",
            "on-primary": "rgb(var(--color-on-primary) / <alpha-value>)",
            "on-tertiary-fixed": "rgb(var(--color-on-tertiary-fixed) / <alpha-value>)",
            "on-secondary-fixed": "rgb(var(--color-on-secondary-fixed) / <alpha-value>)",
            "background": "rgb(var(--color-background) / <alpha-value>)",
            "secondary-container": "rgb(var(--color-secondary-container) / <alpha-value>)",
            "surface-variant": "rgb(var(--color-surface-variant) / <alpha-value>)",
            "surface-container-highest": "rgb(var(--color-surface-container-highest) / <alpha-value>)",
            "on-surface-variant": "rgb(var(--color-on-surface-variant) / <alpha-value>)",
            "on-tertiary-fixed-variant": "rgb(var(--color-on-tertiary-fixed-variant) / <alpha-value>)",
            "on-background": "rgb(var(--color-on-background) / <alpha-value>)",
            "surface-container-lowest": "rgb(var(--color-surface-container-lowest) / <alpha-value>)",
            "surface-container-low": "rgb(var(--color-surface-container-low) / <alpha-value>)",
            "surface": "rgb(var(--color-surface) / <alpha-value>)",
            "on-error": "rgb(var(--color-on-error) / <alpha-value>)",
            "tertiary-fixed-dim": "rgb(var(--color-tertiary-fixed-dim) / <alpha-value>)",
            "on-secondary-container": "rgb(var(--color-on-secondary-container) / <alpha-value>)",
            "error-container": "rgb(var(--color-error-container) / <alpha-value>)",
            "primary-fixed": "rgb(var(--color-primary-fixed) / <alpha-value>)",
            "secondary-fixed": "rgb(var(--color-secondary-fixed) / <alpha-value>)",
            "primary-container": "rgb(var(--color-primary-container) / <alpha-value>)",
            "primary-fixed-dim": "rgb(var(--color-primary-fixed-dim) / <alpha-value>)",
            "on-error-container": "rgb(var(--color-on-error-container) / <alpha-value>)",
            "secondary": "rgb(var(--color-secondary) / <alpha-value>)",
            "tertiary": "rgb(var(--color-tertiary) / <alpha-value>)",
            "on-primary-fixed": "rgb(var(--color-on-primary-fixed) / <alpha-value>)",
            "on-secondary-fixed-variant": "rgb(var(--color-on-secondary-fixed-variant) / <alpha-value>)",
            "surface-bright": "rgb(var(--color-surface-bright) / <alpha-value>)",
            "on-surface": "rgb(var(--color-on-surface) / <alpha-value>)",
            "on-secondary": "rgb(var(--color-on-secondary) / <alpha-value>)",
            "surface-tint": "rgb(var(--color-surface-tint) / <alpha-value>)"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "space-sm": "0.5rem",
            "space-xl": "2.5rem",
            "space-xs": "0.25rem",
            "space-2xl": "4rem",
            "margin-mobile": "1.25rem",
            "gutter": "1.5rem",
            "space-lg": "1.5rem",
            "gutter-mobile": "1rem",
            "margin": "3rem",
            "space-md": "1rem"
          },
          "fontFamily": {
            "headline-lg-mobile": ["Space Grotesk"],
            "code-sm": ["JetBrains Mono"],
            "label-sm": ["JetBrains Mono"],
            "body-sm": ["Inter"],
            "body-md": ["Inter"],
            "headline-xl-mobile": ["Space Grotesk"],
            "headline-md": ["Space Grotesk"],
            "code-md": ["JetBrains Mono"],
            "headline-xl": ["Space Grotesk"],
            "code-lg": ["JetBrains Mono"],
            "headline-sm": ["Space Grotesk"],
            "headline-lg": ["Space Grotesk"],
            "label-md": ["Inter"],
            "body-lg": ["Inter"]
          },
          "fontSize": {
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "code-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "500" }],
            "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "600" }],
            "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
            "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-xl-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "code-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }],
            "headline-xl": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "code-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "label-md": ["13px", { "lineHeight": "16px", "fontWeight": "500" }],
            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
          }
        }
      }
    }
</script>
