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

/* modular/pricing.html.twig */
class __TwigTemplate_c943b1efd999181d4f27bc04afb21d151eed72e853d1b41e3b401188cebea840 extends \Twig\Template
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
        echo "<section id=\"subscriptions\" class=\"section-pricing bg-faded text-center\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pricing", [])) {
            // line 5
            echo "    <div class=\"row p-y-lg\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pricing", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "      <div class=\"col-md-4 ";
                if ( !$this->getAttribute($context["item"], "highlighted", [])) {
                    echo "p-t-md wp";
                } else {
                    echo "stacking-top";
                }
                if ($this->getAttribute($context["item"], "additional_css", [])) {
                    echo " ";
                    echo $this->getAttribute($context["item"], "additional_css", []);
                }
                echo " \">
        <div class=\"card pricing-box ";
                // line 8
                if ($this->getAttribute($context["item"], "highlighted", [])) {
                    echo "pricing-best p-x-0";
                }
                echo "\">
          ";
                // line 9
                if ($this->getAttribute($context["item"], "title", [])) {
                    // line 10
                    echo "          <div class=\"card-header text-uppercase\">
            ";
                    // line 11
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "
          </div>
          ";
                }
                // line 14
                echo "          <div class=\"card-block\">
            ";
                // line 15
                if ($this->getAttribute($context["item"], "description", [])) {
                    // line 16
                    echo "            <p class=\"card-title\">";
                    echo $this->getAttribute($context["item"], "description", []);
                    echo "</p>
            ";
                }
                // line 18
                echo "            <h4 class=\"card-text\">
              ";
                // line 19
                if ($this->getAttribute($context["item"], "currency", [])) {
                    // line 20
                    echo "              <sup class=\"pricing-box-currency\">";
                    echo $this->getAttribute($context["item"], "currency", []);
                    echo "</sup>
              ";
                }
                // line 22
                echo "              ";
                if ($this->getAttribute($context["item"], "price", [])) {
                    // line 23
                    echo "              <span class=\"pricing-box-price\">";
                    echo $this->getAttribute($context["item"], "price", []);
                    echo "</span>
              ";
                }
                // line 25
                echo "              ";
                if ($this->getAttribute($context["item"], "period", [])) {
                    // line 26
                    echo "              <small class=\"text-muted text-uppercase\">";
                    echo $this->getAttribute($context["item"], "period", []);
                    echo "</small>
              ";
                }
                // line 28
                echo "            </h4>
          </div>
          ";
                // line 30
                if ($this->getAttribute($context["item"], "features", [])) {
                    // line 31
                    echo "          <ul class=\"list-group list-group-flush p-x\">
            ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "features", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                        // line 33
                        echo "            <li class=\"list-group-item\">";
                        echo $this->getAttribute($context["feature"], "item", []);
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "          </ul>
          ";
                }
                // line 37
                echo "          ";
                if ($this->getAttribute($context["item"], "button_text", [])) {
                    // line 38
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["item"], "button_url", []);
                    echo "\" class=\"btn btn-primary";
                    if ( !$this->getAttribute($context["item"], "highlighted", [])) {
                        echo "-outline";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["item"], "button_text", []);
                    echo "</a>
          ";
                }
                // line 40
                echo "        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </div>
    ";
        }
        // line 45
        echo "  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 45,  166 => 43,  158 => 40,  146 => 38,  143 => 37,  139 => 35,  130 => 33,  126 => 32,  123 => 31,  121 => 30,  117 => 28,  111 => 26,  108 => 25,  102 => 23,  99 => 22,  93 => 20,  91 => 19,  88 => 18,  82 => 16,  80 => 15,  77 => 14,  71 => 11,  68 => 10,  66 => 9,  60 => 8,  47 => 7,  43 => 6,  40 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"subscriptions\" class=\"section-pricing bg-faded text-center\">
  <div class=\"container\">
    {{ page.content }}
    {% if page.header.pricing %}
    <div class=\"row p-y-lg\">
      {% for item in page.header.pricing %}
      <div class=\"col-md-4 {% if not item.highlighted %}p-t-md wp{% else %}stacking-top{% endif %}{% if item.additional_css %} {{ item.additional_css }}{% endif %} \">
        <div class=\"card pricing-box {% if item.highlighted %}pricing-best p-x-0{% endif %}\">
          {% if item.title %}
          <div class=\"card-header text-uppercase\">
            {{ item.title }}
          </div>
          {% endif %}
          <div class=\"card-block\">
            {% if item.description %}
            <p class=\"card-title\">{{ item.description }}</p>
            {% endif %}
            <h4 class=\"card-text\">
              {% if item.currency %}
              <sup class=\"pricing-box-currency\">{{ item.currency }}</sup>
              {% endif %}
              {% if item.price %}
              <span class=\"pricing-box-price\">{{ item.price }}</span>
              {% endif %}
              {% if item.period %}
              <small class=\"text-muted text-uppercase\">{{ item.period }}</small>
              {% endif %}
            </h4>
          </div>
          {% if item.features %}
          <ul class=\"list-group list-group-flush p-x\">
            {% for feature in item.features %}
            <li class=\"list-group-item\">{{ feature.item }}</li>
            {% endfor %}
          </ul>
          {% endif %}
          {% if item.button_text %}
          <a href=\"{{ item.button_url }}\" class=\"btn btn-primary{% if not item.highlighted %}-outline{% endif %}\">{{ item.button_text }}</a>
          {% endif %}
        </div>
      </div>
      {% endfor %}
    </div>
    {% endif %}
  </div>
</section>
", "modular/pricing.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/modular/pricing.html.twig");
    }
}
