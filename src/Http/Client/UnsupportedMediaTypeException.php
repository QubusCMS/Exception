<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;

class UnsupportedMediaTypeException extends Exception
{
    public function __construct(
        ?string $message = 'The server is refusing to service the request because the entity '
        . 'of the request is in a format not supported by the requested resource for the requested method.',
        $code = 415,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
