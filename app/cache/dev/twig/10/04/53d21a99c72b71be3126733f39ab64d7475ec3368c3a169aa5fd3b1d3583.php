<?php

/* RedbearShopBundle::layout.html.twig */
class __TwigTemplate_100453d21a99c72b71be3126733f39ab64d7475ec3368c3a169aa5fd3b1d3583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <header>        
        <nav class=\"navbar navbar-default navbar-fixed-top rb-navbar\" role=\"navigation\">
            <div class=\"container\">                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                          <span class=\"sr-only\">Toggle navigation</span>
                          <span class=\"icon-bar\"></span>
                          <span class=\"icon-bar\"></span>
                          <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("redbear_homepage");
        echo "\">RedBear</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("redbear_shop");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("redbear_blog");
        echo "\">Blog</a></li>
                    </ul>
                    <ul class=\"navbar-form navbar-right\" role=\"search\">
                        <button type=\"button\" class=\"btn btn-default\" id=\"cartbutton\" class=\"btn btn-default\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"bottom\" title=\"Cart\">
                            <i class=\"fa fa-shopping-cart\"></i>
                            <span class=\"simpleCart_quantity\"></span> items -
                            <span class=\"simpleCart_total\"></span>
                        </button>
                    </ul>
                </div>
            </div>
        </nav>  
    </header>
        
    <body>       
        <div id=\"cart_content_wrapper\" style=\"display: none\" class=\"col-md-5\">
            <div class=\"simpleCart_items\"></div>
            <a href=\"javascript:;\" class=\"simpleCart_empty\"></a>
            <a href=\"javascript:;\" class=\"simpleCart_checkout\">Checkout</a>
        </div>
        ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "    </body>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "RedbearShopBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 41,  81 => 42,  79 => 41,  56 => 21,  52 => 20,  44 => 15,  32 => 5,  29 => 4,);
    }
}
