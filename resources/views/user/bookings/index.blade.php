<x-layouts.user>
    <div>
        <div class="my-5 p-3 bg-white shadow-sm rounded-4 border">
            <h2 class="fw-bold">
                Bookings
            </h2>
            <p class="lh-sm fw-semibold">
                The session timings are following your local timezone <span class="text-red fw-semibold">Africa/Lagos
                </span>
            </p>

            <div class="mt-4">
                <div class="row gap-3 mx-auto">
                    @forelse ($bookings as $booking)
                        @php
                            $day;
                            switch ($booking->session->week_day) {
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

                            // format times to 24hr format
                            $st = $booking->session->start_time;
                            $start_time = DateTime::createFromFormat('H:i:s', $st);
                            $formatted_time_1 = $start_time->format('h:i a');
                        @endphp
                        <div class="col-12 col-md-5 border p-3 rounded-4 shadow-sm">
                            <x-status :status="$booking->status" />
                            <h5>
                                <span class="text-secondary">{{ $booking->topic }}</span> session with
                                <span class="text-red">{{ $booking->session->mentor->first_name }}</span>
                            </h5>
                            <div class="fw-semibold">
                                <i class="bi bi-calendar3-week"></i>
                                {{ $day }}, {{ $formatted_time_1 }}
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('user.session.show', $booking->id) }}"
                                    class="btn btn-sm btn-secondary fs-tiny px-3 py-0 rounded-4 text-decoration-none fw-semibold">
                                    View
                                </a>
                                <a href="#" class="text-dark text-decoration-none fw-semibold ms-2 mt-2">
                                    <i class="bi bi-three-dots fs-5" style="position: relative; top: 3px;"></i>
                                </a>
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


        <div class="my-5 p-3 bg-white shadow-sm rounded-4 border">
            <h4 class="fw-semibold">
                Suggested Mentors
            </h4>

            <p class="lh-sm fw-semibold">
                <i class="bi bi-stars text-red"></i> Your best matches — <span class="text-secondary fw-normal">
                    We picked these mentors based on your interest</span>
            </p>

            <section class="my-4">
                <div class="row row-cols-1 row-cols-lg-4 g-3">
                    @forelse ($mentors as $mentor)
                        <x-mentor-card :mentor="$mentor" />
                    @empty
                        <p class="p-2 bg-f2 text-secondary">
                            No suggestions for your profile.
                            Make sure your <a href="{{ route('user.profile.index') }}">profile</a> is updated.
                        </p>
                    @endforelse
                </div>
            </section>

            <div>
                <a href="{{ route('user.mentor.index') }}" class="btn btn-outline-dark rounded-3 fw-semibold">
                    Explore mentors <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        @include('partials.__join-community')
    </div>

    <hr class="opacity-0 my-5">

</x-layouts.user>
