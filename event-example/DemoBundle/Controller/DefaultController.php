<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\DemoBundle\Event\GetResponseUserEvent;
use Acme\DemoBundle\AcmeDemoEvents;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeDemoBundle:Default:index.html.twig', array('name' => $name));
    }


    public function testAction($name)
    {
        $hello="hello,".$name;
        $this->Render(
            "AcmeDemoBundle:Default:index.html.twig",array("name"=>$hello)
        );

    }


    public function registerAction()
    {

        $dispatcher = $this->get('event_dispatcher');

        $response=new Response("开始注册");
        $event = new GetResponseUserEvent($response);

        $dispatcher->dispatch(AcmeDemoEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
    }
}
