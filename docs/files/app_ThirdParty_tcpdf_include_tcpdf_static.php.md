# app\ThirdParty\tcpdf\include\tcpdf_static.php

- Path: `app\ThirdParty\tcpdf\include\tcpdf_static.php`
- Type: PHP
- Size: 110475 bytes

## Summary (from docblocks)

@file
This is a PHP class that contains static methods for the TCPDF class.<br>
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.1.2

@class TCPDF_STATIC
Static methods used by the TCPDF class.
@package com.tecnick.tcpdf
@brief PHP class for generating PDF documents without requiring external extensions.
@version 1.1.1
@author Nicola Asuni - info@tecnick.com

Current TCPDF version.
@private static

String alias for total number of pages.
@public static

String alias for page number.
@public static

String alias for total number of pages in a single group.
@public static

String alias for group page number.
@public static

String alias for right shift compensation used to correctly align page numbers on the right.
@public static

Encryption padding string.
@public static

ByteRange placemark used during digital signature process.
@since 4.6.028 (2009-08-25)
@public static

Array page boxes names
@public static

Return the current TCPDF version.
@return string TCPDF version string
@since 5.9.012 (2010-11-10)
@public static

Return the current TCPDF producer.
@return string TCPDF producer string
@since 6.0.000 (2013-03-16)
@public static

Sets the current active configuration setting of magic_quotes_runtime (if the set_magic_quotes_runtime function exist)
@param boolean $mqr FALSE for off, TRUE for on.
@since 4.6.025 (2009-08-17)
@public static

Gets the current active configuration setting of magic_quotes_runtime (if the get_magic_quotes_runtime function exist)
@return int Returns 0 if magic quotes runtime is off or get_magic_quotes_runtime doesn't exist, 1 otherwise.
@since 4.6.025 (2009-08-17)
@public static

Check if the URL exist.
@param string $url URL to check.
@return boolean true if the URl exist, false otherwise.
@since 5.9.204 (2013-01-28)
@public static

Removes SHY characters from text.
Unicode Data:<ul>
<li>Name : SOFT HYPHEN, commonly abbreviated as SHY</li>
<li>HTML Entity (decimal): "&amp;#173;"</li>
<li>HTML Entity (hex): "&amp;#xad;"</li>
<li>HTML Entity (named): "&amp;shy;"</li>
<li>How to type in Microsoft Windows: [Alt +00AD] or [Alt 0173]</li>
<li>UTF-8 (hex): 0xC2 0xAD (c2ad)</li>
<li>UTF-8 character: chr(194).chr(173)</li>
</ul>
@param string $txt input string
@param boolean $unicode True if we are in unicode mode, false otherwise.
@return string without SHY characters.
@since (4.5.019) 2009-02-28
@public static

Get the border mode accounting for multicell position (opens bottom side of multicell crossing pages)
@param string|array|int $brd Indicates if borders must be drawn around the cell block. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul>or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param string $position multicell position: 'start', 'middle', 'end'
@param boolean $opencell True when the cell is left open at the page bottom, false otherwise.
@return array border mode array
@since 4.4.002 (2008-12-09)
@public static

Determine whether a string is empty.
@param string $str string to be checked
@return bool true if string is empty
@since 4.5.044 (2009-04-16)
@public static

Returns a temporary filename for caching object on filesystem.
@param string $type Type of file (name of the subdir on the tcpdf cache folder).
@param string $file_id TCPDF file_id.
@return string filename.
@since 4.5.000 (2008-12-31)
@public static

Add "\" before "\", "(" and ")"
@param string $s string to escape.
@return string escaped string.
@public static

Escape some special characters (&lt; &gt; &amp;) for XML output.
@param string $str Input string to convert.
@return string converted string
@since 5.9.121 (2011-09-28)
@public static

Creates a copy of a class object
@param object $object class object to be cloned
@return object cloned object
@since 4.5.029 (2009-03-19)
@public static

Output input data and compress it if possible.
@param string $data Data to output.
@param int $length Data length in bytes.
@since 5.9.086
@public static

Replace page number aliases with number.
@param string $page Page content.
@param array $replace Array of replacements (array keys are replacement strings, values are alias arrays).
@param int $diff If passed, this will be set to the total char number difference between alias and replacements.
@return array replaced page content and updated $diff parameter as array.
@public static

