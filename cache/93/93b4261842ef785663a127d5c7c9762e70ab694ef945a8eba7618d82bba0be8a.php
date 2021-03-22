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

/* recherche.block.html.twig */
class __TwigTemplate_325eb480f706a43c83f277355adf8ee7975093a633d292b6445c10701f5ca922 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'recherche' => [$this, 'block_recherche'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('recherche', $context, $blocks);
    }

    public function block_recherche($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searchs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 4
            echo "        <a href=\"./product.php?id=";
            echo twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 4);
            echo "\" class=\"ml-2 mr-2 mt-3 mb-3\"><div class=\"search_thumbnail\" style=\"background-image: url('";
            echo twig_get_attribute($this->env, $this->source, $context["movie"], "picture", [], "any", false, false, false, 4);
            echo "'); background-size: 100% 100%;\"></div></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "recherche.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 6,  52 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block recherche %}

    {% for movie in searchs %}
        <a href=\"./product.php?id={{movie.id}}\" class=\"ml-2 mr-2 mt-3 mb-3\"><div class=\"search_thumbnail\" style=\"background-image: url('{{movie.picture}}'); background-size: 100% 100%;\"></div></a>
    {% endfor %}

{% endblock %}", "recherche.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/recherche.block.html.twig");
    }
}
