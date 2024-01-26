<x-layouts.app>
    <div class="container my-4">
        <h1>
            <span class="text-theme fw-bold">OwenaHub</span> slices
        </h1>
        <div>
            <p class="fw-semibold">
                Our slices are like mini-courses that allow you gain insights from mentors <br>
                Gain perspective in what
                direction to take in starting to learn the craft of web development.
            </p>
        </div>
        <section class="my-4">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @forelse ($slices as $slice)
                    <div class="col">
                        <div class="card h-100 shadow-sm rounded-1">
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
                                    <p class="mt-1 fs-6 fw-semibold text-secondary lh-sm">
                                        {{ $slice->about }}
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="text-secondary fs-tiny p-2">
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
                                <div class="bg-theme text-end text-uppercase fw-bold">
                                    <a href="{{ route('guest.slices.show', $slice->id) }}"
                                        class="text-white p-2 d-block text-decoration-none w-100 fw-bold">
                                        Slice In!
                                    </a>
                                    {{-- @if (Auth::check())
                                    @else
                                        <a href="{{ route('user.register') }}"
                                            class="text-white p-2 d-block text-decoration-none w-100 fw-bold">
                                            Slice In!
                                        </a>
                                    @endif --}}
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
    <section class="mt-5">
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
                            class="btn rounded-1 shadow btn-theme">
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
