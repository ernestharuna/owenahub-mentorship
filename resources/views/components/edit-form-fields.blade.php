<span>
    <button onclick="editForm()" class="btn btn-sm btn-dark rounded-3 px-3 fw-semibold text-decoration-none editForm">
        Edit
    </button>

    <script>
        function editForm() {
            let inputFields = document.getElementsByClassName('editable');
            for (let items = 0; items < inputFields.length; items++) {
                inputFields[items].removeAttribute('disabled');
            }

            let buttons = document.getElementsByClassName('editForm');
            for (let btn = 0; btn < buttons.length; btn++) {
                buttons[btn].innerHTML = "Editing";
                buttons[btn].setAttribute('disabled', 'disabled');
            }
        }
    </script>
</span>
