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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_62fb33a330df58978464946984e59e6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_crud_widget_fieldsets' => [$this, 'block_ea_crud_widget_fieldsets'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_form_column_group_open_row' => [$this, 'block_ea_form_column_group_open_row'],
                'ea_form_column_group_close_row' => [$this, 'block_ea_form_column_group_close_row'],
                'ea_form_column_open_row' => [$this, 'block_ea_form_column_open_row'],
                'ea_form_column_close_row' => [$this, 'block_ea_form_column_close_row'],
                'ea_form_fieldset_open_row' => [$this, 'block_ea_form_fieldset_open_row'],
                'ea_form_fieldset_close_row' => [$this, 'block_ea_form_fieldset_close_row'],
                'ea_form_tablist_row' => [$this, 'block_ea_form_tablist_row'],
                'ea_form_tabpane_group_open_row' => [$this, 'block_ea_form_tabpane_group_open_row'],
                'ea_form_tabpane_group_close_row' => [$this, 'block_ea_form_tabpane_group_close_row'],
                'ea_form_tabpane_open_row' => [$this, 'block_ea_form_tabpane_open_row'],
                'ea_form_tabpane_close_row' => [$this, 'block_ea_form_tabpane_close_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
        // line 0
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('form_end', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_errors', $context, $blocks);
        // line 28
        echo "
";
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('time_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('file_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('form_row', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('collection_row', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('collection_entry_row', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('button_row', $context, $blocks);
        // line 242
        echo "
";
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('form_label', $context, $blocks);
        // line 289
        echo "
";
        // line 291
        echo "
";
        // line 292
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 297
        echo "
";
        // line 298
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 345
        echo "
";
        // line 346
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 350
        echo "
";
        // line 351
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 405
        echo "
";
        // line 406
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 409
        echo "
";
        // line 411
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 416
        echo "
";
        // line 418
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 489
        echo "
";
        // line 491
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 494
        echo "
";
        // line 495
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 499
        echo "
";
        // line 501
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 511
        echo "
";
        // line 513
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 524
        echo "
";
        // line 526
        $this->displayBlock('ea_form_row_row', $context, $blocks);
        // line 529
        echo "
";
        // line 530
        $this->displayBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 536
        echo "
";
        // line 537
        $this->displayBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 544
        echo "
";
        // line 545
        $this->displayBlock('ea_form_column_open_row', $context, $blocks);
        // line 564
        echo "
";
        // line 565
        $this->displayBlock('ea_form_column_close_row', $context, $blocks);
        // line 568
        echo "
";
        // line 569
        $this->displayBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 618
        echo "
";
        // line 619
        $this->displayBlock('ea_form_tablist_row', $context, $blocks);
        // line 647
        echo "
";
        // line 648
        $this->displayBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 652
        echo "
";
        // line 653
        $this->displayBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 657
        echo "
";
        // line 658
        $this->displayBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 671
        echo "
";
        // line 672
        $this->displayBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 676
        echo "
";
        // line 678
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 700
        echo "
";
        // line 701
        $this->displayBlock('comparison_widget', $context, $blocks);
        // line 704
        echo "
";
        // line 705
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 715
        echo "
";
        // line 716
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 719
        echo "
";
        // line 720
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 782
        echo "
";
        // line 783
        $this->displayBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 850
        echo "
";
        // line 851
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <input type=\"hidden\" name=\"referrer\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11), "html", null, true);
        echo "\">
";
    }

    // line 14
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
        ";
        }
        // line 18
        echo "    </form>
";
    }

    // line 21
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 24), "")) : ("")), "html", null, true);
                echo " invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
    }

    // line 31
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 33
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 33), "")) : ("")))]);
        }
        // line 35
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 36
            echo "        ";
            // line 37
            $context["required"] = false;
        }
        // line 39
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 42
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 43), "")) : ("")) . " form-inline"))]);
        // line 44
        echo "    <div class=\"datetime-widget datetime-widget-datetime\">";
        // line 45
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        // line 46
        echo "</div>
