<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<x-layouts.app>
    <x-slot name="title">
        {{ $title ?? 'Blog: OwenaHub' }}
    </x-slot>

    <section class='container my-4'>
        <div class='row mb-4'>
            <div class='col-12 mb-4'>
                {{ $slot }}
            </div>
            {{-- <div class='col-md-8 mb-4 px-lg-5'>
                {{ $slot }}
            </div> --}}

            {{-- <aside class='col-md-4'>
                <div>
                    <h4 class='fw-bold'>Recommended Articles 😍</h4>
                    <livewire:recommended-articles />

                    @if (Route::is('guest.articles.show'))
                        <a href="/articles" class='text-decoration-none d-block mt-3'>
                            <button class="btn btn-theme text-dark fs-6 fw-semibold px-4 rounded-5">
                                ← Back to articles
                            </button>
                        </a>
                    @endif
                </div>

                <hr />

                <div>
                    <h4 class='fw-bold'>Top Contributors</h4>

                    <livewire:top-contributors />
                </div>

                <hr />

                <div>
                    <h4 class='fw-bold'>What We Gist About</h4>
                    <div class="">
                        <div class="text-secondary mb-2">
                            <p class="m-0 text-dark fw-semibold">Web Development <i class="bi bi-arrow-right-short"></i>
                            </p>
                            <small class="fs-tiny">Getting tips on how to traverse the wide trees of Web
                                Engineering
                            </small>
                        </div>

                        <div class="text-secondary mb-2">
                            <p class="m-0 text-dark fw-semibold">Career Development <i
                                    class="bi bi-arrow-right-short"></i></p>
                            <small class="fs-tiny">
                                Get useful insight on taking your career to the next level
                            </small>
                        </div>

                        <div class="text-secondary mb-2">
                            <p class="m-0 text-dark fw-semibold">Success Stories <i class="bi bi-arrow-right-short"></i>
                            </p>
                            <small class="fs-tiny">
                                Be inspired by the success stories of our mentees who have decided to share thier
                                stories
                            </small>
                        </div>

                        <div class="text-secondary mb-2">
                            <p class="m-0 text-dark fw-semibold">Machine Learning & AI <i
                                    class="bi bi-arrow-right-short"></i></p>
                            <small class="fs-tiny">
                                Be updated with news concerning the new trendy world of Artificial Intelligence.
                            </small>
                        </div>

                        <div class="text-secondary mb-2">
                            <p class="m-0 text-dark fw-semibold">Coding Standards & Best Practices <i
                                    class="bi bi-arrow-right-short"></i></p>
                            <small class="fs-tiny">
                                Learn to do the 1's and 0's the right way — get updates on new standards and existing
                                processes
                            </small>
                        </div>

                        <div class="text-secondary mb-2">
                            <p class="m-0 text-dark fw-semibold">Events, Internships, Tech News and Updates <i
                                    class="bi bi-arrow-right-short"></i></p>
                            <small class="fs-tiny">
                                We provide a platform to participate our internships and other events that may be of
                                interest to you.
                            </small>
                        </div>
                    </div>
                </div>
            </aside> --}}
        </div>
    </section>

</x-layouts.app>
