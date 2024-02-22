<x-layouts.app>
    <style>
        .horizontal-line {
            display: flex;
            align-items: center;
        }

        .horizontal-line hr {
            flex-grow: 1;
            height: 1px;
            border: none;
            background-color: #000;
            /* Change this to adjust the line color */
        }

        .text-in-between {
            margin: 0 10px;
            /* Adjust spacing as needed */
        }
    </style>

    <div class="d-flex align-items-center justify-content-center">
        <div class="col-md-6 col-lg-3 mt-4 mt-lg-5 mb-5 container">
            <div class="my-3">
                {{-- <img src="{{ asset('images/logo.png') }}" alt="..." width="30px"
                    style="position: relative; top: -4px;"> --}}
                {{-- <span class="text-dark">User Login</span> | <span class="fw-light">Welcome Back! 😃</span> --}}
                <small class="text-red fw-semibold">Mentor</small> <i class="bi bi-stars text-primary"></i>
                <h1 class="fs-3 m-0 fw-bold">Welcome back!</h1>
                <p>Sign in to Continue</p>
            </div>

            <form method="POST" action="{{ route('mentor.login.req') }}" class="row g-1 animated-2 fadeIn">
                @csrf

                {{-- FORM ERROR --}}
                <div class="animated-2 fadeIn">
                    @error('email')
                        <x-error :message="$message" />
                    @enderror
                    @error('password')
                        <x-error :message="$message" />
                    @enderror
                </div>
                {{-- FORM ERROR ENDS --}}

                <div class="form-floating mb-1">
                    <input type="email" name="email" class="form-control rounded-4 border-dark border-1"
                        id="email" placeholder="doe@example.com" required>
                    <label for="email" class="fw-semibold">Email Address</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="password" name="password" class="form-control rounded-4 border-dark border-1"
                        id="password" placeholder="Password" required>
                    <label for="password" class="fw-semibold">Password</label>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }} />

                        <label class="form-check-label" for="remember">
                            {{ __('Remember me') }}
                        </label>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-theme rounded-4 shadow-sm py-3 w-100 text-white">
                        LOG IN
                    </button>

                </div>
            </form>
            <div class="my-3 text-center">
                <small>
                    <a href="{{ route('password.request') }}" class="fw-semibold text-decoration-none text-red">
                        Forgot Password?
                    </a>
                </small>
            </div>
            <div class="horizontal-line">
                <hr>
                <span class="text-in-between text-secondary fs-tiny">OR LOG IN WITH</span>
                <hr>
            </div>
            <livewire:user.google-signin />
            <div class="mt-3 text-center">
                <small>
                    Don't have an account?
                    <a href="{{ route('mentor.register') }}" class="fw-semibold text-decoration-none text-red">
                        Sign Up
                    </a>
                </small>
            </div>
        </div>
    </div>
</x-layouts.app>