Returns timestamp in seconds from formatted date-time.
@param string $date Formatted date-time.
@return int seconds.
@since 5.9.152 (2012-03-23)
@public static

Returns a formatted date-time.
@param int $time Time in seconds.
@return string escaped date string.
@since 5.9.152 (2012-03-23)
@public static

Returns a string containing random data to be used as a seed for encryption methods.
@param string $seed starting seed value
@return string containing random data
@author Nicola Asuni
@since 5.9.006 (2010-10-19)
@public static

Encrypts a string using MD5 and returns it's value as a binary string.
@param string $str input string
@return string MD5 encrypted binary string
@since 2.0.000 (2008-01-02)
@public static

Returns the input text encrypted using AES algorithm and the specified key.
This method requires openssl or mcrypt. Text is padded to 16bytes blocks
@param string $key encryption key
@param string $text input text to be encrypted
@return string encrypted text
@author Nicola Asuni
@since 5.0.005 (2010-05-11)
@public static

Returns the input text encrypted using AES algorithm and the specified key.
This method requires openssl or mcrypt. Text is not padded
@param string $key encryption key
@param string $text input text to be encrypted
@return string encrypted text
@author Nicola Asuni
@since TODO
@public static

Returns the input text encrypted using RC4 algorithm and the specified key.
RC4 is the standard encryption algorithm used in PDF format
@param string $key Encryption key.
@param string $text Input text to be encrypted.
@param string $last_enc_key Reference to last RC4 key encrypted.
@param string $last_enc_key_c Reference to last RC4 computed key.
@return string encrypted text
@since 2.0.000 (2008-01-02)
@author Klemen Vodopivec, Nicola Asuni
@public static

Return the permission code used on encryption (P value).
@param array $permissions the set of permissions (specify the ones you want to block).
@param int $mode encryption strength: 0 = RC4 40 bit; 1 = RC4 128 bit; 2 = AES 128 bit; 3 = AES 256 bit.
@since 5.0.005 (2010-05-12)
@author Nicola Asuni
@public static

Convert hexadecimal string to string
@param string $bs byte-string to convert
@return string
@since 5.0.005 (2010-05-12)
@author Nicola Asuni
@public static

Convert string to hexadecimal string (byte string)
@param string $s string to convert
@return string byte string
@since 5.0.010 (2010-05-17)
@author Nicola Asuni
@public static

Convert encryption P value to a string of bytes, low-order byte first.
@param string $protection 32bit encryption permission value (P value)
@return string
@since 5.0.005 (2010-05-12)
@author Nicola Asuni
@public static

Encode a name object.
@param string $name Name object to encode.
@return string Encoded name object.
@author Nicola Asuni
@since 5.9.097 (2011-06-23)
@public static

Convert JavaScript form fields properties array to Annotation Properties array.
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@param array $spot_colors Reference to spot colors array.
@param boolean $rtl True if in Right-To-Left text direction mode, false otherwise.
@return array of annotation properties
@author Nicola Asuni
@since 4.8.000 (2009-09-06)
@public static

Format the page numbers.
This method can be overridden for custom formats.
@param int $num page number
@return string
@since 4.2.005 (2008-11-06)
@public static

Format the page numbers on the Table Of Content.
This method can be overridden for custom formats.
@param int $num page number
@return string
@since 4.5.001 (2009-01-04)
@see addTOC(), addHTMLTOC()
@public static

Extracts the CSS properties from a CSS string.
@param string $cssdata string containing CSS definitions.
@return array An array where the keys are the CSS selectors and the values are the CSS properties.
@author Nicola Asuni
@since 5.1.000 (2010-05-25)
@public static

Cleanup HTML code (requires HTML Tidy library).
@param string $html htmlcode to fix
@param string $default_css CSS commands to add
@param array|null $tagvs parameters for setHtmlVSpace method
@param array|null $tidy_options options for tidy_parse_string function
@param array $tagvspaces Array of vertical spaces for tags.
@return string XHTML code cleaned up
@author Nicola Asuni
@since 5.9.017 (2010-11-16)
@see setHtmlVSpace()
@public static

Returns true if the CSS selector is valid for the selected HTML tag
@param array $dom array of HTML tags and properties
@param int $key key of the current HTML tag
@param string $selector CSS selector string
@return true if the selector is valid, false otherwise
@since 5.1.000 (2010-05-25)
@public static

