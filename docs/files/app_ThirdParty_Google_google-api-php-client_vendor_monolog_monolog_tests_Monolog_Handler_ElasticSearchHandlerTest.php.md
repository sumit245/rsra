# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\ElasticSearchHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\ElasticSearchHandlerTest.php`
- Type: PHP
- Size: 7688 bytes

## Summary (from docblocks)

@var Client mock

@var array Default handler options

@covers Monolog\Handler\ElasticSearchHandler::write
@covers Monolog\Handler\ElasticSearchHandler::handleBatch
@covers Monolog\Handler\ElasticSearchHandler::bulkSend
@covers Monolog\Handler\ElasticSearchHandler::getDefaultFormatter

@covers Monolog\Handler\ElasticSearchHandler::setFormatter

@covers                   Monolog\Handler\ElasticSearchHandler::setFormatter
@expectedException        InvalidArgumentException
@expectedExceptionMessage ElasticSearchHandler is only compatible with ElasticaFormatter

@covers Monolog\Handler\ElasticSearchHandler::__construct
@covers Monolog\Handler\ElasticSearchHandler::getOptions

@covers       Monolog\Handler\ElasticSearchHandler::bulkSend
@dataProvider providerTestConnectionErrors

@return array

Integration test using localhost Elastic Search server
@covers Monolog\Handler\ElasticSearchHandler::__construct
@covers Monolog\Handler\ElasticSearchHandler::handleBatch
@covers Monolog\Handler\ElasticSearchHandler::bulkSend
@covers Monolog\Handler\ElasticSearchHandler::getDefaultFormatter

Return last created document id from ES response
@param  Response    $response Elastica Response object
@return string|null

Retrieve document by id from Elasticsearch
@param  Client $client     Elastica client
@param  string $index
@param  string $type
@param  string $documentId
@return array

## References

**Database Tables (inferred)**
- `ES`
- `Elasticsearch`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\ElasticSearchHandlerTest.php`

**Classes**:
- `Monolog\Handler\ElasticSearchHandlerTest extends TestCase`

**Functions/Methods**:
- `setUp()`
- `testHandle()`
- `testSetFormatter()`
- `testSetFormatterInvalid()`
- `testOptions()`
- `testConnectionErrors($ignore, $expectedError)`
- `providerTestConnectionErrors()`
- `testHandleIntegration()`
- `getCreatedDocId(Response $response)`
- `getDocSourceFromElastic(Client $client, $index, $type, $documentId)`

