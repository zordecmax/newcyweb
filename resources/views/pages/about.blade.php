@extends('layouts.app')
@section('title')
@endsection
@section('description')
@endsection

@section('content')
    <!-- about -->
    <section class="hero hero-section-margin-top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">
                <div class="hero-content text-center">
                    <h1>{{ __('main.about') }}</h1>
                    {!! __('main.about_description') !!}
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <x-contact-block />
@endsection
