<!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
<div class="border rounded text-dark opacity-animation shadow cta-animation-error" id="flash-message">
    <div class="d-flex justify-content-between align-items-center border-bottom p-2">
        <div class="me-5">
            <img src="{{ asset('images/logo.png') }}" alt="..." width="20px" style="position: relative; top: -3px">
            <span class="fw-semibold text-danger">
                {{ session('error') }}
            </span>
        </div>
        <div class="ms-4 border p-1 rounded-2"">
            {{-- <span class="fs-tiny">Just now</span> --}}
            <button type="button" class="btn-close fs-tiny" data-bs-dismiss="toast" aria-label="Close"
                id="dismiss-button" style="position: relative; top: 2px"></button>
        </div>
    </div>
</div>
