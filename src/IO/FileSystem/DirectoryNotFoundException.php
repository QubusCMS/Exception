<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\FileSystem;

use Qubus\Exception\IO\IOException;

class DirectoryNotFoundException extends IOException
{
    public function __construct(
        ?string $message = 'Cannot find specified directory.',
        $code = 404,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
