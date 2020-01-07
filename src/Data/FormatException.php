<?php
namespace Qubus\Exception\Data;

class FormatException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'The data provided is not of the expected format or cannot be parsed correctly.', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
