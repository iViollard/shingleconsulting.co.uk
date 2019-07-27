<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/form.html.twig */
class __TwigTemplate_61e669254357e269c86d2a439f00ec0b0a69839e42d8b1ff19b834ec69e3e54d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"section-signup bg-faded\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

    <div class=\"col-md-8 col-md-offset-2 col-xl-6 col-xl-offset-3\">
    \t<div class=\"row\">
        \t";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 7)->display($context);
        // line 8
        echo "        </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  41 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-signup bg-faded\">
  <div class=\"container\">
    {{ page.content }}

    <div class=\"col-md-8 col-md-offset-2 col-xl-6 col-xl-offset-3\">
    \t<div class=\"row\">
        \t{% include \"forms/form.html.twig\" %}
        </div>
    </div>
  </div>
</section>
", "modular/form.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/modular/form.html.twig");
    }
}
