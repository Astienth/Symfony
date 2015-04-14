<?php

/* ::baseTripleTriade.html.twig */
class __TwigTemplate_ac6fabb2e39c310b2d3417972668e678518f845ca5029ec193c41765e13beff7 extends Twig_Template
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
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Bienvenu sur Triple Triade</h1>
      <p>
        Ce projet décrit les cartes du jeu de Final Fantasy VIII.
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les Cartes</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("triple_triade_homepage");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("triple_triade_homepage");
        echo "\">Ajouter une </a></li>
        </ul>

        <h4>Dernières cartes</h4>
        ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TripleTriadeBundle:TripleTriade:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Triple Triade";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "        ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        // line 50
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::baseTripleTriade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  123 => 49,  120 => 48,  116 => 37,  113 => 36,  108 => 11,  106 => 10,  103 => 9,  97 => 7,  91 => 53,  89 => 48,  82 => 44,  74 => 38,  72 => 36,  66 => 33,  59 => 29,  55 => 28,  38 => 13,  36 => 9,  31 => 7,  23 => 1,);
    }
}
