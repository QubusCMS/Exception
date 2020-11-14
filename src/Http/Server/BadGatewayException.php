<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Server;

use Qubus\Exception\Exception;

class BadGatewayException extends Exception
{
    public function __construct(
        ?string $message = 'The server cannot complete the request because a '
        . 'downstream process failed to respond properly.',
        $code = 502,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
