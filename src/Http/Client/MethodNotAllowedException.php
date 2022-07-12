<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;
use Throwable;

class MethodNotAllowedException extends Exception
{
    public function __construct(
        string $message = 'The method specified in the request is not allowed for the requested resource. '
        . 'The resource was found and is accessible, but cannot be accessed using this method.',
        int $code = 405,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
