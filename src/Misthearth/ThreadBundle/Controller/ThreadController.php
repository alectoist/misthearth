<?php

namespace Misthearth\ThreadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ThreadController extends Controller
{
    /**
     * @Route("/")
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
}
