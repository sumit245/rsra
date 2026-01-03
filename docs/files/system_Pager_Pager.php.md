# system\Pager\Pager.php

- Path: `system\Pager\Pager.php`
- Type: PHP
- Size: 11984 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Pager
The Pager class provides semi-automatic and manual methods for creating
pagination links and reading the current url's query variable, "page"
to determine the current page. This class can support multiple
paginations on a single page.

The group data.
@var array

URI segment for groups if provided.
@var array

Our configuration instance.
@var PagerConfig

The view engine to render the links with.
@var RendererInterface

List of only permitted queries
@var array

Constructor.

Handles creating and displaying the
@param string $template The output template alias to render.

Creates simple Next/Previous links, instead of full pagination.

Allows for a simple, manual, form of pagination where all of the data
is provided by the user. The URL is the current URI.
@param string      $template The output template alias to render.
@param int         $segment  (whether page number is provided by URI segment)
@param string|null $group    optional group (i.e. if we'd like to define custom path)

Does the actual work of displaying the view file. Used internally
by links(), simpleLinks(), and makeLinks().

Stores a set of pagination data for later display. Most commonly used
by the model to automate the process.
@return $this

Sets segment for a group.
@return mixed

Sets the path that an aliased group of links will use.
@return mixed

Returns the total number of items in data store.

Returns the total number of pages.

Returns the number of the current page of results.

Tells whether this group of results has any more pages of results.

Returns the last page, if we have a total that we can calculate with.
@return int|null

Determines the first page # that should be shown.

Returns the URI for a specific page for the specified group.
@return string|URI

@var URI $uri

Returns the full URI to the next page of results, or null.
@return string|null

Returns the full URL to the previous page of results, or null.
@return string|null

Returns the number of results per page that should be shown.

Returns an array with details about the results, including
total, per_page, current_page, last_page, next_url, prev_url, from, to.
Does not include the actual data. This data is suitable for adding
a 'data' object to with the result set and converting to JSON.

Sets only allowed queries on pagination links.

Ensures that an array exists for the group specified.
@param int $perPage

Calculating the current page

## Symbols

# Symbols

**Files documented**: 1

## `system\Pager\Pager.php`

**Classes**:
- `CodeIgniter\Pager\provides`
- `CodeIgniter\Pager\can`
- `CodeIgniter\Pager\Pager implements PagerInterface`

**Functions/Methods**:
- `__construct(PagerConfig $config, RendererInterface $view)`
- `links(string $group = 'default', string $template = 'default_full')`
- `simpleLinks(string $group = 'default', string $template = 'default_simple')`
- `makeLinks(int $page, ?int $perPage, int $total, string $template = 'default_full', int $segment = 0, ?string $group = 'default')`
- `displayLinks(string $group, string $template)`
- `store(string $group, int $page, ?int $perPage, int $total, int $segment = 0)`
- `setSegment(int $number, string $group = 'default')`
- `setPath(string $path, string $group = 'default')`
- `getTotal(string $group = 'default')`
- `getPageCount(string $group = 'default')`
- `getCurrentPage(string $group = 'default')`
- `hasMore(string $group = 'default')`
- `getLastPage(string $group = 'default')`
- `getFirstPage(string $group = 'default')`
- `getPageURI(?int $page = null, string $group = 'default', bool $returnObject = false)`
- `getNextPageURI(string $group = 'default', bool $returnObject = false)`
- `getPreviousPageURI(string $group = 'default', bool $returnObject = false)`
- `getPerPage(string $group = 'default')`
- `getDetails(string $group = 'default')`
- `only(array $queries)`
- `ensureGroup(string $group, ?int $perPage = null)`
- `calculateCurrentPage(string $group)`

