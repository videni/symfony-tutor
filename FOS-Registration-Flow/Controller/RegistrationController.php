<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\DemoBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Acme\DemoBundle\Form\Type\UserType;
use Acme\DemoBundle\Entity\User;


class RegistrationController extends Controller
{
    public function registerAction(Request $request)
    {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('acme_user.registration.form.factory');

        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('acme_user.user_manager');

        $user = $userManager->createUser();

        $user->setEnabled(true);

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $userManager->updateUser($user);

            return "ok";
        }

        return $this->render('AcmeDemoBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }


}
