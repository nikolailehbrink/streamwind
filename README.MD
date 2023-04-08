# StreamWind 💨

StreamWind is a modern, responsive, and user-friendly boilerplate WordPress theme based on the popular TailwindCSS framework. Designed to cater to both inexperienced developers and seasoned pros, this theme offers a wide range of features such as Dark Mode, search functionality, and much more. StreamWind makes it easy for anyone to dive into the world of WordPress themes and create a stunning website.

![Header Image](screenshot.png)

# Getting Started

Welcome to StreamWind! In this quick guide, I'll walk you through the essential steps to set up your environment and start developing your dream website right away. So, buckle up and let's dive in! 🚀

## Prerequisites 🛠️

Before you start using StreamWind, make sure you have [Node.js](https://nodejs.org/) installed on your computer. If you haven't installed Node.js yet, visit the [official Node.js website](https://nodejs.org/en/download/) and download the appropriate version for your operating system. Then, follow the instructions provided by the installer to set up Node.js on your computer.

Once Node.js is successfully installed, you're ready to start using StreamWind and its numerous features. Enjoy developing! 🎉

## Step 1: Clone the Repository 📦

First things first, you'll want to clone the theme repository to your local machine. Fire up your terminal and run the following command:

```bash
git clone https://github.com/nikolailehbrink/streamwind.git
```

Now you have a copy of StreamWind in your workspace!

## Step 2: Remove `.git` 🧹

To make this project your own, you'll need to remove any traces of the original `.git` directory. This ensures that you can initialize a fresh new Git repository for your project.

To remove the `.git` folder, follow the OS-specific instructions below:

### For macOS and Linux users:

```bash
cd streamwind
rm -rf .git
```

### For Windows users:

```powershell
cd streamwind
rmdir .git -Recurse -Force
```

Congratulations! You've successfully detached your project from the original Git history.

## Step 3: Install Dependencies 🧪

Before you can start developing, you'll need to install all the required packages and dependencies. Simply run the following command in your terminal:

```bash
npm install
```

This command will install everything you need for a smooth development experience.

## Step 4: Start Developing 🚧

Now that you've set up your environment, it's time to start the development process. To bundle all files and launch the development server, run the following command:

```bash
npm run watch
```

This will automatically watch for changes in your source files and rebuild the project accordingly.

And there you have it! You're all set to start crafting your amazing WordPress website using StreamWind. Happy coding! 🎉

## Step 5: Build for Production 🏗️

Once you've finished developing your theme, it's time to prepare it for the big world out there. Building for production ensures that your theme is optimized, fast, and ready to impress your visitors.

To build your theme for production, simply run the following command in your terminal:

```bash
npm run production
```

This command will optimize your code, minify assets, and bundle everything up for a production-ready deployment. The output files will be placed in the corresponding folders that the theme then enqeues.

And that's it! You've successfully built your WordPress theme for production using StreamWind.🎉

# Requirements

- WordPress version 5.0 or higher
- PHP version 7.3 or higher

# Features 🌟

StreamWind comes packed with a multitude of features that cater to both beginners and experienced developers. These features have been carefully selected and implemented to provide a solid foundation for creating an engaging and unique WordPress theme. In the following sections, we'll delve into the key features of StreamWind.

## Dark Mode

The dark mode functionality in this theme allows users to switch between light and dark modes. The initial mode is set based on the user's system preferences. If the user manually changes the setting using the dark mode toggle, this setting will be stored in local storage and will persist across page reloads.

The dark mode feature works as follows:

1. Upon initial page load, the script checks if a dark mode setting is stored in local storage.
2. If a setting is stored in local storage, the dark mode is activated or deactivated accordingly.
3. If no setting is stored in local storage, the dark mode is set based on the user's system preferences.
4. An event listener is added to listen for changes in the user's system preferences and adjusts the dark mode accordingly if the user has not manually changed the setting.
5. The user can manually change the dark mode using the dark mode toggle. This change will be stored in local storage and will persist across page reloads.

## Build Scripts

This theme uses a set of npm scripts to build and compile the CSS and JavaScript files. Here's a brief explanation of each script:

- `production`: Runs all production scripts concurrently (`production:css-app`, `production:css-editor`, and `production:js`).

  - `production:css-app`: Compiles and minifies the `app.css` file using TailwindCSS.
  - `production:css-editor`: Compiles and minifies the `editor-style.css` file using TailwindCSS.
  - `production:js`: Bundles and minifies the `app.js` file using esbuild.

- `dev`: Runs all development scripts concurrently (`dev:css-app`, `dev:css-editor`, and `dev:js`).

  - `dev:css-app`: Compiles the `app.css` file without minification using TailwindCSS.
  - `dev:css-editor`: Compiles the `editor-style.css` file without minification using TailwindCSS.
  - `dev:js`: Bundles the `app.js` file without minification using esbuild.

- `watch`: Runs all watch scripts concurrently (`watch:css-app`, `watch:css-editor`, and `watch:js`).
  - `watch:css-app`: Compiles the `app.css` file and watches for changes using TailwindCSS.
  - `watch:css-editor`: Compiles the `editor-style.css` file and watches for changes using TailwindCSS.
  - `watch:js`: Bundles the `app.js` file and watches for changes using esbuild.

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
