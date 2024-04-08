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
                {{-- <img src="{{ asset('storage/' . $mentor->image_path) }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-3 border d-block img-fluid w-100 h-100 object-fit-cover"> --}}
                <img src="{{ $mentor->social_handle->image_path }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-4 border d-block img-fluid w-100 h-100 object-fit-cover">
            @else
                <img src="{{ asset('images/default-dp.png') }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-4 border d-block img-fluid w-100 h-100 object-fit-cover">
            @endif
        </div>
        <div class="card-body mb-2 px-2 py-0">
            <h5 class="card-title fs-5 m-0" style="font-weight: 600;">
                {{ $mentor->first_name }} {{ $mentor->last_name }}
                <i class="bi bi-patch-check-fill text-red opacity-50 fs-6" style="position: relative; top: -1px;"></i>
            </h5>
            <div class="mb-2">
                <div class="">
                    <p class="m-0 fw-semibold">
                        {{ $mentor->misc_info->role ?? '' }} at {{ $mentor->misc_info->company ?? '' }}
                    </p>
                    <p class="m-0">
                        <i class="bi bi-lightning-fill text-purple"></i>{{ $mentor->misc_info->expertise ?? '' }}
                    </p>
                </div>
                {{-- <div class="text-theme fs-tiny mt-2">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <span class="text-dark">
                        (4.8)
                    </span>
                </div> --}}
            </div>
        </div>
        <div class="card-footer px-2 pt-0 border-0 bg-white rounded-4">
            <div
                class="fs-tiny d-flex justify-content-between align-items-center flex-wrap px-2 py-2 bg-theme-light rounded-3">
                <p class="m-0 fw-semibold bg-white secondary px-2 rounded d-inline-block">
                    @if ($mentor->misc_info)
                        {{ $mentor->misc_info->count() > 0 ? Str::limit($mentor->misc_info->skills, 25, '...') : 'New mentor' }}
                    @endif
                </p>
                <div>
                    <a href="{{ route('user.mentor.show', $mentor->id) }}"
                        class="px-4 text-decoration-none w-100 fw-semibold fs-tiny btn btn-sm btn-theme rounded-3">
                        View profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
