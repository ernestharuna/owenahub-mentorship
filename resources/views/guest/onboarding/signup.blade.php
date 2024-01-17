<x-layouts.onboard>
    <section class="bg-theme" id="onboard">
        <div id="b-items">
            <div class="p-3 mx-3 animated fadeIn">
                <h1 class="text-center" style="font-size: 3rem">
                    <span class="text-white font-monospace fs-2">
                        welcome to <br>
                    </span>
                    <span class="fw-bold animated-text-2">
                        OwenaHub
                    </span>
                </h1>
            </div>
            <div class="animated-2 fadeIn">
                <a href="{{ route('user.register') }}" class="btn btn-light rounded-1 fw-bold w-100 mt-3">
                    Create Account
                </a>
            </div>
        </div>
    </section>
</x-layouts.onboard>
