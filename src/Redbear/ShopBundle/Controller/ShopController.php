<?php

namespace Redbear\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function showAction()
    {
        return $this->render('RedbearShopBundle:Shop:shop.html.twig');
    }
}