document.addEventListener("DOMContentLoaded", function () {
  const loading = document.getElementById("loading");
  const loadingIcon = loading.querySelector(".loading-icon");
  const loadingLogo = loading.querySelector(".loading-logo");
  const body = document.body;
  const fvImgLeft = document.querySelector(".fv-img-left");

  gsap.to(loadingIcon, { delay: .2, duration: 1, opacity: 1 });
  gsap.to(loadingIcon, { delay: 0.8, duration: 1, opacity: 1 });
  gsap.to(loadingLogo, { delay: 1.6, duration: 1, opacity: 1 });
  gsap.to(loading, {
    delay: 3.4,
    duration: 0.3,
    opacity: 0,
    onComplete: () => {
      setTimeout(() => {
        loading.style.zIndex = "-1000";
        body.style.overflow = "initial";
      }, 1200);
    },
  });
  gsap.to(fvImgLeft, { delay: 5.4, duration: 1.2, x: 0 });

  // scroll animation
  const targetClasses = [
    ".right-fade",
    ".opacity-fade",
    ".fade-up",
    ".fade-up-img",
    ".fade-up-num",
  ];

  targetClasses.forEach((targetClass) => {
    gsap.utils.toArray(targetClass).forEach((elem) => {
      ScrollTrigger.create({
        trigger: elem,
        start: "top bottom",
        onEnter: () => elem.classList.add("is-visit"),
        once: true,
      });
    });
  });
  // end

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

  function adjustClassBasedOnWidth() {
    const elementsToAdjust = [
        { selector: '.fv-title-sub', pcClass: 'opacity-fade', spClass: 'opacity-fade-sp' },
        { selector: '.fv-title-span', pcClass: 'right-fade', spClass: 'right-fade-sp' },
        { selector: '.fv-text', pcClass: 'opacity-fade', spClass: 'opacity-fade-sp' },
    ];

    elementsToAdjust.forEach(item => {
        const elements = document.querySelectorAll(item.selector);
        elements.forEach(element => {
            if (window.innerWidth > 800) {
                element.classList.add(item.pcClass);
                element.classList.remove(item.spClass);
            } else {
                element.classList.add(item.spClass);
                element.classList.remove(item.pcClass);
            }
        });
    });
}

function addVisitSpClassAfterDelay() {
  if (window.innerWidth <= 800) {
      gsap.delayedCall(7.2, () => {
          document.querySelectorAll('.opacity-fade-sp, .right-fade-sp').forEach(el => {
              el.classList.add('is-visit-sp');
          });
      });
  }
}

adjustClassBasedOnWidth();
addVisitSpClassAfterDelay();
window.addEventListener('resize', adjustClassBasedOnWidth);
window.addEventListener('resize', addVisitSpClassAfterDelay);

});
