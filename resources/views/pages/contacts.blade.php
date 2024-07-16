@extends('layouts.app')
@section('title')
{{ __('meta.contacts_meta_title') }}
@endsection
@section('description')
{{ __('meta.contacts_meta_description') }}
@endsection
@section('keywords')
{{ __('meta.contact_meta_keywords') }}
@endsection

@section('content')
<section class="hero hero-section-margin-top section-bg">
    <div class="container">
        <div>
            <div class="mb-5">
                <h1 class="mb-2 fw-bold">{{ __('main.contacts_title') }}</h1>
                <div class="mt-4"></div>
                <p class="fs-5">{{ __('main.call_to_action') }}</p>
                <a href="tel:+35799345184" class="btn btn-primary rounded-pill">{{ __('main.call_now') }}</a>
            </div>
            <p class="fs-4">
                {!! __('main.contacts_description') !!}
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
                                    <input type="text" class="form-control contact-input" name="name" required />
                                    <p class="mt-1 text-muted">{{ __('main.name') }}*</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div>
                                    <input type="text" class="form-control contact-input" name="company" />
                                    <p class="mt-1 text-muted">{{ __('main.company') }}*</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div>
                                    <input type="text" class="form-control contact-input" name="phone" required />
                                    <p class="mt-1 text-muted">{{ __('main.phone') }}</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div>
                                    <input type="text" class="form-control contact-input" type="email" name="email"
                                        required />
                                    <p class="mt-1 text-muted">{{ __('main.email') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <textarea class="text-control contact-textarea w-100 h-100 p-3 rounded-4"
                            placeholder={{ __('main.message') }} rows="5" name="message"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill" type="submit">
                            {{ __('main.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection