# How it works

The `color-options.json` file is used to define settings for color customization in the theme. It allows you to control the generation of color shades for specific colors defined in the `theme.json` file.

## Structure

The file contains a JSON object where each key is a color slug matching a color in the `theme.json` file. The value of each key is an object with the following properties:

* `generateShades` (boolean): Indicates whether to generate color shades for this color. If set to `true`, shades from 100 to 900 will be generated, with the base color being the specified `baseShade` or the default shade (500) if not provided.
* `baseShade` (integer, optional): Specifies the base shade for the color. The base color from `theme.json` will be assigned to this shade. Default value is 500 if not provided.

## Example

Suppose you have the following color entry in your `theme.json` file:

{% code title="theme.json" %}
```json
{
  "name": "Primary",
  "slug": "primary",
  "color": "#5A189A"
}
```
{% endcode %}

To configure the color options for the "Primary" color, you need to use the color slug ("primary") in the `color-options.json` file:

{% code title="/options/color-options.php" %}
```json
{
  "primary": {
    "generateShades": true,
    "baseShade": 500
  }
}
```
{% endcode %}

In this example, the "Primary" color is set to generate shades from 100 to 950, with the base shade being 500.

{% hint style="warning" %}
Make sure to use the correct **color slug** from the theme.json file when configuring color options in the color-options.json file.
{% endhint %}

