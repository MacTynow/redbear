<?php

namespace Redbear\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RedbearResumeBundle:Default:index.html.twig');
    }
}
