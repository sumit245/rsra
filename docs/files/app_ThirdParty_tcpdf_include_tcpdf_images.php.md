# app\ThirdParty\tcpdf\include\tcpdf_images.php

- Path: `app\ThirdParty\tcpdf\include\tcpdf_images.php`
- Type: PHP
- Size: 11369 bytes

## Summary (from docblocks)

@file
This is a PHP class that contains static image methods for the TCPDF class.<br>
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.005

@class TCPDF_IMAGES
Static image methods used by the TCPDF class.
@package com.tecnick.tcpdf
@brief PHP class for generating PDF documents without requiring external extensions.
@version 1.0.005
@author Nicola Asuni - info@tecnick.com

Array of hinheritable SVG properties.
@since 5.0.000 (2010-05-02)
@public static

@var string[]

Return the image type given the file name or array returned by getimagesize() function.
@param string $imgfile image file name
@param array $iminfo array of image information returned by getimagesize() function.
@return string image type
@since 4.8.017 (2009-11-27)
@public static

Set the transparency for the given GD image.
@param resource $new_image GD image object
@param resource $image GD image object.
@return resource GD image object $new_image
@since 4.9.016 (2010-04-20)
@public static

Convert the loaded image to a PNG and then return a structure for the PDF creator.
This function requires GD library and write access to the directory defined on K_PATH_CACHE constant.
@param resource $image Image object.
@param string $tempfile Temporary file name.
return image PNG image object.
@since 4.9.016 (2010-04-20)
@public static

Convert the loaded image to a JPEG and then return a structure for the PDF creator.
This function requires GD library and write access to the directory defined on K_PATH_CACHE constant.
@param resource $image Image object.
@param int $quality JPEG quality.
@param string $tempfile Temporary file name.
return array|false image JPEG image object.
@public static

Extract info from a JPEG file without using the GD library.
@param string $file image file to parse
@return array|false structure containing the image data
@public static

Extract info from a PNG file without using the GD library.
@param string $file image file to parse
@return array|false structure containing the image data
@public static

## References

**Database Tables (inferred)**
- `memory`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\include\tcpdf_images.php`

**Classes**:
- `that`
- `TCPDF_IMAGES`
- `for`
- `TCPDF_IMAGES`

**Functions/Methods**:
- `getImageFileType($imgfile, $iminfo=array()`
- `setGDImageTransparency($new_image, $image)`
- `_toPNG($image, $tempfile)`
- `_toJPEG($image, $quality, $tempfile)`
- `_parsejpeg($file)`
- `_parsepng($file)`

