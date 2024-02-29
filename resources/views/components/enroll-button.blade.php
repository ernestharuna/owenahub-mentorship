<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @if (Auth::check())
        <!-- Button trigger modal -->
        <button type="button" class="w-100 btn btn-theme fw-bold rounded-4 p-3 fs-5 text-dark shadow-sm"
            data-bs-toggle="modal" data-bs-target="#confirm_slice">
            Enroll Now!
        </button>

        <!-- Modal -->
        <div class="modal fade" id="confirm_slice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark fw-bold" id="staticBackdropLabel">
                            @if ($slice->price)
                                Enroll Now? <br>
                                <small class="fw-normal">You will be redirected to paystack</small>
                            @else
                                Enroll Now?
                            @endif
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($slice->price)
                            <a href="#" class="btn btn-dark w-100 mb-3 p-3 shadow-sm text-white fw-semibold"
                                onclick="event.preventDefault(); document.getElementById('start-payment').submit();">
                                Buy now
                            </a>
                            <form class="d-none" id="start-payment" method="GET"
                                action="{{ route('user.pay-init') }}">
                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                <input type="hidden" name="amount" value="{{ $slice->price }}">
                                <input type="hidden" name="product_id" value="{{ $slice->id }}">
                                <input type="hidden" name="product_type" value="slice">
                                @csrf
                            </form>
                        @else
                            <a href="#" class="btn btn-dark w-100 mb-3 p-3 shadow-sm text-white fw-semibold"
                                onclick="event.preventDefault(); document.getElementById('create-enrollment').submit();">
                                Yes
                            </a>
                            <form class="d-none" id="create-enrollment" method="POST"
                                action="{{ route('create.enrollment', ['slice_id' => $slice->id]) }}">
                                @csrf
                            </form>
                        @endif

                        <a class="btn btn-light border shadow-sm w-100 p-3 fw-semibold" data-bs-dismiss="modal"
                            aria-label="Close">
                            No
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <a href="{{ route('user.register') }}"
            class="w-100 btn btn-theme fw-bold rounded-5 p-3 fs-5 text-dark shadow-sm">
            Enroll Now!
        </a>
    @endif
</div>
