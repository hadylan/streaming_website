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

/* footer.block.html.twig */
class __TwigTemplate_ffaf91432caccaf5e71df31269a00073c3b82f94038dd9e864f53ad089305a5a extends Template
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
        echo "    <div id=\"copyright\" class=\"text-light col-9 col-sm-6 col-md-4\">
        &copy; 2020 <a href=\"./index.php\">UniStream</a>
    </div>

    <div id=\"social\" class=\"col-3 col-sm-2 col-md-2 col-lg-1 d-flex justify-content-end\">
        <ul class=\"list-unstyled d-flex p-0 col-12 justify-content-between m-0 offset-12\">
            <li><a href=\"https://facebook.com\" target=\"_blank\"><i class=\"fab fa-facebook-f text-white\"></i></a></li>
            <li><a href=\"https://twitter.com\" target=\"_blank\"><i class=\"fab fa-twitter text-white\"></i></a></li>
            <li><a href=\"https://instagram.com\" target=\"_blank\"><i class=\"fab fa-instagram text-white\"></i></a></li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "footer.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}
    <div id=\"copyright\" class=\"text-light col-9 col-sm-6 col-md-4\">
        &copy; 2020 <a href=\"./index.php\">UniStream</a>
    </div>

    <div id=\"social\" class=\"col-3 col-sm-2 col-md-2 col-lg-1 d-flex justify-content-end\">
        <ul class=\"list-unstyled d-flex p-0 col-12 justify-content-between m-0 offset-12\">
            <li><a href=\"https://facebook.com\" target=\"_blank\"><i class=\"fab fa-facebook-f text-white\"></i></a></li>
            <li><a href=\"https://twitter.com\" target=\"_blank\"><i class=\"fab fa-twitter text-white\"></i></a></li>
            <li><a href=\"https://instagram.com\" target=\"_blank\"><i class=\"fab fa-instagram text-white\"></i></a></li>
        </ul>
    </div>
{% endblock %}", "footer.block.html.twig", "/var/www/html/site_streaming/themes/classic/templates/front-office/footer.block.html.twig");
    }
}
