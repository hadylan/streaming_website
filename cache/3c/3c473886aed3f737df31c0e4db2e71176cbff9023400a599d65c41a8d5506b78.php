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

/* accueil.movies.block.html.twig */
class __TwigTemplate_2133e578b56fe4239f57c4786b8a46a4ae307abf40017468cf82d849560b9f7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'movies' => [$this, 'block_movies'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('movies', $context, $blocks);
    }

    public function block_movies($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div id=\"films\" class=\"d-flex justify-content-between align-items-center mb-5\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 5
            echo "
    <a href=\"./product.php?id=";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 6);
            echo "\"><div class=\"new_thumbnail\" style=\"background-image: url('";
            echo twig_get_attribute($this->env, $this->source, $context["movie"], "picture", [], "any", false, false, false, 6);
            echo "'); background-size: 100% 100%;\"></div></a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "accueil.movies.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  56 => 6,  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block movies %}

    <div id=\"films\" class=\"d-flex justify-content-between align-items-center mb-5\">
    {% for movie in movies %}

    <a href=\"./product.php?id={{movie.id}}\"><div class=\"new_thumbnail\" style=\"background-image: url('{{movie.picture}}'); background-size: 100% 100%;\"></div></a>

    {% endfor %}
    </div>

{% endblock %}", "accueil.movies.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/accueil.movies.block.html.twig");
    }
}
