<x-layouts.app>
    <div class="container mt-4">
        <h1>
            <span class="text-theme fw-bold">OwenaHub</span> slices
        </h1>
        <div>
            <p class="fs-6 m-0 fw-semibold text-secondary">
                Our slices are like mini-courses that allow you learn vital topics from mentors on the Go.
            </p>
            <p class="m-0">
                <i class="bi bi-people-fill text-theme "></i>
                <span class="text-primary fw-semibold">
                    734 active users
                </span>
            </p>
        </div>
        <section class="my-4">
            <div class="row row-cols-2 row-cols-md-4 g-4">
                @forelse ($slices as $slice)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            {{-- <img src="{{ asset('images/generic_img.jpg') }}" class="card-img-top" alt="..."> --}}
                            <div class="card-body p-2">
                                <h5 class="card-title fw-bold">{{ $slice->title }}</h5>
                                <p class="">
                                    {{ $slice->about }}
                                </p>
                                <p class="fs-tiny text-secondary fw-semibold m-0">
                                    {{ $slice->admin->first_name }} {{ $slice->admin->last_name }}
                                    <i class="bi bi-shield-fill-check"></i>
                                </p>
                                <p class="card-text fs-tiny m-0">
                                    <span class="text-dark d-inline-block">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>

                                        <span class="fs-tiny text-secondary"> — (7,989 learners on this slice)</span>
                                    </span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <p class="text-theme fw-bold mt-1 mb-0">
                                        <a href="{{ route('guest.slices.show', $slice->id) }}"
                                            class="btn btn-theme fs-tiny px-3 fw-semibold p-1 rounded rounded-0">
                                            TAKE A BITE
                                        </a>
                                    </p>

                                    <div class="text-theme fw-bold mt-1 mb-0">
                                        {{ $slice->price ? 'N' . $slice->price : 'Free' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="p-2 bg-f2 text-secondary">
                        Slices Unavailable
                    </p>
                @endforelse
            </div>
        </section>
    </div>
    <section>
        <div class="bg-theme-light">
            <section class="container py-5">
                <div>
                    <div class="text-center">
                        <h2 class="fs-1 fw-bold">Read Something Motivating.</h2>
                        <p class="text-secondary my-4 fs-5 font-monospace">
                            Enriching Repository Access a Wealth of Informative <br>Articles on OwenaHub's Blogs
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('guest.articles.index') }}" type="button"
                            class="btn rounded rounded-0 btn-theme">
                            <span class="text-white fs-5 fw-medium"> Quick View
                            </span> — <small class="fw-light fs-tiny">
                                it's free <i class="bi bi-cart-fill text-danger"></i>
                            </small>
                        </a>
                    </div>
                </div>

            </section>
        </div>
    </section>
</x-layouts.app>
