# system\Email\Email.php

- Path: `system\Email\Email.php`
- Type: PHP
- Size: 57746 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

CodeIgniter Email Class
Permits email to be sent using Mail, Sendmail, or SMTP.

Properties from the last successful send.
@var array|null

Properties to be added to the next archive.
@var array

@var string

@var string

Used as the User-Agent and X-Mailer headers' value.
@var string

Path to the Sendmail binary.
@var string

Which method to use for sending e-mails.
@var string 'mail', 'sendmail' or 'smtp'

STMP Server host
@var string

SMTP Username
@var string

SMTP Password
@var string

SMTP Server port
@var int

SMTP connection timeout in seconds
@var int

SMTP persistent connection
@var bool

SMTP Encryption
@var string Empty, 'tls' or 'ssl'

Whether to apply word-wrapping to the message body.
@var bool

Number of characters to wrap at.
@see Email::$wordWrap
@var int

Message format.
@var string 'text' or 'html'

Character set (default: utf-8)
@var string

Alternative message (for HTML messages only)
@var string

Whether to validate e-mail addresses.
@var bool

X-Priority header value.
@var int 1-5

Newline character sequence.
Use "\r\n" to comply with RFC 822.
@see http://www.ietf.org/rfc/rfc822.txt
@var string "\r\n" or "\n"

CRLF character sequence
RFC 2045 specifies that for 'quoted-printable' encoding,
"\r\n" must be used. However, it appears that some servers
(even on the receiving end) don't handle it properly and
switching to "\n", while improper, is the only solution
that seems to work for all environments.
@see http://www.ietf.org/rfc/rfc822.txt
@var string

Whether to use Delivery Status Notification.
@var bool

Whether to send multipart alternatives.
Yahoo! doesn't seem to like these.
@var bool

Whether to send messages to BCC recipients in batches.
@var bool

BCC Batch max number size.
@see Email::$BCCBatchMode
@var int|string

Subject header
@var string

Message body
@var string

Final message body to be sent.
@var string

Final headers to send
@var string

SMTP Connection socket placeholder
@var resource|null

Mail encoding
@var string '8bit' or '7bit'

Whether to perform SMTP authentication
@var bool

Whether to send a Reply-To header
@var bool

Debug messages
@see Email::printDebugger()
@var array

Recipients
@var array|string

CC Recipients
@var array

BCC Recipients
@var array

Message headers
@var array

Attachment data
@var array

Valid $protocol values
@see Email::$protocol
@var array

Character sets valid for 7-bit encoding,
excluding language suffix.
@var array

Bit depths
Valid mail encodings
@see Email::$encoding
@var array

$priority translations
Actual values to send with the X-Priority header
@var array

mbstring.func_overload flag
@var bool

@param array|null $config

Initialize preferences
@param array|\Config\Email $config
@return Email

@param bool $clearAttachments
@return Email

@param string      $from
@param string      $name
@param string|null $returnPath Return-Path
@return Email

@param string $replyto
@param string $name
@return Email

@param array|string $to
@return Email

@param string $cc
@return Email

@param string $bcc
@param string $limit
@return Email

@param string $subject
@return Email

@param string $body
@return Email

@param string      $file        Can be local path, URL or buffered content
@param string      $disposition 'attachment'
@param string|null $newname
@param string      $mime
@return bool|Email

Set and return attachment Content-ID
Useful for attached inline pictures
@param string $filename
@return bool|string

@param string $header
@param string $value
@return Email

@param string $email
@return array

@param string $str
@return Email

@param string $type
@return Email

@param bool $wordWrap
@return Email

@param string $protocol
@return Email

@param int $n
@return Email

@param string $newline
@return Email

@param string $CRLF
@return Email

@return string

@return string

@return string

@return string

Set RFC 822 Date
@return string

@return string

@param array|string $email
@return bool

@param string $email
@return bool

@param array|string $email
@return array|string

Build alternative plain text message
Provides the raw message for use in plain-text headers of
HTML-formatted emails.
If the user hasn't specified his own alternative message
it creates one by stripping the HTML
@return string

@param string   $str
@param int|null $charlim Line-length limit
@return string

Build final headers

Write Headers as a string

Build Final Body and attachments

@param mixed $type
@return bool

@param string      $body      Message body to append to
@param string      $boundary  Multipart boundary
@param string|null $multipart When provided, only attachments of this type will be processed

