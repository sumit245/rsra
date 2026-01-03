# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\SourceMap\Base64VLQ.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\SourceMap\Base64VLQ.php`
- Type: PHP
- Size: 4248 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

Base 64 VLQ
Based on the Base 64 VLQ implementation in Closure Compiler:
https://github.com/google/closure-compiler/blob/master/src/com/google/debugging/sourcemap/Base64VLQ.java
Copyright 2011 The Closure Compiler Authors.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
    http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
@author John Lenz <johnlenz@google.com>
@author Anthon Pang <anthon.pang@gmail.com>
@internal

Returns the VLQ encoded value.
@param int $value
@return string

Decodes VLQValue.
@param string $str
@param int    $index
@return int

Converts from a two-complement value to a value where the sign bit is
is placed in the least significant bit.  For example, as decimals:
  1 becomes 2 (10 binary), -1 becomes 3 (11 binary)
  2 becomes 4 (100 binary), -2 becomes 5 (101 binary)
@param int $value
@return int

Converts to a two-complement value from a value where the sign bit is
is placed in the least significant bit.  For example, as decimals:
  2 (10 binary) becomes 1, 3 (11 binary) becomes -1
  4 (100 binary) becomes 2, 5 (101 binary) becomes -2
@param int $value
@return int

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\SourceMap\Base64VLQ.php`

**Classes**:
- `ScssPhp\ScssPhp\SourceMap\Base64VLQ`

**Functions/Methods**:
- `encode($value)`
- `decode($str, &$index)`
- `toVLQSigned($value)`
- `fromVLQSigned($value)`

