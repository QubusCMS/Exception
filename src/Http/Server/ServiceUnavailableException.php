<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Server;

use Qubus\Exception\Exception;
use Throwable;

class ServiceUnavailableException extends Exception
{
    public function __construct(
        string $message = 'The server is currently unable to handle the request due to a '
        . 'temporary overloading or maintenance of the server.',
        int $code = 503,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
