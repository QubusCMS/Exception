<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\Network;

use Qubus\Exception\IO\IOException;

class UnknownHostException extends IOException
{
    public function __construct(
        ?string $message = 'The specified resource\'s hostname could not be resolved.',
        $code = 404,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
