<x-layouts.user>
    <div class="">
        <div class="my-5 p-3 bg-white shadow-sm rounded-4 border">
            <div class="d-flex align-items-center gap-3">
                <div class="" style="min-width: 100px; min-height: 100px; max-width: 100px">
                    @if ($mentor->social_handle && $mentor->social_handle->image_path)
                        <img src="{{ $mentor->social_handle->image_path }}" alt="..."
                            class="border d-block img-fluid w-100 rounded-5 object-fit-cover border-3 border-warning">
                    @else
                        <img src="{{ asset('images/default-dp.png') }}" alt="..."
                            class="border d-block img-fluid w-100 rounded-5 object-fit-cover border-3 border-warning">
                    @endif
                </div>
                <div>
                    <h1 class="fs-2 fw-bold m-0">
                        {{ $mentor->first_name }} {{ $mentor->last_name }}
                    </h1>
                    <p class="m-0">
                        {{ $mentor->misc_info ? $mentor->misc_info->expertise : 'New mentor' }}
                    </p>
                </div>
            </div>

            <div class="mt-5 row mx-auto justify-content-between">
                <div class="col-12 col-md-6 pe-md-5">
                    <h2 class="fs-5 fw-semibold">Overview</h2>
                    <hr>
                    <p>
                        {!! $mentor->misc_info ? nl2br($mentor->misc_info->bio) : 'No information' !!}
                    </p>

                    @if ($mentor->social_handle)
                        <div class="fs-4 social-links">
                            @isset($mentor->social_handle->linkedin)
                                <i class="bi bi-linkedin me-2 linkedin text-white rounded px-2 py-1"></i>
                            @endisset
                            @isset($mentor->social_handle->x_twitter)
                                <i class="bi bi-twitter-x me-2 bg-dark text-white rounded px-2 py-1"></i>
                            @endisset
                            @isset($mentor->social_handle->isntagram)
                                <i class="bi bi-isntagram me-2 instagram text-white rounded px-2 py-1"></i>
                            @endisset
                            @isset($mentor->social_handle->facebook)
                                <i class="bi bi-facebook me-2 facebook text-white rounded px-2 py-1"></i>
                            @endisset
                        </div>
                    @endif

                    <div class="mt-4">
                        <h3 class="fs-6">Available sessions</h3>
                        <div class="mt-1 bg-light border shadow-sm rounded-3 p-1">
                            <livewire:calender :all_dates="$mentor->session" />
                        </div>
                    </div>

                    <div class="p-2 mt-4">
                        @forelse ($mentor->session as $session)
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

                            <div wire:key="{{ $session->id }}"
                                class="d-flex align-items-center justify-content-between mb-2 border-bottom">
                                <div>
                                    <h3 class="m-0 fs-6">{{ $day }}</h3>
                                    <p class="m-0">
                                        {{ $session->start_time }} — {{ $session->end_time }}
                                    </p>
                                </div>
                                {{-- Button --}}
                                <div>
                                    <button class="btn btn-secondary btn-sm rounded-2 px-3 fw-semibold fs-tiny"
                                        data-bs-toggle="modal" data-bs-target="#book-session-{{ $session->id }}">
                                        <small>
                                            Book
                                        </small>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="book-session-{{ $session->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content rounded-4">
                                                <div class="modal-header">
                                                    <p class="modal-title fs-5 text-dark fw-semibold"
                                                        id="exampleModalLabel">
                                                        Meet on <span class="fw-bold">{{ $day }}?</span>
                                                    </p>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="lh-sm">
                                                        We'll notify
                                                        <span
                                                            class="fw-semibold">{{ $session->mentor->first_name }}</span>
                                                        that you want to meet.
                                                    </p>

                                                    <form action="{{ route('user.session.create-booking') }}"
                                                        method="POST">
                                                        @csrf
                                                        <label for="topic" class="fw-bold">Select session
                                                            topic
                                                        </label>
                                                        <select name="topic" id="topic"
                                                            class="form-control bg-body-tertiary rounded-3 mb-2 py-2 shadow-sm fs-5"
                                                            required>
                                                            <option value="General mentorship">
                                                                General mentorship
                                                            </option>
                                                            <option value="Transitioning to tech">
                                                                Transitioning to tech
                                                            </option>
                                                            <option value="Landing a job">
                                                                Landing a job
                                                            </option>
                                                            <option value="Career advancement">
                                                                Career advancement
                                                            </option>
                                                        </select>
                                                        <input type="hidden" name="session_id" id="session_id"
                                                            value="{{ $session->id }}">

                                                        <p class="fw-semibold">
                                                            {{ $session->mentor->first_name }} is available
                                                            <span class="text-red">{{ $session->start_time }}</span>
                                                            to <span class="text-red">{{ $session->end_time }}</span>
                                                            on {{ $day }}
                                                        </p>

                                                        <button class="btn btn-dark rounded-3 py-2 w-100 fw-semibold">
                                                            Confirm booking
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="m-0 text-secondary fw-semibold">
                                No availability created yet
                            </p>
                        @endforelse
                    </div>

                </div>
                <div class="rounded-4 p-3 mt-4 mt-md-0 bg-theme-light col-12 col-md-6">
                    <h2 class="fs-5 fw-semibold mb-3">Reviews</h2>
                    <div class="bg-white shadow p-2 rounded-4">
                        @forelse ($mentor->mentorReview as $review)
                            <div class="fs-tiny p-2 border-bottom">
                                <h4 class="m-0 fs-6">{{ $review->user->first_name }}</h4>
                                <div class="text-theme fs-tiny">
                                    <!-- for filled stars-->
                                    @for ($i = 0; $i < $review->rating; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor

                                    <!-- for empty stars-->
                                    @for ($i = 0; $i < 5 - $review->rating; $i++)
                                        <i class="bi bi-star"></i>
                                    @endfor
                                </div>
                            </div>
                            <p class="m-0">
                                {{ $review->comment }}
                            </p>
                        @empty
                            <div class="fs-tiny p-2">
                                <p class="m-0">
                                    No reviews here yet
                                </p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.__join-community')

    <hr class="opacity-0 my-5">

</x-layouts.user>
