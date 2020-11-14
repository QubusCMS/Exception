<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;

class TooManyRequestsException extends Exception
{
    public function __construct(
        ?string $message = 'Too Many Requests: The request you are making cannot be '
        . 'completed because you are making too many requests to this '
        . 'system. Please try again later.',
        $code = 429,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
