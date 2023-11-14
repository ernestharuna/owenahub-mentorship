<div>
    @forelse ($articles as $article)
        @php
            $data = $article->category;
            $category = strtolower(str_replace(' ', '-', $data));
        @endphp

        <div class="card rounded rounded-0 mb-2 border p-0" style="width: auto;">
            <div class="card-body px-2 py-2">
                <p class="text-secondary fs-tiny m-0">
                    {{ $article->created_at->format('j M Y') }} &middot; {{ $article->category }} <br>
                </p>
                <h2 class="card-title fw-semibold mb-0 fs-5">
                    {{ $article->title }}
                </h2>
                <p class="card-text text-secondary fs-tiny">
                    <span class="text-dark">
                        {{ \Illuminate\Support\Str::limit($article->description, 50) }}...
                        <a href="{{ route('guest.articles.show', ['article' => $article->id, 'slug' => $category]) }}"
                            class="fw-semibold fst-italic">
                            read more
                        </a>
                    </span>
                </p>
            </div>
        </div>
    @empty
        <div class="p-2 bg-f2">No articles</div>
    @endforelse
</div>
