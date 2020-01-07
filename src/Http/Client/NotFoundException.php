<?php
namespace Qubus\Exception\Http\Client;

class NotFoundException extends \Qubus\Exception\QubusException
{
    public function __construct(
        $message = 'The requested entity cannot be found, this may be returned because the entity is not accessible using requested credentials because of a recent state change or because the entity cannot be found at all.',
        $code = 404,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
