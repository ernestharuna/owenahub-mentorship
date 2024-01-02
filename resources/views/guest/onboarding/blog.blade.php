<x-layouts.onboard>
    <section class="bg-theme" id="onboard">
        <div id="b-items">
            <div class="card shadow p-3 mx-3 animated-2 fadeIn">
                <div class="card-body">
                    <div class="text-start">
                        <div>
                            <i class="bi bi-journal-bookmark text-theme fs-1"></i>
                        </div>
                        <h1 class="card-title fs-3 mb-4 fw-bold">Access To Our Blog</h1>
                        <div class="card-text mb-3">
                            OwenaHub features an insightful repository of articles that <br>
                            cover interesting topics within the field.
                        </div>

                        <a href="{{ route('user.register') }}" class="btn btn-theme rounded-1 fw-bold w-100 mt-3">
                            SIGN UP
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
