@extends('layouts.app')
@section('title')
Website Development Cyprus | CyprusWeb.eu - Your Web Solutions Provider
@endsection
@section('description')
CyprusWeb.eu offers professional website development services in Cyprus. We provide custom web solutions tailored to your business needs. Contact us today!
@endsection

@section('content')
    <x-home.hero/>

    <x-home.portfolio/>

    <x-home.services/>

    <x-home.prices/>

    <x-home.contact/>


    <!-- Awesome features -->
    {{-- <section id="features" class="section-wrapper">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-12 text-center mb-4">
                    <h2 class="fs-1">AWESOME FEATURES</h2>
                    <p>Discover the amazing features of our product</p>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                    <img class="awesome-img" src="./images/features-img.png" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">Analytics</h6>
                            <p class="fw-light fs-6">We focus on the careful collection and thoughtful analysis of data,
                                relying on which we identify problems, form the goals and business objectives of the
                                project. We conduct interviews with business customers within the client's company in all
                                interested departments.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">Design</h6>
                            <p class="fw-light fs-6">We form the TOR, break the project into stages, determine priorities,
                                deadlines, budget, technology stack and create a prototype. Our trump card at this stage is
                                the speed of the start!</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">Development</h6>
                            <p class="fw-light fs-6">We create Highload-class products for the web using our own team of
                                programmers. We carefully test the project manually and with auto-tests. We check the
                                service for fault tolerance and peak loads.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">Support and development</h6>
                            <p class="fw-light fs-6">We don't just release a product for free. Our task is to assemble the
                                MVP of the project in a short time and work further on its continuous improvement and
                                implementation of new functionality. We put forward hypotheses of what can be improved on
                                the project and test them to achieve the maximum result. Our trump card - we provide support
                                24/7</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section> --}}

    <!-- OUR SERVICES -->
    {{-- <section class="section-wrapper" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="fs-1">OUR SERVICES</h2>
                    <p>Providing top-notch solutions for your business</p>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">UX design</h6>
                            <p class="fw-light fs-6">Our UX design experts create intuitive and user-friendly interfaces to
                                enhance user satisfaction and engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">UI Design</h6>
                            <p class="fw-light fs-6">We craft visually appealing UI designs that not only captivate users
                                but also provide a seamless browsing experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-search"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">SEO Services</h6>
                            <p class="fw-light fs-6">Our SEO services optimize your website to improve its visibility and
                                ranking on search engine results pages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="item-img-container">
                            <i class="bi bi-laptop-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold fs-5">Web App Development</h6>
                            <p class="fw-light fs-6">We develop custom web applications tailored to your business needs,
                                delivering high-quality and scalable solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- PRICES --}}
    {{-- <section>
        <div class="container" id="prices">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Pricing</h1>
                <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
              </div>
              <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Visit card</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">199€</h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Catalog</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">299€</h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm ">
                    <div class="card-header py-3 ">
                      <h4 class="my-0 fw-normal">Ecommerce</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">499€</h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section> --}}

    <!-- OUR WORKS -->
    {{-- <section class="section-wrapper" id="portfolio">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 text-center mb-4">
                    <h2 class="fs-1">OUR WORKS</h2>
                    <p>See Our Impressive Portfolio</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 position-relative">
                    <img class="work-item-img" src="/images/work-taxi.jpg" alt="">
                    <div class="work-content">
                        <h6 class="fs-5">Viptaxi</h6>
                        <a target="_blank" href="https://viptaxi.cy/">View</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 position-relative">
                    <img class="work-item-img" src="/images/work-shop.jpg" alt="">
                    <div class="work-content">
                        <h6 class="fs-5">E-comerse</h6>
                        <a target="_blank" href="http://shop.alexweb.md/en">View</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 position-relative">
                    <img class="work-item-img" src="/images/work-clean.jpg" alt="">
                    <div class="work-content">
                        <h6 class="fs-5">Cleantobe</h6>
                        <a target="_blank" href="https://cleantobe.md/ru">View</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 position-relative">
                    <img class="work-item-img" src="/images/work-fruit.jpg" alt="">
                    <div class="work-content">
                        <h6 class="fs-5">Cyfruit</h6>
                        <a target="_blank" href="http://lifruit.eu/">View</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- ABOUT US -->
    {{-- <section class="section-wrapper" id="about">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 text-center mb-4">
                    <h2 class="fs-1">ABOUT US</h2>
                    <p>Who We Are</p>
                </div>
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <h5>Multi Capability</h5>
                    <p>We are a passionate team of experts dedicated to delivering exceptional results. With years of
                        experience and a deep understanding of the industry, we strive to provide innovative solutions
                        tailored to meet our clients' unique needs. Our commitment to excellence and attention to detail
                        sets us apart, ensuring that every project we undertake is a success.</p>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="bi bi-check-square"></i>
                            <h6 class="m-0 p-0 ms-2">Tailored strategies for your unique requirements</h6>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="bi bi-check-square"></i>
                            <h6 class="m-0 p-0 ms-2">Ongoing assistance and prompt response</h6>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="bi bi-check-square"></i>
                            <h6 class="m-0 p-0 ms-2">Working together for optimal outcomes</h6>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="bi bi-check-square"></i>
                            <h6 class="m-0 p-0 ms-2">In-depth knowledge for insightful solutions</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                    <img class="awesome-img" src="./images/about-us.png" alt="">
                </div>
            </div>
        </div>
    </section> --}}

    <!-- OUR PROCESS -->
    {{-- <section class="section-wrapper">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 text-center mb-4">
                    <h2 class="fs-1">OUR PROCESS</h2>
                    <p>How We Work</p>
                </div>
                <div class="col-6 col-lg-2 d-flex flex-column align-items-center">
                    <div class="icon-circle">
                        <span>1</span>
                        <i class="bi bi-cup fs-3"></i>
                    </div>
                    <h3 class="mt-3">MEET</h3>
                </div>
                <div class="col-6 col-lg-2 d-flex flex-column align-items-center">
                    <div class="icon-circle">
                        <span>2</span>
                        <i class="bi bi-megaphone fs-3"></i>
                    </div>
                    <h3 class="mt-3">PLAN</h3>
                </div>
                <div class="col-6 col-lg-2 d-flex flex-column align-items-center">
                    <div class="icon-circle">
                        <span>3</span>
                        <i class="bi bi-image fs-3"></i>
                    </div>
                    <h3 class="mt-3">DESIGN</h3>
                </div>
                <div class="col-6 col-lg-2 d-flex flex-column align-items-center">
                    <div class="icon-circle">
                        <span>4</span>
                        <i class="bi bi-heart-fill fs-3"></i>
                    </div>
                    <h3 class="mt-3">DEVELOP</h3>
                </div>
                <div class="col-6 col-lg-2 d-flex flex-column align-items-center">
                    <div class="icon-circle">
                        <span>5</span>
                        <i class="bi bi-cart-fill fs-3"></i>
                    </div>
                    <h3 class="mt-3">TESTING</h3>
                </div>
                <div class="col-6 col-lg-2 d-flex flex-column align-items-center">
                    <div class="icon-circle">
                        <span>6</span>
                        <i class="bi bi-alarm-fill fs-3"></i>
                    </div>
                    <h3 class="mt-3">LAUNCH</h3>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- MEET THE TEAM -->
    {{-- <section class="section-wrapper" id="team">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 text-center mb-4">
                    <h2 class="fs-1">MEET THE TEAM</h2>
                    <p>Our Talented Team</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="img-employ-container">
                        <img class="w-100 img-fluid mb-2" src="/images/employ.jpg" alt="">
                    </div>
                    <h6 class="fs-5">Maksim</h6>
                    <p class="fs-6">Full Stack Developer</p>
                    <p class="fs-6">Our Full Stack Developer combines the best of both worlds, proficient in frontend and
                        backend technologies. With a holistic approach to development, they can handle the entire software
                        development process, from designing user interfaces to implementing server-side logic. Their
                        versatility and expertise enable them to create comprehensive and dynamic web solutions.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="img-employ-container">
                        <img class="w-100 img-fluid mb-2" src="/images/employ-2.jpg" alt="">
                    </div>
                    <h6 class="fs-5">Marina</h6>
                    <p class="fs-6">Product Manager</p>
                    <p class="fs-6">Our skilled Product Manager brings expertise in translating business requirements
                        into innovative product solutions. With a deep understanding of user needs and market trends, they
                        drive the development and delivery of exceptional products that exceed customer expectations.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="img-employ-container">
                        <img class="w-100 img-fluid mb-2" src="/images/employ-3.jpg" alt="">
                    </div>
                    <h6 class="fs-5">Sergey</h6>
                    <p class="fs-6">Backend Developer</p>
                    <p class="fs-6">Our Backend Developer is the backbone of our technical infrastructure. They architect
                        and build robust and scalable server-side systems, ensuring the smooth operation of our web
                        applications. With a focus on efficiency and security, they handle data management, integrations,
                        and API development.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="img-employ-container">
                        <img class="w-100 img-fluid mb-2" src="/images/employ-4.jpg" alt="">
                    </div>
                    <h6 class="fs-5">Alex</h6>
                    <p class="fs-6">Frontend Developer</p>
                    <p class="fs-6">Our Frontend Developer is a master of crafting captivating user interfaces and
                        seamless user experiences. With a keen eye for design and proficiency in cutting-edge frontend
                        technologies, they transform concepts into visually stunning and highly interactive web
                        applications.</p>
                </div>
            </div>
        </div>
    </section> --}}

@endsection

{{-- //test --}}
