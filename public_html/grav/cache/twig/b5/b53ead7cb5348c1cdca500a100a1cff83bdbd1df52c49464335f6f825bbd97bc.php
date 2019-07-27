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

/* partials/header.html.twig */
class __TwigTemplate_85efe86047de3b3219c48cd45fc6134b0f280fed31268c334664d99d40f77e5b extends \Twig\Template
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
        echo "<header class=\"jumbotron bg-inverse text-center center-vertically\" role=\"banner\">
  <div class=\"container\">
    <h1 class=\"display-3\">";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "title", []);
        echo "</h1>
    <h2 class=\"m-b-lg\">";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "description", []);
        echo "</h2>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "    <a class=\"btn btn-secondary-outline m-b-md\" href=\"";
            echo $this->getAttribute($context["item"], "url", []);
            echo "\" role=\"button\"><span class=\"icon-";
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"></span>";
            echo $this->getAttribute($context["item"], "text", []);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    <script type=\"text/javascript\">
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "facebook_url", [])) {
            // line 11
            echo "        // Facebook Shares Count
        \$.getJSON( '//graph.facebook.com/?id=";
            // line 12
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "url", []);
            echo "', function( fbdata ) {
            \$('#facebook-count').text(fbdata.shares)
        });
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "twitter_url", [])) {
            // line 17
            echo "        // Twitter Shares Count
        \$.getJSON( '//cdn.api.twitter.com/1/urls/count.json?url=";
            // line 18
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "url", []);
            echo "&callback=?', function( twitdata ) {
            \$('#twitter-count').text(twitdata.count)
        });
    ";
        }
        // line 22
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "linkedin_url", [])) {
            // line 23
            echo "        // LinkedIn Shares Count
        \$.getJSON( '//www.linkedin.com/countserv/count/share?url=";
            // line 24
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "url", []);
            echo "&callback=?', function( linkdindata ) {
            \$('#linkedin-count').text(linkdindata.count)
        });
    ";
        }
        // line 28
        echo "    </script>

    <ul class=\"list-inline social-share\">
        ";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "twitter_url", [])) {
            // line 32
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "twitter_url", []);
            echo "\"><span class=\"icon-twitter\"></span> <span class=\"social-text\" id=\"twitter-count\">0</span></a></li>
        ";
        }
        // line 34
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "facebook_url", [])) {
            // line 35
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "facebook_url", []);
            echo "\"><span class=\"icon-facebook\"></span> <span class=\"social-text\" id=\"facebook-count\">0</span></a></li>
        ";
        }
        // line 37
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "linkedin_url", [])) {
            // line 38
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "socialcount", []), "linkedin_url", []);
            echo "\"><span class=\"icon-linkedin\"></span> <span class=\"social-text\" id=\"linkedin-count\">0</span></a></li>
        ";
        }
        // line 40
        echo "    </ul>
  </div>


</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  126 => 38,  123 => 37,  117 => 35,  114 => 34,  108 => 32,  106 => 31,  101 => 28,  94 => 24,  91 => 23,  88 => 22,  81 => 18,  78 => 17,  75 => 16,  68 => 12,  65 => 11,  63 => 10,  59 => 8,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"jumbotron bg-inverse text-center center-vertically\" role=\"banner\">
  <div class=\"container\">
    <h1 class=\"display-3\">{{ site.header.title }}</h1>
    <h2 class=\"m-b-lg\">{{ site.header.description }}</h2>
    {% for item in site.header.buttons %}
    <a class=\"btn btn-secondary-outline m-b-md\" href=\"{{ item.url }}\" role=\"button\"><span class=\"icon-{{ item.icon }}\"></span>{{ item.text }}</a>
    {% endfor %}

    <script type=\"text/javascript\">
        {% if site.socialcount.facebook_url %}
        // Facebook Shares Count
        \$.getJSON( '//graph.facebook.com/?id={{ site.socialcount.url }}', function( fbdata ) {
            \$('#facebook-count').text(fbdata.shares)
        });
    {% endif %}
    {% if site.socialcount.twitter_url %}
        // Twitter Shares Count
        \$.getJSON( '//cdn.api.twitter.com/1/urls/count.json?url={{ site.socialcount.url }}&callback=?', function( twitdata ) {
            \$('#twitter-count').text(twitdata.count)
        });
    {% endif %}
    {% if site.socialcount.linkedin_url %}
        // LinkedIn Shares Count
        \$.getJSON( '//www.linkedin.com/countserv/count/share?url={{ site.socialcount.url }}&callback=?', function( linkdindata ) {
            \$('#linkedin-count').text(linkdindata.count)
        });
    {% endif %}
    </script>

    <ul class=\"list-inline social-share\">
        {% if site.socialcount.twitter_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.twitter_url }}\"><span class=\"icon-twitter\"></span> <span class=\"social-text\" id=\"twitter-count\">0</span></a></li>
        {% endif %}
        {% if site.socialcount.facebook_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.facebook_url }}\"><span class=\"icon-facebook\"></span> <span class=\"social-text\" id=\"facebook-count\">0</span></a></li>
        {% endif %}
        {% if site.socialcount.linkedin_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.linkedin_url }}\"><span class=\"icon-linkedin\"></span> <span class=\"social-text\" id=\"linkedin-count\">0</span></a></li>
        {% endif %}
    </ul>
  </div>


</header>
", "partials/header.html.twig", "/home2/j4gdesign/public_html/user/themes/landio/templates/partials/header.html.twig");
    }
}
