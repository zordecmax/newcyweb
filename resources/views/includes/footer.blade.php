<footer class="text-center text-lg-start w-100 bg-primary text-white">
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <div class="mb-3">
                        <a class="text-white fw-bold" href="{{ route('home') }}">CYPRUSWEB</a>
                    </div>
                    <p>
                        {{ __('main.footer_description') }}
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Links</h6>
                    <p>
                        <a href="{{ route('home') }}" class="text-reset">{{ __('main.home') }}</a>
                    </p>
                    <p>
                        <a href="{{ route('about') }}" class="text-reset">{{ __('main.about') }}</a>
                    </p>
                    <p>
                        <a href="{{ route('portfolio') }}" class="text-reset">{{ __('main.portfolio') }}</a>
                    </p>
                    <p>
                        <a href="{{ route('price') }}" class="text-reset">{{ __('main.price') }}</a>
                    </p>
                    <p>
                        <a href="{{ route('contacts.index') }}" class="text-reset">{{ __('main.contacts') }}</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">{{ __('main.contacts') }}</h6>
                    <p>Cyprus</p>
                    <a href="tel:{{ setting('site.my_phone') }}" class="text-reset" title="Phone"  target="_blank">
                        <p>{{ setting('site.my_phone') }}</p>
                    </a>
                </div>
                @if(setting('site.my_linkedin') && setting('site.my_telegram') && setting('site.my_whatsapp'))
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">{{ __('main.follow_us') }}</h6>
                    <a href="{{ setting('site.my_telegram') }}" class="me-2">
                        <i class="bi bi-telegram fs-4 text-white"></i>
                    </a>
                    <a href="{{ setting('site.my_linkedin') }}" class="me-2">
                        <i class="bi bi-linkedin fs-4 text-white"></i>
                    </a>
                    <a href="{{ setting('site.my_whatsapp') }}">
                        <i class="bi bi-whatsapp fs-4 text-white"></i>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>
</footer>
