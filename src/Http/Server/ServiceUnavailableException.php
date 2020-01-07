<?php
namespace Qubus\Exception\Http\Server;

class ServiceUnavailableException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The server is currently unable to handle the request due to a temporary overloading or maintenance of the server.',
        $code = 503,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
