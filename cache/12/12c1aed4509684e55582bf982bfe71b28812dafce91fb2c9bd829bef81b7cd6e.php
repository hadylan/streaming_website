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

/* product.master.html.twig */
class __TwigTemplate_dbb5b1fdeeb3045d52a344ce763fa5f0b24cbc65e171ddf4650f6187af46353e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'footer' => [$this, 'block_footer'],
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
        $this->loadTemplate("head.html.twig", "product.master.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "    <link href=\"assets/css/product.css\" rel=\"stylesheet\">
</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    ";
        // line 13
        $this->loadTemplate("accueil.header.block.html.twig", "product.master.html.twig", 13)->display($context);
        // line 14
        echo "    </header>

    <main class=\"row container-fluid m-0 flex-column justify-content-center mt-5 p-0\">
        <section id=\"content\" class=\" d-flex justify-content-center align-items-around flex-column\">
            ";
        // line 18
        if ((array_key_exists("play", $context) && (($context["play"] ?? null) === "true"))) {
            // line 19
            echo "                ";
            $this->loadTemplate("product.play.html.twig", "product.master.html.twig", 19)->display($context);
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                ";
            $this->loadTemplate("product.block.html.twig", "product.master.html.twig", 21)->display($context);
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        ";
        // line 27
        $this->loadTemplate("footer.block.html.twig", "product.master.html.twig", 27)->display($context);
        // line 28
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "    </footer>

</body>

</html>";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "product.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  99 => 6,  91 => 29,  88 => 28,  86 => 27,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  66 => 18,  60 => 14,  58 => 13,  50 => 7,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    {% include('head.html.twig') %}
    {% block head %}{% endblock %}
    <link href=\"assets/css/product.css\" rel=\"stylesheet\">
</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    {% include('accueil.header.block.html.twig') %}
    </header>

    <main class=\"row container-fluid m-0 flex-column justify-content-center mt-5 p-0\">
        <section id=\"content\" class=\" d-flex justify-content-center align-items-around flex-column\">
            {% if play is defined and play is same as ('true') %}
                {% include('product.play.html.twig') %}
            {% else %}
                {% include('product.block.html.twig') %}
            {% endif %}
        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
        {% block footer %}{% endblock %}
    </footer>

</body>

</html>", "product.master.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/product.master.html.twig");
    }
}
