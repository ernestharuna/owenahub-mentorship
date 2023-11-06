<x-guest.article>
    <div class='mb-4'>
        <h3 class='fw-bold'>Latest Articles</h3>
        <p class="m-0">
            <a href="/" class='text-decoration-none'>← Back Home</a>
        </p>
    </div>

    <div class="animated-2 fadeIn">
        @forelse ($articles as $article)
            <a href="{{ route('guest.articles.show', $article->id) }}" class='text-decoration-none'>
                <div class="card bg-white my-2 bg-gradient border border-none">
                    <div class="card-body p-1 d-flex align-items-stretch">
                        <img src="{{ asset('images/about_img.png') }}" alt="..." class="img-fluid d-block rounded"
                            width="140px">

                        <div class="mx-2">
                            <div class="text-primary">{{ $article->category }}</div>
                            <small class="text-secondary fs-tiny">
                                Posted on {{ $article->created_at->format('j M Y, g:i a') }}
                            </small>
                            <h4 class='fs-5 m-0 fw-medium'>
                                {{ $article->title }}
                            </h4>
                            <p class='m-0 text-secondary fst-italic'>
                                {{ $article->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <div class="p-2 bg-f2">No articles</div>
        @endforelse
    </div>
    <div class="mt-4">
        {{ $articles->links() }}
    </div>
</x-guest.article>
