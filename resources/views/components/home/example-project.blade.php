<link href="/css/home/index.css" rel="stylesheet">
<!-- <script src="/js/faq.js" defer></script> -->
<section class="example-project py-5">
    <div class="container">
        <h2 class="text-center mb-5">Examples of work</h2>
          <div class="row g-4">
              @foreach ($projects as $project)
               <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center ">
                <div class="card bg-white shadow-sm flip-card" style="width: 341px; height: 341px; overflow: hidden;">
                 <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="card-body d-flex align-items-center justify-content-center p-0" style="width: 100%; height: 100%;">
                      <img class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" src="{{ Voyager::image($project->image_url) }}" alt="{{ $project->name }}" />
                    </div>
                   </div>
                 <div class="flip-card-back">
                  <div class="card-body d-flex align-items-center justify-content-center p-0" style="width: 100%; height: 100%;">
                     <a href="#" class="btn btn-primary view-details" data-image="{{ Voyager::image($project->image_url) }}">View Details</a>
                  </div>
                 </div>
               </div>
             </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
  .overlay-image {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: flex-start; /* Изменено на flex-start для выравнивания по верху */
    justify-content: center;
    z-index: 9999;
    overflow-y: auto; /* Разрешаем прокрутку внутри оверлея */
}

.overlay-image img {
    max-width: 90%; /* Максимальная ширина изображения */
    height: auto; /* Автоматический расчет высоты */
    object-fit: contain;
    cursor: pointer;
    margin-top: 20px; /* Добавляем отступ сверху, чтобы не прилипало к верху */
}


    /* Стили для анимации переворота карточки */
.flip-card {
    perspective: 1000px; /* Глубина перспективы */
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
    transform: rotateY(180deg); /* Поворот при наведении */
}

.flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
}

.flip-card-back {
    transform: rotateY(180deg); /* Начальный поворот задней стороны */
    background-color: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    box-sizing: border-box;
}

/* Стили для кнопки ссылки */
.flip-card-back .btn {
    text-decoration: none;
    color: white;
}

</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Находим все кнопки "View Details"
    let viewButtons = document.querySelectorAll('.view-details');

    // Добавляем обработчик клика на каждую кнопку
    viewButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            let imageUrl = button.getAttribute('data-image');

            // Создаем элементы для оверлея и изображения
            let overlay = document.createElement('div');
            overlay.classList.add('overlay-image');

            let image = document.createElement('img');
            image.classList.add('img-fluid');
            image.src = imageUrl;
            image.alt = 'Project Image';

            // Добавляем изображение в оверлей
            overlay.appendChild(image);

            // Добавляем оверлей на страницу
            document.body.appendChild(overlay);

            // Предотвращаем прокрутку страницы при открытом оверлее
            document.body.style.overflow = 'hidden';

            // Добавляем обработчик клика на изображение для его удаления
            overlay.addEventListener('click', function() {
                overlay.remove();
                document.body.style.overflow = ''; // Восстанавливаем обычную прокрутку
            });
        });
    });

    // Добавляем обработчик клика на оверлей для его закрытия
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('overlay-image')) {
            event.target.remove();
            document.body.style.overflow = ''; // Восстанавливаем обычную прокрутку
        }
    });
});


</script>