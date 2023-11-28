<x-layouts.user>
    <div class="container">
        <section class="row">
            <aside class="col-3 border-end bg-f2">
                <div class="py-4 fs-tiny">
                    <h3 class="mb-4">
                        <span class="text-theme fw-bold">OwenaHub</span> <span class="fw-light">slices</span>
                    </h3>
                    @forelse ($slice->bite as $bite)
                        <div class="p-2 border-bottom rounded mb-1">
                            <a href="?bite={{ $bite->id }}" class="d-block text-decoration-none text-dark">
                                <span class="fw-semibold">
                                    {{ $bite->title }}
                                </span><br>
                                <span class="fs-tiny">{{ $bite->description }}</span>
                            </a>
                        </div>
                    @empty
                        <p>
                            Nothing
                        </p>
                    @endforelse
                </div>
            </aside>

            <div class="col-8 py-4">
                <p class="text-secondary fw-semibold">
                    <span class="text-theme"> Bite {{ $show_bite->position }}: </span>{{ $show_bite->title }}
                </p>
                <hr>

                <p>
                    {!! $show_bite->content !!}
                </p>

                {{-- Complete button --}}
                <div>

                </div>
            </div>
        </section>
    </div>
</x-layouts.user>
