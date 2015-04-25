<?php

/*
 * This file is part of the FOSDemoBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\DemoBundle\EventListener;

use Acme\DemoBundle\AcmeDemoEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use Acme\DemoBundle\Event\GetResponseUserEvent;
use Symfony\Component\HttpFoundation\Response;

class RegistrationListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            AcmeDemoEvents::REGISTRATION_INITIALIZE => 'initialize',
        );
    }

    public function initialize(GetResponseUserEvent $event)
    {
         return  $event->setResponse(new Response($event->getResponse()." 我监听到了"));
    }
}
