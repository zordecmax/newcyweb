    <nav class="navbar navbar-expand-lg py-3 fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">CYPRUSWEB</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }} mx-lg-4" aria-current="page"
                            href="{{ route('home') }}">{{ __('main.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('services') ? 'active' : '' }} mx-lg-4" aria-current="page"
                            href="{{ route('services') }}">{{ __('main.services') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('portfolio') ? 'active' : '' }} mx-lg-4"
                            href="{{ route('portfolio') }}">{{ __('main.portfolio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }} mx-lg-4"
                            href="{{ route('about') }}">{{ __('main.about') }}</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="{{ route('contacts.index') }}" class="btn btn-lg btn-primary rounded-pill" type="submit">
                        {{ __('main.contacts') }}
                    </a>
                </form>
            </div>

            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="dropdown ms-3 d-flex align-items-center justify-content-center flex-column">
                    <button class="btn btn-secondary dropdown-toggle text-primary" type="button"
                        id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        {{ LaravelLocalization::getCurrentLocale() }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if ($localeCode !== LaravelLocalization::getCurrentLocale())
                                <a class="dropdown-item"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $localeCode }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </nav>
