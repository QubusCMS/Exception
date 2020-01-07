<?php
namespace Qubus\Exception\Http\Server;

class GatewayTimeoutException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'This server is acting as a gateway or proxy to another server but the underlying server or process failed to respond in time.',
        $code = 504,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
