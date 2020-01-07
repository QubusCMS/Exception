<?php
namespace Qubus\Exception\Data;

class TypeException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Type of data is incorrect.', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
