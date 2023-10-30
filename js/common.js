document.addEventListener("DOMContentLoaded", function () {
  const spNavBtn = document.getElementById("spNavBtn");
  const overlay = document.getElementById("overlay");
  const elementsToAddClass = document.querySelectorAll(
    ".header-nav, .logo, .shop-link, .sp-nav-bar, .over-lay,.sp-nav-bg"
  );

  // id="spNavBtn"をクリックした際の処理
  spNavBtn.addEventListener("click", function () {
    elementsToAddClass.forEach((element) => {
      element.classList.toggle("is-open");
    });
  });

  // id="overlay"をクリックした際の処理
  overlay.addEventListener("click", function () {
    elementsToAddClass.forEach((element) => {
      if (element.classList.contains("is-open")) {
        element.classList.remove("is-open");
      }
    });
  });
});
