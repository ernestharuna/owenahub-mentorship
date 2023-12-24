<nav class="bg-light h-100 border-end sticky-top">
    <div class="container py-4">
        <div>
            <h1 class="text-theme text-start fs-5 fw-bold mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="..." style="position: relative; top: -3px"
                    width="30">
                OwenaHub <span class="fw-light text-dark">| The Learners Hub</span>
            </h1>
            {{-- <h2 class="fs-4 my-5">
                {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                {{ ucfirst(strtolower(Auth::user()->last_name)) }}
            </h2> --}}
        </div>

        <div>
            <div>
                <a href="{{ route('user.dashboard') }}"
                    class="btn btn-light border shadow-sm rounded-1 d-block text-start mb-2 py-3 fw-semibold fs-5">
                    @if (Route::is('user.dashboard'))
                        <i class="bi bi-house-fill text-theme fs-5 me-2"></i>
                    @else
                        <i class="bi bi-house fs-5 me-2"></i>
                    @endif
                    Dashboard
                </a>
            </div>
            <div>
                <a href="{{ route('guest.slices.index') }}"
                    class="btn btn-light border shadow-sm rounded-1 d-block text-start mb-2 py-3 fw-semibold fs-5">
                    @if (Route::is('user.slice.show'))
                        <i class="bi bi-box-fill text-theme fs-5 me-2"></i>
                    @else
                        <i class="bi bi-box fs-5 me-2"></i>
                    @endif
                    Slice & Bites
                </a>
            </div>
            <div>
                <a href="{{ route('user.session.index') }}"
                    class="btn btn-light border shadow-sm rounded-1 d-block text-start mb-2 py-3 fw-semibold
                    fs-5">
                    @if (Route::is('user.session.index'))
                        <i class="bi bi-calendar2-fill text-theme fs-5 me-2"></i>
                        {{-- <i class="bi bi-box-fill text-theme fs-5 me-2"></i> --}}
                    @else
                        <i class="bi bi-calendar2 fs-5 me-2"></i>
                    @endif
                    Sessions
                </a>
            </div>
            <div class="mb-5">
                <a href="{{ route('user.profile') }}"
                    class="btn btn-light border shadow-sm rounded-1 d-block text-start mb-2 py-3 fw-semibold fs-5">
                    @if (Route::is('user.profile'))
                        <i class="bi bi-person-fill text-theme fs-5 me-2"></i>
                    @else
                        <i class="bi bi-person fs-5 me-2"></i>
                    @endif
                    Profile
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
