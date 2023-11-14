<div>
    @forelse ($articles as $article)
        @php
            $data = $article->category;
            $category = strtolower(str_replace(' ', '-', $data));
        @endphp

        <div class="card rounded rounded-0 m-2 border-bottom border-0 p-0" style="width: auto;">
            <div class="card-body p-3">
                <h2 class="card-title fw-semibold mb-2 fs-5">
                    {{ $article->title }}
                </h2>
                <p class="card-text text-secondary fs-tiny">
                    {{ $article->created_at->format('j M Y') }} &middot; {{ $article->category }} —
                    <span class="text-dark"> {{ \Illuminate\Support\Str::limit($article->description, 30) }}</span>
                </p>

                <div class="text-start">
                    <a href="{{ route('guest.articles.show', ['article' => $article->id, 'slug' => $category]) }}"
                        class="btn btn-theme text-dark rounded rounded-0 fw-light fs-tiny shadow">
                        READ MORE <i class="bi bi-chevron-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="p-2 bg-f2">No articles</div>
    @endforelse
</div>
