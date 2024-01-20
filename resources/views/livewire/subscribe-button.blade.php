{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<!-- Button trigger modal -->
<div id="sub-btn">
    <button type="button" class="btn rounded-1 btn-theme" data-bs-toggle="modal" data-bs-target="#subscribe-button">
        <span class="text-white fs-6 fw-semibold">SUBSCRIBE </span> — <small class="fw-light text-red fs-tiny">
            it's free ❤️</small>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="subscribe-button" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-start">
                <div class="modal-header bg-theme">
                    <h3 class="modal-title fs-3" id="staticBackdropLabel">Subscribe</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-dark">
                        <h3 class="fs-5">Why Subscribe to our Newsletter? {{ $name }}</h3>
                        <p class="fs-tiny">
                            <b>→ Priority Access:</b> Be the first to experience new features before it's available to
                            the
                            public. Get a head start and secure your spot! 🚀
                        </p>
                        <p class="fs-tiny">
                            <b>→ Stay Informed:</b> Receive regular updates on our progress, new features, and exciting
                            developments. You'll be at the forefront of the latest news! 👌
                        </p>
                    </div>

                    <form class="row g-3 text-dark text-start" wire:submit="save">
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label m-0">Your Name:</label>
                            <input type="text" id="name"
                                class="form-control rounded-2 py-3 py-3 border-1 border-dark shadow" wire:model="name"
                                placeholder="Vlad Kowalski" required>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label m-0">Your Email:</label>
                            <input type="email" id="email"
                                class="form-control rounded-2 py-3 border-1 border-dark shadow" wire:model="email"
                                placeholder="valid@email.com" required>
                        </div>

                        <div class="col-12 mt-4">
                            <button type="submit"
                                class="btn btn-dark rounded-2 shadow fw-semibold text-uppercase py-3 fs-6 w-100">
                                Subscribe
                            </button>
                        </div>

                        <div>
                            @error('email')
                                <x-error :message="$message" />
                            @enderror
                            @error('password')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
