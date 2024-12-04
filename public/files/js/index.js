// ! Algoriitma animasi teks Judul "New York"

// ? Deklarasi variabel
let elTitle = document.querySelectorAll("#home h1")[0];
let elAnchor = document.getElementById("anchor1");
let wrapperTitle = document.getElementById("wrapperTitle");
// ? Set default size untuk teks
elTitle.style.scale = `${(window.scrollY / 50) * 100 + 50}%`;
// ? Logika kalau window di scroll
document.addEventListener("scroll", (y) => {
    //. Pakai function yang ada di function.js
    updateSizeJudul();
});

// ! Algoriitma matikan video saat tidak terlihat

// ? Deklarasi variabel
const elVideo = document.getElementById("pauseEffect");
// ?  Logika kalau window di scroll
document.addEventListener("scroll", () => {
    const videoRect = elVideo.getBoundingClientRect();
    const isVisible =
        videoRect.top <= window.innerHeight && videoRect.bottom >= 0;

    if (!isVisible && !elVideo.paused) {
        elVideo.pause();
    }
});

//? When the user clicks on the button,toggle between hiding and showing the dropdown content
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

//? Close the dropdown if the user clicks outside of it
window.addEventListener("click", function (e) {
    if (!e.target.matches("#dropbtn")) {
        var myDropdown = document.getElementById("myDropdown");

        if (myDropdown.classList.contains("show")) {
            myDropdown.classList.remove("show");
        }
    }
});

//! Popup

let closeBtn = document.getElementById("closePopup");
closeBtn.addEventListener("click", (x) => {
    closePopup();
});

//! Mobile Navbar
//? Close the navBar if the user clicks outside of it
window.onclick = function (e) {
    if (
        !e.target.matches("#sideNav") &&
        !e.target.matches(".bi-list") &&
        !e.target.matches("#dropbtn")
    ) {
        if (isSideNavActive()) {
            navbarClose();
        }
    } else if (e.target.matches("#dropbtn")) {
        let dropdown = document.getElementById("dropDownContentMobile");
        if (isMobileDropdownActive()) {
            dropdown.classList.remove("show");
        } else {
            dropdown.classList.add("show");
        }
    }
};
document.getElementById("mobileHamburger").addEventListener("click", () => {
    navbarOpen();
});
document.getElementById("headerNav").addEventListener("click", () => {
    navbarClose();
});

//! Carding To Popup
const cards = document.querySelectorAll(".card");

cards.forEach((card, index) => {
    card.addEventListener("click", () => {
        settingPopupElement(
            panoramaLink[index],
            dataDestinasi[index].rating_number,
            dataDestinasi[index].judul,
            dataDestinasi[index].deskripsi,
            dataDestinasi[index].saran_waktu,
            dataDestinasi[index].harga,
            dataDestinasi[index].waktu_operasional
        );
        showPopup();
    });
});

//! Carding Scroll
document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    cardingScroll();
});

//? Global Rule
document.querySelectorAll(".content-center").forEach((x) => {
    x.style.marginTop =
        document.querySelectorAll("header")[0].offsetHeight + "px";
});
