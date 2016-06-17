<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //recuperation de l utilisateur connecté
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $travels = $em->getRepository("AppBundle:Travel")->findAll();

        return $this->render('AppBundle::dashboard.html.twig', array("travels" => $travels));
    }
}