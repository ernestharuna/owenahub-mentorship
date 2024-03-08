<div>
    <section class="d-flex align-items-center justify-content-between">
        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(1, $dates)) bg-theme-light text-white shadow-sm @endif">
            <div class="fw-bold text-dark">S</div>
            <div class="mt-3">
                @if (in_array(1, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center py-2 px-2 p-md-3 rounded-3 @if (in_array(2, $dates)) bg-theme-light text-white shadow-sm @endif">
            <div class="fw-bold text-dark">M</div>
            <div class="mt-3">
                @if (in_array(2, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(3, $dates)) bg-theme-light text-white shadow-sm @endif">
            <div class="fw-bold text-dark">T</div>
            <div class="mt-3">
                @if (in_array(3, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(4, $dates)) bg-theme-light text-white shadow-sm @endif">
            <div class="fw-bold text-dark">W</div>
            <div class="mt-3">
                @if (in_array(4, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(5, $dates)) bg-theme-light text-white shadow-sm @endif">
            <div class="fw-bold text-dark">T</div>
            <div class="mt-3">
                @if (in_array(5, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(6, $dates)) bg-theme-light text-white shadow-sm @endif">
            <div class="fw-bold text-dark">F</div>
            <div class="mt-3">
                @if (in_array(6, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(7, $dates)) bg-theme-light text-white shadow-sm @endif">
            <div class="fw-bold text-dark">S</div>
            <div class="mt-3">
                @if (in_array(7, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

    </section>
</div>
