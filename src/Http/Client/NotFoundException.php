<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;

class NotFoundException extends Exception
{
    public function __construct(
        ?string $message = 'The requested entity cannot be found, this may be returned because '
        . 'the entity is not accessible using requested credentials because of a recent state '
        . 'change or because the entity cannot be found at all.',
        $code = 404,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
