<?php

/* RedbearShopBundle:Shop:shop.html.twig */
class __TwigTemplate_313709e8297d98455e071a13ded4d5f63322463a03473fb14e98470371fad5eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RedbearShopBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RedbearShopBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"rb-header\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p>Examples for selection, modal or page</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"rb-content\"> 
\t\t\t<div class=\"row\">
\t\t\t  \t<div class=\"col-md-3\">
\t\t\t    \t<a href=\"#\" class=\"thumbnail\">
\t\t\t      \t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/hyene-1257455213.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t    \t</a>
\t\t\t    \t<div class=\"simpleCart_shelfItem\">
\t\t\t\t\t  \t<h2 class=\"item_name\"> Awesome T-shirt </h2>
\t\t\t\t\t\t<p>  
\t\t\t\t\t\t\t<input type=\"text\" value=\"1\" class=\"item_Quantity\"><br>
\t\t\t\t\t  \t\t<span class=\"item_price\">35.99</span><br>
\t\t\t\t\t  \t\t<a class=\"item_add\" href=\"javascript:;\"> Add to Cart </a>
\t\t\t\t\t  \t</p>
\t\t\t\t\t</div>
\t\t\t  \t</div>
\t\t\t  \t<div class=\"col-md-3\">
\t\t\t    \t<a href=\"#\" class=\"thumbnail\">
\t\t\t      \t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/hyene-1257455213.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t    \t</a>
\t\t\t  \t</div>
\t\t\t  \t<div class=\"col-md-3\">
\t\t\t    \t<a href=\"#\" class=\"thumbnail\">
\t\t\t      \t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/hyene-1257455213.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t    \t</a>
\t\t\t  \t</div>
\t\t\t  \t<div class=\"col-md-3\">
\t\t\t    \t<a href=\"#\" class=\"thumbnail\">
\t\t\t      \t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/hyene-1257455213.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t    \t</a>
\t\t\t  \t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "RedbearShopBundle:Shop:shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 40,  70 => 35,  62 => 30,  46 => 17,  31 => 4,  28 => 3,);
    }
}
