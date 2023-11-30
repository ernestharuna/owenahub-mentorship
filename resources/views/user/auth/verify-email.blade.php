<x-layouts.app>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-12 mb-4">
                    <div class="card border-0 my-5">
                        <div class="card-body text-start">

                            <h2 class="fw-bold">
                                Verify Your Email Address
                            </h2>
                            <p class="mt-3 fw-normal">
                                An Email has been sent to
                                <b>ernest@gmail.com</b> <br>
                                Use the link below to verify your email
                                address and start enjoying OwenaHub 😀
                            </p>

                            <div class="mt-4">
                                <a href="mailto:" class="btn btn-theme rounded-0 text-white shadow-sm fw-bold">
                                    Open Email
                                </a>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('resend').submit();"
                                    class="btn btn-dark rounded-0 text-white shadow-sm fw-bold ms-2">
                                    Resend Email
                                </a>
                            </div>

                            <div class="fs-tiny text-start mt-3">
                                Questions? email us at <a href="mailto:hello@owenahub.com">hello@owenahub.com</a>
                            </div>

                            <form action="/email/verification-notification" class="d-none" method="POST"
                                id="resend">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layouts.app>
