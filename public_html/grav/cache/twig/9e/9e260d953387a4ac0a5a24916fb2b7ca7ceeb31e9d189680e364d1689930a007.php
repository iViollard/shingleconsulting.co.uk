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

/* forms/form.html.twig */
class __TwigTemplate_2ce390d6c9cbc77791cd0a99276a0b07711cb0b18a588e84dde05a35bb8446c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'button_classes' => [$this, 'block_button_classes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 4
        echo "  <div class=\"form-group\">
";
    }

    // line 7
    public function block_button_classes($context, array $blocks = [])
    {
        // line 8
        echo "class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", []), "btn btn-primary btn-block")) : ("btn btn-primary btn-block"));
        echo "\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  48 => 7,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'forms/default/form.html.twig' %}

{% block inner_markup_buttons_start %}
  <div class=\"form-group\">
{% endblock %}

{% block button_classes %}
class=\"{{ button.classes|default('btn btn-primary btn-block') }}\"
{% endblock %}
", "forms/form.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/forms/form.html.twig");
    }
}
