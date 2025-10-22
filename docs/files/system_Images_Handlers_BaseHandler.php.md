# system\Images\Handlers\BaseHandler.php

- Path: `system\Images\Handlers\BaseHandler.php`
- Type: PHP
- Size: 20064 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base image handling implementation

Configuration settings.
@var Images

The image/file instance
@var Image

Whether the image file has been confirmed.
@var bool

Image width.
@var int

Image height.
@var int

File permission mask.
@var int

X-axis.
@var int|null

Y-axis.
@var int|null

Master dimensioning.
@var string

Default options for text watermarking.
@var array

Image types with support for transparency.
@var array

Temporary image used by the different engines.
@var resource|null

Constructor.
@param Images|null $config

Sets another image for this handler to work on.
Keeps us from needing to continually instantiate the handler.
@return $this

Make the image resource object if needed

Returns the image instance.
@return Image

Verifies that a file has been supplied and it is an image.
@throws ImageException
@return Image The image instance

Returns the temporary image used during the image processing.
Good for extending the system or doing things this library
is not intended to do.
@return resource

Load the temporary image used during the image processing.
Some functions e.g. save() will only copy and not compress
your image otherwise.
@return $this

Resize the image
@param bool $maintainRatio If true, will get the closest match possible while keeping aspect ratio true.
@return BaseHandler

Crops the image to the desired height and width. If one of the height/width values
is not provided, that value will be set the appropriate value based on offsets and
image dimensions.
@param int|null $x X-axis coord to start cropping from the left of image
@param int|null $y Y-axis coord to start cropping from the top of image
@return $this

Changes the stored image type to indicate the new file format to use when saving.
Does not touch the actual resource.
@param int $imageType A PHP imageType constant, e.g. https://www.php.net/manual/en/function.image-type-to-mime-type.php
@return $this

Rotates the image on the current canvas.
@return $this

Flattens transparencies, default white background
@return $this

Handler-specific method to flattening an image's transparencies.
@return $this
@internal

Handler-specific method to handle rotating an image in 90 degree increments.
@return mixed

Flips an image either horizontally or vertically.
@param string $dir Either 'vertical' or 'horizontal'
@return $this

Handler-specific method to handle flipping an image along its
horizontal or vertical axis.
@return $this

Overlays a string of text over the image.
Valid options:
 - color         Text Color (hex number)
 - shadowColor   Color of the shadow (hex number)
 - hAlign        Horizontal alignment: left, center, right
 - vAlign        Vertical alignment: top, middle, bottom
 - hOffset
 - vOffset
 - fontPath
 - fontSize
 - shadowOffset
@return $this

Handler-specific method for overlaying text on an image.

Handles the actual resizing of the image.
@return $this

Crops the image.
@return $this

Return image width.
@return int

Return the height of an image.
@return int

Reads the EXIF information from the image and modifies the orientation
so that displays correctly in the browser. This is especially an issue
with images taken by smartphones who always store the image up-right,
but set the orientation flag to display it correctly.
@param bool $silent If true, will ignore exceptions when PHP doesn't support EXIF.
@return $this

Retrieve the EXIF information from the image, if possible. Returns
an array of the information, or null if nothing can be found.
EXIF data is only supported fr JPEG & TIFF formats.
@param string|null $key    If specified, will only return this piece of EXIF data.
@param bool        $silent If true, will not throw our own exceptions.
@throws ImageException
@return mixed

Combine cropping and resizing into a single command.
Supported positions:
 - top-left
 - top
 - top-right
 - left
 - center
 - right
 - bottom-left
 - bottom
 - bottom-right
@param int $height
@return BaseHandler

Calculate image aspect ratio.
@param float|int      $width
@param float|int|null $height
@param float|int      $origWidth
@param float|int      $origHeight

Based on the position, will determine the correct x/y coords to
crop the desired portion from the image.
@param float|int $width
@param float|int $height
@param float|int $origWidth
@param float|int $origHeight
@param string    $position

Get the version of the image library in use.
@return string

Saves any changes that have been made to file.
Example:
   $image->resize(100, 200, true)
         ->save($target);
@return bool

Does the driver-specific processing of the image.
@return mixed

Provide access to the Image class' methods if they don't exist
on the handler itself.
@return mixed

Re-proportion Image Width/Height
When creating thumbs, the desired width/height
can end up warping the image due to an incorrect
ratio between the full-sized image and the thumb.
This function lets us re-proportion the width/height
if users choose to maintain the aspect ratio when resizing.

Return image width.
accessor for testing; not part of interface
@return int

Return image height.
accessor for testing; not part of interface
@return int

## References

**Database Tables (inferred)**
- `needing`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Images\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Images\Handlers\BaseHandler implements ImageHandlerInterface`

**Functions/Methods**:
- `__construct($config = null)`
- `withFile(string $path)`
- `ensureResource()`
- `getFile()`
- `image()`
- `getResource()`
- `withResource()`
- `resize(int $width, int $height, bool $maintainRatio = false, string $masterDim = 'auto')`
- `crop(?int $width = null, ?int $height = null, ?int $x = null, ?int $y = null, bool $maintainRatio = false, string $masterDim = 'auto')`
- `convert(int $imageType)`
- `rotate(float $angle)`
- `flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_rotate(int $angle)`
- `flip(string $dir = 'vertical')`
- `_flip(string $direction)`
- `text(string $text, array $options = [])`
- `_text(string $text, array $options = [])`
- `_resize(bool $maintainRatio = false)`
- `_crop()`
- `_getWidth()`
- `_getHeight()`
- `reorient(bool $silent = false)`
- `getEXIF(?string $key = null, bool $silent = false)`
- `fit(int $width, ?int $height = null, string $position = 'center')`
- `calcAspectRatio($width, $height = null, $origWidth = 0, $origHeight = 0)`
- `calcCropCoords($width, $height, $origWidth, $origHeight, $position)`
- `getVersion()`
- `save(?string $target = null, int $quality = 90)`
- `process(string $action)`
- `__call(string $name, array $args = [])`
- `reproportion()`
- `getWidth()`
- `getHeight()`

