<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_96604c0d1c10b51b6ac4f3e9901e7e6f62cddec85af68417d771f1d0bca2ecf9 extends Twig_Template
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
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Affichage d'une annonce</h1>

    <p>
      ";
        // line 13
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </p>

    <p>
      Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id"), "html", null, true);
        echo "<br />
      Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
    </p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  45 => 16,  36 => 14,  31 => 13,  19 => 2,);
    }
}