<div class="bg-theme rounded-3 p-2">
    @if ($current_status === 'pending')
        <h3 class="fs-6 mb-3">Confirm your availability</h3>
        <div class="fs-tiny">
            <button wire:click="updateStatus('confirmed')"
                class="btn btn-sm btn-success text-white rounded-2 px-3 fw-semibold me-2">
                I'm available
            </button>
            <button wire:click="updateStatus('cancelled')"
                class="btn btn-sm btn-danger text-white rounded-2 px-3 fw-semibold">
                Not availabale
            </button>
        </div>
    @endif

    @if ($current_status === 'confirmed')
        <h3 class="fs-6 mb-2">Are you done with this session?</h3>
        <div>
            <button wire:click="updateStatus('completed')" class="btn btn-sm btn-light rounded-4 px-4 fw-semibold me-2">
                Yes
            </button>
        </div>
    @endif
</div>
