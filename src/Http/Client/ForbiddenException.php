<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;

class ForbiddenException extends Exception
{
    public function __construct(
        ?string $message = 'The server understood the request, but is refusing to fulfill it. '
        . 'Authorization will not help and the request should not be repeated.',
        $code = 403,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
