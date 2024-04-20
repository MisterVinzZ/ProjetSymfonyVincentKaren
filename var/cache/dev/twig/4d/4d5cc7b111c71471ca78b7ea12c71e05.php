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

/* produit/edit.html.twig */
class __TwigTemplate_192e9979cea6f5baa70b9d6b67016c12 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/edit.html.twig"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/formulaire.css"), "html", null, true);
        echo "\">
";
        // line 3
        $this->loadTemplate("includes/navbar.html.twig", "produit/edit.html.twig", 3)->display($context);
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/produits.css"), "html", null, true);
        echo "\">

";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "<footer>
        ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"form-container\">
        <h1>Modifier Produit</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

        ";
        // line 13
        echo "        <div class=\"form-group\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "categorie", [], "any", false, false, false, 14), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "categorie", [], "any", false, false, false, 15), 'widget');
        echo "
        </div>

        ";
        // line 19
        echo "        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'label');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prix", [], "any", false, false, false, 30), 'label');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 'widget');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), 'label');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), 'widget');
        echo "
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "

        ";
        // line 43
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44))), "html", null, true);
        echo "\"> ";
        // line 45
        echo "            <button type=\"submit\" class=\"btn btn-danger mt-3\">Supprimer</button>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "            ";
        $this->loadTemplate("produit/footer.html.twig", "produit/edit.html.twig", 51)->display($context);
        echo "       
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "produit/edit.html.twig";
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
        return array (  177 => 51,  170 => 50,  160 => 45,  157 => 44,  152 => 43,  147 => 40,  140 => 36,  136 => 35,  129 => 31,  125 => 30,  118 => 26,  114 => 25,  107 => 21,  103 => 20,  100 => 19,  94 => 15,  90 => 14,  87 => 13,  82 => 10,  77 => 7,  70 => 6,  62 => 53,  60 => 50,  57 => 49,  55 => 6,  49 => 4,  47 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/produit/edit.html.twig #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/formulaire.css') }}\">
{% include 'includes/navbar.html.twig' %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/produits.css') }}\">

{% block body %}
    <div class=\"form-container\">
        <h1>Modifier Produit</h1>

        {{ form_start(form) }}

        {# Ajouter le champ de catégorie #}
        <div class=\"form-group\">
            {{ form_label(form.categorie) }}
            {{ form_widget(form.categorie) }}
        </div>

        {# Autres champs du formulaire #}
        <div class=\"form-group\">
            {{ form_label(form.nom) }}
            {{ form_widget(form.nom) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.description) }}
            {{ form_widget(form.description) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.prix) }}
            {{ form_widget(form.prix) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.image) }}
            {{ form_widget(form.image) }}
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        {{ form_end(form) }}

        {# Formulaire de suppression #}
        <form action=\"{{ path('produit_delete', { 'id': produit.id }) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit.id) }}\"> {# Jeton CSRF #}
            <button type=\"submit\" class=\"btn btn-danger mt-3\">Supprimer</button>
        </form>
    </div>
{% endblock %}
<footer>
        {% block footer %}
            {% include 'produit/footer.html.twig' %}       
        {% endblock %}
    </footer>
", "produit/edit.html.twig", "C:\\xampp\\htdocs\\ProjetEcommerce\\templates\\produit\\edit.html.twig");
    }
}