Returns the styles array that apply for the selected HTML tag.
@param array $dom array of HTML tags and properties
@param int $key key of the current HTML tag
@param array $css array of CSS properties
@return array containing CSS properties
@since 5.1.000 (2010-05-25)
@public static

Compact CSS data array into single string.
@param array $css array of CSS properties
@return string containing merged CSS properties
@since 5.9.070 (2011-04-19)
@public static

Returns the Roman representation of an integer number
@param int $number number to convert
@return string roman representation of the specified number
@since 4.4.004 (2008-12-10)
@public static

Find position of last occurrence of a substring in a string
@param string $haystack The string to search in.
@param string $needle substring to search.
@param int $offset May be specified to begin searching an arbitrary number of characters into the string.
@return int|false Returns the position where the needle exists. Returns FALSE if the needle was not found.
@since 4.8.038 (2010-03-13)
@public static

Returns an array of hyphenation patterns.
@param string $file TEX file containing hypenation patterns. TEX patterns can be downloaded from http://www.ctan.org/tex-archive/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
@return array of hyphenation patterns
@author Nicola Asuni
@since 4.9.012 (2010-04-12)
@public static

Get the Path-Painting Operators.
@param string $style Style of rendering. Possible values are:
<ul>
  <li>S or D: Stroke the path.</li>
  <li>s or d: Close and stroke the path.</li>
  <li>f or F: Fill the path, using the nonzero winding number rule to determine the region to fill.</li>
  <li>f* or F*: Fill the path, using the even-odd rule to determine the region to fill.</li>
  <li>B or FD or DF: Fill and then stroke the path, using the nonzero winding number rule to determine the region to fill.</li>
  <li>B* or F*D or DF*: Fill and then stroke the path, using the even-odd rule to determine the region to fill.</li>
  <li>b or fd or df: Close, fill, and then stroke the path, using the nonzero winding number rule to determine the region to fill.</li>
  <li>b or f*d or df*: Close, fill, and then stroke the path, using the even-odd rule to determine the region to fill.</li>
  <li>CNZ: Clipping mode using the even-odd rule to determine which regions lie inside the clipping path.</li>
  <li>CEO: Clipping mode using the nonzero winding number rule to determine which regions lie inside the clipping path</li>
  <li>n: End the path object without filling or stroking it.</li>
</ul>
@param string $default default style
@return string
@author Nicola Asuni
@since 5.0.000 (2010-04-30)
@public static

Get the product of two SVG tranformation matrices
@param array $ta first SVG tranformation matrix
@param array $tb second SVG tranformation matrix
@return array transformation array
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@public static

Get the tranformation matrix from SVG transform attribute
@param string $attribute transformation
@return array of transformations
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@public static

Returns the angle in radiants between two vectors
@param int $x1 X coordinate of first vector point
@param int $y1 Y coordinate of first vector point
@param int $x2 X coordinate of second vector point
@param int $y2 Y coordinate of second vector point
@author Nicola Asuni
@since 5.0.000 (2010-05-04)
@public static

Split string by a regular expression.
This is a wrapper for the preg_split function to avoid the bug: https://bugs.php.net/bug.php?id=45850
@param string $pattern The regular expression pattern to search for without the modifiers, as a string.
@param string $modifiers The modifiers part of the pattern,
@param string $subject The input string.
@param int $limit If specified, then only substrings up to limit are returned with the rest of the string being placed in the last substring. A limit of -1, 0 or NULL means "no limit" and, as is standard across PHP, you can use NULL to skip to the flags parameter.
@param int $flags The flags as specified on the preg_split PHP function.
@return array Returns an array containing substrings of subject split along boundaries matched by pattern.modifier
@author Nicola Asuni
@since 6.0.023
@public static

Wrapper to use fopen only with local files
@param string $filename Name of the file to open
@param string $mode
@return resource|false Returns a file pointer resource on success, or FALSE on error.
@public static

Check if the URL exist.
@param string $url URL to check.
@return bool Returns TRUE if the URL exists; FALSE otherwise.
@public static
@since 6.2.25

Encode query params in URL
@param string $url
@return string
@since 6.3.3 (2019-11-01)
@public static

