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

/* order/add.index.html.twig */
class __TwigTemplate_e320f829d271f34f521fbe4d75cfebe8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.index.html.twig", 1);
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

        echo "Valider ma commande - La Boutique Française";
        
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
        echo "    <h2>Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check\">
                ";
        // line 13
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 13, $this->source); })());
        echo "

            </div>
           

        <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "<br>
                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "<br>
                    ";
        // line 23
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 23, $this->source); })()), "price", [], "any", false, false, false, 23), 2, ",", ""), "0.00"), "html", null, true);
        echo "€
                </div>
            
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br>
    
            </div>
                
            <div class=\"order-summary\">
            ";
        // line 34
        $context["total"] = null;
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 36
            echo "
            <div class=\"row ";
            // line 37
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
                <div class=\"col-2\"><img src=\"/uploads/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "illustration", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "\" height=\"75px\"></div>
                <div class=\"col-8 my-auto\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "<br>
                    <small>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "subtitle", [], "any", false, false, false, 41), "html", null, true);
            echo "<br>
                     x ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42), "html", null, true);
            echo "<br>

                      </small>
                </div>
                   
               
                <div class=\"col-2 my-auto\">
               ";
            // line 49
            echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "price", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49)) / 100), 2, ",", ""), "0.00"), "html", null, true);
            echo " €
            </div>
             </div>
            
            ";
            // line 53
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 53), "price", [], "any", false, false, false, 53) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53)));
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>
            
            <hr>
            <strong>Sous-Total : </strong>";
        // line 58
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) / 100), 2, ",", ""), "0.00"), "html", null, true);
        echo " €
            <br>
            <strong>Livraison : </strong>";
        // line 60
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60), 2, ",", ""), "0.00"), "html", null, true);
        echo " €

            <hr>

            <strong>Total : ";
        // line 64
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64)), 2, ",", ""), "0.00"), "html", null, true);
        echo " € </strong>

            <a href=\"\" class=\"btn btn-success w-100 mt-4\">Payer ";
        // line 66
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 66, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 66, $this->source); })()), "price", [], "any", false, false, false, 66)), 2, ",", ""), "0.00"), "html", null, true);
        echo " € </a>
            
        </div>
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
        return "order/add.index.html.twig";
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
        return array (  208 => 66,  203 => 64,  196 => 60,  191 => 58,  186 => 55,  180 => 54,  178 => 53,  171 => 49,  161 => 42,  157 => 41,  153 => 40,  146 => 38,  140 => 37,  137 => 36,  132 => 35,  130 => 34,  116 => 23,  112 => 22,  108 => 21,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Valider ma commande - La Boutique Française{% endblock %}

{% block content %}
    <h2>Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check\">
                {{ delivery|raw }}

            </div>
           

        <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check\">
                    {{ carrier.name }}<br>
                    {{ carrier.description }}<br>
                    {{ carrier.price |number_format(2, ',', '')|default('0.00') }}€
                </div>
            
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br>
    
            </div>
                
            <div class=\"order-summary\">
            {% set total = null %}
            {% for key,product in cart %}

            <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                <div class=\"col-2\"><img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\"></div>
                <div class=\"col-8 my-auto\">
                    {{ product.product.name }}<br>
                    <small>{{ product.product.subtitle }}<br>
                     x {{ product.quantity }}<br>

                      </small>
                </div>
                   
               
                <div class=\"col-2 my-auto\">
               {{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '')|default('0.00') }} €
            </div>
             </div>
            
            {% set total = total + (product.product.price * product.quantity) %}
            {% endfor %}
            </div>
            
            <hr>
            <strong>Sous-Total : </strong>{{ (total / 100)|number_format(2, ',', '')|default('0.00') }} €
            <br>
            <strong>Livraison : </strong>{{ (carrier.price)|number_format(2, ',', '')|default('0.00') }} €

            <hr>

            <strong>Total : {{ ((total / 100) + carrier.price)|number_format(2, ',', '')|default('0.00') }} € </strong>

            <a href=\"\" class=\"btn btn-success w-100 mt-4\">Payer {{ ((total / 100) + carrier.price)|number_format(2, ',', '')|default('0.00') }} € </a>
            
        </div>
    </div>

{% endblock %}", "order/add.index.html.twig", "/var/www/html/la-boutique/templates/order/add.index.html.twig");
    }
}
