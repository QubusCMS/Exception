<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;

class RequestEntityTooLargeException extends Exception
{
    public function __construct(
        ?string $message = 'The server is refusing to process a request because the message is '
        . 'larger than the server is willing or able to process.',
        $code = 413,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
