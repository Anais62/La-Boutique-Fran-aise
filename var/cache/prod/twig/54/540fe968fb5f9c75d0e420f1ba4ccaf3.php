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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_b0a3a1c0ca865b85d1e934f96d73728f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["ea_field_assets"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "fieldAssets", [twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 8);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 5)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 5)), "html", null, true);
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)), "html", null, true);
    }

    // line 10
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 13
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 17
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 20
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 24
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 26
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 26)], false);
        echo "
    ";
        // line 27
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 27)], false);
        echo "
";
    }

    // line 30
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 32
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 32)], false);
        echo "
    ";
        // line 33
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 33)], false);
        echo "
";
    }

    // line 36
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        ob_start(function () { return ''; });
        // line 38
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 38), "customPageTitle", [($context["pageName"] ?? null), ((($context["entity"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 38)) : (null)), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38)], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [null, null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 41
($context["custom_page_title"] ?? null))));
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo twig_spaceless($___internal_parse_2_);
    }

    // line 45
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 47
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 47), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 51
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 52
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 54
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isFormLayoutField", [], "any", false, false, false, 54)) {
                // line 55
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_render_layout_field", [$context["field"]], 55, $context, $this->getSourceContext());
                echo "
            ";
            } else {
                // line 57
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_render_field_contents", [($context["entity"] ?? null), $context["field"]], 57, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 59
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    ";
    }

    // line 62
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 63)], false);
        echo "
    ";
    }

    // line 321
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 322
        echo "            ";
        if ( !($context["is_form_fieldset"] ?? null)) {
            // line 323
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null)], 323, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 325
        echo "        ";
    }

    // line 67
    public function macro_render_field_contents($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 68
            echo "    <div class=\"field-group ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
        ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 69) === false)) {
                // line 70
                echo "            ";
                // line 72
                echo "        ";
            } else {
                // line 73
                echo "            <div class=\"field-label\">";
                // line 74
                ob_start(function () { return ''; });
                // line 75
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 75))) {
                    // line 76
                    echo "data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 78)), "html_attr");
                    echo "\"";
                }
                $context["label_html_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 82
                echo "<div ";
                echo twig_escape_filter($this->env, ($context["label_html_attributes"] ?? null), "html", null, true);
                echo ">
                    ";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 83));
                echo "
                </div>
            </div>
        ";
            }
            // line 87
            echo "
        <div class=\"field-value\">
            ";
            // line 89
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 89), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 94
    public function macro_render_layout_field($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 95
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formType", [], "any", false, false, false, 95) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabListType")) {
                // line 96
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_list", [($context["field"] ?? null)], 96, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
($context["field"] ?? null), "formType", [], "any", false, false, false, 97) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupOpenType")) {
                // line 98
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_group_open", [($context["field"] ?? null)], 98, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 99
($context["field"] ?? null), "formType", [], "any", false, false, false, 99) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupCloseType")) {
                // line 100
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_group_close", [($context["field"] ?? null)], 100, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 101
($context["field"] ?? null), "formType", [], "any", false, false, false, 101) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneOpenType")) {
                // line 102
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_open", [($context["field"] ?? null)], 102, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 103
($context["field"] ?? null), "formType", [], "any", false, false, false, 103) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneCloseType")) {
                // line 104
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_close", [($context["field"] ?? null)], 104, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 105
($context["field"] ?? null), "formType", [], "any", false, false, false, 105) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupOpenType")) {
                // line 106
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_group_open", [($context["field"] ?? null)], 106, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 107
($context["field"] ?? null), "formType", [], "any", false, false, false, 107) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupCloseType")) {
                // line 108
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_group_close", [($context["field"] ?? null)], 108, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 109
($context["field"] ?? null), "formType", [], "any", false, false, false, 109) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnOpenType")) {
                // line 110
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_open", [($context["field"] ?? null)], 110, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 111
($context["field"] ?? null), "formType", [], "any", false, false, false, 111) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnCloseType")) {
                // line 112
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_close", [($context["field"] ?? null)], 112, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 113
($context["field"] ?? null), "formType", [], "any", false, false, false, 113) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetOpenType")) {
                // line 114
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_fieldset_open", [($context["field"] ?? null)], 114, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 115
($context["field"] ?? null), "formType", [], "any", false, false, false, 115) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetCloseType")) {
                // line 116
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_fieldset_close", [($context["field"] ?? null)], 116, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 120
    public function macro_render_tab_list($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 121
            echo "    ";
            $context["tab_id_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 122
            echo "    ";
            $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 123
            echo "    ";
            $context["tab_error_count_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
            // line 124
            echo "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 128
                echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 129)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 129), "html", null, true);
                echo "\" id=\"tablist-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 129), "html", null, true);
                echo "\" data-bs-toggle=\"tab\">";
                // line 130
                if (((twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 130)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 130), false)) : (false))) {
                    // line 131
                    echo "<i class=\"tab-nav-item-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 131), "html", null, true);
                    echo "\"></i>";
                }
                // line 133
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 133), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 133), "translationDomain", [], "any", false, false, false, 133));
                echo "

                        ";
                // line 135
                $context["tab_error_count"] = twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 135);
                // line 136
                if ((($context["tab_error_count"] ?? null) > 0)) {
                    // line 137
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 138
                    echo twig_escape_filter($this->env, ($context["tab_error_count"] ?? null), "html", null, true);
                    // line 139
                    echo "</span>";
                }
                // line 141
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "        </ul>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 148
    public function macro_render_tab_group_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 149
            echo "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 153
    public function macro_render_tab_group_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 154
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 158
    public function macro_render_tab_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 159
            echo "    ";
            $context["tab_id_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 160
            echo "    ";
            $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 161
            echo "
    <div id=\"";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 162), "html", null, true);
            echo "\" class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 162)) {
                echo "active";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 162), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["attr"], "method", false, false, false, 162));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 163)) {
                // line 164
                echo "            <div class=\"content-header-help tab-help\">
                ";
                // line 165
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 165), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 165), "translationDomain", [], "any", false, false, false, 165));
                echo "
            </div>
        ";
            }
            // line 168
            echo "
        <div class=\"row\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 172
    public function macro_render_tab_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 173
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 177
    public function macro_render_column_group_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 178
            echo "    ";
            // line 179
            echo "    ";
            if ( !((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 179)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 179), false)) : (false))) {
                // line 180
                echo "        <div class=\"row\">
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 184
    public function macro_render_column_group_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 185
            echo "    ";
            // line 186
            echo "    ";
            if ( !((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 186)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 186), false)) : (false))) {
                // line 187
                echo "        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 191
    public function macro_render_column_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 192
            echo "    ";
            $context["field_icon"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 192);
            // line 193
            echo "    ";
            $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 193) != false)) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 193) != null)) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 193) != "")) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 193) != null));
            // line 194
            echo "
    <div class=\"form-column ";
            // line 195
            echo (( !($context["column_has_title"] ?? null)) ? ("form-column-no-header") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 195), "html", null, true);
            echo "\">
        ";
            // line 196
            if (($context["column_has_title"] ?? null)) {
                // line 197
                echo "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
                // line 199
                if (($context["field_icon"] ?? null)) {
                    echo "<i class=\"form-column-icon fa fa-fw fa-";
                    echo twig_escape_filter($this->env, ($context["field_icon"] ?? null), "html", null, true);
                    echo "\"></i>";
                }
                // line 200
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 200)) {
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 200), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 200), "translationDomain", [], "any", false, false, false, 200));
                }
                // line 201
                echo "                </div>

                ";
                // line 203
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 203)) {
                    // line 204
                    echo "                    <div class=\"form-column-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 204), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 204), "translationDomain", [], "any", false, false, false, 204));
                    echo "</div>
                ";
                }
                // line 206
                echo "            </div>
        ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 210
    public function macro_render_column_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 211
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 214
    public function macro_render_fieldset_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 215
            echo "    ";
            $context["fieldset_has_header"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 215) || twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 215)) || twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 215));
            // line 216
            echo "    ";
            $context["is_collapsible_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSIBLE");
            // line 217
            echo "    ";
            $context["is_collapsed_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
            // line 218
            echo "    ";
            $context["is_collapsible"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsible_option_name"] ?? null)], "method", false, false, false, 218);
            // line 219
            echo "    ";
            $context["is_collapsed"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["is_collapsed_option_name"] ?? null)], "method", false, false, false, 219);
            // line 220
            echo "
    <div class=\"form-fieldset ";
            // line 221
            echo (( !($context["fieldset_has_header"] ?? null)) ? ("form-fieldset-no-header") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 221), "html", null, true);
            echo "\">
        <fieldset>
            ";
            // line 223
            if (($context["fieldset_has_header"] ?? null)) {
                // line 224
                echo "                <div class=\"form-fieldset-header ";
                echo ((($context["is_collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 224))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-fieldset-title\">
                        ";
                // line 226
                ob_start(function () { return ''; });
                // line 227
                echo "                            ";
                if (($context["is_collapsible"] ?? null)) {
                    // line 228
                    echo "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
                }
                // line 230
                echo "
                            ";
                // line 231
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 231)) {
                    // line 232
                    echo "                                <i class=\"form-fieldset-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 232), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 234
                echo "
                            ";
                // line 235
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 235));
                echo "
                        ";
                $context["fieldset_title_contents"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 237
                echo "
                        ";
                // line 238
                if (($context["is_collapsible"] ?? null)) {
                    // line 239
                    echo "                            <a href=\"#content-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "property", [], "any", false, false, false, 239), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                    // line 240
                    echo ((($context["is_collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                               aria-expanded=\"";
                    // line 241
                    echo ((($context["is_collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "property", [], "any", false, false, false, 241), "html", null, true);
                    echo "\">
                                ";
                    // line 242
                    echo ($context["fieldset_title_contents"] ?? null);
                    echo "
                            </a>
                        ";
                } else {
                    // line 245
                    echo "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                    // line 246
                    echo ($context["fieldset_title_contents"] ?? null);
                    echo "
                            </span>
                        ";
                }
                // line 249
                echo "
                        ";
                // line 250
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "                            <div class=\"form-fieldset-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 251));
                    echo "</div>
                        ";
                }
                // line 253
                echo "                    </div>
                </div>
            ";
            }
            // line 256
            echo "
            <div id=\"content-";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "property", [], "any", false, false, false, 257), "html", null, true);
            echo "\" class=\"form-fieldset-body ";
            echo (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
            echo " ";
            echo ((($context["is_collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["is_collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <div class=\"row\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 261
    public function macro_render_fieldset_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 262
            echo "                </div>
            </div>
        </fieldset>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 269
    public function macro_render_detail_fields_with_tabs($__entity__ = null, $__field_layout__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field_layout" => $__field_layout__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 270
            echo "    ";
            @trigger_error("The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 270).", E_USER_DEPRECATED);
            // line 271
            echo "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 275));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 276
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 277
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 277)) {
                    echo "active";
                }
                echo "\" href=\"#tab-pane-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 277), "html", null, true);
                echo "\" id=\"tab-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 277), "html", null, true);
                echo "\" data-bs-toggle=\"tab\">";
                // line 278
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 278)) {
                    // line 279
                    echo "<i class=\"fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 279), "html", null, true);
                    echo "\"></i>";
                }
                // line 281
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 281), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 281), "translationDomain", [], "any", false, false, false, 281));
                echo "
                        </a>
                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </ul>
            <div class=\"tab-content\">
                ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "tabs", [], "any", false, false, false, 287));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 288
                echo "                    <div id=\"tab-pane-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 288), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 288)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 288)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 288), "")) : ("")), "html", null, true);
                echo "\">
                        ";
                // line 289
                if (((twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 289)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 289), false)) : (false))) {
                    // line 290
                    echo "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 291
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 291), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 291), "translationDomain", [], "any", false, false, false, 291));
                    echo "
                            </div>
                        ";
                }
                // line 294
                echo "                        <div class=\"row\">
                            ";
                // line 295
                echo twig_call_macro($macros["_self"], "macro_render_detail_fields", [($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["field_layout"] ?? null), "fieldsInTab", [twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 295)], "method", false, false, false, 295)], 295, $context, $this->getSourceContext());
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 304
    public function macro_render_detail_fields($__entity__ = null, $__fields__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "fields" => $__fields__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 305
            echo "    ";
            @trigger_error("The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 305).", E_USER_DEPRECATED);
            // line 306
            echo "
    ";
            // line 307
            $context["form_fieldset_is_already_open"] = false;
            // line 308
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 309
                echo "        ";
                $context["is_form_fieldset"] = twig_in_filter("field-form_fieldset", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 309));
                // line 310
                echo "
        ";
                // line 311
                if ((($context["is_form_fieldset"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 311) &&  !($context["is_form_fieldset"] ?? null)))) {
                    // line 312
                    echo "            ";
                    if (($context["form_fieldset_is_already_open"] ?? null)) {
                        // line 313
                        echo "                ";
                        echo twig_call_macro($macros["_self"], "macro_close_form_fieldset", [], 313, $context, $this->getSourceContext());
                        echo "
                ";
                        // line 314
                        $context["form_fieldset_is_already_open"] = false;
                        // line 315
                        echo "            ";
                    }
                    // line 316
                    echo "
            ";
                    // line 317
                    echo twig_call_macro($macros["_self"], "macro_open_form_fieldset", [((($context["is_form_fieldset"] ?? null)) ? ($context["field"]) : (null))], 317, $context, $this->getSourceContext());
                    echo "
            ";
                    // line 318
                    $context["form_fieldset_is_already_open"] = true;
                    // line 319
                    echo "        ";
                }
                // line 320
                echo "
        ";
                // line 321
                $this->displayBlock('detail_field', $context, $blocks);
                // line 326
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "
    ";
            // line 328
            if (($context["form_fieldset_is_already_open"] ?? null)) {
                // line 329
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_close_form_fieldset", [], 329, $context, $this->getSourceContext());
                echo "
        ";
                // line 330
                $context["form_fieldset_is_already_open"] = false;
                // line 331
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 334
    public function macro_open_form_fieldset($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 335
            echo "    ";
            @trigger_error("The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 335).", E_USER_DEPRECATED);
            // line 336
            echo "
    ";
            // line 337
            $context["fieldset_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 337))));
            // line 338
            echo "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsible"], "method", false, false, false, 338)));
            // line 339
            echo "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", ["collapsed"], "method", false, false, false, 339)));
            // line 340
            echo "    ";
            $context["fieldset_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 340), "get", ["icon"], "method", true, true, false, 340)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 340), "get", ["icon"], "method", false, false, false, 340), false)) : (false))));
            // line 341
            echo "    ";
            $context["fieldset_label"] = (((null === ($context["field"] ?? null))) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 341)));
            // line 342
            echo "    ";
            $context["fieldset_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 342)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 342), false)) : (false))));
            // line 343
            echo "    ";
            $context["fieldset_has_header"] = (((($context["collapsible"] ?? null) || ($context["fieldset_icon"] ?? null)) || ($context["fieldset_label"] ?? null)) || ($context["fieldset_help"] ?? null));
            // line 344
            echo "
    <div class=\"";
            // line 345
            (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 345) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 345)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 345), "html", null, true))) : (print ("")));
            echo "\">
        <div class=\"form-fieldset\">
            ";
            // line 347
            if (($context["fieldset_has_header"] ?? null)) {
                // line 348
                echo "                <div class=\"form-fieldset-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(($context["fieldset_help"] ?? null))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 350
                if ( !($context["collapsible"] ?? null)) {
                    // line 351
                    echo "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 353
                    echo "                            href=\"#";
                    echo twig_escape_filter($this->env, ($context["fieldset_name"] ?? null), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 354
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                            aria-expanded=\"";
                    // line 355
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"";
                    echo twig_escape_filter($this->env, ($context["fieldset_name"] ?? null), "html", null, true);
                    echo "\"
                        ";
                }
                // line 357
                echo "                        >
                            ";
                // line 358
                if (($context["collapsible"] ?? null)) {
                    // line 359
                    echo "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
                }
                // line 361
                echo "
                            ";
                // line 362
                if (($context["fieldset_icon"] ?? null)) {
                    // line 363
                    echo "                                <i class=\"form-fieldset-icon ";
                    echo twig_escape_filter($this->env, ($context["fieldset_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 365
                echo "                            ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_label"] ?? null));
                echo "
                        </a>

                        ";
                // line 368
                if (($context["fieldset_help"] ?? null)) {
                    // line 369
                    echo "                            <div class=\"form-fieldset-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["fieldset_help"] ?? null));
                    echo "</div>
                        ";
                }
                // line 371
                echo "                    </div>
                </div>
            ";
            }
            // line 374
            echo "
            <div ";
            // line 375
            if (($context["fieldset_name"] ?? null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, ($context["fieldset_name"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-fieldset-body ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 379
    public function macro_close_form_fieldset(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 380
            echo "    ";
            @trigger_error("The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 380).", E_USER_DEPRECATED);
            // line 381
            echo "
            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 388
    public function macro_render_field($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 389
            echo "    ";
            @trigger_error("The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 389).", E_USER_DEPRECATED);
            // line 390
            echo "
    <div class=\"data-row ";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 391), "html", null, true);
            echo "\">
        <dt>
            ";
            // line 393
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 393));
            echo "

            ";
            // line 395
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 395))) {
                // line 396
                echo "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 396)), "html_attr");
                echo "\">
                    <i class=\"far fa-question-circle\"></i>
                </a>
            ";
            }
            // line 400
            echo "        </dt>
        <dd>
            ";
            // line 402
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 402), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dd>
    </div>
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
        return "@EasyAdmin/crud/detail.html.twig";
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
        return array (  1472 => 402,  1468 => 400,  1460 => 396,  1458 => 395,  1453 => 393,  1448 => 391,  1445 => 390,  1442 => 389,  1428 => 388,  1414 => 381,  1411 => 380,  1399 => 379,  1379 => 375,  1376 => 374,  1371 => 371,  1365 => 369,  1363 => 368,  1356 => 365,  1350 => 363,  1348 => 362,  1345 => 361,  1341 => 359,  1339 => 358,  1336 => 357,  1329 => 355,  1325 => 354,  1320 => 353,  1316 => 351,  1314 => 350,  1306 => 348,  1304 => 347,  1299 => 345,  1296 => 344,  1293 => 343,  1290 => 342,  1287 => 341,  1284 => 340,  1281 => 339,  1278 => 338,  1276 => 337,  1273 => 336,  1270 => 335,  1257 => 334,  1247 => 331,  1245 => 330,  1240 => 329,  1238 => 328,  1235 => 327,  1221 => 326,  1219 => 321,  1216 => 320,  1213 => 319,  1211 => 318,  1207 => 317,  1204 => 316,  1201 => 315,  1199 => 314,  1194 => 313,  1191 => 312,  1189 => 311,  1186 => 310,  1183 => 309,  1165 => 308,  1163 => 307,  1160 => 306,  1157 => 305,  1143 => 304,  1131 => 299,  1113 => 295,  1110 => 294,  1104 => 291,  1101 => 290,  1099 => 289,  1088 => 288,  1071 => 287,  1067 => 285,  1049 => 281,  1044 => 279,  1042 => 278,  1033 => 277,  1030 => 276,  1013 => 275,  1007 => 271,  1004 => 270,  990 => 269,  977 => 262,  964 => 261,  946 => 257,  943 => 256,  938 => 253,  932 => 251,  930 => 250,  927 => 249,  921 => 246,  918 => 245,  912 => 242,  906 => 241,  902 => 240,  897 => 239,  895 => 238,  892 => 237,  887 => 235,  884 => 234,  878 => 232,  876 => 231,  873 => 230,  869 => 228,  866 => 227,  864 => 226,  856 => 224,  854 => 223,  847 => 221,  844 => 220,  841 => 219,  838 => 218,  835 => 217,  832 => 216,  829 => 215,  816 => 214,  806 => 211,  793 => 210,  782 => 206,  776 => 204,  774 => 203,  770 => 201,  765 => 200,  759 => 199,  755 => 197,  753 => 196,  747 => 195,  744 => 194,  741 => 193,  738 => 192,  725 => 191,  714 => 187,  711 => 186,  709 => 185,  696 => 184,  685 => 180,  682 => 179,  680 => 178,  667 => 177,  656 => 173,  643 => 172,  632 => 168,  626 => 165,  623 => 164,  621 => 163,  600 => 162,  597 => 161,  594 => 160,  591 => 159,  578 => 158,  567 => 154,  554 => 153,  543 => 149,  530 => 148,  519 => 144,  511 => 141,  508 => 139,  506 => 138,  502 => 137,  500 => 136,  498 => 135,  493 => 133,  488 => 131,  486 => 130,  477 => 129,  474 => 128,  470 => 127,  465 => 124,  462 => 123,  459 => 122,  456 => 121,  443 => 120,  430 => 116,  428 => 115,  423 => 114,  421 => 113,  416 => 112,  414 => 111,  409 => 110,  407 => 109,  402 => 108,  400 => 107,  395 => 106,  393 => 105,  388 => 104,  386 => 103,  381 => 102,  379 => 101,  374 => 100,  372 => 99,  367 => 98,  365 => 97,  360 => 96,  357 => 95,  344 => 94,  331 => 89,  327 => 87,  320 => 83,  315 => 82,  310 => 78,  306 => 76,  304 => 75,  302 => 74,  300 => 73,  297 => 72,  295 => 70,  293 => 69,  288 => 68,  274 => 67,  270 => 325,  264 => 323,  261 => 322,  257 => 321,  250 => 63,  246 => 62,  242 => 60,  236 => 59,  230 => 57,  224 => 55,  221 => 54,  216 => 53,  212 => 52,  208 => 62,  205 => 61,  202 => 52,  198 => 51,  187 => 47,  182 => 46,  178 => 45,  174 => 37,  171 => 41,  170 => 40,  168 => 39,  166 => 38,  164 => 37,  160 => 36,  154 => 33,  150 => 32,  145 => 31,  141 => 30,  135 => 27,  131 => 26,  126 => 25,  122 => 24,  111 => 20,  107 => 19,  102 => 18,  98 => 17,  87 => 13,  83 => 12,  78 => 11,  74 => 10,  67 => 6,  60 => 5,  56 => 3,  54 => 8,  47 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/var/www/html/la-boutique/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
