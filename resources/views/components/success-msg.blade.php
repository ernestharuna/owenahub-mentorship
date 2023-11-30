<div class="border rounded text-dark shadow z-3 opacity-animation" id="flash-message">
    <div class="d-flex justify-content-between align-items-center border-bottom p-2">
        <div class="me-5">
            <img src="{{ asset('images/logo.png') }}" alt="..." width="20px" style="position: relative; top: -3px">
            <span class="fw-bold">OwenaHub</span>
        </div>
        <div class="ms-4">
            <span class="fs-tiny">Just now</span>
            <button type="button" class="btn-close fs-tiny" data-bs-dismiss="toast" aria-label="Close"
                id="dismiss-button" style="position: relative; top: 2px"></button>
        </div>
    </div>
    <div class="p-2 fs-tiny">
        <span class="py-0 px-2 bg-success bg-gradient shadow rounded me-1"></span> {{ session('status') }}
    </div>
</div>
bg
