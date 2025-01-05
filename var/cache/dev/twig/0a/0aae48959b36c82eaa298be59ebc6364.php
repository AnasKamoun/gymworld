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

/* registration/register.html.twig */
class __TwigTemplate_e805b79d94c6f7ba98c8f7f25e5c0480 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        yield "    <section
            class=\"bg-image\"
            style=\"
                    background-image: url('";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/login/pexels-pixabay-260352.jpg"), "html", null, true);
        yield "');
                    background-size: cover;
                    height: 120vh;
                    \"
    >
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div
                        class=\"row d-flex justify-content-center align-items-center h-100\"
                >
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body py-3 px-md-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">
                                    Create an account
                                </h2>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 26
            yield "                                    <div class=\"alert alert-danger\"
                                         role=\"alert\">";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_error"], "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), 'errors');
        yield "
                                ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), 'form_start');
        yield "
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'row');
        yield "
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'row');
        yield "
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "username", [], "any", false, false, false, 33), 'row');
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "plainPassword", [], "any", false, false, false, 34), 'row');
        yield "
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "agreeTerms", [], "any", false, false, false, 35), 'row');
        yield "
                                <div class=\"col d-flex justify-content-center\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "Submit", [], "any", false, false, false, 36), 'row');
        yield "</div>
                                <p class=\"text-center\"
                                   style=\"margin-top: 1rem; margin-bottom: -5px\">
                                    Already have an Account?
                                    <a style=\"text-decoration: none; color: orangered\"
                                       href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_user");
        yield "\">Sign In</a>
                                </p>
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'rest');
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

    // line 53
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 54
        yield "    <link
            href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\"
            rel=\"stylesheet\"
    />
    <link rel=\"stylesheet\" href=\"";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mdb.dark.min.css"), "html", null, true);
        yield "\"/>
    ";
        // line 59
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        .form-check-input[type=\"checkbox\"]:checked {
            background-color: orangered;
        }

        .form-check-input[type=\"checkbox\"]:checked:focus {
            background-color: orangered;
            box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25); /* Adjust color as needed */
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

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        yield "    <script>window.onload = function () {
            var divs = document.querySelectorAll('.invalid-feedback.d-block');

            for (var i = 0; i < divs.length; i++) {
                divs[i].setAttribute('style', 'max-width: 90% !important;');
                var content = divs[i].innerHTML;
                divs[i].innerHTML = '<p>' + content + '</p>';
            }
            var divs = document.querySelectorAll('.mb-3');

            for (var i = 1; i < divs.length; i++) {
                var previousDiv = divs[i - 1];
                var invalidFeedback = previousDiv.querySelector('.invalid-feedback.d-block');

                if (invalidFeedback) {
                    divs[i].setAttribute('style', 'padding-top: 2.5rem;');
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
        return "registration/register.html.twig";
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
        return array (  267 => 92,  257 => 91,  214 => 59,  210 => 58,  204 => 54,  194 => 53,  173 => 43,  168 => 41,  160 => 36,  156 => 35,  152 => 34,  148 => 33,  144 => 32,  140 => 31,  136 => 30,  131 => 29,  123 => 27,  120 => 26,  116 => 25,  97 => 9,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <section
            class=\"bg-image\"
            style=\"
                    background-image: url('{{ asset('assets/images/login/pexels-pixabay-260352.jpg') }}');
                    background-size: cover;
                    height: 120vh;
                    \"
    >
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div
                        class=\"row d-flex justify-content-center align-items-center h-100\"
                >
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body py-3 px-md-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">
                                    Create an account
                                </h2>
                                {% for flash_error in app.flashes('verify_email_error') %}
                                    <div class=\"alert alert-danger\"
                                         role=\"alert\">{{ flash_error }}</div>
                                {% endfor %}
                                {{ form_errors(registrationForm) }}
                                {{ form_start(registrationForm) }}
                                {{ form_row(registrationForm.name) }}
                                {{ form_row(registrationForm.email) }}
                                {{ form_row(registrationForm.username) }}
                                {{ form_row(registrationForm.plainPassword) }}
                                {{ form_row(registrationForm.agreeTerms) }}
                                <div class=\"col d-flex justify-content-center\">{{ form_row(registrationForm.Submit) }}</div>
                                <p class=\"text-center\"
                                   style=\"margin-top: 1rem; margin-bottom: -5px\">
                                    Already have an Account?
                                    <a style=\"text-decoration: none; color: orangered\"
                                       href=\"{{ path('app_login_user') }}\">Sign In</a>
                                </p>
                                {{ form_rest(registrationForm) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
{% block stylesheets %}
    <link
            href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\"
            rel=\"stylesheet\"
    />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/mdb.dark.min.css') }}\"/>
    {{ parent() }}
    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        .form-check-input[type=\"checkbox\"]:checked {
            background-color: orangered;
        }

        .form-check-input[type=\"checkbox\"]:checked:focus {
            background-color: orangered;
            box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25); /* Adjust color as needed */
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

    </style>
{% endblock %}
{% block javascripts %}
    <script>window.onload = function () {
            var divs = document.querySelectorAll('.invalid-feedback.d-block');

            for (var i = 0; i < divs.length; i++) {
                divs[i].setAttribute('style', 'max-width: 90% !important;');
                var content = divs[i].innerHTML;
                divs[i].innerHTML = '<p>' + content + '</p>';
            }
            var divs = document.querySelectorAll('.mb-3');

            for (var i = 1; i < divs.length; i++) {
                var previousDiv = divs[i - 1];
                var invalidFeedback = previousDiv.querySelector('.invalid-feedback.d-block');

                if (invalidFeedback) {
                    divs[i].setAttribute('style', 'padding-top: 2.5rem;');
                }
            }
        };
    </script>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\registration\\register.html.twig");
    }
}
