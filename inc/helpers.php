<?php

declare(strict_types=1);

namespace Qubus\Exception;

use Qubus\Exception\Error;
use Qubus\Exception\BaseException;

if (!function_exists('Qubus\Exception\check_qubus_error')) {
    /**
     * Check whether variable is a Qubus Error.
     *
     * Returns true if $object is an object of the `\Qubus\Exception\Error` class.
     *
     * @since 1.0.0
     * @param mixed $object Check if unknown variable is an `\Qubus\Exception\Error` object.
     * @return bool True, if `\Qubus\Exception\Error`. False, if not `\Qubus\Exception\Error`.
     */
    function check_qubus_error($object)
    {
        return ($object instanceof Error);
    }
}

if (!function_exists('Qubus\Exception\check_qubus_exception')) {
    /**
     * Check whether variable is a Qubus Exception.
     *
     * Returns true if $object is an object of the `\Qubus\Exception\BaseException` class.
     *
     * @since 1.0.0
     * @param mixed $object Check if unknown variable is an `\Qubus\Exception\BaseException` object.
     * @return bool True, if `\Qubus\Exception\BaseException`. False, if not `\Qubus\Exception\BaseException`.
     */
    function check_qubus_exception($object)
    {
        return ($object instanceof BaseException);
    }
}
