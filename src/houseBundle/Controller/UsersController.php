<?php

namespace houseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use houseBundle\Entity\users;

class UsersController extends Controller
{
	/**
	* @Route("/home", name="home")
	* @Method ({"GET"})
	*/
    public function indexAction()
    {
        return $this->render('houseBundle:Users:index.html.twig');
    }

    public function createUserAction()
    {
    	$em = $this->getDoctrine()->getManager();
		$user = new users;

		$post = [];
		$errors = [];


		if(!empty($_POST))
		{
			$post = array_map('trim', array_map('strip_tags', $_POST));
			
    		$user->setFirstName($post['firstName']);
    		$user->setLasstName($post['lasstName']);
    		$user->setEmail($post['email']);
    		$user->setPassword($post['password']);
    		$user->setRole($post['role']);
    		$em->persist($user);
    		$em->flush();
		}

    	return $this->render('houseBundle:users:create.html.twig');
    }
}
