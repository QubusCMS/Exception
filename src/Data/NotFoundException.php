<?php
namespace Qubus\Exception\Data;

class NotFoundException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'The requested data cannot be found in the data source.', $code = 404, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
