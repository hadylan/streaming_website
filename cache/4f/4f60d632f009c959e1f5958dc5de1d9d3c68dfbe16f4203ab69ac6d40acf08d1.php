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

/* index/index.header.block.html.twig */
class __TwigTemplate_e57c740c0e263057d4ab1689ff07ac94a7731d354c37f0710b92994ce3279924 extends Template
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
        echo "<div id=\"logo\" class=\"col-12 col-md-4\">
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
    <a href=\"index.php?action=login\"><button type=\"button\" class=\"btn btn-danger btn-md pl-4 pr-4\">Connexion</button></a>
</div>

";
        }
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "index/index.header.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  57 => 9,  53 => 7,  51 => 6,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
<div id=\"logo\" class=\"col-12 col-md-4\">
    <img src=\"./assets/img/logoheader.png\" class=\"img-fluid\" />
</div>

{% if action is not null and action is same as ('login') %}

{% else %}
<div id=\"login_button\" class=\"d-flex align-items-start justify-content-end\">
    <a href=\"index.php?action=login\"><button type=\"button\" class=\"btn btn-danger btn-md pl-4 pr-4\">Connexion</button></a>
</div>

{% endif %}

{% endblock %}", "index/index.header.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/index/index.header.block.html.twig");
    }
}
