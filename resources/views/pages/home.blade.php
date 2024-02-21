@extends('layouts.app')
@section('title')
    {{ __('meta.home_meta_title') }}
@endsection
@section('description')
    {{ __('meta.home_meta_description') }}
@endsection

@section('content')
    <!-- hero -->
    <section class="hero-section hero-section-margin-top">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-center flex-column h-100">
                <div class="hero-content text-center">
                    <h1 class="fw-bold mb-3">
                        {{ __('main.home_title') }}
                    </h1>
                    <p>
                        {{ __('main.home_subtitle') }}
                    </p>
                    {{-- <a href="#">Our services</a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- hero -->

    <!-- services -->
    <section class="services py-5">
        <x-services-block :services="$services" />
    </section>
    <!-- services -->

    <!-- stack -->
    <section class="stack py-5">
        <div class="container">
            <h2 class="text-center mb-5">{{ __('main.home_skils_title') }}</h2>
            <div class="row px-5 g-3">
                <div class="col-12 col-md-6">
                    <div class="stack-item">
                        <h3 class="mb-3">Frontend Development</h3>
                        <div>
                            <span class="badge text-bg-primary fs-5 px-4 py-2 rounded-pill mb-2">HTML</span>
                            <span class="badge text-bg-primary fs-5 px-4 py-2 rounded-pill mb-2">CSS</span>
                            <span class="badge text-bg-primary fs-5 px-4 py-2 rounded-pill mb-2">JavaScript</span>
                            <span class="badge text-bg-primary fs-5 px-4 py-2 rounded-pill mb-2">TypeScript</span>
                            <span class="badge text-bg-primary fs-5 px-4 py-2 rounded-pill mb-2">React</span>
                            <span class="badge text-bg-primary fs-5 px-4 py-2 rounded-pill mb-2">Next JS</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="stack-item">
                        <h3 class="mb-3">Backend Development</h3>
                        <div>
                            <span class="badge text-bg-secondary text-white fs-5 px-4 py-2 rounded-pill mb-2">PHP</span>
                            <span class="badge text-bg-secondary text-white fs-5 px-4 py-2 rounded-pill mb-2">Laravel</span>
                            <span class="badge text-bg-secondary text-white fs-5 px-4 py-2 rounded-pill mb-2">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stack -->

    <!-- why -->
    <section class="why py-5">
        <div class="container">
            <h2 class="text-center mb-5">{{ __('main.home_why_title') }}</h2>
            <div class="row g-4">
                @foreach ($advantages as $advantage)
                    <div class="col-12 col-md-6">
                        <div class="d-flex flex-column  align-items-center bg-white shadow-sm p-5 rounded-5 h-100">
                            <i class="bi {{ $advantage->bootstrap_icon }} text-primary fs-1"></i>
                            <p class="text-center fs-5 mt-2">
                                {{ $advantage->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- why -->

    <!-- our clients -->
    <section class="our-clients py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our clients said</h2>
            <div class="row g-4">
                <div class="col-12 col-lg-4">
                    <div class="card px-3 py-5 bg-white shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://demo-basic.adminkit.io/img/avatars/avatar-4.jpg" alt="Christina Mason"
                                class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title mb-0">Markus Ziegler</h5>
                            <div class="text-muted mb-2">Pakadoo</div>
                        </div>
                        <div class="card-body">
                            <p>
                                “We successfully employed a senior developer from Kodeson.
                                Everything went great and we're very satisfied with their
                                service. The pricing and deadlines they set were clear, and so
                                was the process - a really good experience! ”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card px-3 py-5 bg-white shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://demo-basic.adminkit.io/img/avatars/avatar-4.jpg" alt="Christina Mason"
                                class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title mb-0">Markus Ziegler</h5>
                            <div class="text-muted mb-2">Pakadoo</div>
                        </div>
                        <div class="card-body">
                            <p>
                                “We successfully employed a senior developer from Kodeson.
                                Everything went great and we're very satisfied with their
                                service. The pricing and deadlines they set were clear, and so
                                was the process - a really good experience! ”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card px-3 py-5 bg-white shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://demo-basic.adminkit.io/img/avatars/avatar-4.jpg" alt="Christina Mason"
                                class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title mb-0">Markus Ziegler</h5>
                            <div class="text-muted mb-2">Pakadoo</div>
                        </div>
                        <div class="card-body">
                            <p>
                                “We successfully employed a senior developer from Kodeson.
                                Everything went great and we're very satisfied with their
                                service. The pricing and deadlines they set were clear, and so
                                was the process - a really good experience! ”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our clients -->

    <x-contact-block />
@endsection
