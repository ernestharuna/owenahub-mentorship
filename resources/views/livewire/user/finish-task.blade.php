<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <style>
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 15px;
            border-radius: 5px;
            background: #ffd57b;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #F6A700;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #F6A700;
            cursor: pointer;
        }
    </style>

    <!-- Button trigger modal -->
    @if ($bite_completed)
        <button type="button" class="btn btn-dark rounded-0 fw-semibold p-3 w-100" disabled>
            Digested Bite!
        </button>
    @else
        <button type="button" class="btn btn-dark rounded-1 fw-semibold p-3 w-100" data-bs-toggle="modal"
            data-bs-target="#finish-task">
            NEXT →
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
                                <input type="text" class="form-control rounded-0" wire:model="comment"
                                    placeholder="Write us a review . . . 😀" aria-label="Write us a review . . . 😀"
                                    aria-describedby="button-addon2" required>
                            </div>

                            <div class="mt-4">
                                <input type="range" min="1" max="5" id="mySlider" class="w-100 slider"
                                    wire:model="rating" required>
                                <p class="fw-bold">
                                    <span id="sliderValue"></span>
                                    star(s) <i class="bi bi-star-fill text-theme"></i>
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
                            <button type="submit" class="btn btn-theme rounded-0 shadow-sm fw-semibold">
                                Yes, digested!
                            </button>
                            <button type="button" class="btn btn-light border rounded-0 shadow-sm ms-2 fw-semibold"
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
