<?php

namespace Piwi\Model\Form\Handler;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Abstract form handler
 *
 * @package Piwi\Model\Form\Handler
 */
abstract class AbstractFormHandler implements FormHandlerInterface
{
    /**
     * @var FormFactoryInterface
     */
    protected $formFactory;

    /**
     * @var FormTypeInterface
     */
    protected $formType;

    /**
     * @param FormFactoryInterface $formFactory
     * @param FormTypeInterface $formType
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        FormTypeInterface $formType
    ) {
        $this->formFactory = $formFactory;
        $this->formType = $formType;
    }

    /**
     * Get the initialized form
     *
     * @param null $data
     * @param array $options
     *
     * @return FormInterface
     */
    public function form($data = null, array $options = [])
    {
        return $this->formFactory->create($this->formType, $data, $options);
    }

    /**
     * Process form and return false if the form is invalid
     *
     * @param FormInterface $form
     * @param Request $request
     *
     * @return bool
     */
    public function process(FormInterface $form, Request $request)
    {
        // Handle the request
        $form->handleRequest($request);
    }
}