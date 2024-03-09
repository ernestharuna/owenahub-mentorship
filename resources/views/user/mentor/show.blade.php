<x-layouts.user>
    <div class="">
        <div class="my-5 p-3 bg-white shadow-sm rounded-4 border">
            <div class="d-flex align-items-center gap-3">
                <div class="" style="min-width: 100px; min-height: 100px; max-width: 100px">
                    @if ($mentor->social_handle && $mentor->social_handle->image_path)
                        <img src="{{ $mentor->social_handle->image_path }}" alt="..."
                            class="border d-block img-fluid w-100 rounded-5 object-fit-cover border-3 border-warning">
                    @else
                        <img src="{{ asset('images/default-dp.png') }}" alt="..."
                            class="border d-block img-fluid w-100 rounded-5 object-fit-cover border-3 border-warning">
                    @endif
                </div>
                <div>
                    <h1 class="fs-2 fw-bold m-0">
                        {{ $mentor->first_name }} {{ $mentor->last_name }}
                    </h1>
                    <p class="m-0">
                        {{ $mentor->misc_info ? $mentor->misc_info->expertise : 'New mentor' }}
                    </p>
                </div>
            </div>

            <div class="mt-5 row mx-auto justify-content-between">
                <div class="col-12 col-md-6 pe-md-5">
                    <h2 class="fs-5 fw-semibold">Overview</h2>
                    <hr>
                    <p>
                        {{ $mentor->misc_info ? $mentor->misc_info->bio : 'No information' }}
                    </p>

                    @if ($mentor->social_handle)
                        <div class="fs-4 social-links">
                            @isset($mentor->social_handle->linkedin)
                                <i class="bi bi-linkedin me-2 linkedin text-white rounded px-2 py-1"></i>
                            @endisset
                            @isset($mentor->social_handle->x_twitter)
                                <i class="bi bi-twitter-x me-2 bg-dark text-white rounded px-2 py-1"></i>
                            @endisset
                            @isset($mentor->social_handle->isntagram)
                                <i class="bi bi-isntagram me-2 instagram text-white rounded px-2 py-1"></i>
                            @endisset
                            @isset($mentor->social_handle->facebook)
                                <i class="bi bi-facebook me-2 facebook text-white rounded px-2 py-1"></i>
                            @endisset
                        </div>
                    @endif

                    <div class="mt-4">
                        <h3 class="fs-6">Available sessions</h3>
                        <div class="mt-1 bg-light border shadow-sm rounded-3 p-1">
                            <livewire:calender :all_dates="$mentor->session" />
                        </div>
                    </div>
                </div>
                <div class="rounded-4 p-3 mt-4 mt-md-0 bg-theme-light col-12 col-md-6">
                    <h2 class="fs-5 fw-semibold mb-3">Reviews</h2>
                    <div class="bg-white shadow p-2 rounded-4">
                        <div class="fs-tiny p-2 border-bottom">
                            <h4 class="m-0 fs-6">John</h4>
                            <div class="text-theme fs-tiny">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="text-dark">
                                    (4.8)
                                </span>
                            </div>
                            <p class="m-0">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt praesentium
                                repudiandae odit, delectus possimus debitis?
                            </p>
                        </div>
                        <div class="fs-tiny p-2 border-bottom">
                            <h4 class="m-0 fs-6">Ernest</h4>
                            <div class="text-theme fs-tiny">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="text-dark">
                                    (4.8)
                                </span>
                            </div>
                            <p class="m-0">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt praesentium
                                repudiandae odit, delectus possimus debitis?
                            </p>
                        </div>
                        <div class="fs-tiny p-2 border-bottom">
                            <h4 class="m-0 fs-6">Jamie</h4>
                            <div class="text-theme fs-tiny">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="text-dark">
                                    (4.8)
                                </span>
                            </div>
                            <p class="m-0">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt praesentium
                                repudiandae odit, delectus possimus debitis?
                            </p>
                        </div>
                    </div>
                </div>
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
                                        <p class="modal-title fs-4 text-dark fw-bold" id="exampleModalLabel">Join Our
                                            Community</p>
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
