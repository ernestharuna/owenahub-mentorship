<x-layouts.user>
    <div>
        <section class="row">
            <aside class="col-md-4 col-12 border-end bg-f2">
                <div class="py-4 fs-tiny">
                    <h3 class="mb-4">
                        <span class="fw-light">Your</span> <span class="text-theme fw-bold">Bites</span>
                    </h3>
                    @forelse ($slice->bite as $bite)
                        @php
                            $active = $bite->id === $show_bite->id;
                        @endphp
                        <div @class([
                            'bg-theme' => $active,
                            'text-light' => $active,
                            'bg-white' => !$active,
                            'p-2',
                            'border-bottom',
                            'border-start',
                            'rounded',
                            'mb-2',
                            'd-flex',
                            'align-items-center',
                        ])>
                            <livewire:user.checked-badge :bite="$bite->id" />
                            <a href="?bite={{ $loop->iteration }}" @class([
                                'd-block',
                                'text-decoration-none',
                                'text-white' => $active,
                                'text-dark' => !$active,
                            ])>
                                <span class="fw-semibold">
                                    {{ $bite->title }} {{ $active }}
                                </span><br>
                                <span class="fs-tiny">
                                    {{ $bite->description }}
                                </span>
                            </a>
                        </div>
                    @empty
                        <p>
                            Nothing
                        </p>
                    @endforelse
                </div>
            </aside>

            <div class="col-md-8 col-12 py-4">
                <p class="fs-5">
                    <span class="text-theme fw-bold">
                        Bite {{ $show_bite->position }}:
                    </span>
                    <span class="fw-semibold">
                        {{ $show_bite->title }}
                    </span>
                </p>
                <hr>

                <div class="animated-2 fadeIn">
                    <p>
                        {!! $show_bite->content !!}
                    </p>
                </div>

                {{-- Complete button --}}
                <hr>

                <div class="d-flex justify-content-between align-items-center">
                    <livewire:user.finish-task :slice_id="$slice->id" :bite_id="$show_bite->id" />
                </div>

                <hr class="mb-5">
            </div>
        </section>
    </div>
</x-layouts.user>
