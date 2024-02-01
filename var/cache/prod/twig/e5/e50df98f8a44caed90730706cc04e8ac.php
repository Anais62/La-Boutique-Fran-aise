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

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_62f623299fdece6b10917c95ececb6fc extends Template
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
        // line 5
        echo "
";
        // line 6
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6) == "detail") ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", ["renderAsSwitch"], "method", false, false, false, 6))) {
            // line 7
            echo "    ";
            $context["badge_is_hidden"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 7), "currentAction", [], "any", false, false, false, 7) == "index") && (((twig_get_attribute($this->env, $this->source,             // line 9
($context["field"] ?? null), "value", [], "any", false, false, false, 9) == true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 9), "get", ["hideValueWhenTrue"], "method", false, false, false, 9) == true)) || ((twig_get_attribute($this->env, $this->source,             // line 11
($context["field"] ?? null), "value", [], "any", false, false, false, 11) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 11), "get", ["hideValueWhenFalse"], "method", false, false, false, 11) == true))));
            // line 13
            echo "
    ";
            // line 14
            if ( !($context["badge_is_hidden"] ?? null)) {
                // line 15
                echo "        <span class=\"badge ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 15) == true)) ? ("badge-boolean-true") : ("badge-boolean-false"));
                echo "\">
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 16) == true)) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
                echo "
        </span>
    ";
            }
        } else {
            // line 20
            echo "    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 21), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 21) == true)) ? ("checked") : (""));
            echo "
            data-toggle-url=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 22), "get", ["toggleUrl"], "method", false, false, false, 22), "html", null, true);
            echo "\"
            ";
            // line 23
            echo (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formTypeOption", ["disabled"], "method", false, false, false, 23) == true)) ? ("disabled") : (""));
            echo " autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 24), "html", null, true);
            echo "\"></label>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
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
        return array (  81 => 24,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  57 => 16,  52 => 15,  50 => 14,  47 => 13,  45 => 11,  44 => 9,  42 => 7,  40 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/boolean.html.twig", "/var/www/html/la-boutique/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/boolean.html.twig");
    }
}
