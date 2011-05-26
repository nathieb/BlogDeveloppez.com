<?php

namespace CSF\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSFBlogBundle:Default:index.html.twig');
    }
}
