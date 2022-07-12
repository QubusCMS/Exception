<?php

declare(strict_types=1);

namespace Qubus\Exception\Data;

use Qubus\Exception\Exception;
use Throwable;

class FormatException extends Exception
{
    public function __construct(
        string $message = 'The data provided is not of the expected format or cannot be parsed correctly.',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
