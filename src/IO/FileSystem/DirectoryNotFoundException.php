<?php
namespace Qubus\Exception\IO\FileSystem;

class DirectoryNotFoundException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Cannot find specified directory.', $code = 404, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
