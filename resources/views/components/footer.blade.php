<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<footer class='bg-dark py-4' id="footer">
    <div class="container text-white fs-6">
        <div class="d-md-flex justify-content-between">
            <div>
                <div>
                    <img src={{ asset('images/logo.png') }} alt="..." class="img-fluid" width="25">
                    <div class="d-inline-block fw-bold" style="position: relative; top: 3px">OwenaHub</div>
                </div>
                <p class="fs-tiny mt-2">
                    Fostering global connections, leveraging experts <br> to empower learners through mentorship.
                </p>
            </div>
            <div>
                <h2 class='fs-6'>
                    Subscribe to <span class="text-theme">OwenaHub</span>
                </h2>
                <div class="input-group">
                    <livewire:subscribe-button />
                </div>
            </div>
        </div>
        <hr>
        <div class="mt-3 d-md-flex">
            <div class="p-2 flex-fill">
                <h2 class='fs-tiny'>
                    SOCIALS
                </h2>
                <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank"
                    class='text-white d-block text-decoration-none fw-light fs-tiny'>
                    Instagram <i class="bi bi-arrow-right-short"></i>
                </a>

                <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08" target="_blank"
                    class="text-white d-block text-decoration-none fw-light fs-tiny">
                    X (formerly twitter) <i class="bi bi-arrow-right-short"></i>
                </a>

                <a href="https://www.facebook.com/owenahub?mibextid=ZbWKwL" target="_blank"
                    class="text-white d-block text-decoration-none fw-light fs-tiny">
                    Facebook <i class="bi bi-arrow-right-short"></i>
                </a>
            </div>

            <div class="p-2 flex-fill">
                <h2 class='fs-tiny'>
                    CONTACT
                </h2>
                <a href="mailto:hello@owenahub.com"
                    class="d-block text-decoration-none text-white fs-tiny fw-light">hello@owenahub.com</a>
                <a href="mailto:ernest@owenahub.com"
                    class="d-block text-decoration-none text-white fs-tiny fw-light">ernest@owenahub.com</a>
            </div>

            <div class="p-2 flex-fill">
                <h2 class='fs-tiny'>
                    QUICK LINKS
                </h2>
                <a href="/articles" class="d-block text-decoration-none text-white fs-tiny fw-light">
                    OwenaHub Blog <i class="bi bi-arrow-right-short"></i>
                </a>
                <a href="{{ route('guest.slices.index') }}"
                    class="d-block text-decoration-none text-white fs-tiny fw-light">
                    Slices: <span class="text-theme fw-semibold">Swift Swips</span> <i
                        class="bi bi-arrow-right-short"></i>
                </a>
                <a href="{{ route('user.session.index') }}"
                    class="d-block text-decoration-none text-white fs-tiny fw-light">
                    Private Sessions <i class="bi bi-arrow-right-short"></i>
                </a>
                {{-- <a href="{{ route('user.login') }}" class="d-block text-decoration-none text-white fs-tiny fw-light">
                    User Login <i class="bi bi-arrow-right-short"></i>
                </a>
                <a href="{{ route('mentor.login') }}" class="d-block text-decoration-none text-white fs-tiny fw-light">
                    Mentor Login <i class="bi bi-arrow-right-short"></i>
                </a> --}}
            </div>

            <div class="p-2 flex-fill">
                <h2 class='fs-tiny'>
                    COMMUNITIES
                </h2>
                <a href="https://www.facebook.com/groups/896520008575738/?ref=share"
                    class="d-block text-decoration-none text-white fs-tiny fw-light">
                    LinkedIn Community <i class="bi bi-arrow-right-short"></i>
                </a>

                <a href="https://linkedin.com/in/ernestharuna"
                    class="d-block text-decoration-none text-white fs-tiny fw-light">
                    Facebook Community <i class="bi bi-arrow-right-short"></i>
                </a>
            </div>
        </div>


        <div class="my-4 d-md-flex justify-content-between align-items-center">
            <p class="m-0 fs-tiny">
                &copy; 2024, OwenaHub. All Rights Reserved.
            </p>
            <p class="m-0 fs-tiny">
                Privacy Policy &middot; Terms Of Service
            </p>
        </div>
    </div>
</footer>
