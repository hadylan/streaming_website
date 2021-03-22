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

/* ./administration.addMovie.block.twig */
class __TwigTemplate_e444b7235ad1041b1a33e538b3c4c1fab89bc64f003a642a683164c234637633 extends Template
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
<form class=\"col-3 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/addmovie.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Titre</label>
        <input name=\"title\" type=\"text\" placeholder=\"Titre du film\" class=\"form-control\" id=\"inputTitle\"
            aria-describedby=\"emailHelp\">
        <div class=\"form-text\">75 chars max.</div>
    </div>
    <div class=\"mb-3\">
        <label for=\"inputDescription\" class=\"form-label\">Description</label>
        <input name=\"description\" placeholder=\"Description du film\" type=\"text\" class=\"form-control\"
            id=\"inputDescription\">
        <div class=\"form-text\">255 chars max.</div>
    </div>
    <div class=\"mb-3\">
        <label for=\"inputImage\" class=\"form-label\">Image du film</label>
        <input name=\"picture\" placeholder=\"Lien vers l'affiche du film\" type=\"text\" class=\"form-control\"
            id=\"inputImage\">
    </div>
    <div class=\"mb-4\">
        <label for=\"inputLink\" class=\"form-label\">Lien du film</label>
        <input name=\"link\" placeholder=\"Lien vers la bande annonce\" type=\"text\" class=\"form-control\" id=\"inputLink\">
    </div>
    <div class=\"mb-3\">
        <select name=\"id_category\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Catégorie\" for=\"inputCategorie\">
            <option selected>Catégorie</option>
            <option value=\"1\">Film</option>
            <option value=\"2\">Série</option>
        </select>
    </div>
    <div class=\"mb-2\">
        <select name=\"id_gender\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Genre\">
            <option selected>Genre</option>
            <option value=\"3\">Sciences</option>
            <option value=\"4\">Informatiques</option>
        </select>
    </div>
    <div class=\"mb-4\">
        <label for=\"inputYear\" class=\"form-label\">Année</label>
        <input name=\"year\" placeholder=\"Date de sortie du film\" type=\"text\" class=\"form-control\" id=\"inputYear\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "./administration.addMovie.block.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

<form class=\"col-3 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/addmovie.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Titre</label>
        <input name=\"title\" type=\"text\" placeholder=\"Titre du film\" class=\"form-control\" id=\"inputTitle\"
            aria-describedby=\"emailHelp\">
        <div class=\"form-text\">75 chars max.</div>
    </div>
    <div class=\"mb-3\">
        <label for=\"inputDescription\" class=\"form-label\">Description</label>
        <input name=\"description\" placeholder=\"Description du film\" type=\"text\" class=\"form-control\"
            id=\"inputDescription\">
        <div class=\"form-text\">255 chars max.</div>
    </div>
    <div class=\"mb-3\">
        <label for=\"inputImage\" class=\"form-label\">Image du film</label>
        <input name=\"picture\" placeholder=\"Lien vers l'affiche du film\" type=\"text\" class=\"form-control\"
            id=\"inputImage\">
    </div>
    <div class=\"mb-4\">
        <label for=\"inputLink\" class=\"form-label\">Lien du film</label>
        <input name=\"link\" placeholder=\"Lien vers la bande annonce\" type=\"text\" class=\"form-control\" id=\"inputLink\">
    </div>
    <div class=\"mb-3\">
        <select name=\"id_category\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Catégorie\" for=\"inputCategorie\">
            <option selected>Catégorie</option>
            <option value=\"1\">Film</option>
            <option value=\"2\">Série</option>
        </select>
    </div>
    <div class=\"mb-2\">
        <select name=\"id_gender\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Genre\">
            <option selected>Genre</option>
            <option value=\"3\">Sciences</option>
            <option value=\"4\">Informatiques</option>
        </select>
    </div>
    <div class=\"mb-4\">
        <label for=\"inputYear\" class=\"form-label\">Année</label>
        <input name=\"year\" placeholder=\"Date de sortie du film\" type=\"text\" class=\"form-control\" id=\"inputYear\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
</form>

{% endblock %}", "./administration.addMovie.block.twig", "/var/www/html/site_streaming/themes/classic/templates/back-office/administration.addMovie.block.twig");
    }
}
