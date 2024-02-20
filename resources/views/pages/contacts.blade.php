@extends('layouts.app')
@section('title')
@endsection
@section('description')
@endsection

@section('content')
    <section class="hero hero-section-margin-top">
        <div class="container">
            <div>
                <div class="mb-5">
                    <h1 class="mb-2 fw-bold">Let's make your project a reality</h1>
                    <p class="fs-4">
                        <span class="d-block">Feel free to reach out if you want to</span>
                        <span class="d-block">
                            collaborate with us, or simply have a chat.</span>
                    </p>
                </div>
                <div>
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="row g-3 g-md-5">
                            <div class="col-12 col-md-6">
                                <div class="row g-3 g-md-5">
                                    <div class="col-12 col-md-6">
                                        <div>
                                            <input type="text" class="form-control contact-input" name="name"
                                                required />
                                            <p class="mt-1 text-muted">Name*</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div>
                                            <input type="text" class="form-control contact-input" name="company" />
                                            <p class="mt-1 text-muted">Company*</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div>
                                            <input type="text" class="form-control contact-input" name="phone"
                                                required />
                                            <p class="mt-1 text-muted">Phone</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div>
                                            <input type="text" class="form-control contact-input" type="email"
                                                name="email" required />
                                            <p class="mt-1 text-muted">Email</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <textarea class="text-control contact-textarea w-100 h-100 p-3 rounded-4" placeholder="Tell us about yourself..."
                                    rows="5" name="message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary rounded-pill" type="submit">
                                    Submit form
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
