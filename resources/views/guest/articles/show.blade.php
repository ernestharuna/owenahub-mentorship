<x-guest.article>
    <x-slot name="title">
        {{ $article->title ?? 'Tech Career Insights - OwenaHub' }}
    </x-slot>

    <div class='mb-4'>
        <div>
            <div class="pill fs-tiny fw-bold d-inline-block text-uppercase">{{ $article->category }}</div>
            <div class="my-1 text-uppercase fs-tiny fw-bold text-secondary">
                {{ $article->created_at->format('j M Y, g:i a') }}
            </div>
        </div>
        <h1 class='fw-medium fs-large'>{{ $article->title }}</h1>
        <p class="p-2 bg-f2 border">{{ $article->description }}</p>

        <div>
            <img src="{{ asset('images/about_img.png') }}" alt="..." class="img-fluid w-100 shadow">
        </div>
    </div>

    <div class="animated-2 fadeIn">
        {!! $article->content !!}
    </div>
</x-guest.article>
