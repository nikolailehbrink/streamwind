# StreamWind

StreamWind is a modern, responsive and user-friendly boilerplate WordPress theme based on the popular TailwindCSS framework.

![Header Image](screenshot.png)

## Features

- Based on [Tailwind CSS 3.3](https://tailwindcss.com/)
- Dark Mode
- theme.json (Version 2) Support
- Custom design with responsive layouts
- Easy integration and customization
- Well documented and supported

## Requirements

- WordPress version 5.0 or higher
- PHP version 7.3 or higher

## Build Scripts

This theme uses a set of npm scripts to build and compile the CSS and JavaScript files. Here's a brief explanation of each script:

- `production:css-app`: Compiles and minifies the `app.css` file using TailwindCSS.
- `production:css-editor`: Compiles and minifies the `editor-style.css` file using TailwindCSS.
- `production:js`: Bundles and minifies the `app.js` file using esbuild.
- `dev:css-app`: Compiles the `app.css` file without minification using TailwindCSS.
- `dev:css-editor`: Compiles the `editor-style.css` file without minification using TailwindCSS.
- `dev:js`: Bundles the `app.js` file without minification using esbuild.
- `watch:css-app`: Compiles the `app.css` file and watches for changes using TailwindCSS.
- `watch:css-editor`: Compiles the `editor-style.css` file and watches for changes using TailwindCSS.
- `watch:js`: Bundles the `app.js` file and watches for changes using esbuild.
- `production`: Runs all production scripts concurrently (`production:css-app`, `production:css-editor`, and `production:js`).
- `dev`: Runs all development scripts concurrently (`dev:css-app`, `dev:css-editor`, and `dev:js`).
- `watch`: Runs all watch scripts concurrently (`watch:css-app`, `watch:css-editor`, and `watch:js`).

To run any of these scripts, use the `npm run` command followed by the script name. For example, to run the `watch` script, enter:

```bash
npm run watch
```

## Bundling with ESBuild

This theme uses [ESBuild](https://esbuild.github.io/) as its bundler to optimize and compile the JavaScript files. ESBuild is a fast and efficient bundler that provides various benefits, such as tree-shaking, minification, and more.

In this theme, ESBuild bundles the `resources/app.js` file into the `js/app.js` file. During the bundling process, ESBuild performs the following optimizations:

1. **Removal of comments:** All comments in the source file are removed, which reduces the file size and improves the loading time of the final JavaScript file.
2. **Including npm scripts:** All imported npm packages and their dependencies are bundled into the final `js/app.js` file. This ensures that all required scripts are included in a single output file, making it easier to manage and maintain.

To bundle your JavaScript files with ESBuild, use the provided npm scripts in the `package.json` file:

- For development, run: `npm run dev:js`
- For production, run: `npm run production:js`
- To watch for changes and recompile automatically, run: `npm run watch:js`

By using ESBuild, you can ensure that your JavaScript files are efficiently bundled and optimized for both development and production environments.

## NPM Packages Integration

This theme allows you to easily integrate external npm packages into your project. To install and use an npm package in your theme, follow these steps:

1. Install the desired npm package using the `npm install` command. For example, to install the `lodash` package, run:

```bash
npm install lodash
```

2. Import the installed package in your `ressources/app.js` file. For instance, to import the `lodash` package, add the following line at the top of your `app.js` file:

```bash
import _ from 'lodash';
```

3. Use the package functions and features in your `ressources/app.js` file. For example, with `lodash`, you can use the `_.debounce` function:

```javascript
const debouncedFunction = _.debounce(() => {
  console.log("Debounced function executed");
}, 300);
```

By following these steps, you can seamlessly integrate and use any npm package in your theme, enhancing its functionality and providing additional features.

## Dark Mode

The dark mode functionality in this theme allows users to switch between light and dark modes. The initial mode is set based on the user's system preferences. If the user manually changes the setting using the dark mode toggle, this setting will be stored in local storage and will persist across page reloads.

The dark mode feature works as follows:

1. Upon initial page load, the script checks if a dark mode setting is stored in local storage.
2. If a setting is stored in local storage, the dark mode is activated or deactivated accordingly.
3. If no setting is stored in local storage, the dark mode is set based on the user's system preferences.
4. An event listener is added to listen for changes in the user's system preferences and adjusts the dark mode accordingly if the user has not manually changed the setting.
5. The user can manually change the dark mode using the dark mode toggle. This change will be stored in local storage and will persist across page reloads.
