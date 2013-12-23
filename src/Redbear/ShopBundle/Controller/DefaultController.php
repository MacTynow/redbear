<?php

namespace Redbear\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RedbearShopBundle:Default:index.html.twig', array('name' => $name));
    }
}
