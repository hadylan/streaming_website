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

/* footer.html.twig */
class __TwigTemplate_d0e7393054415a0318ec7a55ec5487758e58cfcb1eced997cd542b74674f9ef3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div id=\"copyright\" class=\"txtwhite\">
        &copy; 2020 <a href=\"http://monsite.com\">
        UniStream</a>
    </div>

    <div id=\"social\">
        <ul>
            <li><a href=\"#\" class=\"txtwhite\"><i class=\"fab fa-facebook-f txtwhite\"></i></a></li>
            <li><a href=\"#\"><i class=\"fab fa-twitter txtwhite\"></i></a></li>
            <li><a href=\"#\"><i class=\"fab fa-instagram txtwhite\"></i></a></li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}
    <div id=\"copyright\" class=\"txtwhite\">
        &copy; 2020 <a href=\"http://monsite.com\">
        UniStream</a>
    </div>

    <div id=\"social\">
        <ul>
            <li><a href=\"#\" class=\"txtwhite\"><i class=\"fab fa-facebook-f txtwhite\"></i></a></li>
            <li><a href=\"#\"><i class=\"fab fa-twitter txtwhite\"></i></a></li>
            <li><a href=\"#\"><i class=\"fab fa-instagram txtwhite\"></i></a></li>
        </ul>
    </div>
{% endblock %}", "footer.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/footer.html.twig");
    }
}
