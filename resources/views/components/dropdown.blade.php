<div class="dropdown ms-3 d-flex align-items-center justify-content-center flex-column">
    <button class="btn btn-secondary dropdown-toggle text-primary" type="button" id="navbarDropdownMenuLink"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ LaravelLocalization::getCurrentLocale() }}
    </button>
    <div class="dropdown-menu menu-language" aria-labelledby="navbarDropdownMenuLink">
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if ($localeCode !== LaravelLocalization::getCurrentLocale())
                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $localeCode }}
                </a>
            @endif
        @endforeach
    </div>
</div>
