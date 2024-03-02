<x-layouts.onboard>
    <section class="bg-theme-2" id="onboard">
        <div>
            <div class="p-3 mx-3 animated-2 fadeIn border-0">
                <div class="card-body">
                    <div class="text-start">
                        {{-- <divs --}}
                        <h1 class="card-title display-3 mb-4 fw-bold">
                            Flexible schedule
                        </h1>
                        <div class="card-text mb-3">
                            Set your own availability and choose how much time you want to dedicate to mentoring.
                        </div>
                        <div class="">
                            <a href="{{ route('guest.onboarding.earn') }}"
                                class="btn btn-light shadow rounded-5 fw-bold mt-3 px-5 py-2 mx-auto d-inline-block">
                                Continue
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 text-white">
                <i class="bi bi-circle-fill text-dark"></i>
                <i class="bi bi-circle-fill text-red mx-2"></i>
                <i class="bi bi-circle-fill text-dark"></i>
            </div>
        </div>
    </section>
</x-layouts.onboard>
