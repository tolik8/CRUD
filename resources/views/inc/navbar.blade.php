<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                       href="{{ route('home') }}">{{ __('main.home_page') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">{{ __('main.categories') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pets.index') }}">{{ __('pets.pets') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('main.tags') }}</a>
                </li>
            </ul>
            @foreach (Config::get('app.locales') as $key => $locale)
                @if ($key === Lang::getLocale())
                    <span class="border-bottom border-4 border-primary mx-2">{{ $locale }}</span>
                @else
                    <span class="mx-2"><a href="{{ route('set_locale', $key) }}"
                                          class="text-decoration-none">{{ $locale }}</a></span>
                @endif
            @endforeach
        </div>
    </div>
</nav>
