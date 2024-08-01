const swiper = new Swiper(".swiper", {
  loop: true,

  navigation: {
    nextEl: ".reviews__btn-right",
    prevEl: ".reviews__btn-left",
  },
});

/////////////////////////////////////////////////////////

document.querySelector(".burger").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector(".mobile-menu").classList.toggle("open");
  document.querySelector(".header__logo").classList.toggle("hidden");
  document.querySelector("main").classList.toggle("hidden");
  document.querySelector("footer").classList.toggle("hidden");
});

// ///////////////////////////////////////////////////////
document.addEventListener("DOMContentLoaded", function () {
  // Убедитесь, что SmoothScroll загружен
  if (
    window.location.pathname === "/page-home.php" ||
    window.location.pathname === "/"
  ) {
    if (typeof SmoothScroll !== "undefined") {
      var scroll = new SmoothScroll(".hero__btn", {
        speed: 2800, // Скорость прокрутки в миллисекундах
        speedAsDuration: true,
      });

      document
        .querySelector(".hero__btn")
        .addEventListener("click", function (event) {
          event.preventDefault();
          scroll.animateScroll(document.querySelector("#feedback"));
        });

      document
        .querySelector(".hero__btn-2")
        .addEventListener("click", function (event) {
          event.preventDefault();
          scroll.animateScroll(document.querySelector("#feedback"));
        });

      document
        .querySelector(".unique__btn")
        .addEventListener("click", function (event) {
          event.preventDefault();
          scroll.animateScroll(document.querySelector("#feedback"));
        });
    } else {
      console.error("SmoothScroll is not loaded.");
    }
  }
});

// //////////////////////////////////////////////////////////////////
