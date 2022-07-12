<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\Network;

use Qubus\Exception\IO\IOException;
use Throwable;

class UnexpectedResponseException extends IOException
{
    public function __construct(
        string $message = 'Unexpected response received while communicating with remote host.',
        int $code = 500,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
