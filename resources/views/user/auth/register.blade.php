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
        <div class="col-md-6 col-lg-3 my-4 container">
            <div class="mt-3">
                {{-- <img src="{{ asset('images/logo.png') }}" alt="..." width="30px"
                    style="position: relative; top: -4px;">
                <span class="text-dark">Sign up and start learning</span> | <span class="fw-light">Welcome! 😋</span> --}}
                <h1 class="fs-3 m-0 fw-bold">Create an Account</h1>
                <p>Join the Learner's Hub</p>
            </div>

            <form method="POST" action={{ route('user.register.req') }} class="row g-1 animated-2 fadeIn">
                @csrf
                {{-- Form errors --}}
                <div class="animated-2 fadeIn">
                    @error('first_name')
                        <x-error :message="$message" />
                    @enderror
                    @error('last_name')
                        <x-error :message="$message" />
                    @enderror
                    @error('email')
                        <x-error :message="$message" />
                    @enderror
                    @error('password')
                        <x-error :message="$message" />
                    @enderror
                </div>

                <div class="form-floating mb-1">
                    <input type="text" name="first_name" class="form-control rounded-4 border-dark border-1"
                        id="first_name" placeholder="Henry" value="{{ old('first_name') }}" required>
                    <label for="first_name" class="fw-semibold">First name</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="text" name="last_name" class="form-control rounded-4 border-dark border-1"
                        id="last_name" placeholder="Clinton" value="{{ old('last_name') }}" required>
                    <label for="last_name" class="fw-semibold">Last name</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="email" name="email" class="form-control rounded-4 border-dark border-1"
                        id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                    <label for="email" class="fw-semibold">Email</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="password" name="password" class="form-control rounded-4 border-dark border-1"
                        id="password" placeholder="Password" required>
                    <label for="password" class="fw-semibold">Password</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="password" name="password_confirmation"
                        class="form-control rounded-4 border-dark border-1" id="password_confirmation"
                        placeholder="confirm password" required>
                    <label for="password_confirmation" class="fw-semibold">Confirm password</label>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-theme rounded-4 shadow-sm w-100 text-white py-3">
                        REGISTER
                    </button>
                </div>
                <div class="my-3 text-center">
                    <small>
                        Already registered?
                        <a href="{{ route('user.login') }}" class="fw-semibold text-decoration-none text-red">
                            Log In
                        </a>
                    </small>
                </div>

                <div class="horizontal-line">
                    <hr>
                    <span class="text-in-between text-secondary fs-tiny">OR REGISTER WITH</span>
                    <hr>
                </div>
                <livewire:user.google-signin />

                <div class="fs-tiny my-3 text-center">
                    By signing up, you agree to our
                    <a href="#" class="fw-semibold text-decoration-none text-red">
                        Terms of Use</a> and
                    <a href="#" class="fw-semibold text-decoration-none text-red">Privacy Policy</a>.
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
