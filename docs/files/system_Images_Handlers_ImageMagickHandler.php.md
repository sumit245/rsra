# system\Images\Handlers\ImageMagickHandler.php

- Path: `system\Images\Handlers\ImageMagickHandler.php`
- Type: PHP
- Size: 14058 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class ImageMagickHandler
To make this library as compatible as possible with the broadest
number of installations, we do not use the Imagick extension,
but simply use the command line version.
hmm - the width & height accessors at the end use the imagick extension.
FIXME - This needs conversion & unit testing, to use the imagick extension

Stores image resource in memory.
@var string|null

Constructor.
@param Images $config
@throws ImageException

Handles the actual resizing of the image.
@throws Exception
@return ImageMagickHandler

Crops the image.
@throws Exception
@return bool|\CodeIgniter\Images\Handlers\ImageMagickHandler

Handles the rotation of an image resource.
Doesn't save the image, but replaces the current resource.
@throws Exception
@return $this

Flattens transparencies, default white background
@throws Exception
@return $this

Flips an image along it's vertical or horizontal axis.
@throws Exception
@return $this

Get driver version

Handles all of the grunt work of resizing, etc.
@throws Exception
@return array Lines of output from shell command

Saves any changes that have been made to file. If no new filename is
provided, the existing image is overwritten, otherwise a copy of the
file is made at $target.
Example:
   $image->resize(100, 200, true)
         ->save();

Get Image Resource
This simply creates an image resource handle
based on the type of image being processed.
Since ImageMagick is used on the cli, we need to
ensure we have a temporary file on the server
that we can use.
To ensure we can use all features, like transparency,
during the process, we'll use a PNG as the temp file type.
@throws Exception
@return string

Make the image resource object if needed
@throws Exception

Check if given image format is supported
@throws ImageException

Handler-specific method for overlaying text on an image.
@throws Exception

Return the width of an image.
@return int

Return the height of an image.
@return int

Reads the EXIF information from the image and modifies the orientation
so that displays correctly in the browser. This is especially an issue
with images taken by smartphones who always store the image up-right,
but set the orientation flag to display it correctly.
@param bool $silent If true, will ignore exceptions when PHP doesn't support EXIF.
@return $this

## References

**Database Tables (inferred)**
- `shell`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Images\Handlers\ImageMagickHandler.php`

**Classes**:
- `CodeIgniter\Images\Handlers\ImageMagickHandler extends BaseHandler`

**Functions/Methods**:
- `__construct($config = null)`
- `_resize(bool $maintainRatio = false)`
- `_crop()`
- `_rotate(int $angle)`
- `_flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_flip(string $direction)`
- `getVersion()`
- `process(string $action, int $quality = 100)`
- `save(?string $target = null, int $quality = 90)`
- `getResourcePath()`
- `ensureResource()`
- `supportedFormatCheck()`
- `_text(string $text, array $options = [])`
- `_getWidth()`
- `_getHeight()`
- `reorient(bool $silent = false)`

