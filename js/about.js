document.addEventListener("DOMContentLoaded", function () {
  const targetClasses = [
    ".fade-up-after",
    ".fade-up",
    ".right-fade",
    ".fade-up-opacity",
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
});
