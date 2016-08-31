<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Controller\BlogController;
use Symfony\Component\HttpFoundation\JsonResponse;


class FrontController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:Front:index.html.twig');
    }
    
    /**
     * @Route("/blog")
     */
    public function blogAction()
    {
        return $this->render('FrontBundle:Blog:index.html.twig');
    }
     
    /**
     * Create contact message.
     *
     * @param Request $request The request
     * @param int     $id      The entity id
     *
     * @throws NotFoundHttpException
     * @return array|RedirectResponse
     *
     * @Route("/contact-web")
     */
    public function contactWebAction(Request $request)
    {

        if($request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();

            $this->get('core.mailer')->sendContactWebMessage($request->request->get('contact'));
            
            return new JsonResponse(true);
        }
        
        return new JsonResponse(false);
        
    }
    
    /**
     * @Route("/{menuitem}")
     */
    public function menuAction($menuitem=null)
    {
        $em = $this->getDoctrine()->getManager();
        $menuItem = $em->getRepository('CoreBundle:MenuItem')->findOneBySlug($menuitem);
           
        return $this->render('FrontBundle:Front:menu.item.html.twig', array(
            'item' => $menuItem
            ));
    }
    
    
}
