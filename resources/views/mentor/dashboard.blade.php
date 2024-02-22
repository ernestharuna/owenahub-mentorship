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

    <section>

        <section class="mt-4">
            <div class="p-3 bg-white shadow-sm border rounded">
                <h3 class="fw-bold fs-4 text-secondary">Upcoming sessions</h3>
                <hr class="mb-4">
                <div>
                    <p class="text-secondary">
                        Sessions are unavailable at the moment.
                    </p>
                </div>
                <div class="mt-2">
                    <button class="btn btn-theme rounded-4 px-3 shadow-sm fw-semibold border-0 mt-1" disabled>
                        <i class="bi bi-plus-circle me-1"></i> Create a session
                    </button>
                </div>
            </div>
        </section>

        <section class="mt-4 mb-5">
            <div class="bg-white shadow-sm border rounded p-3">
                <h3 class="fw-bold fs-4 text-secondary">Recommended for you</h3>
                <hr class="mb-4">
                <livewire:recommended-articles />
            </div>
        </section>
</x-layouts.mentor>
