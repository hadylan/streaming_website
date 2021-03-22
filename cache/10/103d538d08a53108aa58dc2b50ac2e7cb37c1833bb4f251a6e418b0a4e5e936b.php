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

/* accueil.header.block.html.twig */
class __TwigTemplate_f98a561b1feaa95488d2d24d2535bc67830c5d41ede83a092182d04c08bb4d88 extends Template
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

<nav class=\"mt-4 d-flex justify-content-around col-2 p-0\">
    <a href=\"./accueil.php\" class=\"text-white\">Accueil</a>
    <a href=\"./films.php\" class=\"text-white\">Films</a>
    <a href=\"./series.php\" class=\"text-white\">Séries</a>
    <!--<a href=\"#\" class=\"text-white\">Favoris</a>-->
</nav>

<div id=\"deux\" class=\"d-flex justify-content-end\">
    <div id=\"searchbar\" class=\"rounded-pill\">
    <form action=\"search.php\" method=\"get\" class=\"d-flex align-items-center justify-content-between\">
        <input type=\"text\" placeholder=\"Rechercher...\" id=\"search-bar\" class=\"w-75\" name=\"search\"/>
        <button type=\"submit\" class=\"p-0\" id=\"search_button\"><i id=\"icon\" class=\"fas fa-search\"></i></button>
    </form>
    </div>

    <div id=\"profil\" class=\"ml-2 d-flex rounded-circle\">
        <a href=\"./profil.php\">
            <img class=\"img-fluid rounded-circle w-100 h-100\"
                src=\"https://resize-elle.ladmedia.fr/r/625,,forcex/crop/625,804,center-middle,forcex,ffffff/img/var/plain_site/storage/images/societe/news/presidentielle-marine-le-pen-recueillerait-19-des-voix-1508283/16882253-1-fre-FR/Presidentielle-Marine-Le-Pen-recueillerait-19-des-voix.jpg\" />
        </a>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "accueil.header.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}

<div id=\"logo\">
    <img src=\"./assets/img/logoheader.png\" class=\"img-fluid\" />
</div>

<nav class=\"mt-4 d-flex justify-content-around col-2 p-0\">
    <a href=\"./accueil.php\" class=\"text-white\">Accueil</a>
    <a href=\"./films.php\" class=\"text-white\">Films</a>
    <a href=\"./series.php\" class=\"text-white\">Séries</a>
    <!--<a href=\"#\" class=\"text-white\">Favoris</a>-->
</nav>

<div id=\"deux\" class=\"d-flex justify-content-end\">
    <div id=\"searchbar\" class=\"rounded-pill\">
    <form action=\"search.php\" method=\"get\" class=\"d-flex align-items-center justify-content-between\">
        <input type=\"text\" placeholder=\"Rechercher...\" id=\"search-bar\" class=\"w-75\" name=\"search\"/>
        <button type=\"submit\" class=\"p-0\" id=\"search_button\"><i id=\"icon\" class=\"fas fa-search\"></i></button>
    </form>
    </div>

    <div id=\"profil\" class=\"ml-2 d-flex rounded-circle\">
        <a href=\"./profil.php\">
            <img class=\"img-fluid rounded-circle w-100 h-100\"
                src=\"https://resize-elle.ladmedia.fr/r/625,,forcex/crop/625,804,center-middle,forcex,ffffff/img/var/plain_site/storage/images/societe/news/presidentielle-marine-le-pen-recueillerait-19-des-voix-1508283/16882253-1-fre-FR/Presidentielle-Marine-Le-Pen-recueillerait-19-des-voix.jpg\" />
        </a>
    </div>
</div>

{% endblock %}", "accueil.header.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/accueil.header.block.html.twig");
    }
}
