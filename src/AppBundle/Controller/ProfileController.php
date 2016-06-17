<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\Criteria;

class ProfileController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function profileAction(Request $request)
    {
        //recuperation de l utilisateur connecté
    	$user = $this->getUser();
        
        //appel de entity manager (pour géré, lire ma base de donné)
        $em = $this->getDoctrine()->getManager();
        
        //requéte pour trouver tout mes critéres
        $preferences = $em->getRepository("AppBundle:Criteria")->findAll();
        
        // var_dump($preferences);exit;    
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.change_password.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        // return $this->render('FOSUserBundle:ChangePassword:changePassword.html.twig', array(
        //     'form' => $form->createView()
        // ));

        return $this->render('AppBundle::profile.html.twig', array("datauser" => $user, 'form' => $form->createView(), "preferences" => $preferences,));
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //recuperation de l identifiant courant
        $user = $this->getUser();

        //recuperation des info sur la page
        $username = $request->request->get('username');
        $email = $request->request->get('email');

        //attribution des valeurs
        $user->setUsername($username);
        $user->setEmail($email);
        
        //envoi
        $em->persist($user);
        $em->flush();

        //recuperation des info sur la page
        $typeCriteria = $request->request->get('preference.name');


//BUG !
        // enregistrement des donné dans une nouvelle entity.
        $criteria = new Criteria();
        $criteria   ->setTypeCriteria('TEST')
                    ->setName('TEST')
                ;

        $em->persist($criteria);
        $em->flush();



        $url = $this -> generateUrl('profile');
        $response = new RedirectResponse($url);
        return $response;
    }
}