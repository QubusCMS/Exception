<?php
namespace Qubus\Exception\IO\FileSystem;

class DirectoryNotWritableException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Cannot write to specified directory.', $code = 403, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
