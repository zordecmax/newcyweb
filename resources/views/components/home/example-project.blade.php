<section class="example-project py-5">
    <div class="container">
      <h2 class="text-center mb-5">{{__('main.example-work')}}</h2>
        <div class="row g-4">
          @if(count($projects) > 0)
            @foreach ($projects as $project)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card example-project-size bg-white shadow-sm flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body d-flex align-items-start justify-content-center p-0">
                                <img class="img-fluid" src="{{ Voyager::image($project->image_url) }}" alt="{{ $project->name }}" />
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="card-body d-flex align-items-center justify-content-center flex-column p-0">
                                <div class="fw-bold fs-4">{{ $project->title }}</div>
                                <p class="text-center fw-bold">{{ $project->getTranslatedAttribute('home_description', App::getLocale(), 'fallbackLocale')}}</p>
                                <a href="#" class="btn btn-primary view-details" data-image="{{ Voyager::image($project->image_url) }}"><i class="bi bi-arrow-right-circle-fill fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
              <p class="text-center fw-bold">No projects found.</p>
            @endif
        </div>
    </div>
</section>
