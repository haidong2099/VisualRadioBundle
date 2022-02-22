# Visual Radio Bundle

This is a small extension for Contao to display radio buttons with images.

## Requirements

Contao >4.9 (tested up to 4.13)

## Install

`composer require guave/visualradio-bundle`

## Usage

Add the visual radio as a field. Required are the following:

- the templates as an array for options (without `ce_`)
- `eval['imagePath']` is a path within your webroot
- `eval['imageExt']` is the file extension of your images

```PHP
$GLOBALS['TL_DCA']['tl_content']['fields']['visualradio'] = [
    'inputType' => 'visualradio',
    'options' => [
        '2col-text',
        '1col-img'
    ],
    'eval' => [
        'imagePath' => 'files/content-elements/images',
        'imageExt' => '.jpg',
    ],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
];
```
