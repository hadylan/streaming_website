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

/* ./administration.deleteMovie.block.twig */
class __TwigTemplate_32d828ca5e7021490848da4a3d457e77cb84ee2078440bc88a20c5bf208ea821 extends Template
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
<form class=\"col-3 offset-1 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/deleteMovie.php\">
    <div class=\"mb-2\">
        <label for=\"select_movie\" class=\"form-label\">Film / Série à supprimer :</label>
        <select name=\"movie\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Genre\" id=\"select_movie\">
            <option selected>Selectionnez un film</option>
        </select>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "./administration.deleteMovie.block.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

<form class=\"col-3 offset-1 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/deleteMovie.php\">
    <div class=\"mb-2\">
        <label for=\"select_movie\" class=\"form-label\">Film / Série à supprimer :</label>
        <select name=\"movie\" class=\"form-select text-grey mb-3 w-100\" aria-label=\"Genre\" id=\"select_movie\">
            <option selected>Selectionnez un film</option>
        </select>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>
</form>

{% endblock %}", "./administration.deleteMovie.block.twig", "/var/www/html/site_streaming/themes/classic/templates/back-office/administration.deleteMovie.block.twig");
    }
}
