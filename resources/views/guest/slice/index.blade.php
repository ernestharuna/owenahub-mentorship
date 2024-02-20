<x-layouts.app>
    <div class="container py-5">
        <h1>
            <span class="animated-text-2">Courses</span> <span class="fw-light">(slices)</span>
        </h1>
        <div>
            <p>
                Our slices are like mini-courses that allow you gain insights from mentors. <br>
            </p>
        </div>
        <section class="my-4">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @forelse ($slices as $slice)
                    <div class="col">
                        <div class="card h-100 shadow-sm rounded-3">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body p-2">
                                @if ($slice->admin)
                                    <p class="fs-tiny text-secondary fw-semibold m-0 mb-2">
                                        <span>Curated by OwenaHub</span>
                                        <img src="{{ asset('images/logo.png') }}" alt="..." width="15"
                                            style="position: relative; top: -2px;">
                                    </p>
                                @endif
                                <h5 class="card-title fw-bold mb-0">{{ $slice->title }}</h5>
                                <div class="card-text text-secondary fs-tiny">
                                    <p class="mt-1 fs-6 text-secondary lh-sm">
                                        {{ $slice->about }}
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div
                                    class="text-secondary fs-tiny p-2 d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0">
                                            <i class="bi bi-tags-fill"></i> {{ $slice->category }}
                                        </p>
                                        <p class="m-0">
                                            <i class="bi bi-clock-history"></i>
                                            {{ $slice->duration }} weeks &middot;

                                            <span class="fw-bold text-primary">
                                                {{ $slice->price ? 'N' . $slice->price : 'FREE' }}
                                            </span>
                                        </p>
                                    </div>

                                    <div class="btn btn-secondary btn-sm fw-bold rounded-5">
                                        <a href="{{ route('guest.slices.show', $slice->id) }}"
                                            class="text-white px-3 d-block text-decoration-none w-100 fw-bold">
                                            Start now
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <p class="p-2 bg-f2 text-secondary">
                        Slices Unavailable ☹
                    </p>
                @endforelse
            </div>
        </section>
    </div>
    <section class="mt-5">
        <div class="bg-theme">
            <section class="container py-5">
                <div>
                    <div class="text-center">
                        <h2 class="fs-1 fw-bold">Read Something Motivating.</h2>
                        <p class="my-4 fs-tiny font-monospace">
                            Enriching Repository Access a Wealth of Informative <br>Articles on OwenaHub's Blogs
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('guest.articles.index') }}" type="button"
                            class="btn rounded-1 shadow btn-light">
                            <span class="text-dark fs-5 fw-medium"> Quick View
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
