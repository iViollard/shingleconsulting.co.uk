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

/* forms/field.html.twig */
class __TwigTemplate_760ef4516b8733f968e68c259fbe6cf4014385fbce6b6c353100815aac7886bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 4
        $context["vertical"] = true;
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        // line 7
        echo "    <div class=\"form-field ";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        echo "\">
        ";
        // line 8
        $this->displayBlock('contents', $context, $blocks);
        // line 57
        echo "    </div>
";
    }

    // line 8
    public function block_contents($context, array $blocks = [])
    {
        // line 9
        echo "            <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3";
        }
        echo "\">
                <label class=\"sr-only\">
                ";
        // line 11
        $this->displayBlock('label', $context, $blocks);
        // line 19
        echo "                </label>
            </div>
            <div class=\"form-data";
        // line 21
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 22
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 27
        echo "            >
                ";
        // line 28
        $this->displayBlock('group', $context, $blocks);
        // line 55
        echo "            </div>
        ";
    }

    // line 11
    public function block_label($context, array $blocks = [])
    {
        // line 12
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 13
            echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []));
            echo "\">";
            echo $this->getAttribute(($context["field"] ?? null), "label", []);
            echo "</span>
                    ";
        } else {
            // line 15
            echo "                    ";
            echo $this->getAttribute(($context["field"] ?? null), "label", []);
            echo "
                    ";
        }
        // line 17
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 22
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 23
        echo "                data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", []);
        echo "\"
                data-grav-disabled=\"";
        // line 24
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 28
    public function block_group($context, array $blocks = [])
    {
        // line 29
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 54
        echo "                ";
    }

    // line 29
    public function block_input($context, array $blocks = [])
    {
        // line 30
        echo "                        <div class=\"form-group has-icon-left form-control-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo "\">
                            <input
                                ";
        // line 33
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
                                value=\"";
        // line 34
        echo twig_join_filter(($context["value"] ?? null), ", ");
        echo "\"
                                ";
        // line 36
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 51
        echo "                                />
                        </div>
                    ";
    }

    // line 36
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 37
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute(($context["field"] ?? null), "classes", []);
            echo "\" ";
        }
        // line 38
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 39
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 40
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 41
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo $this->getAttribute(($context["field"] ?? null), "placeholder", []);
            echo "\"";
        }
        // line 42
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 43
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 44
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 45
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 46
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 47
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []);
            echo "\"";
        }
        // line 48
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo call_user_func_array($this->env->getFilter('tu')->getCallable(), [twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", []))]);
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 49
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo call_user_func_array($this->env->getFilter('tu')->getCallable(), [twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "title", []))]);
            echo "\" ";
        }
        // line 50
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 50,  262 => 49,  255 => 48,  248 => 47,  243 => 46,  236 => 45,  231 => 44,  226 => 43,  221 => 42,  214 => 41,  209 => 40,  202 => 39,  195 => 38,  188 => 37,  185 => 36,  179 => 51,  176 => 36,  172 => 34,  167 => 33,  159 => 30,  156 => 29,  152 => 54,  149 => 29,  146 => 28,  140 => 25,  136 => 24,  131 => 23,  128 => 22,  121 => 17,  115 => 15,  107 => 13,  104 => 12,  101 => 11,  96 => 55,  94 => 28,  91 => 27,  89 => 22,  83 => 21,  79 => 19,  77 => 11,  69 => 9,  66 => 8,  61 => 57,  59 => 8,  52 => 7,  46 => 6,  43 => 5,  41 => 4,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set value = (value is null ? field.default : value) %}
{# {% set vertical = field.style == 'vertical' %} #}
{% set vertical = true %}

{% block field %}
    <div class=\"form-field {% if vertical %} vertical{% endif %}\">
        {% block contents %}
            <div class=\"form-label{% if not vertical %} block size-1-3{% endif %}\">
                <label class=\"sr-only\">
                {% block label %}
                    {% if field.help %}
                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e }}\">{{ field.label }}</span>
                    {% else %}
                    {{ field.label }}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
            </div>
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-group has-icon-left form-control-{{ (scope ~ field.name)|fieldName }} {{ field.size }}\">
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|e|tu }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|e|tu }}\" {% endif %}
                                {% endblock %}
                                />
                        </div>
                    {% endblock %}
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/field.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/forms/field.html.twig");
    }
}
