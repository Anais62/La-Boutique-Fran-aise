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

/* account/order_show.html.twig */
class __TwigTemplate_0fb26d356a48e4382e66aa3d769927bd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma commande - La boutique Française ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <h1>Ma commande ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\">Retour</a>
    <hr>
    <strong>Statut de la commande : </strong>
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 11) == 1)) {
            // line 12
            echo "        Paiement accepté
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 13
($context["order"] ?? null), "state", [], "any", false, false, false, 13) == 2)) {
            // line 14
            echo "        Préparation en cours
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 15
($context["order"] ?? null), "state", [], "any", false, false, false, 15) == 3)) {
            // line 16
            echo "        Livraison en cours
    ";
        }
        // line 18
        echo "    <br>
    <strong>Commande passée le : </strong> ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createAt", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
        echo "<br>
    <strong>Référence de ma commande : </strong><small>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 20), "html", null, true);
        echo "</small><br>
    <strong>Transporteur choisi : </strong>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carriername", [], "any", false, false, false, 21), "html", null, true);
        echo "
    <hr>
    <strong>Détails :</strong>
    <hr>
        
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix unitaire</th>
                <th scope=\"col\">Total</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 37
            echo "                
              <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>x";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 42) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
            </tr>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "          
          
          
            </tbody>
        </table>

    <div class=\"text-end mt-4\">
        
        <strong>Sous-total : </strong>";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 54) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
        <strong>Livraison : </strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierprice", [], "any", false, false, false, 55) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
        <strong>Total : </strong>";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 56) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 56)) / 100), 2, ",", "."), "html", null, true);
        echo " €

     </div>    

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "account/order_show.html.twig";
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
        return array (  164 => 56,  160 => 55,  156 => 54,  146 => 46,  136 => 42,  132 => 41,  128 => 40,  124 => 39,  120 => 37,  116 => 36,  98 => 21,  94 => 20,  90 => 19,  87 => 18,  83 => 16,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  71 => 11,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "/var/www/html/la-boutique/templates/account/order_show.html.twig");
    }
}
