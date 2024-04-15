<x-layouts.admin>
    <div class="container">
        <a href="{{ route('admin.mentors.index') }}" class="mt-4 btn btn-theme rounded-4">
            <i class="bi bi-arrow-left"></i> All mentors
        </a>
        <div class="mb-5 mt-4 p-3 bg-white shadow-sm rounded-4 border">
            <div class="d-md-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div style="width: 100px; max-width: 100px; height: 100px; max-height: 100px;">
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
                            <span class="fs-tiny">
                                @if ($mentor->email_verified_at)
                                    <span
                                        class="p-1 bg-light-green text-success py-0 px-1 shadow-sm rounded">approved</span>
                                @else
                                    <span
                                        class="p-1 bg-danger-subtle text-danger py-0 px-1 shadow-sm rounded">suspended</span>
                                @endif
                            </span>
                        </h1>
                        <p class="m-0 lh-sm">
                            {{ $mentor->misc_info ? $mentor->misc_info->expertise : 'New mentor' }}
                            <br>
                            <a href="mailto:{{ $mentor->email }}">{{ $mentor->email }}</a>
                        </p>
                    </div>
                </div>
                <div>
                    @if ($mentor->social_handle)
                        <div class="fs-4 social-links">
                            @isset($mentor->social_handle->linkedin)
                                <a href="{{ $mentor->social_handle->linkedin }}"
                                    class="linkedin text-decoration-none text-white p-1 ms-1 rounded-1 fs-tiny">
                                    <i class="ms-1 bi bi-linkedin"></i> linkedin
                                </a>
                            @endisset
                            @isset($mentor->social_handle->x_twitter)
                                <a href="{{ $mentor->social_handle->x_twitter }}"
                                    class="bg-dark text-decoration-none text-white p-1 ms-1 rounded-1 fs-tiny">
                                    <i class="ms-1 bi bi-twitter-x"></i> (twitter)
                                </a>
                            @endisset
                            @isset($mentor->social_handle->instagram)
                                <a href="{{ $mentor->social_handle->instagram }}"
                                    class="instagram text-decoration-none text-white p-1 ms-1 rounded-1 fs-tiny">
                                    <i class="m-0 bi bi-instagram"></i> instagram
                                </a>
                            @endisset
                            @isset($mentor->social_handle->facebook)
                                <a href="{{ $mentor->social_handle->facebook }}"
                                    class="facebook text-decoration-none text-white p-1 ms-1 rounded-1 fs-tiny">
                                    <i class="m-0 bi bi-facebook"></i> facebook
                                </a>
                            @endisset
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-4 row mx-auto justify-content-between">
                <div class="col-12 col-md-6 pe-md-5">
                    <h2 class="fs-5 fw-semibold">Overview</h2>
                    <hr class="my-2">
                    <p>
                        {!! $mentor->misc_info ? nl2br($mentor->misc_info->bio) : 'No information' !!}
                    </p>

                    <div class="py-2 px-2 bg-f2 rounded-3 mt-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Country</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $mentor->misc_info ? $mentor->misc_info->country : '...' }}</td>
                                    <td>{{ $mentor->misc_info ? $mentor->misc_info->role : '...' }}</td>
                                    <td>{{ $mentor->misc_info ? $mentor->misc_info->company : '...' }}</td>
                                </tr>
                            </tbody>
                        </table>

                        @if ($mentor->email_verified_at)
                            <form action="{{ route('admin.mentors.suspend.profile', $mentor->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger rounded-3 px-3" type="submit">
                                    Suspend profile
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.mentors.approve.profile', $mentor->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="email_verified_at" value="{{ Carbon\Carbon::now() }}">

                                <button class="btn btn-dark rounded-3 px-3" type="submit">
                                    Approve profile
                                </button>
                            </form>
                        @endif
                    </div>

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
                                    <button class="btn btn-danger btn-sm rounded-2 px-3 fw-semibold fs-tiny"
                                        data-bs-toggle="modal" data-bs-target="#book-session-{{ $session->id }}">
                                        <small>
                                            Delete
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
                                                        Delete <span class="fw-bold">{{ $day }}?</span>
                                                    </p>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

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
                        @forelse ($mentor->mentor_review as $review)
                            <div class="fs-tiny p-2">
                                <h4 class="m-0 fs-6">{{ $review->user->first_name }}
                                    @if ($review->user_id === auth()->id())
                                        <span class="fw-normal fs-tiny">(Me)</span>
                                    @endif
                                </h4>
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
                                <p class="m-0">
                                    {{ $review->comment }}
                                </p>
                            </div>
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
        @include('partials.__join-community')
    </div>


    <hr class="opacity-0 my-5">
</x-layouts.admin>
