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
    <div class="card h-100 border-0 p-1">
        <div class="card-body p-0 mb-2">
            <div class="mb-2" id="course-card-img">
                @if ($slice->image_path)
                    <img src="{{ asset('storage/' . $slice->image_path) }}" alt="..."
                        class="border d-block img-fluid w-100 h-100 object-fit-cover">
                @else
                    <img src="{{ asset('images/generic_img.jpg') }}" alt="..."
                        class="border d-block img-fluid w-100 h-100 object-fit-cover">
                @endif
            </div>
            <h5 class="card-title fw-bold fs-6 m-0">{{ $slice->title }}</h5>
            {{-- <p class="fw-tiny m-0">
                1 week
            </p> --}}
            <div>
                @if ($slice->admin)
                    <p class="fs-tiny fw-semibold m-0">
                        <span>By OwenaHub</span>
                    </p>
                @endif
            </div>

        </div>
        <div class="card-footer rounded-4 border-0 bg-white p-0">
            <div class="fs-tiny d-md-flex justify-content-between align-items-center">

                <p class="m-md-0 mb-2 bg-body-secondary px-2 border d-inline-block">
                    <span class="fw-bold text-dark">
                        {!! $slice->price ? 'N' . $slice->price : "FREE - <s class='text-secondary'>N1,299</s>" !!}
                    </span>
                </p>
                <div>
                    <a href="{{ route('guest.slices.show', $slice->id) }}"
                        class="px-3 text-decoration-none w-100 fw-bold fs-tiny btn btn-outline-dark btn-sm rounded-0">
                        View more
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
