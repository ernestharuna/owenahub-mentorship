<div>
    @if ($feat_article)
        @php
            $data = $feat_article->title;
            $title = strtolower(str_replace(' ', '-', $data));
        @endphp
        <div class="bg-light bg-gradient p-3 shadow-sm border animated fadeIn rounded-2">
            <p class="fs-tiny text-theme fw-bold font-monospace text-uppercase m-0">
                Posted on {{ $feat_article->created_at->format('j M Y') }}
            </p>
            <h4 class="fs-3 fw-bold mb-2">
                {{ $feat_article->title }}
            </h4>
            <p class="font-monospace">
                {{ $feat_article->description }}
            </p>
            <div>
                <a class="btn btn-theme rounded-2" role="button"
                    href="{{ route('guest.feat_articles.show', ['article' => $feat_article->id, 'title' => $title]) }}">
                    <span class="text-dark fw-bold text-uppercase fs-tiny">
                        Read More 🔓
                    </span>
                </a>
            </div>
        </div>
    @endif
</div>
