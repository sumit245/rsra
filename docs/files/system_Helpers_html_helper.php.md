# system\Helpers\html_helper.php

- Path: `system\Helpers\html_helper.php`
- Type: PHP
- Size: 16009 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Unordered List
Generates an HTML unordered list from an single or
multi-dimensional array.
@param mixed $attributes HTML attributes string, array, object

Ordered List
Generates an HTML ordered list from an single or multi-dimensional array.
@param mixed $attributes HTML attributes string, array, object

Generates the list
Generates an HTML ordered list from an single or multi-dimensional array.
@param mixed $list
@param mixed $attributes string, array, object

Image
Generates an image element
@param array|string        $src        Image source URI, or array of attributes and values
@param bool                $indexPage  Whether to treat $src as a routed URI string
@param array|object|string $attributes Additional HTML attributes

Image (data)
Generates a src-ready string from an image using the "data:" protocol
@param string      $path Image source path
@param string|null $mime MIME type to use, or null to guess

Doctype
Generates a page document type declaration
Examples of valid options: html5, xhtml-11, xhtml-strict, xhtml-trans,
xhtml-frame, html4-strict, html4-trans, and html4-frame.
All values are saved in the doctypes config file.
@param string $type The doctype to be generated

Script
Generates link to a JS file
@param array|string $src       Script source or an array of attributes
@param bool         $indexPage Should indexPage be added to the JS path

Link
Generates link to a CSS file
@param mixed $href      Stylesheet href or an array
@param bool  $indexPage should indexPage be added to the CSS path.

Video
Generates a video element to embed videos. The video element can
contain one or more video sources
@param mixed  $src                Either a source string or an array of sources
@param string $unsupportedMessage The message to display if the media tag is not supported by the browser
@param string $attributes         HTML attributes

Audio
Generates an audio element to embed sounds
@param mixed  $src                Either a source string or an array of sources
@param string $unsupportedMessage The message to display if the media tag is not supported by the browser.
@param string $attributes         HTML attributes

Generate media based tag
@param string $unsupportedMessage The message to display if the media tag is not supported by the browser.

Source
Generates a source element that specifies multiple media resources
for either audio or video element
@param string $src        The path of the media resource
@param string $type       The MIME-type of the resource with optional codecs parameters
@param string $attributes HTML attributes

Track
Generates a track element to specify timed tracks. The tracks are
formatted in WebVTT format.
@param string $src The path of the .VTT file

Object
Generates an object element that represents the media
as either image or a resource plugin such as audio, video,
Java applets, ActiveX, PDF and Flash
@param string $data       A resource URL
@param string $type       Content-type of the resource
@param string $attributes HTML attributes

Param
Generates a param element that defines parameters
for the object element.
@param string $name       The name of the parameter
@param string $value      The value of the parameter
@param string $type       The MIME-type
@param string $attributes HTML attributes

Embed
Generates an embed element
@param string $src        The path of the resource to embed
@param string $type       MIME-type
@param string $attributes HTML attributes

Test the protocol of a URI.
@return false|int

Provide space indenting.

## References

**Database Tables (inferred)**
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\html_helper.php`

**Functions/Methods**:
- `ul(array $list, $attributes = '')`
- `ol(array $list, $attributes = '')`
- `_list(string $type = 'ul', $list = [], $attributes = '', int $depth = 0)`
- `img($src = '', bool $indexPage = false, $attributes = '')`
- `img_data(string $path, ?string $mime = null)`
- `doctype(string $type = 'html5')`
- `script_tag($src = '', bool $indexPage = false)`
- `link_tag($href = '', string $rel = 'stylesheet', string $type = 'text/css', string $title = '', string $media = '', bool $indexPage = false, string $hreflang = '')`
- `video($src, string $unsupportedMessage = '', string $attributes = '', array $tracks = [], bool $indexPage = false)`
- `audio($src, string $unsupportedMessage = '', string $attributes = '', array $tracks = [], bool $indexPage = false)`
- `_media(string $name, array $types = [], string $unsupportedMessage = '', string $attributes = '', array $tracks = [])`
- `source(string $src, string $type = 'unknown', string $attributes = '', bool $indexPage = false)`
- `track(string $src, string $kind, string $srcLanguage, string $label)`
- `object(string $data, string $type = 'unknown', string $attributes = '', array $params = [], bool $indexPage = false)`
- `param(string $name, string $value, string $type = 'ref', string $attributes = '')`
- `embed(string $src, string $type = 'unknown', string $attributes = '', bool $indexPage = false)`
- `_has_protocol(string $url)`
- `_space_indent(int $depth = 2)`

