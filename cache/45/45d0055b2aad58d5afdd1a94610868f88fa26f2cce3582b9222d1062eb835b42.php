<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* moviepage/product.master.html.twig */
class __TwigTemplate_2672b3ec387116bdb62917a8e9c6f692baa2c12b2db29a1da7ab89c23fdcf48f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    ";
        // line 5
        $this->loadTemplate("head.html.twig", "moviepage/product.master.html.twig", 5)->display($context);
        // line 6
        echo "    <link href=\"assets/css/product.css\" rel=\"stylesheet\">
</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    ";
        // line 12
        $this->loadTemplate("accueil/accueil.header.block.html.twig", "moviepage/product.master.html.twig", 12)->display($context);
        // line 13
        echo "    </header>

    <main class=\"row container-fluid m-0 flex-column justify-content-center mt-5 p-0\">
        <section id=\"content\" class=\" d-flex justify-content-center align-items-around flex-column\">
            ";
        // line 17
        if ((array_key_exists("play", $context) && (($context["play"] ?? null) === "true"))) {
            // line 18
            echo "                ";
            $this->loadTemplate("moviepage/product.play.html.twig", "moviepage/product.master.html.twig", 18)->display($context);
            // line 19
            echo "            ";
        } else {
            // line 20
            echo "                ";
            $this->loadTemplate("moviepage/product.block.html.twig", "moviepage/product.master.html.twig", 20)->display($context);
            // line 21
            echo "            ";
        }
        // line 22
        echo "        </section>
    </main>

    <footer id=\"footer\" class=\"fixed-bottom row p-3 d-flex align-items-center justify-content-between\">
        ";
        // line 26
        $this->loadTemplate("footer.block.html.twig", "moviepage/product.master.html.twig", 26)->display($context);
        // line 27
        echo "    </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "moviepage/product.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  81 => 26,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  61 => 17,  55 => 13,  53 => 12,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    {% include('head.html.twig') %}
    <link href=\"assets/css/product.css\" rel=\"stylesheet\">
</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    {% include('accueil/accueil.header.block.html.twig') %}
    </header>

    <main class=\"row container-fluid m-0 flex-column justify-content-center mt-5 p-0\">
        <section id=\"content\" class=\" d-flex justify-content-center align-items-around flex-column\">
            {% if play is defined and play is same as ('true') %}
                {% include('moviepage/product.play.html.twig') %}
            {% else %}
                {% include('moviepage/product.block.html.twig') %}
            {% endif %}
        </section>
    </main>

    <footer id=\"footer\" class=\"fixed-bottom row p-3 d-flex align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
    </footer>

</body>

</html>", "moviepage/product.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/moviepage/product.master.html.twig");
    }
}
