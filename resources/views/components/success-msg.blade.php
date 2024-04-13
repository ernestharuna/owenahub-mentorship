<div class="border rounded-4 text-dark shadow bg-white cta-animation" id="flash-message">
    <div class="d-flex justify-content-between align-items-center border-bottom px-2 py-1">
        <div class="me-5">
            <i class="bi bi-check-circle-fill text-success"></i>
            <span class="fs-tiny fw-semibold">
                {{ session('status') }}
            </span>
        </div>
        <div class="ms-4">
            <button type="button" class="btn-close fs-tiny" data-bs-dismiss="toast" aria-label="Close" id="dismiss-button"
                style="position: relative; top: 2px"></button>
        </div>
    </div>
</div>
