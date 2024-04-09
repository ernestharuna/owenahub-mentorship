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
            <span class="fs-2 lh-1">
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
                        class="col-md-6 float-md-end mb-4 ms-md-3 img-fluid img-thumbnail rounded-5 shadow"
                        alt="OwenaHub icon">

                    <h2 class="fw-semibold">For tech juniors</h2>
                    <p>
                        Starting a tech career can be daunting. It costs time and resources to try to find a field that
                        fits you and understand what you need to get started.
                        <br>
                        <span class="text-purple"><b>OwenaHub</b> makes it easier.</span><br>
                        We provide you with a platform to talk with professionals who have threaded the path you aspire
                        to follow.
                    </p>

                    <h2 class="fw-semibold mt-4">For tech professionals</h2>
                    <p>
                        Our mentors have mentors who also have mentors 😲—No one is an island of knowledge. <br>
                        Finding mentors even when you feel accomplished shouldn't ignite your imposter syndrome.
                        Feel free to create a user account and connect with
                        <br>
                        <span class="text-theme"><b>OwenaHub</b> makes it easier.</span><br>
                        Talk with professionals who
                        have thread the path you aspire to follow.
                    </p>

                    <hr>

                    <p>
                        OwenaHub is the mentorship platform for tech enthusiasts who want to get clarity and guidance.
                        <br>
                        OwenaHub isn't focused on teaching you to code as there are already a ton of free resources that
                        help learners with this, we simply guide you with mentorship.
                        We help you navigate through all the resources out there.
                    </p>

                    <p class="text-red fw-semibold">
                        We are fueled by the passion to help people start a career the right way by making mentorship
                        accessible to all.
                    </p>

                    <a href="{{ route('guest.onboarding.slices') }}"
                        class="btn btn-theme rounded-4 text-dark shadow-sm px-4 py-2 mt-4 fw-semibold">
                        Get started today
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
