[![Build Status](https://travis-ci.com/php-unified/stream-wrapper.svg?branch=master)](https://travis-ci.com/php-unified/stream-wrapper)

# PHP Unified State

This package provides an interface for the [Stream Wrapper implementation of PHP](http://php.net/manual/en/class.streamwrapper.php).

The available interface is located in the `Common` folder together with an abstract implementation.
It is recommended to use this abstract implementation, because this will make a required property available.

The required property is `$context`, it MUST be public, because PHP sets the context of a stream on this variable.

# Registering a stream wrapper

After implementing the interface and abstract a stream wrapper can be registered.
This can be done by calling the function `stream_wrapper_register(string $protocol , string $classname [, int $flags = 0 ])`.
This function required 3 parameters:
- $protocol: The wrapper name should be passed to this variable.
- - Example: if you want to be able to call `fopen('void://path/to/my/file.txt', 'w+')`, you should pass `'void'` to this parameter.
- $classname: This should be name of the class which handles (read: implements StreamWrapperInterface) the stream.
- - Example: to register the `VoidStreamWrapper` you should pass `\PhpUnified\StreamWrapper\VoidStreamWrapper::class` to this parameter.
- $flags: This parameter expects an integer, either `STREAM_IS_URL` (for a HTTP stream) or `0` (for a local stream, this is the default).

## MIT License

Copyright (c) 2019 Jyxon

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