";
    }

    // line 49
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 51
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 52
        echo "</div>";
    }

    // line 55
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 57
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 58
        echo "</div>";
    }

    // line 61
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 63
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 64
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 72
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 74
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 74), "")) : ("")) . " form-group")]);
        // line 76
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 76), "ea_vars", [], "any", false, false, false, 76), "field", [], "any", false, false, false, 76);
        // line 77
        echo "
    <div class=\"";
        // line 78
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 78) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 78)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 78)) : ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 78) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 78)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 78)) : ("")))), "html", null, true);
        echo "\">
        <div ";
        // line 79
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 79, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 81
        echo "<div class=\"form-widget\">
                ";
        // line 82
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 82), null)) : (null)));
        // line 83
        echo "                ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 83), null)) : (null)));
        // line 84
        echo "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 85
        echo "
                ";
        // line 86
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 87
        echo "                    ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 88
            echo "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 89);
            echo "</span>
                        </div>
                    ";
        }
        // line 92
        echo "
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                    ";
        // line 95
        if (($context["has_append_html"] ?? null)) {
            // line 96
            echo "                        <span class=\"input-group-text\">";
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 96);
            echo "</span>
                    ";
        }
        // line 98
        echo "                ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 99
        echo "
                ";
        // line 100
        if ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 100) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 100)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 100)) : (false))) {
            // line 101
            echo "                    <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 101), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            echo "</small>
                ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["form"] ?? null), "vars", [], "any", false, true, false, 102), "help", [], "any", true, true, false, 102) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 102), "help", [], "any", false, false, false, 102)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 102), "help", [], "any", false, false, false, 102)) : (false))) {
            // line 103
            echo "                    <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 103), "help", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 103), "help_translation_parameters", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 103), "translation_domain", [], "any", false, false, false, 103));
            echo "</small>
                ";
        }
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 107
        echo "</div>
        </div>
    </div>

    ";
        // line 112
        echo "    ";
        if ((null === ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 112), null)) : (null)))) {
            // line 113
            echo "        <div class=\"flex-fill\"></div>
    ";
        }
    }

    // line 117
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "    ";
        if (("ea-autocomplete" == ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 118)) ? (_twig_default_filter((($__internal_compile_2 = ($context["attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 119
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 124
            echo "    ";
        }
        // line 125
        echo "
    ";
        // line 126
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 129
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 130))) {
            // line 131
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 132
            echo "    ";
        }
        // line 133
        echo "
    ";
        // line 134
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 136
($context["form"] ?? null), "vars", [], "any", false, false, false, 136), "ea_vars", [], "any", false, false, false, 136), "field", [], "any", false, false, false, 136) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 136), "ea_vars", [], "any", false, false, false, 136), "field", [], "any", false, false, false, 136), "customOptions", [], "any", false, false, false, 136), "get", ["entryIsComplex"], "method", false, false, false, 136))) ? ("true") : ("false")), "data-allow-add" => ((        // line 137
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 138
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 139
($context["form"] ?? null), "children", [], "any", false, false, false, 139))) ? (0) : (max(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 139))))), "data-form-type-name-placeholder" => ((        // line 140
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140)) : (""))]);
        // line 142
        echo "
    ";
        // line 143
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 146
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "    ";
        // line 149
        echo "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
        // line 150
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 150), "ea_vars", [], "any", false, true, false, 150), "field", [], "any", false, true, false, 150), "fieldFqcn", [], "any", true, true, false, 150) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 150), "ea_vars", [], "any", false, true, false, 150), "field", [], "any", false, true, false, 150), "fieldFqcn", [], "any", false, false, false, 150)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 150), "ea_vars", [], "any", false, true, false, 150), "field", [], "any", false, true, false, 150), "fieldFqcn", [], "any", false, false, false, 150)) : (false)));
        // line 151
        echo "
    <div class=\"ea-form-collection-items\">
        ";
        // line 153
        if (($context["isEmptyCollection"] ?? null)) {
            // line 154
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        } elseif (        // line 155
($context["is_array_field"] ?? null)) {
            // line 156
            echo "            ";
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 158
            echo "            <div class=\"accordion\">
                ";
            // line 159
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
            </div>
        ";
        }
        // line 162
        echo "    </div>

    ";
        // line 164
        if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 164), "prototype", [], "any", true, true, false, 164))) {
            // line 165
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 166
            echo "    ";
        }
        // line 167
        echo "
    ";
        // line 168
        if ((((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false)) &&  !($context["disabled"] ?? null))) {
            // line 169
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 176
    public function block_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 177), "ea_vars", [], "any", false, true, false, 177), "field", [], "any", false, true, false, 177), "fieldFqcn", [], "any", true, true, false, 177) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 177), "ea_vars", [], "any", false, true, false, 177), "field", [], "any", false, true, false, 177), "fieldFqcn", [], "any", false, false, false, 177)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 177), "ea_vars", [], "any", false, true, false, 177), "field", [], "any", false, true, false, 177), "fieldFqcn", [], "any", false, false, false, 177)) : (false)));
        // line 178
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "customOptions", [], "any", false, true, false, 178), "get", ["entryIsComplex"], "method", true, true, false, 178) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "customOptions", [], "any", false, true, false, 178), "get", ["entryIsComplex"], "method", false, false, false, 178)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "customOptions", [], "any", false, true, false, 178), "get", ["entryIsComplex"], "method", false, false, false, 178)) : (false));
        // line 179
        echo "    ";
        $context["allows_deleting_items"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "allow_delete", [], "any", true, true, false, 179)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "allow_delete", [], "any", false, false, false, 179), false)) : (false));
        // line 180
        echo "    ";
        $context["render_expanded"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "ea_vars", [], "any", false, true, false, 180), "field", [], "any", false, true, false, 180), "customOptions", [], "any", false, true, false, 180), "get", ["renderExpanded"], "method", true, true, false, 180) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "ea_vars", [], "any", false, true, false, 180), "field", [], "any", false, true, false, 180), "customOptions", [], "any", false, true, false, 180), "get", ["renderExpanded"], "method", false, false, false, 180)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "ea_vars", [], "any", false, true, false, 180), "field", [], "any", false, true, false, 180), "customOptions", [], "any", false, true, false, 180), "get", ["renderExpanded"], "method", false, false, false, 180)) : (false));
        // line 181
        echo "    ";
        ob_start(function () { return ''; });
        // line 182
        echo "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        $context["delete_item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        echo "
    <div class=\"field-collection-item ";
        // line 188
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 188), "valid", [], "any", false, false, false, 188)) ? ("is-invalid") : (""));
        echo "\">
        ";
        // line 189
        if (((array_key_exists("is_array_field", $context)) ? (_twig_default_filter(($context["is_array_field"] ?? null), false)) : (false))) {
            // line 190
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
            ";
            // line 191
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 192
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 193
                echo "                ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 195
            echo "        ";
        } else {
            // line 196
            echo "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 198
            echo ((($context["render_expanded"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null)), "html", null, true);
            echo "
                    </button>

                    ";
            // line 203
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 204
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 206
            echo "                </h2>
                <div id=\"";
            // line 207
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\" class=\"accordion-collapse collapse ";
            echo ((($context["render_expanded"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 216
        echo "    </div>
";
    }

    // line 219
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 221
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 222
            echo "            ";
            // line 224
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 225
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 226
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 228
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 228), "prototype", [], "any", true, true, false, 228))) {
                // line 229
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 230
                echo "            ";
            }
            // line 231
            echo "        ";
        }
        // line 232
        echo "
        ";
        // line 233
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 237
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 238
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 238), "css_class", [], "any", true, true, false, 238)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 238), "css_class", [], "any", false, false, false, 238), "")) : ("")), "html", null, true);
        echo "\">";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 240
        echo "</div>";
    }

    // line 245
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        if ((($context["label"] ?? null) === false)) {
        } else {
            // line 250
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 251
                $context["element"] = "legend";
                // line 252
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 252)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 252), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 254
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 254)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 254), "")) : ("")) . " form-control-label"))]);
            }
            // line 256
            if (($context["required"] ?? null)) {
                // line 257
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 257)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 257), "")) : ("")) . " required"))]);
            }
            // line 259
            if ((($context["label"] ?? null) === "")) {
            } elseif ((null ===             // line 262
($context["label"] ?? null))) {
                // line 263
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 264
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 265
($context["name"] ?? null), "%id%" =>                     // line 266
($context["id"] ?? null)]);
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_3 = $context;
                $__internal_compile_4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($__internal_compile_4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 272, $this->getSourceContext());
                }
                $__internal_compile_4 = twig_to_array($__internal_compile_4);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_3;
            }
            echo ">";
            // line 273
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 274
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 275
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 277
                    echo ($context["label"] ?? null);
                }
            } else {
                // line 280
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 281
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 283
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 286
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 292
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 293
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 294
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["label/empty"], "method", false, false, false, 294));
        echo "
    </div>
