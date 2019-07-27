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

/* modular/news.html.twig */
class __TwigTemplate_c1b1235178c1f1f65d862adc0b00711c8c0fd67aa94e8e28c4465fc6b3964f24 extends \Twig\Template
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
        echo "<section id=\"news\" class=\"section-news\">
  <div class=\"container\">
    <h3 class=\"sr-only\">";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h3>
    <div class=\"bg-inverse\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "news", []), 2));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 7
                echo "      <div class=\"row\">
        ";
                // line 8
                if ($this->getAttribute($context["news"], "image", [])) {
                    // line 9
                    echo "        <div class=\"";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "col-md-6 p-r-0";
                    } else {
                        echo "col-md-6 col-md-push-6 p-l-0";
                    }
                    echo "\">
          <figure class=\"has-light-mask m-b-0 image-effect\">
            <img src=\"";
                    // line 11
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["news"], "image", []), [], "array"), "url", []);
                    echo "\" alt=\"Article thumbnail\" class=\"img-responsive\">
          </figure>
        </div>
        ";
                }
                // line 15
                echo "        <div class=\"";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo "col-md-6 p-l-0";
                } else {
                    echo "col-md-6 col-md-pull-6 p-r-0";
                }
                echo "\">
          <article class=\"center-block\">
            ";
                // line 17
                if ($this->getAttribute($context["news"], "label", [])) {
                    // line 18
                    echo "            <span class=\"label label-info\">";
                    echo $this->getAttribute($context["news"], "label", []);
                    echo "</span>
            <br>
            ";
                }
                // line 21
                echo "            ";
                if ($this->getAttribute($context["news"], "title", [])) {
                    // line 22
                    echo "            <h5><a href=\"";
                    echo $this->getAttribute($context["news"], "url", []);
                    echo "\">";
                    echo $this->getAttribute($context["news"], "title", []);
                    echo " <span class=\"icon-arrow-right\"></span></a></h5>
            ";
                }
                // line 24
                echo "            <p class=\"m-b-0\">
              ";
                // line 25
                if ($this->getAttribute($context["news"], "tags", [])) {
                    // line 26
                    echo "              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-tag\"></span>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["news"], "tags", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        echo $context["item"];
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</span></a>
              ";
                }
                // line 28
                echo "              ";
                if ($this->getAttribute($context["news"], "time", [])) {
                    // line 29
                    echo "              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-time\"></span> ";
                    echo $this->getAttribute($context["news"], "time", []);
                    echo "</span></a>
              ";
                }
                // line 31
                echo "            </p>
          </article>
        </div>
      </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 37,  172 => 36,  154 => 31,  148 => 29,  145 => 28,  131 => 26,  129 => 25,  126 => 24,  118 => 22,  115 => 21,  108 => 18,  106 => 17,  96 => 15,  89 => 11,  79 => 9,  77 => 8,  74 => 7,  56 => 6,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"news\" class=\"section-news\">
  <div class=\"container\">
    <h3 class=\"sr-only\">{{ page.header.title }}</h3>
    <div class=\"bg-inverse\">
      {% for row in page.header.news|batch(2) %}
      {% for news in row %}
      <div class=\"row\">
        {% if news.image %}
        <div class=\"{% if loop.first %}col-md-6 p-r-0{% else %}col-md-6 col-md-push-6 p-l-0{% endif %}\">
          <figure class=\"has-light-mask m-b-0 image-effect\">
            <img src=\"{{ page.media[news.image].url }}\" alt=\"Article thumbnail\" class=\"img-responsive\">
          </figure>
        </div>
        {% endif %}
        <div class=\"{% if loop.first %}col-md-6 p-l-0{% else %}col-md-6 col-md-pull-6 p-r-0{% endif %}\">
          <article class=\"center-block\">
            {% if news.label %}
            <span class=\"label label-info\">{{ news.label }}</span>
            <br>
            {% endif %}
            {% if news.title %}
            <h5><a href=\"{{ news.url }}\">{{ news.title }} <span class=\"icon-arrow-right\"></span></a></h5>
            {% endif %}
            <p class=\"m-b-0\">
              {% if news.tags %}
              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-tag\"></span>{% for item in news.tags %}{{ item }} {% endfor %}</span></a>
              {% endif %}
              {% if news.time %}
              <a href=\"#\"><span class=\"label label-default text-uppercase\"><span class=\"icon-time\"></span> {{ news.time }}</span></a>
              {% endif %}
            </p>
          </article>
        </div>
      </div>
      {% endfor %}
      {% endfor %}
    </div>
  </div>
</section>
", "modular/news.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/modular/news.html.twig");
    }
}
