<style>
    #course-card-img {
        width: 100%;
        height: 200px;
    }

    @media screen and (max-width: 760px) {
        #course-card-img {
            width: 100%;
            height: 250px;
        }
    }
</style>

<div class="col">
    <div class="card h-100 border-0 border-start shadow-sm rounded-4">
        <div class="mb-2" id="course-card-img">
            @if ($mentor->social_handle && $mentor->social_handle->image_path)
                <img src="{{ $mentor->social_handle->image_path }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-4 border d-block img-fluid w-100 h-100 object-fit-cover">
            @elseif ($mentor->display_image && $mentor->display_image->image_path != null)
                <img src="{{ asset('storage/' . $mentor->display_image->image_path) }}"
                    alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-4 border d-block img-fluid w-100 h-100 object-fit-cover">
            @else
                <img src="{{ asset('images/default-dp.png') }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-4 border d-block img-fluid w-100 h-100 object-fit-cover">
            @endif
        </div>
        <div class="card-body mb-2 px-2 py-0">
            <h5 class="card-title fw-semibold fs-5 m-0">
                {{ $mentor->first_name }} {{ $mentor->last_name }}
                <span class="fs-tiny">
                    @if ($mentor->email_verified_at)
                        <span class="p-1 bg-light-green text-success py-0 rounded">approved</span>
                    @else
                        <span class="p-1 bg-danger-subtle text-danger py-0 rounded">suspended</span>
                    @endif
                </span>
            </h5>
            <div class="mb-2">
                <p class="m-0">
                    <i class="bi bi-briefcase me-1 fs-5" style="position: relative; top:2px;"></i>
                    {{ $mentor->misc_info ? $mentor->misc_info->expertise : 'New mentor' }}
                </p>
                <div class="text-theme fs-tiny">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <span class="text-dark">
                        (4.8)
                    </span>
                </div>
            </div>
        </div>
        <div class="card-footer px-2 pt-0 border-0 bg-white rounded-4">
            <div class="fs-tiny d-flex justify-content-between align-items-center flex-wrap pb-1">
                <p class="m-0 fw-semibold bg-body-secondary secondary px-2 rounded d-inline-block">
                    @if ($mentor->misc_info)
                        {{ $mentor->misc_info->count() > 0 ? Str::limit($mentor->misc_info->skills, 25, '...') : 'New mentor' }}
                    @endif
                </p>
                <div>
                    <a href="{{ route('admin.mentors.show', $mentor->id) }}"
                        class="px-4 text-decoration-none w-100 fw-semibold fs-tiny btn btn-outline-dark rounded-3">
                        View profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
