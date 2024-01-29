<x-layouts.user>
    <div class="container mt-2 animated-2 fadeIn">
        <section class="py-3 border-bottom">
            <h2 class="fs-4 fw-bold text-secondary">
                <i class="bi bi-box-fill text-theme"></i> All slices
            </h2>
        </section>

        <section class="my-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @forelse ($enrolled_slices as $enrolled)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm border-start">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="card-title fw-bold m-0">
                                        {{ $enrolled->slice->title }}
                                    </h5>
                                    <p class="m-0 text-secondary fw-semibold">
                                        <i class="bi bi-clock"></i> {{ $enrolled->slice->duration }} weeks
                                    </p>
                                </div>
                                <p class="card-text m-0">
                                    {{ $enrolled->slice->bite->count() }} bites
                                </p>
                                <div class="mt-4">
                                    <a href="{{ route('user.slice.show', ['slice' => $enrolled->slice->id, 'bite' => 0]) }}"
                                        class="btn btn-theme px-4 py-1 text-white fw-bold rounded-1">
                                        continue <i class="bi bi-play-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="p-2 rounded text-secondary">
                        You have nothing on your plate.
                    </p>
                @endforelse
            </div>
        </section>
    </div>
</x-layouts.user>
