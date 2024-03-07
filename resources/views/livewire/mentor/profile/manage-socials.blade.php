<section>
    <header class="d-flex align-items-center justify-content-between mb-4 gap-3">
        <div>
            <h2 class="fs-5 m-0 fw-semibold">
                Socials
            </h2>
            <p class="m-0">
                Add social links to allow people connect with you
            </p>
        </div>
        <div>
            <x-edit-form-fields />
        </div>
    </header>

    <form wire:submit="saveSocials" class="col-12 col-md-6">
        <div class="mb-3">
            <label for="instagram" class="form-label fw-semibold m-0">Instagram</label>
            <input wire:model="instagram" type="text" class="form-control rounded-3 py-2 border-2 editable"
                id="instagram" placeholder="https://instagram.com/..." name="instagram" disabled>
        </div>
        <div class="mb-3">
            <label for="linkedin" class="form-label fw-semibold m-0">LinkedIn</label>
            <input wire:model="linkedin" type="text" class="form-control rounded-3 py-2 border-2 editable"
                id="linkedin" placeholder="https://linkedin.com/in/..." name="linkedin" disabled>
        </div>
        <div class="mb-3">
            <label for="twitter" class="form-label fw-semibold m-0">X (formerly twitter)</label>
            <input wire:model="x_twitter" type="text" class="form-control rounded-3 py-2 border-2 editable"
                id="twitter" placeholder="https://x.com/..." name="x_twitter" disabled>
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label fw-semibold m-0">Facebook</label>
            <input wire:model="facebook" type="text" class="form-control rounded-3 py-2 border-2 editable"
                id="facebook" placeholder="https://facebook.com/..." name="facebook" disabled>
        </div>
        <div class="mb-3">
            <label for="image_path" class="form-label fw-semibold m-0">Profile picture</label>
            <input type="file" class="form-control rounded-3 py-2 border-2 editable" id="image_path"
                name="image_path" disabled>
        </div>

        <x-profile-submit-btn />
    </form>
</section>
