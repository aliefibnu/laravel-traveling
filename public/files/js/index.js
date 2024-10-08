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
    // console.log(videoRect+isVisible)
  });
});

// ! Algoriitma animasi slider gambar
let slider = document.getElementById("slider");
let isDown = false;
let startX, scrollLeft;

slider.addEventListener("mousedown", (e) => {
  e.preventDefault();
  isDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
  slider.classList.add("active");
});

slider.addEventListener("mouseleave", () => {
  isDown = false;
  slider.classList.remove("active");
});

slider.addEventListener("mouseup", () => {
  isDown = false;
  slider.classList.remove("active");
});

slider.addEventListener("mousemove", (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 6; //adjust this value to change the speed
  slider.scrollLeft = scrollLeft - walk;
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
