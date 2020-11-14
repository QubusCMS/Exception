<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\Network;

use Qubus\Exception\IO\IOException;

class ConnectionRefusedException extends IOException
{
    public function __construct(
        ?string $message = 'Connection lost while exchanging data with remote host.',
        $code = 403,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
