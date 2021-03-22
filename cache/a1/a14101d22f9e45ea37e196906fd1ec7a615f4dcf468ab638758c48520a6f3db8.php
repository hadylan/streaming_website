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

/* videos/movies.block.html.twig */
class __TwigTemplate_e5de5e28b43f37af03e175f75e53856d730fcb6369fcd8eed120b6b35bfbee4b extends Template
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
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 4
            echo "
    ";
            // line 5
            if (((($context["title"] ?? null) === "UniStream - Films") || (($context["title"] ?? null) === "UniStream - Series"))) {
                // line 6
                echo "        <a href=\"./product.php?id=";
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 6);
                echo "\" class=\"ml-2 mr-2 mt-3 mb-3\"><div class=\"search_thumbnail\" style=\"background-image: url('";
                echo twig_get_attribute($this->env, $this->source, $context["movie"], "picture", [], "any", false, false, false, 6);
                echo "'); background-size: 100% 100%;\"></div></a>
    ";
            }
            // line 8
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "videos/movies.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  65 => 8,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block movies %}

    {% for movie in movies %}

    {% if title is same as ('UniStream - Films') or title is same as ('UniStream - Series') %}
        <a href=\"./product.php?id={{movie.id}}\" class=\"ml-2 mr-2 mt-3 mb-3\"><div class=\"search_thumbnail\" style=\"background-image: url('{{movie.picture}}'); background-size: 100% 100%;\"></div></a>
    {% endif %}

    {% endfor %}

{% endblock %}", "videos/movies.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/videos/movies.block.html.twig");
    }
}
