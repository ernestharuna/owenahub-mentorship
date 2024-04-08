<div class="bg-theme-light rounded-3 p-2">
    @if ($current_status === 'pending')
        <h3 class="fs-6 mb-3">Confirm your availability
            <i style="font-size: 10px" class="fw-semibold text-red ms-2" wire:loading>Sending a mail to your mentee...</i>
        </h3>
        <div class="fs-tiny">
            <button wire:click="updateStatus('confirmed')" wire:loading.attr="disabled"
                class="btn btn-sm btn-success text-white rounded-2 px-3 fw-semibold me-2">
                I'm available
            </button>

            <button wire:click="updateStatus('cancelled')" wire:loading.attr="disabled"
                class="btn btn-sm btn-danger text-white rounded-2 px-3 fw-semibold">
                Not availabale
            </button>
        </div>
    @endif

    @if ($current_status === 'confirmed')
        <div class="d-flex align-items-center justify-content-between">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-theme rounded-3 px-3 py-2 fw-semibold" data-bs-toggle="modal"
                data-bs-target="#createMeeting">
                Create meeting room <i class="bi bi-file-person fs-5 ms-1" style="position: relative; top: 2px;"></i>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="createMeeting" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-4">
                        <div class="modal-header border border-0">
                            <div>
                                <h5 class="modal-title text-dark fw-bold" id="exampleModalLabel">
                                    Create a meeting room
                                </h5>
                                <p class="m-0">Select your preferred option</p>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <a href="zoommtg://start" target="_blank"
                                class="btn btn-white border shadow-sm py-3 mb-3 rounded-4 w-100 fw-semibold">
                                <img src="{{ asset('images/zoom.png') }}" alt="google meet" width="20"
                                    style="position: relative; top: -2px;"> Zoom
                            </a>
                            <a href="https://meet.google.com" target="_blank"
                                class="btn btn-white border shadow-sm py-3 mb-3 rounded-4 w-100 fw-semibold"
                                class="btn-close">
                                <img src="{{ asset('images/google-meet.png') }}" alt="google meet" width="30"
                                    style="position: relative; top: -2px;">
                                Google meet
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-light rounded-3 px-4 py-2 fw-semibold" data-bs-toggle="modal"
                data-bs-target="#finishSession">
                <i class="bi bi-check-circle-fill text-theme me-1"></i> Finish session
            </button>
            <!-- Modal -->
            <div class="modal fade" id="finishSession" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-4">
                        <div class="modal-header border border-0">
                            <p class="modal-title text-dark fw-bold" id="exampleModalLabel">
                                Are you done with this Mentee? <br>
                                <span class="text-red fw-normal">This action cannot be undone</span>
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <button wire:click="updateStatus('completed')"
                                class="btn btn-theme py-3 mb-3 rounded-4 w-100 fw-semibold">
                                Yes
                            </button>
                            <button class="btn btn-white border shadow-sm py-3 mb-3 rounded-4 w-100 fw-semibold"
                                class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                No
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
