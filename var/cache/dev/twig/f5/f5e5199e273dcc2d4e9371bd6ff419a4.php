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

/* cart/index.html.twig */
class __TwigTemplate_3ec14d554dc6d45aab01394fe4b3062b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier - La Boutique Française";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous avez ajouté à votre panier.
    
    ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 15, $this->source); })())) > 0)) {
            // line 16
            echo "
    <table class=\"table\">
  <thead>
    <tr>
    
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Désignation</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
            // line 30
            $context["total"] = null;
            // line 31
            echo "  ";
            $context["quantitetotal"] = null;
            // line 32
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                echo "    
    <tr>
      <th>
      <img src=\"/uploads/";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "illustration", [], "any", false, false, false, 36), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                echo "\" height=\"75px\"><br>
      
      </th>
      <td>
      ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "<br>
     <small> ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "subtitle", [], "any", false, false, false, 41), "html", null, true);
                echo "</small>
      </td>
      <td> 
      <a href=\" ";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/moins.png"), "html", null, true);
                echo "\" height=\"10px\" alt=\"Retirer mon produit\"></a>
      
      x ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46), "html", null, true);
                echo "
      <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\" height=\"10px\" alt=\"Ajouter un produit\"></a>
      
      </td>
      <td>";
                // line 50
                echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 50), "price", [], "any", false, false, false, 50) / 100), 2, ",", ""), "0.00"), "html", null, true);
                echo "€</td>
      <td>";
                // line 51
                echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "price", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51)) / 100), 2, ",", ""), "0.00"), "html", null, true);
                echo " €</td>
      <td>
        <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">
          <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\" height=\"22px\" alt=\"Supprimer mon produit\">
        </a>
      </td>
    </tr>

    ";
                // line 59
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 59), "price", [], "any", false, false, false, 59) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 59)));
                // line 60
                echo "    ";
                $context["quantitetotal"] = ((isset($context["quantitetotal"]) || array_key_exists("quantitetotal", $context) ? $context["quantitetotal"] : (function () { throw new RuntimeError('Variable "quantitetotal" does not exist.', 60, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 60));
                // line 61
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "  </tbody>
</table>
<div class=\"text-end mb-5\">
    <b>Nombre de produit : </b> ";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["quantitetotal"]) || array_key_exists("quantitetotal", $context) ? $context["quantitetotal"] : (function () { throw new RuntimeError('Variable "quantitetotal" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "<br>
    <b>Total de mon panier : </b>";
            // line 66
            echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 66, $this->source); })()) / 100), 2, ",", ""), "0.00"), "html", null, true);
            echo " €<br>
    <a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success w-100\">Valider mon panier</a>
</div>
  ";
        } else {
            // line 70
            echo "  <hr>
  <p><b>Votre panier est vide</p><b>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  221 => 70,  215 => 67,  211 => 66,  207 => 65,  202 => 62,  196 => 61,  193 => 60,  191 => 59,  183 => 54,  179 => 53,  174 => 51,  170 => 50,  162 => 47,  158 => 46,  151 => 44,  145 => 41,  141 => 40,  132 => 36,  127 => 33,  122 => 32,  119 => 31,  117 => 30,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - La Boutique Française{% endblock %}

{% block content %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous avez ajouté à votre panier.
    
    {% if cart|length > 0 %}

    <table class=\"table\">
  <thead>
    <tr>
    
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Désignation</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% set total = null %}
  {% set quantitetotal = null %}
  {% for product in cart %}
    
    <tr>
      <th>
      <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\"><br>
      
      </th>
      <td>
      {{ product.product.name }}<br>
     <small> {{ product.product.subtitle }}</small>
      </td>
      <td> 
      <a href=\" {{ path('decrease_to_cart', { 'id' : product.product.id }) }}\"><img src=\"{{ asset('assets/img/moins.png') }}\" height=\"10px\" alt=\"Retirer mon produit\"></a>
      
      x {{ product.quantity }}
      <a href=\"{{ path('add_to_cart', { 'id' : product.product.id }) }}\"><img src=\"{{ asset('assets/img/plus.png') }}\" height=\"10px\" alt=\"Ajouter un produit\"></a>
      
      </td>
      <td>{{ (product.product.price / 100)|number_format(2, ',', '')|default('0.00') }}€</td>
      <td>{{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '')|default('0.00') }} €</td>
      <td>
        <a href=\"{{ path('delete_to_cart', { 'id' : product.product.id }) }}\">
          <img src=\"{{ asset('assets/img/delete.png') }}\" height=\"22px\" alt=\"Supprimer mon produit\">
        </a>
      </td>
    </tr>

    {% set total = total + (product.product.price * product.quantity) %}
    {% set quantitetotal = quantitetotal + (product.quantity) %}
  {% endfor %}
  </tbody>
</table>
<div class=\"text-end mb-5\">
    <b>Nombre de produit : </b> {{ quantitetotal}}<br>
    <b>Total de mon panier : </b>{{ (total / 100)|number_format(2, ',', '')|default('0.00') }} €<br>
    <a href=\"{{ path('app_order') }}\" class=\"btn btn-success w-100\">Valider mon panier</a>
</div>
  {% else %}
  <hr>
  <p><b>Votre panier est vide</p><b>
  {% endif %}
{% endblock %}
", "cart/index.html.twig", "/var/www/html/la-boutique/templates/cart/index.html.twig");
    }
}
