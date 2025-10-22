# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\System\SSH\Agent.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\System\SSH\Agent.php`
- Type: PHP
- Size: 8627 bytes

## Summary (from docblocks)

Pure-PHP ssh-agent client.
PHP version 5
Here are some examples of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $agent = new \phpseclib\System\SSH\Agent();
   $ssh = new \phpseclib\Net\SSH2('www.domain.tld');
   if (!$ssh->login('username', $agent)) {
       exit('Login Failed');
   }
   echo $ssh->exec('pwd');
   echo $ssh->exec('ls -la');
?>
</code>
@category  System
@package   SSH\Agent
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2014 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net
@internal  See http://api.libssh.org/rfc/PROTOCOL.agent

Pure-PHP ssh-agent client identity factory
requestIdentities() method pumps out \phpseclib\System\SSH\Agent\Identity objects
@package SSH\Agent
@author  Jim Wigginton <terrafrost@php.net>
@access  internal

#@+
Message numbers
@access private

#@-

@+
Agent forwarding status
@access private

#@-

Unused

Socket Resource
@var resource
@access private

Agent forwarding status
@access private

Buffer for accumulating forwarded authentication
agent data arriving on SSH data channel destined
for agent unix socket
@access private

Tracking the number of bytes we are expecting
to arrive for the agent socket on the SSH data
channel

Default Constructor
@return \phpseclib\System\SSH\Agent
@access public

Request Identities
See "2.5.2 Requesting a list of protocol 2 keys"
Returns an array containing zero or more \phpseclib\System\SSH\Agent\Identity objects
@return array
@access public

Signal that agent forwarding should
be requested when a channel is opened
@param Net_SSH2 $ssh
@return bool
@access public

Request agent forwarding of remote server
@param Net_SSH2 $ssh
@return bool
@access private

On successful channel open
This method is called upon successful channel
open to give the SSH Agent an opportunity
to take further action. i.e. request agent forwarding
@param Net_SSH2 $ssh
@access private

Forward data to SSH Agent and return data reply
@param string $data
@return data from SSH Agent
@access private

## References

**Database Tables (inferred)**
- `SSH`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\System\SSH\Agent.php`

**Classes**:
- `phpseclib\System\SSH\Agent`

**Functions/Methods**:
- `__construct()`
- `requestIdentities()`
- `startSSHForwarding($ssh)`
- `_request_forwarding($ssh)`
- `_on_channel_open($ssh)`
- `_forward_data($data)`

