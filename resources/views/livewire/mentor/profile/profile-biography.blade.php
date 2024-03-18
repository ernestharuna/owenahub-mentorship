<section>
    <header class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h2 class="fs-5 mb-2 fw-semibold">
                Other Information
            </h2>
            <p class="m-0 lh-sm">
                Ensure you fill this correctly <br>
                <span class="text-purple fw-semibold">All fields are mandatory for submission</span>
            </p>
        </div>
        <div>
            <x-edit-form-fields />
        </div>
    </header>

    <form wire:submit="saveBio" class="col-12 col-md-6">
        <div class="mb-3">
            <label for="gender" class="form-label fw-semibold m-0">Gender</label>
            <select wire:model="gender" id="gender" class="form-control rounded-3 py-2 border-2 editable" disabled>
                <option value="" selected disabled>
                    Select gender
                </option>
                <option value="Male">
                    Male
                </option>
                <option value="Female">
                    Female
                </option>
                <option value="Other">
                    Other
                </option>
            </select>
            @error('gender')
                <x-error :message="$message" />
            @enderror
        </div>

        <div class="mb-3">
            <label for="expertise" class="form-label fw-semibold m-0">Expertise</label>
            <select wire:model="expertise" id="expertise" class="form-control rounded-3 py-2 border-2 editable"
                disabled>
                <option value="" selected disabled>
                    Select expertise
                </option>
                <option value="Software Engineer">
                    Software Engineer
                </option>
                <option value="Web Developer">
                    Web Developer
                </option>
                <option value="Mobile Application Developer">
                    Mobile Developer
                </option>
                <option value="DevOps">
                    DevOps Engineer
                </option>
                <option value="Product Manager">
                    Product Manager
                </option>
                <option value="UI/UX Designer">
                    UI/UX Designer
                </option>
                <option value="Data Scientist">
                    Data Scientist
                </option>
                <option value="Career Coach">
                    Career Coach
                </option>
                <option value="Tech Enthusiast">
                    Tech Enthusiast
                </option>
            </select>
            @error('expertise')
                <x-error :message="$message" />
            @enderror
        </div>

        <div class="mb-3">
            <label for="company" class="form-label fw-semibold m-0">
                Company
            </label>
            <input wire:model="company" type="text" class="form-control rounded-3 py-2 border-2 editable"
                id="company" name="company" placeholder="ACME corp" max="20" disabled>
            @error('company')
                <x-error :message="$message" />
            @enderror
        </div>

        <div class="mb-3">
            <label for="role" class="form-label fw-semibold m-0">
                Role <i class="ms-1 text-primary">
                    (what you currently work as)</i>
            </label>
            <input wire:model="role" type="text" class="form-control rounded-3 py-2 border-2 editable" id="role"
                name="role" placeholder="Front-end developer" max="20" disabled>
            @error('role')
                <x-error :message="$message" />
            @enderror
        </div>

        <div class="mb-3">
            <label for="skills" class="form-label fw-semibold m-0">
                Your skills <i class="ms-1 text-red">
                    (separate each skill with a
                    comma)</i>
            </label>
            <input wire:model="skills" type="text" class="form-control rounded-3 py-2 border-2 editable"
                id="skills" name="skills" placeholder="Javascript, TypeScript, Angular" max="20" disabled>
            @error('skills')
                <x-error :message="$message" />
            @enderror
        </div>

        <div class="mb-3">
            <label for="country" class="form-label fw-semibold m-0">Country</label>
            <select wire:model="country" id="country" class="form-control rounded-3 py-2 border-2 editable" disabled>
                @foreach ($countries as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                @endforeach
            </select>
            @error('country')
                <x-error :message="$message" />
            @enderror
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label fw-semibold m-0">About you</label>
            <textarea wire:model="bio" name="bio" id="bio" cols="30" rows="10"
                class="form-control rounded-3 py-2 border-2 editable"
                placeholder="I am a software enthusiast with * years of experience" disabled></textarea>
            @error('bio')
                <x-error :message="$message" />
            @enderror
        </div>

        <x-profile-submit-btn />
    </form>
</section>
