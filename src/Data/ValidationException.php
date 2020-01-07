<?php
namespace Qubus\Exception\Data;

class ValidationException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'The provided data does not conform to business model or basic domain validation rules.', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
