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

/* ./administration.addCategory.block.twig */
class __TwigTemplate_e6f1c1585fb30ff32aacb4b6143a9a68e8a15185a8f051e1d0b8f26b17935778 extends Template
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
        echo "<form class=\"col-3 bg-light p-4 rounded\" method=\"POST\" action=\"./addCategory.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Titre de la nouvelle catégorie</label>
        <input name=\"category\" type=\"text\" placeholder=\"Titre de la catégorie\" class=\"form-control\" id=\"inputTitle\"
            aria-describedby=\"emailHelp\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "./administration.addCategory.block.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
<form class=\"col-3 bg-light p-4 rounded\" method=\"POST\" action=\"./addCategory.php\">
    <div class=\"mb-3\">
        <label for=\"inputTitle\" class=\"form-label\">Titre de la nouvelle catégorie</label>
        <input name=\"category\" type=\"text\" placeholder=\"Titre de la catégorie\" class=\"form-control\" id=\"inputTitle\"
            aria-describedby=\"emailHelp\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Creer</button>
</form>
{% endblock %}", "./administration.addCategory.block.twig", "/var/www/html/site_streaming/themes/classic/templates/back-office/administration.addCategory.block.twig");
    }
}
