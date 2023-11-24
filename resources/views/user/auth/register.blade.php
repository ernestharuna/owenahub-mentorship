<x-layouts.app>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-md-3 col-lg-3 mt-3 mb-3 px-4 py-3 animated-2 fadeIn">
            <div class="fw-bold mb-2">
                <img src="{{ asset('images/logo.png') }}" alt="..." width="30px"
                    style="position: relative; top: -4px;">
                <span class="text-dark">Sign up and start learning</span> | <span class="fw-light">Welcome! 😋</span>
            </div>

            <form method="POST" action={{ route('user.register.req') }} class="row g-1">
                @csrf
                {{-- Form errors --}}
                <div class="mb-3">
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
                    <input type="text" name="first_name" class="form-control rounded rounded-0 border-dark border-1"
                        id="first_name" placeholder="Henry">
                    <label for="first_name" class="fw-bold">First Name</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="text" name="last_name" class="form-control rounded rounded-0 border-dark border-1"
                        id="last_name" placeholder="Clinton">
                    <label for="last_name" class="fw-bold">Last Name</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="email" name="email" class="form-control rounded rounded-0 border-dark border-1"
                        id="email" placeholder="name@example.com">
                    <label for="email" class="fw-bold">Email Address</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="password" name="password" class="form-control rounded rounded-0 border-dark border-1"
                        id="password" placeholder="Password">
                    <label for="password" class="fw-bold">Password</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="password" name="password_confirmation"
                        class="form-control rounded rounded-0 border-dark border-1" id="password_confirmation"
                        placeholder="confirm password">
                    <label for="password_confirmation" class="fw-bold">Confirm Password</label>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit"
                        class="btn btn-theme rounded rounded-0 shadow fw-light text-uppercase fs-6 w-100">
                        Register
                    </button>
                </div>

                <div class="fs-tiny mt-4">
                    By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy
                        Policy</a>.
                </div>
                <hr>
                <div class="m-0 text-center">
                    <small>
                        Already registered?
                        <a href="{{ route('user.login') }}" class="fw-semibold">
                            Log In
                        </a>
                    </small>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
