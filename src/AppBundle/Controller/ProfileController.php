<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function profileAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$users = $this->container->get('security.context')->getToken()->getUser();
 
    	$user = $em->getRepository("AppBundle:user")->findOneById($users->getId());


    	 // var_dump($user);exit;

        return $this->render('AppBundle::profile.html.twig', array("datauser" => $user));
    }
}