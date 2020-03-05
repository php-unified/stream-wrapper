<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace PhpUnified\StreamWrapper\Common;

/**
 * An abstract for a stream wrapper
 */
abstract class AbstractStreamWrapper implements StreamWrapperInterface
{
    /**
     * Contains the current context of the stream.
     *
     * This property must be public so PHP can populate it with the actual context resource.
     *
     * @var resource
     */
    public $context;
}
