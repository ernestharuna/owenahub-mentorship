<div id="announcement" class="text-center text-theme fs-tiny py-1 bg-dark">
    <i class="bi bi-megaphone-fill fs-6"></i>
    <!-- Button trigger modal -->
    <a type="button" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#joinCommunity">
        <span class="fw-bold text-decoration-underline">Click Here</span> — our community awaits your grand entrance!
    </a>

    <!-- Modal -->
    <div class="modal fade" id="joinCommunity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border border-0">
                    <p class="modal-title fs-4 text-dark fw-bold" id="exampleModalLabel">Join Our Community</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="social-links fw-semibold fs-5">
                        <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                            class="py-4 mt-3 rounded shadow text-white text-decoration-none d-block instagram">
                            <i class="bi bi-instagram d-block icon"></i>
                            Follow Us On Instagram
                        </a>
                        <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08"
                            class="py-4 my-3 rounded shadow text-white text-decoration-none d-block twitter">
                            <i class="bi bi-twitter d-block icon"></i>
                            Follow Us On X
                        </a>
                        <hr class="bg-dak text-dark" />
                        <a href="https://www.facebook.com/groups/896520008575738/?ref=share"
                            class="py-4 rounded shadow text-white text-decoration-none d-block facebook">
                            <i class="bi bi-facebook d-block icon"></i>
                            Facebook Community
                        </a>
                        <a href="https://linkedin.com/in/ernestharuna"
                            class="py-4 rounded shadow text-white text-decoration-none d-block my-3 linkedin">
                            <i class="bi bi-linkedin d-block icon"></i>
                            LinkedIn Community
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class='bg-f2'>

    <div class='container py-3 d-flex justify-content-between align-items-center'>
        <div>
            <a href="/" class='text-decoration-none text-theme text-shadow fs-6 fw-bold m-0'>
                <img src={{ asset('images/logo.png') }} alt="logo" width="28"
                    style="position: relative; top: -4px;"><span style="font-size: 18px"> OwenaHub</span>
            </a>
        </div>

        <div class='fs-tiny fw-bold'>
            <a href={{ route('about') }} class='text-secondary text-decoration-none mx-3'>ABOUT</a>
            <a href="/articles" class='text-secondary text-decoration-none'>BLOG</a>
        </div>
    </div>
</nav>
