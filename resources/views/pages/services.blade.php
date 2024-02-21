@extends('layouts.app')
@section('title')
    {{ __('meta.services_meta_title') }}
@endsection
@section('description')
    {{ __('meta.services_meta_description') }}
@endsection

@section('content')
    <section class="hero-section hero-section-margin-top">
        <x-services-block :services="$services" />
    </section>

    <x-contact-block />
@endsection
