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

/* ./administration.updateMovie.block.twig */
class __TwigTemplate_ab13040ae79cb129d766973c1c58141b4f99e885c41e532a5ecaa65a37f9a359 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<form class=\"col-3 offset-1 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/updateMovie.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Film / Série à modifier :</label>
        <select id=\"update_movie\" onchange=\"getUpdate()\" class=\"form-select text-grey mb-3 w-100\">
            <option selected>Selectionnez un film</option>
        </select>
        <div class=\"mb-3 d-none\">
            <label for=\"inputTitle\" class=\"form-label\">ID</label>
            <input name=\"id\" type=\"text\" placeholder=\"\" class=\"form-control\" id=\"id\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"inputTitle\" class=\"form-label\">Titre</label>
            <input name=\"title\" type=\"text\" placeholder=\"Titre du site\" class=\"form-control\" id=\"titleToUpdate\"
                aria-describedby=\"emailHelp\">
            <div class=\"form-text\">75 chars max.</div>
        </div>
        <div class=\"mb-3\">
            <label for=\"inputDescription\" class=\"form-label\">Description</label>
            <input name=\"description\" placeholder=\"Description du film\" type=\"text\" class=\"form-control\"
                id=\"descriptionToUpdate\">
            <div class=\"form-text\">255 chars max.</div>
        </div>
        <div class=\"mb-3\">
            <label for=\"inputImage\" class=\"form-label\">Image du film</label>
            <input name=\"picture\" placeholder=\"Lien vers l'affiche du film\" type=\"text\" class=\"form-control\"
                id=\"pictureToUpdate\">
        </div>
        <div class=\"mb-4\">
            <label for=\"inputLink\" class=\"form-label\">Lien du film</label>
            <input name=\"link\" placeholder=\"Lien vers la bande annonce\" type=\"text\" class=\"form-control\"
                id=\"linkToUpdate\">
        </div>
        <div class=\"mb-3\">
            <select name=\"id_category\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Catégorie\"
                for=\"inputCategorie\" id=\"categoryToUpdate\">
                <option selected>Catégorie</option>
            </select>
        </div>
        <div class=\"mb-2\">
            <select name=\"id_gender\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Genre\" id=\"genderToUpdate\">
                <option selected>Genre</option>
            </select>
        </div>
        <div class=\"mb-4\">
            <label for=\"year\" class=\"form-label\">Année</label>
            <input name=\"year\" placeholder=\"Date de sortie du film\" type=\"text\" class=\"form-control\" id=\"yearToUpdate\">
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "./administration.updateMovie.block.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

<form class=\"col-3 offset-1 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/updateMovie.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Film / Série à modifier :</label>
        <select id=\"update_movie\" onchange=\"getUpdate()\" class=\"form-select text-grey mb-3 w-100\">
            <option selected>Selectionnez un film</option>
        </select>
        <div class=\"mb-3 d-none\">
            <label for=\"inputTitle\" class=\"form-label\">ID</label>
            <input name=\"id\" type=\"text\" placeholder=\"\" class=\"form-control\" id=\"id\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"inputTitle\" class=\"form-label\">Titre</label>
            <input name=\"title\" type=\"text\" placeholder=\"Titre du site\" class=\"form-control\" id=\"titleToUpdate\"
                aria-describedby=\"emailHelp\">
            <div class=\"form-text\">75 chars max.</div>
        </div>
        <div class=\"mb-3\">
            <label for=\"inputDescription\" class=\"form-label\">Description</label>
            <input name=\"description\" placeholder=\"Description du film\" type=\"text\" class=\"form-control\"
                id=\"descriptionToUpdate\">
            <div class=\"form-text\">255 chars max.</div>
        </div>
        <div class=\"mb-3\">
            <label for=\"inputImage\" class=\"form-label\">Image du film</label>
            <input name=\"picture\" placeholder=\"Lien vers l'affiche du film\" type=\"text\" class=\"form-control\"
                id=\"pictureToUpdate\">
        </div>
        <div class=\"mb-4\">
            <label for=\"inputLink\" class=\"form-label\">Lien du film</label>
            <input name=\"link\" placeholder=\"Lien vers la bande annonce\" type=\"text\" class=\"form-control\"
                id=\"linkToUpdate\">
        </div>
        <div class=\"mb-3\">
            <select name=\"id_category\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Catégorie\"
                for=\"inputCategorie\" id=\"categoryToUpdate\">
                <option selected>Catégorie</option>
            </select>
        </div>
        <div class=\"mb-2\">
            <select name=\"id_gender\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Genre\" id=\"genderToUpdate\">
                <option selected>Genre</option>
            </select>
        </div>
        <div class=\"mb-4\">
            <label for=\"year\" class=\"form-label\">Année</label>
            <input name=\"year\" placeholder=\"Date de sortie du film\" type=\"text\" class=\"form-control\" id=\"yearToUpdate\">
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
</form>

{% endblock %}", "./administration.updateMovie.block.twig", "/var/www/html/site_streaming/themes/classic/templates/back-office/administration.updateMovie.block.twig");
    }
}
