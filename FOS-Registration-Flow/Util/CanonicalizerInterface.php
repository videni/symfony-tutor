<?php


namespace Acme\DemoBundle\Util;

interface CanonicalizerInterface
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function canonicalize($string);
}
