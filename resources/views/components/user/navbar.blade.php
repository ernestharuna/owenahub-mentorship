<nav class="navbar bg-body-tertiary sticky-top border-bottom">
    <div class="container ">
        <a href="/" class='text-decoration-none text-dark fs-6 fw-bold m-0'>
            <img src={{ asset('images/logo.png') }} alt="logo" width="28" style="position: relative; top: -2px;">
            OwenaHub
        </a>
        <button class="navbar-toggler rounded-0 shadow-sm" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <span class="fs-tiny fw-semibold bg-white">
                <i class="bi bi-chevron-right"></i>
                {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                {{ ucfirst(strtolower(Auth::user()->last_name)) }}
            </span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <span class="fw-bold">OwenaHub</span> -
                    <span class="fw-light">The learner's Hub</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link border rounded-1 rounded-0 btn btn-light shadow-sm mb-2 p-3 text-start fw-bold"
                            aria-current="page" href="{{ route('user.dashboard') }}">
                            <i class="bi bi-house-gear-fill text-dark fs-5 me-1"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link border rounded-1 btn btn-light shadow-sm mb-2 p-3 text-start fw-bold"
                            href="{{ route('guest.slices.index') }}">
                            <i class="bi bi-box-fill text-dark fs-5 me-1"></i> Slices
                            <span class="badge bg-red text-white fs-tiny rounded-1">New!</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link border rounded-1 btn btn-light shadow-sm mb-2 p-3 text-start fw-bold"
                            href="{{ route('guest.articles.index') }}">
                            <i class="bi bi-file-text-fill text-dark fs-5 me-1"></i> Articles
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link border rounded-1 btn btn-light shadow-sm mb-2 p-3 text-start fw-bold"
                            href="#">
                            <i class="bi bi-people-fill text-dark fs-5 me-1"></i> Sessions
                            <span class="badge bg-theme fs-tiny">
                                Coming Soon!
                            </span>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Account Settings
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Manage Reviews</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item fw-bold text-danger" href="{{ route('user.logout') }}">
                                    Logout →
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>
