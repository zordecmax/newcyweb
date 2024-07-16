@extends('layouts.app')
@section('title')
    {{ __('meta.portfolio_meta_title') }}
@endsection
@section('description')
    {{ __('meta.home_meta_description') }}
@endsection
@section('keywords')
    {{ __('meta.portfolio_meta_keywords') }}
@endsection

@section('content')
<link href="/css/portfolio/index.css" rel="stylesheet">
<script src="/js/portfolio/index.js" defer></script>
    <section class="hero-section-margin-top">
        <div class="container">
            @foreach ($projects as $project)
                <div class="row g-2 g-lg-5 mb-5 portfolio-item">
                    <div class="col-12 col-lg-4 portfolio-img justify-content-center">
                     <div class="card example-project-size bg-white shadow-sm flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body d-flex align-items-start justify-content-center p-0">
                                <img class="img-fluid" src="{{ Voyager::image($project->image_url) }}" alt="{{ $project->name }}" />
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="card-body d-flex align-items-center justify-content-center p-0">
                                <a href="#" class="btn btn-primary view-details" data-image="{{ Voyager::image($project->image_url) }}"><i class="bi bi-hand-index-thumb-fill fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <div class="col-12 col-lg-8 portfolio-content">
                        <div class="ms-0 ms-lg-5">
                            <div class="text-muted mb-2">
                                {{ $project->getTranslatedAttribute('client', App::getLocale(), 'fallbackLocale') }}
                            </div>
                            <h2 class="mb-3">{{ $project->title }}</h2>
                            <div>
                                <h3 class="mb-2 fw-bold fs-5">{{ __('main.teach') }}:</h3>
                                <p>{{ $project->technologies }}</p>
                            </div>
                            <div>
                                <h3 class="mb-2 fw-bold fs-5">{{ __('main.description') }}:</h3>
                                <p>{{ $project->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="row g-2 g-lg-5 mb-5 portfolio-item">
                <div class="col-12 col-lg-4 portfolio-img">
                    <img class="img-fluid rounded-5" src="{{ asset('images/TAXI.jpg') }}" alt="TAXI" />
                </div>
                <div class="col-12 col-lg-8 portfolio-content">
                    <div class="portfolio-content__container">
                        <div class="text-muted mb-2">VTX</div>
                        <h2 class="mb-3">VIPTAXI</h2>

                        <div>
                            <h3 class="mb-2 fw-bold fs-5">Team:</h3>
                            <p>HTML, CSS, JavaScript, PHP, Laravel, MySQL</p>
                        </div>
                        <div>
                            <h3 class="mb-2 fw-bold fs-5">Team:</h3>
                            <p>Our web platform is an innovative solution for ordering a taxi
                                online. Built using advanced web development technologies, it provides a reliable and
                                convenient way for our users to navigate the city.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <x-contact-block />
@endsection
