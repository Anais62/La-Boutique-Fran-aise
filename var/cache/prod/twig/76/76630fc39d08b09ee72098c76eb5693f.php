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

/* account/order.html.twig */
class __TwigTemplate_62209b1fa4fe6fc3afefdcb87a46b79c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes commandes - La boutique Française ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>Mes commandes</h1>

C'est dans cette espace que vous allez pouvoir gérer toutes vos commandes.
<br>

<br>
<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Retour</a>

    ";
        // line 15
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) == 0)) {
            // line 16
            echo "        <p class=\"text-center\">
            Vous n'avez pas encore passé de commande sur La Boutique Française.
        </p>
    ";
        } else {
            // line 20
            echo "        
        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Passée le</th>
                <th scope=\"col\">Produit(s)</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
  <tbody>
    
    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 35
                echo "          
            <tr>
            <td><span class=\"badge text-bg-secondary\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 37), "html", null, true);
                echo "</span></td>
            <td>
             ";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 39) == 1)) {
                    // line 40
                    echo "                Paiement accepté
             
             ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 42
$context["order"], "state", [], "any", false, false, false, 42) == 2)) {
                    // line 43
                    echo "                Préparation en cours
             ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 44
$context["order"], "state", [], "any", false, false, false, 44) == 3)) {
                    // line 45
                    echo "                Livraison en cours
             ";
                }
                // line 47
                echo "            
            </td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createAt", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 50)), "html", null, true);
                echo "</td>
            <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 51) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 51)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
            <td class=\"text-end\"><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">Voir ma commande</a></td>
           
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "   
  </tbody>
</table>
         
        
    ";
        }
        // line 61
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "account/order.html.twig";
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
        return array (  160 => 61,  152 => 55,  142 => 52,  138 => 51,  134 => 50,  130 => 49,  126 => 47,  122 => 45,  120 => 44,  117 => 43,  115 => 42,  111 => 40,  109 => 39,  104 => 37,  100 => 35,  96 => 34,  80 => 20,  74 => 16,  72 => 15,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "/var/www/html/la-boutique/templates/account/order.html.twig");
    }
}
