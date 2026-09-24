<!DOCTYPE html>
<html class="dark" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $certification->title }} — {{ $siteSettings['footer_text'] ?? 'Portfolio' }}</title>
    @include('partials.theme-head')
    @include('partials.full-width')
</head>
<body class="min-h-screen bg-surface text-on-surface antialiased">
@include('partials.navigation')
@include('partials.hero-globe', ['global' => true])
<main class="mx-auto w-full max-w-6xl px-6 pb-20 pt-32 md:px-12">
    <div class="flex items-center justify-between gap-4">
        <a href="{{ route('certifications') }}" class="font-mono text-sm text-primary hover:underline">← {{ __('site.back_certifications') }}</a>
        <a href="{{ route('certifications') }}" aria-label="{{ __('site.close_certification') }}" class="inline-flex items-center gap-2 rounded-lg border border-outline-variant/50 px-4 py-2 font-mono text-sm text-on-surface transition hover:border-primary hover:text-primary">
            {{ __('site.close_certification') }} <span aria-hidden="true" class="text-lg leading-none">×</span>
        </a>
    </div>
    <header class="mt-8 border-b border-outline-variant/30 pb-8">
        <p class="font-mono text-xs uppercase tracking-widest text-secondary">{{ $certification->issuer ?: __('site.certification_singular') }}</p>
        <h1 class="mt-3 font-headline-xl text-headline-xl-mobile font-bold md:text-headline-xl">{{ $certification->title }}</h1>
        @if($certification->description)<p class="mt-4 max-w-3xl text-body-lg leading-7 text-on-surface-variant">{{ $certification->description }}</p>@endif
    </header>
    <section class="mt-8 overflow-hidden rounded-xl border border-outline-variant/40 bg-surface-container-low p-3 md:p-6">
        @if($certification->document_type === 'application/pdf')
            <iframe src="{{ $certification->document_url }}#toolbar=1" title="{{ $certification->title }}" class="h-[75vh] min-h-[600px] w-full rounded-lg bg-white"></iframe>
        @elseif($certification->document_url)
            <img src="{{ $certification->document_url }}" alt="{{ __('site.certificate_alt', ['title' => $certification->title]) }}" class="mx-auto max-h-[80vh] w-auto rounded-lg object-contain">
        @else
            <p class="p-10 text-center text-on-surface-variant">{{ __('site.certification_document_missing') }}</p>
        @endif
    </section>
    @if($certification->credential_url)
        <a href="{{ $certification->credential_url }}" target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex items-center gap-2 font-mono text-sm font-semibold text-primary hover:underline">{{ __('site.verify_this_certification') }} ↗</a>
    @endif
</main>
</body>
</html>
