<?php
namespace Qubus\Exception;

/**
 * Qubus Exception Class
 *
 * This extends the default `BaseException` class to allow converting
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
class Exception extends \Qubus\Exception\BaseException
{
}
