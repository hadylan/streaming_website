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

/* accueil.films.block.html.twig */
class __TwigTemplate_f7c2eceba64f9dbd712c11ea36268efa97e124436ba8313069f77f78cc21caf4 extends Template
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
    <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["movie"], "link", [], "any", false, false, false, 5);
            echo "\"><div class=\"new_thumbnail\" style=\"background-image: url('";
            echo twig_get_attribute($this->env, $this->source, $context["movie"], "picture", [], "any", false, false, false, 5);
            echo "'); background-size: 100% 100%;\"></div></a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "accueil.films.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  55 => 5,  52 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block movies %}

    {% for movie in movies %}

    <a href=\"{{movie.link}}\"><div class=\"new_thumbnail\" style=\"background-image: url('{{movie.picture}}'); background-size: 100% 100%;\"></div></a>

    {% endfor %}

{% endblock %}", "accueil.films.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/accueil.films.block.html.twig");
    }
}
