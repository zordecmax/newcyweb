<div class="alert-wrapper">
    @php
        $messageTypes = ['success', 'error', 'warning', 'info'];
    @endphp

    @foreach ($messageTypes as $type)
        @if ($message = Session::get($type))
            <div class="alert alert-{{ $type }} alert-block flashmessage-fade-in">
                <button type="button" class="flashmessage-close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    @endforeach

    @if ($errors->any())
        <div class="alert alert-danger alert-block flashmessage-fade-in">
            <button type="button" class="flashmessage-close" data-dismiss="alert">×</button>
            Check the following errors
        </div>
    @endif
</div>


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertElement = document.querySelector('.alert');


            if (alertElement) {
                const closeButton = document.querySelector('.flashmessage-close');
                closeButton.addEventListener('click', function() {
                    hideAlert();
                });

                setTimeout(function() {
                    hideAlert();
                }, 1000);
            }


            function hideAlert() {
                alertElement.classList.add('flashmessage-fade-out');
                setTimeout(function() {
                    alertElement.parentNode.removeChild(alertElement);
                }, 500);
            }
        });
    </script>
@endpush