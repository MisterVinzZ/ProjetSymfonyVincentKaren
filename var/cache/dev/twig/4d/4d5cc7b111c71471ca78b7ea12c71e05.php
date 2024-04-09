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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/edit.html.twig"));

        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/edit.css"), "html", null, true);
        echo "\">
    ";
        // line 3
        $this->loadTemplate("includes/navbar.html.twig", "produit/edit.html.twig", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"form-container\">
        <h1>Modifier Produit</h1>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "prix", [], "any", false, false, false, 12), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end');
        echo "

        ";
        // line 18
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19))), "html", null, true);
        echo "\"> ";
        // line 20
        echo "    <button type=\"submit\" class=\"btn btn-danger mt-3\">Supprimer</button>
</form>

    </div>
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
        return array (  103 => 20,  100 => 19,  95 => 18,  90 => 15,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  64 => 6,  51 => 5,  48 => 4,  46 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/produit/edit.html.twig #}
<link rel=\"stylesheet\" href=\"{{ asset('css/edit.css') }}\">
    {% include 'includes/navbar.html.twig' %}

{% block body %}
    <div class=\"form-container\">
        <h1>Modifier Produit</h1>

        {{ form_start(form) }}
            {{ form_row(form.nom) }}
            {{ form_row(form.description) }}
            {{ form_row(form.prix) }}
            {{ form_row(form.image) }}
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        {{ form_end(form) }}

        {# templates/produit/edit.html.twig #}
<form action=\"{{ path('produit_delete', { 'id': produit.id }) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit.id) }}\"> {# Jeton CSRF #}
    <button type=\"submit\" class=\"btn btn-danger mt-3\">Supprimer</button>
</form>

    </div>
{% endblock %}
", "produit/edit.html.twig", "C:\\xampp\\htdocs\\ProjetEcommerce\\templates\\produit\\edit.html.twig");
    }
}
