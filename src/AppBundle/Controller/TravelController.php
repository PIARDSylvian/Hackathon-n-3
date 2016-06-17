<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Travel;

class TravelController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function newTravelAction(Request $request)
    {
        return $this->render('AppBundle::new_travel.html.twig');
    }

    public function showTravelAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::travel.html.twig');
    }
}