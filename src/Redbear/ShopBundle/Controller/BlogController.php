<?php

namespace Redbear\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function showAction()
    {
        return $this->render('RedbearShopBundle:Blog:blog.html.twig');
    }
}