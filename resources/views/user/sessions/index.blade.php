<x-layouts.user>
    <div class="">
        <div class="my-5 p-3 bg-white shadow-sm rounded-4 border">
            <h2 class="fw-bold">
                Meet a mentor
            </h2>

            <p class="lh-sm text-secondary">
                We picked these mentors based on your interest
            </p>

            <section class="my-4">
                <div class="row row-cols-1 row-cols-lg-4 g-3">
                    @forelse ($mentors as $mentor)
                        <x-mentor-card :mentor="$mentor" />
                    @empty
                        <p class="p-2 bg-f2 text-secondary">
                            Slices Unavailable ☹
                        </p>
                    @endforelse
                </div>
            </section>

            <div>
                <a href="#" class="btn btn-theme rounded-3 fw-semibold">
                    Explore mentors
                </a>
            </div>
        </div>

        <div class="bg-theme rounded-4">
            <section class="container py-5">
                <div>
                    <div class="text-center">
                        <h2 class="fs-1 fw-bold">Join Our Community</h2>
                        <p class="my-4 text-white">
                            Our community awaits your grand entrance!<br>
                            <span class="fw-bold">Be part of inspiring platform</span>
                        </p>
                    </div>
                    <div class="text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn rounded-3 btn-light shadow text-dark fw-bold"
                            data-bs-toggle="modal" data-bs-target="#joinCommunity">
                            Check Us Out! 🤙🏽
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="joinCommunity" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content rounded-4">
                                    <div class="modal-header border border-0">
                                        <p class="modal-title fs-4 text-dark fw-bold" id="exampleModalLabel">
                                            Join Our Community
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="social-links fw-semibold fs-5">
                                            <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                                                target="_blank"
                                                class="py-4 mt-3 rounded-4 shadow text-white text-decoration-none d-block instagram">
                                                <i class="bi bi-instagram d-block icon"></i>
                                                Follow Us On Instagram
                                            </a>
                                            <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08"
                                                target="_blank"
                                                class="py-4 my-3 rounded-4 shadow text-white text-decoration-none d-block twitter">
                                                {{-- <i class="bi bi-twitter d-block icon"></i> --}}
                                                <i class="bi bi-twitter-x d-block icon"></i>
                                                Follow Us On X
                                            </a>

                                            <hr class="bg-dak text-dark" />

                                            <a href="https://www.facebook.com/groups/896520008575738/?ref=share"
                                                target="_blank"
                                                class="py-4 rounded-4 shadow text-white text-decoration-none d-block facebook">
                                                <i class="bi bi-facebook d-block icon"></i>
                                                Facebook Community
                                            </a>
                                            <a href="https://linkedin.com/in/ernestharuna" target="_blank"
                                                class="py-4 rounded-4 shadow text-white text-decoration-none d-block my-3 linkedin">
                                                <i class="bi bi-linkedin d-block icon"></i>
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
    <hr class="opacity-0 my-5">

</x-layouts.user>
