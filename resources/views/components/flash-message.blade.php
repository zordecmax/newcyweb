<div class="alert-wrapper position-fixed" style="z-index: 9999; left:10px; top:10px;">
    @php
        $messageTypes = ['success', 'error', 'warning', 'info'];
    @endphp
    @foreach ($messageTypes as $type)
        @if ($message = Session::get($type))
            @php
                if ($type === 'error') {
                    $type = 'danger';
                }
            @endphp
            <div class="alert alert-{{ $type }} alert-block flashmessage-fade-in">
                <strong>{{ $message }}</strong>
            </div>
        @endif
    @endforeach
    @if ($errors->any())
        <div class="alert alert-danger alert-block flashmessage-fade-in">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
</div>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertElement = document.querySelector('.alert-block');
            if (alertElement) {
                const closeButton = document.querySelector('.flashmessage-close');
                if (closeButton) {
                    closeButton.addEventListener('click', function() {
                        hideAlert();
                    });
                }
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
