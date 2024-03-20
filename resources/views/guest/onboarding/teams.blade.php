<x-layouts.onboard>
    <section class="bg-theme-2" id="onboard">
        <div id="b-items">
            <div class="p-3 mx-3 animated-2 fadeIn rounded-4">
                <div class="card-body">
                    <div class="text-start">
                        <h1 class="card-title display-4 mb-4 fw-bold">
                            <i class="bi bi-chat text-red"></i>
                            Meet Experts
                        </h1>
                        <div class="card-text mb-3">
                            <p>
                                <b>Talk with professionals</b> that inspire you and give you career clarity.
                            </p>
                        </div>
                        <a href="{{ route('guest.onboarding.blog') }}"
                            class="btn btn-light rounded-5 fw-bold mt-3 py-2 px-5 text-end shadow">
                            Continue
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 text-white">
                <i class="bi bi-circle-fill"></i>
                <i class="bi bi-circle-fill mx-2 text-dark"></i>
                <i class="bi bi-circle-fill"></i>
            </div>
        </div>
    </section>
</x-layouts.onboard>
