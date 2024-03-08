<div>
    <section class="d-flex align-items-center justify-content-between">
        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(1, $dates)) bg-purple text-white @endif">
            <div class="fw-bold">S</div>
            <div class="mt-3">
                @if (in_array(1, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center py-2 px-2 p-md-3 rounded-3 @if (in_array(2, $dates)) bg-purple text-white @endif">
            <div class="fw-bold">M</div>
            <div class="mt-3">
                @if (in_array(2, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(3, $dates)) bg-purple text-white @endif">
            <div class="fw-bold">T</div>
            <div class="mt-3">
                @if (in_array(3, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(4, $dates)) bg-purple text-white @endif">
            <div class="fw-bold">W</div>
            <div class="mt-3">
                @if (in_array(4, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(5, $dates)) bg-purple text-white @endif">
            <div class="fw-bold">T</div>
            <div class="mt-3">
                @if (in_array(5, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(6, $dates)) bg-purple text-white @endif">
            <div class="fw-bold">F</div>
            <div class="mt-3">
                @if (in_array(6, $dates))
                    <i class="bi bi-check-circle-fill text-theme"></i>
                @else
                    <i class="bi bi-circle"></i>
                @endif
            </div>
        </div>

        <div
            class="text-center rounded-3 py-2 px-2 p-md-3 @if (in_array(7, $dates)) bg-purple text-white @endif">
            <div class="fw-bold">S</div>
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
