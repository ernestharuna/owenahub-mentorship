<section>
    <header class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h2 class="fs-5 m-0 fw-semibold">
                Other Information
            </h2>
            <p class="m-0">
                Ensure you fill this correctly
            </p>
        </div>
        <div>
            <x-edit-form-fields />
        </div>
    </header>

    <form wire:submit="saveBio" class="col-12 col-md-6">
        <div class="mb-3">
            <label for="expertise" class="form-label fw-semibold m-0">Expertise</label>
            <select wire:model="expertise" id="expertise" class="form-control rounded-3 py-2 border-2 editable" disabled>
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
            <label for="skills" class="form-label fw-semibold m-0">
                Your skills <i class="text-red fw-semibold">
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