";
    }

    // line 298
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 299
        echo "    ";
        $context["force_error"] = true;
        // line 300
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 303
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 304
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 305
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 306
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 307
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 314
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 315
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 315) &&  !(null === (($__internal_compile_5 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_6 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>";
            // line 316
            if (((array_key_exists("download_label", $context)) ? (_twig_default_filter(($context["download_label"] ?? null), false)) : (false))) {
                // line 317
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 319
                echo twig_escape_filter($this->env, ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"))), "html", null, true);
            }
            // line 321
            echo "</a>
        ";
        }
        // line 323
        echo "
        ";
        // line 324
        ob_start(function () { return ''; });
        // line 325
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 325), "vars", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 328), "vars", [], "any", false, false, false, 328), "id", [], "any", false, false, false, 328), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 330
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 333
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 335), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 338
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 338)) {
            // line 339
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 339), 'row');
            echo "
            ";
        }
        // line 341
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 342), "vars", [], "any", false, false, false, 342), "id", [], "any", false, false, false, 342), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 346
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 347
        echo "    ";
        $context["force_error"] = true;
        // line 348
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 351
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 352
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 352), "formTypeOptions", [], "any", true, true, false, 352)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 352), "formTypeOptions", [], "any", false, false, false, 352), "")) : (""));
        // line 353
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 354
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 355
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 356
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 357
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 357) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 357)))) {
                    // line 358
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 358)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 360
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 362
                echo "                </div>
            ";
            } else {
                // line 364
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 365
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 366
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 367
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 367) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 367)))) {
                    // line 368
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 368)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 370
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 372
                echo "                </a>

                <div id=\"";
                // line 374
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 375
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 375) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 375)))) {
                    // line 376
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 376)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 378
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 380
                echo "                </div>
            ";
            }
            // line 382
            echo "        ";
        }
        // line 383
        echo "
        ";
        // line 384
        ob_start(function () { return ''; });
        // line 385
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 385), "vars", [], "any", false, false, false, 385), "id", [], "any", false, false, false, 385), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 388
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 388), "vars", [], "any", false, false, false, 388), "id", [], "any", false, false, false, 388), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 390
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 393
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 395), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 398
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 398)) {
            // line 399
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 399), 'row');
            echo "
            ";
        }
        // line 401
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 402
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 402), "vars", [], "any", false, false, false, 402), "id", [], "any", false, false, false, 402), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 406
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 407
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 411
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 412
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 413
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 418
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 419
        echo "    ";
        @trigger_error("The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." (\"@EasyAdmin/crud/form_theme.html.twig\" at line 419).", E_USER_DEPRECATED);
        // line 420
        echo "
    ";
        // line 421
        $this->displayBlock("ea_crud_widget_fieldsets", $context, $blocks);
        echo "
";
    }

    // line 424
    public function block_ea_crud_widget_fieldsets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 425
        echo "    ";
        @trigger_error("The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." (\"@EasyAdmin/crud/form_theme.html.twig\" at line 425).", E_USER_DEPRECATED);
        // line 426
        echo "
    ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 427), "ea_crud_form", [], "any", false, false, false, 427), "form_fieldsets", [], "any", false, false, false, 427), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 427) || (twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 427) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 428
            echo "        ";
            $context["fieldset_has_header"] = ((((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 428)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 428), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 428)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 428), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 428)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 428), false)) : (false)));
            // line 429
            echo "
        ";
            // line 430
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 430);
            // line 431
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 431);
            // line 432
            echo "
        <div class=\"";
            // line 433
            (((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 433) &&  !(null === twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 433)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 433), "html", null, true))) : (print ("")));
            echo "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 435
            if (($context["fieldset_has_header"] ?? null)) {
                // line 436
                echo "                    <div class=\"form-fieldset-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 436)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 436), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 438
                if ( !($context["collapsible"] ?? null)) {
                    // line 439
                    echo "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 441
                    echo "                                href=\"#content-";
                    echo twig_escape_filter($this->env, $context["fieldset_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 442
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                                aria-expanded=\"";
                    // line 443
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["fieldset_name"], "html", null, true);
                    echo "\"
                            ";
                }
                // line 445
                echo "                            >
                                ";
                // line 446
                if (($context["collapsible"] ?? null)) {
                    // line 447
                    echo "                                    <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                                ";
                }
                // line 449
                echo "
                                ";
                // line 450
                if (((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 450)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 450), false)) : (false))) {
                    // line 451
                    echo "                                    <i class=\"form-fieldset-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 451), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 453
                echo "                                ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 453));
                echo "
                            </a>

                            ";
                // line 456
                if (((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 456)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 456), false)) : (false))) {
                    // line 457
                    echo "                                <div class=\"form-fieldset-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 457));
                    echo "</div>
                            ";
                }
                // line 459
                echo "                        </div>
                    </div>
                ";
            }
            // line 462
            echo "
                <div id=\"content-";
            // line 463
            echo twig_escape_filter($this->env, $context["fieldset_name"], "html", null, true);
            echo "\" class=\"form-fieldset-body ";
            echo (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
            echo " ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"row\">
                        ";
            // line 465
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 465), "block_prefixes", [], "any", false, false, false, 465)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 465), "ea_crud_form", [], "any", false, false, false, 465), "form_fieldset", [], "any", false, false, false, 465) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 466
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "ea_crud_form", [], "any", false, false, false, 466), "form_tab", [], "any", false, false, false, 466) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "ea_crud_form", [], "any", false, false, false, 466), "form_tab", [], "any", false, false, false, 466) == ($context["tab_name"] ?? null)))) {
                    // line 467
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            ";
                }
                // line 469
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            echo "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 475
            echo "        ";
            // line 486
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_recursiveFieldsetForm", [($context["form"] ?? null)], 486, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 491
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 492
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 492), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 495
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 496
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 496), "name", [], "any", false, false, false, 496);
        // line 497
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 501
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 502
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 504
($context["form"] ?? null), "vars", [], "any", false, false, false, 504), "ea_vars", [], "any", false, false, false, 504), "field", [], "any", false, false, false, 504), "customOptions", [], "any", false, false, false, 504), "get", ["language"], "method", false, false, false, 504), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 505
($context["form"] ?? null), "vars", [], "any", false, false, false, 505), "ea_vars", [], "any", false, false, false, 505), "field", [], "any", false, false, false, 505), "customOptions", [], "any", false, false, false, 505), "get", ["tabSize"], "method", false, false, false, 505), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 506
($context["form"] ?? null), "vars", [], "any", false, false, false, 506), "ea_vars", [], "any", false, false, false, 506), "field", [], "any", false, false, false, 506), "customOptions", [], "any", false, false, false, 506), "get", ["indentWithTabs"], "method", false, false, false, 506)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 507
($context["form"] ?? null), "vars", [], "any", false, false, false, 507), "ea_vars", [], "any", false, false, false, 507), "field", [], "any", false, false, false, 507), "customOptions", [], "any", false, false, false, 507), "get", ["showLineNumbers"], "method", false, false, false, 507)) ? ("true") : ("false")), "data-number-of-rows" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 508
($context["form"] ?? null), "vars", [], "any", false, false, false, 508), "ea_vars", [], "any", false, false, false, 508), "field", [], "any", false, false, false, 508), "customOptions", [], "any", false, false, false, 508), "get", ["numOfRows"], "method", false, false, false, 508)])]);
        // line 509
        echo "
