# app\ThirdParty\tcpdf\tcpdf.php

- Path: `app\ThirdParty\tcpdf\tcpdf.php`
- Type: PHP
- Size: 905666 bytes

## Summary (from docblocks)

@file
This is a PHP class for generating PDF documents without requiring external extensions.<br>
TCPDF project (http://www.tcpdf.org) was originally derived in 2002 from the Public Domain FPDF class by Olivier Plathey (http://www.fpdf.org), but now is almost entirely rewritten.<br>
<h3>TCPDF main features are:</h3>
<ul>
<li>no external libraries are required for the basic functions;</li>
<li>all standard page formats, custom page formats, custom margins and units of measure;</li>
<li>UTF-8 Unicode and Right-To-Left languages;</li>
<li>TrueTypeUnicode, TrueType, Type1 and CID-0 fonts;</li>
<li>font subsetting;</li>
<li>methods to publish some XHTML + CSS code, Javascript and Forms;</li>
<li>images, graphic (geometric figures) and transformation methods;
<li>supports JPEG, PNG and SVG images natively, all images supported by GD (GD, GD2, GD2PART, GIF, JPEG, PNG, BMP, XBM, XPM) and all images supported via ImageMagick (http://www.imagemagick.org/www/formats.html)</li>
<li>1D and 2D barcodes: CODE 39, ANSI MH10.8M-1983, USD-3, 3 of 9, CODE 93, USS-93, Standard 2 of 5, Interleaved 2 of 5, CODE 128 A/B/C, 2 and 5 Digits UPC-Based Extension, EAN 8, EAN 13, UPC-A, UPC-E, MSI, POSTNET, PLANET, RMS4CC (Royal Mail 4-state Customer Code), CBC (Customer Bar Code), KIX (Klant index - Customer index), Intelligent Mail Barcode, Onecode, USPS-B-3200, CODABAR, CODE 11, PHARMACODE, PHARMACODE TWO-TRACKS, Datamatrix, QR-Code, PDF417;</li>
<li>JPEG and PNG ICC profiles, Grayscale, RGB, CMYK, Spot Colors and Transparencies;</li>
<li>automatic page header and footer management;</li>
<li>document encryption up to 256 bit and digital signature certifications;</li>
<li>transactions to UNDO commands;</li>
<li>PDF annotations, including links, text and file attachments;</li>
<li>text rendering modes (fill, stroke and clipping);</li>
<li>multiple columns mode;</li>
<li>no-write page regions;</li>
<li>bookmarks, named destinations and table of content;</li>
<li>text hyphenation;</li>
<li>text stretching and spacing (tracking);</li>
<li>automatic page break, line break and text alignments including justification;</li>
<li>automatic page numbering and page groups;</li>
<li>move and delete pages;</li>
<li>page compression (requires php-zlib extension);</li>
<li>XOBject Templates;</li>
<li>Layers and object visibility;</li>
<li>PDF/A-1b support.</li>
</ul>
Tools to encode your unicode fonts are on fonts/utils directory.</p>
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 6.3.2

@class TCPDF
PHP class for generating PDF documents without requiring external extensions.
TCPDF project (http://www.tcpdf.org) has been originally derived in 2002 from the Public Domain FPDF class by Olivier Plathey (http://www.fpdf.org), but now is almost entirely rewritten.<br>
@package com.tecnick.tcpdf
@brief PHP class for generating PDF documents without requiring external extensions.
@version 6.3.2
@author Nicola Asuni - info@tecnick.com
@IgnoreAnnotation("protected")
@IgnoreAnnotation("public")
@IgnoreAnnotation("pre")

Current page number.
@protected

Current object number.
@protected

Array of object offsets.
@protected

Array of object IDs for each page.
@protected

Buffer holding in-memory PDF.
@protected

Array containing pages.
@protected

Current document state.
@protected

Compression flag.
@protected

Current page orientation (P = Portrait, L = Landscape).
@protected

Page dimensions.
@protected

Scale factor (number of points in user unit).
@protected

Width of page format in points.
@protected

Height of page format in points.
@protected

Current width of page in points.
@protected

Current height of page in points.
@protected

Current width of page in user unit.
@protected

Current height of page in user unit.
@protected

Left margin.
@protected

Right margin.
@protected

Cell left margin (used by regions).
@protected

Cell right margin (used by regions).
@protected

Top margin.
@protected

Page break margin.
@protected

Array of cell internal paddings ('T' => top, 'R' => right, 'B' => bottom, 'L' => left).
@since 5.9.000 (2010-10-03)
@protected

Array of cell margins ('T' => top, 'R' => right, 'B' => bottom, 'L' => left).
@since 5.9.000 (2010-10-04)
@protected

Current horizontal position in user unit for cell positioning.
@protected

Current vertical position in user unit for cell positioning.
@protected

Height of last cell printed.
@protected

Line width in user unit.
@protected

Array of standard font names.
@protected

Array of used fonts.
@protected

Array of font files.
@protected

Array of encoding differences.
@protected

Array of used images.
@protected

Depth of the svg tag, to keep track if the svg tag is a subtag or the root tag.
@protected

Array of Annotations in pages.
@protected

Array of internal links.
@protected

Current font family.
@protected

Current font style.
@protected

Current font ascent (distance between font top and baseline).
@protected
@since 2.8.000 (2007-03-29)

Current font descent (distance between font bottom and baseline).
@protected
@since 2.8.000 (2007-03-29)

Underlining flag.
@protected

Overlining flag.
@protected

Current font info.
@protected

Current font size in points.
@protected

Current font size in user unit.
@protected

Commands for drawing color.
@protected

Commands for filling color.
@protected

Commands for text color.
@protected

Indicates whether fill and text colors are different.
@protected

Automatic page breaking.
@protected

Threshold used to trigger page breaks.
@protected

Flag set when processing page header.
@protected

Flag set when processing page footer.
@protected

Zoom display mode.
@protected

Layout display mode.
@protected

If true set the document information dictionary in Unicode.
@protected

Document title.
@protected

Document subject.
@protected

Document author.
@protected

Document keywords.
@protected

Document creator.
@protected

Starting page number.
@protected

The right-bottom (or left-bottom for RTL) corner X coordinate of last inserted image.
@since 2002-07-31
@author Nicola Asuni
@protected

The right-bottom corner Y coordinate of last inserted image.
@since 2002-07-31
@author Nicola Asuni
@protected

Adjusting factor to convert pixels to user units.
@since 2004-06-14
@author Nicola Asuni
@protected

Boolean flag set to true when the input text is unicode (require unicode fonts).
@since 2005-01-02
@author Nicola Asuni
@protected

PDF version.
@since 1.5.3
@protected

ID of the stored default header template (-1 = not set).
@protected

If true reset the Header Xobject template at each page
@protected

Minimum distance between header and top page margin.
@protected

Minimum distance between footer and bottom page margin.
@protected

Original left margin value.
@protected
@since 1.53.0.TC013

Original right margin value.
@protected
@since 1.53.0.TC013

Default font used on page header.
@protected
@var array<int,string|float|null>
@phpstan-var array{0: string, 1: string, 2: float|null}

Default font used on page footer.
@protected
@var array<int,string|float|null>
@phpstan-var array{0: string, 1: string, 2: float|null}

Language templates.
@protected

Barcode to print on page footer (only if set).
@protected

Boolean flag to print/hide page header.
@protected

Boolean flag to print/hide page footer.
@protected

Header image logo.
@protected

Width of header image logo in user units.
@protected

Title to be printed on default page header.
@protected

String to print on page header after title.
@protected

Color for header text (RGB array).
@since 5.9.174 (2012-07-25)
@protected
@var int[]
@phpstan-var array{0: int, 1: int, 2: int}

Color for header line (RGB array).
@since 5.9.174 (2012-07-25)
@protected
@var int[]
@phpstan-var array{0: int, 1: int, 2: int}

Color for footer text (RGB array).
@since 5.9.174 (2012-07-25)
@protected
@var int[]
@phpstan-var array{0: int, 1: int, 2: int}

Color for footer line (RGB array).
@since 5.9.174 (2012-07-25)
@protected
@var int[]
@phpstan-var array{0: int, 1: int, 2: int}

Text shadow data array.
@since 5.9.174 (2012-07-25)
@protected

Default number of columns for html table.
@protected

HTML PARSER: array to store current link and rendering styles.
@protected

List of available fonts on filesystem.
@protected

Current foreground color.
@protected

HTML PARSER: array of boolean values, true in case of ordered list (OL), false otherwise.
@protected

HTML PARSER: array count list items on nested lists.
@protected

HTML PARSER: current list nesting level.
@protected

HTML PARSER: indent amount for lists.
@protected

HTML PARSER: current list indententation level.
@protected

Current background color.
@protected

Temporary font size in points.
@protected

Spacer string for LI tags.
@protected

Default encoding.
@protected
@since 1.53.0.TC010

Boolean flag to indicate if the document language is Right-To-Left.
@protected
@since 2.0.000

Boolean flag used to force RTL or LTR string direction.
@protected
@since 2.0.000

IBoolean flag indicating whether document is protected.
@protected
@since 2.0.000 (2008-01-02)

Array containing encryption settings.
@protected
@since 5.0.005 (2010-05-11)

Last RC4 key encrypted (cached for optimisation).
@protected
@since 2.0.000 (2008-01-02)

Last RC4 computed key.
@protected
@since 2.0.000 (2008-01-02)

File ID (used on document trailer).
@protected
@since 5.0.005 (2010-05-12)

Outlines for bookmark.
@protected
@since 2.1.002 (2008-02-12)

Outline root for bookmark.
@protected
@since 2.1.002 (2008-02-12)

Javascript code.
@protected
@since 2.1.002 (2008-02-12)

Javascript counter.
@protected
@since 2.1.002 (2008-02-12)

line through state
@protected
@since 2.8.000 (2008-03-19)

Array with additional document-wide usage rights for the document.
@protected
@since 5.8.014 (2010-08-23)

DPI (Dot Per Inch) Document Resolution (do not change).
@protected
@since 3.0.000 (2008-03-27)

Array of page numbers were a new page group was started (the page numbers are the keys of the array).
@protected
@since 3.0.000 (2008-03-27)

Array that contains the number of pages in each page group.
@protected
@since 3.0.000 (2008-03-27)

Current page group number.
@protected
@since 3.0.000 (2008-03-27)

Array of transparency objects and parameters.
@protected
@since 3.0.000 (2008-03-27)

Set the default JPEG compression quality (1-100).
@protected
@since 3.0.000 (2008-03-27)

Default cell height ratio.
@protected
@since 3.0.014 (2008-05-23)
@var float

PDF viewer preferences.
@protected
@since 3.1.000 (2008-06-09)

A name object specifying how the document should be displayed when opened.
@protected
@since 3.1.000 (2008-06-09)

Array for storing gradient information.
@protected
@since 3.1.000 (2008-06-09)

Array used to store positions inside the pages buffer (keys are the page numbers).
@protected
@since 3.2.000 (2008-06-26)

Array used to store positions inside the pages buffer (keys are the page numbers).
@protected
@since 5.7.000 (2010-08-03)

Array used to store page positions to track empty pages (keys are the page numbers).
@protected
@since 5.8.007 (2010-08-18)

Array used to store content positions inside the pages buffer (keys are the page numbers).
@protected
@since 4.6.021 (2009-07-20)

Array used to store footer positions of each page.
@protected
@since 3.2.000 (2008-07-01)

Array used to store footer length of each page.
@protected
@since 4.0.014 (2008-07-29)

Boolean flag to indicate if a new line is created.
@protected
@since 3.2.000 (2008-07-01)

End position of the latest inserted line.
@protected
@since 3.2.000 (2008-07-01)

PDF string for width value of the last line.
@protected
@since 4.0.006 (2008-07-16)

PDF string for CAP value of the last line.
@protected
@since 4.0.006 (2008-07-16)

PDF string for join value of the last line.
@protected
@since 4.0.006 (2008-07-16)

PDF string for dash value of the last line.
@protected
@since 4.0.006 (2008-07-16)

Boolean flag to indicate if marked-content sequence is open.
@protected
@since 4.0.013 (2008-07-28)

Count the latest inserted vertical spaces on HTML.
@protected
@since 4.0.021 (2008-08-24)

Array of Spot colors.
@protected
@since 4.0.024 (2008-09-12)

Symbol used for HTML unordered list items.
@protected
@since 4.0.028 (2008-09-26)

String used to mark the beginning and end of EPS image blocks.
@protected
@since 4.1.000 (2008-10-18)

Array of transformation matrix.
@protected
@since 4.2.000 (2008-10-29)

Current key for transformation matrix.
@protected
@since 4.8.005 (2009-09-17)

Booklet mode for double-sided pages.
@protected
@since 4.2.000 (2008-10-29)

Epsilon value used for float calculations.
@protected
@since 4.2.000 (2008-10-29)

Array used for custom vertical spaces for HTML tags.
@protected
@since 4.2.001 (2008-10-30)

HTML PARSER: custom indent amount for lists. Negative value means disabled.
@protected
@since 4.2.007 (2008-11-12)

Boolean flag to indicate if the border of the cell sides that cross the page should be removed.
@protected
@since 4.2.010 (2008-11-14)

Array of files to embedd.
@protected
@since 4.4.000 (2008-12-07)

Boolean flag to indicate if we are inside a PRE tag.
@protected
@since 4.4.001 (2008-12-08)

Array used to store positions of graphics transformation blocks inside the page buffer.
keys are the page numbers
@protected
@since 4.4.002 (2008-12-09)

Default color for html links.
@protected
@since 4.4.003 (2008-12-09)

Default font style to add to html links.
@protected
@since 4.4.003 (2008-12-09)

Counts the number of pages.
@protected
@since 4.5.000 (2008-12-31)

Array containing page lengths in bytes.
@protected
@since 4.5.000 (2008-12-31)

Counts the number of pages.
@protected
@since 4.5.000 (2008-12-31)

Store the image keys.
@protected
@since 4.5.000 (2008-12-31)

Length of the buffer in bytes.
@protected
@since 4.5.000 (2008-12-31)

Counts the number of fonts.
@protected
@since 4.5.000 (2009-01-02)

Store the font keys.
@protected
@since 4.5.000 (2009-01-02)

Store the font object IDs.
@protected
@since 4.8.001 (2009-09-09)

Store the fage status (true when opened, false when closed).
@protected
@since 4.5.000 (2009-01-02)

Default monospace font.
@protected
@since 4.5.025 (2009-03-10)

Cloned copy of the current class object.
@protected
@since 4.5.029 (2009-03-19)

Array used to store the lengths of cache files.
@protected
@since 4.5.029 (2009-03-19)

Table header content to be repeated on each new page.
@protected
@since 4.5.030 (2009-03-20)

Margins used for table header.
@protected
@since 4.5.030 (2009-03-20)

Boolean flag to enable document digital signature.
@protected
@since 4.6.005 (2009-04-24)

Digital signature data.
@protected
@since 4.6.005 (2009-04-24)

Digital signature max length.
@protected
@since 4.6.005 (2009-04-24)

Data for digital signature appearance.
@protected
@since 5.3.011 (2010-06-16)

Array of empty digital signature appearances.
@protected
@since 5.9.101 (2011-07-06)

Boolean flag to enable document timestamping with TSA.
@protected
@since 6.0.085 (2014-06-19)

Timestamping data.
@protected
@since 6.0.085 (2014-06-19)

Regular expression used to find blank characters (required for word-wrapping).
@protected
@since 4.6.006 (2009-04-28)

Array of $re_spaces parts.
@protected
@since 5.5.011 (2010-07-09)

Digital signature object ID.
@protected
@since 4.6.022 (2009-06-23)

ID of page objects.
@protected
@since 4.7.000 (2009-08-29)

List of form annotations IDs.
@protected
@since 4.8.000 (2009-09-07)

Deafult Javascript field properties. Possible values are described on official Javascript for Acrobat API reference. Annotation options can be directly specified using the 'aopt' entry.
@protected
@since 4.8.000 (2009-09-07)

Javascript objects array.
@protected
@since 4.8.000 (2009-09-07)

Current form action (used during XHTML rendering).
@protected
@since 4.8.000 (2009-09-07)

Current form encryption type (used during XHTML rendering).
@protected
@since 4.8.000 (2009-09-07)

Current method to submit forms.
@protected
@since 4.8.000 (2009-09-07)

List of fonts used on form fields (fontname => fontkey).
@protected
@since 4.8.001 (2009-09-09)

List of radio buttons parent objects.
@protected
@since 4.8.001 (2009-09-09)

List of radio group objects IDs.
@protected
@since 4.8.001 (2009-09-09)

Text indentation value (used for text-indent CSS attribute).
@protected
@since 4.8.006 (2009-09-23)

Store page number when startTransaction() is called.
@protected
@since 4.8.006 (2009-09-23)

Store Y position when startTransaction() is called.
@protected
@since 4.9.001 (2010-03-28)

True when we are printing the thead section on a new page.
@protected
@since 4.8.027 (2010-01-25)

Array of column measures (width, space, starting Y position).
@protected
@since 4.9.001 (2010-03-28)

Number of colums.
@protected
@since 4.9.001 (2010-03-28)

Current column number.
@protected
@since 4.9.001 (2010-03-28)

Starting page for columns.
@protected
@since 4.9.001 (2010-03-28)

Maximum page and column selected.
@protected
@since 5.8.000 (2010-08-11)

Array of: X difference between table cell x start and starting page margin, cellspacing, cellpadding.
@protected
@since 5.8.000 (2010-08-11)

Text rendering mode: 0 = Fill text; 1 = Stroke text; 2 = Fill, then stroke text; 3 = Neither fill nor stroke text (invisible); 4 = Fill text and add to path for clipping; 5 = Stroke text and add to path for clipping; 6 = Fill, then stroke text and add to path for clipping; 7 = Add text to path for clipping.
@protected
@since 4.9.008 (2010-04-03)

Text stroke width in doc units.
@protected
@since 4.9.008 (2010-04-03)

Current stroke color.
@protected
@since 4.9.008 (2010-04-03)

Default unit of measure for document.
@protected
@since 5.0.000 (2010-04-22)

Boolean flag true when we are on TOC (Table Of Content) page.
@protected

Boolean flag: if true convert vector images (SVG, EPS) to raster image using GD or ImageMagick library.
@protected
@since 5.0.000 (2010-04-26)

Boolean flag: if true enables font subsetting by default.
@protected
@since 5.3.002 (2010-06-07)

Array of default graphic settings.
@protected
@since 5.5.008 (2010-07-02)

Array of XObjects.
@protected
@since 5.8.014 (2010-08-23)

Boolean value true when we are inside an XObject.
@protected
@since 5.8.017 (2010-08-24)

Current XObject ID.
@protected
@since 5.8.017 (2010-08-24)

Percentage of character stretching.
@protected
@since 5.9.000 (2010-09-29)

Increases or decreases the space between characters in a text by the specified amount (tracking).
@protected
@since 5.9.000 (2010-09-29)

Array of no-write regions.
('page' => page number or empy for current page, 'xt' => X top, 'yt' => Y top, 'xb' => X bottom, 'yb' => Y bottom, 'side' => page side 'L' = left or 'R' = right)
@protected
@since 5.9.003 (2010-10-14)

Boolean value true when page region check is active.
@protected

Array of PDF layers data.
@protected
@since 5.9.102 (2011-07-13)

A dictionary of names and corresponding destinations (Dests key on document Catalog).
@protected
@since 5.9.097 (2011-06-23)

Object ID for Named Destinations
@protected
@since 5.9.097 (2011-06-23)

Embedded Files Names
@protected
@since 5.9.204 (2013-01-23)

Directory used for the last SVG image.
@protected
@since 5.0.000 (2010-05-05)

Deafult unit of measure for SVG.
@protected
@since 5.0.000 (2010-05-02)

Array of SVG gradients.
@protected
@since 5.0.000 (2010-05-02)

ID of last SVG gradient.
@protected
@since 5.0.000 (2010-05-02)

Boolean value true when in SVG defs group.
@protected
@since 5.0.000 (2010-05-02)

Array of SVG defs.
@protected
@since 5.0.000 (2010-05-02)

Boolean value true when in SVG clipPath tag.
@protected
@since 5.0.000 (2010-04-26)

Array of SVG clipPath commands.
@protected
@since 5.0.000 (2010-05-02)

Array of SVG clipPath tranformation matrix.
@protected
@since 5.8.022 (2010-08-31)

ID of last SVG clipPath.
@protected
@since 5.0.000 (2010-05-02)

SVG text.
@protected
@since 5.0.000 (2010-05-02)

SVG text properties.
@protected
@since 5.8.013 (2010-08-23)

Array of SVG properties.
@protected
@since 5.0.000 (2010-05-02)

If true force sRGB color profile for all document.
@protected
@since 5.9.121 (2011-09-28)

If true set the document to PDF/A mode.
@protected
@since 5.9.121 (2011-09-27)

version of PDF/A mode (1 - 3).
@protected
@since 6.2.26 (2019-03-12)

Document creation date-time
@protected
@since 5.9.152 (2012-03-22)

Document modification date-time
@protected
@since 5.9.152 (2012-03-22)

Custom XMP data.
@protected
@since 5.9.128 (2011-10-06)

Custom XMP RDF data.
@protected
@since 6.3.0 (2019-09-19)

Overprint mode array.
(Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
@protected
@since 5.9.152 (2012-03-23)
@var array<string,bool|int>

Alpha mode array.
(Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
@protected
@since 5.9.152 (2012-03-23)

Define the page boundaries boxes to be set on document.
@protected
@since 5.9.152 (2012-03-23)

If true print TCPDF meta link.
@protected
@since 5.9.152 (2012-03-23)

Cache array for computed GD gamma values.
@protected
@since 5.9.1632 (2012-06-05)

Cache array for file content
@protected
@var array
@since 6.3.5 (2020-09-28)

Whether to allow local file path in image html tags, when prefixed with file://
@var bool
@protected
@since 6.4 (2020-07-23)

This is the class constructor.
It allows to set up the page format, the orientation and the measure unit used in all the methods (except for the font sizes).
@param string $orientation page orientation. Possible values are (case insensitive):<ul><li>P or Portrait (default)</li><li>L or Landscape</li><li>'' (empty string) for automatic orientation</li></ul>
@param string $unit User measure unit. Possible values are:<ul><li>pt: point</li><li>mm: millimeter (default)</li><li>cm: centimeter</li><li>in: inch</li></ul><br />A point equals 1/72 of inch, that is to say about 0.35 mm (an inch being 2.54 cm). This is a very common unit in typography; font sizes are expressed in that unit.
@param mixed $format The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() or an array of parameters specified at setPageFormat().
@param boolean $unicode TRUE means that the input text is unicode (default = true)
@param string $encoding Charset encoding (used only when converting back html entities); default is UTF-8.
@param boolean $diskcache DEPRECATED FEATURE
@param false|integer $pdfa If not false, set the document to PDF/A mode and the good version (1 or 3).
@public
@see getPageSizeFromFormat(), setPageFormat()

Default destructor.
@public
@since 1.53.0.TC016

Set the units of measure for the document.
@param string $unit User measure unit. Possible values are:<ul><li>pt: point</li><li>mm: millimeter (default)</li><li>cm: centimeter</li><li>in: inch</li></ul><br />A point equals 1/72 of inch, that is to say about 0.35 mm (an inch being 2.54 cm). This is a very common unit in typography; font sizes are expressed in that unit.
@public
@since 3.0.015 (2008-06-06)

Change the format of the current page
@param mixed $format The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() documentation or an array of two numbers (width, height) or an array containing the following measures and options:<ul>
<li>['format'] = page format name (one of the above);</li>
<li>['Rotate'] : The number of degrees by which the page shall be rotated clockwise when displayed or printed. The value shall be a multiple of 90.</li>
<li>['PZ'] : The page's preferred zoom (magnification) factor.</li>
<li>['MediaBox'] : the boundaries of the physical medium on which the page shall be displayed or printed:</li>
<li>['MediaBox']['llx'] : lower-left x coordinate</li>
<li>['MediaBox']['lly'] : lower-left y coordinate</li>
<li>['MediaBox']['urx'] : upper-right x coordinate</li>
<li>['MediaBox']['ury'] : upper-right y coordinate</li>
<li>['CropBox'] : the visible region of default user space:</li>
<li>['CropBox']['llx'] : lower-left x coordinate</li>
<li>['CropBox']['lly'] : lower-left y coordinate</li>
<li>['CropBox']['urx'] : upper-right x coordinate</li>
<li>['CropBox']['ury'] : upper-right y coordinate</li>
<li>['BleedBox'] : the region to which the contents of the page shall be clipped when output in a production environment:</li>
<li>['BleedBox']['llx'] : lower-left x coordinate</li>
<li>['BleedBox']['lly'] : lower-left y coordinate</li>
<li>['BleedBox']['urx'] : upper-right x coordinate</li>
<li>['BleedBox']['ury'] : upper-right y coordinate</li>
<li>['TrimBox'] : the intended dimensions of the finished page after trimming:</li>
<li>['TrimBox']['llx'] : lower-left x coordinate</li>
<li>['TrimBox']['lly'] : lower-left y coordinate</li>
<li>['TrimBox']['urx'] : upper-right x coordinate</li>
<li>['TrimBox']['ury'] : upper-right y coordinate</li>
<li>['ArtBox'] : the extent of the page's meaningful content:</li>
<li>['ArtBox']['llx'] : lower-left x coordinate</li>
<li>['ArtBox']['lly'] : lower-left y coordinate</li>
<li>['ArtBox']['urx'] : upper-right x coordinate</li>
<li>['ArtBox']['ury'] : upper-right y coordinate</li>
<li>['BoxColorInfo'] :specify the colours and other visual characteristics that should be used in displaying guidelines on the screen for each of the possible page boundaries other than the MediaBox:</li>
<li>['BoxColorInfo'][BOXTYPE]['C'] : an array of three numbers in the range 0-255, representing the components in the DeviceRGB colour space.</li>
<li>['BoxColorInfo'][BOXTYPE]['W'] : the guideline width in default user units</li>
<li>['BoxColorInfo'][BOXTYPE]['S'] : the guideline style: S = Solid; D = Dashed</li>
<li>['BoxColorInfo'][BOXTYPE]['D'] : dash array defining a pattern of dashes and gaps to be used in drawing dashed guidelines</li>
<li>['trans'] : the style and duration of the visual transition to use when moving from another page to the given page during a presentation</li>
<li>['trans']['Dur'] : The page's display duration (also called its advance timing): the maximum length of time, in seconds, that the page shall be displayed during presentations before the viewer application shall automatically advance to the next page.</li>
<li>['trans']['S'] : transition style : Split, Blinds, Box, Wipe, Dissolve, Glitter, R, Fly, Push, Cover, Uncover, Fade</li>
<li>['trans']['D'] : The duration of the transition effect, in seconds.</li>
<li>['trans']['Dm'] : (Split and Blinds transition styles only) The dimension in which the specified transition effect shall occur: H = Horizontal, V = Vertical. Default value: H.</li>
<li>['trans']['M'] : (Split, Box and Fly transition styles only) The direction of motion for the specified transition effect: I = Inward from the edges of the page, O = Outward from the center of the pageDefault value: I.</li>
<li>['trans']['Di'] : (Wipe, Glitter, Fly, Cover, Uncover and Push transition styles only) The direction in which the specified transition effect shall moves, expressed in degrees counterclockwise starting from a left-to-right direction. If the value is a number, it shall be one of: 0 = Left to right, 90 = Bottom to top (Wipe only), 180 = Right to left (Wipe only), 270 = Top to bottom, 315 = Top-left to bottom-right (Glitter only). If the value is a name, it shall be None, which is relevant only for the Fly transition when the value of SS is not 1.0. Default value: 0.</li>
<li>['trans']['SS'] : (Fly transition style only) The starting or ending scale at which the changes shall be drawn. If M specifies an inward transition, the scale of the changes drawn shall progress from SS to 1.0 over the course of the transition. If M specifies an outward transition, the scale of the changes drawn shall progress from 1.0 to SS over the course of the transition. Default: 1.0.</li>
<li>['trans']['B'] : (Fly transition style only) If true, the area that shall be flown in is rectangular and opaque. Default: false.</li>
</ul>
@param string $orientation page orientation. Possible values are (case insensitive):<ul>
<li>P or Portrait (default)</li>
<li>L or Landscape</li>
<li>'' (empty string) for automatic orientation</li>
</ul>
@protected
@since 3.0.015 (2008-06-06)
@see getPageSizeFromFormat()

Set page orientation.
@param string $orientation page orientation. Possible values are (case insensitive):<ul><li>P or Portrait (default)</li><li>L or Landscape</li><li>'' (empty string) for automatic orientation</li></ul>
@param boolean|null $autopagebreak Boolean indicating if auto-page-break mode should be on or off.
@param float|null $bottommargin bottom margin of the page.
@public
@since 3.0.015 (2008-06-06)

Set regular expression to detect withespaces or word separators.
The pattern delimiter must be the forward-slash character "/".
Some example patterns are:
<pre>
Non-Unicode or missing PCRE unicode support: "/[^\S\xa0]/"
Unicode and PCRE unicode support: "/(?!\xa0)[\s\p{Z}]/u"
Unicode and PCRE unicode support in Chinese mode: "/(?!\xa0)[\s\p{Z}\p{Lo}]/u"
if PCRE unicode support is turned ON ("\P" is the negate class of "\p"):
     \s     : any whitespace character
     \p{Z}  : any separator
     \p{Lo} : Unicode letter or ideograph that does not have lowercase and uppercase variants. Is used to chunk chinese words.
     \xa0   : Unicode Character 'NO-BREAK SPACE' (U+00A0)
</pre>
@param string $re regular expression (leave empty for default).
@public
@since 4.6.016 (2009-06-15)

Enable or disable Right-To-Left language mode
@param boolean $enable if true enable Right-To-Left language mode.
@param boolean $resetx if true reset the X position on direction change.
@public
@since 2.0.000 (2008-01-03)

Return the RTL status
@return bool
@public
@since 4.0.012 (2008-07-24)

Force temporary RTL language direction
@param false|string $mode can be false, 'L' for LTR or 'R' for RTL
@public
@since 2.1.000 (2008-01-09)

Return the current temporary RTL status
@return bool
@public
@since 4.8.014 (2009-11-04)

Set the last cell height.
@param float $h cell height.
@author Nicola Asuni
@public
@since 1.53.0.TC034

Return the cell height
@param int $fontsize Font size in internal units
@param boolean $padding If true add cell padding
@public
@return float

Reset the last cell height.
@public
@since 5.9.000 (2010-10-03)

Get the last cell height.
@return float last cell height
@public
@since 4.0.017 (2008-08-05)

Set the adjusting factor to convert pixels to user units.
@param float $scale adjusting factor to convert pixels to user units.
@author Nicola Asuni
@public
@since 1.5.2

Returns the adjusting factor to convert pixels to user units.
@return float adjusting factor to convert pixels to user units.
@author Nicola Asuni
@public
@since 1.5.2

Returns an array of page dimensions:
<ul><li>$this->pagedim[$this->page]['w'] = page width in points</li><li>$this->pagedim[$this->page]['h'] = height in points</li><li>$this->pagedim[$this->page]['wk'] = page width in user units</li><li>$this->pagedim[$this->page]['hk'] = page height in user units</li><li>$this->pagedim[$this->page]['tm'] = top margin</li><li>$this->pagedim[$this->page]['bm'] = bottom margin</li><li>$this->pagedim[$this->page]['lm'] = left margin</li><li>$this->pagedim[$this->page]['rm'] = right margin</li><li>$this->pagedim[$this->page]['pb'] = auto page break</li><li>$this->pagedim[$this->page]['or'] = page orientation</li><li>$this->pagedim[$this->page]['olm'] = original left margin</li><li>$this->pagedim[$this->page]['orm'] = original right margin</li><li>$this->pagedim[$this->page]['Rotate'] = The number of degrees by which the page shall be rotated clockwise when displayed or printed. The value shall be a multiple of 90.</li><li>$this->pagedim[$this->page]['PZ'] = The page's preferred zoom (magnification) factor.</li><li>$this->pagedim[$this->page]['trans'] : the style and duration of the visual transition to use when moving from another page to the given page during a presentation<ul><li>$this->pagedim[$this->page]['trans']['Dur'] = The page's display duration (also called its advance timing): the maximum length of time, in seconds, that the page shall be displayed during presentations before the viewer application shall automatically advance to the next page.</li><li>$this->pagedim[$this->page]['trans']['S'] = transition style : Split, Blinds, Box, Wipe, Dissolve, Glitter, R, Fly, Push, Cover, Uncover, Fade</li><li>$this->pagedim[$this->page]['trans']['D'] = The duration of the transition effect, in seconds.</li><li>$this->pagedim[$this->page]['trans']['Dm'] = (Split and Blinds transition styles only) The dimension in which the specified transition effect shall occur: H = Horizontal, V = Vertical. Default value: H.</li><li>$this->pagedim[$this->page]['trans']['M'] = (Split, Box and Fly transition styles only) The direction of motion for the specified transition effect: I = Inward from the edges of the page, O = Outward from the center of the pageDefault value: I.</li><li>$this->pagedim[$this->page]['trans']['Di'] = (Wipe, Glitter, Fly, Cover, Uncover and Push transition styles only) The direction in which the specified transition effect shall moves, expressed in degrees counterclockwise starting from a left-to-right direction. If the value is a number, it shall be one of: 0 = Left to right, 90 = Bottom to top (Wipe only), 180 = Right to left (Wipe only), 270 = Top to bottom, 315 = Top-left to bottom-right (Glitter only). If the value is a name, it shall be None, which is relevant only for the Fly transition when the value of SS is not 1.0. Default value: 0.</li><li>$this->pagedim[$this->page]['trans']['SS'] = (Fly transition style only) The starting or ending scale at which the changes shall be drawn. If M specifies an inward transition, the scale of the changes drawn shall progress from SS to 1.0 over the course of the transition. If M specifies an outward transition, the scale of the changes drawn shall progress from 1.0 to SS over the course of the transition. Default: 1.0. </li><li>$this->pagedim[$this->page]['trans']['B'] = (Fly transition style only) If true, the area that shall be flown in is rectangular and opaque. Default: false.</li></ul></li><li>$this->pagedim[$this->page]['MediaBox'] : the boundaries of the physical medium on which the page shall be displayed or printed<ul><li>$this->pagedim[$this->page]['MediaBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['MediaBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['MediaBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['MediaBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['CropBox'] : the visible region of default user space<ul><li>$this->pagedim[$this->page]['CropBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['CropBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['CropBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['CropBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['BleedBox'] : the region to which the contents of the page shall be clipped when output in a production environment<ul><li>$this->pagedim[$this->page]['BleedBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['BleedBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['BleedBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['BleedBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['TrimBox'] : the intended dimensions of the finished page after trimming<ul><li>$this->pagedim[$this->page]['TrimBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['TrimBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['TrimBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['TrimBox']['ury'] = upper-right y coordinate in points</li></ul></li><li>$this->pagedim[$this->page]['ArtBox'] : the extent of the page's meaningful content<ul><li>$this->pagedim[$this->page]['ArtBox']['llx'] = lower-left x coordinate in points</li><li>$this->pagedim[$this->page]['ArtBox']['lly'] = lower-left y coordinate in points</li><li>$this->pagedim[$this->page]['ArtBox']['urx'] = upper-right x coordinate in points</li><li>$this->pagedim[$this->page]['ArtBox']['ury'] = upper-right y coordinate in points</li></ul></li></ul>
@param int|null $pagenum page number (empty = current page)
@return array of page dimensions.
@author Nicola Asuni
@public
@since 4.5.027 (2009-03-16)

Returns the page width in units.
@param int|null $pagenum page number (empty = current page)
@return int page width.
@author Nicola Asuni
@public
@since 1.5.2
@see getPageDimensions()

Returns the page height in units.
@param int|null $pagenum page number (empty = current page)
@return int page height.
@author Nicola Asuni
@public
@since 1.5.2
@see getPageDimensions()

Returns the page break margin.
@param int|null $pagenum page number (empty = current page)
@return int page break margin.
@author Nicola Asuni
@public
@since 1.5.2
@see getPageDimensions()

Returns the scale factor (number of points in user unit).
@return int scale factor.
@author Nicola Asuni
@public
@since 1.5.2

Defines the left, top and right margins.
@param float $left Left margin.
@param float $top Top margin.
@param float $right Right margin. Default value is the left one.
@param boolean $keepmargins if true overwrites the default page margins
@public
@since 1.0
@see SetLeftMargin(), SetTopMargin(), SetRightMargin(), SetAutoPageBreak()

Defines the left margin. The method can be called before creating the first page. If the current abscissa gets out of page, it is brought back to the margin.
@param float $margin The margin.
@public
@since 1.4
@see SetTopMargin(), SetRightMargin(), SetAutoPageBreak(), SetMargins()

Defines the top margin. The method can be called before creating the first page.
@param float $margin The margin.
@public
@since 1.5
@see SetLeftMargin(), SetRightMargin(), SetAutoPageBreak(), SetMargins()

Defines the right margin. The method can be called before creating the first page.
@param float $margin The margin.
@public
@since 1.5
@see SetLeftMargin(), SetTopMargin(), SetAutoPageBreak(), SetMargins()

Set the same internal Cell padding for top, right, bottom, left-
@param float $pad internal padding.
@public
@since 2.1.000 (2008-01-09)
@see getCellPaddings(), setCellPaddings()

Set the internal Cell paddings.
@param float|null $left left padding
@param float|null $top top padding
@param float|null $right right padding
@param float|null $bottom bottom padding
@public
@since 5.9.000 (2010-10-03)
@see getCellPaddings(), SetCellPadding()

Get the internal Cell padding array.
@return array of padding values
@public
@since 5.9.000 (2010-10-03)
@see setCellPaddings(), SetCellPadding()

Set the internal Cell margins.
@param float|null $left left margin
@param float|null $top top margin
@param float|null $right right margin
@param float|null $bottom bottom margin
@public
@since 5.9.000 (2010-10-03)
@see getCellMargins()

Get the internal Cell margin array.
@return array of margin values
@public
@since 5.9.000 (2010-10-03)
@see setCellMargins()

Adjust the internal Cell padding array to take account of the line width.
@param string|array|int $brd Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@return void|array array of adjustments
@public
@since 5.9.000 (2010-10-03)

Enables or disables the automatic page breaking mode. When enabling, the second parameter is the distance from the bottom of the page that defines the triggering limit. By default, the mode is on and the margin is 2 cm.
@param boolean $auto Boolean indicating if mode should be on or off.
@param float $margin Distance from the bottom of the page.
@public
@since 1.0
@see Cell(), MultiCell(), AcceptPageBreak()

Return the auto-page-break mode (true or false).
@return bool auto-page-break mode
@public
@since 5.9.088

Defines the way the document is to be displayed by the viewer.
@param mixed $zoom The zoom to use. It can be one of the following string values or a number indicating the zooming factor to use. <ul><li>fullpage: displays the entire page on screen </li><li>fullwidth: uses maximum width of window</li><li>real: uses real size (equivalent to 100% zoom)</li><li>default: uses viewer default mode</li></ul>
@param string $layout The page layout. Possible values are:<ul><li>SinglePage Display one page at a time</li><li>OneColumn Display the pages in one column</li><li>TwoColumnLeft Display the pages in two columns, with odd-numbered pages on the left</li><li>TwoColumnRight Display the pages in two columns, with odd-numbered pages on the right</li><li>TwoPageLeft (PDF 1.5) Display the pages two at a time, with odd-numbered pages on the left</li><li>TwoPageRight (PDF 1.5) Display the pages two at a time, with odd-numbered pages on the right</li></ul>
@param string $mode A name object specifying how the document should be displayed when opened:<ul><li>UseNone Neither document outline nor thumbnail images visible</li><li>UseOutlines Document outline visible</li><li>UseThumbs Thumbnail images visible</li><li>FullScreen Full-screen mode, with no menu bar, window controls, or any other window visible</li><li>UseOC (PDF 1.5) Optional content group panel visible</li><li>UseAttachments (PDF 1.6) Attachments panel visible</li></ul>
@public
@since 1.2

Activates or deactivates page compression. When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document. Compression is on by default.
Note: the Zlib extension is required for this feature. If not present, compression will be turned off.
@param boolean $compress Boolean indicating if compression must be enabled.
@public
@since 1.4

Set flag to force sRGB_IEC61966-2.1 black scaled ICC color profile for the whole document.
@param boolean $mode If true force sRGB output intent.
@public
@since 5.9.121 (2011-09-28)

Turn on/off Unicode mode for document information dictionary (meta tags).
This has effect only when unicode mode is set to false.
@param boolean $unicode if true set the meta information in Unicode
@since 5.9.027 (2010-12-01)
@public

Defines the title of the document.
@param string $title The title.
@public
@since 1.2
@see SetAuthor(), SetCreator(), SetKeywords(), SetSubject()

Defines the subject of the document.
@param string $subject The subject.
@public
@since 1.2
@see SetAuthor(), SetCreator(), SetKeywords(), SetTitle()

Defines the author of the document.
@param string $author The name of the author.
@public
@since 1.2
@see SetCreator(), SetKeywords(), SetSubject(), SetTitle()

Associates keywords with the document, generally in the form 'keyword1 keyword2 ...'.
@param string $keywords The list of keywords.
@public
@since 1.2
@see SetAuthor(), SetCreator(), SetSubject(), SetTitle()

Defines the creator of the document. This is typically the name of the application that generates the PDF.
@param string $creator The name of the creator.
@public
@since 1.2
@see SetAuthor(), SetKeywords(), SetSubject(), SetTitle()

Whether to allow local file path in image html tags, when prefixed with file://
@param bool $allowLocalFiles true, when local files should be allowed. Otherwise false.
@public
@since 6.4

Throw an exception or print an error message and die if the K_TCPDF_PARSER_THROW_EXCEPTION_ERROR constant is set to true.
@param string $msg The error message
@public
@since 1.0

This method begins the generation of the PDF document.
It is not necessary to call it explicitly because AddPage() does it automatically.
Note: no page is created by this method
@public
@since 1.0
@see AddPage(), Close()

Terminates the PDF document.
It is not necessary to call this method explicitly because Output() does it automatically.
If the document contains no page, AddPage() is called to prevent from getting an invalid document.
@public
@since 1.0
@see Open(), Output()

Move pointer at the specified document page and update page dimensions.
@param int $pnum page number (1 ... numpages)
@param boolean $resetmargins if true reset left, right, top margins and Y position.
@public
@since 2.1.000 (2008-01-07)
@see getPage(), lastpage(), getNumPages()

Reset pointer to the last document page.
@param boolean $resetmargins if true reset left, right, top margins and Y position.
@public
@since 2.0.000 (2008-01-04)
@see setPage(), getPage(), getNumPages()

Get current document page number.
@return int page number
@public
@since 2.1.000 (2008-01-07)
@see setPage(), lastpage(), getNumPages()

Get the total number of insered pages.
@return int number of pages
@public
@since 2.1.000 (2008-01-07)
@see setPage(), getPage(), lastpage()

Adds a new TOC (Table Of Content) page to the document.
@param string $orientation page orientation.
@param mixed $format The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() or an array of parameters specified at setPageFormat().
@param boolean $keepmargins if true overwrites the default page margins with the current margins
@public
@since 5.0.001 (2010-05-06)
@see AddPage(), startPage(), endPage(), endTOCPage()

Terminate the current TOC (Table Of Content) page
@public
@since 5.0.001 (2010-05-06)
@see AddPage(), startPage(), endPage(), addTOCPage()

Adds a new page to the document. If a page is already present, the Footer() method is called first to output the footer (if enabled). Then the page is added, the current position set to the top-left corner according to the left and top margins (or top-right if in RTL mode), and Header() is called to display the header (if enabled).
The origin of the coordinate system is at the top-left corner (or top-right for RTL) and increasing ordinates go downwards.
@param string $orientation page orientation. Possible values are (case insensitive):<ul><li>P or PORTRAIT (default)</li><li>L or LANDSCAPE</li></ul>
@param mixed $format The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() or an array of parameters specified at setPageFormat().
@param boolean $keepmargins if true overwrites the default page margins with the current margins
@param boolean $tocpage if true set the tocpage state to true (the added page will be used to display Table Of Content).
@public
@since 1.0
@see startPage(), endPage(), addTOCPage(), endTOCPage(), getPageSizeFromFormat(), setPageFormat()

Terminate the current page
@param boolean $tocpage if true set the tocpage state to false (end the page used to display Table Of Content).
@public
@since 4.2.010 (2008-11-14)
@see AddPage(), startPage(), addTOCPage(), endTOCPage()

Starts a new page to the document. The page must be closed using the endPage() function.
The origin of the coordinate system is at the top-left corner and increasing ordinates go downwards.
@param string $orientation page orientation. Possible values are (case insensitive):<ul><li>P or PORTRAIT (default)</li><li>L or LANDSCAPE</li></ul>
@param mixed $format The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() or an array of parameters specified at setPageFormat().
@param boolean $tocpage if true the page is designated to contain the Table-Of-Content.
@since 4.2.010 (2008-11-14)
@see AddPage(), endPage(), addTOCPage(), endTOCPage(), getPageSizeFromFormat(), setPageFormat()
@public

Set start-writing mark on current page stream used to put borders and fills.
Borders and fills are always created after content and inserted on the position marked by this method.
This function must be called after calling Image() function for a background image.
Background images must be always inserted before calling Multicell() or WriteHTMLCell() or WriteHTML() functions.
@public
@since 4.0.016 (2008-07-30)

Set start-writing mark on selected page.
Borders and fills are always created after content and inserted on the position marked by this method.
@param int $page page number (default is the current page)
@protected
@since 4.6.021 (2009-07-20)

Set header data.
@param string $ln header image logo
@param int $lw header image logo width in mm
@param string $ht string to print as title on document header
@param string $hs string to print on document header
@param int[] $tc RGB array color for text.
@param int[] $lc RGB array color for line.
@public

Set footer data.
@param int[] $tc RGB array color for text.
@param int[] $lc RGB array color for line.
@public

Returns header data:
<ul><li>$ret['logo'] = logo image</li><li>$ret['logo_width'] = width of the image logo in user units</li><li>$ret['title'] = header title</li><li>$ret['string'] = header description string</li></ul>
@return array<string,mixed>
@public
@since 4.0.012 (2008-07-24)

Set header margin.
(minimum distance between header and top page margin)
@param int $hm distance in user units
@public

Returns header margin in user units.
@return float
@since 4.0.012 (2008-07-24)
@public

Set footer margin.
(minimum distance between footer and bottom page margin)
@param int $fm distance in user units
@public

Returns footer margin in user units.
@return float
@since 4.0.012 (2008-07-24)
@public

Set a flag to print page header.
@param boolean $val set to true to print the page header (default), false otherwise.
@public

Set a flag to print page footer.
@param boolean $val set to true to print the page footer (default), false otherwise.
@public

Return the right-bottom (or left-bottom for RTL) corner X coordinate of last inserted image
@return float
@public

Return the right-bottom (or left-bottom for RTL) corner Y coordinate of last inserted image
@return float
@public

Reset the xobject template used by Header() method.
@public

Set a flag to automatically reset the xobject template used by Header() method at each page.
@param boolean $val set to true to reset Header xobject template at each page, false otherwise.
@public

This method is used to render the page header.
It is automatically called by AddPage() and could be overwritten in your own inherited class.
@public

This method is used to render the page footer.
It is automatically called by AddPage() and could be overwritten in your own inherited class.
@public

This method is used to render the page header.
@protected
@since 4.0.012 (2008-07-24)

This method is used to render the page footer.
@protected
@since 4.0.012 (2008-07-24)

Check if we are on the page body (excluding page header and footer).
@return bool true if we are not in page header nor in page footer, false otherwise.
@protected
@since 5.9.091 (2011-06-15)

This method is used to render the table header on new page (if any).
@protected
@since 4.5.030 (2009-03-25)

Returns the current page number.
@return int page number
@public
@since 1.0
@see getAliasNbPages()

Returns the array of spot colors.
@return array Spot colors array.
@public
@since 6.0.038 (2013-09-30)

Defines a new spot color.
It can be expressed in RGB components or gray scale.
The method can be called before the first page is created and the value is retained from page to page.
@param string $name Full name of the spot color.
@param float $c Cyan color for CMYK. Value between 0 and 100.
@param float $m Magenta color for CMYK. Value between 0 and 100.
@param float $y Yellow color for CMYK. Value between 0 and 100.
@param float $k Key (Black) color for CMYK. Value between 0 and 100.
@public
@since 4.0.024 (2008-09-12)
@see SetDrawSpotColor(), SetFillSpotColor(), SetTextSpotColor()

Set the spot color for the specified type ('draw', 'fill', 'text').
@param string $type Type of object affected by this color: ('draw', 'fill', 'text').
@param string $name Name of the spot color.
@param float $tint Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
@return string PDF color command.
@public
@since 5.9.125 (2011-10-03)

Defines the spot color used for all drawing operations (lines, rectangles and cell borders).
@param string $name Name of the spot color.
@param float $tint Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
@public
@since 4.0.024 (2008-09-12)
@see AddSpotColor(), SetFillSpotColor(), SetTextSpotColor()

Defines the spot color used for all filling operations (filled rectangles and cell backgrounds).
@param string $name Name of the spot color.
@param float $tint Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
@public
@since 4.0.024 (2008-09-12)
@see AddSpotColor(), SetDrawSpotColor(), SetTextSpotColor()

Defines the spot color used for text.
@param string $name Name of the spot color.
@param int $tint Intensity of the color (from 0 to 100 ; 100 = full intensity by default).
@public
@since 4.0.024 (2008-09-12)
@see AddSpotColor(), SetDrawSpotColor(), SetFillSpotColor()

Set the color array for the specified type ('draw', 'fill', 'text').
It can be expressed in RGB, CMYK or GRAY SCALE components.
The method can be called before the first page is created and the value is retained from page to page.
@param string $type Type of object affected by this color: ('draw', 'fill', 'text').
@param array $color Array of colors (1=gray, 3=RGB, 4=CMYK or 5=spotcolor=CMYK+name values).
@param boolean $ret If true do not send the PDF command.
@return string The PDF command or empty string.
@public
@since 3.1.000 (2008-06-11)

Defines the color used for all drawing operations (lines, rectangles and cell borders).
It can be expressed in RGB, CMYK or GRAY SCALE components.
The method can be called before the first page is created and the value is retained from page to page.
@param array $color Array of colors (1, 3 or 4 values).
@param boolean $ret If true do not send the PDF command.
@return string the PDF command
@public
@since 3.1.000 (2008-06-11)
@see SetDrawColor()

Defines the color used for all filling operations (filled rectangles and cell backgrounds).
It can be expressed in RGB, CMYK or GRAY SCALE components.
The method can be called before the first page is created and the value is retained from page to page.
@param array $color Array of colors (1, 3 or 4 values).
@param boolean $ret If true do not send the PDF command.
@public
@since 3.1.000 (2008-6-11)
@see SetFillColor()

Defines the color used for text. It can be expressed in RGB components or gray scale.
The method can be called before the first page is created and the value is retained from page to page.
@param array $color Array of colors (1, 3 or 4 values).
@param boolean $ret If true do not send the PDF command.
@public
@since 3.1.000 (2008-6-11)
@see SetFillColor()

Defines the color used by the specified type ('draw', 'fill', 'text').
@param string $type Type of object affected by this color: ('draw', 'fill', 'text').
@param float $col1 GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
@param float $col2 GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
@param float $col3 BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
@param float $col4 KEY (BLACK) color for CMYK (0-100).
@param boolean $ret If true do not send the command.
@param string $name spot color name (if any)
@return string The PDF command or empty string.
@public
@since 5.9.125 (2011-10-03)

Defines the color used for all drawing operations (lines, rectangles and cell borders). It can be expressed in RGB components or gray scale. The method can be called before the first page is created and the value is retained from page to page.
@param float $col1 GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
@param float $col2 GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
@param float $col3 BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
@param float $col4 KEY (BLACK) color for CMYK (0-100).
@param boolean $ret If true do not send the command.
@param string $name spot color name (if any)
@return string the PDF command
@public
@since 1.3
@see SetDrawColorArray(), SetFillColor(), SetTextColor(), Line(), Rect(), Cell(), MultiCell()

Defines the color used for all filling operations (filled rectangles and cell backgrounds). It can be expressed in RGB components or gray scale. The method can be called before the first page is created and the value is retained from page to page.
@param float $col1 GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
@param float $col2 GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
@param float $col3 BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
@param float $col4 KEY (BLACK) color for CMYK (0-100).
@param boolean $ret If true do not send the command.
@param string $name Spot color name (if any).
@return string The PDF command.
@public
@since 1.3
@see SetFillColorArray(), SetDrawColor(), SetTextColor(), Rect(), Cell(), MultiCell()

Defines the color used for text. It can be expressed in RGB components or gray scale. The method can be called before the first page is created and the value is retained from page to page.
@param float $col1 GRAY level for single color, or Red color for RGB (0-255), or CYAN color for CMYK (0-100).
@param float $col2 GREEN color for RGB (0-255), or MAGENTA color for CMYK (0-100).
@param float $col3 BLUE color for RGB (0-255), or YELLOW color for CMYK (0-100).
@param float $col4 KEY (BLACK) color for CMYK (0-100).
@param boolean $ret If true do not send the command.
@param string $name Spot color name (if any).
@return string Empty string.
@public
@since 1.3
@see SetTextColorArray(), SetDrawColor(), SetFillColor(), Text(), Cell(), MultiCell()

Returns the length of a string in user unit. A font must be selected.<br>
@param string $s The string whose length is to be computed
@param string $fontname Family font. It can be either a name defined by AddFont() or one of the standard families. It is also possible to pass an empty string, in that case, the current family is retained.
@param string $fontstyle Font style. Possible values are (case insensitive):<ul><li>empty string: regular</li><li>B: bold</li><li>I: italic</li><li>U: underline</li><li>D: line-through</li><li>O: overline</li></ul> or any combination. The default value is regular.
@param float $fontsize Font size in points. The default value is the current size.
@param boolean $getarray if true returns an array of characters widths, if false returns the total length.
@return float[]|float total string length or array of characted widths
@author Nicola Asuni
@public
@since 1.2

Returns the string length of an array of chars in user unit or an array of characters widths. A font must be selected.<br>
@param array $sa The array of chars whose total length is to be computed
@param string $fontname Family font. It can be either a name defined by AddFont() or one of the standard families. It is also possible to pass an empty string, in that case, the current family is retained.
@param string $fontstyle Font style. Possible values are (case insensitive):<ul><li>empty string: regular</li><li>B: bold</li><li>I: italic</li><li>U: underline</li><li>D: line through</li><li>O: overline</li></ul> or any combination. The default value is regular.
@param float $fontsize Font size in points. The default value is the current size.
@param boolean $getarray if true returns an array of characters widths, if false returns the total length.
@return float[]|float total string length or array of characted widths
@author Nicola Asuni
@public
@since 2.4.000 (2008-03-06)

Returns the length of the char in user unit for the current font considering current stretching and spacing (tracking).
@param int $char The char code whose length is to be returned
@param boolean $notlast If false ignore the font-spacing.
@return float char width
@author Nicola Asuni
@public
@since 2.4.000 (2008-03-06)

Returns the length of the char in user unit for the current font.
@param int $char The char code whose length is to be returned
@return float char width
@author Nicola Asuni
@public
@since 5.9.000 (2010-09-28)

Returns the numbero of characters in a string.
@param string $s The input string.
@return int number of characters
@public
@since 2.0.0001 (2008-01-07)

Fill the list of available fonts ($this->fontlist).
@protected
@since 4.0.013 (2008-07-28)

Imports a TrueType, Type1, core, or CID0 font and makes it available.
It is necessary to generate a font definition file first (read /fonts/utils/README.TXT).
The definition file (and the font file itself when embedding) must be present either in the current directory or in the one indicated by K_PATH_FONTS if the constant is defined. If it could not be found, the error "Could not include font definition file" is generated.
@param string $family Font family. The name can be chosen arbitrarily. If it is a standard family name, it will override the corresponding font.
@param string $style Font style. Possible values are (case insensitive):<ul><li>empty string: regular (default)</li><li>B: bold</li><li>I: italic</li><li>BI or IB: bold italic</li></ul>
@param string $fontfile The font definition file. By default, the name is built from the family and style, in lower case with no spaces.
@return array|false array containing the font data, or false in case of error.
@param mixed $subset if true embedd only a subset of the font (stores only the information related to the used characters); if false embedd full font; if 'default' uses the default value set using setFontSubsetting(). This option is valid only for TrueTypeUnicode fonts. If you want to enable users to change the document, set this parameter to false. If you subset the font, the person who receives your PDF would need to have your same font in order to make changes to your PDF. The file size of the PDF would also be smaller because you are embedding only part of a font.
@public
@since 1.5
@see SetFont(), setFontSubsetting()

Sets the font used to print character strings.
The font can be either a standard one or a font added via the AddFont() method. Standard fonts use Windows encoding cp1252 (Western Europe).
The method can be called before the first page is created and the font is retained from page to page.
If you just wish to change the current font size, it is simpler to call SetFontSize().
Note: for the standard fonts, the font metric files must be accessible. There are three possibilities for this:<ul><li>They are in the current directory (the one where the running script lies)</li><li>They are in one of the directories defined by the include_path parameter</li><li>They are in the directory defined by the K_PATH_FONTS constant</li></ul><br />
@param string $family Family font. It can be either a name defined by AddFont() or one of the standard Type1 families (case insensitive):<ul><li>times (Times-Roman)</li><li>timesb (Times-Bold)</li><li>timesi (Times-Italic)</li><li>timesbi (Times-BoldItalic)</li><li>helvetica (Helvetica)</li><li>helveticab (Helvetica-Bold)</li><li>helveticai (Helvetica-Oblique)</li><li>helveticabi (Helvetica-BoldOblique)</li><li>courier (Courier)</li><li>courierb (Courier-Bold)</li><li>courieri (Courier-Oblique)</li><li>courierbi (Courier-BoldOblique)</li><li>symbol (Symbol)</li><li>zapfdingbats (ZapfDingbats)</li></ul> It is also possible to pass an empty string. In that case, the current family is retained.
@param string $style Font style. Possible values are (case insensitive):<ul><li>empty string: regular</li><li>B: bold</li><li>I: italic</li><li>U: underline</li><li>D: line through</li><li>O: overline</li></ul> or any combination. The default value is regular. Bold and italic styles do not apply to Symbol and ZapfDingbats basic fonts or other fonts when not defined.
@param float|null $size Font size in points. The default value is the current size. If no size has been specified since the beginning of the document, the value taken is 12
@param string $fontfile The font definition file. By default, the name is built from the family and style, in lower case with no spaces.
@param mixed $subset if true embedd only a subset of the font (stores only the information related to the used characters); if false embedd full font; if 'default' uses the default value set using setFontSubsetting(). This option is valid only for TrueTypeUnicode fonts. If you want to enable users to change the document, set this parameter to false. If you subset the font, the person who receives your PDF would need to have your same font in order to make changes to your PDF. The file size of the PDF would also be smaller because you are embedding only part of a font.
@param boolean $out if true output the font size command, otherwise only set the font properties.
@author Nicola Asuni
@public
@since 1.0
@see AddFont(), SetFontSize()

Defines the size of the current font.
@param float $size The font size in points.
@param boolean $out if true output the font size command, otherwise only set the font properties.
@public
@since 1.0
@see SetFont()

Returns the bounding box of the current font in user units.
@return array
@public
@since 5.9.152 (2012-03-23)

Convert a relative font measure into absolute value.
@param int $s Font measure.
@return float Absolute measure.
@since 5.9.186 (2012-09-13)

Returns the glyph bounding box of the specified character in the current font in user units.
@param int $char Input character code.
@return false|array array(xMin, yMin, xMax, yMax) or FALSE if not defined.
@since 5.9.186 (2012-09-13)

Return the font descent value
@param string $font font name
@param string $style font style
@param float $size The size (in points)
@return int font descent
@public
@author Nicola Asuni
@since 4.9.003 (2010-03-30)

Return the font ascent value.
@param string $font font name
@param string $style font style
@param float $size The size (in points)
@return int font ascent
@public
@author Nicola Asuni
@since 4.9.003 (2010-03-30)

Return true in the character is present in the specified font.
@param mixed $char Character to check (integer value or string)
@param string $font Font name (family name).
@param string $style Font style.
@return bool true if the char is defined, false otherwise.
@public
@since 5.9.153 (2012-03-28)

Replace missing font characters on selected font with specified substitutions.
@param string $text Text to process.
@param string $font Font name (family name).
@param string $style Font style.
@param array $subs Array of possible character substitutions. The key is the character to check (integer value) and the value is a single intege value or an array of possible substitutes.
@return string Processed text.
@public
@since 5.9.153 (2012-03-28)

Defines the default monospaced font.
@param string $font Font name.
@public
@since 4.5.025

Creates a new internal link and returns its identifier. An internal link is a clickable area which directs to another place within the document.<br />
The identifier can then be passed to Cell(), Write(), Image() or Link(). The destination is defined with SetLink().
@public
@since 1.5
@see Cell(), Write(), Image(), Link(), SetLink()

Defines the page and position a link points to.
@param int $link The link identifier returned by AddLink()
@param float $y Ordinate of target position; -1 indicates the current position. The default value is 0 (top of page)
@param int|string $page Number of target page; -1 indicates the current page (default value). If you prefix a page number with the * character, then this page will not be changed when adding/deleting/moving pages.
@public
@since 1.5
@see AddLink()

Puts a link on a rectangular area of the page.
Text or image links are generally put via Cell(), Write() or Image(), but this method can be useful for instance to define a clickable area inside an image.
@param float $x Abscissa of the upper-left corner of the rectangle
@param float $y Ordinate of the upper-left corner of the rectangle
@param float $w Width of the rectangle
@param float $h Height of the rectangle
@param mixed $link URL or identifier returned by AddLink()
@param int $spaces number of spaces on the text to link
@public
@since 1.5
@see AddLink(), Annotation(), Cell(), Write(), Image()

Puts a markup annotation on a rectangular area of the page.
!!!!THE ANNOTATION SUPPORT IS NOT YET FULLY IMPLEMENTED !!!!
@param float $x Abscissa of the upper-left corner of the rectangle
@param float $y Ordinate of the upper-left corner of the rectangle
@param float $w Width of the rectangle
@param float $h Height of the rectangle
@param string $text annotation text or alternate content
@param array $opt array of options (see section 8.4 of PDF reference 1.7).
@param int $spaces number of spaces on the text to link
@public
@since 4.0.018 (2008-08-06)

Embedd the attached files.
@since 4.4.000 (2008-12-07)
@protected
@see Annotation()

Prints a text cell at the specified position.
This method allows to place a string precisely on the page.
@param float $x Abscissa of the cell origin
@param float $y Ordinate of the cell origin
@param string $txt String to print
@param int $fstroke outline size in user units (0 = disable)
@param boolean $fclip if true activate clipping mode (you must call StartTransform() before this function and StopTransform() to stop the clipping tranformation).
@param boolean $ffill if true fills the text
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param int $ln Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL languages)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul>Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
@param string $align Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
@param boolean $fill Indicates if the cell background must be painted (true) or transparent (false).
@param mixed $link URL or identifier returned by AddLink().
@param int $stretch font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
@param boolean $ignore_min_height if true ignore automatic minimum height value.
@param string $calign cell vertical alignment relative to the specified Y value. Possible values are:<ul><li>T : cell top</li><li>A : font top</li><li>L : font baseline</li><li>D : font bottom</li><li>B : cell bottom</li></ul>
@param string $valign text vertical alignment inside the cell. Possible values are:<ul><li>T : top</li><li>C : center</li><li>B : bottom</li></ul>
@param boolean $rtloff if true uses the page top-left corner as origin of axis for $x and $y initial position.
@public
@since 1.0
@see Cell(), Write(), MultiCell(), WriteHTML(), WriteHTMLCell()

Whenever a page break condition is met, the method is called, and the break is issued or not depending on the returned value.
The default implementation returns a value according to the mode selected by SetAutoPageBreak().<br />
This method is called automatically and should not be called directly by the application.
@return bool
@public
@since 1.4
@see SetAutoPageBreak()

Add page if needed.
@param float $h Cell height. Default value: 0.
@param float|null $y starting y position, leave empty for current position.
@param bool  $addpage if true add a page, otherwise only return the true/false state
@return bool true in case of page break, false otherwise.
@since 3.2.000 (2008-07-01)
@protected

Prints a cell (rectangular area) with optional borders, background color and character string. The upper-left corner of the cell corresponds to the current position. The text can be aligned or centered. After the call, the current position moves to the right or to the next line. It is possible to put a link on the text.<br />
If automatic page breaking is enabled and the cell goes beyond the limit, a page break is done before outputting.
@param float $w Cell width. If 0, the cell extends up to the right margin.
@param float $h Cell height. Default value: 0.
@param string $txt String to print. Default value: empty string.
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param int $ln Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL languages)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul> Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
@param string $align Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
@param boolean $fill Indicates if the cell background must be painted (true) or transparent (false).
@param mixed $link URL or identifier returned by AddLink().
@param int $stretch font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
@param boolean $ignore_min_height if true ignore automatic minimum height value.
@param string $calign cell vertical alignment relative to the specified Y value. Possible values are:<ul><li>T : cell top</li><li>C : center</li><li>B : cell bottom</li><li>A : font top</li><li>L : font baseline</li><li>D : font bottom</li></ul>
@param string $valign text vertical alignment inside the cell. Possible values are:<ul><li>T : top</li><li>C : center</li><li>B : bottom</li></ul>
@public
@since 1.0
@see SetFont(), SetDrawColor(), SetFillColor(), SetTextColor(), SetLineWidth(), AddLink(), Ln(), MultiCell(), Write(), SetAutoPageBreak()

Returns the PDF string code to print a cell (rectangular area) with optional borders, background color and character string. The upper-left corner of the cell corresponds to the current position. The text can be aligned or centered. After the call, the current position moves to the right or to the next line. It is possible to put a link on the text.<br />
If automatic page breaking is enabled and the cell goes beyond the limit, a page break is done before outputting.
@param float $w Cell width. If 0, the cell extends up to the right margin.
@param float $h Cell height. Default value: 0.
@param string $txt String to print. Default value: empty string.
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param int $ln Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL languages)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul>Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
@param string $align Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
@param boolean $fill Indicates if the cell background must be painted (true) or transparent (false).
@param mixed $link URL or identifier returned by AddLink().
@param int $stretch font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
@param boolean $ignore_min_height if true ignore automatic minimum height value.
@param string $calign cell vertical alignment relative to the specified Y value. Possible values are:<ul><li>T : cell top</li><li>C : center</li><li>B : cell bottom</li><li>A : font top</li><li>L : font baseline</li><li>D : font bottom</li></ul>
@param string $valign text vertical alignment inside the cell. Possible values are:<ul><li>T : top</li><li>M : middle</li><li>B : bottom</li></ul>
@return string containing cell code
@protected
@since 1.0
@see Cell()

Replace a char if is defined on the current font.
@param int $oldchar Integer code (unicode) of the character to replace.
@param int $newchar Integer code (unicode) of the new character.
@return int the replaced char or the old char in case the new char i not defined
@protected
@since 5.9.167 (2012-06-22)

Returns the code to draw the cell border
@param float $x X coordinate.
@param float $y Y coordinate.
@param float $w Cell width.
@param float $h Cell height.
@param string|array|int $brd Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@return string containing cell border code
@protected
@see SetLineStyle()
@since 5.7.000 (2010-08-02)

This method allows printing text with line breaks.
They can be automatic (as soon as the text reaches the right border of the cell) or explicit (via the \n character). As many cells as necessary are output, one below the other.<br />
Text can be aligned, centered or justified. The cell block can be framed and the background painted.
@param float $w Width of cells. If 0, they extend up to the right margin of the page.
@param float $h Cell minimum height. The cell extends automatically if needed.
@param string $txt String to print
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param string $align Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align</li><li>C: center</li><li>R: right align</li><li>J: justification (default value when $ishtml=false)</li></ul>
@param boolean $fill Indicates if the cell background must be painted (true) or transparent (false).
@param int $ln Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right</li><li>1: to the beginning of the next line [DEFAULT]</li><li>2: below</li></ul>
@param float|null $x x position in user units
@param float|null $y y position in user units
@param boolean $reseth if true reset the last cell height (default true).
@param int $stretch font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
@param boolean $ishtml INTERNAL USE ONLY -- set to true if $txt is HTML content (default = false). Never set this parameter to true, use instead writeHTMLCell() or writeHTML() methods.
@param boolean $autopadding if true, uses internal padding and automatically adjust it to account for line width.
@param float $maxh maximum height. It should be >= $h and less then remaining space to the bottom of the page, or 0 for disable this feature. This feature works only when $ishtml=false.
@param string $valign Vertical alignment of text (requires $maxh = $h > 0). Possible values are:<ul><li>T: TOP</li><li>M: middle</li><li>B: bottom</li></ul>. This feature works only when $ishtml=false and the cell must fit in a single page.
@param boolean $fitcell if true attempt to fit all the text within the cell by reducing the font size (do not work in HTML mode). $maxh must be greater than 0 and equal to $h.
@return int Return the number of cells or 1 for html mode.
@public
@since 1.3
@see SetFont(), SetDrawColor(), SetFillColor(), SetTextColor(), SetLineWidth(), Cell(), Write(), SetAutoPageBreak()

This method return the estimated number of lines for print a simple text string using Multicell() method.
@param string $txt String for calculating his height
@param float $w Width of cells. If 0, they extend up to the right margin of the page.
@param boolean $reseth if true reset the last cell height (default false).
@param boolean $autopadding if true, uses internal padding and automatically adjust it to account for line width (default true).
@param array|null $cellpadding Internal cell padding, if empty uses default cell padding.
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@return float Return the minimal height needed for multicell method for printing the $txt param.
@author Alexander Escalona Fern\E1ndez, Nicola Asuni
@public
@since 4.5.011

This method return the estimated height needed for printing a simple text string using the Multicell() method.
Generally, if you want to know the exact height for a block of content you can use the following alternative technique:
@pre
 // store current object
 $pdf->startTransaction();
 // store starting values
 $start_y = $pdf->GetY();
 $start_page = $pdf->getPage();
 // call your printing functions with your parameters
 // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 $pdf->MultiCell($w=0, $h=0, $txt, $border=1, $align='L', $fill=false, $ln=1, $x=null, $y=null, $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
 // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 // get the new Y
 $end_y = $pdf->GetY();
 $end_page = $pdf->getPage();
 // calculate height
 $height = 0;
 if ($end_page == $start_page) {
 	$height = $end_y - $start_y;
 } else {
 	for ($page=$start_page; $page <= $end_page; ++$page) {
 		$this->setPage($page);
 		if ($page == $start_page) {
 			// first page
 			$height += $this->h - $start_y - $this->bMargin;
 		} elseif ($page == $end_page) {
 			// last page
 			$height += $end_y - $this->tMargin;
 		} else {
 			$height += $this->h - $this->tMargin - $this->bMargin;
 		}
 	}
 }
 // restore previous object
 $pdf = $pdf->rollbackTransaction();
@param float $w Width of cells. If 0, they extend up to the right margin of the page.
@param string $txt String for calculating his height
@param boolean $reseth if true reset the last cell height (default false).
@param boolean $autopadding if true, uses internal padding and automatically adjust it to account for line width (default true).
@param array|null $cellpadding Internal cell padding, if empty uses default cell padding.
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@return float Return the minimal height needed for multicell method for printing the $txt param.
@author Nicola Asuni, Alexander Escalona Fern\E1ndez
@public

This method prints text from the current position.<br />
@param float $h Line height
@param string $txt String to print
@param mixed $link URL or identifier returned by AddLink()
@param boolean $fill Indicates if the cell background must be painted (true) or transparent (false).
@param string $align Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
@param boolean $ln if true set cursor at the bottom of the line, otherwise set cursor at the top of the line.
@param int $stretch font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
@param boolean $firstline if true prints only the first line and return the remaining string.
@param boolean $firstblock if true the string is the starting of a line.
@param float $maxh maximum height. It should be >= $h and less then remaining space to the bottom of the page, or 0 for disable this feature.
@param float $wadj first line width will be reduced by this amount (used in HTML mode).
@param array|null $margin margin array of the parent container
@return mixed Return the number of cells or the remaining string if $firstline = true.
@public
@since 1.5

Returns the remaining width between the current position and margins.
@return float Return the remaining width
@protected

Set the block dimensions accounting for page breaks and page/column fitting
@param float $w width
@param float $h height
@param float $x X coordinate
@param float $y Y coodiante
@param boolean $fitonpage if true the block is resized to not exceed page dimensions.
@return array array($w, $h, $x, $y)
@protected
@since 5.5.009 (2010-07-05)

Puts an image in the page.
The upper-left corner must be given.
The dimensions can be specified in different ways:<ul>
<li>explicit width and height (expressed in user unit)</li>
<li>one explicit dimension, the other being calculated automatically in order to keep the original proportions</li>
<li>no explicit dimension, in which case the image is put at 72 dpi</li></ul>
Supported formats are JPEG and PNG images whitout GD library and all images supported by GD: GD, GD2, GD2PART, GIF, JPEG, PNG, BMP, XBM, XPM;
The format can be specified explicitly or inferred from the file extension.<br />
It is possible to put a link on the image.<br />
Remark: if an image is used several times, only one copy will be embedded in the file.<br />
@param string $file Name of the file containing the image or a '@' character followed by the image data string. To link an image without embedding it on the document, set an asterisk character before the URL (i.e.: '*http://www.example.com/image.jpg').
@param float|null $x Abscissa of the upper-left corner (LTR) or upper-right corner (RTL).
@param float|null $y Ordinate of the upper-left corner (LTR) or upper-right corner (RTL).
@param float $w Width of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param float $h Height of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param string $type Image format. Possible values are (case insensitive): JPEG and PNG (whitout GD library) and all images supported by GD: GD, GD2, GD2PART, GIF, JPEG, PNG, BMP, XBM, XPM;. If not specified, the type is inferred from the file extension.
@param mixed $link URL or identifier returned by AddLink().
@param string $align Indicates the alignment of the pointer next to image insertion relative to image height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
@param mixed $resize If true resize (reduce) the image to fit $w and $h (requires GD or ImageMagick library); if false do not resize; if 2 force resize in all cases (upscaling and downscaling).
@param int $dpi dot-per-inch resolution used on resize
@param string $palign Allows to center or align the image on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
@param boolean $ismask true if this image is a mask, false otherwise
@param mixed $imgmask image object returned by this function or false
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param mixed $fitbox If not false scale image dimensions proportionally to fit within the ($w, $h) box. $fitbox can be true or a 2 characters string indicating the image alignment inside the box. The first character indicate the horizontal alignment (L = left, C = center, R = right) the second character indicate the vertical algnment (T = top, M = middle, B = bottom).
@param boolean $hidden If true do not display the image.
@param boolean $fitonpage If true the image is resized to not exceed page dimensions.
@param boolean $alt If true the image will be added as alternative and not directly printed (the ID of the image will be returned).
@param array $altimgs Array of alternate images IDs. Each alternative image must be an array with two values: an integer representing the image ID (the value returned by the Image method) and a boolean value to indicate if the image is the default for printing.
@return mixed|false image information
@public
@since 1.1

Extract info from a PNG image with alpha channel using the Imagick or GD library.
@param string $file Name of the file containing the image.
@param float $x Abscissa of the upper-left corner.
@param float $y Ordinate of the upper-left corner.
@param float $wpx Original width of the image in pixels.
@param float $hpx original height of the image in pixels.
@param float $w Width of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param float $h Height of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param string $type Image format. Possible values are (case insensitive): JPEG and PNG (whitout GD library) and all images supported by GD: GD, GD2, GD2PART, GIF, JPEG, PNG, BMP, XBM, XPM;. If not specified, the type is inferred from the file extension.
@param mixed $link URL or identifier returned by AddLink().
@param string $align Indicates the alignment of the pointer next to image insertion relative to image height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
@param boolean $resize If true resize (reduce) the image to fit $w and $h (requires GD library).
@param int $dpi dot-per-inch resolution used on resize
@param string $palign Allows to center or align the image on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
@param string $filehash File hash used to build unique file names.
@author Nicola Asuni
@protected
@since 4.3.007 (2008-12-04)
@see Image()

Get the GD-corrected PNG gamma value from alpha color
@param resource $img GD image Resource ID.
@param int $c alpha color
@protected
@since 4.3.007 (2008-12-04)

Performs a line break.
The current abscissa goes back to the left margin and the ordinate increases by the amount passed in parameter.
@param float|null $h The height of the break. By default, the value equals the height of the last printed cell.
@param boolean $cell if true add the current left (or right o for RTL) padding to the X coordinate
@public
@since 1.0
@see Cell()

Returns the relative X value of current position.
The value is relative to the left border for LTR languages and to the right border for RTL languages.
@return float
@public
@since 1.2
@see SetX(), GetY(), SetY()

Returns the absolute X value of current position.
@return float
@public
@since 1.2
@see SetX(), GetY(), SetY()

Returns the ordinate of the current position.
@return float
@public
@since 1.0
@see SetY(), GetX(), SetX()

Defines the abscissa of the current position.
If the passed value is negative, it is relative to the right of the page (or left if language is RTL).
@param float $x The value of the abscissa in user units.
@param boolean $rtloff if true always uses the page top-left corner as origin of axis.
@public
@since 1.2
@see GetX(), GetY(), SetY(), SetXY()

Moves the current abscissa back to the left margin and sets the ordinate.
If the passed value is negative, it is relative to the bottom of the page.
@param float $y The value of the ordinate in user units.
@param bool $resetx if true (default) reset the X position.
@param boolean $rtloff if true always uses the page top-left corner as origin of axis.
@public
@since 1.0
@see GetX(), GetY(), SetY(), SetXY()

Defines the abscissa and ordinate of the current position.
If the passed values are negative, they are relative respectively to the right and bottom of the page.
@param float $x The value of the abscissa.
@param float $y The value of the ordinate.
@param boolean $rtloff if true always uses the page top-left corner as origin of axis.
@public
@since 1.2
@see SetX(), SetY()

Set the absolute X coordinate of the current pointer.
@param float $x The value of the abscissa in user units.
@public
@since 5.9.186 (2012-09-13)
@see setAbsX(), setAbsY(), SetAbsXY()

Set the absolute Y coordinate of the current pointer.
@param float $y (float) The value of the ordinate in user units.
@public
@since 5.9.186 (2012-09-13)
@see setAbsX(), setAbsY(), SetAbsXY()

Set the absolute X and Y coordinates of the current pointer.
@param float $x The value of the abscissa in user units.
@param float $y (float) The value of the ordinate in user units.
@public
@since 5.9.186 (2012-09-13)
@see setAbsX(), setAbsY(), SetAbsXY()

Send the document to a given destination: string, local file or browser.
In the last case, the plug-in may be used (if present) or a download ("Save as" dialog box) may be forced.<br />
The method first calls Close() if necessary to terminate the document.
@param string $name The name of the file when saved. Note that special characters are removed and blanks characters are replaced with the underscore character.
@param string $dest Destination where to send the document. It can take one of the following values:<ul><li>I: send the file inline to the browser (default). The plug-in is used if available. The name given by name is used when one selects the "Save as" option on the link generating the PDF.</li><li>D: send to the browser and force a file download with the name given by name.</li><li>F: save to a local server file with the name given by name.</li><li>S: return the document as a string (name is ignored).</li><li>FI: equivalent to F + I option</li><li>FD: equivalent to F + D option</li><li>E: return the document as base64 mime multi-part email attachment (RFC 2045)</li></ul>
@return string
@public
@since 1.0
@see Close()

Unset all class variables except the following critical variables.
@param boolean $destroyall if true destroys all class variables, otherwise preserves critical variables.
@param boolean $preserve_objcopy if true preserves the objcopy variable
@public
@since 4.5.016 (2009-02-24)

Check for locale-related bug
@protected

Return an array containing variations for the basic page number alias.
@param string $a Base alias.
@return array of page number aliases
@protected

Return an array containing all internal page aliases.
@return array of page number aliases
@protected

Replace right shift page number aliases with spaces to correct right alignment.
This works perfectly only when using monospaced fonts.
@param string $page Page content.
@param array $aliases Array of page aliases.
@param int $diff initial difference to add.
@return string replaced page content.
@protected

Set page boxes to be included on page descriptions.
@param array $boxes Array of page boxes to set on document: ('MediaBox', 'CropBox', 'BleedBox', 'TrimBox', 'ArtBox').
@protected

Output pages (and replace page number aliases).
@protected

Get references to page annotations.
@param int $n page number
@return string
@protected
@author Nicola Asuni
@since 5.0.010 (2010-05-17)

Output annotations objects for all pages.
!!! THIS METHOD IS NOT YET COMPLETED !!!
See section 12.5 of PDF 32000_2008 reference.
@protected
@author Nicola Asuni
@since 4.0.018 (2008-08-06)

Put appearance streams XObject used to define annotation's appearance states.
@param int $w annotation width
@param int $h annotation height
@param string $stream appearance stream
@return int object ID
@protected
@since 4.8.001 (2009-09-09)

Output fonts.
@author Nicola Asuni
@protected

Adds unicode fonts.<br>
Based on PDF Reference 1.3 (section 5)
@param array $font font data
@protected
@author Nicola Asuni
@since 1.52.0.TC005 (2005-01-05)

Output CID-0 fonts.
A Type 0 CIDFont contains glyph descriptions based on the Adobe Type 1 font format
@param array $font font data
@protected
@author Andrew Whitehead, Nicola Asuni, Yukihiro Nakadaira
@since 3.2.000 (2008-06-23)

Output images.
@protected

Output Form XObjects Templates.
@author Nicola Asuni
@since 5.8.017 (2010-08-24)
@protected
@see startTemplate(), endTemplate(), printTemplate()

Output Spot Colors Resources.
@protected
@since 4.0.024 (2008-09-12)

Return XObjects Dictionary.
@return string XObjects dictionary
@protected
@since 5.8.014 (2010-08-23)

Output Resources Dictionary.
@protected

Output Resources.
@protected

Adds some Metadata information (Document Information Dictionary)
(see Chapter 14.3.3 Document Information Dictionary of PDF32000_2008.pdf Reference)
@return int object id
@protected

Set additional XMP data to be added on the default XMP data just before the end of "x:xmpmeta" tag.
IMPORTANT: This data is added as-is without controls, so you have to validate your data before using this method!
@param string $xmp Custom XMP data.
@since 5.9.128 (2011-10-06)
@public

Set additional XMP data to be added on the default XMP data just before the end of "rdf:RDF" tag.
IMPORTANT: This data is added as-is without controls, so you have to validate your data before using this method!
@param string $xmp Custom XMP RDF data.
@since 6.3.0 (2019-09-19)
@public

Put XMP data object and return ID.
@return int The object ID.
@since 5.9.121 (2011-09-28)
@protected

Output Catalog.
@return int object id
@protected

Output viewer preferences.
@return string for viewer preferences
@author Nicola asuni
@since 3.1.000 (2008-06-09)
@protected

Output PDF File Header (7.5.2).
@protected

Output end of document (EOF).
@protected

Initialize a new page.
@param string $orientation page orientation. Possible values are (case insensitive):<ul><li>P or PORTRAIT (default)</li><li>L or LANDSCAPE</li></ul>
@param mixed $format The format used for pages. It can be either: one of the string values specified at getPageSizeFromFormat() or an array of parameters specified at setPageFormat().
@protected
@see getPageSizeFromFormat(), setPageFormat()

Mark end of page.
@protected

Begin a new object and return the object number.
@return int object number
@protected

Return the starting object string for the selected object ID.
@param int|null $objid Object ID (leave empty to get a new ID).
@return string the starting object string
@protected
@since 5.8.009 (2010-08-20)

Underline text.
@param int $x X coordinate
@param int $y Y coordinate
@param string $txt text to underline
@protected

Underline for rectangular text area.
@param int $x X coordinate
@param int $y Y coordinate
@param int $w width to underline
@protected
@since 4.8.008 (2009-09-29)

Line through text.
@param int $x X coordinate
@param int $y Y coordinate
@param string $txt text to linethrough
@protected

Line through for rectangular text area.
@param int $x X coordinate
@param int $y Y coordinate
@param int $w line length (width)
@protected
@since 4.9.008 (2009-09-29)

Overline text.
@param int $x X coordinate
@param int $y Y coordinate
@param string $txt text to overline
@protected
@since 4.9.015 (2010-04-19)

Overline for rectangular text area.
@param int $x X coordinate
@param int $y Y coordinate
@param int $w width to overline
@protected
@since 4.9.015 (2010-04-19)

Format a data string for meta information
@param string $s data string to escape.
@param int $n object ID
@return string escaped string.
@protected

Set the document creation timestamp
@param mixed $time Document creation timestamp in seconds or date-time string.
@public
@since 5.9.152 (2012-03-23)

Set the document modification timestamp
@param mixed $time Document modification timestamp in seconds or date-time string.
@public
@since 5.9.152 (2012-03-23)

Returns document creation timestamp in seconds.
@return int Creation timestamp in seconds.
@public
@since 5.9.152 (2012-03-23)

Returns document modification timestamp in seconds.
@return int Modfication timestamp in seconds.
@public
@since 5.9.152 (2012-03-23)

Returns a formatted date for meta information
@param int $n Object ID.
@param int $timestamp Timestamp to convert.
@return string escaped date string.
@protected
@since 4.6.028 (2009-08-25)

Format a text string for meta information
@param string $s string to escape.
@param int $n object ID
@return string escaped string.
@protected

get raw output stream.
@param string $s string to output.
@param int $n object reference for encryption mode
@protected
@author Nicola Asuni
@since 5.5.000 (2010-06-22)

Output a string to the document.
@param string $s string to output.
@protected

Set header font.
@param array<int,string|float|null> $font Array describing the basic font parameters: (family, style, size).
@phpstan-param array{0: string, 1: string, 2: float|null} $font
@public
@since 1.1

Get header font.
@return array<int,string|float|null> Array describing the basic font parameters: (family, style, size).
@phpstan-return array{0: string, 1: string, 2: float|null}
@public
@since 4.0.012 (2008-07-24)

Set footer font.
@param array<int,string|float|null> $font Array describing the basic font parameters: (family, style, size).
@phpstan-param array{0: string, 1: string, 2: float|null} $font
@public
@since 1.1

Get Footer font.
@return array<int,string|float|null> Array describing the basic font parameters: (family, style, size).
@phpstan-return array{0: string, 1: string, 2: float|null} $font
@public
@since 4.0.012 (2008-07-24)

Set language array.
@param array $language
@public
@since 1.1

Returns the PDF data.
@public

Output anchor link.
@param string $url link URL or internal link (i.e.: &lt;a href="#23,4.5"&gt;link to page 23 at 4.5 Y position&lt;/a&gt;)
@param string $name link name
@param boolean $fill Indicates if the cell background must be painted (true) or transparent (false).
@param boolean $firstline if true prints only the first line and return the remaining string.
@param array|null $color array of RGB text color
@param string $style font style (U, D, B, I)
@param boolean $firstblock if true the string is the starting of a line.
@return int the number of cells used or the remaining text if $firstline = true;
@public

Converts pixels to User's Units.
@param int $px pixels
@return float value in user's unit
@public
@see setImageScale(), getImageScale()

Reverse function for htmlentities.
Convert entities in UTF-8.
@param string $text_to_convert Text to convert.
@return string converted text string
@public

Compute encryption key depending on object number where the encrypted data is stored.
This is used for all strings and streams without crypt filter specifier.
@param int $n object number
@return int object key
@protected
@author Nicola Asuni
@since 2.0.000 (2008-01-02)

Encrypt the input string.
@param int $n object number
@param string $s data string to encrypt
@return string encrypted string
@protected
@author Nicola Asuni
@since 5.0.005 (2010-05-11)

Put encryption on PDF document.
@protected
@author Nicola Asuni
@since 2.0.000 (2008-01-02)

Compute U value (used for encryption)
@return string U value
@protected
@since 2.0.000 (2008-01-02)
@author Nicola Asuni

Compute UE value (used for encryption)
@return string UE value
@protected
@since 5.9.006 (2010-10-19)
@author Nicola Asuni

Compute O value (used for encryption)
@return string O value
@protected
@since 2.0.000 (2008-01-02)
@author Nicola Asuni

Compute OE value (used for encryption)
@return string OE value
@protected
@since 5.9.006 (2010-10-19)
@author Nicola Asuni

Convert password for AES-256 encryption mode
@param string $password password
@return string password
@protected
@since 5.9.006 (2010-10-19)
@author Nicola Asuni

Compute encryption key
@protected
@since 2.0.000 (2008-01-02)
@author Nicola Asuni

Set document protection
Remark: the protection against modification is for people who have the full Acrobat product.
If you don't set any password, the document will open as usual. If you set a user password, the PDF viewer will ask for it before displaying the document. The master password, if different from the user one, can be used to get full access.
Note: protecting a document requires to encrypt it, which increases the processing time a lot. This can cause a PHP time-out in some cases, especially if the document contains images or fonts.
@param array $permissions the set of permissions (specify the ones you want to block):<ul><li>print : Print the document;</li><li>modify : Modify the contents of the document by operations other than those controlled by 'fill-forms', 'extract' and 'assemble';</li><li>copy : Copy or otherwise extract text and graphics from the document;</li><li>annot-forms : Add or modify text annotations, fill in interactive form fields, and, if 'modify' is also set, create or modify interactive form fields (including signature fields);</li><li>fill-forms : Fill in existing interactive form fields (including signature fields), even if 'annot-forms' is not specified;</li><li>extract : Extract text and graphics (in support of accessibility to users with disabilities or for other purposes);</li><li>assemble : Assemble the document (insert, rotate, or delete pages and create bookmarks or thumbnail images), even if 'modify' is not set;</li><li>print-high : Print the document to a representation from which a faithful digital copy of the PDF content could be generated. When this is not set, printing is limited to a low-level representation of the appearance, possibly of degraded quality.</li><li>owner : (inverted logic - only for public-key) when set permits change of encryption and enables all other permissions.</li></ul>
@param string $user_pass user password. Empty by default.
@param string|null $owner_pass owner password. If not specified, a random value is used.
@param int $mode encryption strength: 0 = RC4 40 bit; 1 = RC4 128 bit; 2 = AES 128 bit; 3 = AES 256 bit.
@param array|null $pubkeys array of recipients containing public-key certificates ('c') and permissions ('p'). For example: array(array('c' => 'file://../examples/data/cert/tcpdf.crt', 'p' => array('print')))
@public
@since 2.0.000 (2008-01-02)
@author Nicola Asuni

Starts a 2D tranformation saving current graphic state.
This function must be called before scaling, mirroring, translation, rotation and skewing.
Use StartTransform() before, and StopTransform() after the transformations to restore the normal behavior.
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Stops a 2D tranformation restoring previous graphic state.
This function must be called after scaling, mirroring, translation, rotation and skewing.
Use StartTransform() before, and StopTransform() after the transformations to restore the normal behavior.
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Horizontal Scaling.
@param float $s_x scaling factor for width as percent. 0 is not allowed.
@param int $x abscissa of the scaling center. Default is current x position
@param int $y ordinate of the scaling center. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Vertical Scaling.
@param float $s_y scaling factor for height as percent. 0 is not allowed.
@param int $x abscissa of the scaling center. Default is current x position
@param int $y ordinate of the scaling center. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Vertical and horizontal proportional Scaling.
@param float $s scaling factor for width and height as percent. 0 is not allowed.
@param int $x abscissa of the scaling center. Default is current x position
@param int $y ordinate of the scaling center. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Vertical and horizontal non-proportional Scaling.
@param float $s_x scaling factor for width as percent. 0 is not allowed.
@param float $s_y scaling factor for height as percent. 0 is not allowed.
@param float|null $x abscissa of the scaling center. Default is current x position
@param float|null $y ordinate of the scaling center. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Horizontal Mirroring.
@param float|null $x abscissa of the point. Default is current x position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Verical Mirroring.
@param float|null $y ordinate of the point. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Point reflection mirroring.
@param float|null $x abscissa of the point. Default is current x position
@param float|null $y ordinate of the point. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Reflection against a straight line through point (x, y) with the gradient angle (angle).
@param float $angle gradient angle of the straight line. Default is 0 (horizontal line).
@param float|null $x abscissa of the point. Default is current x position
@param float|null $y ordinate of the point. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Translate graphic object horizontally.
@param int $t_x movement to the right (or left for RTL)
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Translate graphic object vertically.
@param int $t_y movement to the bottom
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Translate graphic object horizontally and vertically.
@param int $t_x movement to the right
@param int $t_y movement to the bottom
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Rotate object.
@param float $angle angle in degrees for counter-clockwise rotation
@param float|null $x abscissa of the rotation center. Default is current x position
@param float|null $y ordinate of the rotation center. Default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Skew horizontally.
@param float $angle_x angle in degrees between -90 (skew to the left) and 90 (skew to the right)
@param float|null $x abscissa of the skewing center. default is current x position
@param float|null $y ordinate of the skewing center. default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Skew vertically.
@param float $angle_y angle in degrees between -90 (skew to the bottom) and 90 (skew to the top)
@param float|null $x abscissa of the skewing center. default is current x position
@param float|null $y ordinate of the skewing center. default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Skew.
@param float $angle_x angle in degrees between -90 (skew to the left) and 90 (skew to the right)
@param float $angle_y angle in degrees between -90 (skew to the bottom) and 90 (skew to the top)
@param float|null $x abscissa of the skewing center. default is current x position
@param float|null $y ordinate of the skewing center. default is current y position
@public
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Apply graphic transformations.
@param array $tm transformation matrix
@protected
@since 2.1.000 (2008-01-07)
@see StartTransform(), StopTransform()

Defines the line width. By default, the value equals 0.2 mm. The method can be called before the first page is created and the value is retained from page to page.
@param float $width The width.
@public
@since 1.0
@see Line(), Rect(), Cell(), MultiCell()

Returns the current the line width.
@return int Line width
@public
@since 2.1.000 (2008-01-07)
@see Line(), SetLineWidth()

Set line style.
@param array $style Line style. Array with keys among the following:
<ul>
 <li>width (float): Width of the line in user units.</li>
 <li>cap (string): Type of cap to put on the line. Possible values are:
butt, round, square. The difference between "square" and "butt" is that
"square" projects a flat end past the end of the line.</li>
 <li>join (string): Type of join. Possible values are: miter, round,
bevel.</li>
 <li>dash (mixed): Dash pattern. Is 0 (without dash) or string with
series of length values, which are the lengths of the on and off dashes.
For example: "2" represents 2 on, 2 off, 2 on, 2 off, ...; "2,1" is 2 on,
1 off, 2 on, 1 off, ...</li>
 <li>phase (integer): Modifier on the dash pattern which is used to shift
the point at which the pattern starts.</li>
 <li>color (array): Draw color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName).</li>
</ul>
@param boolean $ret if true do not send the command.
@return string the PDF command
@public
@since 2.1.000 (2008-01-08)

Begin a new subpath by moving the current point to coordinates (x, y), omitting any connecting line segment.
@param float $x Abscissa of point.
@param float $y Ordinate of point.
@protected
@since 2.1.000 (2008-01-08)

Append a straight line segment from the current point to the point (x, y).
The new current point shall be (x, y).
@param float $x Abscissa of end point.
@param float $y Ordinate of end point.
@protected
@since 2.1.000 (2008-01-08)

Append a rectangle to the current path as a complete subpath, with lower-left corner (x, y) and dimensions widthand height in user space.
@param float $x Abscissa of upper-left corner.
@param float $y Ordinate of upper-left corner.
@param float $w Width.
@param float $h Height.
@param string $op options
@protected
@since 2.1.000 (2008-01-08)

Append a cubic Bezier curve to the current path. The curve shall extend from the current point to the point (x3, y3), using (x1, y1) and (x2, y2) as the Bezier control points.
The new current point shall be (x3, y3).
@param float $x1 Abscissa of control point 1.
@param float $y1 Ordinate of control point 1.
@param float $x2 Abscissa of control point 2.
@param float $y2 Ordinate of control point 2.
@param float $x3 Abscissa of end point.
@param float $y3 Ordinate of end point.
@protected
@since 2.1.000 (2008-01-08)

Append a cubic Bezier curve to the current path. The curve shall extend from the current point to the point (x3, y3), using the current point and (x2, y2) as the Bezier control points.
The new current point shall be (x3, y3).
@param float $x2 Abscissa of control point 2.
@param float $y2 Ordinate of control point 2.
@param float $x3 Abscissa of end point.
@param float $y3 Ordinate of end point.
@protected
@since 4.9.019 (2010-04-26)

Append a cubic Bezier curve to the current path. The curve shall extend from the current point to the point (x3, y3), using (x1, y1) and (x3, y3) as the Bezier control points.
The new current point shall be (x3, y3).
@param float $x1 Abscissa of control point 1.
@param float $y1 Ordinate of control point 1.
@param float $x3 Abscissa of end point.
@param float $y3 Ordinate of end point.
@protected
@since 2.1.000 (2008-01-08)

Draws a line between two points.
@param float $x1 Abscissa of first point.
@param float $y1 Ordinate of first point.
@param float $x2 Abscissa of second point.
@param float $y2 Ordinate of second point.
@param array $style Line style. Array like for SetLineStyle(). Default value: default line style (empty array).
@public
@since 1.0
@see SetLineWidth(), SetDrawColor(), SetLineStyle()

Draws a rectangle.
@param float $x Abscissa of upper-left corner.
@param float $y Ordinate of upper-left corner.
@param float $w Width.
@param float $h Height.
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $border_style Border style of rectangle. Array with keys among the following:
<ul>
 <li>all: Line style of all borders. Array like for SetLineStyle().</li>
 <li>L, T, R, B or combinations: Line style of left, top, right or bottom border. Array like for SetLineStyle().</li>
</ul>
If a key is not present or is null, the correspondent border is not drawn. Default value: default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@public
@since 1.0
@see SetLineStyle()

Draws a Bezier curve.
The Bezier curve is a tangent to the line between the control points at
either end of the curve.
@param float $x0 Abscissa of start point.
@param float $y0 Ordinate of start point.
@param float $x1 Abscissa of control point 1.
@param float $y1 Ordinate of control point 1.
@param float $x2 Abscissa of control point 2.
@param float $y2 Ordinate of control point 2.
@param float $x3 Abscissa of end point.
@param float $y3 Ordinate of end point.
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of curve. Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@public
@see SetLineStyle()
@since 2.1.000 (2008-01-08)

Draws a poly-Bezier curve.
Each Bezier curve segment is a tangent to the line between the control points at
either end of the curve.
@param float $x0 Abscissa of start point.
@param float $y0 Ordinate of start point.
@param float[] $segments An array of bezier descriptions. Format: array(x1, y1, x2, y2, x3, y3).
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of curve. Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@public
@see SetLineStyle()
@since 3.0008 (2008-05-12)

Draws an ellipse.
An ellipse is formed from n Bezier curves.
@param float $x0 Abscissa of center point.
@param float $y0 Ordinate of center point.
@param float $rx Horizontal radius.
@param float $ry Vertical radius (if ry = 0 then is a circle, see Circle()). Default value: 0.
@param float $angle Angle oriented (anti-clockwise). Default value: 0.
@param float $astart Angle start of draw line. Default value: 0.
@param float $afinish Angle finish of draw line. Default value: 360.
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of ellipse. Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@param integer $nc Number of curves used to draw a 90 degrees portion of ellipse.
@author Nicola Asuni
@public
@since 2.1.000 (2008-01-08)

Append an elliptical arc to the current path.
An ellipse is formed from n Bezier curves.
@param float $xc Abscissa of center point.
@param float $yc Ordinate of center point.
@param float $rx Horizontal radius.
@param float $ry Vertical radius (if ry = 0 then is a circle, see Circle()). Default value: 0.
@param float $xang Angle between the X-axis and the major axis of the ellipse. Default value: 0.
@param float $angs Angle start of draw line. Default value: 0.
@param float $angf Angle finish of draw line. Default value: 360.
@param boolean $pie if true do not mark the border point (used to draw pie sectors).
@param integer $nc Number of curves used to draw a 90 degrees portion of ellipse.
@param boolean $startpoint if true output a starting point.
@param boolean $ccw if true draws in counter-clockwise.
@param boolean $svg if true the angles are in svg mode (already calculated).
@return array bounding box coordinates (x min, y min, x max, y max)
@author Nicola Asuni
@protected
@since 4.9.019 (2010-04-26)

Draws a circle.
A circle is formed from n Bezier curves.
@param float $x0 Abscissa of center point.
@param float $y0 Ordinate of center point.
@param float $r Radius.
@param float $angstr Angle start of draw line. Default value: 0.
@param float $angend Angle finish of draw line. Default value: 360.
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of circle. Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $fill_color Fill color. Format: array(red, green, blue). Default value: default color (empty array).
@param integer $nc Number of curves used to draw a 90 degrees portion of circle.
@public
@since 2.1.000 (2008-01-08)

Draws a polygonal line
@param array $p Points 0 to ($np - 1). Array with values (x0, y0, x1, y1,..., x(np-1), y(np - 1))
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of polygon. Array with keys among the following:
<ul>
 <li>all: Line style of all lines. Array like for SetLineStyle().</li>
 <li>0 to ($np - 1): Line style of each line. Array like for SetLineStyle().</li>
</ul>
If a key is not present or is null, not draws the line. Default value is default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@since 4.8.003 (2009-09-15)
@public

Draws a polygon.
@param array $p Points 0 to ($np - 1). Array with values (x0, y0, x1, y1,..., x(np-1), y(np - 1))
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of polygon. Array with keys among the following:
<ul>
 <li>all: Line style of all lines. Array like for SetLineStyle().</li>
 <li>0 to ($np - 1): Line style of each line. Array like for SetLineStyle().</li>
</ul>
If a key is not present or is null, not draws the line. Default value is default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@param boolean $closed if true the polygon is closes, otherwise will remain open
@public
@since 2.1.000 (2008-01-08)

Draws a regular polygon.
@param float $x0 Abscissa of center point.
@param float $y0 Ordinate of center point.
@param float $r Radius of inscribed circle.
@param integer $ns Number of sides.
@param float $angle Angle oriented (anti-clockwise). Default value: 0.
@param boolean $draw_circle Draw inscribed circle or not. Default value: false.
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of polygon sides. Array with keys among the following:
<ul>
 <li>all: Line style of all sides. Array like for SetLineStyle().</li>
 <li>0 to ($ns - 1): Line style of each side. Array like for SetLineStyle().</li>
</ul>
If a key is not present or is null, not draws the side. Default value is default line style (empty array).
@param array $fill_color Fill color. Format: array(red, green, blue). Default value: default color (empty array).
@param string $circle_style Style of rendering of inscribed circle (if draws). Possible values are:
<ul>
 <li>D or empty string: Draw (default).</li>
 <li>F: Fill.</li>
 <li>DF or FD: Draw and fill.</li>
 <li>CNZ: Clipping mode (using the even-odd rule to determine which regions lie inside the clipping path).</li>
 <li>CEO: Clipping mode (using the nonzero winding number rule to determine which regions lie inside the clipping path).</li>
</ul>
@param array $circle_outLine_style Line style of inscribed circle (if draws). Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $circle_fill_color Fill color of inscribed circle (if draws). Format: array(red, green, blue). Default value: default color (empty array).
@public
@since 2.1.000 (2008-01-08)

Draws a star polygon
@param float $x0 Abscissa of center point.
@param float $y0 Ordinate of center point.
@param float $r Radius of inscribed circle.
@param integer $nv Number of vertices.
@param integer $ng Number of gap (if ($ng % $nv = 1) then is a regular polygon).
@param float $angle Angle oriented (anti-clockwise). Default value: 0.
@param boolean $draw_circle Draw inscribed circle or not. Default value is false.
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $line_style Line style of polygon sides. Array with keys among the following:
<ul>
 <li>all: Line style of all sides. Array like for
SetLineStyle().</li>
 <li>0 to (n - 1): Line style of each side. Array like for SetLineStyle().</li>
</ul>
If a key is not present or is null, not draws the side. Default value is default line style (empty array).
@param array $fill_color Fill color. Format: array(red, green, blue). Default value: default color (empty array).
@param string $circle_style Style of rendering of inscribed circle (if draws). Possible values are:
<ul>
 <li>D or empty string: Draw (default).</li>
 <li>F: Fill.</li>
 <li>DF or FD: Draw and fill.</li>
 <li>CNZ: Clipping mode (using the even-odd rule to determine which regions lie inside the clipping path).</li>
 <li>CEO: Clipping mode (using the nonzero winding number rule to determine which regions lie inside the clipping path).</li>
</ul>
@param array $circle_outLine_style Line style of inscribed circle (if draws). Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $circle_fill_color Fill color of inscribed circle (if draws). Format: array(red, green, blue). Default value: default color (empty array).
@public
@since 2.1.000 (2008-01-08)

Draws a rounded rectangle.
@param float $x Abscissa of upper-left corner.
@param float $y Ordinate of upper-left corner.
@param float $w Width.
@param float $h Height.
@param float $r the radius of the circle used to round off the corners of the rectangle.
@param string $round_corner Draws rounded corner or not. String with a 0 (not rounded i-corner) or 1 (rounded i-corner) in i-position. Positions are, in order and begin to 0: top right, bottom right, bottom left and top left. Default value: all rounded corner ("1111").
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $border_style Border style of rectangle. Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@public
@since 2.1.000 (2008-01-08)

Draws a rounded rectangle.
@param float $x Abscissa of upper-left corner.
@param float $y Ordinate of upper-left corner.
@param float $w Width.
@param float $h Height.
@param float $rx the x-axis radius of the ellipse used to round off the corners of the rectangle.
@param float $ry the y-axis radius of the ellipse used to round off the corners of the rectangle.
@param string $round_corner Draws rounded corner or not. String with a 0 (not rounded i-corner) or 1 (rounded i-corner) in i-position. Positions are, in order and begin to 0: top right, bottom right, bottom left and top left. Default value: all rounded corner ("1111").
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param array $border_style Border style of rectangle. Array like for SetLineStyle(). Default value: default line style (empty array).
@param array $fill_color Fill color. Format: array(GREY) or array(R,G,B) or array(C,M,Y,K) or array(C,M,Y,K,SpotColorName). Default value: default color (empty array).
@public
@since 4.9.019 (2010-04-22)

Draws a grahic arrow.
@param float $x0 Abscissa of first point.
@param float $y0 Ordinate of first point.
@param float $x1 Abscissa of second point.
@param float $y1 Ordinate of second point.
@param int $head_style (0 = draw only arrowhead arms, 1 = draw closed arrowhead, but no fill, 2 = closed and filled arrowhead, 3 = filled arrowhead)
@param float $arm_size length of arrowhead arms
@param int $arm_angle angle between an arm and the shaft
@author Piotr Galecki, Nicola Asuni, Andy Meier
@since 4.6.018 (2009-07-10)

Add a Named Destination.
NOTE: destination names are unique, so only last entry will be saved.
@param string $name Destination name.
@param float $y Y position in user units of the destiantion on the selected page (default = -1 = current position; 0 = page start;).
@param int|string $page Target page number (leave empty for current page). If you prefix a page number with the * character, then this page will not be changed when adding/deleting/moving pages.
@param float $x X position in user units of the destiantion on the selected page (default = -1 = current position;).
@return string|false Stripped named destination identifier or false in case of error.
@public
@author Christian Deligant, Nicola Asuni
@since 5.9.097 (2011-06-23)

Return the Named Destination array.
@return array Named Destination array.
@public
@author Nicola Asuni
@since 5.9.097 (2011-06-23)

Insert Named Destinations.
@protected
@author Johannes G\FCntert, Nicola Asuni
@since 5.9.098 (2011-06-23)

Adds a bookmark - alias for Bookmark().
@param string $txt Bookmark description.
@param int $level Bookmark level (minimum value is 0).
@param float $y Y position in user units of the bookmark on the selected page (default = -1 = current position; 0 = page start;).
@param int|string $page Target page number (leave empty for current page). If you prefix a page number with the * character, then this page will not be changed when adding/deleting/moving pages.
@param string $style Font style: B = Bold, I = Italic, BI = Bold + Italic.
@param array $color RGB color array (values from 0 to 255).
@param float $x X position in user units of the bookmark on the selected page (default = -1 = current position;).
@param mixed $link URL, or numerical link ID, or named destination (# character followed by the destination name), or embedded file (* character followed by the file name).
@public

Adds a bookmark.
@param string $txt Bookmark description.
@param int $level Bookmark level (minimum value is 0).
@param float $y Y position in user units of the bookmark on the selected page (default = -1 = current position; 0 = page start;).
@param int|string $page Target page number (leave empty for current page). If you prefix a page number with the * character, then this page will not be changed when adding/deleting/moving pages.
@param string $style Font style: B = Bold, I = Italic, BI = Bold + Italic.
@param array $color RGB color array (values from 0 to 255).
@param float $x X position in user units of the bookmark on the selected page (default = -1 = current position;).
@param mixed $link URL, or numerical link ID, or named destination (# character followed by the destination name), or embedded file (* character followed by the file name).
@public
@since 2.1.002 (2008-02-12)

Sort bookmarks for page and key.
@protected
@since 5.9.119 (2011-09-19)

Create a bookmark PDF string.
@protected
@author Olivier Plathey, Nicola Asuni
@since 2.1.002 (2008-02-12)

Adds a javascript
@param string $script Javascript code
@public
@author Johannes G\FCntert, Nicola Asuni
@since 2.1.002 (2008-02-12)

Adds a javascript object and return object ID
@param string $script Javascript code
@param boolean $onload if true executes this object when opening the document
@return int internal object ID
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-07)

Create a javascript PDF string.
@protected
@author Johannes G\FCntert, Nicola Asuni
@since 2.1.002 (2008-02-12)

Adds a javascript form field.
@param string $type field type
@param string $name field name
@param int $x horizontal position
@param int $y vertical position
@param int $w width
@param int $h height
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@protected
@author Denis Van Nuffelen, Nicola Asuni
@since 2.1.002 (2008-02-12)

Set default properties for form fields.
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-06)

Return the default properties for form fields.
@return array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-06)

Creates a text field
@param string $name field name
@param float $w Width of the rectangle
@param float $h Height of the rectangle
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@param array $opt annotation parameters. Possible values are described on official PDF32000_2008 reference.
@param float|null $x Abscissa of the upper-left corner of the rectangle
@param float|null $y Ordinate of the upper-left corner of the rectangle
@param boolean $js if true put the field using JavaScript (requires Acrobat Writer to be rendered).
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-07)

Creates a RadioButton field.
@param string $name Field name.
@param int $w Width of the radio button.
@param array $prop Javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@param array $opt Annotation parameters. Possible values are described on official PDF32000_2008 reference.
@param string $onvalue Value to be returned if selected.
@param boolean $checked Define the initial state.
@param float|null $x Abscissa of the upper-left corner of the rectangle
@param float|null $y Ordinate of the upper-left corner of the rectangle
@param boolean $js If true put the field using JavaScript (requires Acrobat Writer to be rendered).
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-07)

Creates a List-box field
@param string $name field name
@param int $w width
@param int $h height
@param array $values array containing the list of values.
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@param array $opt annotation parameters. Possible values are described on official PDF32000_2008 reference.
@param float|null $x Abscissa of the upper-left corner of the rectangle
@param float|null $y Ordinate of the upper-left corner of the rectangle
@param boolean $js if true put the field using JavaScript (requires Acrobat Writer to be rendered).
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-07)

Creates a Combo-box field
@param string $name field name
@param int $w width
@param int $h height
@param array $values array containing the list of values.
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@param array $opt annotation parameters. Possible values are described on official PDF32000_2008 reference.
@param float|null $x Abscissa of the upper-left corner of the rectangle
@param float|null $y Ordinate of the upper-left corner of the rectangle
@param boolean $js if true put the field using JavaScript (requires Acrobat Writer to be rendered).
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-07)

Creates a CheckBox field
@param string $name field name
@param int $w width
@param boolean $checked define the initial state.
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@param array $opt annotation parameters. Possible values are described on official PDF32000_2008 reference.
@param string $onvalue value to be returned if selected.
@param float|null $x Abscissa of the upper-left corner of the rectangle
@param float|null $y Ordinate of the upper-left corner of the rectangle
@param boolean $js if true put the field using JavaScript (requires Acrobat Writer to be rendered).
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-07)

Creates a button field
@param string $name field name
@param int $w width
@param int $h height
@param string $caption caption.
@param mixed $action action triggered by pressing the button. Use a string to specify a javascript action. Use an array to specify a form action options as on section 12.7.5 of PDF32000_2008.
@param array $prop javascript field properties. Possible values are described on official Javascript for Acrobat API reference.
@param array $opt annotation parameters. Possible values are described on official PDF32000_2008 reference.
@param float|null $x Abscissa of the upper-left corner of the rectangle
@param float|null $y Ordinate of the upper-left corner of the rectangle
@param boolean $js if true put the field using JavaScript (requires Acrobat Writer to be rendered).
@public
@author Nicola Asuni
@since 4.8.000 (2009-09-07)

Add certification signature (DocMDP or UR3)
You can set only one signature type
@protected
@author Nicola Asuni
@since 4.6.008 (2009-05-07)

Set User's Rights for PDF Reader
WARNING: This is experimental and currently do not work.
Check the PDF Reference 8.7.1 Transform Methods,
Table 8.105 Entries in the UR transform parameters dictionary
@param boolean $enable if true enable user's rights on PDF reader
@param string $document Names specifying additional document-wide usage rights for the document. The only defined value is "/FullSave", which permits a user to save the document along with modified form and/or annotation data.
@param string $annots Names specifying additional annotation-related usage rights for the document. Valid names in PDF 1.5 and later are /Create/Delete/Modify/Copy/Import/Export, which permit the user to perform the named operation on annotations.
@param string $form Names specifying additional form-field-related usage rights for the document. Valid names are: /Add/Delete/FillIn/Import/Export/SubmitStandalone/SpawnTemplate
@param string $signature Names specifying additional signature-related usage rights for the document. The only defined value is /Modify, which permits a user to apply a digital signature to an existing signature form field or clear a signed signature form field.
@param string $ef Names specifying additional usage rights for named embedded files in the document. Valid names are /Create/Delete/Modify/Import, which permit the user to perform the named operation on named embedded files
	 Names specifying additional embedded-files-related usage rights for the document.
@param string $formex Names specifying additional form-field-related usage rights. The only valid name is BarcodePlaintext, which permits text form field data to be encoded as a plaintext two-dimensional barcode.
@public
@author Nicola Asuni
@since 2.9.000 (2008-03-26)

Enable document signature (requires the OpenSSL Library).
The digital signature improve document authenticity and integrity and allows o enable extra features on Acrobat Reader.
To create self-signed signature: openssl req -x509 -nodes -days 365000 -newkey rsa:1024 -keyout tcpdf.crt -out tcpdf.crt
To export crt to p12: openssl pkcs12 -export -in tcpdf.crt -out tcpdf.p12
To convert pfx certificate to pem: openssl pkcs12 -in tcpdf.pfx -out tcpdf.crt -nodes
@param mixed $signing_cert signing certificate (string or filename prefixed with 'file://')
@param mixed $private_key private key (string or filename prefixed with 'file://')
@param string $private_key_password password
@param string $extracerts specifies the name of a file containing a bunch of extra certificates to include in the signature which can for example be used to help the recipient to verify the certificate that you used.
@param int $cert_type The access permissions granted for this document. Valid values shall be: 1 = No changes to the document shall be permitted; any change to the document shall invalidate the signature; 2 = Permitted changes shall be filling in forms, instantiating page templates, and signing; other changes shall invalidate the signature; 3 = Permitted changes shall be the same as for 2, as well as annotation creation, deletion, and modification; other changes shall invalidate the signature.
@param array $info array of option information: Name, Location, Reason, ContactInfo.
@param string $approval Enable approval signature eg. for PDF incremental update
@public
@author Nicola Asuni
@since 4.6.005 (2009-04-24)

Set the digital signature appearance (a cliccable rectangle area to get signature properties)
@param float $x Abscissa of the upper-left corner.
@param float $y Ordinate of the upper-left corner.
@param float $w Width of the signature area.
@param float $h Height of the signature area.
@param int $page option page number (if < 0 the current page is used).
@param string $name Name of the signature.
@public
@author Nicola Asuni
@since 5.3.011 (2010-06-17)

Add an empty digital signature appearance (a cliccable rectangle area to get signature properties)
@param float $x Abscissa of the upper-left corner.
@param float $y Ordinate of the upper-left corner.
@param float $w Width of the signature area.
@param float $h Height of the signature area.
@param int $page option page number (if < 0 the current page is used).
@param string $name Name of the signature.
@public
@author Nicola Asuni
@since 5.9.101 (2011-07-06)

Get the array that defines the signature appearance (page and rectangle coordinates).
@param float $x Abscissa of the upper-left corner.
@param float $y Ordinate of the upper-left corner.
@param float $w Width of the signature area.
@param float $h Height of the signature area.
@param int $page option page number (if < 0 the current page is used).
@param string $name Name of the signature.
@return array Array defining page and rectangle coordinates of signature appearance.
@protected
@author Nicola Asuni
@since 5.9.101 (2011-07-06)

Enable document timestamping (requires the OpenSSL Library).
The trusted timestamping improve document security that means that no one should be able to change the document once it has been recorded.
Use with digital signature only!
@param string $tsa_host Time Stamping Authority (TSA) server (prefixed with 'https://')
@param string $tsa_username Specifies the username for TSA authorization (optional) OR specifies the TSA authorization PEM file (see: example_66.php, optional)
@param string $tsa_password Specifies the password for TSA authorization (optional)
@param string $tsa_cert Specifies the location of TSA certificate for authorization (optional for cURL)
@public
@author Richard Stockinger
@since 6.0.090 (2014-06-16)

NOT YET IMPLEMENTED
Request TSA for a timestamp
@param string $signature Digital signature as binary string
@return string Timestamped digital signature
@protected
@author Richard Stockinger
@since 6.0.090 (2014-06-16)

Create a new page group.
NOTE: call this function before calling AddPage()
@param int|null $page starting group page (leave empty for next page).
@public
@since 3.0.000 (2008-03-27)

Set the starting page number.
@param int $num Starting page number.
@since 5.9.093 (2011-06-16)
@public

Returns the string alias used right align page numbers.
If the current font is unicode type, the returned string wil contain an additional open curly brace.
@return string
@since 5.9.099 (2011-06-27)
@public

Returns the string alias used for the total number of pages.
If the current font is unicode type, the returned string is surrounded by additional curly braces.
This alias will be replaced by the total number of pages in the document.
@return string
@since 4.0.018 (2008-08-08)
@public

Returns the string alias used for the page number.
If the current font is unicode type, the returned string is surrounded by additional curly braces.
This alias will be replaced by the page number.
@return string
@since 4.5.000 (2009-01-02)
@public

Return the alias for the total number of pages in the current page group.
If the current font is unicode type, the returned string is surrounded by additional curly braces.
This alias will be replaced by the total number of pages in this group.
@return string alias of the current page group
@public
@since 3.0.000 (2008-03-27)

Return the alias for the page number on the current page group.
If the current font is unicode type, the returned string is surrounded by additional curly braces.
This alias will be replaced by the page number (relative to the belonging group).
@return string alias of the current page group
@public
@since 4.5.000 (2009-01-02)

Return the current page in the group.
@return int current page in the group
@public
@since 3.0.000 (2008-03-27)

Returns the current group page number formatted as a string.
@public
@since 4.3.003 (2008-11-18)
@see PaneNo(), formatPageNumber()

Returns the current page number formatted as a string.
@public
@since 4.2.005 (2008-11-06)
@see PaneNo(), formatPageNumber()

Put pdf layers.
@protected
@since 3.0.000 (2008-03-27)

Start a new pdf layer.
@param string $name Layer name (only a-z letters and numbers). Leave empty for automatic name.
@param boolean|null $print Set to TRUE to print this layer, FALSE to not print and NULL to not set this option
@param boolean $view Set to true to view this layer.
@param boolean $lock If true lock the layer
@public
@since 5.9.102 (2011-07-13)

End the current PDF layer.
@public
@since 5.9.102 (2011-07-13)

Set the visibility of the successive elements.
This can be useful, for instance, to put a background
image or color that will show on screen but won't print.
@param string $v visibility mode. Legal values are: all, print, screen or view.
@public
@since 3.0.000 (2008-03-27)

Add transparency parameters to the current extgstate
@param array $parms parameters
@return int|void the number of extgstates
@protected
@since 3.0.000 (2008-03-27)

Add an extgstate
@param int $gs extgstate
@protected
@since 3.0.000 (2008-03-27)

Put extgstates for object transparency
@protected
@since 3.0.000 (2008-03-27)

Set overprint mode for stroking (OP) and non-stroking (op) painting operations.
(Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
@param boolean $stroking If true apply overprint for stroking operations.
@param boolean|null $nonstroking If true apply overprint for painting operations other than stroking.
@param integer $mode Overprint mode: (0 = each source colour component value replaces the value previously painted for the corresponding device colorant; 1 = a tint value of 0.0 for a source colour component shall leave the corresponding component of the previously painted colour unchanged).
@public
@since 5.9.152 (2012-03-23)

Get the overprint mode array (OP, op, OPM).
(Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
@return array<string,bool|int>
@public
@since 5.9.152 (2012-03-23)

Set alpha for stroking (CA) and non-stroking (ca) operations.
@param float $stroking Alpha value for stroking operations: real value from 0 (transparent) to 1 (opaque).
@param string $bm blend mode, one of the following: Normal, Multiply, Screen, Overlay, Darken, Lighten, ColorDodge, ColorBurn, HardLight, SoftLight, Difference, Exclusion, Hue, Saturation, Color, Luminosity
@param float|null $nonstroking Alpha value for non-stroking operations: real value from 0 (transparent) to 1 (opaque).
@param boolean $ais
@public
@since 3.0.000 (2008-03-27)

Get the alpha mode array (CA, ca, BM, AIS).
(Check the "Entries in a Graphics State Parameter Dictionary" on PDF 32000-1:2008).
@return array<string,bool|string>
@public
@since 5.9.152 (2012-03-23)

Set the default JPEG compression quality (1-100)
@param int $quality JPEG quality, integer between 1 and 100
@public
@since 3.0.000 (2008-03-27)

Set the default number of columns in a row for HTML tables.
@param int $cols number of columns
@public
@since 3.0.014 (2008-06-04)

Set the height of the cell (line height) respect the font height.
@param float $h cell proportion respect font height (typical value = 1.25).
@public
@since 3.0.014 (2008-06-04)

return the height of cell repect font height.
@public
@return float
@since 4.0.012 (2008-07-24)

Set the PDF version (check PDF reference for valid values).
@param string $version PDF document version.
@public
@since 3.1.000 (2008-06-09)

Set the viewer preferences dictionary controlling the way the document is to be presented on the screen or in print.
(see Section 8.1 of PDF reference, "Viewer Preferences").
<ul><li>HideToolbar boolean (Optional) A flag specifying whether to hide the viewer application's tool bars when the document is active. Default value: false.</li><li>HideMenubar boolean (Optional) A flag specifying whether to hide the viewer application's menu bar when the document is active. Default value: false.</li><li>HideWindowUI boolean (Optional) A flag specifying whether to hide user interface elements in the document's window (such as scroll bars and navigation controls), leaving only the document's contents displayed. Default value: false.</li><li>FitWindow boolean (Optional) A flag specifying whether to resize the document's window to fit the size of the first displayed page. Default value: false.</li><li>CenterWindow boolean (Optional) A flag specifying whether to position the document's window in the center of the screen. Default value: false.</li><li>DisplayDocTitle boolean (Optional; PDF 1.4) A flag specifying whether the window's title bar should display the document title taken from the Title entry of the document information dictionary (see Section 10.2.1, "Document Information Dictionary"). If false, the title bar should instead display the name of the PDF file containing the document. Default value: false.</li><li>NonFullScreenPageMode name (Optional) The document's page mode, specifying how to display the document on exiting full-screen mode:<ul><li>UseNone Neither document outline nor thumbnail images visible</li><li>UseOutlines Document outline visible</li><li>UseThumbs Thumbnail images visible</li><li>UseOC Optional content group panel visible</li></ul>This entry is meaningful only if the value of the PageMode entry in the catalog dictionary (see Section 3.6.1, "Document Catalog") is FullScreen; it is ignored otherwise. Default value: UseNone.</li><li>ViewArea name (Optional; PDF 1.4) The name of the page boundary representing the area of a page to be displayed when viewing the document on the screen. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>ViewClip name (Optional; PDF 1.4) The name of the page boundary to which the contents of a page are to be clipped when viewing the document on the screen. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>PrintArea name (Optional; PDF 1.4) The name of the page boundary representing the area of a page to be rendered when printing the document. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>PrintClip name (Optional; PDF 1.4) The name of the page boundary to which the contents of a page are to be clipped when printing the document. Valid values are (see Section 10.10.1, "Page Boundaries").:<ul><li>MediaBox</li><li>CropBox (default)</li><li>BleedBox</li><li>TrimBox</li><li>ArtBox</li></ul></li><li>PrintScaling name (Optional; PDF 1.6) The page scaling option to be selected when a print dialog is displayed for this document. Valid values are: <ul><li>None, which indicates that the print dialog should reflect no page scaling</li><li>AppDefault (default), which indicates that applications should use the current print scaling</li></ul></li><li>Duplex name (Optional; PDF 1.7) The paper handling option to use when printing the file from the print dialog. The following values are valid:<ul><li>Simplex - Print single-sided</li><li>DuplexFlipShortEdge - Duplex and flip on the short edge of the sheet</li><li>DuplexFlipLongEdge - Duplex and flip on the long edge of the sheet</li></ul>Default value: none</li><li>PickTrayByPDFSize boolean (Optional; PDF 1.7) A flag specifying whether the PDF page size is used to select the input paper tray. This setting influences only the preset values used to populate the print dialog presented by a PDF viewer application. If PickTrayByPDFSize is true, the check box in the print dialog associated with input paper tray is checked. Note: This setting has no effect on Mac OS systems, which do not provide the ability to pick the input tray by size.</li><li>PrintPageRange array (Optional; PDF 1.7) The page numbers used to initialize the print dialog box when the file is printed. The first page of the PDF file is denoted by 1. Each pair consists of the first and last pages in the sub-range. An odd number of integers causes this entry to be ignored. Negative numbers cause the entire array to be ignored. Default value: as defined by PDF viewer application</li><li>NumCopies integer (Optional; PDF 1.7) The number of copies to be printed when the print dialog is opened for this file. Supported values are the integers 2 through 5. Values outside this range are ignored. Default value: as defined by PDF viewer application, but typically 1</li></ul>
@param array $preferences array of options.
@author Nicola Asuni
@public
@since 3.1.000 (2008-06-09)

Paints color transition registration bars
@param float $x abscissa of the top left corner of the rectangle.
@param float $y ordinate of the top left corner of the rectangle.
@param float $w width of the rectangle.
@param float $h height of the rectangle.
@param boolean $transition if true prints tcolor transitions to white.
@param boolean $vertical if true prints bar vertically.
@param string $colors colors to print separated by comma. Valid values are: A,W,R,G,B,C,M,Y,K,RGB,CMYK,ALL,ALLSPOT,<SPOT_COLOR_NAME>. Where: A = grayscale black, W = grayscale white, R = RGB red, G RGB green, B RGB blue, C = CMYK cyan, M = CMYK magenta, Y = CMYK yellow, K = CMYK key/black, RGB = RGB registration color, CMYK = CMYK registration color, ALL = Spot registration color, ALLSPOT = print all defined spot colors, <SPOT_COLOR_NAME> = name of the spot color to print.
@author Nicola Asuni
@since 4.9.000 (2010-03-26)
@public

Paints crop marks.
@param float $x abscissa of the crop mark center.
@param float $y ordinate of the crop mark center.
@param float $w width of the crop mark.
@param float $h height of the crop mark.
@param string $type type of crop mark, one symbol per type separated by comma: T = TOP, F = BOTTOM, L = LEFT, R = RIGHT, TL = A = TOP-LEFT, TR = B = TOP-RIGHT, BL = C = BOTTOM-LEFT, BR = D = BOTTOM-RIGHT.
@param array $color crop mark color (default spot registration color).
@author Nicola Asuni
@since 4.9.000 (2010-03-26)
@public

Paints a registration mark
@param float $x abscissa of the registration mark center.
@param float $y ordinate of the registration mark center.
@param float $r radius of the crop mark.
@param boolean $double if true print two concentric crop marks.
@param array $cola crop mark color (default spot registration color 'All').
@param array $colb second crop mark color (default spot registration color 'None').
@author Nicola Asuni
@since 4.9.000 (2010-03-26)
@public

Paints a CMYK registration mark
@param float $x abscissa of the registration mark center.
@param float $y ordinate of the registration mark center.
@param float $r radius of the crop mark.
@author Nicola Asuni
@since 6.0.038 (2013-09-30)
@public

Paints a linear colour gradient.
@param float $x abscissa of the top left corner of the rectangle.
@param float $y ordinate of the top left corner of the rectangle.
@param float $w width of the rectangle.
@param float $h height of the rectangle.
@param array $col1 first color (Grayscale, RGB or CMYK components).
@param array $col2 second color (Grayscale, RGB or CMYK components).
@param array $coords array of the form (x1, y1, x2, y2) which defines the gradient vector (see linear_gradient_coords.jpg). The default value is from left to right (x1=0, y1=0, x2=1, y2=0).
@author Andreas W\FCrmser, Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Paints a radial colour gradient.
@param float $x abscissa of the top left corner of the rectangle.
@param float $y ordinate of the top left corner of the rectangle.
@param float $w width of the rectangle.
@param float $h height of the rectangle.
@param array $col1 first color (Grayscale, RGB or CMYK components).
@param array $col2 second color (Grayscale, RGB or CMYK components).
@param array $coords array of the form (fx, fy, cx, cy, r) where (fx, fy) is the starting point of the gradient with color1, (cx, cy) is the center of the circle with color2, and r is the radius of the circle (see radial_gradient_coords.jpg). (fx, fy) should be inside the circle, otherwise some areas will not be defined.
@author Andreas W\FCrmser, Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Paints a coons patch mesh.
@param float $x abscissa of the top left corner of the rectangle.
@param float $y ordinate of the top left corner of the rectangle.
@param float $w width of the rectangle.
@param float $h height of the rectangle.
@param array $col1 first color (lower left corner) (RGB components).
@param array $col2 second color (lower right corner) (RGB components).
@param array $col3 third color (upper right corner) (RGB components).
@param array $col4 fourth color (upper left corner) (RGB components).
@param array $coords <ul><li>for one patch mesh: array(float x1, float y1, .... float x12, float y12): 12 pairs of coordinates (normally from 0 to 1) which specify the Bezier control points that define the patch. First pair is the lower left edge point, next is its right control point (control point 2). Then the other points are defined in the order: control point 1, edge point, control point 2 going counter-clockwise around the patch. Last (x12, y12) is the first edge point's left control point (control point 1).</li><li>for two or more patch meshes: array[number of patches]: arrays with the following keys for each patch: f: where to put that patch (0 = first patch, 1, 2, 3 = right, top and left of precedent patch - I didn't figure this out completely - just try and error ;-) points: 12 pairs of coordinates of the Bezier control points as above for the first patch, 8 pairs of coordinates for the following patches, ignoring the coordinates already defined by the precedent patch (I also didn't figure out the order of these - also: try and see what's happening) colors: must be 4 colors for the first patch, 2 colors for the following patches</li></ul>
@param array $coords_min minimum value used by the coordinates. If a coordinate's value is smaller than this it will be cut to coords_min. default: 0
@param array $coords_max maximum value used by the coordinates. If a coordinate's value is greater than this it will be cut to coords_max. default: 1
@param boolean $antialias A flag indicating whether to filter the shading function to prevent aliasing artifacts.
@author Andreas W\FCrmser, Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Set a rectangular clipping area.
@param float $x abscissa of the top left corner of the rectangle (or top right corner for RTL mode).
@param float $y ordinate of the top left corner of the rectangle.
@param float $w width of the rectangle.
@param float $h height of the rectangle.
@author Andreas W\FCrmser, Nicola Asuni
@since 3.1.000 (2008-06-09)
@protected

Output gradient.
@param int $type type of gradient (1 Function-based shading; 2 Axial shading; 3 Radial shading; 4 Free-form Gouraud-shaded triangle mesh; 5 Lattice-form Gouraud-shaded triangle mesh; 6 Coons patch mesh; 7 Tensor-product patch mesh). (Not all types are currently supported)
@param array $coords array of coordinates.
@param array $stops array gradient color components: color = array of GRAY, RGB or CMYK color components; offset = (0 to 1) represents a location along the gradient vector; exponent = exponent of the exponential interpolation function (default = 1).
@param array $background An array of colour components appropriate to the colour space, specifying a single background colour value.
@param boolean $antialias A flag indicating whether to filter the shading function to prevent aliasing artifacts.
@author Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Output gradient shaders.
@author Nicola Asuni
@since 3.1.000 (2008-06-09)
@protected

Draw the sector of a circle.
It can be used for instance to render pie charts.
@param float $xc abscissa of the center.
@param float $yc ordinate of the center.
@param float $r radius.
@param float $a start angle (in degrees).
@param float $b end angle (in degrees).
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param float $cw indicates whether to go clockwise (default: true).
@param float $o origin of angles (0 for 3 o'clock, 90 for noon, 180 for 9 o'clock, 270 for 6 o'clock). Default: 90.
@author Maxime Delorme, Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Draw the sector of an ellipse.
It can be used for instance to render pie charts.
@param float $xc abscissa of the center.
@param float $yc ordinate of the center.
@param float $rx the x-axis radius.
@param float $ry the y-axis radius.
@param float $a start angle (in degrees).
@param float $b end angle (in degrees).
@param string $style Style of rendering. See the getPathPaintOperator() function for more information.
@param float $cw indicates whether to go clockwise.
@param float $o origin of angles (0 for 3 o'clock, 90 for noon, 180 for 9 o'clock, 270 for 6 o'clock).
@param integer $nc Number of curves used to draw a 90 degrees portion of arc.
@author Maxime Delorme, Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Embed vector-based Adobe Illustrator (AI) or AI-compatible EPS files.
NOTE: EPS is not yet fully implemented, use the setRasterizeVectorImages() method to enable/disable rasterization of vector images using ImageMagick library.
Only vector drawing is supported, not text or bitmap.
Although the script was successfully tested with various AI format versions, best results are probably achieved with files that were exported in the AI3 format (tested with Illustrator CS2, Freehand MX and Photoshop CS2).
@param string $file Name of the file containing the image or a '@' character followed by the EPS/AI data string.
@param float|null $x Abscissa of the upper-left corner.
@param float|null $y Ordinate of the upper-left corner.
@param float $w Width of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param float $h Height of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param mixed $link URL or identifier returned by AddLink().
@param boolean $useBoundingBox specifies whether to position the bounding box (true) or the complete canvas (false) at location (x,y). Default value is true.
@param string $align Indicates the alignment of the pointer next to image insertion relative to image height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
@param string $palign Allows to center or align the image on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param boolean $fitonpage if true the image is resized to not exceed page dimensions.
@param boolean $fixoutvals if true remove values outside the bounding box.
@author Valentin Schmidt, Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Set document barcode.
@param string $bc barcode
@public

Get current barcode.
@return string
@public
@since 4.0.012 (2008-07-24)

Print a Linear Barcode.
@param string $code code to print
@param string $type type of barcode (see tcpdf_barcodes_1d.php for supported formats).
@param float|null $x x position in user units (null = current x position)
@param float|null $y y position in user units (null = current y position)
@param float|null $w width in user units (null = remaining page width)
@param float|null $h height in user units (null = remaining page height)
@param float|null $xres width of the smallest bar in user units (null = default value = 0.4mm)
@param array $style array of options:<ul>
<li>boolean $style['border'] if true prints a border</li>
<li>int $style['padding'] padding to leave around the barcode in user units (set to 'auto' for automatic padding)</li>
<li>int $style['hpadding'] horizontal padding in user units (set to 'auto' for automatic padding)</li>
<li>int $style['vpadding'] vertical padding in user units (set to 'auto' for automatic padding)</li>
<li>array $style['fgcolor'] color array for bars and text</li>
<li>mixed $style['bgcolor'] color array for background (set to false for transparent)</li>
<li>boolean $style['text'] if true prints text below the barcode</li>
<li>string $style['label'] override default label</li>
<li>string $style['font'] font name for text</li><li>int $style['fontsize'] font size for text</li>
<li>int $style['stretchtext']: 0 = disabled; 1 = horizontal scaling only if necessary; 2 = forced horizontal scaling; 3 = character spacing only if necessary; 4 = forced character spacing.</li>
<li>string $style['position'] horizontal position of the containing barcode cell on the page: L = left margin; C = center; R = right margin.</li>
<li>string $style['align'] horizontal position of the barcode on the containing rectangle: L = left; C = center; R = right.</li>
<li>string $style['stretch'] if true stretch the barcode to best fit the available width, otherwise uses $xres resolution for a single bar.</li>
<li>string $style['fitwidth'] if true reduce the width to fit the barcode width + padding. When this option is enabled the 'stretch' option is automatically disabled.</li>
<li>string $style['cellfitalign'] this option works only when 'fitwidth' is true and 'position' is unset or empty. Set the horizontal position of the containing barcode cell inside the specified rectangle: L = left; C = center; R = right.</li></ul>
@param string $align Indicates the alignment of the pointer next to barcode insertion relative to barcode height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
@author Nicola Asuni
@since 3.1.000 (2008-06-09)
@public

Print 2D Barcode.
@param string $code code to print
@param string $type type of barcode (see tcpdf_barcodes_2d.php for supported formats).
@param float|null $x x position in user units
@param float|null $y y position in user units
@param float|null $w width in user units
@param float|null $h height in user units
@param array $style array of options:<ul>
<li>boolean $style['border'] if true prints a border around the barcode</li>
<li>int $style['padding'] padding to leave around the barcode in barcode units (set to 'auto' for automatic padding)</li>
<li>int $style['hpadding'] horizontal padding in barcode units (set to 'auto' for automatic padding)</li>
<li>int $style['vpadding'] vertical padding in barcode units (set to 'auto' for automatic padding)</li>
<li>int $style['module_width'] width of a single module in points</li>
<li>int $style['module_height'] height of a single module in points</li>
<li>array $style['fgcolor'] color array for bars and text</li>
<li>mixed $style['bgcolor'] color array for background or false for transparent</li>
<li>string $style['position'] barcode position on the page: L = left margin; C = center; R = right margin; S = stretch</li>
@param string $align Indicates the alignment of the pointer next to barcode insertion relative to barcode height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
@param boolean $distort if true distort the barcode to fit width and height, otherwise preserve aspect ratio
@author Nicola Asuni
@since 4.5.037 (2009-04-07)
@public

Returns an array containing current margins:
<ul>
			<li>$ret['left'] = left margin</li>
			<li>$ret['right'] = right margin</li>
			<li>$ret['top'] = top margin</li>
			<li>$ret['bottom'] = bottom margin</li>
			<li>$ret['header'] = header margin</li>
			<li>$ret['footer'] = footer margin</li>
			<li>$ret['cell'] = cell padding array</li>
			<li>$ret['padding_left'] = cell left padding</li>
			<li>$ret['padding_top'] = cell top padding</li>
			<li>$ret['padding_right'] = cell right padding</li>
			<li>$ret['padding_bottom'] = cell bottom padding</li>
</ul>
@return array containing all margins measures
@public
@since 3.2.000 (2008-06-23)

Returns an array containing original margins:
<ul>
			<li>$ret['left'] = left margin</li>
			<li>$ret['right'] = right margin</li>
</ul>
@return array containing all margins measures
@public
@since 4.0.012 (2008-07-24)

Returns the current font size.
@return float current font size
@public
@since 3.2.000 (2008-06-23)

Returns the current font size in points unit.
@return int current font size in points unit
@public
@since 3.2.000 (2008-06-23)

Returns the current font family name.
@return string current font family name
@public
@since 4.3.008 (2008-12-05)

Returns the current font style.
@return string current font style
@public
@since 4.3.008 (2008-12-05)

Cleanup HTML code (requires HTML Tidy library).
@param string $html htmlcode to fix
@param string $default_css CSS commands to add
@param array|null $tagvs parameters for setHtmlVSpace method
@param array|null $tidy_options options for tidy_parse_string function
@return string XHTML code cleaned up
@author Nicola Asuni
@public
@since 5.9.017 (2010-11-16)
@see setHtmlVSpace()

Returns the border width from CSS property
@param string $width border width
@return int with in user units
@protected
@since 5.7.000 (2010-08-02)

Returns the border dash style from CSS property
@param string $style border style to convert
@return int sash style (return -1 in case of none or hidden border)
@protected
@since 5.7.000 (2010-08-02)

Returns the border style array from CSS border properties
@param string $cssborder border properties
@return array containing border properties
@protected
@since 5.7.000 (2010-08-02)

Get the internal Cell padding from CSS attribute.
@param string $csspadding padding properties
@param float $width width of the containing element
@return array of cell paddings
@public
@since 5.9.000 (2010-10-04)

Get the internal Cell margin from CSS attribute.
@param string $cssmargin margin properties
@param float $width width of the containing element
@return array of cell margins
@public
@since 5.9.000 (2010-10-04)

Get the border-spacing from CSS attribute.
@param string $cssbspace border-spacing CSS properties
@param float $width width of the containing element
@return array of border spacings
@public
@since 5.9.010 (2010-10-27)

Returns the letter-spacing value from CSS value
@param string $spacing letter-spacing value
@param float $parent font spacing (tracking) value of the parent element
@return float quantity to increases or decreases the space between characters in a text.
@protected
@since 5.9.000 (2010-10-02)

Returns the percentage of font stretching from CSS value
@param string $stretch stretch mode
@param float $parent stretch value of the parent element
@return float font stretching percentage
@protected
@since 5.9.000 (2010-10-02)

Convert HTML string containing font size value to points
@param string $val String containing font size value and unit.
@param float $refsize Reference font size in points.
@param float $parent_size Parent font size in points.
@param string $defaultunit Default unit (can be one of the following: %, em, ex, px, in, mm, pc, pt).
@return float value in points
@public

Returns the HTML DOM array.
@param string $html html code
@return array
@protected
@since 3.2.000 (2008-06-20)

Returns the string used to find spaces
@return string
@protected
@author Nicola Asuni
@since 4.8.024 (2010-01-15)

Return an hash code used to ensure that the serialized data has been generated by this TCPDF instance.
@param string $data serialized data
@return string
@public static

Serialize an array of parameters to be used with TCPDF tag in HTML code.
@param array $data parameters array
@return string containing serialized data
@public static

Unserialize parameters to be used with TCPDF tag in HTML code.
@param string $data serialized data
@return array containing unserialized data
@protected static

Prints a cell (rectangular area) with optional borders, background color and html text string.
The upper-left corner of the cell corresponds to the current position. After the call, the current position moves to the right or to the next line.<br />
If automatic page breaking is enabled and the cell goes beyond the limit, a page break is done before outputting.
IMPORTANT: The HTML must be well formatted - try to clean-up it using an application like HTML-Tidy before submitting.
Supported tags are: a, b, blockquote, br, dd, del, div, dl, dt, em, font, h1, h2, h3, h4, h5, h6, hr, i, img, li, ol, p, pre, small, span, strong, sub, sup, table, tcpdf, td, th, thead, tr, tt, u, ul
NOTE: all the HTML attributes must be enclosed in double-quote.
@param float $w Cell width. If 0, the cell extends up to the right margin.
@param float $h Cell minimum height. The cell extends automatically if needed.
@param float|null $x upper-left corner X coordinate
@param float|null $y upper-left corner Y coordinate
@param string $html html text to print. Default value: empty string.
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param int $ln Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL language)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul>
Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
@param boolean $fill Indicates if the cell background must be painted (true) or transparent (false).
@param boolean $reseth if true reset the last cell height (default true).
@param string $align Allows to center or align the text. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
@param boolean $autopadding if true, uses internal padding and automatically adjust it to account for line width.
@see Multicell(), writeHTML()
@public

Allows to preserve some HTML formatting (limited support).<br />
IMPORTANT: The HTML must be well formatted - try to clean-up it using an application like HTML-Tidy before submitting.
Supported tags are: a, b, blockquote, br, dd, del, div, dl, dt, em, font, h1, h2, h3, h4, h5, h6, hr, i, img, li, ol, p, pre, small, span, strong, sub, sup, table, tcpdf, td, th, thead, tr, tt, u, ul
NOTE: all the HTML attributes must be enclosed in double-quote.
@param string $html text to display
@param boolean $ln if true add a new line after text (default = true)
@param boolean $fill Indicates if the background must be painted (true) or transparent (false).
@param boolean $reseth if true reset the last cell height (default false).
@param boolean $cell if true add the current left (or right for RTL) padding to each Write (default false).
@param string $align Allows to center or align the text. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
@public

Process opening tags.
@param array $dom html dom array
@param int $key current element id
@param boolean $cell if true add the default left (or right if RTL) padding to each new line (default false).
@return array $dom
@protected

Process closing tags.
@param array $dom html dom array
@param int $key current element id
@param boolean $cell if true add the default left (or right if RTL) padding to each new line (default false).
@param int $maxbottomliney maximum y value of current line
@return array $dom
@protected

Add vertical spaces if needed.
@param string $hbz Distance between current y and line bottom.
@param string $hb The height of the break.
@param boolean $cell if true add the default left (or right if RTL) padding to each new line (default false).
@param boolean $firsttag set to true when the tag is the first.
@param boolean $lasttag set to true when the tag is the last.
@protected

Return the starting coordinates to draw an html border
@return array containing top-left border coordinates
@protected
@since 5.7.000 (2010-08-03)

Draw an HTML block border and fill
@param array $tag array of tag properties.
@param int $xmax end X coordinate for border.
@protected
@since 5.7.000 (2010-08-03)

Set the default bullet to be used as LI bullet symbol
@param string $symbol character or string to be used (legal values are: '' = automatic, '!' = auto bullet, '#' = auto numbering, 'disc', 'disc', 'circle', 'square', '1', 'decimal', 'decimal-leading-zero', 'i', 'lower-roman', 'I', 'upper-roman', 'a', 'lower-alpha', 'lower-latin', 'A', 'upper-alpha', 'upper-latin', 'lower-greek', 'img|type|width|height|image.ext')
@public
@since 4.0.028 (2008-09-26)

Set the booklet mode for double-sided pages.
@param boolean $booklet true set the booklet mode on, false otherwise.
@param float $inner Inner page margin.
@param float $outer Outer page margin.
@public
@since 4.2.000 (2008-10-29)

Swap the left and right margins.
@param boolean $reverse if true swap left and right margins.
@protected
@since 4.2.000 (2008-10-29)

Set the vertical spaces for HTML tags.
The array must have the following structure (example):
$tagvs = array('h1' => array(0 => array('h' => '', 'n' => 2), 1 => array('h' => 1.3, 'n' => 1)));
The first array level contains the tag names,
the second level contains 0 for opening tags or 1 for closing tags,
the third level contains the vertical space unit (h) and the number spaces to add (n).
If the h parameter is not specified, default values are used.
@param array $tagvs array of tags and relative vertical spaces.
@public
@since 4.2.001 (2008-10-30)

Set custom width for list indentation.
@param float $width width of the indentation. Use negative value to disable it.
@public
@since 4.2.007 (2008-11-12)

Set the top/bottom cell sides to be open or closed when the cell cross the page.
@param boolean $isopen if true keeps the top/bottom border open for the cell sides that cross the page.
@public
@since 4.2.010 (2008-11-14)

Set the color and font style for HTML links.
@param array $color RGB array of colors
@param string $fontstyle additional font styles to add
@public
@since 4.4.003 (2008-12-09)

Convert HTML string containing value and unit of measure to user's units or points.
@param string $htmlval String containing values and unit.
@param string $refsize Reference value in points.
@param string $defaultunit Default unit (can be one of the following: %, em, ex, px, in, mm, pc, pt).
@param boolean $points If true returns points, otherwise returns value in user's units.
@return float value in user's unit or point if $points=true
@public
@since 4.4.004 (2008-12-10)

Output an HTML list bullet or ordered item symbol
@param int $listdepth list nesting level
@param string $listtype type of list
@param float $size current font size
@protected
@since 4.4.004 (2008-12-10)

Returns current graphic variables as array.
@return array of graphic variables
@protected
@since 4.2.010 (2008-11-14)

Set graphic variables.
@param array $gvars array of graphic variablesto restore
@param boolean $extended if true restore extended graphic variables
@protected
@since 4.2.010 (2008-11-14)

Outputs the "save graphics state" operator 'q'
@protected

Outputs the "restore graphics state" operator 'Q'
@protected

Set buffer content (always append data).
@param string $data data
@protected
@since 4.5.000 (2009-01-02)

Replace the buffer content
@param string $data data
@protected
@since 5.5.000 (2010-06-22)

Get buffer content.
@return string buffer content
@protected
@since 4.5.000 (2009-01-02)

Set page buffer content.
@param int $page page number
@param string $data page data
@param boolean $append if true append data, false replace.
@protected
@since 4.5.000 (2008-12-31)

Get page buffer content.
@param int $page page number
@return string page buffer content or false in case of error
@protected
@since 4.5.000 (2008-12-31)

Set image buffer content.
@param string $image image key
@param array $data image data
@return int image index number
@protected
@since 4.5.000 (2008-12-31)

Set image buffer content for a specified sub-key.
@param string $image image key
@param string $key image sub-key
@param array $data image data
@protected
@since 4.5.000 (2008-12-31)

Get image buffer content.
@param string $image image key
@return string|false image buffer content or false in case of error
@protected
@since 4.5.000 (2008-12-31)

Set font buffer content.
@param string $font font key
@param array $data font data
@protected
@since 4.5.000 (2009-01-02)

Set font buffer content.
@param string $font font key
@param string $key font sub-key
@param mixed $data font data
@protected
@since 4.5.000 (2009-01-02)

Get font buffer content.
@param string $font font key
@return string|false font buffer content or false in case of error
@protected
@since 4.5.000 (2009-01-02)

Move a page to a previous position.
@param int $frompage number of the source page
@param int $topage number of the destination page (must be less than $frompage)
@return bool true in case of success, false in case of error.
@public
@since 4.5.000 (2009-01-02)

Remove the specified page.
@param int $page page to remove
@return bool true in case of success, false in case of error.
@public
@since 4.6.004 (2009-04-23)

Clone the specified page to a new page.
@param int $page number of page to copy (0 = current page)
@return bool true in case of success, false in case of error.
@public
@since 4.9.015 (2010-04-20)

Output a Table of Content Index (TOC).
This method must be called after all Bookmarks were set.
Before calling this method you have to open the page using the addTOCPage() method.
After calling this method you have to call endTOCPage() to close the TOC page.
You can override this method to achieve different styles.
@param int|null $page page number where this TOC should be inserted (leave empty for current page).
@param string $numbersfont set the font for page numbers (please use monospaced font for better alignment).
@param string $filler string used to fill the space between text and page number.
@param string $toc_name name to use for TOC bookmark.
@param string $style Font style for title: B = Bold, I = Italic, BI = Bold + Italic.
@param array $color RGB color array for bookmark title (values from 0 to 255).
@public
@author Nicola Asuni
@since 4.5.000 (2009-01-02)
@see addTOCPage(), endTOCPage(), addHTMLTOC()

Output a Table Of Content Index (TOC) using HTML templates.
This method must be called after all Bookmarks were set.
Before calling this method you have to open the page using the addTOCPage() method.
After calling this method you have to call endTOCPage() to close the TOC page.
@param int|null $page page number where this TOC should be inserted (leave empty for current page).
@param string $toc_name name to use for TOC bookmark.
@param array $templates array of html templates. Use: "#TOC_DESCRIPTION#" for bookmark title, "#TOC_PAGE_NUMBER#" for page number.
@param boolean $correct_align if true correct the number alignment (numbers must be in monospaced font like courier and right aligned on LTR, or left aligned on RTL)
@param string $style Font style for title: B = Bold, I = Italic, BI = Bold + Italic.
@param array $color RGB color array for title (values from 0 to 255).
@public
@author Nicola Asuni
@since 5.0.001 (2010-05-06)
@see addTOCPage(), endTOCPage(), addTOC()

Stores a copy of the current TCPDF object used for undo operation.
@public
@since 4.5.029 (2009-03-19)

Delete the copy of the current TCPDF object used for undo operation.
@public
@since 4.5.029 (2009-03-19)

This method allows to undo the latest transaction by returning the latest saved TCPDF object with startTransaction().
@param boolean $self if true restores current class object to previous state without the need of reassignment via the returned value.
@return TCPDF object.
@public
@since 4.5.029 (2009-03-19)

Set multiple columns of the same size
@param int $numcols number of columns (set to zero to disable columns mode)
@param int $width column width
@param int|null $y column starting Y position (leave empty for current Y position)
@public
@since 4.9.001 (2010-03-28)

Remove columns and reset page margins.
@public
@since 5.9.072 (2011-04-26)

Set columns array.
Each column is represented by an array of arrays with the following keys: (w = width, s = space between columns, y = column top position).
@param array $columns
@public
@since 4.9.001 (2010-03-28)

Set position at a given column
@param int|null $col column number (from 0 to getNumberOfColumns()-1); empty string = current column.
@public
@since 4.9.001 (2010-03-28)

Return the current column number
@return int current column number
@public
@since 5.5.011 (2010-07-08)

Return the current number of columns.
@return int number of columns
@public
@since 5.8.018 (2010-08-25)

Set Text rendering mode.
@param int $stroke outline size in user units (0 = disable).
@param boolean $fill if true fills the text (default).
@param boolean $clip if true activate clipping mode
@public
@since 4.9.008 (2009-04-02)

Set parameters for drop shadow effect for text.
@param array $params Array of parameters: enabled (boolean) set to true to enable shadow; depth_w (float) shadow width in user units; depth_h (float) shadow height in user units; color (array) shadow color or false to use the stroke color; opacity (float) Alpha value: real value from 0 (transparent) to 1 (opaque); blend_mode (string) blend mode, one of the following: Normal, Multiply, Screen, Overlay, Darken, Lighten, ColorDodge, ColorBurn, HardLight, SoftLight, Difference, Exclusion, Hue, Saturation, Color, Luminosity.
@since 5.9.174 (2012-07-25)
@public

Return the text shadow parameters array.
@return array array of parameters.
@since 5.9.174 (2012-07-25)
@public

Returns an array of chars containing soft hyphens.
@param array $word array of chars
@param array $patterns Array of hypenation patterns.
@param array $dictionary Array of words to be returned without applying the hyphenation algorithm.
@param int $leftmin Minimum number of character to leave on the left of the word without applying the hyphens.
@param int $rightmin Minimum number of character to leave on the right of the word without applying the hyphens.
@param int $charmin Minimum word length to apply the hyphenation algorithm.
@param int $charmax Maximum length of broken piece of word.
@return array text with soft hyphens
@author Nicola Asuni
@since 4.9.012 (2010-04-12)
@protected

Returns text with soft hyphens.
@param string $text text to process
@param mixed $patterns Array of hypenation patterns or a TEX file containing hypenation patterns. TEX patterns can be downloaded from http://www.ctan.org/tex-archive/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
@param array $dictionary Array of words to be returned without applying the hyphenation algorithm.
@param int $leftmin Minimum number of character to leave on the left of the word without applying the hyphens.
@param int $rightmin Minimum number of character to leave on the right of the word without applying the hyphens.
@param int $charmin Minimum word length to apply the hyphenation algorithm.
@param int $charmax Maximum length of broken piece of word.
@return string text with soft hyphens
@author Nicola Asuni
@since 4.9.012 (2010-04-12)
@public

Enable/disable rasterization of vector images using ImageMagick library.
@param boolean $mode if true enable rasterization, false otherwise.
@public
@since 5.0.000 (2010-04-27)

Enable or disable default option for font subsetting.
@param boolean $enable if true enable font subsetting by default.
@author Nicola Asuni
@public
@since 5.3.002 (2010-06-07)

Return the default option for font subsetting.
@return bool default font subsetting state.
@author Nicola Asuni
@public
@since 5.3.002 (2010-06-07)

Left trim the input string
@param string $str string to trim
@param string $replace string that replace spaces.
@return string left trimmed string
@author Nicola Asuni
@public
@since 5.8.000 (2010-08-11)

Right trim the input string
@param string $str string to trim
@param string $replace string that replace spaces.
@return string right trimmed string
@author Nicola Asuni
@public
@since 5.8.000 (2010-08-11)

Trim the input string
@param string $str string to trim
@param string $replace string that replace spaces.
@return string trimmed string
@author Nicola Asuni
@public
@since 5.8.000 (2010-08-11)

Return true if the current font is unicode type.
@return bool true for unicode font, false otherwise.
@author Nicola Asuni
@public
@since 5.8.002 (2010-08-14)

Return normalized font name
@param string $fontfamily property string containing font family names
@return string normalized font name
@author Nicola Asuni
@public
@since 5.8.004 (2010-08-17)

Start a new XObject Template.
An XObject Template is a PDF block that is a self-contained description of any sequence of graphics objects (including path objects, text objects, and sampled images).
An XObject Template may be painted multiple times, either on several pages or at several locations on the same page and produces the same results each time, subject only to the graphics state at the time it is invoked.
Note: X,Y coordinates will be reset to 0,0.
@param int $w Template width in user units (empty string or zero = page width less margins).
@param int $h Template height in user units (empty string or zero = page height less margins).
@param mixed $group Set transparency group. Can be a boolean value or an array specifying optional parameters: 'CS' (solour space name), 'I' (boolean flag to indicate isolated group) and 'K' (boolean flag to indicate knockout group).
@return string|false the XObject Template ID in case of success or false in case of error.
@author Nicola Asuni
@public
@since 5.8.017 (2010-08-24)
@see endTemplate(), printTemplate()

End the current XObject Template started with startTemplate() and restore the previous graphic state.
An XObject Template is a PDF block that is a self-contained description of any sequence of graphics objects (including path objects, text objects, and sampled images).
An XObject Template may be painted multiple times, either on several pages or at several locations on the same page and produces the same results each time, subject only to the graphics state at the time it is invoked.
@return string|false the XObject Template ID in case of success or false in case of error.
@author Nicola Asuni
@public
@since 5.8.017 (2010-08-24)
@see startTemplate(), printTemplate()

Print an XObject Template.
You can print an XObject Template inside the currently opened Template.
An XObject Template is a PDF block that is a self-contained description of any sequence of graphics objects (including path objects, text objects, and sampled images).
An XObject Template may be painted multiple times, either on several pages or at several locations on the same page and produces the same results each time, subject only to the graphics state at the time it is invoked.
@param string $id The ID of XObject Template to print.
@param float|null $x X position in user units (empty string = current x position)
@param float|null $y Y position in user units (empty string = current y position)
@param float $w Width in user units (zero = remaining page width)
@param float $h Height in user units (zero = remaining page height)
@param string $align Indicates the alignment of the pointer next to template insertion relative to template height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul>
@param string $palign Allows to center or align the template on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
@param boolean $fitonpage If true the template is resized to not exceed page dimensions.
@author Nicola Asuni
@public
@since 5.8.017 (2010-08-24)
@see startTemplate(), endTemplate()

Set the percentage of character stretching.
@param int $perc percentage of stretching (100 = no stretching)
@author Nicola Asuni
@public
@since 5.9.000 (2010-09-29)

Get the percentage of character stretching.
@return float stretching value
@author Nicola Asuni
@public
@since 5.9.000 (2010-09-29)

Set the amount to increase or decrease the space between characters in a text.
@param float $spacing amount to increase or decrease the space between characters in a text (0 = default spacing)
@author Nicola Asuni
@public
@since 5.9.000 (2010-09-29)

Get the amount to increase or decrease the space between characters in a text.
@return int font spacing (tracking) value
@author Nicola Asuni
@public
@since 5.9.000 (2010-09-29)

Return an array of no-write page regions
@return array of no-write page regions
@author Nicola Asuni
@public
@since 5.9.003 (2010-10-13)
@see setPageRegions(), addPageRegion()

Set no-write regions on page.
A no-write region is a portion of the page with a rectangular or trapezium shape that will not be covered when writing text or html code.
A region is always aligned on the left or right side of the page ad is defined using a vertical segment.
You can set multiple regions for the same page.
@param array $regions array of no-write regions. For each region you can define an array as follow: ('page' => page number or empy for current page, 'xt' => X top, 'yt' => Y top, 'xb' => X bottom, 'yb' => Y bottom, 'side' => page side 'L' = left or 'R' = right). Omit this parameter to remove all regions.
@author Nicola Asuni
@public
@since 5.9.003 (2010-10-13)
@see addPageRegion(), getPageRegions()

Add a single no-write region on selected page.
A no-write region is a portion of the page with a rectangular or trapezium shape that will not be covered when writing text or html code.
A region is always aligned on the left or right side of the page ad is defined using a vertical segment.
You can set multiple regions for the same page.
@param array $region array of a single no-write region array: ('page' => page number or empy for current page, 'xt' => X top, 'yt' => Y top, 'xb' => X bottom, 'yb' => Y bottom, 'side' => page side 'L' = left or 'R' = right).
@author Nicola Asuni
@public
@since 5.9.003 (2010-10-13)
@see setPageRegions(), getPageRegions()

Remove a single no-write region.
@param int $key region key
@author Nicola Asuni
@public
@since 5.9.003 (2010-10-13)
@see setPageRegions(), getPageRegions()

Check page for no-write regions and adapt current coordinates and page margins if necessary.
A no-write region is a portion of the page with a rectangular or trapezium shape that will not be covered when writing text or html code.
A region is always aligned on the left or right side of the page ad is defined using a vertical segment.
@param float $h height of the text/image/object to print in user units
@param float $x current X coordinate in user units
@param float $y current Y coordinate in user units
@return float[] array($x, $y)
@author Nicola Asuni
@protected
@since 5.9.003 (2010-10-13)

Embedd a Scalable Vector Graphics (SVG) image.
NOTE: SVG standard is not yet fully implemented, use the setRasterizeVectorImages() method to enable/disable rasterization of vector images using ImageMagick library.
@param string $file Name of the SVG file or a '@' character followed by the SVG data string.
@param float|null $x Abscissa of the upper-left corner.
@param float|null $y Ordinate of the upper-left corner.
@param float $w Width of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param float $h Height of the image in the page. If not specified or equal to zero, it is automatically calculated.
@param mixed $link URL or identifier returned by AddLink().
@param string $align Indicates the alignment of the pointer next to image insertion relative to image height. The value can be:<ul><li>T: top-right for LTR or top-left for RTL</li><li>M: middle-right for LTR or middle-left for RTL</li><li>B: bottom-right for LTR or bottom-left for RTL</li><li>N: next line</li></ul> If the alignment is an empty string, then the pointer will be restored on the starting SVG position.
@param string $palign Allows to center or align the image on the current line. Possible values are:<ul><li>L : left align</li><li>C : center</li><li>R : right align</li><li>'' : empty string : left for LTR or right for RTL</li></ul>
@param mixed $border Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
@param boolean $fitonpage if true the image is resized to not exceed page dimensions.
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@public

Convert SVG transformation matrix to PDF.
@param array $tm original SVG transformation matrix
@return array transformation matrix
@protected
@since 5.0.000 (2010-05-02)

Apply SVG graphic transformation matrix.
@param array $tm original SVG transformation matrix
@protected
@since 5.0.000 (2010-05-02)

Apply the requested SVG styles (*** TO BE COMPLETED ***)
@param array $svgstyle array of SVG styles to apply
@param array $prevsvgstyle array of previous SVG style
@param int $x X origin of the bounding box
@param int $y Y origin of the bounding box
@param int $w width of the bounding box
@param int $h height of the bounding box
@param string $clip_function clip function
@param array $clip_params array of parameters for clipping function
@return string style
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@protected

Draws an SVG path
@param string $d attribute d of the path SVG element
@param string $style Style of rendering. Possible values are:
<ul>
 <li>D or empty string: Draw (default).</li>
 <li>F: Fill.</li>
 <li>F*: Fill using the even-odd rule to determine which regions lie inside the clipping path.</li>
 <li>DF or FD: Draw and fill.</li>
 <li>DF* or FD*: Draw and fill using the even-odd rule to determine which regions lie inside the clipping path.</li>
 <li>CNZ: Clipping mode (using the even-odd rule to determine which regions lie inside the clipping path).</li>
 <li>CEO: Clipping mode (using the nonzero winding number rule to determine which regions lie inside the clipping path).</li>
</ul>
@return array of container box measures (x, y, w, h)
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@protected

Return the tag name without the namespace
@param string $name Tag name
@protected

Sets the opening SVG element handler function for the XML parser. (*** TO BE COMPLETED ***)
@param resource|string $parser The first parameter, parser, is a reference to the XML parser calling the handler.
@param string $name The second parameter, name, contains the name of the element for which this handler is called. If case-folding is in effect for this parser, the element name will be in uppercase letters.
@param array $attribs The third parameter, attribs, contains an associative array with the element's attributes (if any). The keys of this array are the attribute names, the values are the attribute values. Attribute names are case-folded on the same criteria as element names. Attribute values are not case-folded. The original order of the attributes can be retrieved by walking through attribs the normal way, using each(). The first key in the array was the first attribute, and so on.
@param array $ctm tranformation matrix for clipping mode (starting transformation matrix).
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@protected

Sets the closing SVG element handler function for the XML parser.
@param resource|string $parser The first parameter, parser, is a reference to the XML parser calling the handler.
@param string $name The second parameter, name, contains the name of the element for which this handler is called. If case-folding is in effect for this parser, the element name will be in uppercase letters.
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@protected

Sets the character data handler function for the XML parser.
@param resource $parser The first parameter, parser, is a reference to the XML parser calling the handler.
@param string $data The second parameter, data, contains the character data as a string.
@author Nicola Asuni
@since 5.0.000 (2010-05-02)
@protected

Keeps files in memory, so it doesn't need to downloaded everytime in a loop
@param string $file
@return string

Avoid multiple calls to an external server to see if a file exists
@param string $file
@return bool

## References

**Database Tables (inferred)**
- `the`
- `value`
- `another`
- `a`
- `SS`
- `1`
- `format`
- `getting`
- `page`
- `0`
- `normal`
- `checkPageBreak`
- `string`
- `specified`
- `alpha`
- `CIDs`
- `which`
- `style`
- `n`
- `center`
- `left`
- `color`
- `CSS`
- `code`
- `nested`
- `parent`
- `previous`
- `y`
- `two`
- `http`
- `array`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\tcpdf.php`

**Classes**:
- `for`
- `was`
- `by`
- `for`
- `by`
- `TCPDF`
- `for`
- `by`
- `for`
- `TCPDF`
- `object`
- `constructor`
- `of`
- `variables`
- `variables`
- `variables`
- `variables`
- `file`
- `object`

**Functions/Methods**:
- `__construct($orientation='P', $unit='mm', $format='A4', $unicode=true, $encoding='UTF-8', $diskcache=false, $pdfa=false)`
- `__destruct()`
- `setPageUnit($unit)`
- `setPageFormat($format, $orientation='P')`
- `setPageOrientation($orientation, $autopagebreak=null, $bottommargin=null)`
- `setSpacesRE($re='/[^\S\xa0]/')`
- `setRTL($enable, $resetx=true)`
- `getRTL()`
- `setTempRTL($mode)`
- `isRTLTextDir()`
- `setLastH($h)`
- `getCellHeight($fontsize, $padding=TRUE)`
- `resetLastH()`
- `getLastH()`
- `setImageScale($scale)`
- `getImageScale()`
- `getPageDimensions($pagenum=null)`
- `getPageWidth($pagenum=null)`
- `getPageHeight($pagenum=null)`
- `getBreakMargin($pagenum=null)`
- `getScaleFactor()`
- `setMargins($left, $top, $right=null, $keepmargins=false)`
- `setLeftMargin($margin)`
- `setTopMargin($margin)`
- `setRightMargin($margin)`
- `setCellPadding($pad)`
- `setCellPaddings($left=null, $top=null, $right=null, $bottom=null)`
- `getCellPaddings()`
- `setCellMargins($left=null, $top=null, $right=null, $bottom=null)`
- `getCellMargins()`
- `adjustCellPadding($brd=0)`
- `setAutoPageBreak($auto, $margin=0)`
- `getAutoPageBreak()`
- `setDisplayMode($zoom, $layout='SinglePage', $mode='UseNone')`
- `setCompression($compress=true)`
- `setSRGBmode($mode=false)`
- `setDocInfoUnicode($unicode=true)`
- `setTitle($title)`
- `setSubject($subject)`
- `setAuthor($author)`
- `setKeywords($keywords)`
- `setCreator($creator)`
- `setAllowLocalFiles($allowLocalFiles)`
- `Error($msg)`
- `Open()`
- `Close()`
- `setPage($pnum, $resetmargins=false)`
- `lastPage($resetmargins=false)`
- `getPage()`
- `getNumPages()`
- `addTOCPage($orientation='', $format='', $keepmargins=false)`
- `endTOCPage()`
- `AddPage($orientation='', $format='', $keepmargins=false, $tocpage=false)`
- `endPage($tocpage=false)`
- `startPage($orientation='', $format='', $tocpage=false)`
- `setPageMark()`
- `setContentMark($page=0)`
- `setHeaderData($ln='', $lw=0, $ht='', $hs='', $tc=array(0,0,0)`
- `setFooterData($tc=array(0,0,0)`
- `getHeaderData()`
- `setHeaderMargin($hm=10)`
- `getHeaderMargin()`
- `setFooterMargin($fm=10)`
- `getFooterMargin()`
- `setPrintHeader($val=true)`
- `setPrintFooter($val=true)`
- `getImageRBX()`
- `getImageRBY()`
- `resetHeaderTemplate()`
- `setHeaderTemplateAutoreset($val=true)`
- `Header()`
- `Footer()`
- `setHeader()`
- `setFooter()`
- `inPageBody()`
- `setTableHeader()`
- `PageNo()`
- `getAllSpotColors()`
- `AddSpotColor($name, $c, $m, $y, $k)`
- `setSpotColor($type, $name, $tint=100)`
- `setDrawSpotColor($name, $tint=100)`
- `setFillSpotColor($name, $tint=100)`
- `setTextSpotColor($name, $tint=100)`
- `setColorArray($type, $color, $ret=false)`
- `setDrawColorArray($color, $ret=false)`
- `setFillColorArray($color, $ret=false)`
- `setTextColorArray($color, $ret=false)`
- `setColor($type, $col1=0, $col2=-1, $col3=-1, $col4=-1, $ret=false, $name='')`
- `setDrawColor($col1=0, $col2=-1, $col3=-1, $col4=-1, $ret=false, $name='')`
- `setFillColor($col1=0, $col2=-1, $col3=-1, $col4=-1, $ret=false, $name='')`
- `setTextColor($col1=0, $col2=-1, $col3=-1, $col4=-1, $ret=false, $name='')`
- `GetStringWidth($s, $fontname='', $fontstyle='', $fontsize=0, $getarray=false)`
- `GetArrStringWidth($sa, $fontname='', $fontstyle='', $fontsize=0, $getarray=false)`
- `GetCharWidth($char, $notlast=true)`
- `getRawCharWidth($char)`
- `GetNumChars($s)`
- `getFontsList()`
- `AddFont($family, $style='', $fontfile='', $subset='default')`
- `setFont($family, $style='', $size=null, $fontfile='', $subset='default', $out=true)`
- `setFontSize($size, $out=true)`
- `getFontBBox()`
- `getAbsFontMeasure($s)`
- `getCharBBox($char)`
- `getFontDescent($font, $style='', $size=0)`
- `getFontAscent($font, $style='', $size=0)`
- `isCharDefined($char, $font='', $style='')`
- `replaceMissingChars($text, $font='', $style='', $subs=array()`
- `setDefaultMonospacedFont($font)`
- `AddLink()`
- `setLink($link, $y=0, $page=-1)`
- `Link($x, $y, $w, $h, $link, $spaces=0)`
- `Annotation($x, $y, $w, $h, $text, $opt=array('Subtype'=>'Text')`
- `_putEmbeddedFiles()`
- `Text($x, $y, $txt, $fstroke=0, $fclip=false, $ffill=true, $border=0, $ln=0, $align='', $fill=false, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M', $rtloff=false)`
- `AcceptPageBreak()`
- `checkPageBreak($h=0, $y=null, $addpage=true)`
- `Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')`
- `getCellCode($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')`
- `replaceChar($oldchar, $newchar)`
- `getCellBorder($x, $y, $w, $h, $brd)`
- `MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false, $ln=1, $x=null, $y=null, $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0, $valign='T', $fitcell=false)`
- `getNumLines($txt, $w=0, $reseth=false, $autopadding=true, $cellpadding=null, $border=0)`
- `getStringHeight($w, $txt, $reseth=false, $autopadding=true, $cellpadding=null, $border=0)`
- `Write($h, $txt, $link='', $fill=false, $align='', $ln=false, $stretch=0, $firstline=false, $firstblock=false, $maxh=0, $wadj=0, $margin=null)`
- `getRemainingWidth()`
- `fitBlock($w, $h, $x, $y, $fitonpage=false)`
- `Image($file, $x=null, $y=null, $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false, $alt=false, $altimgs=array()`
- `ImagePngAlpha($file, $x, $y, $wpx, $hpx, $w, $h, $type, $link, $align, $resize, $dpi, $palign, $filehash='')`
- `getGDgamma($img, $c)`
- `Ln($h=null, $cell=false)`
- `GetX()`
- `GetAbsX()`
- `GetY()`
- `setX($x, $rtloff=false)`
- `setY($y, $resetx=true, $rtloff=false)`
- `setXY($x, $y, $rtloff=false)`
- `setAbsX($x)`
- `setAbsY($y)`
- `setAbsXY($x, $y)`
- `Output($name='doc.pdf', $dest='I')`
- `_destroy($destroyall=false, $preserve_objcopy=false)`
- `_dochecks()`
- `getInternalPageNumberAliases($a= '')`
- `getAllInternalPageNumberAliases()`
- `replaceRightShiftPageNumAliases($page, $aliases, $diff)`
- `setPageBoxTypes($boxes)`
- `_putpages()`
- `_getannotsrefs($n)`
- `_putannotsobjs()`
- `_putAPXObject($w=0, $h=0, $stream='')`
- `_putfonts()`
- `_puttruetypeunicode($font)`
- `_putcidfont0($font)`
- `_putimages()`
- `_putxobjects()`
- `_putspotcolors()`
- `_getxobjectdict()`
- `_putresourcedict()`
- `_putresources()`
- `_putinfo()`
- `setExtraXMP($xmp)`
- `setExtraXMPRDF($xmp)`
- `_putXMP()`
- `_putcatalog()`
- `_putviewerpreferences()`
- `_putheader()`
- `_enddoc()`
- `_beginpage($orientation='', $format='')`
- `_endpage()`
- `_newobj()`
- `_getobj($objid=null)`
- `_dounderline($x, $y, $txt)`
- `_dounderlinew($x, $y, $w)`
- `_dolinethrough($x, $y, $txt)`
- `_dolinethroughw($x, $y, $w)`
- `_dooverline($x, $y, $txt)`
- `_dooverlinew($x, $y, $w)`
- `_datastring($s, $n=0)`
- `setDocCreationTimestamp($time)`
- `setDocModificationTimestamp($time)`
- `getDocCreationTimestamp()`
- `getDocModificationTimestamp()`
- `_datestring($n=0, $timestamp=0)`
- `_textstring($s, $n=0)`
- `_getrawstream($s, $n=0)`
- `_out($s)`
- `setHeaderFont($font)`
- `getHeaderFont()`
- `setFooterFont($font)`
- `getFooterFont()`
- `setLanguageArray($language)`
- `getPDFData()`
- `addHtmlLink($url, $name, $fill=false, $firstline=false, $color=null, $style=-1, $firstblock=false)`
- `pixelsToUnits($px)`
- `unhtmlentities($text_to_convert)`
- `_objectkey($n)`
- `_encrypt_data($n, $s)`
- `_putencryption()`
- `_Uvalue()`
- `_UEvalue()`
- `_Ovalue()`
- `_OEvalue()`
- `_fixAES256Password($password)`
- `_generateencryptionkey()`
- `setProtection($permissions=array('print', 'modify', 'copy', 'annot-forms', 'fill-forms', 'extract', 'assemble', 'print-high')`
- `StartTransform()`
- `StopTransform()`
- `ScaleX($s_x, $x='', $y='')`
- `ScaleY($s_y, $x='', $y='')`
- `ScaleXY($s, $x='', $y='')`
- `Scale($s_x, $s_y, $x=null, $y=null)`
- `MirrorH($x=null)`
- `MirrorV($y=null)`
- `MirrorP($x=null,$y=null)`
- `MirrorL($angle=0, $x=null,$y=null)`
- `TranslateX($t_x)`
- `TranslateY($t_y)`
- `Translate($t_x, $t_y)`
- `Rotate($angle, $x=null, $y=null)`
- `SkewX($angle_x, $x=null, $y=null)`
- `SkewY($angle_y, $x=null, $y=null)`
- `Skew($angle_x, $angle_y, $x=null, $y=null)`
- `Transform($tm)`
- `setLineWidth($width)`
- `GetLineWidth()`
- `setLineStyle($style, $ret=false)`
- `_outPoint($x, $y)`
- `_outLine($x, $y)`
- `_outRect($x, $y, $w, $h, $op)`
- `_outCurve($x1, $y1, $x2, $y2, $x3, $y3)`
- `_outCurveV($x2, $y2, $x3, $y3)`
- `_outCurveY($x1, $y1, $x3, $y3)`
- `Line($x1, $y1, $x2, $y2, $style=array()`
- `Rect($x, $y, $w, $h, $style='', $border_style=array()`
- `Curve($x0, $y0, $x1, $y1, $x2, $y2, $x3, $y3, $style='', $line_style=array()`
- `Polycurve($x0, $y0, $segments, $style='', $line_style=array()`
- `Ellipse($x0, $y0, $rx, $ry=0, $angle=0, $astart=0, $afinish=360, $style='', $line_style=array()`
- `_outellipticalarc($xc, $yc, $rx, $ry, $xang=0, $angs=0, $angf=360, $pie=false, $nc=2, $startpoint=true, $ccw=true, $svg=false)`
- `Circle($x0, $y0, $r, $angstr=0, $angend=360, $style='', $line_style=array()`
- `PolyLine($p, $style='', $line_style=array()`
- `Polygon($p, $style='', $line_style=array()`
- `RegularPolygon($x0, $y0, $r, $ns, $angle=0, $draw_circle=false, $style='', $line_style=array()`
- `StarPolygon($x0, $y0, $r, $nv, $ng, $angle=0, $draw_circle=false, $style='', $line_style=array()`
- `RoundedRect($x, $y, $w, $h, $r, $round_corner='1111', $style='', $border_style=array()`
- `RoundedRectXY($x, $y, $w, $h, $rx, $ry, $round_corner='1111', $style='', $border_style=array()`
- `Arrow($x0, $y0, $x1, $y1, $head_style=0, $arm_size=5, $arm_angle=15)`
- `setDestination($name, $y=-1, $page='', $x=-1)`
- `getDestination()`
- `_putdests()`
- `setBookmark($txt, $level=0, $y=-1, $page='', $style='', $color=array(0,0,0)`
- `Bookmark($txt, $level=0, $y=-1, $page='', $style='', $color=array(0,0,0)`
- `sortBookmarks()`
- `_putbookmarks()`
- `IncludeJS($script)`
- `addJavascriptObject($script, $onload=false)`
- `_putjavascript()`
- `_addfield($type, $name, $x, $y, $w, $h, $prop)`
- `setFormDefaultProp($prop=array()`
- `getFormDefaultProp()`
- `TextField($name, $w, $h, $prop=array()`
- `RadioButton($name, $w, $prop=array()`
- `ListBox($name, $w, $h, $values, $prop=array()`
- `ComboBox($name, $w, $h, $values, $prop=array()`
- `CheckBox($name, $w, $checked=false, $prop=array()`
- `Button($name, $w, $h, $caption, $action, $prop=array()`
- `_putsignature()`
- `setUserRights($enable=true,
			$document='/FullSave',
			$annots='/Create/Delete/Modify/Copy/Import/Export',
			$form='/Add/Delete/FillIn/Import/Export/SubmitStandalone/SpawnTemplate',
			$signature='/Modify',
			$ef='/Create/Delete/Modify/Import',
			$formex='')`
- `setSignature($signing_cert='', $private_key='', $private_key_password='', $extracerts='', $cert_type=2, $info=array()`
- `setSignatureAppearance($x=0, $y=0, $w=0, $h=0, $page=-1, $name='')`
- `addEmptySignatureAppearance($x=0, $y=0, $w=0, $h=0, $page=-1, $name='')`
- `getSignatureAppearanceArray($x=0, $y=0, $w=0, $h=0, $page=-1, $name='')`
- `setTimeStamp($tsa_host='', $tsa_username='', $tsa_password='', $tsa_cert='')`
- `applyTSA($signature)`
- `startPageGroup($page=null)`
- `setStartingPageNumber($num=1)`
- `getAliasRightShift()`
- `getAliasNbPages()`
- `getAliasNumPage()`
- `getPageGroupAlias()`
- `getPageNumGroupAlias()`
- `getGroupPageNo()`
- `getGroupPageNoFormatted()`
- `PageNoFormatted()`
- `_putocg()`
- `startLayer($name='', $print=true, $view=true, $lock=true)`
- `endLayer()`
- `setVisibility($v)`
- `addExtGState($parms)`
- `setExtGState($gs)`
- `_putextgstates()`
- `setOverprint($stroking=true, $nonstroking=null, $mode=0)`
- `getOverprint()`
- `setAlpha($stroking=1, $bm='Normal', $nonstroking=null, $ais=false)`
- `getAlpha()`
- `setJPEGQuality($quality)`
- `setDefaultTableColumns($cols=4)`
- `setCellHeightRatio($h)`
- `getCellHeightRatio()`
- `setPDFVersion($version='1.7')`
- `setViewerPreferences($preferences)`
- `colorRegistrationBar($x, $y, $w, $h, $transition=true, $vertical=false, $colors='A,R,G,B,C,M,Y,K')`
- `cropMark($x, $y, $w, $h, $type='T,R,B,L', $color=array(100,100,100,100,'All')`
- `registrationMark($x, $y, $r, $double=false, $cola=array(100,100,100,100,'All')`
- `registrationMarkCMYK($x, $y, $r)`
- `LinearGradient($x, $y, $w, $h, $col1=array()`
- `RadialGradient($x, $y, $w, $h, $col1=array()`
- `CoonsPatchMesh($x, $y, $w, $h, $col1=array()`
- `Clip($x, $y, $w, $h)`
- `Gradient($type, $coords, $stops, $background=array()`
- `if(isset($stop['exponent'])`
- `_putshaders()`
- `PieSector($xc, $yc, $r, $a, $b, $style='FD', $cw=true, $o=90)`
- `PieSectorXY($xc, $yc, $rx, $ry, $a, $b, $style='FD', $cw=false, $o=0, $nc=2)`
- `ImageEps($file, $x=null, $y=null, $w=0, $h=0, $link='', $useBoundingBox=true, $align='', $palign='', $border=0, $fitonpage=false, $fixoutvals=false)`
- `setBarcode($bc='')`
- `getBarcode()`
- `write1DBarcode($code, $type, $x=null, $y=null, $w=null, $h=null, $xres=null, $style=array()`
- `write2DBarcode($code, $type, $x=null, $y=null, $w=null, $h=null, $style=array()`
- `getMargins()`
- `getOriginalMargins()`
- `getFontSize()`
- `getFontSizePt()`
- `getFontFamily()`
- `getFontStyle()`
- `fixHTMLCode($html, $default_css='', $tagvs=null, $tidy_options=null)`
- `getCSSBorderWidth($width)`
- `getCSSBorderDashStyle($style)`
- `getCSSBorderStyle($cssborder)`
- `getCSSPadding($csspadding, $width=0)`
- `getCSSMargin($cssmargin, $width=0)`
- `getCSSBorderMargin($cssbspace, $width=0)`
- `getCSSFontSpacing($spacing, $parent=0)`
- `getCSSFontStretching($stretch, $parent=100)`
- `getHTMLFontUnits($val, $refsize=12, $parent_size=12, $defaultunit='pt')`
- `getHtmlDomArray($html)`
- `getSpaceString()`
- `getHashForTCPDFtagParams($data)`
- `serializeTCPDFtagParameters($data)`
- `unserializeTCPDFtagParameters($data)`
- `writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=false, $reseth=true, $align='', $autopadding=true)`
- `writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')`
- `openHTMLTagHandler($dom, $key, $cell)`
- `closeHTMLTagHandler($dom, $key, $cell, $maxbottomliney=0)`
- `addHTMLVertSpace($hbz=0, $hb=0, $cell=false, $firsttag=false, $lasttag=false)`
- `getBorderStartPosition()`
- `drawHTMLTagBorder($tag, $xmax)`
- `setLIsymbol($symbol='!')`
- `setBooklet($booklet=true, $inner=-1, $outer=-1)`
- `swapMargins($reverse=true)`
- `setHtmlVSpace($tagvs)`
- `setListIndentWidth($width)`
- `setOpenCell($isopen)`
- `setHtmlLinksStyle($color=array(0,0,255)`
- `getHTMLUnitToUnits($htmlval, $refsize=1, $defaultunit='px', $points=false)`
- `putHtmlListBullet($listdepth, $listtype='', $size=10)`
- `getGraphicVars()`
- `setGraphicVars($gvars, $extended=false)`
- `_outSaveGraphicsState()`
- `_outRestoreGraphicsState()`
- `setBuffer($data)`
- `replaceBuffer($data)`
- `getBuffer()`
- `setPageBuffer($page, $data, $append=false)`
- `getPageBuffer($page)`
- `setImageBuffer($image, $data)`
- `setImageSubBuffer($image, $key, $data)`
- `getImageBuffer($image)`
- `setFontBuffer($font, $data)`
- `setFontSubBuffer($font, $key, $data)`
- `getFontBuffer($font)`
- `movePage($frompage, $topage)`
- `deletePage($page)`
- `copyPage($page=0)`
- `addTOC($page=null, $numbersfont='', $filler='.', $toc_name='TOC', $style='', $color=array(0,0,0)`
- `addHTMLTOC($page=null, $toc_name='TOC', $templates=array()`
- `startTransaction()`
- `commitTransaction()`
- `rollbackTransaction($self=false)`
- `setEqualColumns($numcols=0, $width=0, $y=null)`
- `resetColumns()`
- `setColumnsArray($columns)`
- `selectColumn($col=null)`
- `getColumn()`
- `getNumberOfColumns()`
- `setTextRenderingMode($stroke=0, $fill=true, $clip=false)`
- `setTextShadow($params=array('enabled'=>false, 'depth_w'=>0, 'depth_h'=>0, 'color'=>false, 'opacity'=>1, 'blend_mode'=>'Normal')`
- `getTextShadow()`
- `hyphenateWord($word, $patterns, $dictionary=array()`
- `hyphenateText($text, $patterns, $dictionary=array()`
- `setRasterizeVectorImages($mode)`
- `setFontSubsetting($enable=true)`
- `getFontSubsetting()`
- `stringLeftTrim($str, $replace='')`
- `stringRightTrim($str, $replace='')`
- `stringTrim($str, $replace='')`
- `isUnicodeFont()`
- `getFontFamilyName($fontfamily)`
- `startTemplate($w=0, $h=0, $group=false)`
- `endTemplate()`
- `printTemplate($id, $x=null, $y=null, $w=0, $h=0, $align='', $palign='', $fitonpage=false)`
- `setFontStretching($perc=100)`
- `getFontStretching()`
- `setFontSpacing($spacing=0)`
- `getFontSpacing()`
- `getPageRegions()`
- `setPageRegions($regions=array()`
- `addPageRegion($region)`
- `removePageRegion($key)`
- `checkPageRegions($h, $x, $y)`
- `ImageSVG($file, $x=null, $y=null, $w=0, $h=0, $link='', $align='', $palign='', $border=0, $fitonpage=false)`
- `convertSVGtMatrix($tm)`
- `SVGTransform($tm)`
- `setSVGStyles($svgstyle, $prevsvgstyle, $x=0, $y=0, $w=1, $h=1, $clip_function='', $clip_params=array()`
- `SVGPath($d, $style='')`
- `removeTagNamespace($name)`
- `startSVGElementHandler($parser, $name, $attribs, $ctm=array()`
- `endSVGElementHandler($parser, $name)`
- `segSVGContentHandler($parser, $data)`
- `getCachedFileContents($file)`
- `fileExists($file)`

