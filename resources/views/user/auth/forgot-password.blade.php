<x-layouts.app>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-12 my-5">
                    <div class="card shadow-sm border my-5">
                        <div class="card-body text-start">
                            <div>
                                <h1 class="fs-4 fw-bold text-theme mb-3">
                                    Forgot Password
                                </h1>

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control rounded-2 py-2" id="email"
                                            name="email" placeholder="name@example.com" required>
                                    </div>

                                    <button class="btn btn-theme rounded-2 w-100 fw-semibold" type="submit">
                                        Get Reset Link
                                    </button>
                                    @error('email')
                                        <p class="fs-tiny text-danger mt-2 animated-2 fadeIn">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                    @if (session('status'))
                                        <p class="fs-tiny text-success mt-2 animated-2 fadeIn">
                                            {{ session('status') }}
                                        </p>
                                    @endif
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
