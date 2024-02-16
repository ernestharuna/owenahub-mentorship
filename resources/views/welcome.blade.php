<x-layouts.app>
    <div class='animated-2 fadeIn'>
        <header class="container mt-5">
            <div>
                <h1 class='mb-3 fs-large fw-boldest'>
                    The Mentorship Platform for <br class="d-none d-lg-block d-sm-block">
                    <span class="animated-text">Tech Enthusiasts</span>.
                </h1>
                <p>
                    We offer a vibrant platform for learners to gain <br class="d-md-block d-none" />
                    <b>career insights</b> from experienced mentors.
                </p>

                <div class="cta mt-4">
                    <a href="{{ route('guest.onboarding.slices') }}"
                        class='text-decoration-none text-uppercase btn btn-theme rounded-5 fw-semibold px-4 fs-6 shadow text-dark'>
                        Get Started <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ route('guest.articles.index') }}"
                        class='text-decoration-none btn btn-dark rounded-5 px-3 ms-2 text-uppercase fs-6 fw-semibold shadow text-theme'>
                        Blog
                    </a>
                </div>

                <div class="mt-2">
                    <small class='fst-italic fs-tiny'>
                        <i class="bi bi-stars text-primary"></i> 100+ weekly readers
                    </small>
                </div>


                {{-- <span class=glow> --}}
                <img src="{{ asset('images/logo.png') }}" alt="..." class="glow">
                {{-- </span> --}}
                {{-- <span class=glow_2></span> --}}
            </div>
        </header>

        <section class=features>
            <div class="container">
                <div class="shadow shadow-0 feature_box rounded-4">
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
                            <strong>Virtual Teams</strong><br />
                            <p class="lh-sm">
                                Join teams to work on <br class="hidden" />
                                real-life projects.
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
                    <p class='fs-6 lh-sm'>
                        <small>OwenaHub is resource rich for people wishing to pick up tips and tricks and gain
                            perspective in their career path.
                        </small>
                    </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <span>Ernest Haruna, <i>founder</i></span>
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="bg-f2">
        <div class="container">
            <div class="py-5">
                <div class="text-dark text-center container pb-4">
                    <h2 class='fw-boldest fs-1'>
                        Expand your skillset <br class="d-md-none"> with <span class="text-theme">OwenaHub</span>.
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

    <section class="bg-white">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-dark py-5 px-4">
                        <h2 class='fw-bold fs-2 text-theme'>
                            OwenaHub <span class="text-dark fw-normal">teams</span>
                        </h2>
                        <div>
                            <p>
                                Join virtual teams to work on real-life themed projects to boast your
                                Resume and give you the real-world experience you need to start a great
                                role as a techie.
                                <br><br>
                                <span class="text-danger">●</span>
                                <span class="fw-semibold">
                                    Get teams as you register for a slice
                                </span>
                            </p>
                        </div>
                        <a href="{{ route('guest.onboarding.slices') }}"
                            class="btn btn-theme px-4 py-2 text-dark rounded-5 fw-semibold mt-3" type='button'>
                            Get started <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-first">
                    <img src="{{ asset('images/team-img.png') }}" alt="..." class="img-fluid shadow rounded-3">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img src="{{ asset('images/slice-img.png') }}" alt="..."
                        class="img-fluid shadow rounded-3">
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="py-5 px-4">
                        {{-- <span class="circle shadow"><i class="bi bi-gift-fill"></i></span>  --}}
                        <h2>
                            <span class="circle shadow">
                                <i class="bi bi-box-seam-fill"></i>
                            </span>
                            <span class="fw-bold fs-2 text-theme">
                                OwenaHub <span class="text-dark fw-normal">slices</span>
                            </span>
                        </h2>

                        <div class="">
                            <p>
                                Embark on a learning journey with OwenaHub's innovative approach to education.
                            </p>
                            <p>
                                <strong>What Are Slices?
                                    <i class="fs-tiny bg-premium text-dark p-1 rounded fw-normal">
                                        ...like a course, but shorter 🚀
                                    </i>
                                </strong><br>

                                Slices are our unique method of delivering invaluable insights to learners.
                                <br>
                                Designed for flexibility, you can now learn on the go, thanks to our
                                meticulously organized content,
                                <br class="d-lg-block d-none">
                                each encapsulated into bite-sized packages called
                                <b class="text-red">Bites</b>.
                            </p>

                            Dive into a wealth of information and elevate your learning experience.

                            <p class="fw-bold">
                                Try taking a slice! 👇🏼
                            </p>
                        </div>
                        <a href="{{ route('guest.slices.index') }}"
                            class="btn btn-theme px-4 py-2 text-dark rounded-5 fw-semibold mt-3" type='button'>
                            Take a slice <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
    </section>

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

    <section class='py-5'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/blog-img.png') }}" alt="..." class="img-fluid shadow rounded-3">
                </div>
                <div class="col-lg-6">
                    <div class="pt-5 px-4">
                        <h2 class='fw-bold fs-2 text-theme'>
                            OwenaHub <span class="text-dark fw-normal">blog</span>
                        </h2>
                        <p>
                            Want to read something inspiring?
                            Browse through OwenaHub's Blog
                        </p>

                        <livewire:recommended-articles />

                        <a href="{{ route('guest.articles.index') }}"
                            class="btn btn-theme px-4 py-2 text-dark rounded-5 fw-semibold mt-3" type='button'>
                            View more <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-theme-light">
        <section class="container py-5">
            <div>
                <div class="text-center">
                    <div class="text-center">
                        <h2 class="fs-1 fw-bold">Join Our Community</h2>
                        <p class="my-3">
                            Our community awaits your grand entrance!<br>
                            <span class="fw-bold">Be part of inspiring platform</span>
                        </p>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button"
                        class="btn rounded-5 shadow btn-light text-decoration-none text-dark fw-bold px-4"
                        data-bs-toggle="modal" data-bs-target="#joinCommunity">
                        Check Us Out! 🤙🏽
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="joinCommunity" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border border-0">
                                    <p class="modal-title fs-4 text-dark fw-bold" id="exampleModalLabel">Join Our
                                        Community</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="social-links fw-semibold fs-5">
                                        <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                                            class="py-4 mt-3 rounded shadow text-white text-decoration-none d-block instagram">
                                            Follow Us On Instagram
                                        </a>
                                        <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08"
                                            class="py-4 my-3 rounded shadow text-white text-decoration-none d-block twitter">
                                            Follow Us On X
                                        </a>
                                        <hr class="bg-dak text-dark" />
                                        <a href="https://www.facebook.com/groups/896520008575738/?ref=share"
                                            class="py-4 rounded shadow text-white text-decoration-none d-block facebook">
                                            Facebook Community
                                        </a>
                                        <a href="https://linkedin.com/in/ernestharuna"
                                            class="py-4 rounded shadow text-white text-decoration-none d-block my-3 linkedin">
                                            LinkedIn Community
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
