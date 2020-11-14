<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Server;

use Qubus\Exception\Exception;

class GatewayTimeoutException extends Exception
{
    public function __construct(
        ?string $message = 'This server is acting as a gateway or proxy to another server '
        . 'but the underlying server or process failed to respond in time.',
        $code = 504,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
