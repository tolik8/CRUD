<div class="d-flex justify-content-end mb-1">
    @foreach (Config::get('app.locales') as $key => $locale)
        @if ($key === Lang::getLocale())
            <span class="border-bottom border-4 border-primary mx-2">{{ $locale }}</span>
        @else
            <span class="mx-2"><a href="{{ route('set_locale', $key) }}" class="text-decoration-none">{{ $locale }}</a></span>
        @endif
    @endforeach
</div>
