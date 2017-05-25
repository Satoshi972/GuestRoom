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
	* @Route("/user/home", name="home")
	* @Method ({"GET"})
	*/
    public function indexAction()
    {
        return $this->render('houseBundle:Users:index.html.twig');
    }

    /**
	* @Route("/user/create", name="create")
	* @Method ({"GET|POST"})
	*/
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
