<form class="row mx-auto justify-items-center w-30 gap-md-0 gap-2" wire:submit="save">
    @csrf
    <div class="col-12 col-md-9">
        <input type="email" placeholder="Subscribe via Email" wire:model="email"
            class="form-control w-100 border-1 py-2 fw-semibold border-bg-tertiary shadow-sm rounded-3" required />
    </div>
    <div class="col-12 col-md-3">
        <button class="btn bg-theme text-white w-100 py-2 rounded-3 fw-semibold">
            Subscribe
        </button>
    </div>
</form>
