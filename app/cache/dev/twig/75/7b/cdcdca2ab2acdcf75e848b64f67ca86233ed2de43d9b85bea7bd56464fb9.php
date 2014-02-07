<?php

/* RedbearShopBundle:General:index.html.twig */
class __TwigTemplate_757bcdcdca2ab2acdcf75e848b64f67ca86233ed2de43d9b85bea7bd56464fb9 extends Twig_Template
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
        echo "<div class=\"rb-header\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div id=\"carousel-homepage\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t<li data-target=\"#carousel-homepage\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t<li data-target=\"#carousel-homepage\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t<li data-target=\"#carousel-homepage\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>

\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t  \t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/siam-night-market-long-exposure.jpg"), "html", null, true);
        echo "\" alt=\"Hihihihi\">
\t\t\t\t\t\t  \t<div class=\"carousel-caption\">\t\t\t\t    \t\t\t\t\t        
\t\t\t\t\t            <h1>Stuff from Bangkok night markets</h1>
\t\t\t\t\t            <p>Some text</p>
\t\t\t\t\t            <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more</a></p>
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/siam-night-market-long-exposure.jpg"), "html", null, true);
        echo "\" alt=\"Hihihihi\">
\t\t\t\t\t\t  \t<div class=\"carousel-caption\">\t\t\t\t    \t\t\t\t\t        
\t\t\t\t\t            <h1>Stuff from Bangkok night markets</h1>
\t\t\t\t\t            <p>Some text</p>
\t\t\t\t\t            <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more</a></p>
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t</div>
            \t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/siam-night-market-long-exposure.jpg"), "html", null, true);
        echo "\" alt=\"Hihihihi\">
\t\t\t\t\t\t  \t<div class=\"carousel-caption\">\t\t\t\t    \t\t\t\t\t        
\t\t\t\t\t            <h1>Stuff from Bangkok night markets</h1>
\t\t\t\t\t            <p>Some text</p>
\t\t\t\t\t            <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more</a></p>
\t\t\t\t\t  \t\t</div>
            \t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<a class=\"left carousel-control\" href=\"#carousel-homepage\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"right carousel-control\" href=\"#carousel-homepage\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RedbearShopBundle:General:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 33,  57 => 25,  46 => 17,  31 => 4,  28 => 3,);
    }
}
