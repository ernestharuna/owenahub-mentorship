<div>
    @if ($status == 'pending')
        <div class="fs-tiny bg-body-secondary px-2 py-1 mb-2 d-inline-block fw-semibold rounded-2">
            <i class="bi bi-clock"></i> pending
        </div>
    @endif
    @if ($status == 'confirmed')
        <div class="fs-tiny bg-light-green text-success px-2 py-1 mb-2 d-inline-block fw-semibold rounded-2">
            <i class="bi bi-check-lg"></i> confirmed
        </div>
    @endif
    @if ($status == 'cancelled')
        <div class="fs-tiny bg-danger-subtle text-danger  px-2 py-1 mb-2 d-inline-block fw-semibold rounded-2">
            <i class="bi bi-x"></i> cancelled
        </div>
    @endif
    @if ($status == 'completed')
        <div class="fs-tiny bg-success text-white px-2 py-1 mb-2 d-inline-block fw-semibold rounded-2">
            <i class="bi bi-check2-all"></i> completed
        </div>
    @endif
</div>
