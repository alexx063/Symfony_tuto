<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_67029cac46b477fb47b6d7aae4176c1c42c9e18a02f67d3a7d37f11e3b3db075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<html>
  <body>
    Hello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
    ";
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => 7));
        echo "\" method=\"POST\">
\t<input name=\"pseudo\" value=\"blcg\"/>
\t<input type=\"submit\"/>
</form >
<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => 7, "name" => "alex")), "html", null, true);
        echo "\">
    Lien vers l'annonce d'id 
</a>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  31 => 9,  28 => 8,  24 => 5,  19 => 2,);
    }
}
