<!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
<div class="border rounded-4 text-dark opacity-animation shadow cta-animation-error" id="flash-message">
    <div class="d-flex justify-content-between align-items-center border-bottom px-2 py-1">
        <div class="me-5">
            <i class="bi bi-exclamation-circle-fill text-danger"></i>
            <span class="fw-semibold text-danger">
                {{ session('error') }}
            </span>
        </div>
        <div class="ms-4">
            <button type="button" class="btn-close fs-tiny" data-bs-dismiss="toast" aria-label="Close" id="dismiss-button"
                style="position: relative; top: 2px"></button>
        </div>
    </div>
</div>
