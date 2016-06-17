<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        
        $travels = $em->getRepository("AppBundle:Travel")->findByUserParticipations($user);

        return $this->render('AppBundle::dashboard.html.twig', array(
            "travels" => $travels
        ));
    }
}
