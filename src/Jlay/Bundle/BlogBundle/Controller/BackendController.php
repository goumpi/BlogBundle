<?php

namespace Jlay\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BackendController extends Controller
{
    /**
     * @Route("/admin")
     * @Template()
     */
    public function indexAction()
    {
        return array('siteName' => 'Blog');
    }

    /**
     * @Route("/admin/snippets")
     * @Template()
     */
    public function snippetsAction()
    {
        return array('siteName' => 'Blog');
    }

}
