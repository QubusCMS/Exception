<?php
namespace Qubus\Exception\Http\Client;

class ForbiddenException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The server understood the request, but is refusing to fulfill it. Authorization will not help and the request should not be repeated.',
        $code = 403,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
