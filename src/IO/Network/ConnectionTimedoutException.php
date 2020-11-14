<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\Network;

use Qubus\Exception\IO\IOException;

class ConnectionTimedoutException extends IOException
{
    public function __construct(
        ?string $message = 'Connection timed out while connecting to the remote host.',
        $code = 408,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
