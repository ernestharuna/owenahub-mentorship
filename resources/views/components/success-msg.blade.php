<div class="border rounded-4 text-dark shadow bg-white cta-animation" id="flash-message">
    <div class="d-flex justify-content-between align-items-center border-bottom p-2">
        <div class="me-5">
            {{-- <img src="{{ asset('images/logo.png') }}" alt="..." width="15px" style="position: relative; top: -1px"> --}}
            <i class="bi bi-check-circle-fill text-success"></i>
            <span class="fs-tiny fw-semibold">
                {{ session('status') }}
            </span>
        </div>
        <div class="ms-4 border p-1 rounded-5">
            <button type="button" class="btn-close fs-tiny" data-bs-dismiss="toast" aria-label="Close" id="dismiss-button"
                style="position: relative; top: 2px"></button>
        </div>
    </div>
</div>
