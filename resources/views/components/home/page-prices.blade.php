<section class="prices py-5">
 <div class="container">
   <h2 class="text-center mb-5">{{__('main.price')}}</h2>
          @if (empty($page->body))
            <p class="text-center">There is no information on pricing.</p>
          @else
            <div>
              {!! $page->getTranslatedAttribute('body', app()->getLocale(), 'fallback_locale') !!}
            </div>
          @endif
    </div>
</section>
