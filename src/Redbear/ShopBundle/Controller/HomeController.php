<?php

namespace Redbear\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('RedbearShopBundle:General:index.html.twig');
    }
}