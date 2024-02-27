<div class="col">
    <style>
        #course-card-img {
            width: 100%;
            height: 200px;
        }

        @media screen and (max-width: 760px) {
            #course-card-img {
                width: 100%;
                height: 100px;
            }
        }
    </style>
    <div class="card h-100 border-0 border-start shadow-sm">
        <div class="mb-2" id="course-card-img">
            @if ($slice->image_path)
                <img src="{{ asset('storage/' . $slice->image_path) }}" alt="..."
                    class="rounded-top-3 border d-block img-fluid w-100 h-100 object-fit-cover">
            @else
                <img src="{{ asset('images/generic_img.jpg') }}" alt="..."
                    class="rounded-top-3 border d-block img-fluid w-100 h-100 object-fit-cover">
            @endif
        </div>
        <div class="card-body mb-2 px-2 py-0">
            <h5 class="card-title fw-bold fs-6 m-0">{{ $slice->title }}</h5>
            <div class="mb-2">
                @if ($slice->admin)
                    <p class="fs-tiny fw-semibold m-0">
                        <span>By OwenaHub</span>
                    </p>
                @endif
            </div>
            <div class="fs-tiny d-md-flex justify-content-between align-items-center pb-2">
                <p class="m-md-0 mb-2 bg-body-secondary secondary px-2 rounded d-inline-block">
                    <span class="fw-bold text-dark">
                        {!! $slice->price
                            ? 'N' . number_format($slice->price, 0, '', ',') . " <s class='text-secondary fw-normal'>N3,599</s>"
                            : "FREE - <s class='text-secondary fw-normal'>N1,299</s>" !!}
                    </span>
                </p>
                <div>
                    <a href="{{ route('guest.slices.show', $slice->id) }}"
                        class="px-3 text-decoration-none w-100 fw-bold fs-tiny btn btn-outline-dark btn-sm rounded">
                        View more
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
