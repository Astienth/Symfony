<?php

/* TripleTriadeBundle::layout.html.twig */
class __TwigTemplate_ebf1f43a5febb012d9bc9615cf53dd81f8e01c9f504e7e50324796aeba4ecccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::baseTripleTriade.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'triple_triade_body' => array($this, 'block_triple_triade_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseTripleTriade.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Triple Triade - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Cartes</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('triple_triade_body', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 17
    public function block_triple_triade_body($context, array $blocks = array())
    {
        // line 18
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TripleTriadeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  68 => 17,  63 => 19,  60 => 17,  54 => 12,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  11 => 3,);
    }
}
