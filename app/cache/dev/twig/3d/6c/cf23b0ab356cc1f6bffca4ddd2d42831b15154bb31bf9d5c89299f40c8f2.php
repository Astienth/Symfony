<?php

/* TripleTriadeBundle:TripleTriade:menu.html.twig */
class __TwigTemplate_3d6ccf23b0ab356cc1f6bffca4ddd2d42831b15154bb31bf9d5c89299f40c8f2 extends Twig_Template
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

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCards"]) ? $context["listCards"] : $this->getContext($context, "listCards")));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 6
            echo "    <li>
      <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("triple_triade_view", array("id" => $this->getAttribute($context["card"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TripleTriadeBundle:TripleTriade:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  35 => 8,  31 => 7,  28 => 6,  24 => 5,  19 => 2,);
    }
}
