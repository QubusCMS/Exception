<?php
namespace Qubus\Exception\Http\Server;

class InternalServerErrorException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The server encountered an unexpected condition which prevented it from fulfilling the request.',
        $code = 500,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
