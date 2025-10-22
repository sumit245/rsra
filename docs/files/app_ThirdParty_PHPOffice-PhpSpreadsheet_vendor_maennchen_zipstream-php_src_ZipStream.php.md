# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\ZipStream.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\ZipStream.php`
- Type: PHP
- Size: 19041 bytes

## Summary (from docblocks)

ZipStream
Streamed, dynamically generated zip archives.
Usage:
Streaming zip archives is a simple, three-step process:
1.  Create the zip stream:
    $zip = new ZipStream('example.zip');
2.  Add one or more files to the archive:
     * add first file
    $data = file_get_contents('some_file.gif');
    $zip->addFile('some_file.gif', $data);
     * add second file
    $data = file_get_contents('some_file.gif');
    $zip->addFile('another_file.png', $data);
3.  Finish the zip stream:
    $zip->finish();
You can also add an archive comment, add comments to individual files,
and adjust the timestamp of files. See the API documentation for each
method below for additional information.
Example:
  // create a new zip stream object
  $zip = new ZipStream('some_files.zip');
  // list of local files
  $files = array('foo.txt', 'bar.jpg');
  // read and add each file to the archive
  foreach ($files as $path)
    $zip->addFile($path, file_get_contents($path));
  // write archive footer to stream
  $zip->finish();

