<x-layouts.admin>
    <div class="container">
        <div class="my-4">
            <h4 class="text-secondary fs-2 fw-bold">
                Dashboard
            </h4>
            <p>
                Welcome {{ Auth::user()->first_name }}
            </p>
            <div class="my-3">
            </div>
        </div>

        <div class="latest-articles bg-f2 shadow border p-3 rounded ">
            <h5 class="fw-bold">Latest Published Articles</h5>
            <div class="my-2">
                <a href={{ route('admin.articles.create') }}>
                    <button class="btn btn-dark rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>
            @forelse ($articles as $article)
                <div class="bg-white rounded p-2 d-flex align-items-center justify-content-between mb-1 border">
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
        </div>

        <div class="featured-articles mt-4 bg-f2 shadow border p-3 rounded">
            <h5 class="fw-bold">Featured Articles</h5>
            <div class="my-2">
                <a href={{ route('admin.feat_articles.create') }}>
                    <button class="btn btn-secondary rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>
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

        <div class="featured-articles mt-4 bg-f2 shadow border p-3 rounded">
            <h5 class="fw-bold">Available Slices</h5>
            <div class="my-2">
                <a href={{ route('admin.slice.create') }}>
                    <button class="btn btn-dark rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>
            @forelse ($slices as $slice)
                <div class="bg-white p-2 d-flex align-items-center justify-content-between mb-1 border">
                    <div>
                        <a href={{ route('admin.slice.show', $slice->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $slice->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $slice->title }}</p>
                            <small>{{ $slice->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded rounded-0 py-0 px-2 fs-tiny fw-bold"
                            type="button"
                            onclick="event.preventDefault(); document.getElementById('delete-slice').submit();">
                            DELETE
                        </button>
                    </div>
                </div>
                <form action="{{ route('admin.slice.delete', $slice->id) }}" class="d-none" method="POST"
                    id="delete-slice">
                    @csrf
                    @method('DELETE')
                </form>
            @empty
                <div class="p-2 bg-f2">
                    No Courses Available
                </div>
            @endforelse
        </div>
    </div>
</x-layouts.admin>
