<x-guest.article>
    <div class="featured-articles mb-4">
        <h3 class='fw-bold'>Featured Articles 👌</h3>
        <livewire:featured-article />
        <livewire:featured-article2 />
    </div>

    <div class='mb-4'>
        <h3 class='fw-bold'>Latest Articles</h3>
        <p class="m-0">
            <a href="/" class='text-decoration-none'>← Back Home</a>
        </p>
    </div>

    <div class="animated-2 fadeIn">
        @forelse ($articles as $article)
            <a href="{{ route('guest.articles.show', $article->id) }}" class='text-decoration-none'>
                <div class="card bg-light my-2 bg-gradient border border-none">
                    <div class="card-body p-1 d-flex align-items-stretch">
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
    <div class="bg-theme-light">
        <section class="container py-5">
            <div>
                <div class="text-center">
                    <h2 class="fs-1 fw-bold">Not your average Tech Newsletter.</h2>
                    <p class="text-secondary my-4 fs-5 font-monospace">
                        Subscribe now to get exclusive insights <br>
                        from experienced mentors.
                    </p>
                </div>
                <div class="text-center">
                    <livewire:subscribe-button />
                </div>
            </div>
        </section>
    </div>
</x-guest.article>
