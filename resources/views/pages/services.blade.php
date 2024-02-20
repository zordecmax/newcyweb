@extends('layouts.app')
@section('title')
@endsection
@section('description')
@endsection

@section('content')
    <section class="hero-section hero-section-margin-top">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">What can we do for you</h2>
            <div class="row g-2 g-lg-4">
                <div class="col-12 col-lg-4">
                    <div class="service-card card bg-white shadow-sm p-3">
                        <div class="card-body">
                            <h5 class="card-title fs-3 mb-3">Analytics</h5>
                            <p class="card-text">
                                We focus on the careful collection and thoughtful analysis of data, relying on which we
                                identify problems, form the goals and business objectives of the project. We conduct
                                interviews with business customers within the client's company in all interested
                                departments.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="service-card card bg-white shadow-sm p-3">
                        <div class="card-body">
                            <h5 class="card-title fs-3 mb-3">Design</h5>
                            <p class="card-text">
                                We form the TOR, break the project into stages, determine priorities, deadlines, budget,
                                technology stack and create a prototype. Our trump card at this stage is the speed of the
                                start!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="service-card card bg-white shadow-sm p-3">
                        <div class="card-body">
                            <h5 class="card-title fs-3 mb-3">Development</h5>
                            <p class="card-text">

                                Development
                                We create Highload-class products for the web using our own team of programmers. We
                                carefully test the project manually and with auto-tests. We check the service for fault
                                tolerance and peak loads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="service-card card bg-white shadow-sm p-3">
                        <div class="card-body">
                            <h5 class="card-title fs-3 mb-3">Support and development</h5>
                            <p class="card-text">
                                We don't just release a product for free. Our task is to assemble the MVP of the project in
                                a short time and work further on its continuous improvement and implementation of new
                                functionality. We put forward hypotheses of what can be improved on the project and test
                                them to achieve the maximum result. Our trump card - we provide support 24/7
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-contact-block />
@endsection
