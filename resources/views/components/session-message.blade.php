<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    @if (session('status'))
        <x-success-msg />
    @endif
    @if (session('error'))
        <x-error-msg />
    @endif
    <script>
        document.getElementById('dismiss-button').addEventListener('click', function() {
            document.getElementById('flash-message').style.display = 'none';
        });
    </script>
</div>
