<x-layouts.mentor>
    <div class="mt-2 container">
        <section class="py-3 mb-4">
            <h2 class="fw-bold text-dark">
                Notifications
            </h2>
        </section>

        <section class="animated-2 fadeIn pb-5">
            <div class="bg-white p-3 mb-2 rounded-4 shadow-sm">
                <p class="fs-tiny text-secondary fw-bold mb-1"> Welcome to Owenahub </p>
                <p class="lh-sm m-0">
                    Welcome to OwenaHub! You can now enroll in a slice to get started.
                </p>
            </div>

            <div class="bg-white p-3 mb-2 rounded-4 shadow-sm">
                <p class="fs-tiny text-secondary fw-bold mb-1"> Subscribe Now! </p>
                <p class="lh-sm m-0">
                    Subscribe now to get notified on new updates, features and articles that interest you.
                </p>
            </div>

            <div class="p-3 mb-2 rounded-4">
                <div>
                    <p class="fs-tiny text-secondary fw-semibold mb-1">
                        <img src="{{ asset('images/people/founder-img.jpg') }}" alt="..."
                            class="image-fluid rounded-4" width="30">
                        Message from <span class="text-dark">Ernest Haruna</span>
                    </p>
                    <p class="lh-sm m-0 ms-4 p-3 rounded-4 shadow-sm bg-white d-inline-block">
                        Hello {{ Auth::user()->first_name }},
                        <br>
                        <br>
                        Welcome aboard to OwenaHub! 🎉 <br>
                        It's such a joy to have you join us on this exciting journey of learning and growth together 🤩.
                        <br>
                        <br>
                        I do hope you get transformed by the resources we have prepared for you here. <br>
                        Alot is still brewing on the backside, and we will keep making Owenahub better with each update.
                        <br>
                        <br>
                        You can reach out to me personally at
                        <span class="text-theme fw-semibold">hello@owenahub.com</span>
                        <br>
                        <br>
                        Cheers to learning and transformation 🚀
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-layouts.mentor>
