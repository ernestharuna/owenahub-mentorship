<section>
    <header>
        <h2 class="fs-5 m-0 fw-semibold">
            Misc Information
        </h2>
        <p>
            Ensure you fill this correctly
        </p>

        <form action="#" class="col-12 col-md-6">
            <div class="mb-3">
                <label for="firstName" class="form-label fw-semibold m-0">Expertise</label>
                <input type="text" class="form-control rounded-3 py-2 border-2" id="firstName" placeholder="John"
                    name="first_name" value="Technical writer" disabled>
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label fw-semibold m-0">
                    Your skills <span class="text-secondary fw-normal">
                        (separate each skill with
                        commas)</span>
                </label>
                <input type="text" class="form-control rounded-3 py-2 border-2" id="lastName" name="last_name"
                    placeholder="John" value="Javascript, TypeScript, Angular" disabled>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold m-0">About you</label>
                <textarea name="bio" id="bio" cols="30" rows="10" class="form-control rounded-3 py-2 border-2"
                    placeholder="I am a software enthusiast with * years of experience"></textarea>
            </div>

            <button class="btn btn-dark rounded-3 px-4 fs-tiny mt-3 fw-semibold">
                SAVE
            </button>
        </form>
    </header>
</section>