This number corresponds to the ZIP version/OS used (2 bytes)
From: https://www.iana.org/assignments/media-types/application/zip
The upper byte (leftmost one) indicates the host system (OS) for the
file.  Software can use this information to determine
the line record format for text files etc.  The current
mappings are:
0 - MS-DOS and OS/2 (F.A.T. file systems)
1 - Amiga                     2 - VAX/VMS
3 - *nix                      4 - VM/CMS
5 - Atari ST                  6 - OS/2 H.P.F.S.
7 - Macintosh                 8 - Z-System
9 - CP/M                      10 thru 255 - unused
The lower byte (rightmost one) indicates the version number of the
software used to encode the file.  The value/10
indicates the major version number, and the value
mod 10 is the minor version number.
Here we are using 6 for the OS, indicating OS/2 H.P.F.S.
to prevent file permissions issues upon extract (see #84)
0x603 is 00000110 00000011 in binary, so 6 and 3

The following signatures end with 0x4b50, which in ASCII is PK,
the initials of the inventor Phil Katz.
See https://en.wikipedia.org/wiki/Zip_(file_format)#File_headers

Global Options
@var ArchiveOptions

@var array

@var Bigint

@var Bigint

@var bool

@var null|String

Create a new ZipStream object.
Parameters:
@param String $name - Name of output file (optional).
@param ArchiveOptions $opt - Archive Options
Large File Support:
By default, the method addFileFromPath() will send send files
larger than 20 megabytes along raw rather than attempting to
compress them.  You can change both the maximum size and the
compression behavior using the largeFile* options above, with the
following caveats:
* For "small" files (e.g. files smaller than largeFileSize), the
  memory use can be up to twice that of the actual file.  In other
  words, adding a 10 megabyte file to the archive could potentially
  occupy 20 megabytes of memory.
* Enabling compression on large files (e.g. files larger than
  large_file_size) is extremely slow, because ZipStream has to pass
  over the large file once to calculate header information, and then
  again to compress and send the actual data.
Examples:
  // create a new zip file named 'foo.zip'
  $zip = new ZipStream('foo.zip');
  // create a new zip file named 'bar.zip' with a comment
  $opt->setComment = 'this is a comment for the zip file.';
  $zip = new ZipStream('bar.zip', $opt);
Notes:
In order to let this library send HTTP headers, a filename must be given
_and_ the option `sendHttpHeaders` must be `true`. This behavior is to
allow software to send its own headers (including the filename), and
still use this library.

addFile
Add a file to the archive.
@param String $name - path of file in archive (including directory).
@param String $data - contents of file
@param FileOptions $options
File Options:
 time     - Last-modified timestamp (seconds since the epoch) of
            this file.  Defaults to the current time.
 comment  - Comment related to this file.
 method   - Storage method for file ("store" or "deflate")
Examples:
  // add a file named 'foo.txt'
  $data = file_get_contents('foo.txt');
  $zip->addFile('foo.txt', $data);
  // add a file named 'bar.jpg' with a comment and a last-modified
  // time of two hours ago
  $data = file_get_contents('bar.jpg');
  $opt->setTime = time() - 2 * 3600;
  $opt->setComment = 'this is a comment about bar.jpg';
  $zip->addFile('bar.jpg', $data, $opt);

addFileFromPath
Add a file at path to the archive.
Note that large files may be compressed differently than smaller
files; see the "Large File Support" section above for more
information.
@param String $name - name of file in archive (including directory path).
@param String $path - path to file on disk (note: paths should be encoded using
         UNIX-style forward slashes -- e.g '/path/to/some/file').
@param FileOptions $options
File Options:
 time     - Last-modified timestamp (seconds since the epoch) of
            this file.  Defaults to the current time.
 comment  - Comment related to this file.
 method   - Storage method for file ("store" or "deflate")
Examples:
  // add a file named 'foo.txt' from the local file '/tmp/foo.txt'
  $zip->addFileFromPath('foo.txt', '/tmp/foo.txt');
  // add a file named 'bigfile.rar' from the local file
  // '/usr/share/bigfile.rar' with a comment and a last-modified
  // time of two hours ago
  $path = '/usr/share/bigfile.rar';
  $opt->setTime = time() - 2 * 3600;
  $opt->setComment = 'this is a comment about bar.jpg';
  $zip->addFileFromPath('bigfile.rar', $path, $opt);
@return void
@throws \ZipStream\Exception\FileNotFoundException
@throws \ZipStream\Exception\FileNotReadableException

addFileFromStream
Add an open stream to the archive.
@param String $name - path of file in archive (including directory).
@param resource $stream - contents of file as a stream resource
@param FileOptions $options
File Options:
 time     - Last-modified timestamp (seconds since the epoch) of
            this file.  Defaults to the current time.
 comment  - Comment related to this file.
Examples:
  // create a temporary file stream and write text to it
  $fp = tmpfile();
  fwrite($fp, 'The quick brown fox jumped over the lazy dog.');
  // add a file named 'streamfile.txt' from the content of the stream
  $x->addFileFromStream('streamfile.txt', $fp);
@return void

addFileFromPsr7Stream
Add an open stream to the archive.
@param String $name - path of file in archive (including directory).
@param StreamInterface $stream - contents of file as a stream resource
@param FileOptions $options
File Options:
 time     - Last-modified timestamp (seconds since the epoch) of
            this file.  Defaults to the current time.
 comment  - Comment related to this file.
Examples:
  // create a temporary file stream and write text to it
  $fp = tmpfile();
  fwrite($fp, 'The quick brown fox jumped over the lazy dog.');
  // add a file named 'streamfile.txt' from the content of the stream
  $x->addFileFromPsr7Stream('streamfile.txt', $fp);
@return void

finish
Write zip footer to stream.
 Example:
  // add a list of files to the archive
  $files = array('foo.txt', 'bar.jpg');
  foreach ($files as $path)
    $zip->addFile($path, file_get_contents($path));
  // write footer to stream
  $zip->finish();
@return void
@throws OverflowException

Send ZIP64 CDR EOF (Central Directory Record End-of-File) record.
@return void

Create a format string and argument list for pack(), then call
pack() and return the result.
@param array $fields
@return string

Send string, sending HTTP headers if necessary.
Flush output after write if configure option is set.
@param String $str
@return void

Send HTTP headers for this stream.
@return void

Send ZIP64 CDR Locator (Central Directory Record Locator) record.
@return void

Send CDR EOF (Central Directory Record End-of-File) record.
@return void

Clear all internal variables. Note that the stream object is not
usable after this.
@return void

Is this file larger than large_file_size?
@param string $path
@return bool

Save file attributes for trailing CDR record.
@param File $file
@return void

## References

**Database Tables (inferred)**
- `the`
- `header`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\ZipStream.php`

**Classes**:
- `ZipStream\ZipStream`

**Functions/Methods**:
- `__construct(?string $name = null, ?ArchiveOptions $opt = null)`
- `addFile(string $name, string $data, ?FileOptions $options = null)`
- `addFileFromPath(string $name, string $path, ?FileOptions $options = null)`
- `addFileFromStream(string $name, $stream, ?FileOptions $options = null)`
- `addFileFromPsr7Stream(string $name,
        StreamInterface $stream,
        ?FileOptions $options = null)`
- `finish()`
- `addCdr64Eof()`
- `packFields(array $fields)`
- `send(string $str)`
- `sendHttpHeaders()`
- `addCdr64Locator()`
- `addCdrEof()`
- `clear()`
- `isLargeFile(string $path)`
- `addToCdr(File $file)`

