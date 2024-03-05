<section>
    <header>
        <h2 class="fs-5 m-0 fw-semibold">
            Profile Information
        </h2>
        <p>
            Updated your profile's information
        </p>

        <form action="#" class="col-12 col-md-6">
            <div class="mb-3">
                <label for="firstName" class="form-label fw-semibold m-0 border-2">First name</label>
                <input type="text" class="form-control rounded-3 py-2 border-2" id="firstName" placeholder="John"
                    name="first_name" value="{{ Auth::user()->first_name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label fw-semibold m-0">Last name</label>
                <input type="text" class="form-control rounded-3 py-2 border-2" id="lastName" name="last_name"
                    placeholder="John" value="{{ Auth::user()->last_name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold m-0">Email Address</label>
                <input type="text" class="form-control rounded-3 py-2 border-2" id="email" name="email"
                    placeholder="John" value="{{ Auth::user()->email }}" disabled>
            </div>

            <button class="btn btn-dark rounded-3 px-4 fs-tiny mt-3 fw-semibold">
                SAVE
            </button>
        </form>
    </header>
</section>
