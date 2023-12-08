<nav class="py-3 fixed-bottom d-lg-none d-block bg-body-tertiary border-top border-3 rounded-4">
    <div class="container">
        <div class="d-flex justify-content-around">
            <a href="{{ route('user.dashboard') }}" class="d-block text-dark">
                @if (Route::is('user.dashboard'))
                    <i class="bi bi-house-fill text-theme fs-1"></i>
                @else
                    <i class="bi bi-house d-block fs-1"></i>
                @endif
            </a>

            <a href="{{ route('guest.slices.index') }}" class="d-block text-dark">
                @if (Route::is('user.slice.show'))
                    <i class="bi bi-box-fill text-theme fs-1"></i>
                @else
                    <i class="bi bi-box fs-1"></i>
                @endif
            </a>

            <a href="#" class="d-block text-dark">
                <i class="bi bi-calendar2 fs-1"></i>
                {{-- <i class="bi bi-calendar2-fill fs-1"></i> --}}
            </a>

            <a href="{{ route('user.profile') }}" class="d-block text-dark">
                @if (Route::is('user.profile'))
                    <i class="bi bi-person-fill text-theme fs-1"></i>
                @else
                    <i class="bi bi-person fs-1"></i>
                @endif
            </a>
        </div>
    </div>
</nav>
