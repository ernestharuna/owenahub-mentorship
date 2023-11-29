<span class="ms-2 fs-tiny">
    @if (!$slice->completed)
        <span class="text-secondary">
            In Progress <i class="bi bi-clock-history"></i>
        </span>
    @endif

    @if ($slice->completed)
        <span class="text-success">
            Completed <i class="bi bi-check-circle-fill"></i>
        </span>
    @endif
</span>
