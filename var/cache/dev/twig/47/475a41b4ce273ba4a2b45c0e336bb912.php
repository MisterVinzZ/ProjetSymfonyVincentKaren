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

        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("includes/navbar.html.twig", "produit/index.html.twig", 3)->display($context);
        // line 4
        echo "


";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/produits.css"), "html", null, true);
        echo "\">

    <h1>Liste des Figurines</h1>

    <div class=\"container\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 14
            echo "        <div class=\"produit\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">
                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
            
            <div class=\"produit-info\">
                <div class=\"produit-nom\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
                <div class=\"produit-description\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                <div class=\"produit-prix\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 21), "html", null, true);
            echo "€</div>
            </div>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>

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
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  111 => 26,  100 => 21,  96 => 20,  92 => 19,  84 => 16,  80 => 15,  77 => 14,  73 => 13,  64 => 8,  51 => 7,  46 => 4,  44 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/produit/index.html.twig #}

    {% include 'includes/navbar.html.twig' %}



{% block body %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/produits.css') }}\">

    <h1>Liste des Figurines</h1>

    <div class=\"container\">
        {% for produit in produits %}
        <div class=\"produit\">
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

{% endblock %}
", "produit/index.html.twig", "C:\\xampp\\htdocs\\ProjetEcommerce\\templates\\produit\\index.html.twig");
    }
}
