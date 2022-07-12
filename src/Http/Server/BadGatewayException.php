<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Server;

use Qubus\Exception\Exception;
use Throwable;

class BadGatewayException extends Exception
{
    public function __construct(
        string $message = 'The server cannot complete the request because a '
        . 'downstream process failed to respond properly.',
        int $code = 502,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
