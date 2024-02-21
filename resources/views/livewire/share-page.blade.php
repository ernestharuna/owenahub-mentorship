<section>
    <h4 class='fs-tiny text-red'>Share to your network</h4>
    <section class="social-links">
        <button class="btn btn-sm rounded-4 mb-1 facebook text-white" onclick="facebook()">
            <i class="bi bi-facebook me-1"></i>
            Facebook
        </button>

        <button class="btn btn-sm rounded-4 mb-1 whatsapp text-white fw-light" onclick="whatsapp()">
            <i class="bi bi-whatsapp me-1"></i>
            WhatsApp
        </button>

        <button class="btn btn-sm btn-dark rounded-4 mb-1 text-white fw-light" onclick="twitter()">
            <i class="bi bi-twitter-x me-1"></i>
            Twitter
        </button>
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
