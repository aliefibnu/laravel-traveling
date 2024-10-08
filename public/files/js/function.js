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
