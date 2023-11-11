<div>
    @forelse ($articles as $article)
        @php
            $data = $article->category;
            $category = strtolower(str_replace(' ', '-', $data));
        @endphp

        <div class="card rounded rounded-0 m-2 border-bottom border-0" style="width: auto;">
            <div class="card-body">
                <div class="bg-f2 p-1 fs-tiny font-monospace text-uppercase fw-bold text-secondary bg-gradient">
                    Posted on {{ $article->created_at->format('j M Y') }} | <span
                        class="text-theme">{{ $article->category }}</span>
                </div>
                <h2 class="card-title fw-semibold my-2 fs-5">{{ $article->title }}</h2>
                <p class="card-text">{{ $article->description }}</p>

                <div class="text-start">
                    <a href="{{ route('guest.articles.show', ['article' => $article->id, 'slug' => $category]) }}"
                        class="btn btn-theme text-dark rounded rounded-0 fw-light fs-tiny shadow">
                        <i class="bi bi-chevron-double-right"></i> READ MORE
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="p-2 bg-f2">No articles</div>
    @endforelse
</div>
