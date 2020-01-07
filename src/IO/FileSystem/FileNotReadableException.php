<?php
namespace Qubus\Exception\IO\FileSystem;

class FileNotReadableException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Cannot read from specified file.', $code = 403, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
