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

/* @EasyAdmin/crud/field/code_editor.html.twig */
class __TwigTemplate_0d64419626b5f52967973b46bad95033 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "detail")) {
            // line 5
            echo "    ";
            echo twig_call_macro($macros["_self"], "macro_render_code_editor", [($context["field"] ?? null)], 5, $context, $this->getSourceContext());
            echo "
";
        } else {
            // line 7
            echo "    ";
            $context["html_id"] = ("ea-code-editor-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 7));
            // line 8
            echo "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, ($context["html_id"] ?? null), "html", null, true);
            echo "\">
        <i class=\"fa fa-code\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.code_editor.view_code", [], "EasyAdminBundle"), "html", null, true);
            echo "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["html_id"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 16)), "html", null, true);
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 21
            echo twig_call_macro($macros["_self"], "macro_render_code_editor", [($context["field"] ?? null)], 21, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 27
        echo "
";
    }

    // line 28
    public function macro_render_code_editor($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "    ";
            $context["configuredHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 29), "get", ["height"], "method", false, false, false, 29);
            // line 30
            echo "    <textarea
            readonly
            style=\"";
            // line 32
            (((null === ($context["configuredHeight"] ?? null))) ? (print ("max-height: 500px;")) : (print (twig_escape_filter($this->env, (("max-height: unset; height: " . ($context["configuredHeight"] ?? null)) . "px"), "html", null, true))));
            echo "\"
            data-ea-code-editor-field=\"true\"
            data-language=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 34), "get", ["language"], "method", false, false, false, 34), "html_attr");
            echo "\"
            data-tab-size=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 35), "get", ["tabSize"], "method", false, false, false, 35), "html_attr");
            echo "\"
            data-indent-with-tabs=\"";
            // line 36
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 36), "get", ["indentWithTabs"], "method", false, false, false, 36)) ? ("true") : ("false"));
            echo "\"
            data-show-line-numbers=\"";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 37), "get", ["showLineNumbers"], "method", false, false, false, 37)) ? ("true") : ("false"));
            echo "\"
            data-number-of-rows=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 38), "get", ["numOfRows"], "method", false, false, false, 38), "html_attr");
            echo "\"
    >";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 40));
            // line 41
            echo "</textarea>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/code_editor.html.twig";
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
        return array (  139 => 41,  137 => 40,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  112 => 32,  108 => 30,  105 => 29,  92 => 28,  87 => 27,  78 => 21,  71 => 17,  67 => 16,  60 => 12,  54 => 9,  49 => 8,  46 => 7,  40 => 5,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/code_editor.html.twig", "/var/www/html/la-boutique/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/code_editor.html.twig");
    }
}
