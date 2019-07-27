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

/* modular/features.html.twig */
class __TwigTemplate_962ddf146aa2a14f5148bb65a9da9789db4f20281502446c195ed68920c60833 extends \Twig\Template
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
        echo "<section id=\"features\" class=\"section-features text-center\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            <div class=\"features-wrapper\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-block\">
                            ";
            // line 10
            if ($this->getAttribute($context["item"], "icon", [])) {
                // line 11
                echo "                                <span class=\"icon-";
                echo $this->getAttribute($context["item"], "icon", []);
                echo "\"></span>
                            ";
            }
            // line 13
            echo "                            ";
            if ($this->getAttribute($context["item"], "title", [])) {
                // line 14
                echo "                                <h4 class=\"card-title\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</h4>
                            ";
            }
            // line 16
            echo "                            ";
            if ($this->getAttribute($context["item"], "subtitle", [])) {
                // line 17
                echo "                                <h6 class=\"card-subtitle text-muted\">";
                echo $this->getAttribute($context["item"], "subtitle", []);
                echo "</h6>
                            ";
            }
            // line 19
            echo "                            ";
            if ($this->getAttribute($context["item"], "text", [])) {
                // line 20
                echo "                                <p class=\"card-text\">";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</p>
                            ";
            }
            // line 22
            echo "                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  84 => 22,  78 => 20,  75 => 19,  69 => 17,  66 => 16,  60 => 14,  57 => 13,  51 => 11,  49 => 10,  44 => 7,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"features\" class=\"section-features text-center\">
    <div class=\"container\">
        <div class=\"row\">
            {{ page.content }}
            <div class=\"features-wrapper\">
                {% for item in page.header.features %}
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-block\">
                            {% if item.icon %}
                                <span class=\"icon-{{ item.icon }}\"></span>
                            {% endif %}
                            {% if item.title %}
                                <h4 class=\"card-title\">{{ item.title }}</h4>
                            {% endif %}
                            {% if item.subtitle %}
                                <h6 class=\"card-subtitle text-muted\">{{ item.subtitle }}</h6>
                            {% endif %}
                            {% if item.text %}
                                <p class=\"card-text\">{{ item.text }}</p>
                            {% endif %}
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>
", "modular/features.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/modular/features.html.twig");
    }
}
