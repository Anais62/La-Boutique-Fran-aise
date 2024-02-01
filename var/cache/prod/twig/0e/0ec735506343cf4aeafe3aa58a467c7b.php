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
class __TwigTemplate_73437959f5ccfda9992eb6c2b8b82b6b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((twig_length_filter($this->env, ($context["cart"] ?? null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 59), "price", [], "any", false, false, false, 59) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 59)));
                // line 60
                echo "    ";
                $context["quantitetotal"] = (($context["quantitetotal"] ?? null) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 60));
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
            echo twig_escape_filter($this->env, ($context["quantitetotal"] ?? null), "html", null, true);
            echo "<br>
    <b>Total de mon panier : </b>";
            // line 66
            echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", ""), "0.00"), "html", null, true);
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
        return array (  191 => 70,  185 => 67,  181 => 66,  177 => 65,  172 => 62,  166 => 61,  163 => 60,  161 => 59,  153 => 54,  149 => 53,  144 => 51,  140 => 50,  132 => 47,  128 => 46,  121 => 44,  115 => 41,  111 => 40,  102 => 36,  97 => 33,  92 => 32,  89 => 31,  87 => 30,  71 => 16,  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/var/www/html/la-boutique/templates/cart/index.html.twig");
    }
}