Wrapper for file_exists.
Checks whether a file or directory exists.
Only allows some protocols and local files.
@param string $filename Path to the file or directory.
@return bool Returns TRUE if the file or directory specified by filename exists; FALSE otherwise.
@public static

Reads entire file into a string.
The file can be also an URL.
@param string $file Name of the file or URL to read.
@return string|false The function returns the read data or FALSE on failure.
@author Nicola Asuni
@since 6.0.025
@public static

Get ULONG from string (Big Endian 32-bit unsigned integer).
@param string $str string from where to extract value
@param int $offset point from where to read the data
@return int 32 bit value
@author Nicola Asuni
@since 5.2.000 (2010-06-02)
@public static

Get USHORT from string (Big Endian 16-bit unsigned integer).
@param string $str string from where to extract value
@param int $offset point from where to read the data
@return int 16 bit value
@author Nicola Asuni
@since 5.2.000 (2010-06-02)
@public static

Get SHORT from string (Big Endian 16-bit signed integer).
@param string $str String from where to extract value.
@param int $offset Point from where to read the data.
@return int 16 bit value
@author Nicola Asuni
@since 5.2.000 (2010-06-02)
@public static

Get FWORD from string (Big Endian 16-bit signed integer).
@param string $str String from where to extract value.
@param int $offset Point from where to read the data.
@return int 16 bit value
@author Nicola Asuni
@since 5.9.123 (2011-09-30)
@public static

Get UFWORD from string (Big Endian 16-bit unsigned integer).
@param string $str string from where to extract value
@param int $offset point from where to read the data
@return int 16 bit value
@author Nicola Asuni
@since 5.9.123 (2011-09-30)
@public static

