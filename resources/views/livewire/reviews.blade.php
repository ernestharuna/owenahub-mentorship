<div class="mb-3">
    <p class="fw-semibold m-0">
        {{ $review->user->first_name }}
        {{ $review->user->last_name }}
    </p>
    <div class="fs-tiny text-theme">
        <!-- for filled stars-->
        @for ($i = 0; $i < $review->rating; $i++)
            <i class="bi bi-star-fill"></i>
        @endfor

        <!-- for empty stars-->
        @for ($i = 0; $i < 5 - $review->rating; $i++)
            <i class="bi bi-star"></i>
        @endfor
    </div>
    <p class="fs-tiny">
        {{ $review->comment }}
    </p>
</div>
