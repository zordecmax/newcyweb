    <nav class="navbar navbar-expand-lg py-3 fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">CYPRUSWEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }} mx-lg-4" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('services') ? 'active' : '' }} mx-lg-4" aria-current="page"
                            href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('portfolio') ? 'active' : '' }} mx-lg-4"
                            href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }} mx-lg-4"
                            href="{{ route('about') }}">About Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="{{ route('contacts.index') }}" class="btn btn-lg btn-primary rounded-pill" type="submit">
                        Contacts
                    </a>
                </form>
            </div>
        </div>
    </nav>
