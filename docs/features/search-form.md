# 🔍 Search form

The theme comes with integrated WordPress search functionality, making it easy for users to find content on your website. This powerful feature enhances user experience and allows visitors to easily locate relevant information within your site.

<figure><img src="../.gitbook/assets/image (1) (1).png" alt=""><figcaption></figcaption></figure>

## Default Search Form in the Header

By default, the search form is included in the `header.php` file, allowing users to access the search functionality from any page. This ensures a seamless browsing experience and enables quick access to the search feature.

## Customizing the Search Form

The theme includes a custom `searchform.php` file that can be used to modify and style the search form to match your site's design. You can customize the HTML structure of the form, add custom classes, and adjust the form's appearance to fit your desired aesthetics.

To use the integrated search functionality, simply add the `get_search_form()` function in your theme's template files where you want the search form to appear. This function automatically generates the necessary HTML and integrates with the WordPress search system.

For example, you can add the following code snippet to your `header.php` file to display the search form in the site header:

```php
<?php get_search_form(); ?>
```

This will generate a search form that allows users to enter their search query and submit it. The search results will be displayed on a dedicated search results page, typically using the `search.php` template file.
