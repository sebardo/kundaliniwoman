<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Controller\BlogController;
use Symfony\Component\HttpFoundation\JsonResponse;
use BlogBundle\Model\CommentFront;


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
     * @Route("/blog/{slug}")
     * @Method("GET")
     * @Template("FrontBundle:Blog:show.html.twig")
     */
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        
        $qb = $em->getRepository('BlogBundle:Post')->createQueryBuilder('p')
                ->join('p.translations', 't')
                ->where('t.slug = :slug')
                ->setParameter('slug', $slug)
                ->setMaxResults(1);
        $entity = $qb->getQuery()->getSingleResult();
                
        $categories = $em->getRepository('BlogBundle:Category')->findBy(array('parentCategory' => null ), array('order' => 'ASC'));
        $tags = $em->getRepository('BlogBundle:Tag')->findBy(array(), array('name' => 'ASC'));
        $comments = $em->getRepository('BlogBundle:Comment')->findBy(array('post' => $entity->getId(), 'isActive' => true));
        
        $related = $this->get('blog_manager')->getRelatedPost($entity);

        $form = $this->createCommentForm(new CommentFront(), $entity);
        
        return array(
            'post'       => $entity,
            'comments'   => $comments,
            'categories' => $categories,
            'form'       => $form->createView(),
            'tags'       => $tags,
            'related'   =>  $related
        );
    }
    
    /**
     * Creates a form to create a Post entity.
     *
     * @param Post $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCommentForm(CommentFront $model, $entity)
    {
        $form = $this->createForm('BlogBundle\Form\CommentFrontType', $model, array(
            'action' => $this->generateUrl('blog_blog_comment', array('post' => $entity->getId())),
            'method' => 'POST',
            'attr' => array('id' => 'comment-form','class' => 'comment-form')
        ));

        return $form;
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

            $this->get('core.mailer')->sendContactMessage($request->request->get('contact'));
            
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
