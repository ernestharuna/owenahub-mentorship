<section>
    <h4 class='fw-bold fs-6 text-secondary'>Share With Someone</h4>
    <section class="social-links row w-100 mx-auto">
        <button class="btn facebook text-white fw-light rounded rounded-0 col-sm-12 col-md-4" onclick="facebook()">
            <i class="bi bi-facebook"></i>
            Share to Facebook
        </button>

        <button class="btn whatsapp text-white fw-light rounded rounded-0 col-sm-12 col-md-4" onclick="whatsapp()">
            <i class="bi bi-whatsapp"></i>
            Share to WhatsApp
        </button>

        <button class="btn twitter text-white fw-light rounded rounded-0 col-sm-12 col-md-4" onclick="twitter()">
            <i class="bi bi-twitter"></i>
            Share to Twitter
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
