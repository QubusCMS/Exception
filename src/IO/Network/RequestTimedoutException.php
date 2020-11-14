<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\Network;

use Qubus\Exception\IO\IOException;

class RequestTimedoutException extends IOException
{
    public function __construct(
        ?string $message = 'Request timed out while waiting for remote party to return response.',
        $code = 408,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
