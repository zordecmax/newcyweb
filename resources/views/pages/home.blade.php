@extends('layouts.app')
@section('title')
    Website Development Cyprus | CyprusWeb.eu - Your Web Solutions Provider
@endsection
@section('description')
    CyprusWeb.eu offers professional website development services in Cyprus. We provide custom web solutions tailored to
    your business needs. Contact us today!
@endsection

@section('content')
    <!-- hero -->
    <section class="hero-section hero-section-margin-top">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-center flex-column h-100">
                <div class="hero-content text-center">
                    <h1 class="fw-bold mb-3">
                        Cyprusweb: We turn your ideas into web mastery
                    </h1>
                    <p>
                        Where websites become art and technology
                    </p>
                    {{-- <a href="#">Our services</a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- hero -->

    <!-- services -->
    <section class="services py-5">
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
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center w-100">
                        <a href="{{ route('services') }}" class="btn btn-lg btn-primary rounded-pill py-3 px-5"
                            type="submit">
                            Check all services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services -->

    <!-- stack -->
    <section class="stack py-5">
        <div class="container">
            <h2 class="text-center mb-5">We work with the following technologies.</h2>
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
            <h2 class="text-center mb-5">Why choose us?</h2>
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div
                        class="d-flex flex-column justify-content-center align-items-center bg-white shadow-sm p-5 rounded-5">
                        <i class="bi bi-lightbulb-fill text-primary fs-1"></i>
                        <p class="text-center fs-5 mt-2">
                            Our team possesses extensive expertise in the field of information technology, enabling us to
                            tackle even the most complex challenges with ease. We are committed to staying updated with the
                            latest trends and technologies to deliver cutting-edge solutions tailored to your needs..
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div
                        class="d-flex flex-column justify-content-center align-items-center bg-white shadow-sm p-5 rounded-5">
                        <i class="bi bi-people-fill text-primary fs-1"></i>

                        <p class="text-center fs-5 mt-2">
                            At our company, customer satisfaction is our top priority. We pride ourselves on providing
                            personalized services and flexible solutions to meet the unique needs of each client. Our
                            dedicated team ensures open communication and a seamless experience throughout the project
                            lifecycle.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div
                        class="d-flex flex-column justify-content-center align-items-center bg-white shadow-sm p-5 rounded-5">
                        <i class="bi bi-shield-check text-primary fs-1"></i>
                        <p class="text-center fs-5 mt-2">
                            We guarantee high-quality services and reliable solutions to empower our clients to succeed in
                            their endeavors. With a focus on rigorous quality assurance and proven methodologies, we deliver
                            results that exceed expectations. Our commitment to excellence ensures that every project is
                            executed with precision and professionalism.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div
                        class="d-flex flex-column justify-content-center align-items-center bg-white shadow-sm p-5 rounded-5">
                        <i class="bi bi-gear-wide-connected fs-1 text-primary"></i>
                        <p class="text-center fs-5 mt-2">
                            Embracing innovation is at the core of our ethos. We leverage the latest technologies and adopt
                            innovative approaches to drive digital transformation and achieve optimal outcomes for our
                            clients. Our forward-thinking mindset enables us to stay ahead of the curve and deliver
                            solutions that are future-proof and scalable.
                        </p>
                    </div>
                </div>
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
