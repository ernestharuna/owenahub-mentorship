<x-follow-communities />

<nav class="navbar navbar-expand-lg bg-theme-2">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">OwenaHub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="bi bi-three-dots fs-3"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('guest.slices.index') }}">Courses</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Mentorship
                    </a>
                    <ul class="dropdown-menu rounded-4">
                        <li><a class="dropdown-item" href="{{ route('user.mentor.index') }}">See Mentors</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.session.index') }}">Book a session</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-red fw-semibold" href="/mentor/getstarted">Become a mentor</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('guest.articles.index') }}">Blog</a>
                </li>
            </ul>

            <div class='fs-tiny fw-semibold'>
                @auth
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active fw-bold bg-dark rounded-5 px-4 text-white"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                                {{ ucfirst(strtolower(Auth::user()->last_name)) }}
                            </a>
                            <ul class="dropdown-menu rounded-4">
                                <li class="animated-2 fadeIn">
                                    <a class="dropdown-item" href="{{ route('user.dashboard') }}">
                                        <i class="me-1 bi bi-house"></i> Dashboard
                                    </a>
                                </li>
                                <li class="animated-2 fadeIn">
                                    <a class="dropdown-item" href="{{ route('guest.slices.index') }}">
                                        <i class="me-2 bi bi-box"></i> View Slices
                                    </a>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="animated-2 fadeIn">
                                    <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#joinCommunity">
                                        <i class="bi bi-people me-1"></i> Community
                                    </a>
                                </li>
                                <li class="animated fadeIn">
                                    <a class="dropdown-item fw-bold text-danger" href="{{ route('user.logout') }}">
                                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endauth

                @auth('mentor')
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active fw-bold bg-dark rounded-5 px-4 text-white"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ ucfirst(strtolower(Auth::guard('mentor')->user()->first_name)) }}
                                {{ ucfirst(strtolower(Auth::guard('mentor')->user()->last_name)) }}
                            </a>
                            <ul class="dropdown-menu rounded-4">
                                <li class="animated-2 fadeIn">
                                    <a class="dropdown-item" href="{{ route('mentor.dashboard') }}">
                                        <i class="me-1 bi bi-house"></i> Dashboard
                                    </a>
                                </li>
                                <li class="animated-2 fadeIn">
                                    <a class="dropdown-item" href="{{ route('guest.slices.index') }}">
                                        <i class="me-2 bi bi-box"></i> View Slices
                                    </a>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="animated-2 fadeIn">
                                    <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#joinCommunity">
                                        <i class="bi bi-people me-1"></i> Community
                                    </a>
                                </li>
                                <li class="animated fadeIn">
                                    <a class="dropdown-item fw-bold text-danger" href="{{ route('mentor.logout') }}">
                                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endauth

                @if (!Auth::check() && !Auth::guard('mentor')->check())
                    <a href="{{ route('user.login') }}" class="btn btn-sm btn-dark rounded-5 px-4 me-2">Log in</a>
                    <a href="{{ route('user.register') }}"
                        class="btn btn-sm btn-outline-dark rounded-5 px-4 fw-semibold">
                        Sign up
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>
