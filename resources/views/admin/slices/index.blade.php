<x-layouts.admin>
    <div class="containers">
        <div class="latest-articles bg-f2 shadow-sm border p-3 rounded ">
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
    </div>
</x-layouts.admin>
