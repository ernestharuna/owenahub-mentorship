<x-layouts.app>
    <div class="d-flex align-items-center justify-content-center">
        <div class="bg-white border rounded-3 shadow col-md-4 col-lg-4 mx-3 my-5 p-4">

            <h4 class="text-center fw-bold">
                <i class="bi bi-person-circle fs-large"></i> <br>
                <span class="text-secondary">admin</span>
            </h4>

            <form method="POST" action={{ route('admin.login.req') }} class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="email" class="form-label m-0">Email</label>
                    <input type="email" class="form-control rounded rounded-0 py-2" name="email"
                        placeholder="john@owenahub.com">
                </div>

                <div class="col-12">
                    <label for="password" class="form-label m-0">Password</label>
                    <input type="password" class="form-control rounded rounded-0 py-2" name="password"
                        placeholder="Password">
                </div>

                <div class="col-12 my-4">
                    <button type="submit"
                        class="btn btn-dark rounded rounded-0 shadow fw-light text-uppercase fs-6 w-100">
                        Login
                    </button>
                </div>
                <hr class="m-0">

                <div>
                    @error('email')
                        <x-error :message="$message" />
                    @enderror
                    @error('password')
                        <x-error :message="$message" />
                    @enderror
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
