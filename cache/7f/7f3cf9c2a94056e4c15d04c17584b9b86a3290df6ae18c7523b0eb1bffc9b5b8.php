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

/* index.header.block.html.twig */
class __TwigTemplate_a6c2b483db9c883cb5a3007b735d10e8cb136bf7d6634c4b31cba200491eb41f extends Template
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
        echo "<div id=\"logo\">
    <img src=\"./assets/img/logoheader.png\" class=\"img-fluid\" />
</div>

";
        // line 6
        if (( !(null === ($context["action"] ?? null)) && (($context["action"] ?? null) === "login"))) {
            // line 7
            echo "
";
        } else {
            // line 9
            echo "<div id=\"login_button\" class=\"d-flex align-items-start justify-content-end\">
    <a href=\"index.php?action=login\"><button type=\"button\"
            class=\"btn btn-danger btn-md pl-4 pr-4\">Connexion</button></a>
</div>

";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.header.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  57 => 9,  53 => 7,  51 => 6,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
<div id=\"logo\">
    <img src=\"./assets/img/logoheader.png\" class=\"img-fluid\" />
</div>

{% if action is not null and action is same as ('login') %}

{% else %}
<div id=\"login_button\" class=\"d-flex align-items-start justify-content-end\">
    <a href=\"index.php?action=login\"><button type=\"button\"
            class=\"btn btn-danger btn-md pl-4 pr-4\">Connexion</button></a>
</div>

{% endif %}

{% endblock %}", "index.header.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/index.header.block.html.twig");
    }
}
