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

/* order/index.html.twig */
class __TwigTemplate_21867b86be5ee03a2bac4063ddd83174 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h2>Je passe ma commande</h2>
    <p>Choississez vos préférences avant de passer votre commande sur La Boutique Française</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
          

            ";
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_recap")]);
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, false, 16), 'label', ["label" => "Choisissez votre adresse de livraison"]);
        echo "
                 <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_adress_add");
        echo "\"> Ajouter une nouvelle adresse</a> 
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

            ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "

            ";
        // line 23
        echo twig_replace_filter(($context["formHtml"] ?? null), ["[br]" => "<br>"]);
        echo "
            
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Récap de ma commande</b><br>
                <p>Retrouvez le récapitulatif de votre commande</p>
            </div>
                
            <div class=\"order-summary\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 34
            echo "
            <div class=\"row ";
            // line 35
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
                <div class=\"col-2\"><img src=\"/uploads/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "illustration", [], "any", false, false, false, 36), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "\" height=\"75px\"></div>
                <div class=\"col-8 my-auto\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "<br>
                    <small>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "subtitle", [], "any", false, false, false, 39), "html", null, true);
            echo "</small>
                </div>
                <div class=\"col-2 my-auto\">x ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41), "html", null, true);
            echo "</div>
            </div>
            
            
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
            
            
        </div>
    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "order/index.html.twig";
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
        return array (  148 => 47,  136 => 41,  131 => 39,  127 => 38,  120 => 36,  114 => 35,  111 => 34,  107 => 33,  94 => 23,  90 => 21,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  69 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/index.html.twig", "/var/www/html/la-boutique/templates/order/index.html.twig");
    }
}
