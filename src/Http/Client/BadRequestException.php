<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;

class BadRequestException extends Exception
{
    public function __construct(
        ?string $message = 'The request could not be understood by the server due to malformed syntax. '
        . 'The client should not repeat the request without modifications.',
        $code = 400,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