Get FIXED from string (32-bit signed fixed-point number (16.16).
@param string $str string from where to extract value
@param int $offset point from where to read the data
@return int 16 bit value
@author Nicola Asuni
@since 5.9.123 (2011-09-30)
@public static

Get BYTE from string (8-bit unsigned integer).
@param string $str String from where to extract value.
@param int $offset Point from where to read the data.
@return int 8 bit value
@author Nicola Asuni
@since 5.2.000 (2010-06-02)
@public static

Binary-safe and URL-safe file read.
Reads up to length bytes from the file pointer referenced by handle. Reading stops as soon as one of the following conditions is met: length bytes have been read; EOF (end of file) is reached.
@param resource $handle
@param int $length
@return string|false Returns the read string or FALSE in case of error.
@author Nicola Asuni
@since 4.5.027 (2009-03-16)
@public static

Read a 4-byte (32 bit) integer from file.
@param resource $f file resource.
@return int 4-byte integer
@public static

Array of page formats
measures are calculated in this way: (inches * 72) or (millimeters * 72 / 25.4)
@public static

@var array<string,float[]>

Get page dimensions from format name.
@param mixed $format The format name @see self::$page_format<ul>
@return array containing page width and height in points
@since 5.0.010 (2010-05-17)
@public static

Set page boundaries.
@param int $page page number
@param string $type valid values are: <ul><li>'MediaBox' : the boundaries of the physical medium on which the page shall be displayed or printed;</li><li>'CropBox' : the visible region of default user space;</li><li>'BleedBox' : the region to which the contents of the page shall be clipped when output in a production environment;</li><li>'TrimBox' : the intended dimensions of the finished page after trimming;</li><li>'ArtBox' : the page's meaningful content (including potential white space).</li></ul>
@param float $llx lower-left x coordinate in user units.
@param float $lly lower-left y coordinate in user units.
@param float $urx upper-right x coordinate in user units.
@param float $ury upper-right y coordinate in user units.
@param boolean $points If true uses user units as unit of measure, otherwise uses PDF points.
@param float $k Scale factor (number of points in user unit).
@param array $pagedim Array of page dimensions.
@return array pagedim array of page dimensions.
@since 5.0.010 (2010-05-17)
@public static

Swap X and Y coordinates of page boxes (change page boxes orientation).
@param int $page page number
@param array $pagedim Array of page dimensions.
@return array pagedim array of page dimensions.
@since 5.0.010 (2010-05-17)
@public static

Get the canonical page layout mode.
@param string $layout The page layout. Possible values are:<ul><li>SinglePage Display one page at a time</li><li>OneColumn Display the pages in one column</li><li>TwoColumnLeft Display the pages in two columns, with odd-numbered pages on the left</li><li>TwoColumnRight Display the pages in two columns, with odd-numbered pages on the right</li><li>TwoPageLeft (PDF 1.5) Display the pages two at a time, with odd-numbered pages on the left</li><li>TwoPageRight (PDF 1.5) Display the pages two at a time, with odd-numbered pages on the right</li></ul>
@return string Canonical page layout name.
@public static

Get the canonical page layout mode.
@param string $mode A name object specifying how the document should be displayed when opened:<ul><li>UseNone Neither document outline nor thumbnail images visible</li><li>UseOutlines Document outline visible</li><li>UseThumbs Thumbnail images visible</li><li>FullScreen Full-screen mode, with no menu bar, window controls, or any other window visible</li><li>UseOC (PDF 1.5) Optional content group panel visible</li><li>UseAttachments (PDF 1.6) Attachments panel visible</li></ul>
@return string Canonical page mode name.
@public static

## References

**Database Tables (inferred)**
- `text`
- `formatted`
- `the`
- `a`
- `is`
- `http`
- `SVG`
- `string`
- `where`
- `file`
- `format`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\include\tcpdf_static.php`

**Classes**:
- `that`
- `TCPDF_STATIC`
- `for`
- `TCPDF_STATIC`
- `object`
- `object`
- `or`
- `if`
- `or`

**Functions/Methods**:
- `getTCPDFVersion()`
- `getTCPDFProducer()`
- `set_mqr($mqr)`
- `get_mqr()`
- `isValidURL($url)`
- `removeSHY($txt='', $unicode=true)`
- `getBorderMode($brd, $position='start', $opencell=true)`
- `empty_string($str)`
- `getObjFilename($type='tmp', $file_id='')`
- `_escape($s)`
- `_escapeXML($str)`
- `objclone($object)`
- `sendOutputData($data, $length)`
- `replacePageNumAliases($page, $replace, $diff=0)`
- `getTimestamp($date)`
- `getFormattedDate($time)`
- `getRandomSeed($seed='')`
- `_md5_16($str)`
- `_AES($key, $text)`
- `_AESnopad($key, $text)`
- `_RC4($key, $text, &$last_enc_key, &$last_enc_key_c)`
- `getUserPermissionCode($permissions, $mode=0)`
- `convertHexStringToString($bs)`
- `convertStringToHexString($s)`
- `getEncPermissionsString($protection)`
- `encodeNameObject($name)`
- `getAnnotOptFromJSProp($prop, &$spot_colors, $rtl=false)`
- `formatPageNumber($num)`
- `formatTOCPageNumber($num)`
- `extractCSSproperties($cssdata)`
- `fixHTMLCode($html, $default_css, $tagvs, $tidy_options, &$tagvspaces)`
- `isValidCSSSelectorForTag($dom, $key, $selector)`
- `getCSSdataArray($dom, $key, $css)`
- `getTagStyleFromCSSarray($css)`
- `intToRoman($number)`
- `revstrpos($haystack, $needle, $offset = 0)`
- `getHyphenPatternsFromTEX($file)`
- `getPathPaintOperator($style, $default='S')`
- `getTransformationMatrixProduct($ta, $tb)`
- `getSVGTransformMatrix($attribute)`
- `getVectorsAngle($x1, $y1, $x2, $y2)`
- `pregSplit($pattern, $modifiers, $subject, $limit=NULL, $flags=NULL)`
- `fopenLocal($filename, $mode)`
- `url_exists($url)`
- `encodeUrlQuery($url)`
- `file_exists($filename)`
- `fileGetContents($file)`
- `_getULONG($str, $offset)`
- `_getUSHORT($str, $offset)`
- `_getSHORT($str, $offset)`
- `_getFWORD($str, $offset)`
- `_getUFWORD($str, $offset)`
- `_getFIXED($str, $offset)`
- `_getBYTE($str, $offset)`
- `rfread($handle, $length)`
- `_freadint($f)`
- `getPageSizeFromFormat($format)`
- `setPageBoxes($page, $type, $llx, $lly, $urx, $ury, $points, $k, $pagedim=array()`
- `swapPageBoxCoordinates($page, $pagedim)`
- `getPageLayoutMode($layout='SinglePage')`
- `getPageMode($mode='UseNone')`

