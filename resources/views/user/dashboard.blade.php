<x-layouts.user>
    <section class="mt-4">
        <p class="text-dark fw-bold mb-2">
        <section class="mb-4">
            <p class="m-0">Welcome To OwenaHub,</p>
            <h2 class="fw-bold fs-2">
                {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                {{ ucfirst(strtolower(Auth::user()->last_name)) }}
            </h2>
        </section>
        </p>
    </section>

    <section>
        <div class="p-3 bg-white shadow-sm border rounded">
            <h3 class="fw-bold fs-4 text-secondary">Your slices</h3>

            <hr class="mb-4">

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
                        There's nothing on your plate
                    </p>
                    <div class="mt-2">
                        <a href="{{ route('guest.slices.index') }}"
                            class="btn btn-light rounded-4 px-3 fw-semibold text-red border cta-animation-focus">
                            <i class="bi bi-box me-1"></i> Take a slice
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

    <section class="mt-4">
        <div class="p-3 bg-white shadow-sm border rounded">
            <h3 class="fw-bold fs-4 text-secondary">Sessions</h3>
            <hr class="mb-4">
            <div>
                <p class="text-secondary">
                    Sessions are unavailable at the moment.
                </p>
            </div>
            <div class="mt-2">
                <button class="btn btn-theme rounded-4 px-3 shadow-sm fw-semibold border-0 mt-1" disabled>
                    <i class="bi bi-plus-circle me-1"></i> Create a session
                </button>
            </div>
        </div>
    </section>

    <section class="mt-4 mb-5">
        <div class="bg-white shadow-sm border rounded p-3">
            <h3 class="fw-bold fs-4 text-secondary">Recommended for you</h3>
            <hr class="mb-4">
            <livewire:recommended-articles />
        </div>
    </section>
</x-layouts.user>
