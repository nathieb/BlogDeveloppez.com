<?php

namespace BlogAppli\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogAppliBlogBundle:Main:index.html.twig');
    }
    
    public function welcomeAction()
    {
        return $this->render('BlogAppliBlogBundle:Main:welcome.html.twig');
    }
}
