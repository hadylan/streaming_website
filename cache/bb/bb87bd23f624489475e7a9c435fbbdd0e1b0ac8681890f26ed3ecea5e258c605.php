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

/* head.html.twig */
class __TwigTemplate_efe7ebfbcd3269df839bd5bd96b5ca43d360c079156d12769e625e5a0f5dd512 extends Template
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
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <meta charset=\"utf-8\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
        integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\"
        integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\" crossorigin=\"anonymous\">
    </script>

    <!-- Styles -->
    <link href=\"assets/css/general.css\" rel=\"stylesheet\">
    
    ";
        // line 17
        if ((((((($context["title"] ?? null) === "UniStream - Accueil") || (        // line 18
($context["title"] ?? null) === "UniStream - Series")) || (        // line 19
($context["title"] ?? null) === "UniStream - Recherche")) || (        // line 20
($context["title"] ?? null) === "UniStream - Profil")) || (        // line 21
($context["title"] ?? null) === "UniStream - Films"))) {
            // line 22
            echo "
        <link href=\"assets/css/accueil.css\" rel=\"stylesheet\">

    ";
        }
        // line 26
        echo "
    <!-- Icons Kits-->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/f1594120be.js\" crossorigin=\"anonymous\"></script>

    <title>";
        // line 31
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["title"] ?? null);
    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  76 => 26,  70 => 22,  68 => 21,  67 => 20,  66 => 19,  65 => 18,  64 => 17,  47 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% block head %}
    <meta charset=\"utf-8\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
        integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\"
        integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\" crossorigin=\"anonymous\">
    </script>

    <!-- Styles -->
    <link href=\"assets/css/general.css\" rel=\"stylesheet\">
    
    {% if title is same as ('UniStream - Accueil') 
    or title is same as ('UniStream - Series') 
    or title is same as ('UniStream - Recherche') 
    or title is same as ('UniStream - Profil')
    or title is same as ('UniStream - Films') %}

        <link href=\"assets/css/accueil.css\" rel=\"stylesheet\">

    {% endif %}

    <!-- Icons Kits-->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/f1594120be.js\" crossorigin=\"anonymous\"></script>

    <title>{% block title %}{{title}}{% endblock %}</title>

    {% endblock %}", "head.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/head.html.twig");
    }
}