";
    }

    // line 513
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 514
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 516
($context["form"] ?? null), "vars", [], "any", false, true, false, 516), "ea_vars", [], "any", false, true, false, 516), "field", [], "any", false, true, false, 516), "customOptions", [], "any", false, true, false, 516), "get", ["numOfRows"], "method", true, true, false, 516)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 516), "ea_vars", [], "any", false, true, false, 516), "field", [], "any", false, true, false, 516), "customOptions", [], "any", false, true, false, 516), "get", ["numOfRows"], "method", false, false, false, 516), 5)) : (5)), "data-trix-editor-config" => json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 517
($context["form"] ?? null), "vars", [], "any", false, true, false, 517), "ea_vars", [], "any", false, true, false, 517), "field", [], "any", false, true, false, 517), "customOptions", [], "any", false, true, false, 517), "get", ["trixEditorConfig"], "method", true, true, false, 517)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 517), "ea_vars", [], "any", false, true, false, 517), "field", [], "any", false, true, false, 517), "customOptions", [], "any", false, true, false, 517), "get", ["trixEditorConfig"], "method", false, false, false, 517), null)) : (null)))])]);
        // line 518
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 521
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>
";
    }

    // line 526
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 527
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 527), "row_attr", [], "any", false, false, false, 527), "class", [], "any", false, false, false, 527), "html", null, true);
        echo "\"></div>
";
    }

    // line 530
    public function block_ea_form_column_group_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 531
        echo "    ";
        // line 532
        echo "    ";
        if ( !((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 532), "ea_is_inside_tab", [], "any", true, true, false, 532)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 532), "ea_is_inside_tab", [], "any", false, false, false, 532), false)) : (false))) {
            // line 533
            echo "        <div class=\"row\">
    ";
        }
    }

    // line 537
    public function block_ea_form_column_group_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 538
        echo "    ";
        // line 540
        echo "    ";
        if ( !((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 540), "ea_is_inside_tab", [], "any", true, true, false, 540)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 540), "ea_is_inside_tab", [], "any", false, false, false, 540), false)) : (false))) {
            // line 541
            echo "        </div>
    ";
        }
    }

    // line 545
    public function block_ea_form_column_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 546
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 546), "ea_vars", [], "any", false, false, false, 546), "field", [], "any", false, false, false, 546);
        // line 547
        echo "    ";
        $context["field_icon"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 547);
        // line 548
        echo "    ";
        $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 548) != false)) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 548) != null)) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 548) != "")) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 548) != null));
        // line 549
        echo "
    <div class=\"form-column ";
        // line 550
        echo (( !($context["column_has_title"] ?? null)) ? ("form-column-no-header") : (""));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 550), "html", null, true);
        echo "\">
        ";
        // line 551
        if (($context["column_has_title"] ?? null)) {
            // line 552
            echo "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 554
            if (($context["field_icon"] ?? null)) {
                echo "<i class=\"form-column-icon fa fa-fw fa-";
                echo twig_escape_filter($this->env, ($context["field_icon"] ?? null), "html", null, true);
                echo "\"></i>";
            }
            // line 555
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 555)) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", true, true, false, 555)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 555), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 555), "translationDomain", [], "any", false, false, false, 555));
            }
            // line 556
            echo "                </div>

                ";
            // line 558
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 558)) {
                // line 559
                echo "                    <div class=\"form-column-help\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 559), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 559), "translationDomain", [], "any", false, false, false, 559));
                echo "</div>
                ";
            }
            // line 561
            echo "            </div>
        ";
        }
    }

    // line 565
    public function block_ea_form_column_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 566
        echo "    </div>
