<x-layouts.app>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-12 my-5">
                    <div class="card border-0 my-4">
                        <div class="card-body text-start">
                            <div>
                                <h1 class="fs-4 fw-bold text-dark mb-3">
                                    Password Reset
                                </h1>

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    {{-- hidden value --}}
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="mb-1">
                                        <label for="email" class="form-label mb-0">Email address</label>
                                        <input type="email" class="form-control rounded-4 py-3 border-dark"
                                            id="email" name="email" placeholder="name@example.com" required
                                            value="{{ old('email') }}">
                                    </div>
                                    <div class="mb-1">
                                        <label for="password" class="form-label m-0">Password</label>
                                        <input type="password" class="form-control rounded-4 py-3 border-dark"
                                            id="password" name="password" placeholder="********" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password_confirmation" class="form-label m-0">Confirm
                                            Password</label>
                                        <input type="password" class="form-control rounded-4 py-3 border-dark"
                                            id="password_confirmation" name="password_confirmation"
                                            placeholder="********" required>
                                    </div>
                                    <button class="btn btn-theme rounded-4 py-3 w-100 fw-semibold" type="submit">
                                        Update Password
                                    </button>

                                    @error('email')
                                        <p class="fs-tiny text-danger mt-2 animated-2 fadeIn">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                    @error('password')
                                        <p class="fs-tiny text-danger mt-2 animated-2 fadeIn">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </form>

                            </div>
                            <hr>
                            <div class="fs-tiny text-start">
                                Questions? email us at <a href="mailto:hello@owenahub.com">hello@owenahub.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
