<x-layouts.app>
    <section class="bg-theme">
        <div class="container py-4">
            <h1 class="fw-bold fs-2">
                {{ $slice->title }}
            </h1>
            <p class="">Duration: <span class="fw-bold">{{ $slice->duration }} Week(s)</span></p>
            <p class="m-0 text-white" style="max-width: 300px;">
                {{ $slice->about }}
            </p>
        </div>
    </section>

    <section class="bg-f2 py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 p-4 bg-white rounded shadow-sm mb-5 container">
                    <h2 class="fs-5 fw-bold text-theme">Course Overview</h2>

                    <div class="mb-4">
                        {!! $slice->overview !!}
                    </div>
                    <livewire:share-page />
                </div>
                <div class="col-lg-3 col-12 p-4 bg-white rounded align-self-start shadow-sm container">
                    <p class="fs-3 ">
                        <span class="text-theme fw-bold">{!! $slice->price ? "<span>&#8358;$slice_price</span>" : 'FREE' !!}</span>
                        <span class="text-decoration-line-through text-secondary">&#8358;5400.00</span>
                    </p>

                    <hr>

                    <!-- Button trigger modal -->
                    <button type="button" class="w-100 btn btn-dark fw-bold rounded-1 p-3 fs-5 text-white shadow-sm"
                        data-bs-toggle="modal" data-bs-target="#confirm_slice">
                        Add to plate!
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="confirm_slice" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-dark fw-bold" id="staticBackdropLabel">
                                        Are you sure you want to bite this slice?
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <a href="{{ route('user.login') }}" class="btn btn-theme w-100 mb-3 p-3 shadow-sm"
                                        onclick="event.preventDefault(); document.getElementById('create-enrollment').submit();">
                                        Yes
                                    </a>

                                    {{-- Form to create new enrollment --}}
                                    <form class="d-none" id="create-enrollment" method="POST"
                                        action="{{ route('create.enrollment', [
                                            'slice_id' => $slice->id,
                                            'user_id' => Auth::id(),
                                        ]) }}">
                                        @csrf
                                    </form>
                                    {{-- Form to create new enrollment ends --}}

                                    <a class="btn btn-light shadow-sm w-100 p-3" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        No
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="p-4 mt-4 bg-white rounded border">
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
