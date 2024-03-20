<x-layouts.user>
    <div>
        <div class="mt-5 mb-4 p-3 bg-white shadow-sm rounded-4 border">
            <x-status :status="$booking->status" />
            <h1 class="fw-bold">
                Session with
                <a href="{{ route('user.mentor.show', $booking->session->mentor->id) }}"
                    class="text-secondary">{{ $booking->session->mentor->first_name }}</a>
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
                <div class="fw-semibold">
                    <div class="d-inline-block me-2">
                        <i class="bi bi-calendar3-week"></i>
                        {{ $day }}
                    </div>

                    <div class="d-inline-block me-2">
                        <i class="bi bi-clock"></i>
                        Starting {{ $formatted_time_1 }}
                    </div>
                </div>
                <hr>

                {{-- Chat area --}}
                <div>
                    @forelse ($booking->booking_info as $info)
                        <div class="mb-2">
                            <span class="fs-tiny d-block fw-bold text-red">
                                @if ($info->user_id)
                                    Me
                                @endif
                                @if ($info->mentor_id)
                                    <span class="fs-tiny d-block fw-bold text-theme">
                                        {{ $info->booking->session->mentor->first_name }} <span
                                            class="fw-normal text-dark">(mentor)</span>
                                    </span>
                                @endif
                            </span>
                            <div class="p-2 rounded d-inline-block bg-light bg-body-secondary border">
                                {!! nl2br($info->content) !!}
                            </div>
                        </div>
                    @empty
                        <p class="text-secondary fw-semibold">
                            No messages here yet
                        </p>
                    @endforelse

                    @if ($booking->status === 'cancelled')
                        <p class="mt-3 text-danger">
                            This meeting was cancelled!
                        </p>
                    @elseif($booking->status === 'completed')
                        <p class="mt-3 text-success bg-light-green d-inline-block fw-semibold rounded-3 p-2">
                            Mentor considers this session completed! 😎🎉
                        </p>
                    @else
                        <form action="{{ route('user.session.create-booking-info') }}" class="col-12 col-md-6 mt-4"
                            method="POST">
                            @csrf
                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <textarea name="content" id="content" cols="30" rows="10" placeholder="Message"
                                class="form-control mb-3 fw-semibold" required></textarea>
                            <button class="btn btn-theme rounded-4 px-4 py-1 fw-semibold">
                                Send <i class="bi bi-send ms-2"></i>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        @if ($booking->status === 'completed')
            @if (!$is_reviewed)
                <div class="mb-5 p-3 bg-white shadow-sm rounded-4 border">
                    <h5 class="fs-4 mb-3 fw-bold text-theme">
                        Mentor review
                    </h5>
                    <div class="bg-theme-light px-3 py-2 rounded-4">
                        <form action="{{ route('user.mentor.review-mentor') }}" method="POST" class="mt-2">
                            @csrf
                            <input type="hidden" name="mentor_id" value="{{ $booking->session->mentor_id }}">

                            <select name="rating" id="rating"
                                class="form-control py-3 rounded-4 border border-0 shadow-sm fw-semibold" required>
                                <option value="" disabled selected>How was this mentor?</option>
                                <option value="1" class="text-danger">Poor 🤬</option>
                                <option value="2" class="text-danger">Not satisfied 🤧</option>
                                <option value="3" class="text-warning">Its okay 😐</option>
                                <option value="4" class="text-success">Satisfied 🙂</option>
                                <option value="5" class="text-success">Very satisfied 😍</option>
                            </select>

                            <div class="my-3">
                                <label for="comment" class="fw-bold">Write a comment <br>
                                    <span class="fw-normal fs-tiny">
                                        250 characters</span>
                                </label>
                                <textarea name="comment" id="comment" cols="30" rows="6" class="form-control rounded-4 border-0 shadow-sm"
                                    placeholder="Write a short comment here . . ."></textarea>
                            </div>

                            <div>
                                <button class="btn btn-theme rounded-4 py-2 px-3 fw-semibold" type="submit">
                                    Submit review
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        @endif

        @if ($is_reviewed && $booking->status === 'completed')
            <p class="text-secondary-fw-semibold bg-body-secondary p-3 rounded-3">
                You've reviewed this mentor already
            </p>
        @endif

        @include('partials.__join-community')
    </div>

    <hr class="opacity-0 my-5">

</x-layouts.user>
