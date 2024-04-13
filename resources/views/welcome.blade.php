<x-layouts.app>
    <style>
        div.banner {
            margin-top: 400px;
            /* background-image: linear-gradient(rgba(50, 50, 50, 0.3), rgba(51, 51, 51, 0.3)), linear-gradient(rgba(50, 50, 50, 0.3), rgba(50, 50, 50, 0.3)), url('/assets/img/rewards-card.png'); */
            background-image: linear-gradient(#3232324d, #3333334d), url('/images/logo.png'), linear-gradient(45deg, #D13863, #6649D7);
            background-position: right bottom, 90% 30%, left bottom;
            background-blend-mode: normal;
            background-repeat: no-repeat, no-repeat, no-repeat;
            background-size: cover, 240px 240px, cover;
        }

        .secondary-banner {
            background-image: linear-gradient(#3232324d, #3333334d), url('/images/owenabulb.png'), linear-gradient(45deg, purple, #f6a700);
            background-position: right bottom, 70% 30%, left bottom;
            background-blend-mode: normal;
            background-repeat: no-repeat, no-repeat, no-repeat;
            background-size: cover, 300px 300px, cover;
        }
    </style>


    <div class='animated-2 fadeIn bg-theme-2 py-5'>
        <header class="container py-lg-5 text-center">
            <div>
                <h1 class='mb-3 display-2 fw-boldest'>
                    Start your tech journey <br class="d-none d-lg-block">with expert mentors
                    {{-- Start your <span class="animated-text-2">tech career</span> with
                    <br class="d-none d-lg-block"> Africa's leading mentors --}}
                </h1>
                <p class="mt-4 mb-4">
                    Tailored for tech career starters, enabling faster and more effective
                    <br class="d-none d-lg-block"> learning through personalized
                    guidance and experienced mentors.
                    {{-- OwenaHub is a mentorship platform for tech enthusiansts. We offer a vibrant platform
                    <br class="d-none d-lg-block"> for learners to
                    gain <b>career insights</b> from experienced mentors. --}}
                </p>

                <div class="cta">
                    <a href="{{ route('guest.onboarding.slices') }}"
                        class='text-decoration-none btn btn-dark rounded-5 fw-semibold px-5 py-2 shadow text-white d-md-inline-block d-block'>
                        Get Started <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="{{ route('guest.slices.index') }}"
                        class='btn btn-outline-dark fw-semibold rounded-5 px-4 py-2 text-center d-md-inline-block d-block ms-md-3 mt-3 mt-md-0'>
                        Start with courses <i class="bi bi-stars text-primary"></i>
                    </a>
                </div>

                {{-- <span class=glow> --}}
                <img src="{{ asset('images/logo.png') }}" alt="..." class="glow">
                {{-- </span> --}}
                {{-- <span class=glow_2></span> --}}
            </div>
        </header>

        {{-- <section class=features>
            <div class="container">
                <div class="shadow shadow-0 feature_box rounded-4">
                    <div>
                        <i class="bi bi-play-btn text-red"></i>
                        <div>
                            <strong>Swift Sips</strong><br />
                            <p class="lh-sm">
                                Get into our short courses; <br class='hidden' />
                                compact and focused.
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-person-workspace text-primary"></i>
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
                        <i class="bi bi-people text-success"></i>
                        <div>
                            <strong>Virtual Teams</strong><br />
                            <p class="lh-sm">
                                Join teams to work on <br class="hidden" />
                                real-life projects.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>

    <section class="bg-f2">
        <div class="container">
            <div class="py-5">
                <div class="text-dark text-center container pb-4">
                    <h2 class='fw-boldest fs-1'>
                        Expand your skillset <br class="d-md-none"> with <span class="animated-text">OwenaHub</span>.
                    </h2>
                    <p class="text-secondary">
                        Find resources curated by our team from for Tech Enthusiasts.
                    </p>
                </div>

                <div class="d-lg-flex justify-content-center">
                    <div class="rounded-4 p-3 shadow-sm bg-white mb-3 d-flex align-items-center">
                        <div class="me-3 rounded-5 bg-light-purple p-2">
                            <img src="{{ asset('images/svg/sidebar-code.svg') }}" alt="..."
                                class="d-block img-fluid" width="40">
                        </div>
                        <div>
                            <h3 class="fs-4 fw-boldest m-0">Web Engineering</h3>
                            <p class="m-0">
                                <a class="text-dark text-decoration-none" href="{{ route('guest.slices.index') }}">
                                    View Resource
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        &nbsp;
                        &nbsp;
                    </div>
                    <div class="rounded-4 p-3 shadow-sm bg-white mb-3 d-flex align-items-center">
                        <div class="me-3 rounded-5 bg-theme-light p-2">
                            <img src="{{ asset('images/svg/code-square.svg') }}" alt="..."
                                class="d-block img-fluid" width="40">
                        </div>
                        <div>
                            <h3 class="fs-4 fw-boldest m-0">Programming</h3>
                            <p class="m-0">
                                <a class="text-dark text-decoration-none" href="{{ route('guest.slices.index') }}">
                                    View Resource
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="d-lg-flex justify-content-center">
                    <div class="rounded-4 p-3 shadow-sm bg-white mb-3 d-flex align-items-center">
                        <div class="me-3 rounded-5 bg-light-cyan p-2">
                            <img src="{{ asset('images/svg/widget.svg') }}" alt="..." class="d-block img-fluid"
                                width="40">
                        </div>
                        <div>
                            <h3 class="fs-4 fw-boldest m-0">Software Development Methodologies</h3>
                            <p class="m-0">
                                <a class="text-dark text-decoration-none" href="{{ route('guest.slices.index') }}">
                                    View Resource
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        &nbsp;
                        &nbsp;
                    </div>
                    <div class="rounded-4 p-3 shadow-sm bg-white mb-3 d-flex align-items-center">
                        <div class="me-3 rounded-5 bg-light-green p-2">
                            <img src="{{ asset('images/svg/case-minimalistic.svg') }}" alt="..."
                                class="d-block img-fluid" width="40">
                        </div>
                        <div>
                            <h3 class="fs-4 fw-boldest m-0">Career & Development</h3>
                            <p class="m-0">
                                <a class="text-dark text-decoration-none" href="{{ route('guest.slices.index') }}">
                                    View Resource
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white mb-5">
        <div class="container my-5">
            <div class="py-4 px-4 my-5 bg-dark rounded-4 banner">
                <h2 class='fw-boldest fs-1 text-white mb-3'>
                    Fast-track your tech career <br class="d-none d-md-block">
                    <span class="d-md-inline-block d-none"> with <span class="animated-text">OwenaHub</span></span>
                </h2>
                <p class="m-0 text-white">
                    Access a lineup of extraordinary mentors from various backgrounds with just a click,
                    <br class="d-none d-lg-block"> designed to
                    provide quick wins and valuable insights.
                </p>
            </div>

            <div class="d-md-flex align-items-center justify-content-evenly gap-5 pt-5">
                <div>
                    <img src="{{ asset('images/personalised.png') }}" alt="..." class="img-fluid w-100">
                </div>
                <div>
                    <div class="text-dark pt-5 px-4">
                        <div>
                            <div>
                                <h3 class="text-success display-5 fw-bold mb-4">
                                    Personalised learning
                                </h3>
                                <p class="fs-4 lh-sm mb-4">
                                    OwenaHub offers courses focused on mentorship. <br class="d-none d-lg-block">
                                    Enroll in a mentorship courses & learn at your own pace.
                                    {{-- Schedule your mentorship session & get advice and 
                                    insights to move faster with your work. --}}
                                </p>
                                <a href="{{ route('guest.slices.index') }}"
                                    class="btn btn-outline-dark rounded-5 px-5 py-2 fw-semibold">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container">
            <div class="d-md-flex align-items-center justify-content-evenly gap-5 flex-row-reverse">
                <div class="pt-5">
                    <img src="{{ asset('images/long-term-goals.png') }}" alt="..." class="img-fluid w-100">
                </div>
                <div>
                    <div class="text-dark pt-5 px-4">
                        <div class="mb-5">
                            <div>
                                <span class="text-red fs-5 fw-bold">Visions Into Reality</span>
                                <h3 class="text-dark display-4 fw-bold mb-4 mt-3">
                                    Stop dreaming, start achieving
                                </h3>
                                <p class="fs-4 lh-sm mb-4">
                                    Work towards long-term goals by connecting <br class="d-none d-lg-block"> with
                                    mentors for private sessions.
                                </p>
                                <a href="{{ route('user.mentor.index') }}"
                                    class="btn btn-outline-dark rounded-5 px-5 py-2 fw-semibold">
                                    See mentors for you
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="mb-md-5">
        <div class="container">
            <div class="d-md-flex align-items-center justify-content-evenly gap-5">
                <div class="pt-5">
                    <img src="{{ asset('images/get-access.png') }}" alt="..." class="img-fluid w-100">
                </div>
                <div>
                    <div class="text-dark py-5 px-4">
                        <div class="mb-5">
                            <div>
                                <span class="text-purple fs-5 fw-bold">Talk With Experts</span>
                                <h3 class="text-dark display-4 fw-bold mb-4">
                                    Easy access to the <br class="d-none d-lg-block"> world’s best
                                </h3>
                                <p class="fs-4 lh-sm mb-4">
                                    From Web Development to Software Engineering, <br class="d-none d-lg-block"> there
                                    are thousands of
                                    top experts, you can get access for free.
                                </p>
                                <a href="/about" class="btn btn-outline-dark rounded-5 px-5 py-2 fw-semibold">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class='py-5 bg-dark secondary-banner'>
        <div class="container">
            <div>
                <h3 class="fw-bold text-theme fs-1 text-shadow">
                    Contribute to the future
                </h3>
                <p class="text-light">
                    Shape the future of the tech industry by fostering the next generation of talent.
                </p>
                <a href="/mentor/getstarted"
                    class="btn btn-theme px-4 py-2 text-dark rounded-5 fw-semibold mt-3 shadow">
                    Become a mentor <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
            <img src="{{ asset('images/logo.png') }}" alt="..." class="glow">
        </div>
    </div>

    <section class="bg-f2 py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class='fw-bold fs-2'>
                    Testimonials from <span class="animated-text">OwenaHub</span>
                </h2>
                <p>
                    Here's what people say about us
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/people/dan-senior.jpg') }}" alt="..."
                                    class="image-fluid rounded-4 me-2" width="40">
                                <div>
                                    <h5 class="card-title mb-0">Vincent Paul</h5>
                                    <span class="text-warning fs-tiny m-0">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="card-text lh-sm">
                                OwenaHub has cracked the mentorship code! I've gotten the best actionable tips.
                                Best boost for my career so far. Thank you OwenaHub
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/people/christopher-campbell.jpg') }}" alt="..."
                                    class="image-fluid rounded-4 me-2" width="40">
                                <div>
                                    <h5 class="card-title m-0">Esther Campbell</h5>
                                    <span class="text-warning fs-tiny m-0">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                            </div>

                            <p class="card-text lh-sm">
                                Best thing I've come across this year, I've gotten the answers to many questions I've
                                had in my head for ages now! 👌🏼
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/people/andre-bush.jpg') }}" alt="..."
                                    class="image-fluid rounded-4 me-2" width="40">
                                <div>
                                    <h5 class="card-title m-0">Johnson Xavier</h5>
                                    <span class="text-warning fs-tiny m-0">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="card-text lh-sm">
                                This platform chased away my fear and helped me find my voice. Using OwenaHub slices
                                helped me stay on track. Fully recommend!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/people/timothy-barlin.jpg') }}" alt="..."
                                    class="image-fluid rounded-4 me-2" width="40">
                                <div>
                                    <h5 class="card-title m-0">Muhammed Abdulhameed</h5>
                                    <span class="text-warning fs-tiny m-0">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="card-text lh-sm">
                                If you're lost and adrift join OwenaHub today! I got to know what to do, how to do it!
                                I fully recommend OwenaHub to anyone. ✨
                            </p>
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
                    <div class="text-center mb-4">
                        <h2 class="display-3 fw-normal">Get started <br class="hidden d-md-block"> for free today
                        </h2>
                        <p class="my-3">
                            Our community awaits your grand entrance! <br>
                            Be part of an inspiring platform
                        </p>
                    </div>
                    <div class="text-center">
                        <!-- Button trigger modal -->
                        <a class="btn btn-dark rounded-5 shadow text-decoration-none text-white fw-bold px-5 py-2 fs-5 d-inline-block mx-auto"
                            href="/getstarted">
                            Get Started
                        </a>
                        <br>
                        <a type="button" class="text-dark px-4 mt-3 fw-semibold" data-bs-toggle="modal"
                            data-bs-target="#joinCommunity">
                            Our communities
                        </a>
                        <!-- Modal: exists on the navbar component -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
