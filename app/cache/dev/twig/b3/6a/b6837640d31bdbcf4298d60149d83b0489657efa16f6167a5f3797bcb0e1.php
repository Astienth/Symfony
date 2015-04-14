<?php

/* TripleTriadeBundle:TripleTriade:index.html.twig */
class __TwigTemplate_b36ab6837640d31bdbcf4298d60149d83b0489657efa16f6167a5f3797bcb0e1 extends Twig_Template
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
            'tripletriade_body' => array($this, 'block_tripletriade_body'),
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_tripletriade_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Liste des cartes</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCards"]) ? $context["listCards"] : $this->getContext($context, "listCards")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("triple_triade_view", array("id" => $this->getAttribute($context["card"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "title", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li>Pas (encore !) de cartes</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>

";
    }

    public function getTemplateName()
    {
        return "TripleTriadeBundle:TripleTriade:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  77 => 21,  68 => 17,  64 => 16,  61 => 15,  56 => 14,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
