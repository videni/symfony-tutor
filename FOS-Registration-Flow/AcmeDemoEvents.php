<?php

/*
 * This file is part of the FOSDemoBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\DemoBundle;

/**
 * Contains all events thrown in the FOSDemoBundle
 */
final class AcmeDemoEvents
{

    /**
     * The REGISTRATION_INITIALIZE event occurs when the registration process is initialized.
     *
     * This event allows you to modify the default values of the user before binding the form.
     * The event listener method receives a FOS\DemoBundle\Event\UserEvent instance.
     */
    const REGISTRATION_INITIALIZE = 'fos_user.registration.initialize';



}
