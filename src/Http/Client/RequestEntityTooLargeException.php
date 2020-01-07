<?php
namespace Qubus\Exception\Http\Client;

class RequestEntityTooLargeException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The server is refusing to process a request because the message is larger than the server is willing or able to process.',
        $code = 413,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
