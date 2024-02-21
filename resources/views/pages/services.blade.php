@extends('layouts.app')
@section('title')
@endsection
@section('description')
@endsection

@section('content')
    <section class="hero-section hero-section-margin-top">
        <x-services-block :services="$services" />
    </section>

    <x-contact-block />
@endsection
