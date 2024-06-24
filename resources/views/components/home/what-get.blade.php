<section class="what-get pb-3 pt-5">
  <div class="container">
    <h2 class="text-center mb-5">{{__('main.what-get')}}</h2>
    <div class="row ps-5">
    @php
    $items = [
    [
        'number' => '1',
        'title' => __('main.what-get-item1-title'),
        'text' => __('main.what-get-item1-text')
    ],
    [
        'number' => '2',
        'title' => __('main.what-get-item2-title'),
        'text' => __('main.what-get-item2-text')
    ],
    [
        'number' => '3',
        'title' => __('main.what-get-item3-title'),
        'text' => __('main.what-get-item3-text')
    ],
    [
        'number' => '4',
        'title' => __('main.what-get-item4-title'),
        'text' => __('main.what-get-item4-text')
    ],
    [
        'number' => '5',
        'title' => __('main.what-get-item5-title'),
        'text' => __('main.what-get-item5-text')
    ],
    [
        'number' => '6',
        'title' => __('main.what-get-item6-title'),
        'text' => __('main.what-get-item6-text')
    ],
];
@endphp
    @foreach ($items as $item)
       <div class="col-12 col-md-6 pb-2">
            <div class="row">
               <div class="col-2 col-sm-1 d-flex">
                      <div class="pe-1 pe-sm-2 fw-bold">{!! $item['number'] !!}</div>
                   <div class="what-get-line pe-2"></div>
                </div>
                <div class="col-10 col-sm-11 ps-4 ps-sm-5 ps-xxl-4">
                    <div class="d-flex flex-column justify-content-start">
                      <h5 class="fw-bold">{!! $item['title'] !!}</h5>
                      <p class="pt-1 fs-5">{!! $item['text'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
  </div>
</section>
