<?php

namespace Darkgoldblade01\Wordpress\Exceptions;

use Throwable;

/**
 * Class NotFoundException.
 */
class NotFoundException extends \Exception
{
    /**
     * NotFoundException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
