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

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_42bb0f41f12a2d81ada989f7bcdb19ee21b59364fcf007664731d6df9556d9bd extends \Twig\Template
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
        echo "<input class=\"form-control navbar-search-input\" type=\"text\" placeholder=\"Type your search &amp; hit Enter&hellip;\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-search-input";
        if (($context["form2"] ?? null)) {
            echo "2";
        }
        echo "=\"";
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []);
        echo "/query\" />
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input";
        // line 4
        if (($context["form2"] ?? null)) {
            echo "2";
        }
        echo "]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input";
        // line 9
        if (($context["form2"] ?? null)) {
            echo "2";
        }
        echo "') + '";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  44 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<input class=\"form-control navbar-search-input\" type=\"text\" placeholder=\"Type your search &amp; hit Enter&hellip;\" value=\"{{ query }}\" data-search-input{% if form2 %}2{% endif %}=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input{% if form2 %}2{% endif %}]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input{% if form2 %}2{% endif %}') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/partials/simplesearch_searchbox.html.twig");
    }
}
