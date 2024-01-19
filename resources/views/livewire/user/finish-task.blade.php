<div>
    <!-- Button trigger modal -->
    @if ($bite_completed)
        <button type="button" class="btn btn-dark rounded-2 fw-semibold p-3 w-100" disabled>
            Digested Bite!
        </button>
    @else
        <button type="button" class="btn btn-dark rounded-2 font-monospace fw-semibold fs-5  px-4" data-bs-toggle="modal"
            data-bs-target="#finish-task">
            mark as done
        </button>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="finish-task" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Woa! Are you done with this? 😏</h1>
                        <p class="m-0 fs-tiny">
                            Your next slice awaits...
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body pt-0">
                    <form wire:submit="save" class="m-0">
                        @if ($can_review)
                            <div class="input-group my-3">
                                <input type="text" class="form-control rounded-2 py-3 border-2 fs-5 fw-semibold"
                                    wire:model="comment" placeholder="Rate this slice" aria-label="Rate This Slice"
                                    aria-describedby="button-addon2" required>
                            </div>

                            <div class="mt-4">
                                <input type="range" class="form-range" min="1" max="5" id="mySlider"
                                    wire:model="rating" required>
                                <p class="fw-bold">
                                    <span id="sliderValue"></span> star(s)
                                    <i class="bi bi-star-fill text-theme"></i>
                                </p>
                            </div>
                        @endif
                        <div>
                            <p class="my-2 fs-tiny">
                                Are you done with this one? 🤔 <br>
                                If you're not, you can navigate <b>bites</b> via the
                                <span class="d-none d-md-inline-block">side panel</span>
                                <span class="d-inline-block d-md-none">links above</span>
                            </p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-theme rounded-2 shadow-sm fw-semibold">
                                Yes, digested!
                            </button>
                            <button type="button" class="btn btn-light border rounded-2 shadow-sm ms-2 fw-semibold"
                                data-bs-dismiss="modal" aria-label="Close">
                                Not yet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const slider = document.getElementById("mySlider");
        const output = document.getElementById("sliderValue");

        output.innerHTML = slider.value;
        slider.addEventListener("input", function() {
            output.innerHTML = this.value;
        });
    </script>
</div>
