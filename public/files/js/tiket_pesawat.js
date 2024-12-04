let elNavIcon = document.getElementById("headerIcon");
let elNavIconOpened = document.getElementById("headerIconOpened");
let sideNav = document.getElementById("sideNav");

document.addEventListener("click", (e) => {
    if (e.target.matches("#headerIcon") && !e.target.matches("#sideNav")) {
        sideNav.classList.toggle("mobileActive");
    } else if (!e.target.matches("#sideNav")) {
        sideNav.classList.remove("mobileActive");
    }
});
