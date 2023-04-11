# Remove the Dark Mode

To remove the Tailwind dark mode functionality from the StreamWind theme, follow these steps:

1. Open the `app.js` file and remove the following functions and code blocks:
   * `setThemeBasedOnSystemPreference` function
   * Code block that sets the initial theme
   * Dark mode media query event listener
   * Dark mode toggle event listener
2. Remove any dark mode related styles from your CSS or remove the `dark:` variants in your Tailwind CSS classes.
3. Remove the dark mode toggle element from your HTML, which is typically identified by the ID `darkModeToggle`.
4. Remove  `darkMode: 'class',` from `tailwind.config.js`&#x20;
