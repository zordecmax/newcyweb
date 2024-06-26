@extends('layouts.app')
@section('title')
    {{ __('meta.price_meta_title') }}
@endsection
@section('description')
    {{ __('meta.price_meta_description') }}
@endsection
@section('keywords')
    {{ __('meta.price_meta_keywords') }}
@endsection

@section('content')
<section class="hero hero-section-margin-top">
        <div class="container">
                  <h2 class="text-center mb-4">{{__('main.price')}}</h2>
                    @if (empty($page->body))
                     <p class="text-center">There is no information on pricing.</p>
                    @else
                     {!! $page->getTranslatedAttribute('body', app()->getLocale(), 'fallback_locale') !!}
                 @endif
           </div>
    </section>
    <x-contact-block />
@endsection
