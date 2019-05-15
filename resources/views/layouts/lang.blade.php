<div class="lang text-right">
@foreach (Config::get('app.locales') as $key => $locale)
@if ($key === Lang::getLocale())
    <span class="active">{{ $locale }}</span>
@else
    <span><a href="/setlocale/{{ $key }}">{{ $locale }}</a></span>
@endif
@endforeach
</div>