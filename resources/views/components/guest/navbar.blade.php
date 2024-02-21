<div id="announcement" class="text-center text-theme fs-tiny py-1 bg-dark">
    <i class="bi bi-megaphone-fill fs-6"></i>
    <!-- Button trigger modal -->
    <a type="button" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#joinCommunity">
        <span class="fw-bold text-decoration-underline">Click Here</span> — our community awaits your grand entrance!
    </a>

    <!-- Modal -->
    <div class="modal fade" id="joinCommunity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border border-0">
                    <p class="modal-title fs-4 text-dark fw-bold" id="exampleModalLabel">Join Our Community</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="social-links fw-semibold fs-5">
                        <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                            target="_blank"
                            class="py-4 mt-3 rounded shadow text-white text-decoration-none d-block instagram">
                            <i class="bi bi-instagram d-block icon"></i>
                            Follow Us On Instagram
                        </a>
                        <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08" target="_blank"
                            class="py-4 my-3 rounded shadow text-white text-decoration-none d-block twitter">
                            {{-- <i class="bi bi-twitter d-block icon"></i> --}}
                            <i class="bi bi-twitter-x d-block icon"></i>
                            Follow Us On X
                        </a>

                        <hr class="bg-dak text-dark" />

                        <a href="https://www.facebook.com/groups/896520008575738/?ref=share" target="_blank"
                            class="py-4 rounded shadow text-white text-decoration-none d-block facebook">
                            <i class="bi bi-facebook d-block icon"></i>
                            Facebook Community
                        </a>
                        <a href="https://linkedin.com/in/ernestharuna" target="_blank"
                            class="py-4 rounded shadow text-white text-decoration-none d-block my-3 linkedin">
                            <i class="bi bi-linkedin d-block icon"></i>
                            LinkedIn Community
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- 
<nav class='bg-theme-2'>
    <div class='container py-3 d-flex justify-content-between align-items-center'>
        <div>
            <a href="/" class='text-decoration-none text-dark fs-6 fw-bold m-0'>
                <img src={{ asset('images/logo.png') }} alt="logo" width="28"
                    style="position: relative; top: -4px;"><span style="font-size: 18px"> OwenaHub</span>
            </a>
        </div>

        <div class='fs-tiny fw-bold'>
            @if (Auth::check())
                <a class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-6 fw-bold text-dark" href="" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                        {{ ucfirst(strtolower(Auth::user()->last_name)) }}
                    </a>
                    <ul class="dropdown-menu fs-tiny py-0">
                        <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('guest.slices.index') }}">View Slices</a></li>
                        <li>
                            <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#joinCommunity">
                                <span class="fw-bold">Community
                            </a>
                        </li>

                        <hr class="m-0">
                        <li cl>
                            <a class="dropdown-item fw-bold text-danger" href="{{ route('user.logout') }}">Logout</a>
                        </li>
                    </ul>
                </a>
            @else
                @if (Route::is('guest.slices.index'))
                    <a href="/articles" class='text-dark text-decoration-none me-3'>Blog</a>
                @else
                    <a href={{ route('guest.slices.index') }} class='text-dark text-decoration-none mx-3'>
                        Courses
                        <span class="badge rounded-1 bg-red">New</span>
                    </a>
                @endif
                <a href={{ route('about') }} class='text-dark text-decoration-none'>About</a>
            @endif
        </div>
    </div>
</nav> --}}

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
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">See Mentors</a></li>
                        <li><a class="dropdown-item" href="#">Book a session</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-red fw-semibold" href="#">Become a mentor</a></li>
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
                @if (Auth::check())
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active fw-bold bg-dark rounded-5 px-4 text-white"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                                {{ ucfirst(strtolower(Auth::user()->last_name)) }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('guest.slices.index') }}">View Slices</a>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#joinCommunity">
                                        <span class="fw-bold">Community
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold text-danger"
                                        href="{{ route('user.logout') }}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
                    <a href="{{ route('user.login') }}" class="btn btn-dark rounded-5 px-4 me-2">Log in</a>
                    <a href="{{ route('user.register') }}" class="btn btn-outline-dark rounded-5 px-4">Sign up</a>
                @endif
            </div>
        </div>
    </div>
</nav>
