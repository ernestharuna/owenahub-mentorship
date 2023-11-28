<x-layouts.user>
    <section class="container my-4">
        <p class="fw-bold text-secondary fs-2">
            Hey, {{ Auth::user()->first_name }} 😍
        </p>

        <div>
            <p class="text-secondary mb-2">
                Upcoming Meetings — <span class="fs-tiny">(Coming Soon!)</span>
            </p>
            <div class="border rounded py-1 px-2 my-1 me-3 d-inline-block position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-theme">
                    <i class="bi bi-clock"></i>
                    <span class="visually-hidden">unread messages</span>
                </span>
                <div>
                    <p class="fs-tiny m-0">
                        Talk with a mentor today!
                    </p>
                    <p class="fw-semibold m-0">
                        Book a session
                    </p>
                </div>
            </div>
            <div class="border rounded py-1 px-2 my-1 d-inline-block position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-theme">
                    <i class="bi bi-clock"></i>
                    <span class="visually-hidden">unread messages</span>
                </span>
                <div>
                    <p class="fs-tiny m-0">
                        You will soon be able to book private session
                    </p>
                    <p class="fw-semibold m-0">
                        Make sure to subscribe to be notified when its available.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-f2">
        <div class="container py-3 w-64">
            <h3>Your Slices</h3>

            @forelse ($enrolled_slices as $enrolled)
                <div class="accordion accordion-flush mb-1 border" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{ $enrolled->slice->id }}" aria-expanded="false"
                                aria-controls="flush-collapse{{ $enrolled->slice->id }}">
                                <span class="fw-semibold">
                                    {{ $enrolled->slice->title }} —
                                </span>
                                <span class="ms-2 fs-tiny text-secondary">
                                    In Progress <i class="bi bi-clock-history"></i>
                                </span>
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $enrolled->slice->id }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="p-4">
                                @forelse ($enrolled->slice->bite->sortBy('position') as $bite)
                                    <div class="p-3 border d-flex align-items-center mb-2 rounded shadow-sm">
                                        <i class="bi bi-circle text-theme d-block me-2"></i>
                                        <div>
                                            <a href="{{ route('user.slice.show', ['slice' => $enrolled->slice->id, 'bite' => $bite->id]) }}"
                                                class="text-decoration-none text-dark">
                                                Bite {{ $bite->position }} - {{ $bite->title }}
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <p class="p-1 m-0 text-secondary fs-tiny">
                                        Hungry? <br>
                                        Nothing to bite for now 😣
                                    </p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p class="text-secondary">
                        You are not having any slices right now 😩
                    </p>
                    <a href="{{ route('guest.slices.index') }}" class="btn btn-light border rounded rounded-1 shadow-sm"
                        target="_blank">
                        <i class="bi bi-plus-circle"></i> Have A Slice
                    </a>
                </div>
            @endforelse

        </div>
    </section>

    <section class="bg-white">
        <div class="container my-4">
            <h3>Recommended for you</h3>
            <livewire:recommended-articles />
        </div>
    </section>
</x-layouts.user>
