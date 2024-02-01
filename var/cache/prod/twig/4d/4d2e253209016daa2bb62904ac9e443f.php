<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/crud/field/country.html.twig */
class __TwigTemplate_319727d0e42d19055858ab38757f139f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["show_flag"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", ["showFlag"], "method", false, false, false, 6);
        // line 7
        $context["show_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 7), "get", ["showName"], "method", false, false, false, 7);
        // line 8
        echo "
";
        // line 9
        if ((($context["show_flag"] ?? null) &&  !($context["show_name"] ?? null))) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 11
                echo "        ";
                if ( !(null === $context["flag_code"])) {
                    // line 12
                    echo "            ";
                    // line 13
                    echo "            <img class=\"country-flag\" height=\"17\" alt=\"";
                    echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 13), "defaultAssetPackageName", [], "any", false, false, false, 13)), "html", null, true);
                    echo "\">
        ";
                }
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 16
($context["show_name"] ?? null) &&  !($context["show_flag"] ?? null))) {
            // line 17
            echo "    ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 17), ", "), "html", null, true);
            echo "
";
        } else {
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 20
                echo "        <span>";
                // line 21
                if (($context["show_flag"] ?? null)) {
                    // line 22
                    if ( !(null === $context["flag_code"])) {
                        // line 24
                        echo "                    <img class=\"country-flag\" height=\"17\" alt=\"";
                        echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 24), "defaultAssetPackageName", [], "any", false, false, false, 24)), "html", null, true);
                        echo "\">";
                    }
                }
                // line 28
                if (($context["show_name"] ?? null)) {
                    // line 29
                    (((array_key_exists("country_name", $context) &&  !(null === $context["country_name"]))) ? (print (twig_escape_filter($this->env, $context["country_name"], "html", null, true))) : (print ("")));
                }
                // line 31
                echo "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/country.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  106 => 31,  103 => 29,  101 => 28,  91 => 24,  89 => 22,  87 => 21,  85 => 20,  80 => 19,  74 => 17,  72 => 16,  66 => 15,  56 => 13,  54 => 12,  51 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/country.html.twig", "/var/www/html/la-boutique/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/country.html.twig");
    }
}
