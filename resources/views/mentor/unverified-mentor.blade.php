<x-layouts.mentor>
    <div class="mt-2 container">
        <section class="py-3 mb-3">
            <h2 class="fw-bold text-dark">
                Account Under Review
            </h2>
        </section>

        <div class="mb-3">
            <livewire:mentor.complete-profile />
        </div>

        <section class="animated-2 fadeIn my-4">
            <div class="bg-white p-3 mb-2 rounded-4 shadow-sm">
                <p>
                    Thank you for your interest in our platform! 😍
                </p>

                <p>
                    Your mentor account is currently under review by our team and this process might take <span
                        class="fw-semibold">1-3 days</span>. We appreciate your patience while we
                    carefully assess your qualifications and credentials.
                </p>

                <div>
                    <p class="fw-bold mb-1">What to expect</p>
                    <ul>
                        <li>
                            Our team will review your application as soon as possible.
                        </li>
                        <li>
                            You will receive an email notification once your account has been approved or if any
                            additional information is required.
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="fw-bold mb-1">In the Meantime:</p>
                    <ul>
                        <li class="fw-semibold">
                            Your account is hidden from mentees for now <br>
                            <span class="text-red">
                                Complete your profile so your review is successful
                            </span>
                        </li>
                        <li>
                            If you have any questions or need assistance, you can contact our support team at
                            support@example.com.
                        </li>
                    </ul>
                </div>

                <a href="{{ route('mentor.profile.index') }}" class="btn btn-theme rounded-5 px-4 fw-semibold">
                    Complete profile
                </a>
            </div>
        </section>

        @include('partials.__join-community')
    </div>

    <hr class="opacity-0 my-5">
</x-layouts.mentor>
