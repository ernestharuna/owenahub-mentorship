<x-layouts.onboard>
    <section class="bg-theme-2" id="onboard">
        <div id="b-items">
            <div class="p-3 mx-3 animated fadeIn">
                <h1 class="text-center m-0 display-1">
                    <span class="fw-bold animated-text-2">
                        OwenaHub
                    </span>
                </h1>
                <p class="m-0 text-end" style="position: relative; top: -8px;">
                    The Learner's Hub <i class="bi bi-stars text-success"></i>
                </p>
            </div>
        </div>
    </section>

    <div class="animated-2 fadeIn text-center fixed-bottom mb-5">
        <a href="{{ route('mentor.register') }}" class="btn btn-light rounded-5 fw-bold px-5 mt-3">
            Create Account
        </a>
    </div>
</x-layouts.onboard>
