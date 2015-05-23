<?php

namespace Acme\DemoBundle\Form\Factory;



interface FactoryInterface
{
    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    public function createForm();
}