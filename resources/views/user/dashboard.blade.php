<x-layouts.user>
    <section class="mt-4">
        <p class="text-dark fw-bold mb-2">
            <i class="bi bi-house-gear-fill fs-5"></i> Dashboard
        </p>
        <p class="fw-bold text-secondary fs-2 mb-4">
            Hey, {{ ucfirst(strtolower(Auth::user()->first_name)) }} 😍
        </p>

        <div>
            <p class="d-inline-flex gap-1">
                <button class="btn btn-light shadow-sm fs-tiny border position-relative" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample">
                    Notifications <i class="bi bi-chevron-down fs-tiny"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle p-2 bg-red border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                {{-- anouncement items --}}
                <div class="mb-3">
                    <div class="border rounded py-1 px-2 my-1 me-3 d-inline-block position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-theme">
                            <i class="bi bi-bell-fill text-red"></i>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        <div>
                            <p class="fs-tiny m-0">
                                Welcome to OwenaHub!
                            </p>
                            <p class="fw-semibold m-0">
                                Pick a slice to get started.
                            </p>
                        </div>
                    </div>
                    <div class="border rounded py-1 px-2 my-1 d-inline-block position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-theme">
                            <i class="bi bi-bell-fill text-red"></i>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        <div>
                            <p class="fs-tiny m-0">
                                Make sure to <a href="#footer">subscribe</a> to be notified when its available.
                            </p>
                            <p class="fw-semibold m-0">
                                You will soon be able to book private sessions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner --}}
        <div class="p-4 rounded bg-theme mb-3">
            <h3 class="fs-4 fw-bold text-white">Welcome to OwenaHub</h3>
            <p class="m-0 fw-semibold">
                We're thrilled to have you on board and part of our growing community. 🚀 <br>
                {{-- You can join our social communities to be part of a community that fosters learning and growth --}}
            </p>
        </div>
    </section>

    <section>
        <div class="p-3 bg-white shadow-sm border rounded">
            <h3 class="fw-bold fs-4">Your Slices</h3>

            @forelse ($enrolled_slices as $enrolled)
                <div class="accordion accordion-flush mb-1 border-1 border rounded-2 position-relative"
                    id="accordionFlushExample">
                    {{-- Badge --}}
                    @php
                        $data = $enrolled->created_at;
                        $datetime = \Carbon\Carbon::parse($data);
                        $now = \Carbon\Carbon::now();

                        $minutes = $datetime->diffInMinutes($now);

                        if ($minutes < 1440) {
                            $created_now = true;
                        } else {
                            $created_now = false;
                        }
                    @endphp

                    {{-- Badge Start --}}
                    @if ($created_now == true)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-red z-3">
                            New
                            <span class="visually-hidden">new item</span>
                        </span>
                    @endif
                    {{-- Badge End --}}

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-body-secondary " type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $enrolled->slice->id }}"
                                aria-expanded="false" aria-controls="flush-collapse{{ $enrolled->slice->id }}">
                                <span class="fw-semibold">
                                    <i class="bi bi-box-fill text-red"></i> {{ $enrolled->slice->title }}
                                </span>

                                <div class="d-md-block d-none">
                                    <livewire:user.slice-progress :slice="$enrolled" />
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $enrolled->slice->id }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="p-3">
                                @forelse ($enrolled->slice->bite->sortBy('position') as $bite)
                                    <div class="p-3 border d-flex align-items-center mb-2 rounded shadow-sm">
                                        <div class="text-theme">
                                            <livewire:user.checked-badge :bite="$bite->id" />
                                        </div>
                                        <div>
                                            <a href="{{ route('user.slice.show', ['slice' => $enrolled->slice->id, 'bite' => $loop->iteration]) }}"
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
                </div>
            @endforelse

            <div class="mt-2">
                <a href="{{ route('guest.slices.index') }}"
                    class="btn btn-theme border-0 rounded-1 shadow-sm fw-semibold mt-1 cta-animation" target="_blank">
                    <i class="bi bi-plus-circle"></i> Have a Slice
                </a>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <div class="p-3 bg-white shadow-sm border rounded">
            <h3 class="fw-bold fs-4">Sessions</h3>
            <div>
                <p class="text-secondary">
                    Sessions are unavailable at the moment.
                </p>
            </div>
            <div class="mt-2">
                <button href="{{ route('guest.slices.index') }}" disabled
                    class="btn btn-theme border-0 rounded-1 shadow-sm fw-semibold mt-1" target="_blank">
                    <i class="bi bi-plus-circle"></i> Create a session
                </button>
            </div>
        </div>
    </section>

    <section class="mt-4 mb-5">
        <div class="bg-white shadow-sm border rounded p-3">
            <h3 class="fw-bold fs-4">Recommended for you</h3>
            <livewire:recommended-articles />
        </div>
    </section>
</x-layouts.user>
