<link href="/css/faq.css" rel="stylesheet">
<script src="/js/faq.js" defer></script>
<section class="faq-section">
<div class="container py-5">
 <h2 class="text-center mb-5">{{__('main.faq')}}</h2>
  <div class="faq-container">
   @foreach($questions as $question)
    <div class="faq">
     <h4 class="faq-question">{{ $question->getTranslatedAttribute('question', app()->getLocale(), 'fallbackLocale') }}</h4>
      <p class="faq-text">{{ $question->getTranslatedAttribute('answer', app()->getLocale(), 'fallbackLocale') }}</p>
       <button class="faq-toggle">
        <i class="bi bi-chevron-down fs-4"></i>
        <i class="bi bi-x-circle fs-4 text-dark"></i>
       </button>
    </div>
  @endforeach
   </div>
  </div>
  </section>