<nav class="bg-light h-100 border-end sticky-top">
    <div class="container py-4">
        <div class="d-flex gap-2 mb-4">
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="..." style="position: relative; top: -2px"
                    width="40">
            </div>
            <div>
                <h1 class="text-start fs-4 fw-bold m-0">
                    <a href="/" class="text-theme text-decoration-none">OwenaHub</a>
                </h1>
                <span class="fw-light text-dark" style="font-size: 12px; position: relative; top: -7px">
                    The Learners Hub
                </span>
            </div>
        </div>

        <div class="fs-tiny">
            <div>
                <a href="{{ route('user.dashboard') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 fw-semibold text-secondary">
                    @if (Route::is('user.dashboard'))
                        <i class="me-2 fs-5 bi bi-house-fill text-red"></i>
                        <span class="text-red text">Dashboard</span>
                    @else
                        <i class="me-2 fs-5 bi bi-house"></i> Dashboard
                    @endif
                </a>
            </div>
            <div>
                <a href="{{ route('user.slice.index') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 fw-semibold text-secondary">
                    @if (Route::is('user.slice.show') || Route::is('user.slice.index'))
                        <i class="me-2 fs-5 bi bi-box-fill text-red"></i>
                        <span class="text-red">Slices</span>
                    @else
                        <i class="me-2 fs-5 bi bi-box"></i> Slices
                    @endif
                </a>
            </div>
            <div>
                <a href="{{ route('user.session.index') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 fw-semibold text-secondary">
                    @if (Route::is('user.session.*'))
                        <i class="me-2 fs-5 bi bi-calendar2-fill text-red"></i>
                        <span class="text-red">Sessions</span>
                    @else
                        <i class="me-2 fs-5 bi bi-calendar2 "></i> Sessions
                    @endif
                </a>
            </div>
            <div>
                <a href="{{ route('user.notifications') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 fw-semibold text-secondary position-relative">
                    @if (Route::is('user.notifications'))
                        <i class="me-2 fs-5 bi bi-bell-fill text-red"></i>
                        <span class="text-red">Notifications</span>
                    @else
                        <i class="me-2 fs-5 bi bi-bell"></i> Notifications
                    @endif
                    <span
                        class="position-absolute top-0 start-100 translate-middle p-2 bg-red border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </a>
            </div>
            <div class="mb-4">
                <a href="{{ route('user.profile.index') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 fw-semibold text-secondary">
                    @if (Route::is('user.profile.*'))
                        <i class="me-2 fs-5 bi bi-person-fill text-red"></i>
                        <span class="text-red">Profile</span>
                    @else
                        <i class="me-2 fs-5 bi bi-person "></i> Profile
                    @endif
                </a>
            </div>

            <hr>

            <div class="mt-4">
                <a href="{{ route('user.mentor.index') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 fw-semibold text-secondary">
                    @if (Route::is('user.mentor.*'))
                        <i class="me-2 fs-5 bi bi-people-fill text-red"></i>
                        <span class="text-red">Mentors</span>
                    @else
                        <i class="bi bi-people fs-5 me-2"></i>
                        Mentors
                    @endif
                </a>
            </div>

            <div class="mb-5">
                <a href="{{ route('user.support') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 fw-semibold text-secondary">
                    @if (Route::is('user.support'))
                        {{-- <i class="me-2 fs-5 bi bi-people-fill text-red"></i> --}}
                        <i class="bi bi-gear-fill me-2 fs-5 text-red"></i>
                        <span class="text-red">Support</span>
                    @else
                        <i class="bi bi-gear me-2 fs-5"></i>
                        Support
                    @endif
                </a>
            </div>

            <div class="mt-5">
                <div class="bg-theme rounded-4 p-3 mt-3">
                    <h3 class="fs-5 fw-bold text-white">Welcome to OwenaHub</h3>
                    <p class="m-0 fs-tiny text-dark">
                        We're thrilled to have you on board and part of our growing community 🚀
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>
