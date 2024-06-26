<section class="faq-section">
    <div class="container py-5">
        <h2 class="text-center mb-5">{{__('main.faq')}}</h2>
         <div class="accordion" id="accordionPanelsStayOpenExample">
           @foreach($questions as $question)
            <div class="accordion-item">
              <div class="accordion-header" id="panelsStayOpen-heading{{ $question->id }}">
                <button class="accordion-button collapsed fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $question->id }}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{ $question->id }}">
                  {{ $question->getTranslatedAttribute('question', app()->getLocale(), 'fallbackLocale') }}
                </button>
             </div>
             <div id="panelsStayOpen-collapse{{ $question->id }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading{{ $question->id }}">
               <div class="accordion-body">
                {{ $question->getTranslatedAttribute('answer', app()->getLocale(), 'fallbackLocale') }}
               </div>
             </div>
            </div>
         @endforeach
      </div>
    </div>
</section>