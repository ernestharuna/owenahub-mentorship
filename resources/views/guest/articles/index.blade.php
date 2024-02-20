<x-guest.article>
    <div class="mb-3">
        <h1 class="animated-text-2">
            Blog
        </h1>
        <hr>
        <h3 class="fw-light">Featured <i class="bi bi-stars text-theme"></i></h3>
    </div>
    <div class="featured-articles mb-4">
        <livewire:featured-article />
        <livewire:featured-article2 />
    </div>

    <div class='mb-4'>
        <h3 class=''>Latest Articles</h3>
        <a href="/" class='text-decoration-none btn btn-dark px-3 py-1 rounded-5 text-white mt-2 d-inline-block'>
            ← Back Home</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-3">
        @forelse ($articles as $article)
            @php
                $data = $article->title;
                $title = strtolower(str_replace(' ', '-', $data));
            @endphp
            <div class="col">
                <div class="card h-100 border border-bg-body-tertiary shadow-sm">
                    <div class="card-body pt-2">
                        <a href="{{ route('guest.articles.show', ['article' => $article->id, 'title' => $title]) }}"
                            class='text-decoration-none text-dark'>
                            <p class="mb-1 text-red text-uppercase rounded-1 fs-tiny">
                                {{ $article->category }} <br>
                                <small class="text-body-secondary text-capitalize fs-tiny">
                                    updated {{ $article->created_at->format('j M Y, g:i A') }}
                                </small>
                            </p>

                            <h5 class="card-title fw-semibold fs-5">{{ $article->title }}</h5>

                            <p class="card-text lh-sm">
                                {{ $article->description }}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="p-2 bg-f2">No articles</div>
        @endforelse
    </div>
    <div class="mt-4">
        {{ $articles->links() }}
    </div>
    <div class="bg-theme-light rounded-4">
        <section class="container py-5">
            <div>
                <div class="text-center">
                    <h2 class="fs-1 fw-bold text-dark m-0">Join Our Community</h2>
                    <p class="text-dark">
                        We're available whereever you are 🙂
                    </p>
                </div>
                <div class="text-center mt-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn rounded-5 btn-theme px-4 shadow text-dark fw-bold"
                        data-bs-toggle="modal" data-bs-target="#joinCommunity">
                        Check Us Out! 🤙🏽
                    </button>
                    <!-- Modal: exists in guest navbar component -->
                </div>
            </div>
        </section>
    </div>
</x-guest.article>
