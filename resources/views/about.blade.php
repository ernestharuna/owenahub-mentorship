<x-layouts.app>

    <head>
        <title>
            OwenaHub - We offer a vibrant platform for learners to gain career insights from experienced mentors.
        </title>
    </head>
    <div class="bg-f2">
        <div class="container py-5">
            <h1 class='text-theme mb-2 fs-5'>
                About Us
            </h1>
            <span class="fs-2 lh-1 fw-bold">
                We offer a vibrant platform for learners to <br class="d-md-inline-block d-none" />
                gain career insights from experienced mentors.
            </span>
        </div>
    </div>

    <div class="container my-5 animated-2 fadeIn mx-auto">
        <div class="">
            <div class='mt-3'>
                <div class="clearfix">
                    <img src={{ asset('images/about_img.png') }}
                        class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid img-thumbnail shadow" alt="OwenaHub icon">
                    <p>
                        Starting a career in tech, can be daunting. It cost time and resources trying to find a field
                        that fits you and your interest before for one.
                        <br>
                        <span class="text-theme"><b>OwenaHub</b> makes it easier.</span>
                    </p>

                    <h3 class='fs-4 fw-bold mt-4'>What OwenaHub is</h3>
                    <p>
                        OwenaHub is the mentorship platform for tech enthusiasts who want to get clarity and guidance as
                        they venture into building a career in tech.
                        We are fueled by the passion to help people start a career the right way.
                    </p>
                    <p>
                        OwenaHub isn't focused on teaching you to code as there are already a ton of free resources that
                        help learners with this, we simply guide you with mentorship.
                        We help you navigate through all the resources out there.
                    </p>

                    <p class="text-red fw-bold">
                        We are fueled by the passion to help people start a career the right way.
                    </p>

                    <a href="{{ route('guest.onboarding.slices') }}"
                        class="btn btn-theme rounded-1 text-white px-4 py-2 fs-5 mt-4 fw-bold">
                        Sign Up for Free
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
