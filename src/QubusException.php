<?php
namespace Qubus\Exception;

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
 * @since       1.0.0
 * @package     Qubus Exception
 * @author      Joshua Parker <josh@joshuaparker.blog>
 */
class QubusException extends BaseException
{

    /**
     * Qubus handles string error codes.
     * @var string
     */
    protected $code;

    /**
     * Error instance.
     * @var Qubus\Exception\Error
     */
    protected $qubus_error;

    /**
     * Qubus exception constructor.
     *
     * The class constructor accepts either the abstract class `Qubus\Exception\BaseException` creation
     * parameters or an `Qubus\Exception\Error` instance in place of the previous exception.
     *
     * If an `Qubus\Exception\Error` instance is given in this way, the `$message` and `$code`
     * parameters are ignored in favour of the message and code provided by the
     * `Qubus\Exception\Error` instance.
     *
     * Depending on whether an `Qubus\Exception\Error` instance was received, the instance is kept
     * or a new one is created from the provided parameters.
     *
     * @param string               $message  Exception message (optional, defaults to empty).
     * @param string               $code     Exception code (optional, defaults to empty).
     * @param `\Liten\Exception\LitenException` | `Qubus\Exception\Error` $previous Previous exception or error (optional).
     *
     * @uses Qubus\Exception\Error
     * @uses Qubus\Exception\Error::getErrorCode()
     * @uses Qubus\Exception\Error::getErrorMessage()
     */
    public function __construct($message = '', $code = '', $previous = null)
    {
        $exception = $previous;
        $qubus_error  = null;

        if ($previous instanceof \Qubus\Exception\Error) {
            $code      = $previous->getErrorCode();
            $message   = $previous->getErrorMessage($code);
            $qubus_error  = $previous;
            $exception = null;
        }

        parent::__construct($message, null, $exception);

        $this->code     = $code;
        $this->qubus_error = $qubus_error;
    }

    /**
     * Obtain the exception's `Qubus\Exception\Error` object.
     *
     * @since 1.0.0
     * @return `Error` Qubus error.
     */
    public function getQubusError()
    {
        return $this->qubus_error ? $this->qubus_error : new \Qubus\Exception\Error($this->code, $this->message, $this);
    }
}
