# app\ThirdParty\Pusher\vendor\pusher\pusher-php-server\src\Pusher.php

- Path: `app\ThirdParty\Pusher\vendor\pusher\pusher-php-server\src\Pusher.php`
- Type: PHP
- Size: 30263 bytes

## Summary (from docblocks)

@var string Version

@var null|PusherCrypto

@var array Settings

@var null|resource

Initializes a new Pusher instance with key, secret, app ID and channel.
You can optionally turn on debugging for all requests by setting debug to true.
@param string $auth_key
@param string $secret
@param int    $app_id
@param array  $options  [optional]
                        Options to configure the Pusher instance.
                        Was previously a debug flag. Legacy support for this exists if a boolean is passed.
                        scheme - e.g. http or https
                        host - the host e.g. api.pusherapp.com. No trailing forward slash.
                        port - the http port
                        timeout - the http timeout
                        useTLS - quick option to use scheme of https and port 443.
                        encrypted - deprecated; renamed to `useTLS`.
                        cluster - cluster name to connect to.
                        encryption_master_key - deprecated; use `encryption_master_key_base64`
                        encryption_master_key_base64 - a 32 byte key, encoded as base64. This key, along with the channel name, are used to derive per-channel encryption keys. Per-channel keys are used to encrypt event data on encrypted channels.
                        debug - (default `false`) if `true`, every `trigger()` and `triggerBatch()` call will return a `$response` object, useful for logging/inspection purposes.
                        curl_options - wrapper for curl_setopt, more here: http://php.net/manual/en/function.curl-setopt.php
                        notification_host - host to connect to for native notifications.
                        notification_scheme - scheme for the notification_host.
@param string $host     [optional] - deprecated
@param int    $port     [optional] - deprecated
@param int    $timeout  [optional] - deprecated
@throws PusherException Throws exception if any required dependencies are missing

Fetch the settings.
@return array

Set a logger to be informed of internal log messages.
@deprecated Use the PSR-3 compliant Pusher::setLogger() instead. This method will be removed in the next breaking release.
@param object $logger A object with a public function log($message) method
@return void

Log a string.
@param string           $msg     The message to log
@param array|\Exception $context [optional] Any extraneous information that does not fit well in a string.
@param string           $level   [optional] Importance of log message, highly recommended to use Psr\Log\LogLevel::{level}
@return void

Check if the current PHP setup is sufficient to run this class.
@throws PusherException If any required dependencies are missing
@return void

Validate number of channels and channel name format.
@param string[] $channels An array of channel names to validate
@throws PusherException If $channels is too big or any channel is invalid
@return void

Ensure a channel name is valid based on our spec.
@param string $channel The channel name to validate
@throws PusherException If $channel is invalid
@return void

Ensure a socket_id is valid based on our spec.
@param string $socket_id The socket ID to validate
@throws PusherException If $socket_id is invalid

Utility function used to create the curl object with common settings.
@param string            $url_prefix
@param string            $path
@param string [optional] $request_method
@param array [optional]  $query_params
@throws PusherException Throws exception if curl wasn't initialized correctly
@return resource

Utility function to execute curl and create capture response information.
@param $ch resource
@return array

Build the notification url prefix.
@return string

Build the Channels url prefix.
@return string

Build the required HMAC'd auth string.
@param string $auth_key
@param string $auth_secret
@param string $request_method
@param string $request_path
@param array  $query_params   [optional]
@param string $auth_version   [optional]
@param string $auth_timestamp [optional]
@return string

Implode an array with the key and value pair giving
a glue, a separator between pairs and the array
to implode.
@param string       $glue      The glue between key and value
@param string       $separator Separator between pairs
@param array|string $array     The array to implode
@return string The imploded array

Trigger an event by providing event name and payload.
Optionally provide a socket ID to exclude a client (most likely the sender).
@param array|string $channels        A channel name or an array of channel names to publish the event on.
@param string       $event
@param mixed        $data            Event data
@param string|null  $socket_id       [optional]
@param bool         $debug           [optional]
@param bool         $already_encoded [optional]
@throws PusherException Throws exception if $channels is an array of size 101 or above or $socket_id is invalid
@return bool|array

