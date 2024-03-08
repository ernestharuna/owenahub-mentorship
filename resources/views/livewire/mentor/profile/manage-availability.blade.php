<section>
    <header class="d-flex align-items-center justify-content-between mb-4 gap-3">
        <div>
            <h2 class="fs-5 m-0 fw-semibold">
                Your availability
            </h2>
            <p class="m-0">
                When will you be open to talk 🙂
            </p>
        </div>
        <div>
            {{-- <x-edit-form-fields /> --}}
        </div>
    </header>

    @if ($toggle)
        <form wire:submit="saveSession" class="col-12 col-md-6 animated-2 fadeIn">
            <div class="mb-3">
                <label for="week_day" class="form-label fw-semibold m-0">Pick a day of the week</label>
                <select wire:model="week_day" id="week_day" class="form-control rounded-3 py-2 border-2 editable">
                    <option value="" selected>
                        Choose category
                    </option>
                    <option value="1">
                        Sunday
                    </option>
                    <option value="2">
                        Monday
                    </option>
                    <option value="3">
                        Tuesday
                    </option>
                    <option value="4">
                        Wednesday
                    </option>
                    <option value="5">
                        Thursday
                    </option>
                    <option value="6">
                        Friday
                    </option>
                    <option value="7">
                        Saturday
                    </option>
                </select>
                @error('week_day')
                    <x-error :message="$message" />
                @enderror
            </div>

            <div class="mb-3">
                <label for="start_time" class="form-label fw-semibold m-0">Your start time</label>
                <input wire:model="start_time" type="time" class="form-control rounded-3 py-2 border-2 editable"
                    id="start_time">
            </div>

            <div class="mb-3">
                <label for="end_time" class="form-label fw-semibold m-0">Your close time</label>
                <input wire:model="end_time" type="time" class="form-control rounded-3 py-2 border-2 editable"
                    id="end_time">
            </div>

            <div class="d-flex align-items-center">
                <button wire:loading.attr="disabled" class="btn btn-dark rounded-3 px-4 fs-tiny fw-semibold editable">
                    SAVE
                </button>
                <div wire:loading class="ms-2 spinner-border text-warning" role="status"
                    style="width: 20px !important; height: 20px !important;">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </form>
    @else
        <div>
            <button class="btn btn-sm btn-dark rounded-3 py-2 px-3 fw-semibold" wire:click="toggler" type="button">
                <i class="bi bi-plus-square me-2"></i> Create a schedule
            </button>
        </div>
    @endif
</section>
