
@php
    $items = [
        [
            'src' => 'images/home/html.svg',
            'text' => 'HTML'
        ],
        [
            
            'src' => 'images/home/css-3.svg',
            'text' => "CSS"
        ],
        [
            
            'src' => 'images/home/javascript.svg',
            'text' => "Javascript"
        ],
        [
            
            'src' => 'images/home/typescript.svg',
            'text' => "Typescript"
        ],
        [
            
            'src' => 'images/home/react.svg',
            'text' => "React"
        ],
        [
            
            'src' => 'images/home/next-js.svg',
            'text' => "Next JS"
        ],
        [
            
            'src' => 'images/home/php.svg',
            'text' => "PHP"
        ],
        [
            
            'src' => 'images/home/laravel.svg',
            'text' => "Laravel"
        ],
        [
            
            'src' => 'images/home/mysql-logo.svg',
            'text' => "MySQL"
        ],
        [
            
            'src' => 'images/home/bootstrap.svg',
            'text' => "Bootstrap"
        ],
        [
            
            'src' => 'images/home/vue.svg',
            'text' => "Vue"
        ]
    ];
@endphp


    @foreach ($items as $item)
    <div class="col-6 col-md-4 col-lg-3 col-xl-2 d-flex justify-content-center">
               <div class="technology d-flex text-center flex-column mb-3">
                   <img src="{{ asset($item['src']) }}" alt="Icon" class="svg-icon">           
                       <span class="">{!! $item['text'] !!}</span>
               </div>
              </div>
    @endforeach

