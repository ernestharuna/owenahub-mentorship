<x-guest.article>
    <div class="mb-3">
        <h1>
            <span class="text-theme">OwenaHub</span> <span class="fw-light">blog</span>
        </h1>
        <hr>
        <h3>Featured articles</h3>
    </div>
    <div class="featured-articles mb-4">
        <livewire:featured-article />
        <livewire:featured-article2 />
    </div>

    <div class='mb-4'>
        <h3 class=''>Latest Articles</h3>
        <a href="/" class='text-decoration-none btn btn-dark px-3 py-1 rounded-5 text-white mt-2 d-inline-block'>
            ← Back Home</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-3">
        @forelse ($articles as $article)
            @php
                $data = $article->title;
                $title = strtolower(str_replace(' ', '-', $data));
            @endphp
            <div class="col">
                <div class="card h-100 border border-bg-body-tertiary shadow-sm">
                    <div class="card-body pt-2">
                        <a href="{{ route('guest.articles.show', ['article' => $article->id, 'title' => $title]) }}"
                            class='text-decoration-none text-dark'>
                            <p class="mb-1 text-red text-uppercase rounded-1 fs-tiny">
                                {{ $article->category }} <br>
                                <small class="text-body-secondary text-capitalize fs-tiny">
                                    updated {{ $article->created_at->format('j M Y, g:i A') }}
                                </small>
                            </p>

                            <h5 class="card-title fw-semibold fs-5">{{ $article->title }}</h5>

                            <p class="card-text lh-sm">
                                {{ $article->description }}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="p-2 bg-f2">No articles</div>
        @endforelse
    </div>
    <div class="mt-4">
        {{ $articles->links() }}
    </div>
    <div class="bg-premium rounded-4">
        <section class="container py-5">
            <div>
                <div class="text-center">
                    <h2 class="fs-1 fw-bold text-white">Join Our Community</h2>
                    <p class=" my-4 fs-6 text-red">
                        🎊 Our community awaits your grand entrance! 🎊<br>
                        <span class="fw-bold">Be part of inspiring platform</span>
                    </p>
                </div>
                <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn rounded-1 btn-light shadow text-dark fw-bold"
                        data-bs-toggle="modal" data-bs-target="#joinCommunity">
                        Check Us Out! 🤙🏽
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="joinCommunity" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border border-0">
                                    <p class="modal-title fs-4 text-dark fw-bold" id="exampleModalLabel">Join Our
                                        Community</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="social-links fw-semibold fs-5">
                                        <a href="https://instagram.com/owenahub?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"
                                            class="py-4 mt-3 rounded shadow text-white text-decoration-none d-block instagram">
                                            Follow Us On Instagram
                                        </a>
                                        <a href="https://x.com/owenahub?t=i4-Iz4K9RaKJ4vWP1QuLlA&s=08"
                                            class="py-4 my-3 rounded shadow text-white text-decoration-none d-block twitter">
                                            Follow Us On X
                                        </a>
                                        <hr class="bg-dak text-dark" />
                                        <a href="https://www.facebook.com/groups/896520008575738/?ref=share"
                                            class="py-4 rounded shadow text-white text-decoration-none d-block facebook">
                                            Facebook Community
                                        </a>
                                        <a href="https://linkedin.com/in/ernestharuna"
                                            class="py-4 rounded shadow text-white text-decoration-none d-block my-3 linkedin">
                                            LinkedIn Community
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest.article>
