<div class="border rounded text-dark shadow bg-white cta-animation" id="flash-message">
    <div class="d-flex justify-content-between align-items-center border-bottom p-2">
        <div class="me-5">
            <img src="{{ asset('images/logo.png') }}" alt="..." width="15px" style="position: relative; top: -1px">
            <span class="fs-tiny fw-bold">OwenaHub</span>
        </div>
        <div class="ms-4">
            <span class="fs-tiny">Just now</span>
            <button type="button" class="btn-close fs-tiny" data-bs-dismiss="toast" aria-label="Close"
                id="dismiss-button" style="position: relative; top: 2px"></button>
        </div>
    </div>
    <div class="p-2 fs-tiny fw-semibold">
        <span class="py-0 px-2 bg-success bg-gradient shadow rounded me-1"></span> {{ session('status') }}
    </div>
</div>
