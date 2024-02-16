<nav class="py-2 fixed-bottom d-lg-none d-block bg-white border-top border-3 rounded-4">
    <div class="container">
        <div class="d-flex justify-content-around bg-body-tertiary py-2 rounded-4 bg-gradient">
            <a href="{{ route('user.dashboard') }}" class="d-block text-dark">
                @if (Route::is('user.dashboard'))
                    <i class="bi bi-house-fill text-theme fs-2"></i>
                @else
                    <i class="bi bi-house d-block fs-2"></i>
                @endif
            </a>

            <a href="{{ route('user.slice.index') }}" class="d-block text-dark">
                @if (Route::is('user.slice.show') || Route::is('user.slice.index'))
                    <i class="bi bi-box-fill text-theme fs-2"></i>
                @else
                    <i class="bi bi-box fs-2"></i>
                @endif
            </a>

            <a href="{{ route('user.session.index') }}" class="d-block text-dark">
                @if (Route::is('user.session.index'))
                    <i class="bi bi-calendar2-fill text-theme fs-2"></i>
                @else
                    <i class="bi bi-calendar2 fs-2"></i>
                @endif
            </a>

            <a href="{{ route('user.notifications') }}" class="d-block text-dark">
                @if (Route::is('user.notifications'))
                    <i class="bi bi-bell-fill text-theme fs-2 position-relative">
                        <span
                            class="position-absolute top-1 start-75 translate-middle p-1 bg-red border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </i>
                @else
                    <i class="bi bi-bell d-block fs-2 position-relative">
                        <span
                            class="position-absolute top-1 start-75 translate-middle p-1 bg-red border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </i>
                @endif
            </a>

            <a href="{{ route('user.profile') }}" class="d-block text-dark">
                @if (Route::is('user.profile'))
                    <i class="bi bi-person-fill text-theme fs-2"></i>
                @else
                    <i class="bi bi-person fs-2"></i>
                @endif
            </a>
        </div>
    </div>
</nav>
