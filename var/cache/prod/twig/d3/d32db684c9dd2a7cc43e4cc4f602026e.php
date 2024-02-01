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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_f2e63e6fdbf9a26c13a637605a6337a1 extends Template
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
        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        if (((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) {
            // line 8
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => twig_sprintf(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numResults", [], "any", false, false, false, 8))], "EasyAdminBundle");
            echo "
        ";
        }
        // line 10
        echo "    </div>
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 11) || twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 11))) {
            // line 12
            echo "        <nav class=\"pager list-pagination-paginator ";
            echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("first-page") : (""));
            echo " ";
            echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 12)) ? ("last-page") : (""));
            echo "\">
            <ul class=\"pagination\">
                <li class=\"page-item ";
            // line 14
            echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 14)) ? ("disabled") : (""));
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 15
            (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 15)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 15)], "method", false, false, false, 15), "html", null, true))));
            echo "\">
                        <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </a>
                </li>
    
                ";
            // line 20
            if (((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) {
                // line 21
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "pageRange", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 22
                    echo "                        <li class=\"page-item ";
                    echo ((($context["page"] == twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 22))) ? ("active") : (""));
                    echo " ";
                    echo (((null === $context["page"])) ? ("disabled") : (""));
                    echo "\">
                            ";
                    // line 23
                    if ((null === $context["page"])) {
                        // line 24
                        echo "                                <span class=\"page-link\">&hellip;</span>
                            ";
                    } else {
                        // line 26
                        echo "                                <a class=\"page-link\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [$context["page"]], "method", false, false, false, 26), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 28
                    echo "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                ";
            } else {
                // line 31
                echo "                    <li class=\"page-item active ";
                echo (((null === twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 31))) ? ("disabled") : (""));
                echo "\">
                        <a class=\"page-link\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 32), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            // line 35
            echo "    
                <li class=\"page-item ";
            // line 36
            echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 36)) ? ("disabled") : (""));
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 37
            (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 37)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true))));
            echo "\">
                        <span class=\"btn-label\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
            echo "</span> <i class=\"fa fa-angle-right mx-1\"></i>
                    </a>
                </li>
            </ul>
        </nav>
    ";
        }
        // line 44
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/paginator.html.twig";
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
        return array (  149 => 44,  140 => 38,  136 => 37,  132 => 36,  129 => 35,  121 => 32,  116 => 31,  113 => 30,  106 => 28,  98 => 26,  94 => 24,  92 => 23,  85 => 22,  80 => 21,  78 => 20,  71 => 16,  67 => 15,  63 => 14,  55 => 12,  53 => 11,  50 => 10,  44 => 8,  42 => 7,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/paginator.html.twig", "/var/www/html/la-boutique/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/paginator.html.twig");
    }
}
