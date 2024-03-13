<x-layouts.mentor>
    <div>
        <div class="my-5 p-3 bg-white shadow-sm rounded-4 border">
            <div class="d-flex align-items justify-content-between mb-3">
                <h2 class="fw-bold">
                    Sessions
                </h2>
                <div>
                    <a href="{{ route('mentor.profile.availability') }}"
                        class="btn btn-sm btn-theme rounded-3 fw-semibold px-3">
                        Manage session
                    </a>
                </div>
            </div>
            <p class="lh-sm fw-semibold">
                The session timings are following your local timezone <span class="text-red fw-semibold">Africa/Lagos
                </span>
            </p>

            <div class="mt-4">
                <div class="row gap-3 mx-auto">
                    @forelse ($sessions as $session)
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
                        <div class="col-12 col-md-5 border p-3 rounded-3 shadow-sm">
                            {{-- <x-status :status="$booking->status" /> --}}
                            <h5> {{ $day }}</h5>
                            <div class="fw-semibold">

                            </div>
                            <div class="mt-3">
                                <ol class="list-group list-group-numbered">
                                    @forelse ($session->booking as $booking)
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto lh-sm">
                                                <a href="{{ route('mentor.session.show', $booking->id) }}"
                                                    class="text-dark text-decoration-none">
                                                    <div class="fw-bold">
                                                        {{ $booking->user->first_name }}'s booking
                                                    </div>
                                                    <span>{{ $booking->topic }}</span>
                                                </a>
                                            </div>
                                            <span>
                                                <x-status :status="$booking->status" />
                                            </span>
                                        </li>
                                    @empty
                                        <p class="m-0 text-secondary fw-semibold">
                                            No bookings for {{ $day }}
                                        </p>
                                    @endforelse
                                </ol>
                            </div>
                        </div>
                    @empty
                        <p class="m-0 p-2 text-secondary bg-body-secondary rounded-2 ">
                            You have no upcoming bookings 🙂
                        </p>
                    @endforelse

                </div>
            </div>
        </div>

        @include('partials.__join-community')
    </div>

    <hr class="opacity-0 my-5">
</x-layouts.mentor>
