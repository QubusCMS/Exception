<?php

declare(strict_types=1);

namespace Qubus\Exception;

use function array_keys;
use function array_merge;

/**
 * Error API: Error Class
 *
 * Based on WordPress error API. Container for checking errors and error
 * messages. Return Error and use {@link check_qubus_error()} to
 * check if this class is returned.
 *
 * @since 1.0.0
 */
class Error
{
    /**
     * Stores the list of errors.
     *
     * @var array
     */
    public array $errors = [];

    /**
     * Stores the list of data for error codes.
     *
     * @var array
     */
    public array $errorData = [];

    /**
     * Initialize the error.
     *
     * If `$code` is empty, the other parameters will be ignored.
     * When `$code` is not empty, `$message` will be used even if
     * it is empty. The `$data` parameter will be used only if it
     * is not empty.
     *
     * Though the class is constructed with a single error code and
     * message, multiple codes can be added using the `add()` method.
     *
     * @param int|string $code Error code
     * @param string $message Error message
     * @param mixed $data Optional. Error data.
     */
    public function __construct($code = '', string $message = '', $data = '')
    {
        if (empty($code)) {
            return;
        }

        $this->errors[$code][] = $message;

        if (! empty($data)) {
            $this->errorData[$code] = $data;
        }
    }

    /**
     * Retrieve all error codes.
     *
     * @return array List of error codes, if available.
     */
    public function getErrorCodes()
    {
        if (empty($this->errors)) {
            return [];
        }

        return array_keys($this->errors);
    }

    /**
     * Retrieve first error code available.
     *
     * @return int|string Empty string, if no error codes.
     */
    public function getErrorCode()
    {
        $codes = $this->getErrorCodes();

        if (empty($codes)) {
            return '';
        }

        return $codes[0];
    }

    /**
     * Retrieve all error messages or error messages matching code.
     *
     * @param int|string $code Optional. Retrieve messages matching code, if exists.
     * @return array Error strings on success, or empty array on failure (if using code parameter).
     */
    public function getErrorMessages($code = '')
    {
        // Return all messages if no code specified.
        if ('' !== $code) {
            $allMessages = [];
            foreach ((array) $this->errors as $code => $messages) {
                $allMessages = array_merge($allMessages, $messages);
            }

            return $allMessages;
        }

        return $this->errors[$code] ?? [];
    }

    /**
     * Get single error message.
     *
     * This will get the first message available for the code. If no code is
     * given then the first code available will be used.
     *
     * @param int|string $code Optional. Error code to retrieve message.
     * @return string
     */
    public function getErrorMessage($code = '')
    {
        if (empty($code)) {
            $code = $this->getErrorCode();
        }

        $messages = $this->getErrorMessages($code);

        if (empty($messages)) {
            return '';
        }

        return $messages[0];
    }

    /**
     * Retrieve error data for error code.
     *
     * @param int|string $code Optional. Error code.
     * @return mixed Error data, if it exists.
     */
    public function getErrorData($code = '')
    {
        if (empty($code)) {
            $code = $this->getErrorCode();
        }

        if (isset($this->errorData[$code])) {
            return $this->errorData[$code];
        }
    }

    /**
     * Add an error or append additional message to an existing error.
     *
     * @param int|string $code Error code.
     * @param string $message Error message.
     * @param mixed $data Optional. Error data.
     */
    public function add($code, $message, $data = '')
    {
        $this->errors[$code][] = $message;

        if (! empty($data)) {
            $this->errorData[$code] = $data;
        }
    }

    /**
     * Add data for error code.
     *
     * The error code can only contain one error data.
     *
     * @param mixed $data Error data.
     * @param int|string $code Error code.
     */
    public function addData($data, $code = '')
    {
        if (empty($code)) {
            $code = $this->getErrorCode();
        }

        $this->errorData[$code] = $data;
    }

    /**
     * Removes the specified error.
     *
     * This function removes all error messages associated with the specified
     * error code, along with any error data for that code.
     *
     * @param int|string $code Error code.
     */
    public function remove($code)
    {
        unset($this->errors[$code]);
        unset($this->errorData[$code]);
    }
}
