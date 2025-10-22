# system\Pager\PagerRenderer.php

- Path: `system\Pager\PagerRenderer.php`
- Type: PHP
- Size: 9543 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class PagerRenderer
This class is passed to the view that describes the pagination,
and is used to get the link information and provide utility
methods needed to work with pagination.

First page number.
@var int

Last page number.
@var int

Current page number.
@var int

Total number of items.
@var int

Total number of pages.
@var int

URI base for pagination links
@var URI

Segment number used for pagination.
@var int

Name of $_GET parameter
@var string

Constructor.

Sets the total number of links that should appear on either
side of the current page. Adjusts the first and last counts
to reflect it.
@return PagerRenderer

Checks to see if there is a "previous" page before our "first" page.

Returns a URL to the "previous" page. The previous page is NOT the
page before the current page, but is the page just before the
"first" page.
You MUST call hasPrevious() first, or this value may be invalid.
@return string|null

Checks to see if there is a "next" page after our "last" page.

Returns a URL to the "next" page. The next page is NOT, the
page after the current page, but is the page that follows the
"last" page.
You MUST call hasNext() first, or this value may be invalid.
@return string|null

Returns the URI of the first page.

Returns the URI of the last page.

Returns the URI of the current page.

Returns an array of links that should be displayed. Each link
is represented by another array containing of the URI the link
should go to, the title (number) of the link, and a boolean
value representing whether this link is active or not.

Updates the first and last pages based on $surroundCount,
which is the number of links surrounding the active page
to show.
@param int|null $count The new "surroundCount"

Checks to see if there is a "previous" page before our "first" page.

Returns a URL to the "previous" page.
You MUST call hasPreviousPage() first, or this value may be invalid.
@return string|null

Checks to see if there is a "next" page after our "last" page.

Returns a URL to the "next" page.
You MUST call hasNextPage() first, or this value may be invalid.
@return string|null

Returns the page number of the first page.

Returns the page number of the current page.

Returns the page number of the last page.

Returns total number of pages.

Returns the previous page number.

Returns the next page number.

## Symbols

# Symbols

**Files documented**: 1

## `system\Pager\PagerRenderer.php`

**Classes**:
- `CodeIgniter\Pager\is`
- `CodeIgniter\Pager\PagerRenderer`

**Functions/Methods**:
- `__construct(array $details)`
- `setSurroundCount(?int $count = null)`
- `hasPrevious()`
- `getPrevious()`
- `hasNext()`
- `getNext()`
- `getFirst()`
- `getLast()`
- `getCurrent()`
- `links()`
- `updatePages(?int $count = null)`
- `hasPreviousPage()`
- `getPreviousPage()`
- `hasNextPage()`
- `getNextPage()`
- `getFirstPageNumber()`
- `getCurrentPageNumber()`
- `getLastPageNumber()`
- `getPageCount()`
- `getPreviousPageNumber()`
- `getNextPageNumber()`

