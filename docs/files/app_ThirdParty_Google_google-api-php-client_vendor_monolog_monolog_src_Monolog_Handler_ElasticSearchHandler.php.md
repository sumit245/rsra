# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ElasticSearchHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ElasticSearchHandler.php`
- Type: PHP
- Size: 3417 bytes

## Summary (from docblocks)

Elastic Search handler
Usage example:
   $client = new \Elastica\Client();
   $options = array(
       'index' => 'elastic_index_name',
       'type' => 'elastic_doc_type',
   );
   $handler = new ElasticSearchHandler($client, $options);
   $log = new Logger('application');
   $log->pushHandler($handler);
@author Jelle Vink <jelle.vink@gmail.com>

@var Client

@var array Handler config options

@param Client  $client  Elastica Client object
@param array   $options Handler configuration
@param int     $level   The minimum logging level at which this handler will be triggered
@param Boolean $bubble  Whether the messages that are handled can bubble up the stack or not

{@inheritDoc}

{@inheritdoc}

Getter options
@return array

{@inheritDoc}

{@inheritdoc}

Use Elasticsearch bulk API to send list of documents
@param  array             $documents
@throws \RuntimeException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ElasticSearchHandler.php`

**Classes**:
- `Monolog\Handler\ElasticSearchHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct(Client $client, array $options = array()`
- `write(array $record)`
- `setFormatter(FormatterInterface $formatter)`
- `getOptions()`
- `getDefaultFormatter()`
- `handleBatch(array $records)`
- `bulkSend(array $documents)`

