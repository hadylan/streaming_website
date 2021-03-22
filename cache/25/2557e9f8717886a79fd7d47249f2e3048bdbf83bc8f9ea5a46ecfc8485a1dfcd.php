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

/* index.master.html.twig */
class __TwigTemplate_346d1840f0d6881f805eed894e82cdfe0ac334e1791052f80d64e81508d82154 extends Template
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
        $this->loadTemplate("head.html.twig", "index.master.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"container-fluid d-flex flex-column justify-content-between\" style=\"height: 100vh\">

    <header class=\"row d-flex justify-content-between mt-4 ml-4 mr-4\">
        ";
        // line 11
        $this->loadTemplate("index.header.block.html.twig", "index.master.html.twig", 11)->display($context);
        // line 12
        echo "    </header>

    <main class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
        <section id=\"content\" class=\"row d-flex flex-column col-4\">

            ";
        // line 17
        if (( !(null === ($context["action"] ?? null)) && (($context["action"] ?? null) === "login"))) {
            // line 18
            echo "
            ";
            // line 19
            $this->loadTemplate("login.block.html.twig", "index.master.html.twig", 19)->display($context);
            // line 20
            echo "            <script src=\"assets/js/login.js\"></script>

            ";
        } else {
            // line 23
            echo "
            ";
            // line 24
            $this->loadTemplate("register.block.html.twig", "index.master.html.twig", 24)->display($context);
            // line 25
            echo "            <script src=\"assets/js/register.js\"></script>

            ";
        }
        // line 28
        echo "
        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex align-items-center justify-content-between\">
        ";
        // line 33
        $this->loadTemplate("footer.block.html.twig", "index.master.html.twig", 33)->display($context);
        // line 34
        echo "    </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  90 => 33,  83 => 28,  78 => 25,  76 => 24,  73 => 23,  68 => 20,  66 => 19,  63 => 18,  61 => 17,  54 => 12,  52 => 11,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    {% include('head.html.twig') %}
</head>

<body class=\"container-fluid d-flex flex-column justify-content-between\" style=\"height: 100vh\">

    <header class=\"row d-flex justify-content-between mt-4 ml-4 mr-4\">
        {% include('index.header.block.html.twig') %}
    </header>

    <main class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
        <section id=\"content\" class=\"row d-flex flex-column col-4\">

            {% if action is not null and action is same as ('login') %}

            {% include('login.block.html.twig') %}
            <script src=\"assets/js/login.js\"></script>

            {% else %}

            {% include('register.block.html.twig') %}
            <script src=\"assets/js/register.js\"></script>

            {% endif %}

        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
    </footer>

</body>

</html>", "index.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/index.master.html.twig");
    }
}
