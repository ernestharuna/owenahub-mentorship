<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <style>
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 15px;
            border-radius: 5px;
            background: #d3d3d3;
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
    <button type="button" class="btn btn-dark rounded-0 fw-light" data-bs-toggle="modal" data-bs-target="#finish-task">
        Mark as done
    </button>

    <!-- Modal -->
    <div class="modal fade" id="finish-task" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <div>
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Good Job! 🎊</h1>
                        <p class="m-0 fs-tiny">
                            Your next slice awaits...
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form wire:submit="save_review" class="m-0">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded-0" wire:model="comment"
                                placeholder="Write us a review . . . 😀" aria-label="Write us a review . . . 😀"
                                aria-describedby="button-addon2" required>
                        </div>

                        <div class="mt-4">
                            <input type="range" min="1" max="5" id="mySlider" class="w-100 slider"
                                wire:model="rating" required>
                            <p class="fw-bold">
                                <span id="sliderValue">5</span>
                                star(s) <i class="bi bi-star-fill text-theme"></i>
                            </p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-theme rounded-0 shadow-sm">Complete!</button>
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
