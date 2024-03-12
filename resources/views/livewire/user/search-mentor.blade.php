<div>
    <input wire:model.live="search" type="text"
        class="form-control py-3 bg-body-secondary rounded-3 fs-5 fw-semibold shadow-sm col-6 col-md-6"
        placeholder="Search mentors">

    <section class="my-4">
        <div class="row row-cols-1 row-cols-lg-4 g-3">
            @forelse ($mentors as $mentor)
                <x-mentor-card :mentor="$mentor" />
            @empty
                <p class="p-2 fw-semibold text-secondary">
                    No mentors found matching "{{ $search }}"
                </p>
            @endforelse
        </div>
    </section>
</div>
