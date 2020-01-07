<?php
namespace Qubus\Exception\Http\Client;

class RequestTimeoutException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'A process further down the request chain failed to respond in time. You can try again but you might get the same response if the server load or the problem persists downstream.',
        $code = 408,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
