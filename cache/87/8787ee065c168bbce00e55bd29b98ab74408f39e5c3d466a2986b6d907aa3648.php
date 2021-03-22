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

/* series.master.html.twig */
class __TwigTemplate_f10c98256000ed4c7567f5c239527f4331613d0128d89667f686a44c657aff6d extends Template
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
        $this->loadTemplate("head.html.twig", "series.master.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    ";
        // line 11
        $this->loadTemplate("accueil.header.block.html.twig", "series.master.html.twig", 11)->display($context);
        // line 12
        echo "    </header>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center mt-5\">
        <section id=\"content\" class=\"d-flex justify-content-center align-items-start w-100 flex-wrap\" style=\"overflow: hidden;\">
                ";
        // line 16
        $this->loadTemplate("movies.block.html.twig", "series.master.html.twig", 16)->display($context);
        // line 17
        echo "        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        ";
        // line 21
        $this->loadTemplate("footer.block.html.twig", "series.master.html.twig", 21)->display($context);
        // line 22
        echo "    </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "series.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  68 => 21,  62 => 17,  60 => 16,  54 => 12,  52 => 11,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    {% include('head.html.twig') %}
</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    {% include('accueil.header.block.html.twig') %}
    </header>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center mt-5\">
        <section id=\"content\" class=\"d-flex justify-content-center align-items-start w-100 flex-wrap\" style=\"overflow: hidden;\">
                {% include('movies.block.html.twig') %}
        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
    </footer>

</body>

</html>", "series.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/series.master.html.twig");
    }
}
