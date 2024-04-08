<x-guest.article>


    <x-slot name="title">
        {{ $article->title . ' | OwenaHub Blog' ?? 'Blog: OwenaHub' }}
    </x-slot>

    <a href="/articles" class="text-decoration-none fw-semibold text-dark">
        <i class="bi bi-caret-left"></i>
        Go back
    </a>
    <div class='mb-5 w-64'>
        <div class="fs-6 mt-5 mb-2">
            <span class="text-secondary">
                <i class="bi bi-tags text-red"></i>
                @if ($article->created_at->eq($article->updated_at))
                    {{ $article->created_at->format('l F j, Y') }}
                @else
                    {{ $article->created_at->format('l F j, Y') }}
                @endif
            </span> —
            <span>{{ $article->category }}</span>
        </div>

        <h1 class="fs-1 fw-bold">{{ $article->title }}</h1>
        <div class="mt-3 mb-4">
            <x-guest.author :is_admin="$article->admin" />
        </div>
    </div>
    <div class="mb-5 mt-3 w-64">
        {!! $article->content !!}

        <div class="mt-4">
            <livewire:share-page />
        </div>
    </div>
    <div class="mb-5 mt-3 py-5 px-2 w-64 border-top" style="background: linear-gradient(45deg, #fff, #ffeeca, #fff)">
        <h5 class="fs-4 text-start text-md-center ps-3 mb-5">
            Get all of our updates directly to <br class="d-inline-block d-md-none"> your inbox. <br>
            Sign up for our newsletter.
        </h5>
        <livewire:subscribe-button />
    </div>
</x-guest.article>
