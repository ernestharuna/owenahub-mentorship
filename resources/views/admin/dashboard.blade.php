<x-layouts.admin>
    <div class="container">
        <div class="my-4">
            <h4 class="text-secondary fs-2 fw-bold">
                Dashboard
            </h4>
            <p>
                Welcome {{ Auth::user()->first_name }}
            </p>
            <div class="my-3">
            </div>
        </div>

        <section class="mb-3">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-secondary m-0 fs-6">
                                Article Repository
                            </h5>
                            <p class="card-text mb-1">
                                <b class="fs-4">{{ $article_count }} article(s)</b> published
                            </p>
                            <a href="#" class="btn btn-theme rounded-1 fw-semibold px-4">
                                Go to articles
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-secondary m-0 fs-6">
                                Manage Slices
                            </h5>
                            <p class="card-text mb-1">
                                <b class="fs-4">{{ $slice_count }} slice(s)</b> published
                            </p>
                            <a href="#" class="btn btn-theme rounded-1 fw-semibold px-4">
                                Go to slices
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-secondary m-0 fs-6">
                                OweaHub Teams
                            </h5>
                            <p class="card-text mb-1">
                                <b class="fs-4">5 teams</b> active
                            </p>
                            <a href="#" class="btn btn-theme rounded-1 fw-semibold px-4">
                                See Teams
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="mb-3">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card shadow-sm bg-theme">
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <div class="px-4">
                                    <h5 class="card-title fs-6 text-red m-0">Verified Users</h5>
                                    <p class="card-text m-0 text-white">
                                        <span class="fs-1 fw-bold">{{ $verified_users }}</span>users
                                    </p>
                                </div>
                                <div class="px-4 border-start">
                                    <h5 class="card-title fs-6 text-red m-0">Unverified Users</h5>
                                    <p class="card-text m-0 text-white">
                                        <span class="fs-1 fw-bold">{{ $unverified_users }}</span>users
                                    </p>
                                </div>
                                <div class="px-4 border-start">
                                    <h5 class="card-title fs-6 text-red m-0">All Users</h5>
                                    <p class="card-text m-0 text-white">
                                        <span class="fs-1 fw-bold">{{ $all_users }}</span>users
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card shadow-sm bg-dark">
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <div class="px-4">
                                    <h5 class="card-title fs-6 text-red m-0">Verified Mentors</h5>
                                    <p class="card-text m-0 text-white">
                                        <span class="fs-1 fw-bold">{{ $verified_mentors }}</span>mentors
                                    </p>
                                </div>
                                <div class="px-4 border-start">
                                    <h5 class="card-title fs-6 text-red m-0">Unverified Mentors</h5>
                                    <p class="card-text m-0 text-white">
                                        <span class="fs-1 fw-bold">{{ $unverified_mentors }}</span>mentors
                                    </p>
                                </div>
                                <div class="px-4 border-start">
                                    <h5 class="card-title fs-6 text-red m-0">All Mentors</h5>
                                    <p class="card-text m-0 text-white">
                                        <span class="fs-1 fw-bold">{{ $all_mentors }}</span>metnors
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="latest-articles bg-f2 shadow-sm border p-3 rounded ">
            <h5 class="fw-bold">Latest Published Articles</h5>
            <div class="my-2">
                <a href={{ route('admin.articles.create') }}>
                    <button class="btn btn-dark rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>
            @forelse ($articles as $article)
                <div class="bg-white rounded p-2 d-flex align-items-center justify-content-between mb-1 border">
                    <div>
                        <a href={{ route('admin.articles.edit', $article->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $article->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $article->title }}</p>
                            <small>{{ $article->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded rounded-0 py-0 px-2 fs-tiny fw-bold"
                            type="button"
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
        </div>

        <div class="featured-articles mt-4 bg-f2 shadow-sm border p-3 rounded">
            <h5 class="fw-bold">Featured Articles</h5>
            <div class="my-2">
                <a href={{ route('admin.feat_articles.create') }}>
                    <button class="btn btn-secondary rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>
            @forelse ($feat_articles as $featured)
                <div
                    class="bg-light p-2 d-flex align-items-center justify-content-between mb-1 border rounded-2 shadow-sm">
                    <div>
                        <a href={{ route('admin.feat_articles.edit', $featured->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $featured->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $featured->title }}</p>
                            <small>{{ $featured->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded rounded-0 py-0 px-2 fs-tiny fw-bold"
                            type="button"
                            onclick="event.preventDefault(); document.getElementById('delete-feat').submit();">
                            DELETE
                        </button>
                    </div>
                </div>
                <form action="{{ route('admin.feat_articles.delete', $featured->id) }}" class="d-none" method="POST"
                    id="delete-feat">
                    @csrf
                    @method('DELETE')
                </form>
            @empty
                <div class="p-2 bg-f2">
                    Feature some articles
                </div>
            @endforelse
        </div>

        <div class="featured-articles my-4 bg-f2 shadow-sm border p-3 rounded">
            <h5 class="fw-bold">Available Slices</h5>
            <div class="my-2">
                <a href={{ route('admin.slice.create') }}>
                    <button class="btn btn-dark rounded rounded-0 px-2 py-1">
                        <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>
            @forelse ($slices as $slice)
                <div class="bg-white p-2 d-flex align-items-center justify-content-between mb-1 border">
                    <div>
                        <a href={{ route('admin.slice.show', $slice->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $slice->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $slice->title }}</p>
                            <small>{{ $slice->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded rounded-0 py-0 px-2 fs-tiny fw-bold"
                            type="button"
                            onclick="event.preventDefault(); document.getElementById('delete-slice').submit();">
                            DELETE
                        </button>
                    </div>
                </div>
                <form action="{{ route('admin.slice.delete', $slice->id) }}" class="d-none" method="POST"
                    id="delete-slice">
                    @csrf
                    @method('DELETE')
                </form>
            @empty
                <div class="p-2 bg-f2">
                    No Courses Available
                </div>
            @endforelse
        </div>
    </div>
</x-layouts.admin>
