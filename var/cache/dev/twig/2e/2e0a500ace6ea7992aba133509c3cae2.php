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

/* MainPages/Admin/index.html.twig */
class __TwigTemplate_73c88cb25554c73ebb4809e36282555f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/Admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/Admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "MainPages/Admin/index.html.twig", 1);
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
        yield "    Admin Page
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
        yield "    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\" />

    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url(\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/login/pexels-victor-freitas-703016.jpg"), "html", null, true);
        yield "\");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .centered-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin: 10px;
        }

        button {
            text-align: center;
            margin: 10px;
            padding: 10px 150px;
            background-color: #ac5824;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .welcome-text {
            color: #8a6b61;
            font-size: 24px;
            margin-bottom: 20px;
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
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <div class=\"welcome-text\">Welcome admin</div>

                <button onclick=\"window.location.href='";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client");
        yield "'\"
                        class=\"btn py-3 w-100 mb-4 text-dark\">Consulter les clients</button>
            </div>
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <button onclick=\"window.location.href='";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulterhoraire");
        yield "'\"
                        class=\"btn py-3 w-100 mb-4 text-dark\">Consulter les horaires</button>
            </div>
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <button onclick=\"window.location.href='";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulterforfait");
        yield "'\"
                        class=\"btn py-3 w-100 mb-4 text-dark\">Consulter les forfaits</button>
            </div>
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <button onclick=\"window.location.href='";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "'\" class=\"btn py-3 w-100 mb-4 text-dark\">Logout</button>
            </div>
        </div>
    </div>
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
        return "MainPages/Admin/index.html.twig";
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
        return array (  191 => 71,  184 => 67,  177 => 63,  170 => 59,  163 => 54,  153 => 53,  107 => 18,  93 => 6,  83 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Admin Page
{% endblock %}
{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\" />

    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url(\"{{ asset('assets/images/login/pexels-victor-freitas-703016.jpg') }}\");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .centered-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin: 10px;
        }

        button {
            text-align: center;
            margin: 10px;
            padding: 10px 150px;
            background-color: #ac5824;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .welcome-text {
            color: #8a6b61;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
{% endblock %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <div class=\"welcome-text\">Welcome admin</div>

                <button onclick=\"window.location.href='{{ path('app_admin_dashboard_client') }}'\"
                        class=\"btn py-3 w-100 mb-4 text-dark\">Consulter les clients</button>
            </div>
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <button onclick=\"window.location.href='{{ path('consulterhoraire') }}'\"
                        class=\"btn py-3 w-100 mb-4 text-dark\">Consulter les horaires</button>
            </div>
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <button onclick=\"window.location.href='{{ path('consulterforfait') }}'\"
                        class=\"btn py-3 w-100 mb-4 text-dark\">Consulter les forfaits</button>
            </div>
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 centered-section\">
                <button onclick=\"window.location.href='{{ path('app_logout') }}'\" class=\"btn py-3 w-100 mb-4 text-dark\">Logout</button>
            </div>
        </div>
    </div>
{% endblock %}
", "MainPages/Admin/index.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\Admin\\index.html.twig");
    }
}
