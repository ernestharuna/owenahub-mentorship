<div class="col">
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
    <div class="card h-100 border-0 border-start shadow-sm rounded-4">
        <div class="mb-2" id="course-card-img">
            @if ($mentor->social_handle && $mentor->social_handle->image_path)
                {{-- <img src="{{ asset('storage/' . $mentor->image_path) }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-3 border d-block img-fluid w-100 h-100 object-fit-cover"> --}}
                <img src="{{ $mentor->social_handle->image_path }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-3 border d-block img-fluid w-100 h-100 object-fit-cover">
            @else
                <img src="{{ asset('images/default-dp.png') }}" alt="{{ $mentor->first_name }}'s photo"
                    class="rounded-top-3 border d-block img-fluid w-100 h-100 object-fit-cover">
            @endif
        </div>
        <div class="card-body mb-2 px-2 py-0">
            <h5 class="card-title fw-bold fs-5 m-0">{{ $mentor->first_name }} {{ $mentor->last_name }}</h5>
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
            <div class="fs-tiny d-md-flex justify-content-between align-items-center pb-1">
                <p class="m-md-0 mb-2 fw-semibold bg-body-secondary secondary px-2 rounded d-inline-block">
                    {{ $mentor->misc_info ? $mentor->misc_info->skills : 'New mentor' }}
                </p>
                <div>
                    <a href="{{ route('user.mentor.show', $mentor->id) }}"
                        class="px-3 text-decoration-none w-100 fw-bold fs-tiny btn btn-outline-dark rounded-4">
                        View profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
