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

/* reset_password/reset.html.twig */
class __TwigTemplate_23c4714b588fb91970de2fe66a2d6144 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/reset.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Reset your password";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <section class=\"vh-100 bg-image\" style=\"
            background-image: url(";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/woman-498257_1920.jpg"), "html", null, true);
        yield ");
            background-size: cover;
            \">
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div class=\"row d-flex justify-content-center align-items-center h-100\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">Reset your
                                    password</h2>
                                ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
                                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 19, $this->source); })()), "plainPassword", [], "any", false, false, false, 19), 'row');
        yield "
                                <div class=\"col d-flex justify-content-center\">
                                    <button class=\"btn\" type=\"submit\">
                                        Reset password
                                    </button>
                                </div>
                                ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 25, $this->source); })()), 'form_end');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        yield "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:300,
    400,500,600,700&display=swap\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mdb.dark.min.css"), "html", null, true);
        yield "\">
    ";
        // line 38
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        .form-control:focus {
            border-color: orangered;
            box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25);
        }

        .btn {
            background-color: orangered;
            color: white;

            &:hover {
                background-color: orangered;
                color: white;
            }
        }

        .invalid-feedback:first-of-type {
            margin-bottom: 2rem;
        }

        .invalid-feedback:nth-of-type(2) {
            margin-block: 2rem;
        }

        .invalid-feedback:last-of-type {
            margin-top: 4rem;
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        yield "    <script>window.onload = function () {
            var divs = document.querySelectorAll('.invalid-feedback.d-block');

            for (var i = 0; i < divs.length; i++) {
                divs[i].setAttribute('style', 'max-width: 85% !important;');
                var content = divs[i].innerHTML;
                divs[i].innerHTML = '<p>' + content + '</p>';
            }
            var divs = document.querySelectorAll('.mb-3');

            for (var i = 1; i < divs.length; i++) {
                var previousDiv = divs[i - 1];
                var invalidFeedback = previousDiv.querySelector('.invalid-feedback.d-block');

                if (invalidFeedback) {
                    divs[i].setAttribute('style', 'padding-top: 8rem;');
                }
            }
        };
    </script>
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
        return "reset_password/reset.html.twig";
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
        return array (  216 => 74,  206 => 73,  160 => 38,  156 => 37,  152 => 35,  142 => 34,  122 => 25,  113 => 19,  109 => 18,  95 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reset your password{% endblock %}

{% block body %}
    <section class=\"vh-100 bg-image\" style=\"
            background-image: url({{ asset('assets/images/woman-498257_1920.jpg') }});
            background-size: cover;
            \">
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div class=\"row d-flex justify-content-center align-items-center h-100\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">Reset your
                                    password</h2>
                                {{ form_start(resetForm) }}
                                {{ form_row(resetForm.plainPassword) }}
                                <div class=\"col d-flex justify-content-center\">
                                    <button class=\"btn\" type=\"submit\">
                                        Reset password
                                    </button>
                                </div>
                                {{ form_end(resetForm) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:300,
    400,500,600,700&display=swap\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/mdb.dark.min.css') }}\">
    {{ parent() }}
    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        .form-control:focus {
            border-color: orangered;
            box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25);
        }

        .btn {
            background-color: orangered;
            color: white;

            &:hover {
                background-color: orangered;
                color: white;
            }
        }

        .invalid-feedback:first-of-type {
            margin-bottom: 2rem;
        }

        .invalid-feedback:nth-of-type(2) {
            margin-block: 2rem;
        }

        .invalid-feedback:last-of-type {
            margin-top: 4rem;
        }

    </style>
{% endblock %}
{% block javascripts %}
    <script>window.onload = function () {
            var divs = document.querySelectorAll('.invalid-feedback.d-block');

            for (var i = 0; i < divs.length; i++) {
                divs[i].setAttribute('style', 'max-width: 85% !important;');
                var content = divs[i].innerHTML;
                divs[i].innerHTML = '<p>' + content + '</p>';
            }
            var divs = document.querySelectorAll('.mb-3');

            for (var i = 1; i < divs.length; i++) {
                var previousDiv = divs[i - 1];
                var invalidFeedback = previousDiv.querySelector('.invalid-feedback.d-block');

                if (invalidFeedback) {
                    divs[i].setAttribute('style', 'padding-top: 8rem;');
                }
            }
        };
    </script>
{% endblock %}
", "reset_password/reset.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\reset_password\\reset.html.twig");
    }
}
