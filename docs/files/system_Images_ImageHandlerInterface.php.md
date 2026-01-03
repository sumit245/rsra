# system\Images\ImageHandlerInterface.php

- Path: `system\Images\ImageHandlerInterface.php`
- Type: PHP
- Size: 3888 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior of an Image handler

Resize the image
@param bool $maintainRatio If true, will get the closest match possible while keeping aspect ratio true.
@return $this

Crops the image to the desired height and width. If one of the height/width values
is not provided, that value will be set the appropriate value based on offsets and
image dimensions.
@param int|null $x X-axis coord to start cropping from the left of image
@param int|null $y Y-axis coord to start cropping from the top of image
@return $this

Changes the stored image type to indicate the new file format to use when saving.
Does not touch the actual resource.
@param int $imageType A PHP imagetype constant, e.g. https://www.php.net/manual/en/function.image-type-to-mime-type.php
@return $this

Rotates the image on the current canvas.
@return $this

Flattens transparencies, default white background
@return $this

Reads the EXIF information from the image and modifies the orientation
so that displays correctly in the browser.
@return ImageHandlerInterface

Retrieve the EXIF information from the image, if possible. Returns
an array of the information, or null if nothing can be found.
@param string|null $key If specified, will only return this piece of EXIF data.
@return mixed

Flip an image horizontally or vertically
@param string $dir Direction to flip, either 'vertical' or 'horizontal'
@return $this

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

Saves any changes that have been made to file.
Example:
   $image->resize(100, 200, true)
         ->save($target);
@param string $target
@return bool

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Images\ImageHandlerInterface.php`

**Functions/Methods**:
- `resize(int $width, int $height, bool $maintainRatio = false, string $masterDim = 'auto')`
- `crop(?int $width = null, ?int $height = null, ?int $x = null, ?int $y = null, bool $maintainRatio = false, string $masterDim = 'auto')`
- `convert(int $imageType)`
- `rotate(float $angle)`
- `flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `reorient()`
- `getEXIF(?string $key = null)`
- `flip(string $dir = 'vertical')`
- `fit(int $width, int $height, string $position)`
- `text(string $text, array $options = [])`
- `save(?string $target = null, int $quality = 90)`

