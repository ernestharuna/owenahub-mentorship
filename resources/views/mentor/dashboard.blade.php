<x-layouts.mentor>
    <section class="mt-4">
        <p class="text-dark fw-bold mb-2">
        <section class="mb-4">
            <p class="m-0">Welcome Mentor 😎,</p>
            <h2 class="fw-bold fs-2">
                {{ ucfirst(strtolower(Auth::user()->first_name)) }}
                {{ ucfirst(strtolower(Auth::user()->last_name)) }}
            </h2>
        </section>
        </p>
    </section>

    <livewire:mentor.complete-profile />

    <section class="my-4">
        <div class="bg-white shadow-sm border rounded-4 p-3">
            <h3 class="fw-bold fs-4 text-dark">Recommended for you</h3>
            <hr class="mb-4">
            <livewire:recommended-articles />
        </div>
    </section>

    <div class="bg-theme-light shadow-sm rounded-4 mt-2 p-3">
        <div class="row mx-auto gap-4 justify-content-between">
            <section class="col-12 col-md-7 px-0">
                <div class="p-3 bg-white shadow-sm border rounded-4">
                    <h3 class="fw-bold fs-4 text-theme">Upcoming sessions</h3>
                    <hr class="mb-4">
                    <div>
                        <p class="text-secondary">
                            Sessions are unavailable at the moment.
                        </p>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-theme rounded-4 px-4 py-2 shadow-sm fw-semibold border-0 mt-1" disabled>
                            <i class="bi bi-plus-circle me-1"></i> Create a session
                        </button>
                    </div>
                </div>
            </section>

            <section class="col-12 col-md-4 rounded-4 bg-theme px-3 py-3 shadow-sm">
                <div class="">
                    <h3 class="fw-bold fs-4 text-dark">Recent sessions</h3>
                    <div class="mt-3">
                        <p class="text-seconadary p-2 bg-white rounded-3 shadow-sm">
                            No sessions yet
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <hr class="opacity-0 my-5">
</x-layouts.mentor>
