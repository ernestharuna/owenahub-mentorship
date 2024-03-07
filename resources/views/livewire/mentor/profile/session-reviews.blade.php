<div>
    <div class="row row-cols-1 row-cols-md-3 g-3 my-1">
        @forelse ($reviews as $review)
            <div class="col">
                <div class="card h-100 border-0 bg-body-tertiary shadow-sm rounded-3">
                    <div class="card-body">
                        <h5 class="card-title m-0 fs-6">
                            John Doe
                        </h5>
                        <div class="fs-tiny">
                            <i class="bi bi-star-fill text-theme"></i>
                            <i class="bi bi-star-fill text-theme"></i>
                            <i class="bi bi-star-fill text-theme"></i>
                            <i class="bi bi-star-fill text-theme"></i>
                            <i class="bi bi-star text-theme"></i>
                        </div>
                        <hr class="my-1">
                        <p class="card-text">
                            <small class="fs-tiny">
                                I love his way of explaining things to me
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-secondary fw-semibold p-1 bg-body-tertiary border rounded-2">
                No reviews yet
            </p>
        @endforelse
    </div>
</div>
