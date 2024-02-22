<x-layouts.app>
    <section class="bg-theme-light">
        <div class="container py-4 ">
            <h1 class="fw-bold fs-2 text-dark">
                {{ $slice->title }}
            </h1>
            <p class="mb-2">Duration: <span class="fw-bold">{{ $slice->duration }} Week(s)</span></p>
            <p class="m-0 text-dark text-shadow lh-sm" style="max-width: 500px;">
                {{ $slice->about }}
            </p>
        </div>
    </section>

    <section class="bg-f2 py-3">
        <div class="px-md-0 px-4 container mt-3">
            <div class="row">
                <div class="col-lg-8 p-4 bg-white rounded-4 shadow-sm mb-5 container">
                    <h2 class="fs-5 fw-bold text-theme">Slice Overview</h2>

                    <div class="mb-4">
                        {!! $slice->overview !!}
                    </div>
                    <livewire:share-page />
                </div>
                <div class="col-lg-3 col-12 p-4 bg-white rounded-4 align-self-start shadow-sm container">
                    <p class="fs-3 ">
                        <span class="text-theme fw-bold">{!! $slice->price ? "<span>$$slice_price</span>" : 'FREE' !!}</span>
                        <span class="text-decoration-line-through text-secondary">$2.00</span>
                    </p>

                    <hr>

                    @if (Auth::check())
                        <!-- Button trigger modal -->
                        <button type="button"
                            class="w-100 btn btn-theme fw-bold rounded-4 p-3 fs-5 text-white shadow-sm"
                            data-bs-toggle="modal" data-bs-target="#confirm_slice">
                            Enroll Now!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="confirm_slice" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-dark fw-bold" id="staticBackdropLabel">
                                            Enroll Now?
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <a href="#"
                                            class="btn btn-theme w-100 mb-3 p-3 shadow-sm text-white fw-semibold"
                                            onclick="event.preventDefault(); document.getElementById('create-enrollment').submit();">
                                            Yes
                                        </a>

                                        {{-- Form to create new enrollment --}}
                                        <form class="d-none" id="create-enrollment" method="POST"
                                            action="{{ route('create.enrollment', ['slice_id' => $slice->id]) }}">
                                            @csrf
                                        </form>
                                        {{-- Form to create new enrollment ends --}}

                                        <a class="btn btn-light shadow-sm w-100 p-3 fw-semibold" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            No
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('user.login') }}"
                            class="w-100 btn btn-theme fw-bold rounded-5 p-3 fs-5 text-white shadow-sm">
                            Enroll Now!
                        </a>
                    @endif


                    <div class="p-4 mt-4 bg-white rounded-4 border">
                        <p class="fs-4 fw-bold">
                            Featured Reviews
                        </p>
                        @forelse ($slice->review as $review)
                            <livewire:reviews :review="$review" />
                        @empty
                            <p class="m-0 text-secondary fs-tiny">
                                No reviews on this slice yet
                            </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
