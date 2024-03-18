<x-layouts.mentor>
    <section class="mt-4">
        <section class="mb-4 d-flex align-items-center justify-content-between">
            <h2 class="fw-bold fs-2 m-0">
                {{-- {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                {{ ucfirst(strtolower(Auth::user()->last_name)) }} --}}
                Dashboard
            </h2>
            <div class="d-block d-md-none">
                <a href="{{ route('mentor.support') }}" class="text-decoration-none text-dark">
                    <i class="bi bi-gear me-2 fs-5 bg-body-secondary px-3 py-2 rounded-4 border"></i>
                </a>
            </div>
        </section>
    </section>

    <section class="mb-4 mt-5">
        <div>
            <h3 class="fs-4 m-0 text-red fw-semibold">
                Welcome {{ ucfirst(strtolower(Auth::user()->first_name)) }} 👋🏼
            </h3>
            <div class="mt-1 fs-5 fw-semibold text-secondary">
                @php
                    $r_count = 0;
                    foreach ($sessions as $session) {
                        if ($session->booking->where('status', 'pending')->count() > 0) {
                            $r_count++;
                        }
                    }
                @endphp
                @if ($r_count > 0)
                    You have <a href="{{ route('mentor.session.index') }}"
                        class="text-purple cta-animation-focus rounded">{{ $r_count }}
                        session requests</a>
                @else
                    You have no session requests
                @endif
            </div>

        </div>
    </section>

    <div class="bg-theme-light shadow-sm rounded-4 mt-4 p-3">
        <div class="row mx-auto gap-4 justify-content-between">
            <section class="col-12 col-md-7 px-0">
                <div class="p-3 bg-white shadow-sm border rounded-4">
                    <h3 class="fw-bold fs-4 text-theme mb-3">Upcoming sessions</h3>
                    {{-- <hr class="mb-4"> --}}
                    <div>
                        <ol class="list-group list-group-numbered">
                            @php
                                $noConfirmedBookings = true;
                            @endphp

                            @foreach ($sessions as $session)
                                @php
                                    $day;
                                    switch ($session->week_day) {
                                        case 1:
                                            $day = 'Sunday';
                                            break;
                                        case 2:
                                            $day = 'Monday';
                                            break;
                                        case 3:
                                            $day = 'Tuesday';
                                            break;
                                        case 4:
                                            $day = 'Wednesday';
                                            break;
                                        case 5:
                                            $day = 'Thursday';
                                            break;
                                        case 6:
                                            $day = 'Friday';
                                            break;
                                        case 7:
                                            $day = 'Saturday';
                                            break;
                                        default:
                                            $day = 'Someday';
                                    }
                                @endphp

                                @if ($session->booking->where('status', 'confirmed')->count() > 0)
                                    @foreach ($session->booking->where('status', 'confirmed') as $booking)
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-start mb-1">
                                            <div class="ms-2 me-auto lh-sm">
                                                <div class="fw-bold">{{ $booking->user->first_name }}</div>
                                                {{ $booking->topic }}
                                            </div>
                                            <span class="badge bg-light-green text-success rounded-pill">
                                                <i class="bi bi-check-circle"></i>
                                                {{ $day }}
                                            </span>
                                        </li>
                                    @endforeach
                                    @php
                                        $noConfirmedBookings = false;
                                    @endphp
                                @endif
                            @endforeach

                            @if ($noConfirmedBookings)
                                <p class="text-secondary p-2 bg-body-secondary rounded-3">
                                    Your schedule is free
                                </p>
                            @endif

                        </ol>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('mentor.session.index') }}"
                            class="btn  btn-theme rounded-4 px-4 py-2 shadow-sm fw-semibold border-0 mt-1">
                            All bookings <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </section>

            <section class="col-12 col-md-4 rounded-4 bg-theme px-3 py-3 shadow-sm">
                <div class="">
                    <h3 class="fw-bold fs-4 text-dark">Recent sessions</h3>
                    <div class="mt-3">
                        <ol class="list-group list-group-numbered">
                            @forelse ($sessions as $session)
                                @foreach ($session->booking as $booking)
                                    @if ($booking->status === 'completed')
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-start mb-1 border-0">
                                            <div class="ms-2 me-auto lh-sm">
                                                <div class="fw-bold">{{ $booking->user->first_name }}</div>
                                                {{ $booking->topic }}
                                            </div>
                                            <span class="badge text-bg-success rounded-pill">
                                                <i class="bi bi-check-circle"></i>
                                                Done
                                            </span>
                                        </li>
                                    @endif
                                @endforeach
                            @empty
                                <p class="text-seconadary p-2 bg-white rounded-3 shadow-sm">
                                    No sessions yet...
                                </p>
                            @endforelse
                        </ol>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <livewire:mentor.complete-profile />

    <section class="my-4">
        <div class="bg-white shadow-sm border rounded-4 p-3">
            <h3 class="fw-bold fs-4 text-dark">Recommended for you</h3>
            <hr class="mb-4">
            <livewire:recommended-articles />
        </div>
    </section>

    <hr class="opacity-0 my-5">
</x-layouts.mentor>
