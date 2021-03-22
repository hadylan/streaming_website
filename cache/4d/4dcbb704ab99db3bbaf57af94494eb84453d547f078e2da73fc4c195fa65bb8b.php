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

/* accueil.series.block.html.twig */
class __TwigTemplate_ac058323a6c26347e57cb2999c5904b6b337bdbd9d981b828ff438be631f17b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'series' => [$this, 'block_series'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('series', $context, $blocks);
    }

    public function block_series($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div id=\"series\" class=\"d-flex justify-content-between align-items-center;\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["series"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 5
            echo "
    <a href=\"./product.php?id=";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 6);
            echo "\"><div class=\"new_thumbnail\" style=\"background-image: url('";
            echo twig_get_attribute($this->env, $this->source, $context["serie"], "picture", [], "any", false, false, false, 6);
            echo "'); background-size: 100% 100%;\"></div></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "accueil.series.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  56 => 6,  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block series %}

    <div id=\"series\" class=\"d-flex justify-content-between align-items-center;\">
    {% for serie in series %}

    <a href=\"./product.php?id={{serie.id}}\"><div class=\"new_thumbnail\" style=\"background-image: url('{{serie.picture}}'); background-size: 100% 100%;\"></div></a>
    {% endfor %}
    </div>

{% endblock %}", "accueil.series.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/accueil.series.block.html.twig");
    }
}
