<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_225564779a6757fb9dd08d7a317bccdbb050bbd4cbb30a45218e9aa05462209d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>

<div id=\"menu\">
    ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu"));
        echo "
</div>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  50 => 7,  44 => 17,  42 => 15,  21 => 2,  36 => 12,  31 => 6,  28 => 7,);
    }
}
