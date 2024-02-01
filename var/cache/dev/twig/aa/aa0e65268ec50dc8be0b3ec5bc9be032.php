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

/* order/add.html.twig */
class __TwigTemplate_48d3222e2b0f78bdc5aca7dd2a020fec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
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

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h2>Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-4\">
                ";
        // line 17
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 17, $this->source); })());
        echo "

            </div>
           

        <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check mt-4\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "<br>
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "<br>
                    ";
        // line 27
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27) / 100), 2, ",", ""), "0.00"), "html", null, true);
        echo "€
                </div>
            
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br>
    
            </div>
                
            <div class=\"order-summary\">
            ";
        // line 38
        $context["total"] = null;
        // line 39
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 40
            echo "
            <div class=\"row ";
            // line 41
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
                <div class=\"col-2\"><img src=\"/uploads/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "illustration", [], "any", false, false, false, 42), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "\" height=\"75px\"></div>
                <div class=\"col-8 my-auto\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "<br>
                    <small>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 45), "subtitle", [], "any", false, false, false, 45), "html", null, true);
            echo "<br>
                     x ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46), "html", null, true);
            echo "<br>

                      </small>
                </div>
                   
               
                <div class=\"col-2 my-auto\">
               ";
            // line 53
            echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 53), "price", [], "any", false, false, false, 53) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53)) / 100), 2, ",", ""), "0.00"), "html", null, true);
            echo " €
            </div>
             </div>
            
            ";
            // line 57
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 57), "price", [], "any", false, false, false, 57) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 57)));
            // line 58
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </div>
            
            <hr>
            <strong>Sous-Total : </strong>";
        // line 62
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) / 100), 2, ",", ""), "0.00"), "html", null, true);
        echo " €
            <br>
            <strong>Livraison : </strong>";
        // line 64
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64) / 100), 2, ",", ""), "0.00"), "html", null, true);
        echo " €

            <hr>

            <strong>Total : ";
        // line 68
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 68, $this->source); })()), "price", [], "any", false, false, false, 68) / 100)), 2, ",", ""), "0.00"), "html", null, true);
        echo " € </strong>
                
            <a class=\"btn btn-success w-100 mt-4\" id=\"checkout-button\">Payer ";
        // line 70
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 70, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 70, $this->source); })()), "price", [], "any", false, false, false, 70) / 100)), 2, ",", ""), "0.00"), "html", null, true);
        echo " €  </a>
            
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 78
        echo "
    <script type=\"text/javascript\">
        
        var stripe = Stripe(\"pk_test_51OcP7LArxMno9hPm5BAoKhQR9fvkvW5hWbDDslXolqjnojOGHsua3RidQA89IpgZ24WDXfYbcQ4KdmkfOllOdStm007uNnLrtb\");
        
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function () {
            fetch(\"/commande/create-session/";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\", {
                method: \"POST\",
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function (result) {
                    if(result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {
                    console.error(\"Error:\", error);
                });
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "order/add.html.twig";
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
        return array (  266 => 85,  257 => 78,  247 => 77,  231 => 70,  226 => 68,  219 => 64,  214 => 62,  209 => 59,  203 => 58,  201 => 57,  194 => 53,  184 => 46,  180 => 45,  176 => 44,  169 => 42,  163 => 41,  160 => 40,  155 => 39,  153 => 38,  139 => 27,  135 => 26,  131 => 25,  120 => 17,  111 => 10,  101 => 9,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
    <script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block title %}Valider ma commande - La Boutique Française{% endblock %}

{% block content %}
    <h2>Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-4\">
                {{ delivery|raw }}

            </div>
           

        <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check mt-4\">
                    {{ carrier.name }}<br>
                    {{ carrier.description }}<br>
                    {{ (carrier.price / 100) |number_format(2, ',', '')|default('0.00') }}€
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
            <strong>Livraison : </strong>{{ (carrier.price / 100)|number_format(2, ',', '')|default('0.00') }} €

            <hr>

            <strong>Total : {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '')|default('0.00') }} € </strong>
                
            <a class=\"btn btn-success w-100 mt-4\" id=\"checkout-button\">Payer {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '')|default('0.00') }} €  </a>
            
        </div>
    </div>

{% endblock %}

{% block script %}

    <script type=\"text/javascript\">
        
        var stripe = Stripe(\"pk_test_51OcP7LArxMno9hPm5BAoKhQR9fvkvW5hWbDDslXolqjnojOGHsua3RidQA89IpgZ24WDXfYbcQ4KdmkfOllOdStm007uNnLrtb\");
        
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function () {
            fetch(\"/commande/create-session/{{ reference }}\", {
                method: \"POST\",
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {
                    return stripe.redirectToCheckout({ sessionId: session.id });
                })
                .then(function (result) {
                    if(result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {
                    console.error(\"Error:\", error);
                });
        });
    </script>

{% endblock %}", "order/add.html.twig", "/var/www/html/la-boutique/templates/order/add.html.twig");
    }
}
