<x-layouts.app>
    <div class='animated-2 fadeIn'>
        <header class="container text-center mt-5">
            <div>
                <h1 class='mb-4 fs-large fw-bold'>
                    Empowering learners to thrive <br class="d-none d-md-block">
                    <span class="text-theme animated-text">through mentorship.</span>
                </h1>
                <p>
                    We offer a vibrant platform for learners <br class="d-md-block d-none" />
                    to gain <em>career insights</em> from experienced mentors.
                </p>

                <div class="cta mt-4">
                    <a href="{{ route('guest.slices.index') }}" class='text-decoration-none'>
                        <button class="btn btn-theme rounded rounded-0 text-uppercase fs-6 fw-bold shadow text-dark">
                            Start Learning Now <i class="bi bi-arrow-right"></i>
                        </button>
                    </a>
                    <br />
                    <div class="mt-2">
                        <small class='fst-italic fs-tiny'>
                            <i class="bi bi-stars text-primary"></i> 500+ weekly readers
                        </small>
                    </div>
                </div>

                <span class=glow></span>
                <span class=glow_2></span>
            </div>
        </header>

        <section class=features>
            <div class="container">
                <div class="shadow shadow-0 feature_box">
                    <div>
                        <i class="bi bi-play-btn text-theme"></i>
                        <div>
                            <strong>Swift Sips</strong><br />
                            <p class="lh-sm">
                                Get into our short courses; <br class='hidden' />
                                compact and focused.
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-person-workspace text-theme"></i>
                        <div>
                            <strong>Expert Sessions</strong><br />
                            <p class="lh-sm">
                                Connect With Skilled Mentors <br class="hidden" />
                                That Inspire You.
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-journal-bookmark text-theme"></i>
                        <div>
                            <strong>Enriching Repository</strong><br />
                            <p class="lh-sm">
                                Access a Wealth of Informative Articles<br class="hidden" />
                                on Owena&apos;s Blogs
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-people text-theme"></i>
                        <div>
                            <strong>Private Session</strong><br />
                            <p class="lh-sm">
                                Private Sessions tailored to <br class="hidden" />
                                your individual needs and goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class='quote container'>
        <div class="text-center py-2">
            <figure class="text-center text-dark m-0">
                <blockquote class="blockquote">
                    <p class='fs-6'>
                        <small>OwenaHub is resource rich for people wishing to pick up tips and tricks and gain
                            perspective in their career path.</small>
                    </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <span>Ernest Haruna, <i>founder</i></span>
                </figcaption>
            </figure>
        </div>
    </section>

    <section class='mt-5 py-5 bg-f2'>
        <div class="container">
            <h2 class='fw-bold fs-3 mb-4'>
                <span class="circle shadow"><i class="bi bi-gift-fill"></i></span> Editor's Picks
            </h2>

            <div class="text-start mx-auto">
                {{-- load some articles here --}}
                <livewire:recommended-articles />
            </div>
        </div>
        <div class='mt-5 text-center'>
            <a href="/articles">
                <button class="btn btn-dark text-white rounded rounded-0 text-uppercase fs-6 fw-light shadow"
                    type='button'>
                    View More <i class="bi bi-arrow-right"></i>
                </button>
            </a>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="text-start">
                <h2 class='fw-bold fs-3 mb-4'>
                    <span class="circle shadow">
                        <i class="bi bi-box-seam-fill"></i>
                    </span>
                    Explore: <span class="text-theme">Take A Slice</span>
                </h2>

                <div class="mb-3">
                    <p class="m-0 container">
                        We organise courses into short and impactful packages<br class="d-md-block d-none" />
                        we call <b> SLICES</b> that allow you learn vital topics <b>within 1 month</b>
                    </p>
                </div>
            </div>

            <div class="d-block d-md-flex flex-wrap align-items-center">
                <x-slice-card />

                <div class="card m-2 bg-theme w-auto" style="width: 16rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">The Most Effective Way To Learn 🚀</h5>
                        <p class="fs-tiny">
                            Our slices are an effective way to learn from mentors on the go
                        </p>
                        <p class="card-text fs-tiny">
                            <span class="px-2 py-1 bg-f2 text-dark d-inline-block rounded-pill border">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </span>
                        </p>
                        <hr>
                        <div>
                            <div>
                                <a href="{{ route('guest.slices.index') }}"
                                    class="btn btn-light rounded rounded-0 fs-tiny px-4 d-block">
                                    View Slices
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="bg-theme-light">
        <section class="container py-5">
            <div>
                <div class="text-center">
                    <h2 class="fs-1 fw-bold">Not your average Tech Newsletter.</h2>
                    <p class="text-secondary my-4 fs-5 font-monospace">
                        Subscribe now to get exclusive insights <br>
                        from experienced mentors.
                    </p>
                </div>
                <div class="text-center">
                    <livewire:subscribe-button />
                </div>
            </div>

        </section>
    </div>
</x-layouts.app>
