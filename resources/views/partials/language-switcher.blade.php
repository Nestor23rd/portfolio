@php
    $languageCode = $locale === 'zh-Hans' ? 'ZH' : strtoupper(substr($locale, 0, 2));
@endphp

<details class="language-switcher group relative {{ $mobile ? 'w-full' : 'shrink-0' }}">
    <summary class="flex cursor-pointer list-none items-center justify-center gap-2 rounded-xl border border-outline-variant/40 bg-surface-container-low px-3 py-2 text-xs font-semibold text-on-surface shadow-sm transition hover:border-primary/50 hover:bg-surface-container-high focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary {{ $mobile ? 'w-full' : 'min-w-20' }}">
        <span class="material-symbols-outlined text-[17px] text-primary">language</span>
        <span>{{ $languageCode }}</span>
        <span class="material-symbols-outlined text-[16px] text-on-surface-variant transition-transform group-open:rotate-180">expand_more</span>
    </summary>

    <div class="absolute z-[60] {{ $mobile ? 'right-0 bottom-full mb-2 w-full' : 'right-0 top-full mt-2 w-52' }} overflow-hidden rounded-2xl border border-outline-variant/50 bg-surface-container-lowest p-1.5 shadow-xl shadow-black/15 ring-1 ring-black/5">
        <p class="px-3 pb-1.5 pt-2 font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-outline">{{ __('site.language') }}</p>
        @foreach(config('app.supported_locales') as $availableLocale => $languageName)
            <a href="{{ route('language.switch', $availableLocale) }}" @if($locale === $availableLocale) aria-current="true" @endif
                class="flex items-center justify-between rounded-xl px-3 py-2.5 text-sm transition {{ $locale === $availableLocale ? 'bg-primary/10 font-semibold text-primary' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span>{{ $languageName }}</span>
                @if($locale === $availableLocale)
                    <span class="material-symbols-outlined text-[17px]">check</span>
                @endif
            </a>
        @endforeach
    </div>
</details>
