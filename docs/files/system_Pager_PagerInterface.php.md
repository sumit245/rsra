# system\Pager\PagerInterface.php

- Path: `system\Pager\PagerInterface.php`
- Type: PHP
- Size: 3403 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior for a Pager

Handles creating and displaying the
@param string $template The output template alias to render.

Creates simple Next/Previous links, instead of full pagination.

Allows for a simple, manual, form of pagination where all of the data
is provided by the user. The URL is the current URI.
@param string $template The output template alias to render.

Stores a set of pagination data for later display. Most commonly used
by the model to automate the process.
@return mixed

Sets the path that an aliased group of links will use.
@return mixed

Returns the total number of pages.

Returns the number of the current page of results.

Returns the URI for a specific page for the specified group.
@return string|URI

Tells whether this group of results has any more pages of results.

Returns the first page.
@return int

Returns the last page, if we have a total that we can calculate with.
@return int|null

Returns the full URI to the next page of results, or null.
@return string|null

Returns the full URL to the previous page of results, or null.
@return string|null

Returns the number of results per page that should be shown.

Returns an array with details about the results, including
total, per_page, current_page, last_page, next_url, prev_url, from, to.
Does not include the actual data. This data is suitable for adding
a 'data' object to with the result set and converting to JSON.

## Symbols

# Symbols

**Files documented**: 1

## `system\Pager\PagerInterface.php`

**Functions/Methods**:
- `links(string $group = 'default', string $template = 'default')`
- `simpleLinks(string $group = 'default', string $template = 'default')`
- `makeLinks(int $page, int $perPage, int $total, string $template = 'default')`
- `store(string $group, int $page, int $perPage, int $total)`
- `setPath(string $path, string $group = 'default')`
- `getPageCount(string $group = 'default')`
- `getCurrentPage(string $group = 'default')`
- `getPageURI(?int $page = null, string $group = 'default', bool $returnObject = false)`
- `hasMore(string $group = 'default')`
- `getFirstPage(string $group = 'default')`
- `getLastPage(string $group = 'default')`
- `getNextPageURI(string $group = 'default')`
- `getPreviousPageURI(string $group = 'default')`
- `getPerPage(string $group = 'default')`
- `getDetails(string $group = 'default')`

