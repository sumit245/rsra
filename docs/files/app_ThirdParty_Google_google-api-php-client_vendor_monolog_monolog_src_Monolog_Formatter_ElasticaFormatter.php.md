# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\ElasticaFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\ElasticaFormatter.php`
- Type: PHP
- Size: 1837 bytes

## Summary (from docblocks)

Format a log message into an Elastica Document
@author Jelle Vink <jelle.vink@gmail.com>

@var string Elastic search index name

@var string Elastic search document type

@param string $index Elastic Search index name
@param string $type  Elastic Search document type

{@inheritdoc}

Getter index
@return string

Getter type
@return string

Convert a log message into an Elastica Document
@param  array    $record Log message
@return Document

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\ElasticaFormatter.php`

**Classes**:
- `Monolog\Formatter\ElasticaFormatter extends NormalizerFormatter`

**Functions/Methods**:
- `__construct($index, $type)`
- `format(array $record)`
- `getIndex()`
- `getType()`
- `getDocument($record)`

