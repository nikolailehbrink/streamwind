# 📦 NPM Packages Integration

This theme allows you to easily integrate external npm packages into your project. To install and use an npm package in your theme, follow these steps:

1. Install the desired npm package using the `npm install` command. For example, to install the `lodash` package, run:

```bash
npm install lodash
```

2. Import the installed package in your `ressources/app.js` file. For instance, to import the `lodash` package, add the following line at the top of your `app.js` file:

```javascript
import _ from 'lodash';
```

3. Use the package functions and features in your `ressources/app.js` file. For example, with `lodash`, you can use the `_.debounce` function:

```javascript
const debouncedFunction = _.debounce(() => {
  console.log("Debounced function executed");
}, 300);
```

By following these steps, you can seamlessly integrate and use any npm package in your theme, enhancing its functionality and providing additional features.
