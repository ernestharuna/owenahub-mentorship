<x-layouts.app>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-md-3 col-lg-3 mx-3 my-5 px-4 py-3">
            <div class="fw-bold">
                <img src="{{ asset('images/logo.png') }}" alt="..." width="30px"
                    style="position: relative; top: -4px;">
                <span class="text-dark">User Login</span> | <span class="fw-light">Welcome Back! 😃</span>
            </div>

            <form method="POST" action={{ route('user.login.req') }} class="row g-3 ">
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
                    <input type="email" name="email" class="form-control rounded rounded-0 border-dark border-1"
                        id="email" placeholder="doe@example.com">
                    <label for="email" class="fw-bold">Email Address</label>
                </div>

                <div class="form-floating mb-1">
                    <input type="password" name="password" class="form-control rounded rounded-0 border-dark border-1"
                        id="password" placeholder="Password">
                    <label for="password" class="fw-bold">Password</label>
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
                    <button type="submit"
                        class="btn btn-theme rounded rounded-0 shadow fw-light text-uppercase fs-6 w-100">
                        Login
                    </button>
                </div>
                <div>
                    <a href="#" class="fw-semibold">
                        Forgot Password?
                    </a>
                </div>
                <hr>
                <div class="m-0">
                    Don't have an account?
                    <a href="{{ route('user.register') }}" class="fw-semibold">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
