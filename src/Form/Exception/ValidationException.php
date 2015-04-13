<?php

namespace Piwi\Form\Exception;
use Exception;
use Symfony\Component\Form\FormInterface;

/**
 * ValidationException if Form validation fails
 */
class ValidationException extends \Symfony\Component\Form\Exception\RuntimeException
{
    /**
     * @param string $name
     * @param int $code
     * @param Exception $previous
     */
    public function __construct($name, $code = 0, Exception $previous = null)
    {
        parent::__construct(sprintf('The form \'%s\' is invalid'), $code, $previous);
    }
}