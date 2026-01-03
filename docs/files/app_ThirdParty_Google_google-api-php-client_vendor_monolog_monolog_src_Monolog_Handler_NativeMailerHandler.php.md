# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\NativeMailerHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\NativeMailerHandler.php`
- Type: PHP
- Size: 5206 bytes

## Summary (from docblocks)

NativeMailerHandler uses the mail() function to send the emails
@author Christophe Coevoet <stof@notk.org>
@author Mark Garrett <mark@moderndeveloperllc.com>

The email addresses to which the message will be sent
@var array

The subject of the email
@var string

Optional headers for the message
@var array

Optional parameters for the message
@var array

The wordwrap length for the message
@var int

The Content-type for the message
@var string

The encoding for the message
@var string

@param string|array $to             The receiver of the mail
@param string       $subject        The subject of the mail
@param string       $from           The sender of the mail
@param int          $level          The minimum logging level at which this handler will be triggered
@param bool         $bubble         Whether the messages that are handled can bubble up the stack or not
@param int          $maxColumnWidth The maximum column width that the message lines will have

Add headers to the message
@param  string|array $headers Custom added headers
@return self

Add parameters to the message
@param  string|array $parameters Custom added parameters
@return self

{@inheritdoc}

@return string $contentType

@return string $encoding

@param  string $contentType The content type of the email - Defaults to text/plain. Use text/html for HTML
                            messages.
@return self

@param  string $encoding
@return self

## References

**Database Tables (inferred)**
- `The`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\NativeMailerHandler.php`

**Classes**:
- `Monolog\Handler\NativeMailerHandler extends MailHandler`

**Functions/Methods**:
- `__construct($to, $subject, $from, $level = Logger::ERROR, $bubble = true, $maxColumnWidth = 70)`
- `addHeader($headers)`
- `addParameter($parameters)`
- `send($content, array $records)`
- `getContentType()`
- `getEncoding()`
- `setContentType($contentType)`
- `setEncoding($encoding)`

