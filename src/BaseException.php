<?php

declare(strict_types=1);

namespace Qubus\Exception;

use Exception;
use Stringable;

use function sprintf;
use Throwable;

class BaseException extends Exception implements Stringable
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $message = 'Unknown exception.';

    /**
     * Source filename of exception.
     *
     * @var string
     */
    protected string $file = '';

    /**
     * Source line of exception.
     *
     * @var int
     */
    protected int $line;

    public function __construct(?string $message = '', int $code = 0, ?Throwable $previous = null)
    {
        if (! $message) {
            throw new self(
                sprintf(
                    'Unknown %s', static::class
                )
            );
        }
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return static::class . sprintf(
            ' %s in %s(%s)',
            $this->message,
            $this->file,
            $this->line,
        ) . "\n" . sprintf('%s', $this->getTraceAsString());
    }
}
