// ! Home Area
function updateSizeJudul() {
    if (window.scrollY < 50) {
        elTitle.classList.remove("hidden");
        wrapperTitle.appendChild(elTitle);
        elTitle.style.scale = `${(window.scrollY / 50) * 100 + 50}%`;
    } else if (window.scrollY > 50 && window.scrollY < 70) {
        elTitle.classList.remove("hidden");
        wrapperTitle.appendChild(elTitle);
        elTitle.style.scale = `${100 + 50}%`;
    } else if (window.scrollY > 70 && window.scrollY < 130) {
        elTitle.classList.remove("hidden");
        wrapperTitle.appendChild(elTitle);
        elTitle.style.scale = `${(window.scrollY / 70) * 100 + 50}%`;
    } else if (window.scrollY > 130) {
        elTitle.classList.add("hidden");
        setTimeout(function () {
            if (window.scrollY > 130) {
                elTitle.remove();
            }
        }, 500);
    }
    // document.title = window.scrollY;
}

// ! Tiket Pesawat Area

/**
 * @param {currentId}
 */
function showTable(currentId) {
    tiketPesawatController(data, currentId, elNavigation, elHeader, elTable);
}

/**
 * @param {HTMLElement} elNavigation
 * @param {String} id
 */
function changeNavTextColor(elNavigation, id) {
    for (let iNav = 0; iNav < elNavigation.length; iNav++) {
        if (elNavigation[iNav].id == id) {
            elNavigation[iNav].classList.add("navActive");
        } else {
            elNavigation[iNav].classList.remove("navActive");
        }
    }
}

/**
 * @param {HTMLElement} elHeader - Elemen header yang akan diubah teksnya.
 * @param {string} id - id yang aktif saat ini.
 */
function changeHeaderText(elHeader, id) {
    elHeader.innerText = data[id];
}

/**
 * @param {HTMLElement[]} elTable - Daftar tabel yang akan ditampilkan atau disembunyikan.
 * @param {string} id - id yang aktif saat ini.
 */
function changeTableDisplay(elTable, id) {
    for (let iNav = 0; iNav < elTable.length; iNav++) {
        if (elTable[iNav].id == id) {
            elTable[iNav].style.display = "block";
        } else {
            elTable[iNav].style.display = "none";
        }
    }
}

/**
 * Mengontrol tampilan tiket pesawat berdasarkan navigasi.
 *
 * @param {Object} data - Data konten.
 * @param {string} startContentId - ID konten awal yang akan ditampilkan.
 * @param {HTMLElement[]} elNavigation - Daftar elemen navigasi.
 */
function tiketPesawatController(
    data,
    startContentId,
    elNavigation,
    elHeader,
    elTable
) {
    for (let i = 0; i < elTable.length; i++) {
        elNavigation[i].addEventListener("click", (x) => {
            let id = x.target.id;
            changeHeaderText(elHeader, id);
            changeTableDisplay(elTable, id);
            changeNavTextColor(elNavigation, id);
        });

        let id = startContentId;
        changeHeaderText(elHeader, id);
        changeTableDisplay(elTable, id);
        changeNavTextColor(elNavigation, id);
    }
}

//! Popup Area
/**
 * @param {URL} panoramaLink
 * @param {String} judul
 * @param {String} deskripsi
 */
function settingPopupElement(
    panoramaLink,
    rating,
    judul,
    deskripsi,
    saranWaktu,
    harga,
    waktuOperasional
) {
    const elPanorama = document.querySelectorAll(".panoramaPopup")[0];
    const elJudulPopup = document.getElementById("judulPopup");
    const elParagrafPopup = document.getElementById("paragrafPopup");
    const elSaranWaktu = document.getElementById("saranWaktuPopup");
    const elWaktuOperasional = document.getElementById("waktuOperasionalPopup");
    const elHarga = document.getElementById("hargaPopup");
    const elRating = document.getElementById("rating");
    let textBintang = "";
    let rat = rating;
    while (textBintang.length < 5) {
        if (rat > 1) {
            textBintang += "★";
            rat = rat - 1;
        } else if (rat < 1 && rat >= 0.5) {
            textBintang += "✫";
            rat = 0;
        } else if (rat < 1 && rat > 0 && rat <= 0.5) {
            textBintang += "☆";
            rat = 0;
        } else {
            textBintang += "☆";
        }
    }
    elPanorama.style.backgroundImage = `url(${panoramaLink})`;
    elRating.innerText = `${textBintang} (${rating} / 5)`;
    elJudulPopup.textContent = judul;
    elParagrafPopup.textContent = deskripsi;
    elSaranWaktu.textContent = saranWaktu;
    elHarga.textContent = harga;
    elWaktuOperasional.textContent = waktuOperasional;
}

function showPopup() {
    let elPopup = document.getElementById("popup");
    elPopup.style.animation = "popupShow .5s";
    elPopup.style.display = "flex";
    document.body.style.overflowY = "hidden";
    document.getElementById("tablePopup").style.marginTop = `-${
        document.getElementById("ratingPopup").offsetHeight * 2
    }px`;
}

function closePopup() {
    let elPopup = document.getElementById("popup");
    elPopup.style.animation = "popupClose .5s";
    document.body.style.overflowY = "auto";
    setTimeout(() => {
        elPopup.style.display = "none";
    }, 500);
}
