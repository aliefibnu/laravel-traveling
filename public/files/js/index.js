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
const video = document.querySelectorAll("video#pauseEffect");
// ?  Logika kalau window di scroll
document.addEventListener("scroll", () => {
    video.forEach((element) => {
        const videoRect = element.getBoundingClientRect();
        const isVisible =
            videoRect.top <= window.innerHeight && videoRect.bottom >= 0;

        if (!isVisible && !video.paused) {
            element.pause();
        }
    });
});

// ! Animasi element memiliki transisi masuk dan keluar saat terlihat di layar
const elements = document.querySelectorAll(".animate");
document.addEventListener("scroll", () => {
    elements.forEach((element) => {
        const rect = element.getBoundingClientRect();
        const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;

        if (isVisible) {
            element.classList.add("animate-in");
        } else {
            element.classList.remove("animate-in");
        }
    });
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {
    if (!e.target.matches("#dropbtn")) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains("show")) {
            myDropdown.classList.remove("show");
        }
    }
};

//! Popup

let closeBtn = document.querySelectorAll(".closePupup")[0];
closeBtn.addEventListener("click", (x) => {
    closePopup();
});

//! Card Area
let cardWrapper = document.querySelectorAll(".c3-center")[0];
let cards = document.querySelectorAll(".card");

//? Atur button view details card
let divBtnView = document.createElement("div");
divBtnView.classList.add("div-btn");
let btnView = divBtnView.appendChild(document.createElement("button"));
let iconsView = btnView.appendChild(document.createElement("i"));
iconsView.className = "bi bi-eye-fill";
btnView.appendChild(document.createTextNode(" View More"));

//? Khusus Kartu Yg Center
cards[2].appendChild(divBtnView);
divBtnView.addEventListener("click", (e) => {
    showPopup();
});

//? Untuk Setiap Kartu
cards.forEach((elCard) => {
    elCard.addEventListener("click", (e) => {
        cards.forEach((card) => card.classList.remove("card-active"));
        elCard.classList.add("card-active");

        let activeCardIndex = Array.from(cards).indexOf(elCard);
        let offset =
            cards[0].offsetWidth * 2 - activeCardIndex * elCard.offsetWidth;

        elCard.appendChild(divBtnView);
        cardWrapper.style.marginLeft = `${offset}px`;
        settingPopupElement(
            panoramaLink[activeCardIndex],
            dataDestinasi[activeCardIndex].rating_number,
            dataDestinasi[activeCardIndex].judul,
            dataDestinasi[activeCardIndex].deskripsi,
            dataDestinasi[activeCardIndex].saran_waktu,
            dataDestinasi[activeCardIndex].harga,
            dataDestinasi[activeCardIndex].waktu_operasional
        );
    });
});

//? Global Rule
document.querySelectorAll(".content-center").forEach((x) => {
    x.style.marginTop =
        document.querySelectorAll("header")[0].offsetHeight + "px";
});
let activeCardIndex = Array.from(cards).findIndex((card) =>
    card.classList.contains("card-active")
);
settingPopupElement(
    panoramaLink[activeCardIndex],
    dataDestinasi[activeCardIndex].rating_number,
    dataDestinasi[activeCardIndex].judul,
    dataDestinasi[activeCardIndex].deskripsi,
    dataDestinasi[activeCardIndex].saran_waktu,
    dataDestinasi[activeCardIndex].harga,
    dataDestinasi[activeCardIndex].waktu_operasional
);
