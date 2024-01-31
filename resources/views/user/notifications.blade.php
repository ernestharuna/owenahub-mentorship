<x-layouts.user>
    <div class="container mt-2">
        <section class="py-3 mb-5 border-bottom">
            <h2 class="fs-4 fw-bold text-secondary">
                <i class="bi bi-bell-fill text-theme"></i> Notifications
            </h2>
        </section>

        <section class="animated-2 fadeIn pb-5">
            <div class="bg-white border p-2 mb-2 rounded-1 shadow-sm">
                <p class="fs-tiny text-secondary fw-bold mb-1"> Welcome to Owenahub </p>
                <p class="lh-sm m-0">
                    Welcome to OwenaHub! You can now enroll in a slice to get started.
                </p>
            </div>

            <div class="bg-white border p-2 mb-2 rounded-1 shadow-sm">
                <p class="fs-tiny text-secondary fw-bold mb-1"> Subscribe Now! </p>
                <p class="lh-sm m-0">
                    Subscribe now to get notified on new updates, features and articles that interest you.
                </p>
            </div>

            <div class="p-2 mb-2 rounded-1">
                <div>
                    <p class="fs-tiny text-secondary fw-semibold mb-1">
                        <img src="{{ asset('images/people/founder-img.jpg') }}" alt="..."
                            class="image-fluid rounded-4" width="30">
                        Message from <span class="text-dark">Ernest Haruna</span>
                    </p>
                    <p class="lh-sm m-0 ms-4 border p-2 rounded bg-white d-inline-block">
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


            <div class="bg-white border p-2 mt-4 mb-2 rounded-1 shadow-sm">
                <p class="fs-tiny text-secondary fw-bold mb-1"> More Slices Underway! </p>
                <p class="lh-sm m-0">
                    Our team are still working tirelesly to allow you have more bites out of each slice. <br>
                    We will keep sending you emails as new bites roll out.
                </p>
            </div>

            <div class="bg-white border p-2 mb-2 rounded-1 shadow-sm">
                <p class="fs-tiny text-secondary fw-bold mb-1"> Account & Passwards! </p>
                <p class="lh-sm m-0">
                    Make sure to have your account passswords handy. <br>
                    You might want to book mark OwenaHub to allow you
                    easy access to login and continue where you left off.
                </p>
            </div>
        </section>
    </div>
</x-layouts.user>
