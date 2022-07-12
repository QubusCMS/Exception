<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;
use Throwable;

class RequestTimedoutException extends Exception
{
    public function __construct(
        string $message = 'A process further down the request chain failed to respond in time. '
        . 'You can try again but you might get the same response if the server '
        . 'load or the problem persists downstream.',
        int $code = 408,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
