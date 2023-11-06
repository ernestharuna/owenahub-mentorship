<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<x-layouts.app>
    <x-slot name="title">
        {{ $title ?? 'Tech Career Insights - OwenaHub' }}
    </x-slot>

    <section class='container my-5'>
        <div class='row mb-4'>
            <div class='col-md-8 mb-4 px-lg-5'>
                {{ $slot }}
            </div>

            <aside class='col-md-4'>
                <div>
                    <h4 class='fw-bold'>Recommended Articles 😍</h4>
                    <livewire:recommended-articles />

                    @if (Route::is('guest.articles.show'))
                        <a href="/articles" class='text-decoration-none d-block mt-3'>
                            <button class="btn btn-dark w-100 text-uppercase fs-6 fw-light">
                                Back to articles
                            </button>
                        </a>
                    @endif
                </div>

                <hr />

                <div>
                    <h4 class='fw-bold'>Top Contributors</h4>

                    <p class="text-secondary">
                        There are no mentors available at the moment
                    </p>
                </div>

                <hr />

                <div>
                    <h4 class='fw-bold'>Our Categories</h4>
                    <div>
                        <p>Web Development <i class="bi bi-arrow-right-short"></i></p>
                        <p>Project Management <i class="bi bi-arrow-right-short"></i></p>
                        <p>Data Science <i class="bi bi-arrow-right-short"></i></p>
                        <p>Career Advice <i class="bi bi-arrow-right-short"></i></p>
                        <p>Software Engineering <i class="bi bi-arrow-right-short"></i></p>
                    </div>
                </div>

            </aside>
        </div>
    </section>

</x-layouts.app>
