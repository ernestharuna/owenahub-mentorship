<x-mentor.profile-layout>
    <div class="mt-5">
        <a href="{{ route('mentor.profile.index') }}"
            class="btn btn-sm btn-theme rounded-4 px-3 fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left me-2"></i> Previous
        </a>
    </div>
    <div class="mt-3 bg-white rounded-4 shadow-sm p-4">
        <section>
            <header>
                <h2 class="fs-5 m-0 fw-semibold">
                    Reviews
                </h2>
                <p>
                    Your session reviews so far 🎉
                </p>

                <livewire:mentor.profile.session-reviews />
            </header>
        </section>
    </div>
</x-mentor.profile-layout>
