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

/* modular/testimonials.html.twig */
class __TwigTemplate_4d21b6a8ec36bf5458cf45af687a0b5beacdd74b062ebcebe986dc46e5d6e0a9 extends \Twig\Template
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
        echo "<section class=\"section-testimonials text-center bg-inverse\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    <div id=\"carousel-testimonials\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
      <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "testimonials", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 7
            echo "        <div class=\"carousel-item ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                echo "active";
            }
            echo "\">
          <blockquote class=\"blockquote\">
            ";
            // line 9
            if ($this->getAttribute($context["testimonial"], "avatar", [])) {
                // line 10
                echo "            <img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["testimonial"], "avatar", []), [], "array"), "url", []);
                echo "\" height=\"80\" width=\"80\" alt=\"Avatar\" class=\"img-circle\">
            ";
            }
            // line 12
            echo "            ";
            if ($this->getAttribute($context["testimonial"], "quote", [])) {
                // line 13
                echo "            <p class=\"h3\">";
                echo $this->getAttribute($context["testimonial"], "quote", []);
                echo "</p>
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["testimonial"], "author", [])) {
                // line 16
                echo "            <footer>";
                echo $this->getAttribute($context["testimonial"], "author", []);
                echo "</footer>
            ";
            }
            // line 18
            echo "          </blockquote>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </div>
      <ol class=\"carousel-indicators\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "testimonials", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 24
            echo "        ";
            if ($this->getAttribute($context["testimonial"], "avatar", [])) {
                // line 25
                echo "        <li ";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo "class=\"active\"";
                }
                echo "><img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["testimonial"], "avatar", []), [], "array"), "url", []);
                echo "\" alt=\"Navigation avatar\" data-target=\"#carousel-testimonials\" data-slide-to=\"";
                echo $this->getAttribute($context["loop"], "index0", []);
                echo "\" class=\"img-responsive img-circle\"></li>
        ";
            }
            // line 27
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </ol>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 28,  143 => 27,  131 => 25,  128 => 24,  111 => 23,  107 => 21,  91 => 18,  85 => 16,  82 => 15,  76 => 13,  73 => 12,  67 => 10,  65 => 9,  57 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-testimonials text-center bg-inverse\">
  <div class=\"container\">
    {{ page.content }}
    <div id=\"carousel-testimonials\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
      <div class=\"carousel-inner\" role=\"listbox\">
        {% for testimonial in page.header.testimonials %}
        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
          <blockquote class=\"blockquote\">
            {% if testimonial.avatar %}
            <img src=\"{{ page.media.images[testimonial.avatar].url }}\" height=\"80\" width=\"80\" alt=\"Avatar\" class=\"img-circle\">
            {% endif %}
            {% if testimonial.quote %}
            <p class=\"h3\">{{ testimonial.quote }}</p>
            {% endif %}
            {% if testimonial.author %}
            <footer>{{ testimonial.author }}</footer>
            {% endif %}
          </blockquote>
        </div>
        {% endfor %}
      </div>
      <ol class=\"carousel-indicators\">
        {% for testimonial in page.header.testimonials %}
        {% if testimonial.avatar %}
        <li {% if loop.first %}class=\"active\"{% endif %}><img src=\"{{ page.media.images[testimonial.avatar].url }}\" alt=\"Navigation avatar\" data-target=\"#carousel-testimonials\" data-slide-to=\"{{ loop.index0 }}\" class=\"img-responsive img-circle\"></li>
        {% endif %}
        {% endfor %}
      </ol>
    </div>
  </div>
</section>
", "modular/testimonials.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/modular/testimonials.html.twig");
    }
}
