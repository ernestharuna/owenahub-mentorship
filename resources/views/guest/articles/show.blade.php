<x-guest.article>
    <x-slot name="title">
        {{ $article->title . ' | OwenaHub Blog' ?? 'OwenaHub Blog: The Mentorship Platform for Tech Enthusiasts' }}
    </x-slot>

    <div class='mb-4'>
        <div class="fs-6 d-inline-block mb-2">
            <span class="text-red font-monospace fw-bold">
                <i class="bi bi-tags-fill"></i> {{ $article->category }}
            </span>
            <span class="text-secondary font-monospace">
                <br>
                Last Updated,
                @if ($article->created_at->eq($article->updated_at))
                    {{ $article->created_at->format('j M Y') }}
                @else
                    {{ $article->updated_at->format('j M Y') }}
                @endif
            </span>
        </div>

        <h1 class="fs-1 fw-bold">{{ $article->title }}</h1>
        <hr>
        <div class="mt-3 mb-4">
            <x-guest.author :is_admin="$article->admin" />
            <div class="fw-bold fst-italic mt-1">
                The 411,
                <span class="text-secondary fw-normal">
                    "...{{ $article->description }}..."
                </span>
            </div>
        </div>

        <div>
            <img src="{{ $article->image_path ? asset('storage/' . $article->image_path) : asset('images/generic_img.jpg') }}"
                alt="..." class="img-fluid w-100 shadow animated-2 fadeIn">
        </div>
    </div>
    <div class="animated-2 fadeIn mb-5 mt-3">
        {!! $article->content !!}
    </div>
    <livewire:share-page />
</x-guest.article>
