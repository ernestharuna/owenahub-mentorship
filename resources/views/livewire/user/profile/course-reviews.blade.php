<section>
    <header class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h2 class="fs-5 m-0 fw-semibold">
                Course reviews
            </h2>
            <p class="m-0">
                You can efit reviews for courses here
            </p>
        </div>
        <div>
            @if ($course_reviews->count() > 0)
                <x-edit-form-fields />
            @endif
        </div>
    </header>

    @forelse ($course_reviews as $review)
        <form wire:submit="updateReview({{ $review->id }})" class="col-12 col-md-6" wire:key="{{ $review->id }}">
            <div class="mb-3">
                <label for="review-{{ $review->id }}" class="form-label fw-semibold m-0">
                    {{ $review->slice->title }}
                </label>
                <input type="text" class="form-control rounded-3 py-2 border-2" id="review-{{ $review->id }}"
                    placeholder="https://instagram.com/..." disabled>
            </div>
            <button class="btn btn-dark rounded-3 px-4 fs-tiny fw-semibold">
                SAVE
            </button>
        </form>
    @empty
        <p class="bg-body-secondary p-3 rounded-3">
            You haven't reviewed any course yet
        </p>
    @endforelse


</section>
