<nav class="py-2 fixed-bottom d-lg-none d-block bg-white border-top border-bg-body-secondary">
    <div class="container">
        <div class="d-flex justify-content-around bg-f2 py-2 rounded-4 bg-gradient">
            <a href="{{ route('user.dashboard') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('user.dashboard'))
                    <i class="bi bi-house-fill d-block text-theme fs-2"></i>
                @else
                    <i class="bi bi-house d-block fs-2"></i>
                @endif
                <span class="fs-tiny">
                    Home
                </span>
            </a>

            <a href="{{ route('user.slice.index') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('user.slice.show') || Route::is('user.slice.index'))
                    <i class="bi bi-box-fill d-block text-theme fs-2"></i>
                @else
                    <i class="bi bi-box d-block fs-2"></i>
                @endif
                <span class="fs-tiny">
                    Slices
                </span>
            </a>

            <a href="{{ route('user.session.index') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('user.session.index'))
                    <i class="bi bi-calendar2-fill d-block text-theme fs-2"></i>
                @else
                    <i class="bi bi-calendar2 d-block fs-2"></i>
                @endif
                <span class="fs-tiny">
                    Sessions
                </span>
            </a>

            <a href="{{ route('user.notifications') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('user.notifications'))
                    <i class="bi bi-bell-fill text-theme d-block fs-2 position-relative">
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
                <span class="fs-tiny">
                    Pings
                </span>
            </a>

            <a href="{{ route('user.profile.index') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('user.profile.*'))
                    <i class="bi bi-person-fill d-block text-theme fs-2"></i>
                @else
                    <i class="bi bi-person d-block fs-2"></i>
                @endif
                <span class="fs-tiny">
                    Profile
                </span>
            </a>
        </div>
    </div>
</nav>
