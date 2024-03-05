<span>
    <button onclick="editForm()" class="btn btn-sm btn-dark rounded-3 px-3 fw-semibold text-decoration-none"
        id="editForm">
        Edit
    </button>

    <script>
        function editForm() {
            // let btn = document.getElementById('editForm');
            // btn.innerHTML = "Editing Mode";
            // btn.setAttribute('disabled', 'disabled');

            let inputFields = document.getElementsByClassName('editable');
            for (let items = 0; items < inputFields.length; items++) {
                inputFields[items].removeAttribute('disabled');
            }
        }
    </script>
</span>
