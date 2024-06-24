<div class="container">
    <h2 class="fw-bold text-center mb-5">{{ __('main.home_services_title') }}</h2>
    <div class="row g-2 g-lg-4">
        @foreach ($services as $service)
            <div class="col-12 col-lg-4">
                <div class="service-card card bg-white shadow-sm p-3">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center mb-3">
                            @if ($service->icon)
                            <div class="pb-3">
                                <img src="{{ Voyager::image($service->icon) }}" alt="Icon" style="width: 35px; height: 35px;">
                            </div>   
                            @endif
                            <h5 class="card-title fs-3 mb-0">
                                {{ $service->getTranslatedAttribute('name', App::getLocale(), 'fallbackLocale') }}
                            </h5>
                        </div>
                        <p class="card-text">
                            {{ $service->getTranslatedAttribute('description', App::getLocale(), 'fallbackLocale') }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
