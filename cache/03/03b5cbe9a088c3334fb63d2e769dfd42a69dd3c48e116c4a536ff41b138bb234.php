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

/* ./administration.addGender.block.html.twig */
class __TwigTemplate_519e8d254f7f9ceb2c5fcd17ed862dc4b3a6083a2a096a10cf9f89b4d985e941 extends Template
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
        echo "<form class=\"col-3 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/addGender.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Titre du nouveau genre</label>
        <input name=\"genre\" type=\"text\" placeholder=\"Titre du genre\" class=\"form-control\" id=\"inputTitle\"
            aria-describedby=\"emailHelp\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "./administration.addGender.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
<form class=\"col-3 bg-light p-4 rounded\" method=\"POST\" action=\"./php_scripts/addGender.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Titre du nouveau genre</label>
        <input name=\"genre\" type=\"text\" placeholder=\"Titre du genre\" class=\"form-control\" id=\"inputTitle\"
            aria-describedby=\"emailHelp\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
</form>
{% endblock %}", "./administration.addGender.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/back-office/administration.addGender.block.html.twig");
    }
}
