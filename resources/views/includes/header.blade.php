<link href="/css/header/index.css" rel="stylesheet">
    <nav class="navbar navbar-expand-lg py-3 fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
             @if (setting('site.logo'))
                  <img src="{{ asset('/storage/' . setting('site.logo')) }}" alt="Logo"
                    class="header-logo"/>
             @else
                   CYPRUSWEB
             @endif
            </a>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-block d-lg-none">
                    <x-dropdown />
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                 <a class="nav-link header-link {{ Route::is('home') ? 'active' : '' }} mx-lg-4" aria-current="page"
                    href="{{ route('home') }}">{{ __('main.home') }}</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link header-link {{ Route::is('services') ? 'active' : '' }} mx-lg-4" aria-current="page"
                        href="{{ route('services') }}">{{ __('main.services') }}</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link header-link {{ Route::is('portfolio') ? 'active' : '' }} mx-lg-4"
                        href="{{ route('portfolio') }}">{{ __('main.portfolio') }}</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link header-link {{ Route::is('price') ? 'active' : '' }} mx-lg-4"
                         href="{{ route('price') }}">{{ __('main.price') }}</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link header-link {{ Route::is('about') ? 'active' : '' }} mx-lg-4"
                        href="{{ route('about') }}">{{ __('main.about') }}</a>
                 </li>
                 <li>
                     <a href="tel:+35799345184" class="nav-link header-link d-lg-none">{{ __('main.call_now') }}</a>
                 </li>
             </ul>
            <form class="d-flex" role="search">
              <a href="{{ route('contacts.index') }}" class="btn btn-lg btn-primary rounded-pill" type="submit">
               {{ __('main.contacts') }}
              </a>
            </form>
        </div>
         <div class="d-none d-lg-block">
                <x-dropdown />
        </div>
     </div>
</nav>