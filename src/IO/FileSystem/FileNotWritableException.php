<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\FileSystem;

use Qubus\Exception\IO\IOException;

class FileNotWritableException extends IOException
{
    public function __construct(
        ?string $message = 'Cannot write to specified file.',
        $code = 403,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
