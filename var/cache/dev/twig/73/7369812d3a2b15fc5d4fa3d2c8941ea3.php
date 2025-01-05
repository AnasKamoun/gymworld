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

/* reset_password/request.html.twig */
class __TwigTemplate_663672c982953552b0559254990518b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "
    <section class=\"vh-100 bg-image\" style=\"
            background-image: url(";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/body-1846668_1920.jpg"), "html", null, true);
        yield ");
            background-size: cover;
            \">
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div class=\"row d-flex justify-content-center align-items-center h-100\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">Reset
                                    Password</h2>
                                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 19
            yield "                                    <div class=\"alert alert-danger\"
                                         role=\"alert\">";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_error"], "html", null, true);
            yield "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "                                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 22, $this->source); })()), 'form_start');
        yield "
                                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'row');
        yield "
                                <div>
                                    <small>
                                        Enter your email address, and we will send you
                                        a
                                        link to reset your password.
                                    </small>
                                </div>
                                <div class=\"col d-flex justify-content-center mt-5\">
                                    <button class=\"btn\" type=\"submit\">
                                        Send password reset email
                                    </button>
                                </div>
                                ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 36, $this->source); })()), 'form_end');
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

    // line 45
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 46
        yield "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:300,
    400,500,600,700&display=swap\">
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mdb.dark.min.css"), "html", null, true);
        yield "\">
    ";
        // line 49
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        [type=\"checkbox\"] {
            accent-color: orangered;
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

        a {
            color: orangered !important;
            text-decoration: none;
        }
    </style>
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
        return "reset_password/request.html.twig";
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
        return array (  183 => 49,  179 => 48,  175 => 46,  165 => 45,  145 => 36,  129 => 23,  124 => 22,  116 => 20,  113 => 19,  109 => 18,  95 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reset your password{% endblock %}
{% block body %}

    <section class=\"vh-100 bg-image\" style=\"
            background-image: url({{ asset('assets/images/body-1846668_1920.jpg') }});
            background-size: cover;
            \">
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div class=\"row d-flex justify-content-center align-items-center h-100\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">Reset
                                    Password</h2>
                                {% for flash_error in app.flashes('reset_password_error') %}
                                    <div class=\"alert alert-danger\"
                                         role=\"alert\">{{ flash_error }}</div>
                                {% endfor %}
                                {{ form_start(requestForm) }}
                                {{ form_row(requestForm.email) }}
                                <div>
                                    <small>
                                        Enter your email address, and we will send you
                                        a
                                        link to reset your password.
                                    </small>
                                </div>
                                <div class=\"col d-flex justify-content-center mt-5\">
                                    <button class=\"btn\" type=\"submit\">
                                        Send password reset email
                                    </button>
                                </div>
                                {{ form_end(requestForm) }}
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

        [type=\"checkbox\"] {
            accent-color: orangered;
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

        a {
            color: orangered !important;
            text-decoration: none;
        }
    </style>
{% endblock %}", "reset_password/request.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\reset_password\\request.html.twig");
    }
}
