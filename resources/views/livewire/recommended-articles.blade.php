<div class="animated-2 fadeIn">
    @forelse ($articles as $article)
        @php
            $data = $article->title;
            $title = strtolower(str_replace(' ', '-', $data));
        @endphp

        <a href="{{ route('guest.articles.show', ['article' => $article->id, 'title' => $title]) }}"
            class="card text-decoration-none btn shadow-sm border-start border-bottom bg-body-tertiary text-start border-0
            rounded-1 mb-2 p-0 d-block"
            style="width: auto;">
            <div class="card-body px-2 py-2 ">
                <p class="fw-bold text-secondary fs-tiny m-0">
                    {{ $article->created_at->format('j M Y') }} &middot;
                    <span class="text-red">
                        {{ $article->category }} <br>
                    </span>
                </p>
                <h2 class="card-title fw-semibold mb-0 fs-5">
                    {{ $article->title }}
                </h2>
                <p class="card-text text-secondary fs-tiny">
                    <span class="text-dark">
                        {{ \Illuminate\Support\Str::limit($article->description, 50) }}
                    </span>
                </p>
            </div>
        </a>
    @empty
        <div class="p-2 bg-f2">No articles</div>
    @endforelse
</div>
