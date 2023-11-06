<x-guest.article>
    <x-slot name="title">
        {{ $article->title ?? 'Tech Career Insights - OwenaHub' }}
    </x-slot>

    <div class='mb-4'>
        <div>
            <div class="pill fs-tiny fw-bold d-inline-block text-uppercase">{{ $article->category }}</div>
            <div class="my-1 text-uppercase fs-tiny fw-bold text-secondary">
                {{ $article->created_at->format('j M Y, g:i a') }}
                @unless ($article->created_at->eq($article->updated_at))
                    <span class=""> &middot; {{ __('updated') }}</span>
                @endunless
            </div>
        </div>
        <h1 class='fw-medium fs-large'>{{ $article->title }}</h1>
        <div class="p-2 mb-1 bg-f2">
            <x-guest.author :fn="$article->admin->first_name" :ln="$article->admin->last_name" />
            {{ $article->description }}
        </div>

        <div>
            <img src="{{ $article->image_path ? asset('storage/' . $article->image_path) : asset('images/generic_img.jpg') }}"
                alt="..." class="img-fluid w-100 shadow animated fadeIn">
        </div>
    </div>
    <div class="animated-2 fadeIn">
        {!! $article->content !!}
    </div>
</x-guest.article>
