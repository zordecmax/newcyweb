@extends('layouts.app')
@section('title')
@endsection
@section('description')
@endsection

@section('content')
    <section class="hero-section-margin-top">
        <div class="container">
            <div class="row g-2 g-lg-5 mb-5 portfolio-item">
                <div class="col-12 col-lg-4 portfolio-img">
                    <img class="img-fluid rounded-5" src="{{ asset('images/FLY.jpg') }}" alt="FLY" />
                </div>
                <div class="col-12 col-lg-8 portfolio-content">
                    <div class="ms-0 ms-lg-5">
                        <div class="text-muted mb-2">TFS</div>
                        <h2 class="mb-3">FLY WEB</h2>
                        <div>
                            <h3 class="mb-2 fw-bold fs-5">Team:</h3>
                            <p>3 software engineers</p>
                        </div>
                        <div>
                            <h3 class="mb-2 fw-bold fs-5">Teach:</h3>
                            <p>HTML, CSS, JavaScript, PHP, Laravel, MySQL</p>
                        </div>
                        <div>
                            <h3 class="mb-2 fw-bold fs-5">Description:</h3>
                            <p>This web application is a powerful tool for airline ticket
                                sales agents. Built using cutting-edge web development technologies, it provides unique
                                capabilities to analyze, manage and optimize the sales process in the airline industry.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-2 g-lg-5 mb-5 portfolio-item">
                <div class="col-12 col-lg-4 portfolio-img">
                    <img class="img-fluid rounded-5" src="{{ asset('images/TAXI.jpg') }}" alt="TAXI" />
                </div>
                <div class="col-12 col-lg-8 portfolio-content">
                    <div class="portfolio-content__container">
                        <div class="text-muted mb-2">VTX</div>
                        <h2 class="mb-3">VIPTAXI</h2>
                        <div>
                            <h3 class="mb-2 fw-bold fs-5">Team:</h3>
                            <p>2 software engineers</p>
                        </div>
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
            </div>
        </div>
    </section>
    <x-contact-block />
@endsection
