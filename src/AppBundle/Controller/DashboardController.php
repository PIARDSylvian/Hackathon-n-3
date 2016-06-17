<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    public function indexAction(Request $request)
    {
        // notification à afficher dans le dashboard
        $notification = "";

        //recuperation de l utilisateur connecté

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $travels = $em->getRepository("AppBundle:Travel")->findAll();


        $notification = "Projet \"Week-end Montagne\" : un ou plusieurs de vos amis ont une disponibilité différente. La date du séjour est désormais adaptée.";
        /*
        $date_start = new \DateTime();
        $date_end = new \DateTime("+1 day");
        */

        return $this->render('AppBundle::dashboard.html.twig', array(
            "notification" => $notification,
            "travels" => $travels
        ));
    }
}
