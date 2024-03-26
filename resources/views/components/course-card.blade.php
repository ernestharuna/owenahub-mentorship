<div class="col">
    <style>
        #course-card-img {
            width: 100%;
            height: 200px;
        }

        @media screen and (max-width: 760px) {
            #course-card-img {
                width: 100%;
                height: 140px;
            }
        }
    </style>
    <div class="card h-100 border border-start rounded-2">
        <div class="mb-2" id="course-card-img">
            @if ($slice->image_path)
                <img src="{{ asset('storage/' . $slice->image_path) }}" alt="..."
                    class="rounded-top-2 d-block img-fluid w-100 h-100 object-fit-cover">
            @else
                <img src="{{ asset('images/default-course-img.png') }}" alt="..."
                    class="rounded-top-2 d-block img-fluid w-100 h-100 object-fit-cover">
            @endif
        </div>
        <div class="card-body mb-2 px-2 py-0">
            <h3 class="card-title fs-5 fw-semibold m-0">
                <a href="{{ route('guest.slices.show', $slice->id) }}" class="text-decoration-none text-dark">
                    {{ $slice->title }}
                </a>
            </h3>
            <div class="mb-2">
                @if ($slice->admin)
                    <p class="fs-tiny fw-normal m-0">
                        <span>By OwenaHub</span>
                    </p>
                @endif
                <div class="text-theme fs-tiny">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <span class="text-dark">
                        (4.8)
                    </span>
                </div>
            </div>
        </div>
        <div class="card-footer px-2 pt-0 border-0 bg-white rounded-4">
            <div class="fs-6 pb-1">
                <p class="mb-0 d-inline-block">
                    <span class="fw-semibold text-dark">
                        {!! $slice->price
                            ? '<s>N</s>' . number_format($slice->price, 0, '', ',') . " <s class='text-secondary fw-normal'>N1,599</s>"
                            : "<span class='text-theme'>FREE</span> <s class='text-secondary fw-normal'>N1,599</s>" !!}
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
