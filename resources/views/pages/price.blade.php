@extends('layouts.app')

@section('title')
    {{ $page->getTranslatedAttribute('title', App::getLocale()) }}
@endsection

@section('description')
    {{ $page->getTranslatedAttribute('meta_description', App::getLocale()) }}
@endsection

@section('keywords')
    {{ $page->getTranslatedAttribute('meta_keywords', App::getLocale()) }}
@endsection


@section('content')
<section class="hero hero-section-margin-top">
        <div class="container">
                  <h1 class="text-center mb-4">{{__('main.price')}}</h1>
                    @if (empty($page->body))
                     <p class="text-center">There is no information on pricing.</p>
                    @else
                     {!! $page->getTranslatedAttribute('body', app()->getLocale(), 'fallback_locale') !!}
                 @endif
           </div>
    </section>
    <x-contact-block />
@endsection
