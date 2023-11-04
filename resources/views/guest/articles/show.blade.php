<x-guest.article>

    <head>
        <title>
            {{ $article->title }} - OwenaHub
        </title>
        <meta name="description" content="{{ $article->description }}">
    </head>

    <div class='mb-4'>
        <div>
            <div class="pill fs-tiny fw-bold d-inline-block text-uppercase">{{ $article->category }}</div>
            <div class="my-1 text-uppercase fs-tiny fw-bold text-secondary">
                {{ $article->created_at->format('j M Y, g:i a') }}
            </div>
        </div>
        <h1 class='fw-medium fs-large'>{{ $article->title }}</h1>
        <p class="p-2 bg-f2 border">{{ $article->description }}</p>
    </div>

    <div class="animated-2 fadeIn">
        {!! $article->content !!}
    </div>
</x-guest.article>
