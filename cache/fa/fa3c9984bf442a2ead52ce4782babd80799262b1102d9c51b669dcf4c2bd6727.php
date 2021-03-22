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

/* login.block.html.twig */
class __TwigTemplate_2c437a13e70393ec47e47aebcf1f70068e009edb62dfa4c1b3723d769cbb2c38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'login' => [$this, 'block_login'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('login', $context, $blocks);
    }

    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<h1 class=\"text-uppercase text-white mb-4\" style=\"font-size: 1.8em\">S'identifier</h1>

<form method=\"post\" class=\"mt-2 mb-5\" action=\"login.php\">
    <div class=\"form-group\">
        <label class=\"text-white m-0 font_carlito\" for=\"email\">Adresse e-mail</label>
        <input style=\"background-color: #C8CACE;\" name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\">
    </div>

    <div class=\"form-group\">
        <label class=\"text-white m-0 font_carlito\" for=\"password\">Mot de passe</label>
        <input style=\"background-color: #C8CACE;\" name=\"password\" type=\"password\" class=\"form-control\" id=\"password\">
        <a href=\"#\" style=\"font-size: 0.9em\" class=\"text-primary\">Mot de passe oublié ?</a>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col\">
            <button type=\"submit\" class=\"btn col-12 text-white text-uppercase font_carlito_bold\" style=\"background-color: #DD0611;\">S'identifier</button>
            <span style=\"font-size: 0.9em; color: #eaeaea;\">Nouveau sur UniStream ? <a href=\"index.php\"><b>S'inscrire</b></a>
        </div>
    </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "login.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block login %}

<h1 class=\"text-uppercase text-white mb-4\" style=\"font-size: 1.8em\">S'identifier</h1>

<form method=\"post\" class=\"mt-2 mb-5\" action=\"login.php\">
    <div class=\"form-group\">
        <label class=\"text-white m-0 font_carlito\" for=\"email\">Adresse e-mail</label>
        <input style=\"background-color: #C8CACE;\" name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"name@example.com\">
    </div>

    <div class=\"form-group\">
        <label class=\"text-white m-0 font_carlito\" for=\"password\">Mot de passe</label>
        <input style=\"background-color: #C8CACE;\" name=\"password\" type=\"password\" class=\"form-control\" id=\"password\">
        <a href=\"#\" style=\"font-size: 0.9em\" class=\"text-primary\">Mot de passe oublié ?</a>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col\">
            <button type=\"submit\" class=\"btn col-12 text-white text-uppercase font_carlito_bold\" style=\"background-color: #DD0611;\">S'identifier</button>
            <span style=\"font-size: 0.9em; color: #eaeaea;\">Nouveau sur UniStream ? <a href=\"index.php\"><b>S'inscrire</b></a>
        </div>
    </div>

</form>

{% endblock %}", "login.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/login.block.html.twig");
    }
}
