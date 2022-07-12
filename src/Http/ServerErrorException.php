<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Qubus\Exception\Exception;
use Throwable;

class ServerErrorException extends Exception
{
    public function __construct(
        string $message = 'The server encountered an unexpected condition '
        . 'which prevented it from fulfilling the request.',
        int $code = 500,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
