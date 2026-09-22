<!DOCTYPE html>

<html class="dark" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ __('site.title_contact') }}</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
@include('partials.theme-head')
@include('partials.full-width')
</head>
<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col selection:bg-primary-container selection:text-on-primary-container terminal-grid">

@include('partials.navigation')
@include('partials.hero-globe', ['global' => true])

@php
    $siteSettings = \App\Models\SiteSetting::pluck('value', 'key');
    $emailAddress = $siteSettings['email'] ?? 'kpadjanestor78@gmail.com';
    $phoneNumber = $siteSettings['phone_number'] ?? '+228 96 90 84 92';
    $whatsappNumber = $siteSettings['whatsapp_number'] ?? '+228 91 31 17 05';
    $phoneDigits = preg_replace('/\D+/', '', $phoneNumber);
    $whatsappDigits = preg_replace('/\D+/', '', $whatsappNumber);
    $locationText = $siteSettings['location'] ?? 'Lomé, Togo';
    $githubUrl = $siteSettings['github_url'] ?? 'https://github.com';
    $linkedinUrl = $siteSettings['linkedin_url'] ?? 'https://linkedin.com';
@endphp

<!-- MAIN CONTACT SECTION -->
<main class="flex-grow pt-28 pb-20 px-6 md:px-12">
    <div class="w-full max-w-6xl mx-auto space-y-12">

        <!-- Section Header -->
        <div class="text-center space-y-4 max-w-2xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high border border-outline-variant/40">
                <span class="material-symbols-outlined text-primary text-xs">terminal</span>
                <span class="font-code-sm text-code-sm text-primary font-medium tracking-wide">&gt;_ {{ __('site.communication_channel') }}</span>
            </div>
            <h1 class="font-headline-lg md:font-headline-xl text-headline-lg md:text-headline-xl text-on-surface font-bold tracking-tight">
                {{ __('site.contact_title') }} <span class="text-primary">{{ __('site.project') }}</span>
            </h1>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                {{ __('site.contact_intro') }}
            </p>
        </div>

        <!-- 2-Column Bento Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start w-full">

            <!-- LEFT COLUMN: Contact Form (7 cols) -->
            <div class="lg:col-span-7 reveal-card specular-card bg-surface-container-low rounded-xl border border-outline-variant/30 overflow-hidden shadow-2xl relative">
                
                <!-- Terminal Shell Header -->
                <div class="bg-surface-container-lowest px-5 py-3.5 border-b border-outline-variant/30 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-error/80 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-secondary/80 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
                        <span class="font-code-sm text-code-sm text-on-surface-variant ml-2 font-mono">nouveau_message.sh</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="font-code-sm text-code-sm text-emerald-400 font-semibold uppercase tracking-wider">{{ __('site.ready') }}</span>
                    </div>
                </div>

                <!-- Flash Messages -->
                @if(session('contact_success'))
                <div class="mx-6 mt-6 rounded-lg border border-emerald-500/40 bg-emerald-500/10 p-4 font-code-sm text-code-sm text-emerald-300 md:mx-8 flex items-center gap-3">
                    <span class="material-symbols-outlined text-emerald-400 text-xl">check_circle</span>
                    <div>
                        <strong class="block text-emerald-200 font-semibold">{{ __('site.sent_success') }}</strong>
                        <span>{{ __(session('contact_success')) }} {{ __('site.reply_24h_notice') }}</span>
                    </div>
                </div>
                @endif

                @if($errors->any())
                <div class="mx-6 mt-6 rounded-lg border border-red-500/40 bg-red-500/10 p-4 text-sm text-red-300 md:mx-8">
                    <div class="flex items-center gap-2 font-semibold text-red-200 mb-2">
                        <span class="material-symbols-outlined text-red-400 text-base">error</span>
                        <span>{{ __('site.correct_errors') }}</span>
                    </div>
                    <ul class="list-inside list-disc space-y-1 font-body-sm text-body-sm">
                        @foreach($errors->all() as $error)
                        <li>{{ __($error) }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Form -->
                <form action="{{ route('contact.store') }}" method="POST" class="p-6 md:p-8 space-y-6" id="contactForm">
                    @csrf

                    <!-- Name and Email Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Full Name Field -->
                        <div class="space-y-2">
                            <label class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="fullname">
                                <span class="text-primary font-bold">&gt;</span>
                                <span>{{ __('site.full_name') }}</span>
                                <span class="text-error font-mono">*</span>
                            </label>
                            <input class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg px-3.5 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all @error('name') border-red-500 @enderror" id="fullname" name="name" value="{{ old('name') }}" placeholder="{{ __('site.full_name_placeholder') }}" required type="text"/>
                            @error('name')
                            <p class="text-xs text-red-400 mt-1 font-code-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="email">
                                <span class="text-primary font-bold">&gt;</span>
                                <span>{{ __('site.email') }}</span>
                                <span class="text-error font-mono">*</span>
                            </label>
                            <input class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg px-3.5 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('site.email_placeholder') }}" required type="email"/>
                            @error('email')
                            <p class="text-xs text-red-400 mt-1 font-code-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone Field -->
                    <div class="space-y-2">
                        <label class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="phone">
                            <span class="text-primary font-bold">&gt;</span>
                            <span>{{ __('site.phone') }}</span>
                            <span class="text-xs text-outline">({{ app()->getLocale() === 'en' ? 'optional' : 'facultatif' }})</span>
                        </label>
                        <input class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg px-3.5 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all @error('phone') border-red-500 @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="{{ __('site.phone_placeholder') }}" type="tel" autocomplete="tel"/>
                        @error('phone')
                        <p class="text-xs text-red-400 mt-1 font-code-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Project Type Selector -->
                    <div class="space-y-2">
                        <label class="block font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5">
                            <span class="text-primary font-bold">&gt;</span>
                            <span>{{ __('site.project_type') }}</span>
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Backend & Architecture" @checked(old('project_type', 'Backend & Architecture') === 'Backend & Architecture')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    Backend Arch
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Blockchain / Web3" @checked(old('project_type') === 'Blockchain / Web3')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    Blockchain
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Recrutement" @checked(old('project_type') === 'Recrutement')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    {{ __('site.project_recruitment') }}
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="project_type" type="radio" value="Autre" @checked(old('project_type') === 'Autre')/>
                                <div class="border border-outline-variant/40 rounded-lg px-2.5 py-2 bg-surface-container-lowest text-center peer-checked:border-primary peer-checked:bg-surface-container-high peer-checked:text-primary text-on-surface-variant font-code-sm text-code-sm transition-colors">
                                    {{ __('site.project_other') }}
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="space-y-2">
                        <label class="font-code-sm text-code-sm text-on-surface-variant flex items-center gap-1.5" for="message">
                            <span class="text-primary font-bold">&gt;</span>
                            <span>{{ __('site.message_specs') }}</span>
                            <span class="text-error font-mono">*</span>
                        </label>
                        <textarea class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-lg p-3.5 font-body-md text-body-md text-on-surface placeholder:text-outline/60 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-y min-h-[140px] @error('message') border-red-500 @enderror" id="message" name="message" placeholder="{{ __('site.message_placeholder') }}" required minlength="20" rows="5">{{ old('message') }}</textarea>
                        <div class="flex items-center justify-between text-xs text-on-surface-variant font-code-sm">
                            <span>{{ __('site.minimum_20') }}</span>
                            @error('message')
                            <span class="text-red-400 font-code-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Form Footer with Submit Action -->
                    <div class="pt-3 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-outline-variant/20">
                        <div class="flex items-center gap-2 text-on-surface-variant font-code-sm text-code-sm">
                            <span class="material-symbols-outlined text-emerald-400 text-base">mail</span>
                            <span>{{ __('site.reply_24h') }}</span>
                        </div>
                        <button id="contactSubmit" class="w-full sm:w-auto bg-secondary text-on-secondary font-label-md text-label-md font-bold px-6 py-3 rounded-lg hover:bg-secondary-container transition-all duration-200 active:scale-95 shadow-md flex items-center justify-center gap-2 group cursor-pointer disabled:cursor-wait disabled:opacity-70" type="submit">
                            <span id="contactSubmitLabel">{{ __('site.send_message') }}</span>
                            <span id="contactSubmitSpinner" class="hidden h-4 w-4 animate-spin rounded-full border-2 border-on-secondary/30 border-t-on-secondary" aria-hidden="true"></span>
                            <span id="contactSubmitIcon" class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">send</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- RIGHT COLUMN: Direct Coordonnées & Context (5 cols) -->
            <div class="lg:col-span-5 space-y-6">

                <!-- Availability Card -->
                <div class="specular-card bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-3 relative overflow-hidden">
                    <div class="flex items-center gap-3">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>
                        <span class="font-code-sm text-code-sm text-emerald-400 font-semibold tracking-wide">{{ __('site.available') }}</span>
                    </div>
                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                        {{ __('site.open_opportunities') }}
                    </h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        {{ __('site.availability_desc') }}
                    </p>
                    <div class="pt-2 flex items-center gap-2 text-xs font-code-sm text-primary">
                        <span class="material-symbols-outlined text-sm">schedule</span>
                        <span>{{ __('site.remote_hybrid') }}</span>
                    </div>
                </div>

                <!-- Direct Coordinates Box -->
                <div class="reveal-card specular-card bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-5">
                    <div class="font-code-sm text-code-sm text-primary flex items-center gap-2 pb-2 border-b border-outline-variant/20">
                        <span class="material-symbols-outlined text-sm">hub</span>
                        <span class="font-semibold uppercase tracking-wider">{{ __('site.direct_coordinates') }}</span>
                    </div>

                    <!-- Email with Copy Action -->
                    <div class="flex items-center justify-between group">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-lg">mail</span>
                            </div>
                            <div class="min-w-0">
                                <span class="block font-code-sm text-code-sm text-on-surface-variant">{{ __('site.direct_email') }}</span>
                                <a class="font-body-md text-body-md text-on-surface font-medium hover:text-primary transition-colors block truncate" href="mailto:{{ $emailAddress }}">
                                    {{ $emailAddress }}
                                </a>
                            </div>
                        </div>
                        <button class="p-2 rounded-lg border border-outline-variant/30 bg-surface-container hover:border-primary text-on-surface-variant hover:text-primary transition-colors text-xs flex items-center justify-center shrink-0 ml-2 font-code-sm cursor-pointer" id="copyBtn" onclick="copyEmail('{{ $emailAddress }}')" title="{{ __('site.copy_email') }}" type="button">
                            <span class="material-symbols-outlined text-sm" id="copyIcon">content_copy</span>
                        </button>
                    </div>

                    <!-- Phone & WhatsApp -->
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-secondary shrink-0">
                            <span class="material-symbols-outlined text-lg">call</span>
                        </div>
                        <div class="space-y-1">
                            <span class="block font-code-sm text-code-sm text-on-surface-variant">{{ __('site.phone_whatsapp') }}</span>
                            <div class="font-body-md text-body-md text-on-surface font-medium space-y-0.5">
                                <a class="block hover:text-primary transition-colors" href="tel:+{{ $phoneDigits }}">
                                    {{ __('site.call') }} : {{ $phoneNumber }}
                                </a>
                                <a class="inline-flex items-center gap-1.5 text-emerald-400 hover:text-emerald-300 transition-colors text-sm" href="https://wa.me/{{ $whatsappDigits }}" target="_blank" rel="noopener noreferrer">
                                    <span>WhatsApp : {{ $whatsappNumber }}</span>
                                    <span class="material-symbols-outlined text-xs">north_east</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Geographical Anchor -->
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined text-lg">location_on</span>
                        </div>
                        <div>
                            <span class="block font-code-sm text-code-sm text-on-surface-variant">{{ __('site.location_timezone') }}</span>
                            <span class="font-body-md text-body-md text-on-surface font-medium">
                                {{ $locationText }} <span class="text-on-surface-variant text-sm font-normal">(GMT+0)</span>
                            </span>
                        </div>
                    </div>

                    <!-- Professional Links -->
                    <div class="pt-3 border-t border-outline-variant/20 flex flex-wrap items-center gap-3">
                        <span class="font-code-sm text-xs text-on-surface-variant mr-1">{{ __('site.networks') }}</span>
                        @if(!empty($siteSettings['github_url']))
                        <a class="px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 font-code-sm text-xs" href="{{ $siteSettings['github_url'] }}" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-sm">code</span>
                            <span>GitHub</span>
                        </a>
                        @endif
                        @if(!empty($siteSettings['linkedin_url']))
                        <a class="px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-primary text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 font-code-sm text-xs" href="{{ $siteSettings['linkedin_url'] }}" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-sm">link</span>
                            <span>LinkedIn</span>
                        </a>
                        @endif
                        @if(isset($socialLinks))
                        @foreach($socialLinks as $sLink)
                        <a class="px-3 py-1.5 rounded-lg bg-surface-container border border-outline-variant/40 hover:border-emerald-400 text-on-surface-variant hover:text-emerald-400 transition-colors flex items-center gap-1.5 font-code-sm text-xs" href="{{ $sLink->url }}" target="_blank" rel="noopener noreferrer">
                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                            <span>{{ $sLink->label }}</span>
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>

                <!-- Process Card: Comment se déroule l'échange -->
                <div class="reveal-card specular-card bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 space-y-4">
                    <div class="font-code-sm text-code-sm text-on-surface flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary text-base">route</span>
                            <span class="font-semibold uppercase tracking-wider">{{ __('site.process_title') }}</span>
                        </div>
                        <span class="text-xs font-code-sm text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-2 py-0.5 rounded flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">mail</span>
                            <span>{{ __('site.process_email_badge') }}</span>
                        </span>
                    </div>
                    <ol class="space-y-3 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2.5">
                            <span class="font-code-sm text-xs font-bold text-primary px-1.5 py-0.5 rounded bg-surface-container-high shrink-0 mt-0.5">01</span>
                            <span><strong>{{ __('site.process_step1_title') }}</strong> {{ __('site.process_step1_desc') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="font-code-sm text-xs font-bold text-primary px-1.5 py-0.5 rounded bg-surface-container-high shrink-0 mt-0.5">02</span>
                            <span><strong>{{ __('site.process_step2_title') }}</strong> {{ __('site.process_step2_desc') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="font-code-sm text-xs font-bold text-primary px-1.5 py-0.5 rounded bg-surface-container-high shrink-0 mt-0.5">03</span>
                            <span><strong>{{ __('site.process_step3_title') }}</strong> {{ __('site.process_step3_desc') }}</span>
                        </li>
                    </ol>
                </div>

            </div>

        </div>

    </div>
</main>

<!-- FOOTER -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-10 flex flex-col md:flex-row items-center justify-between gap-6 w-full">
        <p class="font-body-sm text-body-sm text-on-surface-variant">
            © {{ date('Y') }} {{ $siteSettings['footer_text'] ?? 'Nestor KPADJA · Lomé, Togo' }}
        </p>
        <div class="flex items-center flex-wrap justify-center gap-6 font-code-sm text-code-sm">
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
            <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('home') }}">{{ __('site.home') }}</a>
            <a class="text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('about') }}">{{ __('site.about') }}</a>
        </div>
    </div>
</footer>

<!-- Copy Email Script -->
<script>
    document.getElementById('contactForm')?.addEventListener('submit', function () {
        const button = document.getElementById('contactSubmit');
        const label = document.getElementById('contactSubmitLabel');
        const spinner = document.getElementById('contactSubmitSpinner');
        const icon = document.getElementById('contactSubmitIcon');
        if (!button) return;
        button.disabled = true;
        label.textContent = '{{ app()->getLocale() === 'en' ? 'Sending…' : 'Envoi en cours…' }}';
        spinner?.classList.remove('hidden');
        icon?.classList.add('hidden');
    });

    function copyEmail(email) {
        if (!navigator.clipboard) return;
        navigator.clipboard.writeText(email).then(() => {
            const btn = document.getElementById('copyBtn');
            const icon = document.getElementById('copyIcon');
            if (!btn || !icon) return;
            
            icon.textContent = 'check';
            icon.classList.add('text-emerald-400');
            btn.classList.add('border-emerald-400');

            setTimeout(() => {
                icon.textContent = 'content_copy';
                icon.classList.remove('text-emerald-400');
                btn.classList.remove('border-emerald-400');
            }, 2000);
        });
    }
</script>

</body></html>
