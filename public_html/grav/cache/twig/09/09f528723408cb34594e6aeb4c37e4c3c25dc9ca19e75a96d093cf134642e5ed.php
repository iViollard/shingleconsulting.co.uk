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

/* partials/base.html.twig */
class __TwigTemplate_83a7f586fac188837ad2d7a600840071354d3b35849e4244f9ed027e4b7f1f6a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'navigation' => [$this, 'block_navigation'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "</head>
<body>
    ";
        // line 47
        $this->displayBlock('navigation', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "
    <script src=\"";
        // line 63
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/landio.min.js");
        echo "\" type=\"text/javascript\" ></script>

    ";
        // line 65
        $this->displayBlock('bottom', $context, $blocks);
        // line 68
        echo "</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-57x57.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-60x60.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-72x72.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-76x76.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-114x114.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-120x120.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-144x144.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-152x152.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-180x180.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-32x32.png");
        echo "\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/android-chrome-192x192.png");
        echo "\" sizes=\"192x192\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-96x96.png");
        echo "\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-16x16.png");
        echo "\" sizes=\"16x16\">
    <link rel=\"manifest\"href=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/manifest.json");
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon.ico");
        echo "\" />

    <meta name=\"msapplication-TileColor\" content=\"#663fb5\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/mstile-144x144.png");
        echo "\">
    <meta name=\"msapplication-config\" content=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/browserconfig.xml");
        echo "\">
    <meta name=\"theme-color\" content=\"#663fb5\">

    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('assets', $context, $blocks);
        // line 43
        echo "
    ";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.min.css"], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/landio.css"], "method");
        // line 33
        echo "    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 37
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 39
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 40
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 41
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 47
    public function block_navigation($context, array $blocks = [])
    {
        // line 48
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "    ";
    }

    // line 51
    public function block_header($context, array $blocks = [])
    {
        // line 52
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "    ";
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        // line 56
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "    ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        // line 60
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "    ";
    }

    // line 65
    public function block_bottom($context, array $blocks = [])
    {
        // line 66
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 66,  284 => 65,  280 => 61,  277 => 60,  274 => 59,  269 => 56,  265 => 57,  262 => 56,  259 => 55,  255 => 53,  252 => 52,  249 => 51,  245 => 49,  242 => 48,  239 => 47,  232 => 41,  227 => 40,  224 => 39,  215 => 37,  212 => 36,  209 => 35,  205 => 33,  202 => 32,  199 => 31,  196 => 30,  191 => 43,  189 => 39,  186 => 38,  184 => 35,  181 => 34,  179 => 30,  173 => 27,  169 => 26,  163 => 23,  159 => 22,  155 => 21,  151 => 20,  147 => 19,  143 => 18,  139 => 17,  135 => 16,  131 => 15,  127 => 14,  123 => 13,  119 => 12,  115 => 11,  111 => 10,  107 => 9,  104 => 8,  102 => 7,  94 => 6,  91 => 5,  88 => 4,  81 => 68,  79 => 65,  74 => 63,  71 => 62,  69 => 59,  66 => 58,  64 => 55,  61 => 54,  59 => 51,  56 => 50,  54 => 47,  50 => 45,  48 => 4,  43 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    {% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ url('theme://img/favicon/apple-touch-icon-57x57.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ url('theme://img/favicon/apple-touch-icon-60x60.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ url('theme://img/favicon/apple-touch-icon-72x72.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ url('theme://img/favicon/apple-touch-icon-76x76.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ url('theme://img/favicon/apple-touch-icon-114x114.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ url('theme://img/favicon/apple-touch-icon-120x120.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ url('theme://img/favicon/apple-touch-icon-144x144.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ url('theme://img/favicon/apple-touch-icon-152x152.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://img/favicon/apple-touch-icon-180x180.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-32x32.png') }}\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/android-chrome-192x192.png') }}\" sizes=\"192x192\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-96x96.png') }}\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-16x16.png') }}\" sizes=\"16x16\">
    <link rel=\"manifest\"href=\"{{ url('theme://img/favicon/manifest.json') }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon.ico') }}\" />

    <meta name=\"msapplication-TileColor\" content=\"#663fb5\">
    <meta name=\"msapplication-TileImage\" content=\"{{ url('theme://img/favicon/mstile-144x144.png') }}\">
    <meta name=\"msapplication-config\" content=\"{{ url('theme://img/favicon/browserconfig.xml') }}\">
    <meta name=\"theme-color\" content=\"#663fb5\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css/animate.min.css') %}
        {% do assets.addCss('theme://css/landio.css') %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.add('jquery',101) %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

    {% endblock head%}
</head>
<body>
    {% block navigation %}
        {% include 'partials/navigation.html.twig' %}
    {% endblock %}

    {% block header %}
            {% include 'partials/header.html.twig' %}
    {% endblock %}

    {% block body %}
        {% block content %}{% endblock %}
    {% endblock %}

    {% block footer %}
            {% include 'partials/footer.html.twig' %}
    {% endblock %}

    <script src=\"{{ url('theme://js/landio.min.js') }}\" type=\"text/javascript\" ></script>

    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/partials/base.html.twig");
    }
}
