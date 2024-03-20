<x-layouts.mentor>
    <div>
        <div class="my-5 p-3 bg-white shadow-sm rounded-4 border">
            <x-status :status="$booking->status" />

            <h1 class="fw-bold">
                Session with
                <span class="text-secondary">{{ $booking->user->first_name }} {{ $booking->user->last_name }}</span>
                <br>
                <small class="fs-6 fw-normal text-secondary">
                    <span class="fw-semibold text-dark">Topic:</span> {{ $booking->topic }}
                </small>
            </h1>

            <div class="mt-3">
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
                <div class="fw-semibold mb-3">
                    <div class="d-inline-block me-2">
                        <i class="bi bi-calendar3-week"></i>
                        {{ $day }}
                    </div>

                    <div class="d-inline-block me-2">
                        <i class="bi bi-clock"></i>
                        Starting {{ $formatted_time_1 }}
                    </div>
                </div>

                <livewire:mentor.session-status :id="$booking->id" :current_status="$booking->status" />

                <hr>

                <div>
                    @forelse ($booking->booking_info as $info)
                        <div class="mb-2">
                            @if ($info->mentor_id)
                                <span class="fs-tiny d-block fw-bold text-theme">
                                    Me
                                </span>
                            @endif
                            @if ($info->user_id)
                                <span class="fs-tiny d-block fw-bold text-danger">
                                    {{ $booking->user->first_name }}
                                </span>
                            @endif
                            <div class="p-2 rounded d-inline-block bg-light bg-gradient border">
                                {!! nl2br($info->content) !!}
                            </div>
                        </div>
                    @empty
                        <p class="text-secondary fw-semibold">
                            No messages here yet
                        </p>
                    @endforelse

                    @if ($booking->status === 'cancelled')
                        <p class="m-0 text-danger">
                            This meeting has been cancelled!
                        </p>
                    @elseif($booking->status === 'completed')
                        <p class="mt-3 text-success bg-light-green d-inline-block fw-semibold rounded-3 p-2">
                            Session complete 🎉
                        </p>
                    @elseif($booking->status === 'pending')
                        <p class="mt-3 text-success bg-body-secondary d-inline-block fw-semibold rounded-3 p-2">
                            Accept the request to be able to reply
                        </p>
                    @else
                        <form action="{{ route('mentor.session.create-booking-info') }}" class="col-12 col-md-6 mt-4"
                            method="POST">
                            @csrf
                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                            <input type="hidden" name="mentor_id" value="{{ auth()->id() }}">
                            <textarea name="content" id="content" cols="30" rows="10" placeholder="Message"
                                class="form-control mb-3 fw-semibold rounded-3" required></textarea>
                            <button class="btn btn-theme rounded-4 px-4 py-1 fw-semibold">
                                Send <i class="bi bi-send ms-2"></i>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        @include('partials.__join-community')
    </div>

    <hr class="opacity-0 my-5">

</x-layouts.mentor>
