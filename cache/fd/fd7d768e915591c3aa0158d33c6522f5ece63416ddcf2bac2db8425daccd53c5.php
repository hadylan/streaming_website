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

/* accueil/accueil.master.html.twig */
class __TwigTemplate_483948af2a223a57292cebf2ffeb353206d31ede9dd51b843cd54afc1ecaa7f6 extends Template
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
        $this->loadTemplate("head.html.twig", "accueil/accueil.master.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"container-fluid m-0 p-0 d-flex flex-column justify-content-between\">

    <header class=\"row d-flex flex-column flex-sm-row align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    ";
        // line 11
        $this->loadTemplate("accueil/accueil.header.block.html.twig", "accueil/accueil.master.html.twig", 11)->display($context);
        // line 12
        echo "    </header>

    <div id=\"banner\" class=\"mt-4 mb-5 d-none d-md-block\" style=\"height: 30vh\"></div>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center\">
        <section id=\"content\" class=\"mt-5 d-flex justify-content-center align-items-around flex-column w-100\">

        <h3 class=\"text-white mb-0 mb-lg-4\">Nouveautés films:</h3>
                ";
        // line 20
        $this->loadTemplate("accueil/accueil.movies.block.html.twig", "accueil/accueil.master.html.twig", 20)->display($context);
        // line 21
        echo "
        <h3 class=\"text-white mt-5 mb-0 mb-lg-4\">Nouveautés séries :</h3>
                ";
        // line 23
        $this->loadTemplate("accueil/accueil.series.block.html.twig", "accueil/accueil.master.html.twig", 23)->display($context);
        // line 24
        echo "            
        </section>
    </main>

    <footer id=\"footer\" class=\"fixed-bottom row p-3 d-flex align-items-center justify-content-between\">
        ";
        // line 29
        $this->loadTemplate("footer.block.html.twig", "accueil/accueil.master.html.twig", 29)->display($context);
        // line 30
        echo "    </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "accueil/accueil.master.html.twig";
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

<body class=\"container-fluid m-0 p-0 d-flex flex-column justify-content-between\">

    <header class=\"row d-flex flex-column flex-sm-row align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    {% include('accueil/accueil.header.block.html.twig') %}
    </header>

    <div id=\"banner\" class=\"mt-4 mb-5 d-none d-md-block\" style=\"height: 30vh\"></div>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center\">
        <section id=\"content\" class=\"mt-5 d-flex justify-content-center align-items-around flex-column w-100\">

        <h3 class=\"text-white mb-0 mb-lg-4\">Nouveautés films:</h3>
                {% include('accueil/accueil.movies.block.html.twig') %}

        <h3 class=\"text-white mt-5 mb-0 mb-lg-4\">Nouveautés séries :</h3>
                {% include('accueil/accueil.series.block.html.twig') %}
            
        </section>
    </main>

    <footer id=\"footer\" class=\"fixed-bottom row p-3 d-flex align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
    </footer>

</body>

</html>", "accueil/accueil.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/accueil/accueil.master.html.twig");
    }
}
