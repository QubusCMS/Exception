<?php
namespace Qubus\Exception\IO\FileSystem;

class FileNotWritableException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Cannot write to specified file.', $code = 403, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
