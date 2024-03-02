<x-layouts.onboard>
    <section class="bg-theme" id="onboard">
        <div id="b-items">
            <div class="p-3 mx-3 animated fadeIn">
                <h1 class="text-center m-0" style="font-size: 3rem">
                    <span class="fw-bold animated-text-2">
                        OwenaHub
                    </span>
                </h1>
                <p class="m-0 text-end" style="position: relative; top: -8px;">
                    The Learner's Hub <i class="bi bi-stars text-success"></i>
                </p>
            </div>
            <div class="animated-2 fadeIn">
                <a href="{{ route('user.register') }}" class="btn btn-light rounded-5 fw-bold w-100 mt-3">
                    Create Account
                </a>
            </div>
        </div>
    </section>
</x-layouts.onboard>
