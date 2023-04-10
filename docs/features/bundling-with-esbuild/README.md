# 🔗 Bundling with ESBuild

<figure><img src="../../.gitbook/assets/image (4).png" alt=""><figcaption></figcaption></figure>

This theme uses [ESBuild](https://esbuild.github.io/) as its bundler to optimize and compile the JavaScript files. ESBuild is a fast and efficient bundler that provides various benefits, such as tree-shaking, minification, and more.

In this theme, ESBuild bundles the `resources/app.js` file into the `js/app.js` file. During the bundling process, ESBuild performs the following optimizations:

1. **Removal of comments:** All comments in the source file are removed, which reduces the file size and improves the loading time of the final JavaScript file.
2. **Including npm scripts:** All imported npm packages and their dependencies are bundled into the final `js/app.js` file. This ensures that all required scripts are included in a single output file, making it easier to manage and maintain.

To bundle your JavaScript files with ESBuild, use the provided npm scripts in the `package.json` file:

* For development, run: `npm run dev:js`
* For production, run: `npm run production:js`
* To watch for changes and recompile automatically, run: `npm run watch:js`

By using ESBuild, you can ensure that your JavaScript files are efficiently bundled and optimized for both development and production environments.
