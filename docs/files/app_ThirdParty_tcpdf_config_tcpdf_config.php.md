# app\ThirdParty\tcpdf\config\tcpdf_config.php

- Path: `app\ThirdParty\tcpdf\config\tcpdf_config.php`
- Type: PHP
- Size: 5381 bytes

## Summary (from docblocks)

Configuration file for TCPDF.
@author Nicola Asuni
@package com.tecnick.tcpdf
@version 4.9.005
@since 2004-10-27

Installation path (/var/www/tcpdf/).
By default it is automatically calculated but you can also set it as a fixed string to improve performances.

URL path to tcpdf installation folder (http://localhost/tcpdf/).
By default it is automatically set but you can also set it as a fixed string to improve performances.

Path for PDF fonts.
By default it is automatically set but you can also set it as a fixed string to improve performances.

Default images directory.
By default it is automatically set but you can also set it as a fixed string to improve performances.

Deafult image logo used be the default Header() method.
Please set here your own logo or an empty string to disable it.

Header logo image width in user units.

Cache directory for temporary files (full path).

Generic name for a blank image.

Page format.

Page orientation (P=portrait, L=landscape).

Document creator.

Document author.

Header title.

Header description string.

Document unit of measure [pt=point, mm=millimeter, cm=centimeter, in=inch].

Header margin.

Footer margin.

Top margin.

Bottom margin.

Left margin.

Right margin.

Default main font name.

Default main font size.

Default data font name.

Default data font size.

Default monospaced font name.

Ratio used to adjust the conversion of pixels to user units.

Magnification factor for titles.

Height of cell respect font height.

Title magnification respect main font size.

Reduction factor for small font.

Set to true to enable the special procedure used to avoid the overlappind of symbols on Thai language.

If true allows to call TCPDF methods using HTML syntax
IMPORTANT: For security reason, disable this feature if you are printing user HTML content.

If true and PHP version is greater than 5, then the Error() method throw new exception instead of terminating the execution.

Default timezone for datetime functions
