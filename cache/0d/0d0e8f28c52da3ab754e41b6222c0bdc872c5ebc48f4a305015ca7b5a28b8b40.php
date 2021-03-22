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

/* administration.master.html.twig */
class __TwigTemplate_b560fee66441188626ef5460c524db690e08d1f8e8cbd9b6403b3ff8ff0cb34a extends Template
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
        $this->loadTemplate("./head.html.twig", "administration.master.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
        ";
        // line 11
        $this->loadTemplate("./accueil.header.block.html.twig", "administration.master.html.twig", 11)->display($context);
        // line 12
        echo "    </header>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center mt-5\">
        <section id=\"content\" class=\"d-flex flex-wrap justify-content-between align-items-start col-12 flex-wrap\"
            style=\"overflow: hidden;\">

            ";
        // line 18
        $this->loadTemplate("./administration.addMovie.block.twig", "administration.master.html.twig", 18)->display($context);
        // line 19
        echo "
            ";
        // line 20
        $this->loadTemplate("./administration.updateMovie.block.twig", "administration.master.html.twig", 20)->display($context);
        // line 21
        echo "
            ";
        // line 22
        $this->loadTemplate("./administration.deleteMovie.block.twig", "administration.master.html.twig", 22)->display($context);
        // line 23
        echo "
            ";
        // line 24
        $this->loadTemplate("./administration.addGender.block.html.twig", "administration.master.html.twig", 24)->display($context);
        // line 25
        echo "            

        </section>
    </main>

    <footer id=\"footer\" class=\"fixed-bottom row p-3 d-flex align-items-center justify-content-between\">
        ";
        // line 31
        $this->loadTemplate("./footer.block.html.twig", "administration.master.html.twig", 31)->display($context);
        // line 32
        echo "    </footer>

    <script src=\"./assets/js/functions/fetchRessource.js\"></script>
    <script src=\"./assets/js/functions/getMovies.js\"></script>
    <script src=\"./assets/js/functions/updateMovie.js\"></script>
    <script src=\"./assets/js/functions/deleteMovie.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "administration.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  87 => 31,  79 => 25,  77 => 24,  74 => 23,  72 => 22,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  54 => 12,  52 => 11,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    {% include('./head.html.twig') %}
</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
        {% include('./accueil.header.block.html.twig') %}
    </header>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center mt-5\">
        <section id=\"content\" class=\"d-flex flex-wrap justify-content-between align-items-start col-12 flex-wrap\"
            style=\"overflow: hidden;\">

            {% include('./administration.addMovie.block.twig') %}

            {% include('./administration.updateMovie.block.twig') %}

            {% include('./administration.deleteMovie.block.twig') %}

            {% include('./administration.addGender.block.html.twig') %}
            

        </section>
    </main>

    <footer id=\"footer\" class=\"fixed-bottom row p-3 d-flex align-items-center justify-content-between\">
        {% include('./footer.block.html.twig') %}
    </footer>

    <script src=\"./assets/js/functions/fetchRessource.js\"></script>
    <script src=\"./assets/js/functions/getMovies.js\"></script>
    <script src=\"./assets/js/functions/updateMovie.js\"></script>
    <script src=\"./assets/js/functions/deleteMovie.js\"></script>

</body>

</html>", "administration.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/back-office/administration.master.html.twig");
    }
}
