<x-layouts.admin>
    <div class="container">
        <header class="my-4">
            <h4 class="text-secondary fs-2 fw-bold">
                Dashboard
            </h4>
            <p>
                Welcome {{ Auth::user()->first_name }}
            </p>
            <div class="my-3">
                <a href={{ route('admin.articles.create') }}>
                    <button class="btn btn-dark rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i> New Article
                    </button>
                </a>
                <a href={{ route('admin.feat_articles.create') }}>
                    <button class="btn btn-secondary rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i> New Featured Article
                    </button>
                </a>
            </div>
        </header>

        <hr>

        <div class="latest-articles">
            <h5 class="fw-bold">Latest Published Articles</h5>
            @forelse ($articles as $article)
                <div class="bg-f2 p-2 d-flex align-items-center justify-content-between mb-1 border">
                    <div>
                        <a href={{ route('admin.articles.edit', $article->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $article->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $article->title }}</p>
                            <small>{{ $article->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded rounded-0 py-0 px-2 fs-tiny fw-bold"
                            type="button"
                            onclick="event.preventDefault(); document.getElementById('delete-article').submit();">
                            DELETE
                        </button>
                    </div>
                </div>
                <form action="{{ route('admin.articles.delete', $article->id) }}" class="d-none" method="POST"
                    id="delete-article">
                    @csrf
                    @method('DELETE')
                </form>
            @empty
                <div class="p-2 bg-f2">
                    No articles
                </div>
            @endforelse
            <div>
                {{ $articles->links() }}
            </div>
        </div>

        <div class="featured-articles mt-4">
            <h5 class="fw-bold">Featured Articles</h5>
            @forelse ($feat_articles as $featured)
                <div class="bg-f2 p-2 d-flex align-items-center justify-content-between mb-1 border">
                    <div>
                        <a href={{ route('admin.feat_articles.edit', $featured->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $featured->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $featured->title }}</p>
                            <small>{{ $featured->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded rounded-0 py-0 px-2 fs-tiny fw-bold"
                            type="button"
                            onclick="event.preventDefault(); document.getElementById('delete-feat').submit();">
                            DELETE
                        </button>
                    </div>
                </div>
                <form action="{{ route('admin.feat_articles.delete', $featured->id) }}" class="d-none" method="POST"
                    id="delete-feat">
                    @csrf
                    @method('DELETE')
                </form>
            @empty
                <div class="p-2 bg-f2">
                    Feature some articles
                </div>
            @endforelse
        </div>
    </div>
</x-layouts.admin>
