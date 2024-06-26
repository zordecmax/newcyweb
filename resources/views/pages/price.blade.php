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
            <div class="d-flex align-items-center justify-content-center">
                <div class="hero-content text-center">
                  <h2 class="text-center mb-4">{{__('main.price')}}</h2>
                    @if (empty($page->body))
                     <p class="text-center">There is no information on pricing.</p>
                    @else
                     <div>
                      {!! $page->getTranslatedAttribute('body', app()->getLocale(), 'fallback_locale') !!}
                     </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <x-contact-block />
@endsection
