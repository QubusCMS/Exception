<?php

declare(strict_types=1);

namespace Qubus\Exception\Data;

use Qubus\Exception\Exception;

class ValidationException extends Exception
{
    public function __construct(
        ?string $message = 'The provided data does not conform to business model or basic domain validation rules.',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
