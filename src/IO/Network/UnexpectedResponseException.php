<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\Network;

use Qubus\Exception\IO\IOException;

class UnexpectedResponseException extends IOException
{
    public function __construct(
        ?string $message = 'Unexpected response received while communicating with remote host.',
        $code = 500,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
