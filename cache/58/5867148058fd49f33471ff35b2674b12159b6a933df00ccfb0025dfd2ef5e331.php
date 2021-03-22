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

/* profil.master.html.twig */
class __TwigTemplate_94dd4a9eea1c7eaa510c8ee4c1c46e5aff03f4d00c4b199a5caa80b374167911 extends Template
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
        $this->loadTemplate("head.html.twig", "profil.master.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"container-fluid d-flex flex-column p-0\" style=\"height: 100vh\">

    <header class=\"row d-flex align-items-center justify-content-between mt-4 mb-4 ml-4 mr-4\">
    ";
        // line 11
        $this->loadTemplate("accueil.header.block.html.twig", "profil.master.html.twig", 11)->display($context);
        // line 12
        echo "    </header>

    <main class=\"row container-fluid m-0 flex-column align-items-center justify-content-center mt-5\">
        <section id=\"content\" class=\"d-flex flex-column justify-content-center align-items-center w-100 flex-wrap\" style=\"overflow: hidden;\">
            ";
        // line 16
        if ((array_key_exists("action", $context) && (($context["action"] ?? null) === "editProfil"))) {
            // line 17
            echo "                ";
            $this->loadTemplate("editprofil.content.block.html.twig", "profil.master.html.twig", 17)->display($context);
            // line 18
            echo "            ";
        } else {
            // line 19
            echo "                ";
            $this->loadTemplate("profil.content.block.html.twig", "profil.master.html.twig", 19)->display($context);
            // line 20
            echo "            ";
        }
        // line 21
        echo "        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        ";
        // line 25
        $this->loadTemplate("footer.block.html.twig", "profil.master.html.twig", 25)->display($context);
        // line 26
        echo "    </footer>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "profil.master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  80 => 25,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  60 => 16,  54 => 12,  52 => 11,  45 => 6,  43 => 5,  37 => 1,);
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
        <section id=\"content\" class=\"d-flex flex-column justify-content-center align-items-center w-100 flex-wrap\" style=\"overflow: hidden;\">
            {% if action is defined and action is same as ('editProfil') %}
                {% include('editprofil.content.block.html.twig') %}
            {% else %}
                {% include('profil.content.block.html.twig') %}
            {% endif %}
        </section>
    </main>

    <footer id=\"footer\" class=\"row mb-4 ml-3 mr-3 p-0 d-flex fixed-bottom align-items-center justify-content-between\">
        {% include('footer.block.html.twig') %}
    </footer>

</body>

</html>
", "profil.master.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/profil.master.html.twig");
    }
}
