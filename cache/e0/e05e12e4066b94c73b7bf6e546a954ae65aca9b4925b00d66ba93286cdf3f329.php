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

/* accueil/accueil.series.block.html.twig */
class __TwigTemplate_bb24ed6183b75d6093967c3208ff41aa351133c3fdf1669610c5038cf732cb6b extends Template
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
    <div id=\"series\" class=\"col-12 d-flex align-items-center p-0 w-100 flex-wrap overflow-hidden\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["series"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 5
            echo "
    <a class=\"mt-4 col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2\" href=\"./product.php?id=";
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
        // line 9
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "accueil/accueil.series.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  56 => 6,  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block series %}

    <div id=\"series\" class=\"col-12 d-flex align-items-center p-0 w-100 flex-wrap overflow-hidden\">
    {% for serie in series %}

    <a class=\"mt-4 col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2\" href=\"./product.php?id={{serie.id}}\"><div class=\"new_thumbnail\" style=\"background-image: url('{{serie.picture}}'); background-size: 100% 100%;\"></div></a>
    
    {% endfor %}
    </div>

{% endblock %}", "accueil/accueil.series.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/accueil/accueil.series.block.html.twig");
    }
}
