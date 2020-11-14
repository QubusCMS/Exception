<?php

declare(strict_types=1);

namespace Qubus\Exception\Data;

use Qubus\Exception\Exception;

class TypeException extends Exception
{
    public function __construct(
        ?string $message = 'Type of data is incorrect.',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
