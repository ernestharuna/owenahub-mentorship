<nav class="bg-light h-100 border-end sticky-top">
    <div class="container py-4">
        <div class="d-flex gap-2 mb-4">
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="..." style="position: relative; top: -2px"
                    width="40">
            </div>
            <div>
                <h1 class="text-theme text-start fs-4 fw-bold m-0">
                    OwenaHub <br>
                </h1>
                <span class="fw-light text-dark" style="font-size: 12px; position: relative; top: -5px">
                    The Learners Hub
                </span>
            </div>
        </div>

        <div>
            <div>
                <a href="{{ route('user.dashboard') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 font-monospace fs-5">
                    @if (Route::is('user.dashboard'))
                        <i class="bi bi-house-fill text-theme fs-5"></i> <span class="fw-bold">Dashboard</span>
                    @else
                        <i class="bi bi-house fs-5"></i> Dashboard
                    @endif
                </a>
            </div>
            <div>
                <a href="{{ route('guest.slices.index') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 font-monospace fs-5">
                    @if (Route::is('user.slice.show'))
                        <i class="bi bi-box-fill text-theme fs-5"></i> <span class="fw-bold">Slices</span>
                    @else
                        <i class="bi bi-box fs-5"></i> Slices
                    @endif

                </a>
            </div>
            <div>
                <a href="{{ route('user.session.index') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 font-monospace
                    fs-5">
                    @if (Route::is('user.session.index'))
                        <i class="bi bi-calendar2-fill text-theme fs-5"></i> <span class="fw-bold">Sessions</span>
                    @else
                        <i class="bi bi-calendar2 fs-5"></i> Sessions
                    @endif
                </a>
            </div>
            <div>
                <a href="{{ route('user.notifications') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 font-monospace fs-5 position-relative">
                    @if (Route::is('user.notifications'))
                        <i class="bi bi-bell-fill text-theme fs-5"></i> <span class="fw-bold">Notifications</span>
                    @else
                        <i class="bi bi-bell fs-5"></i> Notifications
                    @endif
                    <span
                        class="position-absolute top-0 start-100 translate-middle p-2 bg-red border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </a>
            </div>
            <div class="mb-5">
                <a href="{{ route('user.profile') }}"
                    class="btn bg-body-secondary rounded-4 d-block text-start mb-2 py-3 font-monospace fs-5">
                    @if (Route::is('user.profile'))
                        <i class="bi bi-person-fill text-theme fs-5"></i> <span class="fw-bold">Profile</span>
                    @else
                        <i class="bi bi-person fs-5"></i> Profile
                    @endif
                </a>
            </div>
            <hr>
            <div class="mt-5">
                <div class="d-flex bg-theme rounded-1 p-2">
                    <div class="px-1 py-2 rounded-5 bg-light me-2"></div>
                    <div>
                        <h2 class="fs-6 fw-bold m-0">
                            {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                            {{ ucfirst(strtolower(Auth::user()->last_name)) }}
                        </h2>
                        <p class="text-white fs-tiny m-0">
                            {{ Auth::user()->email }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
