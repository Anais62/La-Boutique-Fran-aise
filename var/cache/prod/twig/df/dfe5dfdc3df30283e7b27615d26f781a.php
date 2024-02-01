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
class __TwigTemplate_b893e3c1dad75e422e8d4b250e3bf17c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande - La Boutique Française";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo ($context["delivery"] ?? null);
        echo "

            </div>
           

        <hr>
            <strong>Mon transporteur</strong><br>
                <div class=\"form-check mt-4\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "<br>
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "<br>
                    ";
        // line 27
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 27) / 100), 2, ",", ""), "0.00"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 57), "price", [], "any", false, false, false, 57) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 57)));
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
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", ""), "0.00"), "html", null, true);
        echo " €
            <br>
            <strong>Livraison : </strong>";
        // line 64
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 64) / 100), 2, ",", ""), "0.00"), "html", null, true);
        echo " €

            <hr>

            <strong>Total : ";
        // line 68
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 68) / 100)), 2, ",", ""), "0.00"), "html", null, true);
        echo " € </strong>
                
            <a class=\"btn btn-success w-100 mt-4\" id=\"checkout-button\">Payer ";
        // line 70
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 70) / 100)), 2, ",", ""), "0.00"), "html", null, true);
        echo " €  </a>
            
        </div>
    </div>

";
    }

    // line 77
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "
    <script type=\"text/javascript\">
        
        var stripe = Stripe(\"pk_test_51OcP7LArxMno9hPm5BAoKhQR9fvkvW5hWbDDslXolqjnojOGHsua3RidQA89IpgZ24WDXfYbcQ4KdmkfOllOdStm007uNnLrtb\");
        
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function () {
            fetch(\"/commande/create-session/";
        // line 85
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
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
        return array (  212 => 85,  203 => 78,  199 => 77,  189 => 70,  184 => 68,  177 => 64,  172 => 62,  167 => 59,  161 => 58,  159 => 57,  152 => 53,  142 => 46,  138 => 45,  134 => 44,  127 => 42,  121 => 41,  118 => 40,  113 => 39,  111 => 38,  97 => 27,  93 => 26,  89 => 25,  78 => 17,  69 => 10,  65 => 9,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/var/www/html/la-boutique/templates/order/add.html.twig");
    }
}
