<?php

declare(strict_types=1);

namespace Qubus\Exception;

use Error;
use Qubus\Exception\BaseException;

/**
 * Qubus Exception Class
 *
 * This extends the `BaseException` abstract class to allow converting
 * exceptions to and from `Error` objects.
 *
 * Unfortunately, because an `Error` object may contain multiple messages and error
 * codes, only the first message for the first error code in the instance will be
 * accessible through the exception's methods.
 *
 * @since 1.0.0
 */
class QubusException extends BaseException
{
    /**
     * Qubus handles string error codes.
     *
     * @var int|string
     */
    protected $code;

    /**
     * Error instance.
     */
    protected Error $qubusError;

    /**
     * Qubus exception constructor.
     *
     * The class constructor accepts either the abstract class `\Qubus\Exception\BaseException` creation
     * parameters or an `\Qubus\Exception\Error` instance in place of the previous exception.
     *
     * If an `\Qubus\Exception\Error` instance is given in this way, the `$message` and `$code`
     * parameters are ignored in favour of the message and code provided by the
     * `\Qubus\Exception\Error` instance.
     *
     * Depending on whether an `\Qubus\Exception\Error` instance was received, the instance is kept
     * or a new one is created from the provided parameters.
     *
     * @uses \Qubus\Exception\Error
     * @uses \Qubus\Exception\Error::getErrorCode()
     * @uses \Qubus\Exception\Error::getErrorMessage()
     *
     * @param string $message Exception message (optional, defaults to empty).
     * @param int|string $code Exception code (optional, defaults to empty).
     * @param \Qubus\Exception\BaseException|\Qubus\Exception\Error $previous Previous exception or error (optional).
     */
    public function __construct(string $message = '', $code = '', $previous = null)
    {
        $exception = $previous;
        $qubusError = null;

        if ($previous instanceof Error) {
            $code = $previous->getErrorCode();
            $message = $previous->getErrorMessage($code);
            $qubusError = $previous;
            $exception = null;
        }

        parent::__construct($message, null, $exception);

        $this->code = $code;
        $this->qubusError = $qubusError;
    }

    /**
     * Obtain the exception's `\Qubus\Exception\Error` object.
     *
     * @return `Error` Qubus error.
     */
    public function getQubusError()
    {
        return $this->qubusError ?? new Error($this->code, $this->message, $this);
    }
}