Trigger multiple events at the same time.
@param array $batch           [optional] An array of events to send
@param bool  $debug           [optional]
@param bool  $already_encoded [optional]
@throws PusherException Throws exception if curl wasn't initialized correctly
@return array|bool|string

Fetch channel information for a specific channel.
@param string $channel The name of the channel
@param array  $params  Additional parameters for the query e.g. $params = array( 'info' => 'connection_count' )
@throws PusherException If $channel is invalid or if curl wasn't initialized correctly
@return bool|object

Fetch a list containing all channels.
@param array $params Additional parameters for the query e.g. $params = array( 'info' => 'connection_count' )
@throws PusherException Throws exception if curl wasn't initialized correctly
@return array|bool

Fetch user ids currently subscribed to a presence channel.
@param string $channel The name of the channel
@throws PusherException Throws exception if curl wasn't initialized correctly
@return array|bool

GET arbitrary REST API resource using a synchronous http client.
All request signing is handled automatically.
@param string $path   Path excluding /apps/APP_ID
@param array  $params API params (see http://pusher.com/docs/rest_api)
@throws PusherException Throws exception if curl wasn't initialized correctly
@return array|bool See Pusher API docs

Creates a socket signature.
@param string $channel
@param string $socket_id
@param string $custom_data
@throws PusherException Throws exception if $channel is invalid or above or $socket_id is invalid
@return string Json encoded authentication string.

Creates a presence signature (an extension of socket signing).
@param string $channel
@param string $socket_id
@param string $user_id
@param mixed  $user_info
@throws PusherException Throws exception if $channel is invalid or above or $socket_id is invalid
@return string

Send a native notification via the Push Notifications Api.
@param array $interests
@param array $data
@param bool  $debug
@throws PusherException If validation fails
@return array|bool|string

Verify that a webhook actually came from Pusher, decrypts any encrypted events, and marshals them into a PHP object.
@param array  $headers a array of headers from the request (for example, from getallheaders())
@param string $body    the body of the request (for example, from file_get_contents('php://input'))
@return array marshalled object with the properties time_ms (an int) and events (an array of event objects)

Verify that a given Pusher Signature is valid.
@param array  $headers an array of headers from the request (for example, from getallheaders())
@param string $body    the body of the request (for example, from file_get_contents('php://input'))
@throws PusherException if signature is inccorrect.

## References

**Database Tables (inferred)**
- `server`
- `Pusher`
- `the`
- `getallheaders`
- `file_get_contents`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\pusher\pusher-php-server\src\Pusher.php`

**Classes**:
- `Pusher\Pusher implements LoggerAwareInterface`

**Functions/Methods**:
- `__construct($auth_key, $secret, $app_id, $options = array()`
- `getSettings()`
- `log($message)`
- `set_logger($logger)`
- `log($msg, array $context = array()`
- `check_compatibility()`
- `validate_channels($channels)`
- `validate_channel($channel)`
- `validate_socket_id($socket_id)`
- `create_curl($url_prefix, $path, $request_method = 'GET', $query_params = array()`
- `exec_curl($ch)`
- `notification_url_prefix()`
- `channels_url_prefix()`
- `build_auth_query_string($auth_key,
        $auth_secret,
        $request_method,
        $request_path,
        $query_params = array()`
- `array_implode($glue, $separator, $array)`
- `trigger($channels, $event, $data, $socket_id = null, $debug = false, $already_encoded = false)`
- `triggerBatch($batch = array()`
- `get_channel_info($channel, $params = array()`
- `get_channels($params = array()`
- `get_users_info($channel)`
- `get($path, $params = array()`
- `socket_auth($channel, $socket_id, $custom_data = null)`
- `presence_auth($channel, $socket_id, $user_id, $user_info = null)`
- `notify($interests, $data = array()`
- `webhook($headers, $body)`
- `ensure_valid_signature($headers, $body)`

