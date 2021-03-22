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

/* product.block.html.twig */
class __TwigTemplate_fd57856dc1ee190a56fe7813ef7454c86ff7ae61de3e8d448732628c3b9335f8 extends Template
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
<h1 class=\"text-uppercase ml-5\">";
        // line 3
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null);
        echo "</h1>
<div id=\"button_box\" class=\"d-flex ml-5\">
    <button id=\"play_button\" onclick=\"play()\" class=\"shadow w-50 rounded mr-3\">LECTURE</button>
    <button id=\"fav_button\" class=\"shadow rounded-circle\" style=\"\">+</button>
</div>

<script>
    function play() {
        document.location.href= window.location.href+\"&play=true\";
    }
</script>

<style>
    h1 {
        text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
    }
    
    main {
        background-image: url(";
        // line 21
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["product"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["background"] ?? null) : null);
        echo ");
    }
</style>

";
    }

    public function getTemplateName()
    {
        return "product.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

<h1 class=\"text-uppercase ml-5\">{{product[0]['title']}}</h1>
<div id=\"button_box\" class=\"d-flex ml-5\">
    <button id=\"play_button\" onclick=\"play()\" class=\"shadow w-50 rounded mr-3\">LECTURE</button>
    <button id=\"fav_button\" class=\"shadow rounded-circle\" style=\"\">+</button>
</div>

<script>
    function play() {
        document.location.href= window.location.href+\"&play=true\";
    }
</script>

<style>
    h1 {
        text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
    }
    
    main {
        background-image: url({{product[0]['background']}});
    }
</style>

{% endblock %}", "product.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/product.block.html.twig");
    }
}
