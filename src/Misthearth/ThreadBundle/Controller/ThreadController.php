<?php

namespace Misthearth\ThreadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ThreadController extends Controller
{
    /**
     * @Route("/")
     * 
     * @return array
     * 
     * @Template()
     */
    public function indexAction()
    {
        $threads = $this->getDoctrine()
                   ->getRepository('ThreadBundle:Thread')
                   ->findAll();
        
        return array(
            'threads' => $threads,
        );
    }
    
    /**
     * 
     * @Route("/thread/{slug}")
     * 
     * @throws NotFoundHttpException
     * @return array
     * 
     * @param type $slug
     * @Template()
     */
    public function showAction($slug)
    {
        $thread = $this->getDoctrine()
                       ->getRepository('ThreadBundle:Thread')
                       ->findOneBy(array(
                           'slug' => $slug
                       ));
        
        if (null == $thread) {
            throw $this->createNotFoundException('Post was not found');            
        }
        
        return array(
            'thread' => $thread
        );
    }
}
