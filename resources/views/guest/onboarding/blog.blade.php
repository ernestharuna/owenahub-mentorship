<x-layouts.onboard>
    <section class="bg-theme-2" id="onboard">
        <div id="b-items">
            <div class="p-3 mx-3 animated-2 fadeIn rounded-4">
                <div class="card-body">
                    <div class="text-start">
                        <h1 class="card-title display-4 mb-4 fw-bold">
                            <i class="bi bi-journal-bookmark text-red"></i>
                            Blog Access
                        </h1>
                        <div class="card-text mb-3">
                            <p class="fs-5">
                                OwenaHub features an insightful <span class="fw-semibold text-purple">repository of
                                    articles</span> that
                                <br class="d-none d-md-block">
                                covers interesting topics within the field.
                            </p>
                        </div>

                        <a href="{{ route('guest.onboarding.signup') }}"
                            class="btn btn-light rounded-5 fw-bold mt-3 py-2 px-5 text-end shadow">
                            Continue
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 text-white">
                <i class="bi bi-circle-fill"></i>
                <i class="bi bi-circle-fill mx-2"></i>
                <i class="bi bi-circle-fill text-dark"></i>
            </div>
        </div>
    </section>
</x-layouts.onboard>
