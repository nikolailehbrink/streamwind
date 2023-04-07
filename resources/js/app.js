/**
 * Set the theme based on the user's system preference.
 * This function adds or removes the 'dark' class from the document's root element
 * based on the user's system preference for dark mode.
 */
function setThemeBasedOnSystemPreference() {
  if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
}

// Set the initial theme based on local storage or system preference
if (localStorage.getItem("dark-mode") === "true") {
  document.documentElement.classList.add("dark");
} else if (localStorage.getItem("dark-mode") === "false") {
  document.documentElement.classList.remove("dark");
} else {
  setThemeBasedOnSystemPreference();
}

/**
 * Event listener for the 'DOMContentLoaded' event.
 *
 * This event listener waits for the DOM to be fully loaded and parsed before executing the
 * enclosed functions.
 */
window.addEventListener("DOMContentLoaded", function () {
  /**
   * Toggle the visibility of the primary menu.
   * If the primary menu exists, add a click event listener to the primary menu toggle button.
   * When clicked, the 'hidden' class is toggled to show or hide the menu.
   */
  let main_navigation = document.querySelector("#primary-menu");
  if (main_navigation) {
    document
      .querySelector("#primary-menu-toggle")
      .addEventListener("click", function (e) {
        e.preventDefault();
        main_navigation.classList.toggle("hidden");
      });
  }

  // Listen for changes in the user's system preference for dark mode
  const darkModeMediaQuery = window.matchMedia("(prefers-color-scheme: dark)");
  darkModeMediaQuery.addEventListener("change", () => {
    if (localStorage.getItem("dark-mode") === null) {
      setThemeBasedOnSystemPreference();
    }
  });

  /**
   * Event listener for the 'click' event on the dark mode toggle element.
   *
   * This event listener toggles the 'dark' class on the document's root element
   * and updates the local storage value for the dark mode setting.
   */
  document
    .getElementById("darkModeToggle")
    .addEventListener("click", function () {
      document.documentElement.classList.toggle("dark");

      if (document.documentElement.classList.contains("dark")) {
        localStorage.setItem("dark-mode", "true");
      } else {
        localStorage.setItem("dark-mode", "false");
      }
    });
});
