<x-user.profile-layout>
    <div class="row row-cols-1 row-cols-md-3 g-3 my-3">
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title m-0">
                        <a href="{{ route('user.profile.account-info') }}" class="text-dark text-decoration-none">
                            Account information
                        </a>
                    </h5>
                    <p class="card-text">
                        Update your account information
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title m-0">
                        <a href="{{ route('user.profile.manage-socials') }}" class="text-dark text-decoration-none">
                            Manage your socials
                        </a>
                    </h5>
                    <p class="card-text">
                        Manage links to your social media accounts.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title m-0">
                        <a href="{{ route('user.profile.achievements') }}" class="text-dark text-decoration-none">
                            Achievements
                        </a>
                    </h5>
                    <p class="card-text">
                        Update your account information
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title m-0">
                        <a href="{{ route('user.profile.course-reviews') }}" class="text-dark text-decoration-none">
                            Course reviews
                        </a>
                    </h5>
                    <p class="card-text">
                        See reviews made on courses you enrolled.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title m-0">
                        <a href="{{ route('user.profile.payments') }}" class="text-dark text-decoration-none">
                            Payments
                        </a>
                    </h5>
                    <p class="card-text">
                        View your payment history on OwenaHub
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title text-danger m-0">
                        <a type="button" class="text-decoration-none text-red" data-bs-toggle="modal"
                            data-bs-target="#logout-modal">
                            Exit Account
                        </a>
                    </h5>
                    <p class="card-text">
                        Log out of your account
                    </p>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="logout-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-start rounded-4">
                        <div class="modal-header border-0">
                            <h5 class="modal-title" id="staticBackdropLabel">Are you sure? 😥</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <button class="btn btn-theme fw-semibold w-100 rounded-4 py-3 mb-3" data-bs-dismiss="modal"
                                aria-label="Close">
                                No
                            </button>
                            <a href="{{ route('user.logout') }}"
                                class="btn btn-lgiht fw-semibold shadow-sm border w-100 rounded-4 py-3">
                                Yes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.profile-layout>
