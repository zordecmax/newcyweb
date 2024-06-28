document.addEventListener('DOMContentLoaded', function() {

    let viewButtons = document.querySelectorAll('.view-details');

    viewButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            let imageUrl = button.getAttribute('data-image');

            let overlay = document.createElement('div');
            overlay.classList.add('overlay-image');

            let image = document.createElement('img');
            image.classList.add('img-fluid');
            image.src = imageUrl;
            image.alt = 'Project Image';

            overlay.appendChild(image);

            document.body.appendChild(overlay);

            document.body.style.overflow = 'hidden';

            overlay.addEventListener('click', function() {
                overlay.remove();
                document.body.style.overflow = ''; 
            });
        });
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('overlay-image')) {
            event.target.remove();
            document.body.style.overflow = ''; 
        }
    });
});