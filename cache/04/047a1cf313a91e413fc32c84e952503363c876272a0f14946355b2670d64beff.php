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

/* editprofil.content.block.html.twig */
class __TwigTemplate_f0d1f4a0750831f5578f3be14d679c1ade745f8d360593cf9eb51827db5d135d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'editprofil' => [$this, 'block_editprofil'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('editprofil', $context, $blocks);
    }

    public function block_editprofil($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div id=\"profil_box\" class=\"w-25 d-flex justify-content-start align-items-center pt-4 pb-4 pl-5 pr-5\">
    <form>

    <input type=\"text\" name=\"username\" placeholder=\"Username\" class=\"mb-3\"/>

  <div class=\"custom-file\">
    <input type=\"file\" class=\"custom-file-input\" id=\"validatedCustomFile\" required>
    <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose file...</label>
  </div>

   <button type=\"button\" class=\"mt-3 btn btn-light\">Envoyer</button>
  </form>

</div>


    <style>

    #profil_box{
        border-radius: 5px;
        background-color: #808080;
    }

    </style>

";
    }

    public function getTemplateName()
    {
        return "editprofil.content.block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block editprofil %}

<div id=\"profil_box\" class=\"w-25 d-flex justify-content-start align-items-center pt-4 pb-4 pl-5 pr-5\">
    <form>

    <input type=\"text\" name=\"username\" placeholder=\"Username\" class=\"mb-3\"/>

  <div class=\"custom-file\">
    <input type=\"file\" class=\"custom-file-input\" id=\"validatedCustomFile\" required>
    <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose file...</label>
  </div>

   <button type=\"button\" class=\"mt-3 btn btn-light\">Envoyer</button>
  </form>

</div>


    <style>

    #profil_box{
        border-radius: 5px;
        background-color: #808080;
    }

    </style>

{% endblock %}", "editprofil.content.block.html.twig", "/var/www/html/arborescence/themes/classic/templates/front-office/editprofil.content.block.html.twig");
    }
}
