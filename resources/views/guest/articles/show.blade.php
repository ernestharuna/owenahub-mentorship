<x-guest.article>
    <x-slot name="title">
        {{ $article->title ?? 'Tech Career Insights - OwenaHub' }}
    </x-slot>

    <div class='mb-4'>
        <div class="fs-6 d-inline-block mb-2">
            <span class="text-red text-uppercase fw-semibold">
                {{ $article->category }}
            </span>
            <span class="text-secondary font-monospace">
                — Last Updated at
                @if ($article->created_at->eq($article->updated_at))
                    {{ $article->created_at->format('j M Y') }}
                @else
                    {{ $article->updated_at->format('j M Y') }}
                @endif
            </span>
        </div>

        <h1 class='fw-medium fs-1'>{{ $article->title }}</h1>

        <div class="mt-3 mb-4">
            <x-guest.author :is_admin="$article->admin" />
            <div class="fw-bold fst-italic">
                The 411,
                <span class="text-secondary">
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
