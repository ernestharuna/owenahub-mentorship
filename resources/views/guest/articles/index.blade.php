<x-guest.article>
    <div class="mb-5 text-start text-lg-center mt-5">
        <h1 class="fw-bold">
            Our Updates
        </h1>
        <p class="fs-5">
            Get the best growth tips for your career on OwenaHub
        </p>

        <livewire:subscribe-button />
    </div>
    <div class="featured-articles mb-5 w-54">
        <livewire:featured-article />
        <livewire:featured-article2 />
    </div>

    <div class="mx-auto w-54 py-2">
        @forelse ($articles as $article)
            @php
                $data = $article->title;
                $title = strtolower(str_replace(' ', '-', $data));
            @endphp

            <div class="row gap-md-2">
                <div class="col-md-3 col-12">
                    <p class="mb-1 text-md-end">
                        <span class="text-body-tertiary text-capitalize fw-semibold">
                            {{ $article->created_at->format('F j, Y') }}
                        </span> <br>
                        <span class="text-red fs-tiny fw-semibold d-none d-md-inline-block">
                            {{ $article->category }}
                        </span>
                    </p>
                </div>

                <div class="col-md-8 col-12 mb-5">
                    <a href="{{ route('guest.articles.show', ['article' => $article->id, 'title' => $title]) }}"
                        class='text-decoration-none text-dark'>
                        <h5 class="fw-semibold fs-5">{{ $article->title }}</h5>

                        <p class="mb-3">
                            {{ $article->description }}
                            {{ strlen($article->description) > 50 ? substr($article->description, 0, 50) . '...' : $article->description }}
                        </p>

                        <a href="{{ route('guest.articles.show', ['article' => $article->id, 'title' => $title]) }}"
                            class="text-theme text-decoration-none fw-semibold">
                            Read more <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </a>
                </div>
            </div>
        @empty
            <div class="p-2">No articles</div>
        @endforelse
    </div>

    <div class="my-4">
        {{ $articles->links() }}
    </div>
    <div class="bg-theme-light rounded-4">
        <section class="container py-5">
            <div>
                <div class="text-center">
                    <h2 class="fs-1 fw-bold text-dark m-0">Join Our Community</h2>
                    <p class="text-dark">
                        We're available whereever you are 🙂
                    </p>
                </div>
                <div class="text-center mt-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn rounded-5 btn-theme px-4 shadow text-dark fw-bold"
                        data-bs-toggle="modal" data-bs-target="#joinCommunity">
                        Check Us Out! 🤙🏽
                    </button>
                    <!-- Modal: exists in guest navbar component -->
                </div>
            </div>
        </section>
    </div>
</x-guest.article>
