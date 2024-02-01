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

/* base.html.twig */
class __TwigTemplate_5d76a56da77cfa7db762c481ff908809 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"La boutique qui ne vend que du made in France\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.108.0\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">


  ";
        // line 15
        $this->displayBlock('javascript', $context, $blocks);
        // line 20
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    <link href=\"/docs/5.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

    <!-- Favicons -->
<link rel=\"apple-touch-icon\" href=\"/docs/5.3/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
<link rel=\"manifest\" href=\"/docs/5.3/assets/img/favicons/manifest.json\">
<link rel=\"mask-icon\" href=\"/docs/5.3/assets/img/favicons/safari-pinned-tab.svg\" color=\"#712cf9\">
<link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon.ico\">
<meta name=\"theme-color\" content=\"#712cf9\">



    <!-- Custom styles for this template -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutique.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutiquefrancaise.css"), "html", null, true);
        echo "\">
  </head>
  <body>
    
<header>
  <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" >La Boutique Française</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\">Nos Produits</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"\">Qui sommes-nous ?</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Contact</a>
          </li>
        </ul>
        <div class=\"navbar-item-custom\">
         
         
        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon Compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 64), "firtsname", [], "any", false, false, false, 64), "html", null, true);
            echo ")</small></a>  |  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 66
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>  |  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
        ";
        }
        // line 68
        echo "
        </div>
        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
          <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cart.png"), "html", null, true);
        echo "\" alt=\"Mon panier\" class=\"cart-icon\">
        </a>
      </div>
    </div>
  </nav>
</header>

<main>

  ";
        // line 80
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 81
            echo "  <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-indicators\">
      ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 84
                echo "      <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"  class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
     
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "
      
      
    </div>
    <div class=\"carousel-inner\">
    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 93
                echo "      <div class=\"carousel-item active\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 93), "html", null, true);
                echo "');background-size:cover;\">
        
        <div class=\"container\">
          <div class=\"carousel-caption text-start\">
            <h1>";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 97), "html", null, true);
                echo "</h1>
            <p>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 98), "html", null, true);
                echo "</p>
            <p><a class=\"btn btn-lg btn-info\" href=\"";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 99), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 99), "html", null, true);
                echo "</a></p>
          </div>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>
  </div>
";
        }
        // line 115
        echo "
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class=\"container marketing ";
        // line 120
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo " %}\">
    ";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "
  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class=\"footer-custom\">
    <p>
    &copy; 2017–2024 La Boutique Française <br>
    <small>La boutique 100% made in France.</small> <br>
    <a href=\"#\">Privacy</a>  <a href=\"#\">Terms</a>
     </p>
  </footer>
</main>


    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

      
  </body>
  ";
        // line 142
        $this->displayBlock('script', $context, $blocks);
        // line 144
        echo "</html>";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "La Boutique française - 100% MADE in France ";
    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    <script src=\"https://js.stripe.com/v3/\"></script>
  
  ";
    }

    // line 121
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "    ";
    }

    // line 142
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  313 => 143,  309 => 142,  305 => 122,  301 => 121,  294 => 16,  290 => 15,  283 => 9,  279 => 144,  277 => 142,  270 => 138,  253 => 123,  251 => 121,  245 => 120,  238 => 115,  225 => 104,  212 => 99,  208 => 98,  204 => 97,  196 => 93,  192 => 92,  185 => 87,  175 => 84,  171 => 83,  167 => 81,  165 => 80,  153 => 71,  149 => 70,  145 => 68,  137 => 66,  127 => 64,  125 => 63,  110 => 51,  100 => 44,  90 => 37,  86 => 36,  82 => 35,  65 => 20,  63 => 15,  57 => 12,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/la-boutique/templates/base.html.twig");
    }
}
