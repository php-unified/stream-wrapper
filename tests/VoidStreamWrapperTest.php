<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace PhpUnified\StreamWrapper\Tests;

use PhpUnified\StreamWrapper\VoidStreamWrapper;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \PhpUnified\StreamWrapper\VoidStreamWrapper
 */
class VoidStreamWrapperTest extends TestCase
{
    /**
     * Covers the entire VoidStreamWrapper class.
     *
     * @return void
     *
     * @covers ::dir_closedir
     * @covers ::dir_opendir
     * @covers ::dir_readdir
     * @covers ::dir_rewinddir
     * @covers ::rename
     * @covers ::mkdir
     * @covers ::rmdir
     * @covers ::stream_cast
     * @covers ::stream_close
     * @covers ::stream_eof
     * @covers ::stream_flush
     * @covers ::stream_lock
     * @covers ::stream_metadata
     * @covers ::stream_open
     * @covers ::stream_read
     * @covers ::stream_seek
     * @covers ::stream_set_option
     * @covers ::stream_stat
     * @covers ::stream_tell
     * @covers ::stream_truncate
     * @covers ::stream_write
     * @covers ::unlink
     * @covers ::url_stat
     */
    public function testStreamWrapper(): void
    {
        $subject = new VoidStreamWrapper();

        $this->assertEquals(false, $subject->dir_closedir());
        $this->assertEquals(false, $subject->dir_opendir('void://foo', false));
        $this->assertEquals(false, $subject->dir_readdir());
        $this->assertEquals(false, $subject->dir_rewinddir());
        $this->assertEquals(
            false,
            $subject->rename('void://foo', 'void://bar')
        );

        $this->assertEquals(false, $subject->mkdir('void://foo', 0777, false));
        $this->assertEquals(
            false,
            $subject->rmdir('void://foo', STREAM_MKDIR_RECURSIVE)
        );

        $this->assertEquals(
            false,
            $subject->stream_cast(STREAM_CAST_FOR_SELECT)
        );

        $subject->stream_close();
        $this->assertEquals(true, $subject->stream_eof());
        $this->assertEquals(false, $subject->stream_flush());
        $this->assertEquals(false, $subject->stream_lock(LOCK_UN));
        $this->assertEquals(
            false,
            $subject->stream_metadata('void://foo', STREAM_META_ACCESS, 0777)
        );

        $openedPath = null;
        $this->assertEquals(
            false,
            $subject->stream_open(
                'void://foo',
                'w+',
                STREAM_USE_PATH,
                $openedPath
            )
        );

        $this->assertEquals(false, $subject->stream_read(0));
        $this->assertEquals(false, $subject->stream_seek(0));
        $this->assertEquals(
            false,
            $subject->stream_set_option(STREAM_OPTION_BLOCKING, 0, 0)
        );

        $this->assertIsArray($subject->stream_stat());
        $this->assertEquals(0, $subject->stream_tell());
        $this->assertEquals(false, $subject->stream_truncate(0));
        $this->assertEquals(0, $subject->stream_write('foo'));
        $this->assertEquals(false, $subject->unlink('void://foo'));
        $this->assertIsArray(
            $subject->url_stat('void://', STREAM_URL_STAT_LINK)
        );
    }
}
