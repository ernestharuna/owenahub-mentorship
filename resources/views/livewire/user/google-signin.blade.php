<div>
    <form action="{{ url('user/auth/google') }}" method="get">
        <button type="submit" class="btn btn-light border rounded-4 shadow-sm py-3 mt-2 w-100 text-dark fw-semibold">
            <img src="{{ asset('images/google-color-svgrepo-com.png') }}" alt="..."
                style="width: 19px; position:relative; top:-2px;"> Google
        </button>
    </form>
</div>
