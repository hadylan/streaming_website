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

/* accueil.master.html.twig */
class __TwigTemplate_b5f5f3dce16d999ba74bf9b8068f07c1ef95546e216eeda26dbc744791efd720 extends Template
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
        $this->loadTemplate("head.html.twig", "accueil.master.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    ";
        // line 11
        $this->loadTemplate("accueil.header.block.html.twig", "accueil.master.html.twig", 11)->display($context);
        // line 12
        echo "    </header>

    <div id=\"banner\" class=\"mt-4 mb-2\" style=\"height: 30vh\"></div>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center mt-5\">
        <section id=\"content\" class=\"d-flex justify-content-center align-items-around flex-column w-100\">

        <h3 class=\"text-white\">Nouveautés films:</h3>
            ";
        // line 20
        $this->loadTemplate("accueil.movies.block.html.twig", "accueil.master.html.twig", 20)->display($context);
        // line 21
        echo "
        <h3 class=\"text-white\">Nouveautés séries :</h3>
            ";
        // line 23
        $this->loadTemplate("accueil.series.block.html.twig", "accueil.master.html.twig", 23)->display($context);
        // line 24
        echo "            
        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        ";
        // line 29
        $this->loadTemplate("footer.block.html.twig", "accueil.master.html.twig", 29)->display($context);
        // line 30
        echo "    </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "accueil.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  79 => 29,  72 => 24,  70 => 23,  66 => 21,  64 => 20,  54 => 12,  52 => 11,  45 => 6,  43 => 5,  37 => 1,);
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

    <div id=\"banner\" class=\"mt-4 mb-2\" style=\"height: 30vh\"></div>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center mt-5\">
        <section id=\"content\" class=\"d-flex justify-content-center align-items-around flex-column w-100\">

        <h3 class=\"text-white\">Nouveautés films:</h3>
            {% include('accueil.movies.block.html.twig') %}

        <h3 class=\"text-white\">Nouveautés séries :</h3>
            {% include('accueil.series.block.html.twig') %}
            
        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
    </footer>

</body>

</html>", "accueil.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/accueil.master.html.twig");
    }
}
