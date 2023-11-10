<div>
    @if ($feat_article)
        <div class="bg-light bg-gradient p-3 shadow animated fadeIn">
            <p class="fs-tiny text-theme fw-bold font-monospace text-uppercase">
                Posted on {{ $feat_article->created_at->format('j M Y') }}
            </p>
            <h4 class="fs-3 fw-bold mb-2">
                {{ $feat_article->title }}
            </h4>
            <p class="font-monospace">
                {{ $feat_article->description }}
            </p>
            <div>
                <a class="btn btn-theme rounded rounded-0" role="button"
                    href="{{ route('guest.feat_articles.show', $feat_article->id) }}">
                    <span class="text-dark fw-bold text-uppercase fs-tiny">
                        Read More 🔓
                    </span>
                </a>
            </div>
        </div>
    @endif
</div>
