<?php
namespace Qubus\Exception\Http\Client;

class BadRequestException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The request could not be understood by the server due to malformed syntax. The client should not repeat the request without modifications.',
        $code = 400,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
