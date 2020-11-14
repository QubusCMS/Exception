<?php

declare(strict_types=1);

namespace Qubus\Exception;

use Exception;

use function sprintf;

abstract class BaseException extends Exception
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $message = 'Unknown exception.';
    protected $string;

    /**
     * User-defined exception code.
     *
     * @var int|string
     */
    protected $code = 0;

    /**
     * Source filename of exception.
     *
     * @var string
     */
    protected $file;

    /**
     * Source line of exception.
     *
     * @var int
     */
    protected $line;
    protected $trace;

    public function __construct(?string $message = null, $code = 0, $previous = null)
    {
        if (! $message) {
            throw new $this('Unknown ' . static::class);
        }
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return static::class . sprintf(
            ' %s in %s(%s)',
            $this->message,
            $this->file,
            $this->line,
        ) . "\n" . sprintf('%s', $this->getTraceAsString());
    }
}
