<?php

declare(strict_types=1);

namespace Qubus\Exception\Data;

use Qubus\Exception\Exception;
use Throwable;

class DataException extends Exception
{
    public function __construct(
        string $message = 'The requested data cannot be found in the data source.',
        int $code = 404,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
