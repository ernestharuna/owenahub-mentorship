{{-- <nav class="py-2 fixed-bottom d-lg-none d-block bg-white border-top border-3 border-secondary rounded-4">
    <div class="container">
        <div class="d-flex justify-content-around bg-f2 py-2 rounded-4 bg-gradient">
            <a href="{{ route('mentor.dashboard') }}" class="d-block text-dark">
                @if (Route::is('mentor.dashboard'))
                    <i class="bi bi-house-fill text-theme fs-2"></i>
                @else
                    <i class="bi bi-house d-block fs-2"></i>
                @endif
            </a>

            <a href="{{ route('user.slice.index') }}" class="d-block text-dark">
                @if (Route::is('user.slice.show') || Route::is('mentor.slice.index'))
                    <i class="bi bi-box-fill text-theme fs-2"></i>
                @else
                    <i class="bi bi-box fs-2"></i>
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

            <a href="{{ route('mentor.profile.index') }}" class="d-block text-dark">
                @if (Route::is('mentor.profile'))
                    <i class="bi bi-person-fill text-theme fs-2"></i>
                @else
                    <i class="bi bi-person fs-2"></i>
                @endif
            </a>
        </div>
    </div>
</nav> --}}

<nav class="py-2 fixed-bottom d-lg-none d-block bg-white border-top border-bg-body-secondary"
    style="box-shadow: 0px 0px 25px #80808052 !important;">
    <div class="container">
        <div class="d-flex justify-content-around bg-f2 py-2 rounded-4 bg-gradient">
            <a href="{{ route('mentor.dashboard') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('mentor.dashboard'))
                    <i class="bi bi-house-fill d-block text-theme fs-2"></i>
                @else
                    <i class="bi bi-house d-block fs-2"></i>
                @endif
                <span class="fs-tiny">
                    Home
                </span>
            </a>

            <a href="{{ route('mentor.session.index') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('mentor.session.*'))
                    <i class="bi bi-calendar2-fill d-block text-theme fs-2"></i>
                @else
                    <i class="bi bi-calendar2 d-block fs-2"></i>
                @endif
                <span class="fs-tiny">
                    Sessions
                </span>
            </a>

            <a href="{{ route('mentor.notifications') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('mentor.notifications'))
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

            <a href="{{ route('mentor.profile.index') }}" class="d-block text-dark text-center text-decoration-none">
                @if (Route::is('mentor.profile.*'))
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
