<x-layouts.app>
    <section class="bg-theme-light">
        <div class="container py-4 ">
            <p class="mb-2"><span class="fw-bold">{{ $slice->category }}</span></p>
            <h1 class="fw-bold fs-2 text-dark">
                {{ $slice->title }}
            </h1>
            <p class="text-dark text-shadow lh-sm" style="max-width: 500px;">
                {{ $slice->about }}
            </p>
            <p class="m-0">
                <span class="fw-semibold">By OwenaHub</span>
            </p>
            <p class="m-0">
                <i class="bi bi-clock"></i>
                <span class="fw-semibold">{{ $slice->duration }} Week(s)</span>
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
                        <span class="text-theme fw-bold">{!! $slice->price ? "<span>&#8358;$slice_price</span>" : 'FREE' !!}</span>
                        <span class="text-decoration-line-through text-secondary">&#8358;3,599</span>
                    </p>

                    <hr>

                    {{-- Removes button if user is logged in --}}
                    @if ($is_enrolled)
                        <div>
                            <p>
                                You own this slice already 😎
                            </p>
                        </div>
                    @else
                        <x-enroll-button :slice="$slice" />
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
