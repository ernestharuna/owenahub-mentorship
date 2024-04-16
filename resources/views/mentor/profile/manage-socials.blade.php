<x-mentor.profile-layout>
    <div class="mt-5">
        <a href="{{ route('mentor.profile.index') }}"
            class="btn btn-sm btn-theme rounded-4 px-3 fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left me-2"></i> Previous
        </a>
    </div>

    <div class="mt-3 bg-white rounded-4 shadow-sm p-4">
        <livewire:mentor.profile.manage-socials />
    </div>

    @if (Auth::user()->display_image)
        <div class="mt-3 bg-white rounded-4 shadow-sm p-4">
            <form action="{{ route('mentor.profile.update-display-image', Auth::user()->display_image->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label for="image_path" class="form-label fw-semibold m-0">Profile picture</label>
                    <input type="file" class="form-control rounded-3 py-2 border-2 editable" id="image_path"
                        name="image_path" disabled required>
                </div>

                <button wire:loading.attr="disabled" class="btn btn-dark rounded-3 px-4 fs-tiny fw-semibold editable"
                    disabled>
                    UPDATE
                </button>
            </form>
        </div>
    @else
        <div class="mt-3 bg-white rounded-4 shadow-sm p-4">
            <form action="{{ route('mentor.profile.upload-display-image') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image_path" class="form-label fw-semibold m-0">Profile picture</label>
                    <input type="file" class="form-control rounded-3 py-2 border-2 editable" id="image_path"
                        name="image_path" disabled required>
                </div>

                <button wire:loading.attr="disabled" class="btn btn-dark rounded-3 px-4 fs-tiny fw-semibold editable"
                    disabled>
                    UPLOAD
                </button>
            </form>
        </div>
    @endif

    @error('image_path')
        <p class="text-danger fs-6 mt-1">
            {{ $message }}
        </p>
    @enderror
</x-mentor.profile-layout>
