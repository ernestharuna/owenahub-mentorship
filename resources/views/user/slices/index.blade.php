<x-layouts.user>
    <div class="container mt-2 animated-2 fadeIn">
        <section class="py-3 border-bottom">
            <h2 class="fs-4 fw-bold text-dark">
                <i class="bi bi-box-fill text-secondary"></i> Slices
            </h2>
        </section>

        <section class="my-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @forelse ($enrolled_slices as $enrolled)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm border-start rounded-4">
                            <div class="card-body">
                                <p class="fs-tiny mb-1 text-red">
                                    {{ $enrolled->slice->category }}
                                </p>
                                <h5 class="card-title fw-bold m-0">
                                    {{ $enrolled->slice->title }}
                                </h5>
                                <div class="d-flex align-items-center gap-3 mt-2">
                                    <div class="bg-f2 rounded-4 shadow-sm  px-3">
                                        <i class="bi bi-boxes"></i> {{ $enrolled->slice->bite->count() }} bites
                                    </div>
                                    <div class="bg-f2 rounded-4 shadow-sm  px-3">
                                        <i class="bi bi-clock"></i> {{ $enrolled->slice->duration }} weeks
                                    </div>
                                </div>
                                @if ($enrolled->slice->bite->count() > 0)
                                    <div class="mt-3">
                                        <a href="{{ route('user.slice.show', ['slice' => $enrolled->slice->id, 'bite' => 0]) }}"
                                            class="btn btn-theme px-4 py-1 text-white rounded-4">
                                            continue <i class="bi bi-play-fill"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="p-2 rounded text-secondary">
                        😐 You have nothing on your plate.
                    </p>
                @endforelse
                <div class="col">
                    <div class="card bg-theme h-100 border-0 shadow-sm border-start rounded-4">
                        <div class="card-body">
                            <p class="fs-tiny mb-1 text-red">
                                Get mentored today!
                            </p>
                            <h5 class="card-title fw-bold m-0">
                                More slices available for you
                            </h5>
                            <div class="d-flex align-items-center gap-4">
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('guest.slices.index') }}"
                                    class="btn btn-light p-4 py-1 text-dark fw-semibold rounded-4">
                                    See courses
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.user>
