<x-layouts.user>
    <section class="container my-4">
        <p class="fw-bold text-secondary fs-2">
            Hey, {{ Auth::user()->first_name }} 😍
        </p>

        <div>
            <p class="text-secondary mb-1">
                Upcoming Sessions
            </p>
            <div class="border rounded py-1 px-2 me-3 d-inline-block position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-theme">
                    <i class="bi bi-clock"></i>
                    <span class="visually-hidden">unread messages</span>
                </span>
                <div>
                    <p class="fs-tiny m-0">
                        Session starts in 2 days
                    </p>
                    <p class="fw-semibold m-0">
                        Session with Ahmad
                    </p>
                </div>
            </div>
            <div class="border rounded py-1 px-2 d-inline-block position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-theme">
                    <i class="bi bi-clock"></i>
                    <span class="visually-hidden">unread messages</span>
                </span>
                <div>
                    <p class="fs-tiny m-0">
                        Session starts in 2 days
                    </p>
                    <p class="fw-semibold m-0">
                        Session with Ahmad
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-f2">
        <div class="container py-3 w-64">
            <h3>Your Slices</h3>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                            body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                            body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container my-4">
            <h3>Recommended for you</h3>
            <livewire:recommended-articles />
        </div>
    </section>
</x-layouts.user>