";
    }

    // line 569
    public function block_ea_form_fieldset_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 570
        echo "    ";
        $context["fieldset_has_header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 570), "label", [], "any", false, false, false, 570) || ($context["ea_icon"] ?? null)) || ($context["ea_help"] ?? null));
        // line 571
        echo "
    <div class=\"form-fieldset ";
        // line 572
        echo (( !($context["fieldset_has_header"] ?? null)) ? ("form-fieldset-no-header") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ($context["ea_css_class"] ?? null), "html", null, true);
        echo "\">
        <fieldset>
            ";
        // line 574
        if (($context["fieldset_has_header"] ?? null)) {
            // line 575
            echo "                <div class=\"form-fieldset-header ";
            echo ((($context["ea_is_collapsible"] ?? null)) ? ("collapsible") : (""));
            echo " ";
            echo (( !twig_test_empty(($context["ea_help"] ?? null))) ? ("with-help") : (""));
            echo "\">
                    <div class=\"form-fieldset-title\">
                        ";
            // line 577
            ob_start(function () { return ''; });
            // line 578
            echo "                            ";
            if (($context["ea_is_collapsible"] ?? null)) {
                // line 579
                echo "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
            }
            // line 581
            echo "
                            ";
            // line 582
            if (($context["ea_icon"] ?? null)) {
                // line 583
                echo "                                <i class=\"form-fieldset-icon ";
                echo twig_escape_filter($this->env, ($context["ea_icon"] ?? null), "html", null, true);
                echo "\"></i>
                            ";
            }
            // line 585
            echo "
                            ";
            // line 586
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 586), "label", [], "any", false, false, false, 586));
            echo "
                        ";
            $context["fieldset_title_contents"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 588
            echo "
                        ";
            // line 589
            if (($context["ea_is_collapsible"] ?? null)) {
                // line 590
                echo "                            <a href=\"#content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 590), "name", [], "any", false, false, false, 590), "html", null, true);
                echo "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                // line 591
                echo ((($context["ea_is_collapsed"] ?? null)) ? ("collapsed") : (""));
                echo "\"
                               aria-expanded=\"";
                // line 592
                echo ((($context["ea_is_collapsed"] ?? null)) ? ("false") : ("true"));
                echo "\" aria-controls=\"content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 592), "name", [], "any", false, false, false, 592), "html", null, true);
                echo "\">
                                ";
                // line 593
                echo ($context["fieldset_title_contents"] ?? null);
                echo "
                            </a>
                        ";
            } else {
                // line 596
                echo "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                // line 597
                echo ($context["fieldset_title_contents"] ?? null);
                echo "
                            </span>
                        ";
            }
            // line 600
            echo "
                        ";
            // line 601
            if (($context["ea_help"] ?? null)) {
                // line 602
                echo "                            <div class=\"form-fieldset-help\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null));
                echo "</div>
                        ";
            }
            // line 604
            echo "                    </div>
                </div>
            ";
        }
        // line 607
        echo "
            <div id=\"content-";
        // line 608
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 608), "name", [], "any", false, false, false, 608), "html", null, true);
        echo "\" class=\"form-fieldset-body ";
        echo (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
        echo " ";
        echo ((($context["ea_is_collapsible"] ?? null)) ? ("collapse") : (""));
        echo " ";
        echo (( !($context["ea_is_collapsed"] ?? null)) ? ("show") : (""));
        echo "\">
                <div class=\"row\">
";
    }

    // line 612
    public function block_ea_form_fieldset_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 613
        echo "                </div>
            </div>
        </fieldset>
    </div>
";
    }

    // line 619
    public function block_ea_form_tablist_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 620
        echo "    ";
        $context["tab_id_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 621
        echo "    ";
        $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 622
        echo "    ";
        $context["tab_error_count_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 623
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 623), "ea_vars", [], "any", false, false, false, 623), "field", [], "any", false, false, false, 623);
        // line 624
        echo "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 627));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 628
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 629
            if (twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 629)) {
                echo "active";
            }
            echo "\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 629), "html", null, true);
            echo "\" id=\"tablist-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 629), "html", null, true);
            echo "\" data-bs-toggle=\"tab\">";
            // line 630
            if (((twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 630)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 630), false)) : (false))) {
                // line 631
                echo "<i class=\"tab-nav-item-icon fa-fw ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 631), "html", null, true);
                echo "\"></i>";
            }
            // line 633
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 633), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 633), "translationDomain", [], "any", false, false, false, 633));
            echo "

                        ";
            // line 635
            $context["tab_error_count"] = twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 635);
            // line 636
            if ((($context["tab_error_count"] ?? null) > 0)) {
                // line 637
                echo "<span class=\"badge badge-danger\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                echo "\">";
                // line 638
                echo twig_escape_filter($this->env, ($context["tab_error_count"] ?? null), "html", null, true);
                // line 639
                echo "</span>";
            }
            // line 641
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 644
        echo "        </ul>
    </div>
";
    }

    // line 648
    public function block_ea_form_tabpane_group_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 649
        echo "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
    }

    // line 653
    public function block_ea_form_tabpane_group_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 654
        echo "        </div>
    </div>
";
    }

    // line 658
    public function block_ea_form_tabpane_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 659
        echo "    ";
        $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 660
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 660), "ea_vars", [], "any", false, false, false, 660), "field", [], "any", false, false, false, 660);
        // line 661
        echo "
    <div id=\"";
        // line 662
        echo twig_escape_filter($this->env, ($context["ea_tab_id"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 662)) {
            echo "active";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["ea_css_class"] ?? null), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 662), "attr", [], "any", false, false, false, 662));
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
        // line 663
        if (($context["ea_help"] ?? null)) {
            // line 664
            echo "            <div class=\"content-header-help tab-help\">
                ";
            // line 665
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 665), "translationDomain", [], "any", false, false, false, 665));
            echo "
            </div>
        ";
        }
        // line 668
        echo "
        <div class=\"row\">
";
    }

    // line 672
    public function block_ea_form_tabpane_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 673
        echo "        </div>
    </div>
