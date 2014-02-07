<?php

/* RedbearResumeBundle:Default:index.html.twig */
class __TwigTemplate_f348f61a5835ca189bc8466b400690f9f3e15bbc6c7a3609c1ec7b2ac54d9d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    </body>
    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Charles Martinot - IT Engineer";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/redbear.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "            <div class=\"jumbotron jumbotron-ad hidden-print\">
                <div class=\"container\"> 
                    <div class=\"col-md-9\">
                        <h1>
                            <i class=\"fa fa-terminal\"></i>
                              Charles Martinot
                        </h1>
                        <h2>
                            IT Engineer
                        </h2>
                        <p>
                            Graduated as engineer from a recognized French IT engineering school, which program included a 3 year part-time “work and study” at Sagem/Safran. I want to expand my knowledge and my international experience by working in Thailand. I am a hard worker, willing to learn, I am very adaptable and I know that I am a valuable asset for the team I’m working with.
                        </p>
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"#\" class=\"thumbnail\">
                            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cvpicture.gif"), "html", null, true);
        echo "\" alt=\"This is me!\">
                        </a>
                    </div>
                </div>                
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <h1>Experience</h1>
                    </div>
                    <div class=\"col-md-5\">                        
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/BlankMap-World6-Equirectangular.svg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Where I worked\">
                    </div>
                    <div class=\"col-md-2\">
                        <h3>Contact me</h3>
                        <i class=\"fa fa-linkedin\">http://www.linkedin.com/</i>
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <h1>Education</h1>
                    <h1>Skills</h1>
                    <h1>Languages</h1>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
                            <span class=\"sr-only\">100% Complete (success)</span>
                        </div>
                        English : full professional proficiency
                    </div>
                    <h1>Hobbies</h1>
                </div>                
            </div>              
        ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "            <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" />
    ";
    }

    public function getTemplateName()
    {
        return "RedbearResumeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  140 => 65,  137 => 64,  112 => 42,  98 => 31,  80 => 15,  77 => 14,  71 => 9,  67 => 8,  62 => 7,  59 => 6,  53 => 5,  49 => 68,  47 => 64,  44 => 63,  42 => 14,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }
}
