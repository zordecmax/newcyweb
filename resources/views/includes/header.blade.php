<header class="header navbar-fixed-top">
  <nav class="navbar navbar-expand-xl">
    <div class="container justify-content-between">
      <!-- Логотип -->
      <a class="navbar-brand" href="#">
        Cyprusweb.eu
      </a>

      <div class="d-flex align-items-center order-2 order-xl-3">
        <!-- Навигация -->
        <div class="d-flex align-items-center">
          <div class="d-none d-md-flex">
            <i class="bi bi-phone lh-1 text-black"></i>
            <a class="text-black hover-red ms-1" href="tel:+35799345184">+357 993 451 84</a>
          </div>
          <div class="dropdown ms-3 mt-2 mt-lg-0 d-flex align-items-center justify-content-center flex-column">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="navbarDropdownMenuLink"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          {{-- <button class="btn-discount ms-3 d-none d-md-block">GET DISCOUNT</button> --}}
        </div>
        <!-- Кнопка бургер для адаптивного меню -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>


      <div class="collapse navbar-collapse justfy-content-center justify-content-lg-end order-3 order-xl-2" id="navbarNav">
        <ul class="navbar-nav navbar-center">
          <li class="nav-item">
            <a class="nav-link" href="#">{{(__('main.home'))}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">{{(__('main.portfolio'))}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#price">{{(__('main.prices'))}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">{{(__('main.contact'))}}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>