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

/* index/index.master.html.twig */
class __TwigTemplate_be33d431546e35f6b28449b8fdc6cfdd97b74d3cebda00e4148562b94b4119f6 extends Template
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
        // line 6
        echo "    ";
        $this->loadTemplate("./head.html.twig", "index/index.master.html.twig", 6)->display($context);
        // line 7
        echo "</head>

<body class=\"container-fluid d-flex flex-column justify-content-between\" style=\"height: 100vh\">

    <header class=\"row d-flex flex-column flex-md-row align-items-center justify-content-between mt-4 ml-4 mr-4\">
        ";
        // line 12
        $this->loadTemplate("index/index.header.block.html.twig", "index/index.master.html.twig", 12)->display($context);
        // line 13
        echo "    </header>

    ";
        // line 16
        echo "    <main class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
        <section id=\"content\" class=\"row d-flex flex-column col-sm-7 col-md-6 col-lg-5 col-xl-4\">

            ";
        // line 20
        echo "            ";
        if (( !(null === ($context["action"] ?? null)) && (($context["action"] ?? null) === "login"))) {
            // line 21
            echo "
            ";
            // line 22
            $this->loadTemplate("index/login.block.html.twig", "index/index.master.html.twig", 22)->display($context);
            // line 23
            echo "            <script src=\"assets/js/login.js\"></script>

            ";
        } else {
            // line 26
            echo "
            ";
            // line 27
            $this->loadTemplate("index/register.block.html.twig", "index/index.master.html.twig", 27)->display($context);
            // line 28
            echo "            <script src=\"assets/js/register.js\"></script>

            ";
        }
        // line 31
        echo "
        </section>
    </main>

    <footer id=\"footer\" class=\"row p-0 pb-2 d-flex align-items-center justify-content-between\">
        ";
        // line 36
        $this->loadTemplate("footer.block.html.twig", "index/index.master.html.twig", 36)->display($context);
        // line 37
        echo "    </footer>

</body>

</html>





";
    }

    public function getTemplateName()
    {
        return "index/index.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  94 => 36,  87 => 31,  82 => 28,  80 => 27,  77 => 26,  72 => 23,  70 => 22,  67 => 21,  64 => 20,  59 => 16,  55 => 13,  53 => 12,  46 => 7,  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    {# include used for assemble a page cuted in differents parts #}
    {% include('./head.html.twig') %}
</head>

<body class=\"container-fluid d-flex flex-column justify-content-between\" style=\"height: 100vh\">

    <header class=\"row d-flex flex-column flex-md-row align-items-center justify-content-between mt-4 ml-4 mr-4\">
        {% include('index/index.header.block.html.twig') %}
    </header>

    {# main contain all principal components, login form or register form #}
    <main class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
        <section id=\"content\" class=\"row d-flex flex-column col-sm-7 col-md-6 col-lg-5 col-xl-4\">

            {# this if / else conditionnal display form following the current value of action variable #}
            {% if action is not null and action is same as ('login') %}

            {% include('index/login.block.html.twig') %}
            <script src=\"assets/js/login.js\"></script>

            {% else %}

            {% include('index/register.block.html.twig') %}
            <script src=\"assets/js/register.js\"></script>

            {% endif %}

        </section>
    </main>

    <footer id=\"footer\" class=\"row p-0 pb-2 d-flex align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
    </footer>

</body>

</html>





", "index/index.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/index/index.master.html.twig");
    }
}
