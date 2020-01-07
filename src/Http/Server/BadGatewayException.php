<?php
namespace Qubus\Exception\Http\Server;

class BadGatewayException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The server cannot complete the request because a downstream process failed to respond properly.',
        $code = 502,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
