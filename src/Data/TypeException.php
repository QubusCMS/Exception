<?php

declare(strict_types=1);

namespace Qubus\Exception\Data;

use Qubus\Exception\Exception;
use Throwable;

class TypeException extends Exception
{
    public function __construct(
        string $message = 'Type of data is incorrect.',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
