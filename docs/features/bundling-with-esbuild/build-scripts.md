# Build Scripts

This theme uses a set of npm scripts to build and compile the CSS and JavaScript files. Here's a brief explanation of each script:

## `production`&#x20;

Runs all production scripts concurrently:

* `production:css-app`: Compiles and minifies the `app.css` file using TailwindCSS.
* `production:css-editor`: Compiles and minifies the `editor-style.css` file using TailwindCSS.
* `production:js`: Bundles and minifies the `app.js` file using esbuild.

## `dev`

Runs all development scripts concurrently:

* `dev:css-app`: Compiles the `app.css` file without minification using TailwindCSS.
* `dev:css-editor`: Compiles the `editor-style.css` file without minification using TailwindCSS.
* `dev:js`: Bundles the `app.js` file without minification using esbuild.

## `watch`

Runs all watch scripts concurrently (`watch:css-app`, `watch:css-editor`, and `watch:js`).

* `watch:css-app`: Compiles the `app.css` file and watches for changes using TailwindCSS.
* `watch:css-editor`: Compiles the `editor-style.css` file and watches for changes using TailwindCSS.
* `watch:js`: Bundles the `app.js` file and watches for changes using esbuild.

To run any of these scripts, use the `npm run` command followed by the script name. For example, to run the `watch` script, enter:

```bash
npm run watch
```
