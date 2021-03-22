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

/* status.block.html.twig */
class __TwigTemplate_471484df503f8619b332af6b9d743632f56368ba4a5c15fc961336ea01cbbc5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'confirmation' => [$this, 'block_confirmation'],
            'failed' => [$this, 'block_failed'],
            'validated' => [$this, 'block_validated'],
            'alreadyValidated' => [$this, 'block_alreadyValidated'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('confirmation', $context, $blocks);
        // line 6
        echo "

";
        // line 8
        $this->displayBlock('failed', $context, $blocks);
        // line 13
        echo "

";
        // line 15
        $this->displayBlock('validated', $context, $blocks);
        // line 20
        echo "

";
        // line 22
        $this->displayBlock('alreadyValidated', $context, $blocks);
    }

    // line 1
    public function block_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div id=\"status\" class=\"row\">
    <h6 class=\"text-info\">Inscription réussie! il ne vous reste plus qu'à valider votre compte via l'email que nous vous avons envoyé!</h6>
</div>
";
    }

    // line 8
    public function block_failed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div id=\"status\" class=\"row\">
    <h6 class=\"text-danger\">Quelque chose s'est mal passée veillez à remplir le formulaire correctement!</h6>
</div>
";
    }

    // line 15
    public function block_validated($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div id=\"status\" class=\"row\">
    <h6 class=\"text-success\">Inscription finalisée! vous pouvez désormais vous connecter!</h6>
</div>
";
    }

    // line 22
    public function block_alreadyValidated($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "<div id=\"status\" class=\"row\">
    <h6 class=\"text-danger\">Votre compte semble déjà avoir été valider!</h6>
</div>
";
    }

    public function getTemplateName()
    {
        return "status.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  96 => 22,  89 => 16,  85 => 15,  78 => 9,  74 => 8,  67 => 2,  63 => 1,  59 => 22,  55 => 20,  53 => 15,  49 => 13,  47 => 8,  43 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block confirmation %}
<div id=\"status\" class=\"row\">
    <h6 class=\"text-info\">Inscription réussie! il ne vous reste plus qu'à valider votre compte via l'email que nous vous avons envoyé!</h6>
</div>
{% endblock %}


{% block failed %}
<div id=\"status\" class=\"row\">
    <h6 class=\"text-danger\">Quelque chose s'est mal passée veillez à remplir le formulaire correctement!</h6>
</div>
{% endblock %}


{% block validated %}
<div id=\"status\" class=\"row\">
    <h6 class=\"text-success\">Inscription finalisée! vous pouvez désormais vous connecter!</h6>
</div>
{% endblock %}


{% block alreadyValidated %}
<div id=\"status\" class=\"row\">
    <h6 class=\"text-danger\">Votre compte semble déjà avoir été valider!</h6>
</div>
{% endblock %}", "status.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/status.block.html.twig");
    }
}
