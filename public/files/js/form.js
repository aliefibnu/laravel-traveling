document.addEventListener("DOMContentLoaded", function () {
    let invalidForm,
        radios,
        inputs_a,
        textarea,
        select,
        inputs,
        fields,
        clickedOutside;
    invalidForm = document.querySelectorAll("div.field.is-invalid");
    radios = document.querySelectorAll('input[name="gender"]');
    inputs_a = document.querySelectorAll(".field > input");
    textarea = document.querySelectorAll(".field > textarea");
    select = document.querySelectorAll(".field > select");
    inputs = [...inputs_a, ...textarea, ...select];
    invalidForm.forEach((element) => {
        element.addEventListener("click", (x) => {
            element.classList.remove("is-invalid");
        });
    });
    inputs.forEach((input) => {
        input.addEventListener("click", (x) => {
            document.querySelectorAll(`i.labelActive`).forEach((i) => {
                i.classList.remove("labelActive");
            });
            document
                .querySelectorAll(`label[for="${x.target.id}"] > i`)[0]
                .classList.add("labelActive");
        });
    });
    document.addEventListener("click", function (event) {
        fields = document.querySelectorAll(".field");
        clickedOutside = true;

        fields.forEach(function (field) {
            if (field.contains(event.target)) {
                clickedOutside = false;
            }
        });

        if (clickedOutside) {
            document.querySelectorAll(`i.labelActive`).forEach((i) => {
                i.classList.remove("labelActive");
            });
        }
    });
    radios.forEach((radio) => {
        radio.addEventListener("change", function () {
            // Hapus class dari semua label
            radios.forEach((r) => {
                const label = document.querySelector(`label[for="${r.id}"]`);
                label.classList.remove("label-radio-checked");
            });

            // Tambah class pada label radio yang dipilih
            const selectedLabel = document.querySelector(
                `label[for="${this.id}"]`
            );
            selectedLabel.classList.add("label-radio-checked");
        });
    });
});
