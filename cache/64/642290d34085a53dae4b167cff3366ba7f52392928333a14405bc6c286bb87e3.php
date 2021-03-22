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

/* profil/profil.content.block.html.twig */
class __TwigTemplate_9016b6bcbbe9fa2a6afbaf7bd2e4c095b83be02b75947f818ecf32e9cc480c83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'user' => [$this, 'block_user'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('user', $context, $blocks);
    }

    public function block_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div id=\"profil_content\">
<a href=\"./profil.php?action=edit\" class=\"d-block\"><h6 id=\"edit_link\">Edit profil</h6></a>
<div id=\"profil_box\" class=\"w-100 d-flex justify-content-start align-items-center pt-4 pb-4 pl-5 pr-5\">
    <div id=\"profil_picture\" class=\"rounded-circle overflow-hidden mr-3\">
        <img src=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["user"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "picture", [], "any", false, false, false, 7);
        echo "\" class=\"img-fluid\" id=\"profil_img\"/>
    </div>
    <div id=\"profil_infos\" class=\"d-flex flex-column\">
        <h1 class=\"m-0\" >";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["user"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "username", [], "any", false, false, false, 10);
        echo "</h1>
        <h3 class=\"ml-1\" >";
        // line 11
        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["user"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "email", [], "any", false, false, false, 11);
        echo "</h3>
    </div>
</div>
</div>


    <style>

    #profil_content{
        width: auto;
    }

    #content {
        height: 55vh;
    }

    #edit_link{
        font-family: \"Carlito Regular\";
        color: #d9d9d9;
        font-size: 0.9em;
    }

    #profil_box{
        border-radius: 5px;
        background-color: #808080;
    }

    #profil_picture {
        width: 125px;
        height: 125px;
        border: 4px solid #212529;
    }

    #profil_img{
        width: 100%;
        height: 100%;
    }

    #profil_infos h1 {
        font-size: 2em;
        font-family: \"Carlito Regular\";
    }

    #profil_infos h3 {
        font-family: \"Carlito Regular\";
        font-size: 0.9em;
    }


    </style>

";
    }

    public function getTemplateName()
    {
        return "profil/profil.content.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  58 => 10,  52 => 7,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block user %}

<div id=\"profil_content\">
<a href=\"./profil.php?action=edit\" class=\"d-block\"><h6 id=\"edit_link\">Edit profil</h6></a>
<div id=\"profil_box\" class=\"w-100 d-flex justify-content-start align-items-center pt-4 pb-4 pl-5 pr-5\">
    <div id=\"profil_picture\" class=\"rounded-circle overflow-hidden mr-3\">
        <img src=\"{{user[0].picture}}\" class=\"img-fluid\" id=\"profil_img\"/>
    </div>
    <div id=\"profil_infos\" class=\"d-flex flex-column\">
        <h1 class=\"m-0\" >{{user[0].username}}</h1>
        <h3 class=\"ml-1\" >{{user[0].email}}</h3>
    </div>
</div>
</div>


    <style>

    #profil_content{
        width: auto;
    }

    #content {
        height: 55vh;
    }

    #edit_link{
        font-family: \"Carlito Regular\";
        color: #d9d9d9;
        font-size: 0.9em;
    }

    #profil_box{
        border-radius: 5px;
        background-color: #808080;
    }

    #profil_picture {
        width: 125px;
        height: 125px;
        border: 4px solid #212529;
    }

    #profil_img{
        width: 100%;
        height: 100%;
    }

    #profil_infos h1 {
        font-size: 2em;
        font-family: \"Carlito Regular\";
    }

    #profil_infos h3 {
        font-family: \"Carlito Regular\";
        font-size: 0.9em;
    }


    </style>

{% endblock %}", "profil/profil.content.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/profil/profil.content.block.html.twig");
    }
}
