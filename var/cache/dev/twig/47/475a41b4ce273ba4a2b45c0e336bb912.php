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

/* produit/index.html.twig */
class __TwigTemplate_7482410b0875c0e525331d194bb94157 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/produits.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

    <h1>Liste des Figurines</h1>

    <div class=\"container\">
        <div class=\"sidebar\">
            <h2>Catégories</h2>
            <select id=\"categorieSelect\" onchange=\"filterProducts()\">
                <option value=\"tous\">Tous les produits</option>
                <option value=\"figurines\">Figurines</option>
                <option value=\"accessoires\">Accessoires</option>
                <option value=\"deco\">Décorations</option>
                <option value=\"vetement\">vetement</option>

                <!-- Ajoutez d'autres options pour les différentes catégories -->
            </select>
        </div>

        <div class=\"produits-list\" id=\"produitsList\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "                <div class=\"produit ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                        <div class=\"produit-info\">
                            <div class=\"produit-nom\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
                            <div class=\"produit-description\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</div>
                            <div class=\"produit-prix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo "€</div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>

    <script>
        function filterProducts() {
            var selectedCategory = document.getElementById('categorieSelect').value;
            var produits = document.querySelectorAll('.produit');
            var produitsList = document.getElementById('produitsList');
            
            produits.forEach(function(produit) {
                if (selectedCategory === 'tous' || produit.classList.contains(selectedCategory)) {
                    produit.style.display = 'block';
                } else {
                    produit.style.display = 'none';
                }
            });
        }
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  123 => 35,  112 => 30,  108 => 29,  104 => 28,  97 => 26,  93 => 25,  88 => 24,  84 => 23,  62 => 4,  57 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/produits.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">

    <h1>Liste des Figurines</h1>

    <div class=\"container\">
        <div class=\"sidebar\">
            <h2>Catégories</h2>
            <select id=\"categorieSelect\" onchange=\"filterProducts()\">
                <option value=\"tous\">Tous les produits</option>
                <option value=\"figurines\">Figurines</option>
                <option value=\"accessoires\">Accessoires</option>
                <option value=\"deco\">Décorations</option>
                <option value=\"vetement\">vetement</option>

                <!-- Ajoutez d'autres options pour les différentes catégories -->
            </select>
        </div>

        <div class=\"produits-list\" id=\"produitsList\">
            {% for produit in produits %}
                <div class=\"produit {{ produit.categorie }}\">
                    <a href=\"{{ path('produit_show', {'id': produit.id}) }}\">
                        <img src=\"{{ asset('images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\">
                        <div class=\"produit-info\">
                            <div class=\"produit-nom\">{{ produit.nom }}</div>
                            <div class=\"produit-description\">{{ produit.description }}</div>
                            <div class=\"produit-prix\">{{ produit.prix }}€</div>
                        </div>
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>

    <script>
        function filterProducts() {
            var selectedCategory = document.getElementById('categorieSelect').value;
            var produits = document.querySelectorAll('.produit');
            var produitsList = document.getElementById('produitsList');
            
            produits.forEach(function(produit) {
                if (selectedCategory === 'tous' || produit.classList.contains(selectedCategory)) {
                    produit.style.display = 'block';
                } else {
                    produit.style.display = 'none';
                }
            });
        }
    </script>

{% endblock %}
", "produit/index.html.twig", "C:\\xampp\\htdocs\\ProjetEcommerce\\templates\\produit\\index.html.twig");
    }
}
