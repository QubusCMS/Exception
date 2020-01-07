<?php
namespace Qubus\Exception\Http\Client;

class UnsupportedMediaTypeException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method.',
        $code = 415,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
