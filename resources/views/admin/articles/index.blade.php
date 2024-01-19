<x-layouts.admin>
    <div class="container">
        <div class="latest-articles my-5">
            <p class="fs-6 text-secondary">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Articles</li>
                </ol>
            </nav>
            </p>
            <h1 class="fw-semibold">Article Repository</h1>
            <div class="mt-2 mb-4">
                <a href={{ route('admin.articles.create') }}>
                    <button class="btn btn-dark rounded-2 px-2 py-1">
                        New Article <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>
            @forelse ($articles as $article)
                <div class="bg-f2 p-2 d-flex align-items-center justify-content-between mb-2 border rounded shadow-sm">
                    <div>
                        <a href={{ route('admin.articles.edit', $article->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $article->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $article->title }}</p>
                            <small>{{ $article->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded-1 py-0 px-2 fs-tiny fw-bold" type="button"
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
    </div>
</x-layouts.admin>
