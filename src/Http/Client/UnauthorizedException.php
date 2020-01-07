<?php
namespace Qubus\Exception\Http\Client;

class UnauthorizedException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The request requires user authentication.',
        $code = 401,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
