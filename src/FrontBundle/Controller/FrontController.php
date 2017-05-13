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
     * @Route("/blog/", name="blog_blog_index")
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
     * @Route("/menu/{slug}")
     */
    public function menuAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $entity =  $em->getRepository('CoreBundle:MenuItem')->getTranslateMenuItemBySlug($slug, $this->getRequest()->getLocale());
            
           
        return $this->render('FrontBundle:Front:menu.item.html.twig', array(
            'item' => $entity
            ));
    }
    
    
}
