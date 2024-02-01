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
class __TwigTemplate_cc38d10bd95685078f0d60f683d9522b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
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

        echo "Ma commande - La boutique Française ";
        
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
    <h1>Ma commande ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "reference", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\">Retour</a>
    <hr>
    <strong>Statut de la commande : </strong>
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "state", [], "any", false, false, false, 11) == 1)) {
            // line 12
            echo "        Paiement accepté
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "state", [], "any", false, false, false, 13) == 2)) {
            // line 14
            echo "        Préparation en cours
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "state", [], "any", false, false, false, 15) == 3)) {
            // line 16
            echo "        Livraison en cours
    ";
        }
        // line 18
        echo "    <br>
    <strong>Commande passée le : </strong> ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "createAt", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
        echo "<br>
    <strong>Référence de ma commande : </strong><small>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "reference", [], "any", false, false, false, 20), "html", null, true);
        echo "</small><br>
    <strong>Transporteur choisi : </strong>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "carriername", [], "any", false, false, false, 21), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 36, $this->source); })()), "orderDetails", [], "any", false, false, false, 36));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "getTotal", [], "any", false, false, false, 54) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
        <strong>Livraison : </strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "carrierprice", [], "any", false, false, false, 55) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
        <strong>Total : </strong>";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "carrierPrice", [], "any", false, false, false, 56) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "getTotal", [], "any", false, false, false, 56)) / 100), 2, ",", "."), "html", null, true);
        echo " €

     </div>    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  194 => 56,  190 => 55,  186 => 54,  176 => 46,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 37,  146 => 36,  128 => 21,  124 => 20,  120 => 19,  117 => 18,  113 => 16,  111 => 15,  108 => 14,  106 => 13,  103 => 12,  101 => 11,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - La boutique Française {% endblock %}

{% block content %}

    <h1>Ma commande {{ order.reference }}</h1>
    <a href=\"{{ path('app_account_order') }}\">Retour</a>
    <hr>
    <strong>Statut de la commande : </strong>
    {% if order.state == 1 %}
        Paiement accepté
    {% elseif order.state == 2 %}
        Préparation en cours
    {% elseif order.state == 3 %}
        Livraison en cours
    {% endif %}
    <br>
    <strong>Commande passée le : </strong> {{ order.createAt|date('d/m/Y') }}<br>
    <strong>Référence de ma commande : </strong><small>{{ order.reference }}</small><br>
    <strong>Transporteur choisi : </strong>{{ order.carriername}}
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
            {% for product in order.orderDetails %}
                
              <tr>
                <td>{{ product.product }}</td>
                <td>x{{ product.quantity }}</td>
                <td>{{ (product.price /100) |number_format(2,',','.') }} €</td>
                <td>{{ (product.total/100) |number_format(2,',','.') }} €</td>
            </tr>
            
            {% endfor %}
          
          
          
            </tbody>
        </table>

    <div class=\"text-end mt-4\">
        
        <strong>Sous-total : </strong>{{ (order.getTotal / 100) |number_format(2,',','.') }} €<br>
        <strong>Livraison : </strong>{{ (order.carrierprice / 100) |number_format(2,',','.') }} €<br>
        <strong>Total : </strong>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2,',','.') }} €

     </div>    

{% endblock %}", "account/order_show.html.twig", "/var/www/html/la-boutique/templates/account/order_show.html.twig");
    }
}
