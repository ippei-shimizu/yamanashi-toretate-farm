document.addEventListener("DOMContentLoaded", function () {
  const loading = document.getElementById("loading");
  const loadingBorder = loading.querySelector(".loading-border");
  const loadingIcon = loading.querySelector(".loading-icon");
  const loadingLogo = loading.querySelector(".loading-logo");
  const body = document.body;
  const fvImgLeft = document.querySelector(".fv-img-left");

  gsap.to(loadingBorder, { delay: 0.2, duration: 1, y: 0 });
  gsap.to(loadingIcon, { delay: 2, duration: 1, opacity: 1 });
  gsap.to([loadingBorder, loadingIcon], { delay: 3, duration: 1, opacity: 0 });
  gsap.to(loadingLogo, { delay: 4.4, duration: 1, opacity: 1 });
  gsap.to(loading, {
    delay: 6.4,
    duration: 0.5,
    opacity: 0,
    onComplete: () => {
      setTimeout(() => {
        loading.style.zIndex = "-1000";
        body.style.overflow = "initial";
      }, 1400);
    },
  });
  gsap.to(fvImgLeft, { delay: 6.8, duration: 1, x: 0 });

  const swiper = new Swiper(".swiper-container", {
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    loop: true,
    speed: 1200,
  });
  const swiperVegetable = new Swiper(".swiper-vegetable", {
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    speed: 800,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  new Swiper(".swiper-note", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
      },
      800: {
        slidesPerView: 2.5,
        spaceBetween: 20,
      },
    },
  });
});
