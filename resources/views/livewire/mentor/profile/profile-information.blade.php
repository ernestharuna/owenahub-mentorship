<section>
    <header class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h2 class="fs-5 m-0 fw-semibold">
                Profile Information
            </h2>
            <p class="m-0">
                Updated your profile's information
            </p>
        </div>
        <div>
            <x-edit-form-fields />
        </div>
    </header>

    <form wire:submit="saveInfo" class="col-12 col-md-6">
        <div class="mb-3">
            <label for="firstName" class="form-label fw-semibold m-0 border-2">First name</label>
            <input type="text" class="form-control rounded-3 py-2 border-2 editable" id="firstName" placeholder="John"
                name="first_name" wire:model="first_name" disabled>
            @error('first_name')
                <x-error :message="$message" />
            @enderror
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label fw-semibold m-0">Last name</label>
            <input type="text" class="form-control rounded-3 py-2 border-2 editable" id="lastName" name="last_name"
                placeholder="Doe" wire:model="last_name" disabled>
            @error('last_name')
                <x-error :message="$message" />
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label fw-semibold m-0">Email Address</label>
            <input type="text" class="form-control rounded-3 py-2 border-2" id="email" name="email"
                placeholder="John" value="{{ Auth::user()->email }}" disabled>
        </div>

        <x-profile-submit-btn />
    </form>
</section>
