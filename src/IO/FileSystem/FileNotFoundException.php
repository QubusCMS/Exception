<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\FileSystem;

use Qubus\Exception\IO\IOException;
use Throwable;

class FileNotFoundException extends IOException
{
    public function __construct(
        string $message = 'Cannot find specified file.',
        int $code = 404,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
