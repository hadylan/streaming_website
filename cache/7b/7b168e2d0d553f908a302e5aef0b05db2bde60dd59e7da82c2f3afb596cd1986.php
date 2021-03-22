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

/* index/register.block.html.twig */
class __TwigTemplate_722795d50948469716366efd4c3663a2e2bc37f64cd547ab9933c59fbd1cca50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'register' => [$this, 'block_register'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('register', $context, $blocks);
    }

    public function block_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<h1 class=\"text-uppercase text-white mb-4\" style=\"font-size: 1.8em\">S'inscrire</h1>

<form method=\"post\" class=\"mt-2 mb-5\" action=\"./php_scripts/register.php\">

    <div class=\"form-group\">
        <label class=\"text-white m-0 font_carlito\" for=\"email\">Adresse e-mail</label>
        <input name=\"email\" style=\"background-color: #C8CACE;\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\" required=\"required\" maxlength=\"320\" minlength=\"10\">
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <label class=\"text-white m-0 font_carlito\" for=\"first_password\">Mot de passe</label>
            <input name=\"password\" style=\"background-color: #C8CACE;\" type=\"password\" id=\"first_password\" class=\"form-control\" required=\"required\" maxlength=\"128\" minlength=\"8\">
        </div>

        <div class=\"col\">
            <label class=\"text-white m-0 font_carlito\" for=\"confirm_password\">Confirmer le mot passe</label>
            <input name=\"confirm_password\" style=\"background-color: #C8CACE;\" type=\"password\" id=\"confirm_password\" class=\"form-control\" required=\"required\" maxlength=\"128\" minlength=\"8\">
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col\">
            <button type=\"submit\" class=\"btn col-12 mt-1 text-white text-uppercase font_carlito_bold\" style=\"background-color: #DD0611;\">S'inscrire</button>
        </div>
    </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "index/register.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block register %}

<h1 class=\"text-uppercase text-white mb-4\" style=\"font-size: 1.8em\">S'inscrire</h1>

<form method=\"post\" class=\"mt-2 mb-5\" action=\"./php_scripts/register.php\">

    <div class=\"form-group\">
        <label class=\"text-white m-0 font_carlito\" for=\"email\">Adresse e-mail</label>
        <input name=\"email\" style=\"background-color: #C8CACE;\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\" required=\"required\" maxlength=\"320\" minlength=\"10\">
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <label class=\"text-white m-0 font_carlito\" for=\"first_password\">Mot de passe</label>
            <input name=\"password\" style=\"background-color: #C8CACE;\" type=\"password\" id=\"first_password\" class=\"form-control\" required=\"required\" maxlength=\"128\" minlength=\"8\">
        </div>

        <div class=\"col\">
            <label class=\"text-white m-0 font_carlito\" for=\"confirm_password\">Confirmer le mot passe</label>
            <input name=\"confirm_password\" style=\"background-color: #C8CACE;\" type=\"password\" id=\"confirm_password\" class=\"form-control\" required=\"required\" maxlength=\"128\" minlength=\"8\">
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col\">
            <button type=\"submit\" class=\"btn col-12 mt-1 text-white text-uppercase font_carlito_bold\" style=\"background-color: #DD0611;\">S'inscrire</button>
        </div>
    </div>

</form>

{% endblock %}", "index/register.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/index/register.block.html.twig");
    }
}
