# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\HeaderFooter.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\HeaderFooter.php`
- Type: PHP
- Size: 11435 bytes

## Summary (from docblocks)

<code>
Header/Footer Formatting Syntax taken from Office Open XML Part 4 - Markup Language Reference, page 1970:.
There are a number of formatting codes that can be written inline with the actual header / footer text, which
affect the formatting in the header or footer.
Example: This example shows the text "Center Bold Header" on the first line (center section), and the date on
the second line (center section).
        &CCenter &"-,Bold"Bold&"-,Regular"Header_x000A_&D
General Rules:
There is no required order in which these codes must appear.
The first occurrence of the following codes turns the formatting ON, the second occurrence turns it OFF again:
- strikethrough
- superscript
- subscript
Superscript and subscript cannot both be ON at same time. Whichever comes first wins and the other is ignored,
while the first is ON.
&L - code for "left section" (there are three header / footer locations, "left", "center", and "right"). When
two or more occurrences of this section marker exist, the contents from all markers are concatenated, in the
order of appearance, and placed into the left section.
&P - code for "current page #"
&N - code for "total pages"
&font size - code for "text font size", where font size is a font size in points.
&K - code for "text font color"
RGB Color is specified as RRGGBB
Theme Color is specifed as TTSNN where TT is the theme color Id, S is either "+" or "-" of the tint/shade
value, NN is the tint/shade value.
&S - code for "text strikethrough" on / off
&X - code for "text super script" on / off
&Y - code for "text subscript" on / off
&C - code for "center section". When two or more occurrences of this section marker exist, the contents
from all markers are concatenated, in the order of appearance, and placed into the center section.
&D - code for "date"
&T - code for "time"
&G - code for "picture as background"
&U - code for "text single underline"
&E - code for "double underline"
&R - code for "right section". When two or more occurrences of this section marker exist, the contents
from all markers are concatenated, in the order of appearance, and placed into the right section.
&Z - code for "this workbook's file path"
&F - code for "this workbook's file name"
&A - code for "sheet tab name"
&+ - code for add to page #.
&- - code for subtract from page #.
&"font name,font type" - code for "text font name" and "text font type", where font name and font type
are strings specifying the name and type of the font, separated by a comma. When a hyphen appears in font
name, it means "none specified". Both of font name and font type can be localized values.
&"-,Bold" - code for "bold font style"
&B - also means "bold font style".
&"-,Regular" - code for "regular font style"
&"-,Italic" - code for "italic font style"
&I - also means "italic font style"
&"-,Bold Italic" code for "bold italic font style"
&O - code for "outline style"
&H - code for "shadow style"
</code>

OddHeader.
@var string

OddFooter.
@var string

EvenHeader.
@var string

EvenFooter.
@var string

FirstHeader.
@var string

FirstFooter.
@var string

Different header for Odd/Even, defaults to false.
@var bool

Different header for first page, defaults to false.
@var bool

Scale with document, defaults to true.
@var bool

Align with margins, defaults to true.
@var bool

Header/footer images.
@var HeaderFooterDrawing[]

Create a new HeaderFooter.

Get OddHeader.
@return string

Set OddHeader.
@param string $oddHeader
@return $this

Get OddFooter.
@return string

Set OddFooter.
@param string $oddFooter
@return $this

Get EvenHeader.
@return string

Set EvenHeader.
@param string $eventHeader
@return $this

Get EvenFooter.
@return string

Set EvenFooter.
@param string $evenFooter
@return $this

Get FirstHeader.
@return string

Set FirstHeader.
@param string $firstHeader
@return $this

Get FirstFooter.
@return string

Set FirstFooter.
@param string $firstFooter
@return $this

Get DifferentOddEven.
@return bool

Set DifferentOddEven.
@param bool $differentOddEvent
@return $this

Get DifferentFirst.
@return bool

Set DifferentFirst.
@param bool $differentFirst
@return $this

Get ScaleWithDocument.
@return bool

Set ScaleWithDocument.
@param bool $scaleWithDocument
@return $this

Get AlignWithMargins.
@return bool

Set AlignWithMargins.
@param bool $alignWithMargins
@return $this

Add header/footer image.
@param string $location
@return $this

Remove header/footer image.
@param string $location
@return $this

Set header/footer images.
@param HeaderFooterDrawing[] $images
@return $this

Get header/footer images.
@return HeaderFooterDrawing[]

Implement PHP __clone to create a deep clone, not just a shallow copy.

## References

**Database Tables (inferred)**
- `Office`
- `all`
- `page`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\HeaderFooter.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\HeaderFooter`

**Functions/Methods**:
- `__construct()`
- `getOddHeader()`
- `setOddHeader($oddHeader)`
- `getOddFooter()`
- `setOddFooter($oddFooter)`
- `getEvenHeader()`
- `setEvenHeader($eventHeader)`
- `getEvenFooter()`
- `setEvenFooter($evenFooter)`
- `getFirstHeader()`
- `setFirstHeader($firstHeader)`
- `getFirstFooter()`
- `setFirstFooter($firstFooter)`
- `getDifferentOddEven()`
- `setDifferentOddEven($differentOddEvent)`
- `getDifferentFirst()`
- `setDifferentFirst($differentFirst)`
- `getScaleWithDocument()`
- `setScaleWithDocument($scaleWithDocument)`
- `getAlignWithMargins()`
- `setAlignWithMargins($alignWithMargins)`
- `addImage(HeaderFooterDrawing $image, $location = self::IMAGE_HEADER_LEFT)`
- `removeImage($location = self::IMAGE_HEADER_LEFT)`
- `setImages(array $images)`
- `getImages()`
- `__clone()`

