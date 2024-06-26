@extends('layouts.app')
@section('title')
    {{ __('meta.home_meta_title') }}
@endsection
@section('description')
    {{ __('meta.home_meta_description') }}
@endsection
@section('keywords')
    {{ __('meta.home_meta_keywords') }}
@endsection

@section('content')
<link href="/css/home/index.css" rel="stylesheet">
<script src="/js/home/index.js" defer></script>
    <!-- hero -->
    <section class="hero-section area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container h-100">
            <div class="d-flex justify-content-center flex-column" style="min-height: 100vh;">
                <div class="hero-content text-start d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column">
                        <h1 class="fw-bold mb-3 home-title">
                            {{ __('main.home_title') }}
                        </h1>
                        <p>
                            {{ __('main.home_subtitle') }}
                        </p>
                        <div class="d-inline-block" style="z-index: 1000;">
                            <a href="{{ route('contacts.index') }}" class="btn btn-lg btn-primary rounded-pill border-white custom-border" type="submit">
                                {{ __('main.send-request') }}
                            </a>
                        </div>
                    </div>
                    {{-- <a href="#">Our services</a> --}}
                </div>
                
            </div>
        </div>


    </section>
    <!-- hero -->

    <!-- services -->
    <section class="services py-5">
        <x-services-block :services="$services" />
        <div class="col-12 pt-4">
            <div class="d-flex align-items-center justify-content-center w-100">
                <a href="{{ route('services') }}" class="btn btn-lg btn-primary rounded-pill py-3 px-5" type="submit">
                    {{ __('main.home_btn_all_services') }}
                </a>
            </div>
        </div>
    </section>
    <!-- services -->

    <!-- stack -->
    <section class="stack py-5">
        <div class="container">
            <h2 class="text-center mb-5">{{ __('main.home_skils_title') }}</h2>
            <div class="d-flex justify-content-around row">
                <x-home.technology/>
            </div>
        </div>
    </section>

    <!-- what get -->
    <x-home.what-get />

    <!-- stack -->
    <x-home.example-project :projects="$projects" />

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
            <h2 class="text-center mb-5">{{__('main.clients_said') }}</h2>
            <div class="row g-4">
                @foreach ($clients as $client)
                    <div class="col-12 col-lg-4">
                        <div class="card px-3 py-5 bg-white shadow-sm h-100">
                            <div class="card-body text-center">
                                {{-- <img src="https://demo-basic.adminkit.io/img/avatars/avatar-4.jpg" alt="Christina Mason"
                                class="img-fluid rounded-circle mb-2" width="128" height="128" /> --}}
                                <h5 class="card-title mb-0">
                                    {{ $client->getTranslatedAttribute('name', App::getLocale(), 'fallbackLocale') }}</h5>
                                {{-- <div class="text-muted mb-2">Pakadoo</div> --}}
                            </div>
                            <div class="card-body">
                                <p>
                                    {{ $client->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-home.page-prices :page="$page" />

    <!-- our clients -->
    <x-home.faq :questions="$questions" />
    <x-contact-block />
@endsection
