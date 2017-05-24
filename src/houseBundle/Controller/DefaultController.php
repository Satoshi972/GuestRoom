<?php

namespace houseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('houseBundle:Default:index.html.twig');
    }
}
