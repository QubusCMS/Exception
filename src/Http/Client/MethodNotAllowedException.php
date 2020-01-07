<?php
namespace Qubus\Exception\Http\Client;

class MethodNotAllowedException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The method specified in the request is not allowed for the requested resource. The resource was found and is accessible, but cannot be accessed using this method.',
        $code = 405,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
