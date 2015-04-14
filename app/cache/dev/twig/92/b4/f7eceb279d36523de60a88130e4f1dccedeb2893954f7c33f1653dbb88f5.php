<?php

/* TripleTriadeBundle:TripleTriade:view.html.twig */
class __TwigTemplate_92b4f7eceb279d36523de60a88130e4f1dccedeb2893954f7c33f1653dbb88f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("TripleTriadeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'triple_triade_body' => array($this, 'block_triple_triade_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TripleTriadeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Lecture d'une carte - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_triple_triade_body($context, array $blocks = array())
    {
        // line 10
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("triple_triade_homepage");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "TripleTriadeBundle:TripleTriade:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  63 => 14,  55 => 11,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
