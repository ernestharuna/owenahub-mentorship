<div>
    @if ($feat_article)
        @php
            $data = $feat_article->title;
            $title = strtolower(str_replace(' ', '-', $data));
        @endphp
        <div class="bg-theme p-3 shadow my-3 animated-2 fadeIn">
            <p class="fs-tiny text-white fw-bold font-monospace text-uppercase">
                Posted on {{ $feat_article->created_at->format('j M Y') }}
            </p>
            <h4 class="fs-3 fw-bold mb-2">
                {{ $feat_article->title }}
            </h4>
            <p class="font-monospace">
                {{ $feat_article->description }}
            </p>
            <div>
                <a class="btn btn-light rounded rounded-0" role="button"
                    href="{{ route('guest.feat_articles.show', ['article' => $feat_article->id, 'title' => $title]) }}">
                    <span class="text-dark fw-bold text-uppercase fs-tiny">
                        Read More 🔓
                    </span>
                </a>
            </div>
        </div>
    @else
        <div class="bg-f2 border p-1 text-secondary shadow-sm">
            Some new articles are rolling up ... 🚀 <br>
            Email for adverts and inquiries hello@owenahub.com
        </div>
    @endif
</div>
