<x-layouts.app>
    <div class='animated-2 fadeIn'>
        <header class="container mt-5">
            <div>
                <h1 class='mb-3 fs-large fw-bold'>
                    The Mentorship Platform for <br class="d-none d-md-block">
                    <span class="animated-text">Tech Enthusiasts</span>.
                </h1>
                <p>
                    We offer a vibrant platform for learners <br class="d-md-block d-none" />
                    to gain <em>career insights</em> from experienced mentors.
                </p>

                <div class="cta mt-4">
                    <a href="{{ route('guest.slices.index') }}"
                        class='text-decoration-none btn btn-theme rounded rounded-0 text-uppercase fs-6 fw-bold shadow text-dark'>
                        Start Learning Now
                    </a>
                    <a href="{{ route('guest.articles.index') }}"
                        class='text-decoration-none btn btn-dark rounded rounded-0 ms-2 text-uppercase fs-6 fw-bold shadow text-theme'>
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
                    <p class='fs-6 lh-sm'>
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

    <section class='py-5 bg-f2 z-3'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/generic_img.jpg') }}" alt="..." class="img-fluid shadow rounded-3">
                </div>
                <div class="col-lg-6">
                    <div class="py-5 px-4">
                        <h2 class='fw-boldest fs-2 animated-text'>
                            Enriching Repository
                        </h2>
                        <p class="fw-semibold lh-1">
                            Want to read something inspiring, read through <br>
                            articles curated by experienced mentors.
                        </p>

                        <livewire:recommended-articles />

                        <a href="{{ route('guest.articles.index') }}"
                            class="btn btn-theme px-4 text-dark fs-6 fw-bold mt-3" type='button'>
                            View More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-2 bg-f2 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="py-5 px-4">
                        {{-- <span class="circle shadow"><i class="bi bi-gift-fill"></i></span>  --}}
                        <h2>
                            <span class="circle shadow">
                                <i class="bi bi-box-seam-fill"></i>
                            </span>
                            <span class="fw-boldest fs-2 text-theme">
                                OwenaHub's <span class=" animated-text">Slices</span>
                            </span>
                        </h2>

                        <div class="fw-semibold">
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
                                each encapsulated into bite-sized packages known as
                                <b>Bites</b>.
                            </p>

                            Dive into a wealth of information and elevate your learning experience.

                            <p>
                                Try taking a slice!
                            </p>
                        </div>
                        <a href="{{ route('guest.slices.index') }}"
                            class="btn btn-theme px-4 text-dark fs-6 fw-bold mt-3" type='button'>
                            Take A Slice
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/generic_img.jpg') }}" alt="..." class="img-fluid shadow rounded-3">
                </div>
            </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="text-dark py-4">
                <h2 class='fw-bold fs-2'>
                    Did You Know . . .
                </h2>
                {{-- Given Id so the style wont interfere with dashboard lists --}}
                <ul id="list">
                    <li class="m-0 fw-semibold">
                        96% of mentees find mentoring very useful
                    </li>
                    <li class="m-0 fw-semibold">
                        Approximately 75% of leaders say mentoring played a key role in their success
                    </li>
                    <li class="m-0 fw-semibold">
                        The vast majority, 97% of individuals with a mentor say they find the experience to be a
                        valuable
                        one.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="bg-theme-light">
        <section class="container py-5">
            <div>
                <div class="text-center">
                    <div class="text-center">
                        <h2 class="fs-1 fw-bold">Join Our Community</h2>
                        <p class=" my-4 fs-5">
                            🎊 Our community awaits your grand entrance! 🎊<br>
                            <span class="fw-bold">Be part of inspiring platform</span>
                        </p>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button"
                        class="btn rounded rounded-0 btn-light text-decoration-none text-dark fw-bold"
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
