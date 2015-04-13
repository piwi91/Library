<?php

namespace Piwi\Model\Form\Handler;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Interfacing Form Handler
 *
 * @package Piwi\Model\Form\Handler
 */
interface FormHandlerInterface
{
    /**
     * Get the initialized form
     *
     * @param null $data
     * @param array $options
     *
     * @return FormInterface
     */
    public function form($data = null, array $options = []);

    /**
     * Process form and return false if the form is invalid
     *
     * @param FormInterface $form
     * @param Request $request
     *
     * @return bool
     */
    public function process(FormInterface $form, Request $request);
}