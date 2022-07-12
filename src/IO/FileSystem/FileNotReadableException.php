<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\FileSystem;

use Qubus\Exception\IO\IOException;
use Throwable;

class FileNotReadableException extends IOException
{
    public function __construct(
        string $message = 'Cannot read from specified file.',
        int $code = 403,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
