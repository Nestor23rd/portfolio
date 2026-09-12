<!DOCTYPE html>

<html class="dark" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ __('site.title_certifications') }}</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
@include('partials.theme-head')
@include('partials.full-width')
</head>
<body class="bg-surface text-on-surface font-body-md text-body-md antialiased selection:bg-primary selection:text-on-primary min-h-screen flex flex-col">
@include('partials.navigation')
<main class="min-h-screen w-full px-6 pb-20 pt-28 md:px-12">
    <section class="mx-auto w-full max-w-7xl">
        <div class="mb-10 flex items-center gap-3 border-b border-outline-variant/30 pb-5">
            <span class="font-mono text-sm font-bold text-secondary">&gt;_</span>
            <div>
                <p class="font-mono text-xs uppercase tracking-widest text-secondary">{{ __('site.certifications_tag') }}</p>
                <h1 class="mt-2 font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface font-bold tracking-tight">{{ __('site.certifications_distinctions') }}</h1>
            </div>
        </div>
        <p class="mb-10 max-w-3xl text-body-lg text-body-lg leading-7 text-on-surface-variant">{{ __('site.certifications_intro') }}</p>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            @forelse($certifications as $certification)
                <article class="reveal-card specular-card flex flex-col justify-between rounded-xl border border-outline-variant/40 bg-surface-container-low p-6 transition-all duration-200 hover:border-primary/50 md:p-8" style="--stagger: {{ $loop->index }};">
                    <div>
                        <div class="mb-5 flex items-start justify-between gap-4">
                            <div class="min-w-0">
                                <span class="block truncate font-mono text-xs font-semibold uppercase tracking-wider text-secondary">{{ __($certification->issuer ?: (app()->getLocale() === 'en' ? 'Issuer not specified' : 'Organisme non renseigné')) }}</span>
                                <h2 class="mt-2 font-headline-sm text-headline-sm font-bold leading-tight text-on-surface">{{ __($certification->title) }}</h2>
                            </div>
                            <span class="shrink-0 rounded border border-emerald-500/30 bg-emerald-500/10 px-2.5 py-1 font-mono text-xs font-medium text-emerald-400">{{ __($certification->status) }}</span>
                        </div>
                        <p class="leading-7 text-on-surface-variant font-body-md text-body-md">{{ __($certification->description ?: (app()->getLocale() === 'en' ? 'No description provided.' : 'Aucune description renseignée.')) }}</p>
                        <div class="mt-6 grid gap-3 rounded-lg border border-outline-variant/30 bg-surface-container-lowest p-4 font-mono text-xs text-on-surface-variant sm:grid-cols-2">
                            <div><span class="text-outline">{{ __('site.credential_id') }}</span> {{ $certification->credential_id ?: (app()->getLocale() === 'en' ? 'Not provided' : 'Non renseigné') }}</div>
                            <div><span class="text-outline">{{ __('site.issue_date') }}</span> {{ $certification->issued_at?->format('d/m/Y') ?: (app()->getLocale() === 'en' ? 'Not provided' : 'Non renseignée') }}</div>
                        </div>
                    </div>
                    <div class="mt-6 border-t border-outline-variant/30 pt-5">
                        @if($certification->credential_url)
                            <a href="{{ $certification->credential_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 font-mono text-sm font-semibold text-primary transition hover:text-primary-container hover:underline">{{ __('site.verify_certification') }} <span aria-hidden="true">↗</span></a>
                        @else
                            <span class="font-mono text-xs text-outline">{{ __('site.no_cert_url') }}</span>
                        @endif
                    </div>
                </article>
            @empty
                <div class="rounded-xl border border-dashed border-outline-variant/50 p-10 text-on-surface-variant">{{ __('site.no_certifications') }}</div>
            @endforelse
        </div>
    </section>
<footer class="border-t border-outline-variant/30 bg-surface-container-lowest px-6 py-8 text-center font-mono text-xs text-on-surface-variant">
    <p data-site-footer>© {{ date('Y') }} {{ $siteSettings['footer_text'] ?? 'Nestor KPADJA · Lomé, Togo' }}</p>
    <nav class="mt-4 flex flex-wrap justify-center gap-5">
        @if(!empty($siteSettings['github_url']))
        <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ $siteSettings['github_url'] }}" rel="noopener noreferrer" target="_blank">GitHub</a>
        @endif
        @if(!empty($siteSettings['linkedin_url']))
        <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ $siteSettings['linkedin_url'] }}" rel="noopener noreferrer" target="_blank">LinkedIn</a>
        @endif
        @if(isset($socialLinks))
        @foreach($socialLinks as $sLink)
        <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ $sLink->url }}" rel="noopener noreferrer" target="_blank">{{ $sLink->label }}</a>
        @endforeach
        @endif
        <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
    </nav>
</footer>
</body>
</html>
