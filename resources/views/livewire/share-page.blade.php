<section>
    <section class="social-links">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark rounded-4 py-2 px-4 fw-semibold" data-bs-toggle="modal"
            data-bs-target="#share-page">
            <i class="bi bi-share me-2"></i> Share this page
        </button>

        <!-- Modal -->
        <div class="modal fade" id="share-page" tabindex="-1" aria-labelledby="share-pageLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4">
                    <div class="modal-header border-0">
                        <div>
                            <h1 class="modal-title fs-5 text-dark" id="share-pageLabel">
                                Share this page
                            </h1>
                            <p class="m-0 text-dark">
                                <small>
                                    Spread the word, tell 'em what you found 🤩
                                </small>
                            </p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <button class="btn d-block w-100 py-3 rounded-4 mb-3 facebook text-white" onclick="facebook()">
                            <i class="bi bi-facebook me-1"></i>
                            Facebook
                        </button>

                        <button class="btn d-block w-100 py-3 rounded-4 mb-3 whatsapp text-white fw-light"
                            onclick="whatsapp()">
                            <i class="bi bi-whatsapp me-1"></i>
                            WhatsApp
                        </button>

                        <button class="btn d-block w-100 py-3 btn-dark rounded-4 mb-3 text-white fw-light"
                            onclick="twitter()">
                            <i class="bi bi-twitter-x me-1"></i>
                            Twitter
                        </button>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
</section>

<script>
    const pageLink = window.location.href;
    const inviteText =
        `Hello there,\nI think you'd find this interesting: ${pageLink}\nHappy Reading!`;

    function facebook() {
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(pageLink)}`);
    }

    function whatsapp() {
        window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(inviteText)}`);
    }

    function twitter() {
        const twitterShareUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(inviteText)}`;
        window.open(twitterShareUrl);
    }
</script>
