<?php
namespace Qubus\Exception;

abstract class BaseException extends \Exception implements BaseExceptionInterface
{
    /**
     * Exception message
     * @var string
     */
    protected $message = 'Unknown exception';
    private $string;
    /**
     * User-defined exception code
     * @var int
     */
    protected $code = 0;
    /**
     * Source filename of exception
     * @var string
     */
    protected $file;
    /**
     * Source line of exception
     * @var int
     */
    protected $line;
    private $trace;

    public function __construct($message = null, $code = 0, $previous = null)
    {
        if (!$message) {
            throw new $this('Unknown ' . get_class($this));
        }
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return get_class($this) . " '{$this->message}' in {$this->file}({$this->line})\n"
            . "{$this->getTraceAsString()}";
    }
}
