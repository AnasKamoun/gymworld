<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* public/pdf.html.twig */
class __TwigTemplate_05fa52c284d2f0542414ae8b4a4090ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/pdf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/pdf.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        yield "    Access Card - ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300&display=swap\"
          rel=\"stylesheet\">
    <style>
        body {
            font-family: \"Roboto\", sans-serif;
            margin: 0;
            padding: 0;

        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            border-color: grey;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            display: flex;
            background-color: black;
        }
        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
        }
        .card-content h2 {
            color: white;
            margin-top: 0;
            font-family: \"Roboto Condensed\", sans-serif;
            font-size: 24px;
        }
        .card-content p {
            margin-bottom: 0;
            font-size: 16px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        yield "    <main>
        <div class=\"card\">
            <div class=\"card-content\">
                <h2>Access Card</h2>
                <p>Id : <span> ";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "</span></p>
                <p>Name : <span>";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true);
        yield "</span></p>
                <p>Phone : <span>";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 60, $this->source); })()), "phoneNumber", [], "any", false, false, false, 60), "html", null, true);
        yield "</span></p>
                <p>Email : <span>";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), "html", null, true);
        yield "</span></p>
                <p>Offre : <span>";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 62, $this->source); })()), 0, [], "array", false, false, false, 62), "dateFin", [], "any", false, false, false, 62), "Y/m/d"), "html", null, true);
        yield "</span></p>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "public/pdf.html.twig";
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
        return array (  184 => 62,  180 => 61,  176 => 60,  172 => 59,  168 => 58,  162 => 54,  152 => 53,  95 => 6,  85 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Access Card - {{ personne.name }}
{% endblock %}
{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300&display=swap\"
          rel=\"stylesheet\">
    <style>
        body {
            font-family: \"Roboto\", sans-serif;
            margin: 0;
            padding: 0;

        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            border-color: grey;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            display: flex;
            background-color: black;
        }
        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
        }
        .card-content h2 {
            color: white;
            margin-top: 0;
            font-family: \"Roboto Condensed\", sans-serif;
            font-size: 24px;
        }
        .card-content p {
            margin-bottom: 0;
            font-size: 16px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
{% endblock %}
{% block body %}
    <main>
        <div class=\"card\">
            <div class=\"card-content\">
                <h2>Access Card</h2>
                <p>Id : <span> {{ personne.id }}</span></p>
                <p>Name : <span>{{ personne.name }}</span></p>
                <p>Phone : <span>{{ personne.phoneNumber }}</span></p>
                <p>Email : <span>{{ personne.email }}</span></p>
                <p>Offre : <span>{{ offre[0].dateFin | date('Y/m/d') }}</span></p>
            </div>
        </div>
    </main>
{% endblock %}

", "public/pdf.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\public\\pdf.html.twig");
    }
}
