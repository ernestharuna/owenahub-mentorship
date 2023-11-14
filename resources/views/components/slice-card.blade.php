<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<div class="card m-2 bg-white w-auto" style="width: 16rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5 class="card-title">Introduction To Problem Solving</h5>
        <p class="fs-tiny">
            The course guides you to develop your problem solving skills
        </p>
        <p class="card-text fs-tiny">
            <span class="px-2 py-1 bg-f2 text-dark d-inline-block rounded-pill border">
                4 weeks
            </span>
        </p>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a href="/slices/1/overview" class="btn btn-danger rounded rounded-0 fs-tiny px-4 d-block">ENROLL </a>
            </div>
            <button class="d-block fs-tiny fw-light btn btn-light rounded rounded-0" onclick="whatsapp()">
                SHARE
                <i class="bi bi-share-fill"></i>
            </button>
        </div>
    </div>
</div>

<script>
    const pageLink = window.location.href;
    const inviteText =
        `Hello there,\nI think you'd find this interesting: ${pageLink}\nEnjoy!`;

    function whatsapp() {
        window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(inviteText)}`);
    }
</script>
