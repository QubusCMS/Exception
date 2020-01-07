<?php
namespace Qubus\Exception\IO\FileSystem;

class FileNotFoundException extends \Qubus\Exception\QubusException
{
    public function __construct($message = 'Cannot find specified file.', $code = 404, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
