document.addEventListener("DOMContentLoaded", function () {
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
    // autoplay: {
    //   delay: 8000,
    //   disableOnInteraction: false,
    // },
    speed: 800,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  new Swiper(".swiper-note", {
    slidesPerView: 2.5,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next", 
      prevEl: ".swiper-button-prev", 
    },
  });

});
