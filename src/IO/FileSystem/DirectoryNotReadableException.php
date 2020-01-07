<?php
namespace Qubus\Exception\IO\FileSystem;

class DirectoryNotReadableException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Cannot read from specified directory.', $code = 403, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
