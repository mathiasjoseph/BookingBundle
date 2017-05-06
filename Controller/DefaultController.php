<?php

namespace Miky\Bundle\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MikyBookingBundle:Default:index.html.twig');
    }
}
