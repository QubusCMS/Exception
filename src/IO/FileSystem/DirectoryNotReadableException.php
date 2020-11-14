<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\FileSystem;

use Qubus\Exception\IO\IOException;

class DirectoryNotReadableException extends IOException
{
    public function __construct(
        ?string $message = 'Cannot read from specified directory.',
        $code = 403,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
