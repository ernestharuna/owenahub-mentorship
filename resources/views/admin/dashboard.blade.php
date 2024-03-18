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

        <section class="mb-5">
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
                            <a href="{{ route('admin.articles.index') }}"
                                class="btn btn-theme text-white rounded-1 px-4">
                                View all
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
                            <a href="{{ route('admin.slice.index') }}" class="btn btn-theme text-white rounded-1 px-4">
                                View all
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-secondary m-0 fs-6">
                                Session bookings
                            </h5>
                            <p class="card-text mb-1">
                                <b class="fs-4">{{ $bookings }}</b> bookings
                            </p>
                            <a href="#" class="btn btn-theme rounded-1 px-4">
                                See Teams
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        <div class="featured-articles my-5 bg-f2 shadow-sm border p-3 rounded">
            <h5 class="fw-bold">Featured Articles</h5>
            <div class="my-2">
                <a href={{ route('admin.feat_articles.create') }}>
                    <button class="btn btn-theme rounded-2 px-4 py-1 fw-semibold">
                        Create new <i class="bi bi-plus-square-fill"></i>
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
                        <button class="btn btn-danger text-white rounded-2 py-0 px-2 fs-tiny fw-bold" type="button"
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
    </div>
</x-layouts.admin>
