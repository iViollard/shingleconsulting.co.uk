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

/* partials/footer.html.twig */
class __TwigTemplate_70bcc54fdd8158f4f1093d5e37d74c2dac5ea5cdf830ad27c1a632be127781aa extends \Twig\Template
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
        echo "<footer class=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "navbarfooter_class", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "navbarfooter_class", []);
        } else {
            echo "section-footer bg-inverse";
        }
        echo "\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"media\">
          <div class=\"media-left\">
            <span class=\"media-object icon-logo display-1\"></span>
          </div>
          <small class=\"media-body media-bottom\">
          &copy; ";
        // line 10
        echo $this->getAttribute(($context["site"] ?? null), "copyright", []);
        echo "
            </small>
        </div>
      </div>
      <div class=\"col-md-6 col-lg-7\">
        <ul class=\"list-inline m-b-0\">
          ";
        // line 16
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 17
        echo "          ";
        // line 18
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "          ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 20
                echo "          ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 21
                echo "          <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_page"] ?? null);
                echo "\">
              <a class=\"nav-link\" href=\"";
                // line 22
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                  ";
                // line 23
                echo $this->getAttribute($context["page"], "menu", []);
                echo "<span class=\"sr-only\">(current)</span>
              </a>
          </li>
          ";
            }
            // line 27
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 29
            echo "          <li class=\"nav-item nav-item-toggable\">
              <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->getAttribute($context["mitem"], "link", []);
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "          ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", []), "hidemenu", [])) {
                // line 35
                echo "          ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("current") : (""));
                // line 36
                echo "          <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_module"] ?? null);
                echo "\">
              <a class=\"nav-link\" href=\"#";
                // line 37
                echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", []);
                echo "</a>
          </li>
          ";
            }
            // line 40
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "          <li><a class=\"scroll-top\" href=\"#totop\">Back to top <span class=\"icon-caret-up\"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
";
    }

    // line 17
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 17,  142 => 41,  136 => 40,  128 => 37,  123 => 36,  120 => 35,  117 => 34,  112 => 33,  101 => 30,  98 => 29,  93 => 28,  87 => 27,  80 => 23,  76 => 22,  71 => 21,  68 => 20,  65 => 19,  60 => 18,  58 => 17,  56 => 16,  47 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"{% if page.header.navbarfooter_class %}{{ page.header.navbarfooter_class }}{% else %}section-footer bg-inverse{% endif %}\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"media\">
          <div class=\"media-left\">
            <span class=\"media-object icon-logo display-1\"></span>
          </div>
          <small class=\"media-body media-bottom\">
          &copy; {{ site.copyright }}
            </small>
        </div>
      </div>
      <div class=\"col-md-6 col-lg-7\">
        <ul class=\"list-inline m-b-0\">
          {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
          {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
          {% for page in pages.children %}
          {% if page.visible %}
          {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
          <li class=\"nav-item nav-item-toggable {{ current_page }}\">
              <a class=\"nav-link\" href=\"{{ page.url }}\">
                  {{ page.menu }}<span class=\"sr-only\">(current)</span>
              </a>
          </li>
          {% endif %}
          {% endfor %}
          {% for mitem in site.menu %}
          <li class=\"nav-item nav-item-toggable\">
              <a class=\"nav-link\" href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
          </li>
          {% endfor %}
          {% for module in page.collection() %}
          {% if not module.header.hidemenu %}
          {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}
          <li class=\"nav-item nav-item-toggable {{ current_module }}\">
              <a class=\"nav-link\" href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
          </li>
          {% endif %}
          {% endfor %}
          <li><a class=\"scroll-top\" href=\"#totop\">Back to top <span class=\"icon-caret-up\"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
", "partials/footer.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/partials/footer.html.twig");
    }
}
