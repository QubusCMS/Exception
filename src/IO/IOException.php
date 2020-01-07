<?php
namespace Qubus\Exception\IO;

class IOException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Cannot read/write to/from specified file or directory.', $code = 403, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
