<x-layouts.user>
    <div class="">
        <div class="my-5 p-3 bg-light shadow-sm rounded-1 border">
            <h2 class="fw-bold">
                Coming Soon!
            </h2>

            <p>
                Sessions allow you to meet mentors of your choice.
                <br>
                This feature is yet to launch and we will notify you once it's active.
            </p>

            <a href="{{ route('user.dashboard') }}" class="btn btn-theme rounded-1">
                Go to Dashboard
            </a>
        </div>

        <div class="bg-premium">
            <section class="container py-5">
                <div>
                    <div class="text-center">
                        <h2 class="fs-1 fw-bold">Join Our Community</h2>
                        <p class=" my-4 fs-5 text-white">
                            🎊 Our community awaits your grand entrance! 🎊<br>
                            <span class="fw-bold">Be part of inspiring platform</span>
                        </p>
                    </div>
                    <div class="text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn rounded-1 btn-light shadow text-dark fw-bold"
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
    </div>
</x-layouts.user>
