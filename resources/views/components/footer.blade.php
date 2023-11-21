<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<footer class='bg-dark py-4'>
    <div class="container text-white fs-6">
        <div>
            <h2 class='fs-5 fw-bold m-0'>
                {{-- Logo goes here --}}
                <img src={{ asset('images/logo.png') }} alt="..." class="d-block img-fluid mb-3" width="50">
                OwenaHub<small class='fs-6 fst-italic fw-light'> — The Learner&apos;s Hub</small>
            </h2>
            <p>
                <small>
                    Fostering global connections, leveraging experts to empower learners through mentorship.
                </small>
            </p>
            <div>
                <div class="input-group mb-3">
                    <livewire:subscribe-button />
                </div>
            </div>
        </div>

        <div class='social-links'>
            <h2 class='fs-5 m-0'>
                Contact
            </h2>
            <p>
                <small>
                    hello@owenahub.com <br />
                </small>
            </p>


            <h2 class='fs-5'>
                Follow <span class="text-theme">OwenaHub</span>
            </h2>
            <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank"
                class='text-white text-decoration-none fw-light fs-tiny'>
                <i class="bi bi-instagram fs-6"></i> instagram
            </a>

            <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08" target="_blank"
                class="text-white mx-3 text-decoration-none fw-light fs-tiny">
                <i class="bi bi-twitter-x fs-6"></i> (formerly Twitter)
            </a>

            <a href="https://www.facebook.com/owenahub?mibextid=ZbWKwL" target="_blank"
                class="text-white text-decoration-none fw-light fs-tiny">
                <i class="bi bi-facebook fs-6"></i> facebook
            </a>
        </div>


        <div class="fs-6 my-4">
            <p class="m-0 fs-tiny">
                &copy; 2023, OwenaHub. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
