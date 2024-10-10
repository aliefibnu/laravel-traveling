document.addEventListener("DOMContentLoaded", (x) => {
    let errorInput = document.querySelectorAll("input.input-error");
    errorInput.forEach((input) => {
        input.addEventListener("focus", (x) => {
            input.classList.remove("input-error");
            document.querySelectorAll(
                `.alert-${x.target.name}`
            )[0].style.display = "none";
        });
    });
});
