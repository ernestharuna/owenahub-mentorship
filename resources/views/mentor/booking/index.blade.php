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
                Our session timings follow <span class="text-red fw-semibold">Africa/Lagos
                </span> timezone
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
                        <div class="col-12 col-md-5 p-3 rounded-3 shadow-sm bg-theme-light">
                            <h5> {{ $day }}</h5>
                            <div class="mt-3">
                                @forelse ($session->booking->reverse() as $booking)
                                    <div class="card border-0 shadow-sm rounded-3 mb-1">
                                        <a href="{{ route('mentor.session.show', $booking->id) }}"
                                            class="text-dark text-decoration-none">
                                            <div class="card-body p-2">
                                                <span
                                                    class="d-flex justify-content-between align-items-start position-relative">
                                                    <div class="ms-2 me-auto lh-sm">
                                                        <div class="fw-bold">
                                                            {{ $booking->user->first_name }}'s booking
                                                        </div>
                                                        <div class="fs-tiny">
                                                            <span>{{ $booking->topic }}</span> &middot; <span
                                                                class="text-decoration-underline text-red">view</span>
                                                        </div>
                                                    </div>
                                                    <span>
                                                        <x-status :status="$booking->status" />
                                                    </span>
                                                    @if ($booking->booking_info->count() > 0)
                                                        <span
                                                            title="{{ $booking->booking_info->count() }} chats exchanged"
                                                            class="position-absolute top-0 start-100 translate-middle badge rounded-3 bg-danger">
                                                            {{ $booking->booking_info->count() }}
                                                            <span class="visually-hidden">unread messages</span>
                                                        </span>
                                                    @endif
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <p class="m-0 text-secondary">
                                        No bookings for {{ $day }}
                                    </p>
                                @endforelse
                            </div>
                        </div>
                    @empty
                        <p class="m-0 p-2 text-secondary bg-body-secondary rounded-2 ">
                            Set your availability to enable mentees to schedule appointments with you <br>
                            <a href="{{ route('mentor.profile.availability') }}" class="fw-semibold">Get started</a>
                        </p>
                    @endforelse

                </div>
            </div>
        </div>

        @include('partials.__join-community')
    </div>

    <hr class="opacity-0 my-5">
</x-layouts.mentor>
