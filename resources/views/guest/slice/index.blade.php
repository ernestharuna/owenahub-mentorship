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
            <div class="row row-cols-2 row-cols-lg-4 g-3">
                @forelse ($slices as $slice)
                    <x-course-card :slice="$slice" />
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
                            class="btn rounded-5 px-5 shadow btn-light">
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
