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

/* ./accueil.header.block.html.twig */
class __TwigTemplate_47ca0bb08a5ca4c8a6c13b95d68303d4997ee5b8d9347b48fb73b8cbde2cd8d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div id=\"logo\">
    <img src=\"./assets/img/logoheader.png\" class=\"img-fluid\" />
</div>

<nav class=\"mt-4 d-flex justify-content-around col-8 col-sm-4 col-md-3 col-lg-2 p-0\">
    <a href=\"./accueil.php\" class=\"text-white\">Accueil</a>
    <a href=\"./films.php\" class=\"text-white\">Films</a>
    <a href=\"./series.php\" class=\"text-white\">Séries</a>
    <!--<a href=\"#\" class=\"text-white\">Favoris</a>-->
</nav>

<div id=\"search\" class=\"d-none justify-content-end d-md-flex\">
    <div id=\"searchbar\" class=\"rounded-pill\">
    <form action=\"search.php\" method=\"get\" class=\"d-flex align-items-center justify-content-between\">
        <input type=\"text\" placeholder=\"Rechercher...\" id=\"search-bar\" class=\"w-75\" name=\"search\"/>
        <button type=\"submit\" class=\"p-0\" id=\"search_button\"><i id=\"icon\" class=\"fas fa-search\"></i></button>
    </form>
    </div>

    <div id=\"profil\" class=\"ml-3 d-flex rounded-circle\">
        <a href=\"./profil.php\">
            <img class=\"img-fluid rounded-circle w-100 h-100\"
                src=\"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "picture", [], "any", false, false, false, 25);
        echo "\" />
        </a>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "./accueil.header.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}

<div id=\"logo\">
    <img src=\"./assets/img/logoheader.png\" class=\"img-fluid\" />
</div>

<nav class=\"mt-4 d-flex justify-content-around col-8 col-sm-4 col-md-3 col-lg-2 p-0\">
    <a href=\"./accueil.php\" class=\"text-white\">Accueil</a>
    <a href=\"./films.php\" class=\"text-white\">Films</a>
    <a href=\"./series.php\" class=\"text-white\">Séries</a>
    <!--<a href=\"#\" class=\"text-white\">Favoris</a>-->
</nav>

<div id=\"search\" class=\"d-none justify-content-end d-md-flex\">
    <div id=\"searchbar\" class=\"rounded-pill\">
    <form action=\"search.php\" method=\"get\" class=\"d-flex align-items-center justify-content-between\">
        <input type=\"text\" placeholder=\"Rechercher...\" id=\"search-bar\" class=\"w-75\" name=\"search\"/>
        <button type=\"submit\" class=\"p-0\" id=\"search_button\"><i id=\"icon\" class=\"fas fa-search\"></i></button>
    </form>
    </div>

    <div id=\"profil\" class=\"ml-3 d-flex rounded-circle\">
        <a href=\"./profil.php\">
            <img class=\"img-fluid rounded-circle w-100 h-100\"
                src=\"{{user[0].picture}}\" />
        </a>
    </div>
</div>

{% endblock %}", "./accueil.header.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/back-office/accueil.header.block.html.twig");
    }
}
