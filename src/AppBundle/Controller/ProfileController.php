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
        // replace this example code with whatever you need
        return $this->render('AppBundle::profile.html.twig');
    }
}