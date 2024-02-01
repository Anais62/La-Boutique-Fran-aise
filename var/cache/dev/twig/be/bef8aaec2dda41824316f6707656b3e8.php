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
class __TwigTemplate_0ae3ebfe7dd9eba528b7a35a1549e2f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes commandes - La boutique Française ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 15, $this->source); })())) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 34, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  190 => 61,  182 => 55,  172 => 52,  168 => 51,  164 => 50,  160 => 49,  156 => 47,  152 => 45,  150 => 44,  147 => 43,  145 => 42,  141 => 40,  139 => 39,  134 => 37,  130 => 35,  126 => 34,  110 => 20,  104 => 16,  102 => 15,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes - La boutique Française {% endblock %}

{% block content %}

<h1>Mes commandes</h1>

C'est dans cette espace que vous allez pouvoir gérer toutes vos commandes.
<br>

<br>
<a href=\"{{ path('app_account') }}\">Retour</a>

    {% if orders | length == 0 %}
        <p class=\"text-center\">
            Vous n'avez pas encore passé de commande sur La Boutique Française.
        </p>
    {% else %}
        
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
    
    {% for order in orders %}
          
            <tr>
            <td><span class=\"badge text-bg-secondary\">{{ order.reference }}</span></td>
            <td>
             {% if order.state == 1 %}
                Paiement accepté
             
             {% elseif order.state == 2 %}
                Préparation en cours
             {% elseif order.state == 3 %}
                Livraison en cours
             {% endif %}
            
            </td>
            <td>{{ order.createAt|date('d/m/Y') }}</td>
            <td>{{ order.orderDetails|length }}</td>
            <td>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2,',','.') }} €</td>
            <td class=\"text-end\"><a href=\"{{ path('app_account_order_show', { 'reference' : order.reference }) }}\">Voir ma commande</a></td>
           
            </tr>
        {% endfor %}   
  </tbody>
</table>
         
        
    {% endif %}

{% endblock %}", "account/order.html.twig", "/var/www/html/la-boutique/templates/account/order.html.twig");
    }
}
