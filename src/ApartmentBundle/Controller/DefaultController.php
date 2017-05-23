<?php

namespace ApartmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApartmentBundle:Default:index.html.twig');
    }
}