";
    }

    // line 678
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 679
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 679), "query", [], "any", false, true, false, 679), "all", [], "method", false, true, false, 679), "filters", [], "array", true, true, false, 679)) ? (_twig_default_filter((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 679), "query", [], "any", false, true, false, 679), "all", [], "method", false, true, false, 679)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["filters"] ?? null) : null), [])) : ([])));
        // line 680
        echo "
    ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
            // line 682
            echo "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 683
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 683), "name", [], "any", false, false, false, 683), "html", null, true);
            echo "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 684
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 684), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 685
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 685), "name", [], "any", false, false, false, 685), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 686
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 686), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 686), "name", [], "any", false, false, false, 686), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 686), "html", null, true);
            echo "\"
                        ";
            // line 687
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 687), "label_attr", [], "any", true, true, false, 687)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 687), "label_attr", [], "any", false, false, false, 687), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                        ";
            // line 688
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 688), "label", [], "any", true, true, false, 688)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 688), "label", [], "any", false, false, false, 688), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 688), "name", [], "any", false, false, false, 688)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 688), "name", [], "any", false, false, false, 688)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 688), "translationDomain", [], "any", false, false, false, 688)), "html", null, true);
            echo "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 691
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 691), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 691), "name", [], "any", false, false, false, 691), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 691), "html", null, true);
            echo "\">
                    <div class=\"form-widget\">
                        ";
            // line 693
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                    </div>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 701
    public function block_comparison_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 702
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 702), "attr", [], "any", false, false, false, 702), ["data-ea-comparison-id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 702), "id", [], "any", false, false, false, 702)])]);
        echo "
";
    }

    // line 705
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 706
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 707
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 707), 'row');
        echo "
        ";
        // line 708
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 708), 'row');
        echo "
        <div data-ea-value2-of-comparison-id=\"";
        // line 709
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 709), "vars", [], "any", false, false, false, 709), "id", [], "any", false, false, false, 709), "html", null, true);
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 709), "vars", [], "any", false, false, false, 709), "value", [], "any", false, false, false, 709) != "between")) ? ("d-none") : (""));
        echo "\">
            ";
        // line 710
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 710), 'row');
        echo "
        </div>
    </div>";
        // line 713
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 716
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 717
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 720
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 721
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 723
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 724
        echo "            ";
        $context["title"] = "";
        // line 725
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 726
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 727
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 728
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 729
                echo "                ";
            } else {
                // line 730
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 730);
                // line 731
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 731));
                // line 732
                echo "                ";
            }
            // line 733
            echo "            ";
        }
        // line 734
        echo "            <div class=\"custom-file\">
                ";
        // line 735
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 735), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 735), "vars", [], "any", false, false, false, 735), "attr", [], "any", false, false, false, 735), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "d-none"])]);
        echo "
                ";
        // line 736
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        echo "
            </div>
            <div class=\"input-group-text\">";
        // line 739
        if (($context["currentFiles"] ?? null)) {
            // line 740
            if (($context["multiple"] ?? null)) {
                // line 741
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 741)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 743
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 743)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 746
        if (($context["allow_delete"] ?? null)) {
            // line 747
            echo "                    <label class=\"btn ea-fileupload-delete-btn ";
            echo ((twig_test_empty(($context["currentFiles"] ?? null))) ? ("d-none") : (""));
            echo "\" for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 747), "vars", [], "any", false, false, false, 747), "id", [], "any", false, false, false, 747), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 751
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 751), "vars", [], "any", false, false, false, 751), "id", [], "any", false, false, false, 751), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 756
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 757
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 760
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 761
                echo "                        <tr>
                            <td>
                                ";
                // line 763
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 763))), "html", null, true);
                    echo "\">";
                }
                // line 764
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 764)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 765
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 765), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 767
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 768
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 769
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 769)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 772
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 776
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 777
            echo "            <div class=\"d-none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 777), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 779
        echo "    </div>
    ";
        // line 780
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 780), 'errors');
        echo "
";
    }

    // line 783
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 784
        echo "    ";
        $context["placeholder"] = "";
        // line 785
        echo "    ";
        $context["title"] = "";
        // line 786
        echo "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 787
        echo "    ";
        if (($context["currentFiles"] ?? null)) {
            // line 788
            echo "        ";
            if (($context["multiple"] ?? null)) {
                // line 789
                echo "            ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 790
                echo "        ";
            } else {
                // line 791
                echo "            ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 791);
                // line 792
                echo "            ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 792));
                // line 793
                echo "        ";
            }
            // line 794
            echo "    ";
        }
        // line 795
        echo "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 798
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 798), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 798), "vars", [], "any", false, false, false, 798), "attr", [], "any", false, false, false, 798), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        echo "

            ";
        // line 800
        if (($context["currentFiles"] ?? null)) {
            // line 801
            echo "                <span class=\"input-group-text\">
                    ";
            // line 802
            if (($context["multiple"] ?? null)) {
                // line 803
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 803)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 805
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 805)), "html", null, true);
                echo "
                    ";
            }
            // line 807
            echo "                </span>
            ";
        }
        // line 809
        echo "
            ";
        // line 810
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 811
            echo "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 815
        echo "
            ";
        // line 816
        if (($context["currentFiles"] ?? null)) {
            // line 817
            echo "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 821
        echo "        </div>

        ";
        // line 823
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 824
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 827
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 828
                echo "                        <tr>
                            <td>
                                ";
                // line 830
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 830))), "html", null, true);
                    echo "\">";
                }
                // line 831
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 831)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 832
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 832), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 834
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 835
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 836
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 836)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 839
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 843
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 844
            echo "            <div class=\"d-none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 844), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 846
        echo "    </div>

    ";
        // line 848
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 848), 'errors');
        echo "
