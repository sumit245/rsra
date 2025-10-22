# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Settings.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Settings.php`
- Type: PHP
- Size: 5764 bytes

## Summary (from docblocks)

Class name of the chart renderer used for rendering charts
eg: PhpOffice\PhpSpreadsheet\Chart\Renderer\JpGraph.
@var string

Default options for libxml loader.
@var int

The cache implementation to be used for cell collection.
@var CacheInterface

The HTTP client implementation to be used for network request.
@var null|ClientInterface

@var null|RequestFactoryInterface

Set the locale code to use for formula translations and any special formatting.
@param string $locale The locale code to use (e.g. "fr" or "pt_br" or "en_uk")
@return bool Success or failure

Identify to PhpSpreadsheet the external library to use for rendering charts.
@param string $rendererClassName Class name of the chart renderer
   eg: PhpOffice\PhpSpreadsheet\Chart\Renderer\JpGraph

Return the Chart Rendering Library that PhpSpreadsheet is currently configured to use.
@return null|string Class name of the chart renderer
   eg: PhpOffice\PhpSpreadsheet\Chart\Renderer\JpGraph

Set default options for libxml loader.
@param int $options Default options for libxml loader

Get default options for libxml loader.
Defaults to LIBXML_DTDLOAD | LIBXML_DTDATTR when not set explicitly.
@return int Default options for libxml loader

Deprecated, has no effect.
@param bool $state
@deprecated will be removed without replacement as it is no longer necessary on PHP 7.3.0+

Deprecated, has no effect.
@return bool $state
@deprecated will be removed without replacement as it is no longer necessary on PHP 7.3.0+

Sets the implementation of cache that should be used for cell collection.

Gets the implementation of cache that is being used for cell collection.

Set the HTTP client implementation to be used for network request.

Unset the HTTP client configuration.

Get the HTTP client implementation to be used for network request.

Get the HTTP request factory.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Settings.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Settings`

**Functions/Methods**:
- `setLocale(string $locale)`
- `getLocale()`
- `setChartRenderer(string $rendererClassName)`
- `getChartRenderer()`
- `htmlEntityFlags()`
- `setLibXmlLoaderOptions($options)`
- `getLibXmlLoaderOptions()`
- `setLibXmlDisableEntityLoader($state)`
- `getLibXmlDisableEntityLoader()`
- `setCache(CacheInterface $cache)`
- `getCache()`
- `setHttpClient(ClientInterface $httpClient, RequestFactoryInterface $requestFactory)`
- `unsetHttpClient()`
- `getHttpClient()`
- `getRequestFactory()`
- `assertHttpClient()`

