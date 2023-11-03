<x-layouts.app>

    <head>
        <title>OwenaHub | The Learner's Hub</title>
    </head>
    <div class='animated-2 fadeIn'>
        <section class="container text-center mt-5">
            <div>
                <h1 class='mb-4 fs-large fw-bold'>
                    Empowering learners to thrive <br class="d-none d-md-block">
                    <span class="text-theme">through mentorship.</span>
                </h1>
                <p>
                    We offer a vibrant platform for learners <br class="d-md-block d-none" />
                    to gain <em>career insights</em> from experienced mentors.
                </p>

                <div class="cta mt-4">
                    <a href="/articles" class='text-decoration-none'>
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
        </section>

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
                <h3 class='fw-bold fs-4 mb-4'>
                    <span class="circle shadow">5</span> FEATURED ARTICLES
                </h3>

                <div class="text-start mx-auto">
                    {{-- load some articles here --}}
                    {{-- <livewire:recommended-articles /> --}}
                </div>
            </div>
        </section>

        <section>
            <div class='my-5 text-center'>
                <a href="/articles">
                    <button class="btn btn-dark text-white rounded rounded-0 text-uppercase fs-6 fw-light shadow"
                        type='button'>
                        View More <i class="bi bi-arrow-right"></i>
                    </button>
                </a>
            </div>
        </section>
    </div>
</x-layouts.app>