";
    }

    // line 851
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 852
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => json_encode(twig_array_map($this->env, twig_split_filter($this->env,         // line 854
($context["target"] ?? null), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 854), "children", [], "any", false, false, false, 854)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["name"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 854), "id", [], "any", false, false, false, 854); }))]);
        // line 856
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 856)) {
            // line 857
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_9 =             // line 858
($context["attr"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["data-confirm-text"] ?? null) : null))]);
            // line 860
            echo "    ";
        }
        // line 861
        echo "
    <div class=\"input-group\">
        ";
        // line 863
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
    }

    // line 475
    public function macro_recursiveFieldsetForm($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 476
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "block_prefixes", [], "any", false, false, false, 476)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 476), "ea_crud_form", [], "any", false, true, false, 476), "form_tab", [], "any", true, true, false, 476) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "ea_crud_form", [], "any", false, false, false, 476), "form_tab", [], "any", false, false, false, 476)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 476), "ea_crud_form", [], "any", false, true, false, 476), "form_tabs", [], "any", true, true, false, 476))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 477
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "ea_crud_form", [], "any", false, true, false, 477), "form_tabs", [], "any", true, true, false, 477)) {
                    // line 478
                    echo "                    ";
                    // line 479
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_recursiveFieldsetForm", [$context["field"]], 479, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 481
                    echo "                    ";
                    // line 482
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                ";
                }
                // line 484
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        ";

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
        return "@EasyAdmin/crud/form_theme.html.twig";
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
        return array (  2492 => 485,  2486 => 484,  2480 => 482,  2478 => 481,  2472 => 479,  2470 => 478,  2467 => 477,  2462 => 476,  2449 => 475,  2439 => 863,  2435 => 861,  2432 => 860,  2430 => 858,  2428 => 857,  2425 => 856,  2423 => 854,  2421 => 852,  2417 => 851,  2411 => 848,  2407 => 846,  2401 => 844,  2398 => 843,  2392 => 839,  2383 => 836,  2380 => 835,  2376 => 834,  2371 => 832,  2366 => 831,  2360 => 830,  2356 => 828,  2352 => 827,  2347 => 824,  2345 => 823,  2341 => 821,  2335 => 817,  2333 => 816,  2330 => 815,  2324 => 811,  2322 => 810,  2319 => 809,  2315 => 807,  2309 => 805,  2303 => 803,  2301 => 802,  2298 => 801,  2296 => 800,  2291 => 798,  2286 => 795,  2283 => 794,  2280 => 793,  2277 => 792,  2274 => 791,  2271 => 790,  2268 => 789,  2265 => 788,  2262 => 787,  2259 => 786,  2256 => 785,  2253 => 784,  2249 => 783,  2243 => 780,  2240 => 779,  2234 => 777,  2231 => 776,  2225 => 772,  2216 => 769,  2213 => 768,  2209 => 767,  2204 => 765,  2199 => 764,  2193 => 763,  2189 => 761,  2185 => 760,  2180 => 757,  2178 => 756,  2169 => 751,  2159 => 747,  2157 => 746,  2150 => 743,  2144 => 741,  2142 => 740,  2140 => 739,  2135 => 736,  2131 => 735,  2128 => 734,  2125 => 733,  2122 => 732,  2119 => 731,  2116 => 730,  2113 => 729,  2110 => 728,  2107 => 727,  2104 => 726,  2101 => 725,  2098 => 724,  2096 => 723,  2092 => 721,  2088 => 720,  2081 => 717,  2077 => 716,  2073 => 713,  2068 => 710,  2062 => 709,  2058 => 708,  2054 => 707,  2051 => 706,  2047 => 705,  2040 => 702,  2036 => 701,  2014 => 693,  2003 => 691,  1997 => 688,  1983 => 687,  1975 => 686,  1969 => 685,  1965 => 684,  1961 => 683,  1958 => 682,  1941 => 681,  1938 => 680,  1935 => 679,  1931 => 678,  1925 => 673,  1921 => 672,  1915 => 668,  1909 => 665,  1906 => 664,  1904 => 663,  1883 => 662,  1880 => 661,  1877 => 660,  1874 => 659,  1870 => 658,  1864 => 654,  1860 => 653,  1854 => 649,  1850 => 648,  1844 => 644,  1836 => 641,  1833 => 639,  1831 => 638,  1827 => 637,  1825 => 636,  1823 => 635,  1818 => 633,  1813 => 631,  1811 => 630,  1802 => 629,  1799 => 628,  1795 => 627,  1790 => 624,  1787 => 623,  1784 => 622,  1781 => 621,  1778 => 620,  1774 => 619,  1766 => 613,  1762 => 612,  1749 => 608,  1746 => 607,  1741 => 604,  1735 => 602,  1733 => 601,  1730 => 600,  1724 => 597,  1721 => 596,  1715 => 593,  1709 => 592,  1705 => 591,  1700 => 590,  1698 => 589,  1695 => 588,  1690 => 586,  1687 => 585,  1681 => 583,  1679 => 582,  1676 => 581,  1672 => 579,  1669 => 578,  1667 => 577,  1659 => 575,  1657 => 574,  1650 => 572,  1647 => 571,  1644 => 570,  1640 => 569,  1635 => 566,  1631 => 565,  1625 => 561,  1619 => 559,  1617 => 558,  1613 => 556,  1608 => 555,  1602 => 554,  1598 => 552,  1596 => 551,  1590 => 550,  1587 => 549,  1584 => 548,  1581 => 547,  1578 => 546,  1574 => 545,  1568 => 541,  1565 => 540,  1563 => 538,  1559 => 537,  1553 => 533,  1550 => 532,  1548 => 531,  1544 => 530,  1537 => 527,  1533 => 526,  1526 => 521,  1521 => 518,  1519 => 517,  1518 => 516,  1516 => 514,  1512 => 513,  1507 => 509,  1505 => 508,  1504 => 507,  1503 => 506,  1502 => 505,  1501 => 504,  1499 => 502,  1495 => 501,  1488 => 497,  1485 => 496,  1481 => 495,  1474 => 492,  1470 => 491,  1459 => 486,  1457 => 475,  1448 => 470,  1442 => 469,  1436 => 467,  1433 => 466,  1429 => 465,  1418 => 463,  1415 => 462,  1410 => 459,  1404 => 457,  1402 => 456,  1395 => 453,  1389 => 451,  1387 => 450,  1384 => 449,  1380 => 447,  1378 => 446,  1375 => 445,  1368 => 443,  1364 => 442,  1359 => 441,  1355 => 439,  1353 => 438,  1345 => 436,  1343 => 435,  1338 => 433,  1335 => 432,  1332 => 431,  1330 => 430,  1327 => 429,  1324 => 428,  1319 => 427,  1316 => 426,  1313 => 425,  1309 => 424,  1303 => 421,  1300 => 420,  1297 => 419,  1293 => 418,  1282 => 413,  1277 => 412,  1273 => 411,  1266 => 407,  1262 => 406,  1255 => 402,  1252 => 401,  1246 => 399,  1244 => 398,  1238 => 395,  1234 => 394,  1231 => 393,  1227 => 390,  1222 => 388,  1215 => 385,  1213 => 384,  1210 => 383,  1207 => 382,  1203 => 380,  1197 => 378,  1191 => 376,  1189 => 375,  1185 => 374,  1181 => 372,  1175 => 370,  1169 => 368,  1167 => 367,  1163 => 366,  1160 => 365,  1157 => 364,  1153 => 362,  1147 => 360,  1141 => 358,  1139 => 357,  1136 => 356,  1133 => 355,  1131 => 354,  1128 => 353,  1125 => 352,  1121 => 351,  1114 => 348,  1111 => 347,  1107 => 346,  1100 => 342,  1097 => 341,  1091 => 339,  1089 => 338,  1083 => 335,  1079 => 334,  1076 => 333,  1072 => 330,  1067 => 328,  1060 => 325,  1058 => 324,  1055 => 323,  1051 => 321,  1048 => 319,  1045 => 317,  1043 => 316,  1040 => 315,  1035 => 314,  1032 => 307,  1029 => 306,  1027 => 305,  1024 => 304,  1020 => 303,  1013 => 300,  1010 => 299,  1006 => 298,  999 => 294,  996 => 293,  992 => 292,  985 => 286,  981 => 283,  978 => 281,  976 => 280,  972 => 277,  969 => 275,  967 => 274,  965 => 273,  950 => 272,  946 => 269,  943 => 266,  942 => 265,  941 => 264,  939 => 263,  937 => 262,  935 => 259,  932 => 257,  930 => 256,  927 => 254,  924 => 252,  922 => 251,  920 => 250,  917 => 246,  913 => 245,  909 => 240,  907 => 239,  901 => 238,  897 => 237,  890 => 233,  887 => 232,  884 => 231,  881 => 230,  878 => 229,  875 => 228,  869 => 226,  866 => 225,  863 => 224,  861 => 222,  859 => 221,  856 => 220,  852 => 219,  847 => 216,  838 => 210,  830 => 207,  827 => 206,  821 => 204,  819 => 203,  813 => 200,  806 => 198,  802 => 196,  799 => 195,  793 => 193,  791 => 192,  787 => 191,  782 => 190,  780 => 189,  774 => 188,  771 => 187,  764 => 183,  761 => 182,  758 => 181,  755 => 180,  752 => 179,  749 => 178,  746 => 177,  742 => 176,  734 => 171,  730 => 169,  728 => 168,  725 => 167,  722 => 166,  719 => 165,  717 => 164,  713 => 162,  707 => 159,  704 => 158,  698 => 156,  696 => 155,  691 => 154,  689 => 153,  685 => 151,  682 => 150,  679 => 149,  677 => 147,  673 => 146,  667 => 143,  664 => 142,  662 => 140,  661 => 139,  660 => 138,  659 => 137,  658 => 136,  657 => 134,  654 => 133,  651 => 132,  648 => 131,  645 => 130,  641 => 129,  635 => 126,  632 => 125,  629 => 124,  626 => 119,  623 => 118,  619 => 117,  613 => 113,  610 => 112,  604 => 107,  602 => 106,  596 => 103,  594 => 102,  589 => 101,  587 => 100,  584 => 99,  579 => 98,  573 => 96,  571 => 95,  566 => 93,  563 => 92,  557 => 89,  554 => 88,  551 => 87,  547 => 86,  544 => 85,  541 => 84,  538 => 83,  536 => 82,  533 => 81,  531 => 80,  520 => 79,  516 => 78,  513 => 77,  510 => 76,  508 => 74,  506 => 73,  502 => 72,  497 => 66,  494 => 64,  492 => 63,  490 => 62,  486 => 61,  482 => 58,  480 => 57,  478 => 56,  474 => 55,  470 => 52,  468 => 51,  466 => 50,  462 => 49,  457 => 46,  455 => 45,  453 => 44,  450 => 43,  446 => 42,  442 => 39,  439 => 37,  437 => 36,  435 => 35,  432 => 33,  430 => 32,  426 => 31,  421 => 26,  410 => 24,  405 => 23,  402 => 22,  398 => 21,  393 => 18,  387 => 16,  384 => 15,  380 => 14,  374 => 11,  369 => 9,  366 => 8,  360 => 6,  357 => 5,  353 => 4,  349 => 851,  346 => 850,  344 => 783,  341 => 782,  339 => 720,  336 => 719,  334 => 716,  331 => 715,  329 => 705,  326 => 704,  324 => 701,  321 => 700,  319 => 678,  316 => 676,  314 => 672,  311 => 671,  309 => 658,  306 => 657,  304 => 653,  301 => 652,  299 => 648,  296 => 647,  294 => 619,  291 => 618,  289 => 612,  286 => 611,  284 => 569,  281 => 568,  279 => 565,  276 => 564,  274 => 545,  271 => 544,  269 => 537,  266 => 536,  264 => 530,  261 => 529,  259 => 526,  256 => 524,  254 => 513,  251 => 511,  249 => 501,  246 => 499,  244 => 495,  241 => 494,  239 => 491,  236 => 489,  234 => 424,  231 => 423,  229 => 418,  226 => 416,  224 => 411,  221 => 409,  219 => 406,  216 => 405,  214 => 351,  211 => 350,  209 => 346,  206 => 345,  204 => 303,  201 => 302,  199 => 298,  196 => 297,  194 => 292,  191 => 291,  188 => 289,  186 => 245,  183 => 244,  180 => 242,  178 => 237,  175 => 236,  173 => 219,  170 => 218,  168 => 176,  165 => 175,  163 => 146,  160 => 145,  158 => 129,  155 => 128,  153 => 117,  150 => 116,  148 => 72,  145 => 71,  142 => 69,  140 => 61,  137 => 60,  135 => 55,  132 => 54,  130 => 49,  127 => 48,  125 => 42,  122 => 41,  120 => 31,  117 => 30,  114 => 28,  112 => 21,  109 => 20,  107 => 14,  104 => 13,  102 => 4,  99 => 3,  92 => 0,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/var/www/html/la-boutique/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/form_theme.html.twig");
    }
}
