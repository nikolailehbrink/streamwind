// Navigation toggle

window.addEventListener("DOMContentLoaded", function () {
  let main_navigation = document.querySelector("#primary-menu");
  if (main_navigation) {
    document
      .querySelector("#primary-menu-toggle")
      .addEventListener("click", function (e) {
        e.preventDefault();
        main_navigation.classList.toggle("hidden");
      });
  }
});