Prepares string for Quoted-Printable Content-Transfer-Encoding
Refer to RFC 2045 http://www.ietf.org/rfc/rfc2045.txt
@param string $str
@return string

Performs "Q Encoding" on a string for use in email headers.
It's related but not identical to quoted-printable, so it has its
own method.
@param string $str
@return string

@param bool $autoClear
@return bool

Batch Bcc Send. Sends groups of BCCs in batches

Unwrap special elements

Strip line-breaks via callback
@param string $matches
@return string

Spool mail to the mail server
@return bool

Validate email for shell
Applies stricter, shell-safe validation to email addresses.
Introduced to prevent RCE via sendmail's -f option.
@see     https://github.com/codeigniter4/CodeIgniter/issues/4963
@see     https://gist.github.com/Zenexer/40d02da5e07f151adeaeeaa11af9ab36
@license https://creativecommons.org/publicdomain/zero/1.0/    CC0 1.0, Public Domain
Credits for the base concept go to Paul Buonopane <paul@namepros.com>
@param string $email
@return bool

Send using mail()
@return bool

Send using Sendmail
@return bool

Send using SMTP
@return bool

Shortcut to send RSET or QUIT depending on keep-alive

@return bool|string

@param string $cmd
@param string $data
@return bool

@return bool

@param string $data
@return bool

@return string

There are only two legal types of hostname - either a fully
qualified domain name (eg: "mail.example.com") or an IP literal
(eg: "[1.2.3.4]").
@see https://tools.ietf.org/html/rfc5321#section-2.3.5
@see http://cbl.abuseat.org/namingproblems.html
@return string

@param array $include List of raw data chunks to include in the output
                      Valid options are: 'headers', 'subject', 'body'
@return string

@param string $msg

Mime Types
@param string $ext
@return string

Byte-safe strlen()
@param string $str
@return int

Byte-safe substr()
@param string   $str
@param int      $start
@param int|null $length
@return string

Determines the values that should be stored in $archive.
@return array The updated archive values

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Email\Email.php`

**Classes**:
- `CodeIgniter\Email\Email`
- `CodeIgniter\Email\property`

**Functions/Methods**:
- `__construct($config = null)`
- `initialize($config)`
- `clear($clearAttachments = false)`
- `setFrom($from, $name = '', $returnPath = null)`
- `setReplyTo($replyto, $name = '')`
- `setTo($to)`
- `setCC($cc)`
- `setBCC($bcc, $limit = '')`
- `setSubject($subject)`
- `setMessage($body)`
- `attach($file, $disposition = '', $newname = null, $mime = '')`
- `setAttachmentCID($filename)`
- `setHeader($header, $value)`
- `stringToArray($email)`
- `setAltMessage($str)`
- `setMailType($type = 'text')`
- `setWordWrap($wordWrap = true)`
- `setProtocol($protocol = 'mail')`
- `setPriority($n = 3)`
- `setNewline($newline = "\n")`
- `setCRLF($CRLF = "\n")`
- `getMessageID()`
- `getProtocol()`
- `getEncoding()`
- `getContentType()`
- `setDate()`
- `getMimeMessage()`
- `validateEmail($email)`
- `isValidEmail($email)`
- `cleanEmail($email)`
- `getAltMessage()`
- `wordWrap($str, $charlim = null)`
- `buildHeaders()`
- `writeHeaders()`
- `buildMessage()`
- `attachmentsHaveMultipart($type)`
- `appendAttachments(&$body, $boundary, $multipart = null)`
- `prepQuotedPrintable($str)`
- `prepQEncoding($str)`
- `send($autoClear = true)`
- `batchBCCSend()`
- `unwrapSpecials()`
- `removeNLCallback($matches)`
- `spoolEmail()`
- `validateEmailForShell(&$email)`
- `sendWithMail()`
- `sendWithSendmail()`
- `sendWithSmtp()`
- `SMTPEnd()`
- `SMTPConnect()`
- `sendCommand($cmd, $data = '')`
- `SMTPAuthenticate()`
- `sendData($data)`
- `getSMTPData()`
- `getHostname()`
- `printDebugger($include = ['headers', 'subject', 'body'])`
- `setErrorMessage($msg)`
- `mimeTypes($ext = '')`
- `__destruct()`
- `strlen($str)`
- `substr($str, $start, $length = null)`
- `setArchiveValues()`

