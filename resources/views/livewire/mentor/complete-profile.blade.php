<section>
    <section class="mt-4">
        <div class="p-3 bg-theme shadow-sm border rounded-4 row mx-auto gap-4 justify-content-between">
            <div class="col-12 col-md-5 px-0">
                <h3 class="fw-bold fs-4">Complete you profile</h3>
                <p>
                    Complete your profile to be able to recieve session requests. <br>
                    <span class="fw-semibold">
                        It takes just 5 minutes 👌🏾
                    </span>
                </p>

                <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100">
                    <div class="progress-bar bg-red" style="width: {{ $percentage }}%">{{ $percentage }}%</div>
                </div>

                <div class="mt-3">
                    <a href="{{ route('mentor.profile.index') }}"
                        class="btn btn-light rounded-4 px-4 py-2 shadow-sm fw-semibold border-0 mt-1">
                        See profile <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-5 rounded-4 bg-white px-3 py-3 shadow">
                <div class="border rounded-4 p-2 mb-2 shadow-sm">
                    <p class="m-0 fw-semibold">
                        <a href="{{ route('mentor.profile.account-info') }}" @class([
                            'text-decoration-line-through' => $complete['part_1'],
                            'text-secondary' => $complete['part_1'],
                            'text-decoration-none' => !$complete['part_1'],
                            'text-dark' => !$complete['part_1'],
                        ])>
                            @if ($complete['part_1'])
                                <i class="bi bi-check-circle-fill text-theme e-1 fs-5"
                                    style="position:relative; top:2px;"></i>
                            @else
                                <i class="bi bi-check-circle text-theme me-1 fs-5"
                                    style="position:relative; top:2px;"></i>
                            @endif
                            Tell us about yourself
                        </a>
                    </p>
                </div>

                <div class="border rounded-4 p-2 mb-2 shadow-sm">
                    <p class="m-0 fw-semibold">
                        <a href="{{ route('mentor.profile.manage-socials') }}" @class([
                            'text-decoration-line-through' => $complete['part_2'],
                            'text-secondary' => $complete['part_2'],
                            'text-decoration-none' => !$complete['part_2'],
                            'text-dark' => !$complete['part_2'],
                        ])>
                            @if ($complete['part_2'])
                                <i class="bi bi-check-circle-fill text-theme e-1 fs-5"
                                    style="position:relative; top:2px;"></i>
                            @else
                                <i class="bi bi-check-circle text-theme me-1 fs-5"
                                    style="position:relative; top:2px;"></i>
                            @endif
                            Connect your socials to your profile
                        </a>
                    </p>
                </div>

                <div class="border rounded-4 p-2 shadow-sm">
                    <p class="m-0 fw-semibold">
                        <a href="" @class([
                            'text-decoration-line-through' => $complete['part_3'],
                            'text-secondary' => $complete['part_3'],
                            'text-decoration-none' => !$complete['part_3'],
                            'text-dark' => !$complete['part_3'],
                        ])>
                            @if ($complete['part_3'])
                                <i class="bi bi-check-circle-fill text-theme e-1 fs-5"
                                    style="position:relative; top:2px;"></i>
                            @else
                                <i class="bi bi-check-circle text-theme me-1 fs-5"
                                    style="position:relative; top:2px;"></i>
                            @endif
                            Set your availability for sessions
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
