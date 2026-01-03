# system\Images\Handlers\GDHandler.php

- Path: `system\Images\Handlers\GDHandler.php`
- Type: PHP
- Size: 15346 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Image handler for GD package

Constructor.
@param Images|null $config
@throws ImageException

Handles the rotation of an image resource.
Doesn't save the image, but replaces the current resource.

Flattens transparencies
@return $this

Flips an image along it's vertical or horizontal axis.
@return $this

Get GD version
@return mixed

Resizes the image.
@return GDHandler

Crops the image.
@return GDHandler

Handles all of the grunt work of resizing, etc.
@return $this

Saves any changes that have been made to file. If no new filename is
provided, the existing image is overwritten, otherwise a copy of the
file is made at $target.
Example:
   $image->resize(100, 200, true)
         ->save();

Create Image Resource
This simply creates an image resource handle
based on the type of image being processed
@return bool|resource

Make the image resource object if needed

Check if image type is supported and return image resource
@param string $path      Image path
@param int    $imageType Image type
@throws ImageException
@return bool|resource

Add text overlay to an image.

Handler-specific method for overlaying text on an image.
@param bool $isShadow Whether we are drawing the dropshadow or actual text

Return image width.
@return int

Return image height.
@return int

## References

**Database Tables (inferred)**
- `text`

## Symbols

# Symbols

**Files documented**: 1

## `system\Images\Handlers\GDHandler.php`

**Classes**:
- `CodeIgniter\Images\Handlers\GDHandler extends BaseHandler`

**Functions/Methods**:
- `__construct($config = null)`
- `_rotate(int $angle)`
- `_flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_flip(string $direction)`
- `getVersion()`
- `_resize(bool $maintainRatio = false)`
- `_crop()`
- `process(string $action)`
- `save(?string $target = null, int $quality = 90)`
- `createImage(string $path = '', string $imageType = '')`
- `ensureResource()`
- `getImageResource(string $path, int $imageType)`
- `_text(string $text, array $options = [])`
- `textOverlay(string $text, array $options = [], bool $isShadow = false)`
- `_getWidth()`
- `_getHeight()`

