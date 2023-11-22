<x-layouts.app>
    <section class="bg-theme">
        <div class="container py-4">
            <h1 class="fw-bold fs-2">
                {{ $slice->title }}
            </h1>
            <p class="">Duration: <span class="fw-bold">{{ $slice->duration }} Week(s)</span></p>
            <p class="m-0 text-white" style="max-width: 300px;">
                {{ $slice->about }}
            </p>
        </div>
    </section>

    <section class="bg-f2 py-3">
        <div class="container">
            <div class="row justify-content-between mt-4">
                <div class="p-4 bg-white rounded shadow col-lg-8 mb-5">
                    <h2 class="fs-5 fw-bold text-theme">Course Overview</h2>

                    <div>
                        {!! $slice->overview !!}
                    </div>
                </div>
                <div class="p-4 bg-white rounded col-lg-3 align-self-start">
                    <p class="fs-2 fw-bold">
                        <span class="text-decoration-line-through text-secondary">$12.00</span>
                        <span class="text-theme">{{ $slice->price ? $slice->price : 'FREE' }}</span>
                    </p>
                    <hr>
                    <!-- Button trigger modal -->
                    <button type="button" class="w-100 btn btn-theme fw-bold p-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Enroll Now
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">Course Under
                                        Review</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="m-0">This course is currently under going a review by the admin.</p>
                                    <p>
                                        Course review takes up to 3-4 working days.
                                    </p>
                                    <p>
                                        Make sure you <b>subscribe</b> to be notified
                                        when this course is available for enrolment.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" data-bs-dismiss="modal"
                                        class="btn btn-dark rounded rounded-0 fw-bold font-monospace">
                                        Understood!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
