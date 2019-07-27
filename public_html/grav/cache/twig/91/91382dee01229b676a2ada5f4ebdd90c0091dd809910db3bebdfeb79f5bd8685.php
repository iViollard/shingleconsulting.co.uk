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

/* modular/intro.html.twig */
class __TwigTemplate_5d40f680a28c0e96f980bff3cc0c96583bbbe7a0e418df6462e206311e615910 extends \Twig\Template
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
        echo "<section class=\"section-intro bg-faded text-center hidden-overflow\">
    <div class=\"container\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 4
            echo "            <h3 class=\"wp wp-1\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo "</h3>
        ";
        }
        // line 6
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", [])) {
            // line 7
            echo "            <p class=\"lead wp wp-2\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
            echo "</p>
        ";
        }
        // line 9
        echo "        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 7,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-intro bg-faded text-center hidden-overflow\">
    <div class=\"container\">
        {% if page.header.title  %}
            <h3 class=\"wp wp-1\">{{ page.header.title }}</h3>
        {% endif %}
        {% if page.header.description  %}
            <p class=\"lead wp wp-2\">{{ page.header.description }}</p>
        {% endif %}
        {{ page.content }}
    </div>
</section>
", "modular/intro.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/modular/intro.html.twig");
    }
}
