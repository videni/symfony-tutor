<?php

/*
 * This file is part of the FOSDemoBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\DemoBundle\Event;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\Event;

class GetResponseUserEvent extends Event
{
    private $response;

    public function setResponse(Response $response)
    {
        $this->response = $response;
    }


    public function __construct($response)
    {
        $this->response=$response;

    }
    /**
     * @return Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}
