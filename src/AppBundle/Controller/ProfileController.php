<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse; 

class ProfileController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function profileAction(Request $request)
    {
    	$user = $this->getUser();

        return $this->render('AppBundle::profile.html.twig', array("datauser" => $user));
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $username = $request->request->get('username');
        $email = $request->request->get('email');

        $user->setUsername($username);
        $user->setEmail($email);
        

        $em->persist($user);
        $em->flush();

        $url = $this -> generateUrl('profile');
        $response = new RedirectResponse($url);
        return $response;
    }
}