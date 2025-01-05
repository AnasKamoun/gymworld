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

/* security/login-client.html.twig */
class __TwigTemplate_61dc2ee6c0ae4b45ee78ad06f5bcae44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login-client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login-client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login-client.html.twig", 1);
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

        yield "Log in";
        
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
        yield "
    <section class=\"vh-100 bg-image\" style=\"
            background-image: url(";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/login/pexels-victor-freitas-703016.jpg"), "html", null, true);
        yield ");
            background-size: cover;
            \">
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div class=\"row d-flex justify-content-center align-items-center h-100\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">Log In</h2>
                                <form method=\"post\" class=\"container\"
                                      novalidate=\"novalidate\">
                                    ";
        // line 20
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "                                        <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            yield "</div>
                                    ";
        }
        // line 23
        yield "
                                    ";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            yield "                                        <div class=\"mb-3\">
                                            You are logged in
                                            as ";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
            yield ", <a
                                                    href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                                        </div>
                                    ";
        } else {
            // line 31
            yield "                                        <label for=\"inputEmail\">Email</label>
                                        <input type=\"email\" value=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "\"
                                               name=\"email\"
                                               id=\"inputEmail\"
                                               class=\"form-control mb-3\"
                                               autocomplete=\"email\"
                                               required autofocus>
                                        <label for=\"inputPassword\">Password</label>
                                        <input type=\"password\" name=\"password\"
                                               id=\"inputPassword\"
                                               class=\"form-control mb-3\"
                                               autocomplete=\"current-password\" required>

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\"
                                        >

                                        <div class=\"checkbox mb-3\">
                                            <label>
                                                <input type=\"checkbox\"
                                                       name=\"_remember_me\">
                                                Remember me
                                            </label>
                                        </div>
                                        <div class=\"col d-flex justify-content-center\">
                                            <button class=\"btn\" type=\"submit\">
                                                Sign in
                                            </button>
                                        </div>
                                        <p class=\"text-center\"
                                           style=\"margin-top: 1rem; margin-bottom: -5px\">
                                            Not yet a member ?
                                            <a href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\"
                                               style=\"text-decoration: none; color: orangered\">Sign
                                                Up</a>
                                        </p>
                                        <p class=\"text-center\"
                                           style=\"margin-top: 1rem; margin-bottom: -5px\">
                                            Did you forget your password ?
                                            <a href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            yield "\"
                                               style=\"text-decoration: none; color:
                                               orangered\">Reset it</a>
                                        </p>
                                    ";
        }
        // line 75
        yield "                                </form>
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

    // line 84
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 85
        yield "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Oswald:300,
    400,500,600,700&display=swap\">
    <link rel=\"stylesheet\" href=\"";
        // line 87
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mdb.dark.min.css"), "html", null, true);
        yield "\">
    ";
        // line 88
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
        return "security/login-client.html.twig";
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
        return array (  232 => 88,  228 => 87,  224 => 85,  214 => 84,  195 => 75,  187 => 70,  177 => 63,  156 => 45,  140 => 32,  137 => 31,  131 => 28,  127 => 27,  123 => 25,  121 => 24,  118 => 23,  112 => 21,  110 => 20,  95 => 8,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in{% endblock %}

{% block body %}

    <section class=\"vh-100 bg-image\" style=\"
            background-image: url({{ asset('assets/images/login/pexels-victor-freitas-703016.jpg') }});
            background-size: cover;
            \">
        <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
            <div class=\"container h-100\">
                <div class=\"row d-flex justify-content-center align-items-center h-100\">
                    <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                        <div class=\"card\" style=\"border-radius: 15px\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"text-uppercase text-center mb-3\">Log In</h2>
                                <form method=\"post\" class=\"container\"
                                      novalidate=\"novalidate\">
                                    {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                    {% endif %}

                                    {% if app.user %}
                                        <div class=\"mb-3\">
                                            You are logged in
                                            as {{ app.user.userIdentifier }}, <a
                                                    href=\"{{ path('app_logout') }}\">Logout</a>
                                        </div>
                                    {% else %}
                                        <label for=\"inputEmail\">Email</label>
                                        <input type=\"email\" value=\"{{ last_username }}\"
                                               name=\"email\"
                                               id=\"inputEmail\"
                                               class=\"form-control mb-3\"
                                               autocomplete=\"email\"
                                               required autofocus>
                                        <label for=\"inputPassword\">Password</label>
                                        <input type=\"password\" name=\"password\"
                                               id=\"inputPassword\"
                                               class=\"form-control mb-3\"
                                               autocomplete=\"current-password\" required>

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"{{ csrf_token('authenticate') }}\"
                                        >

                                        <div class=\"checkbox mb-3\">
                                            <label>
                                                <input type=\"checkbox\"
                                                       name=\"_remember_me\">
                                                Remember me
                                            </label>
                                        </div>
                                        <div class=\"col d-flex justify-content-center\">
                                            <button class=\"btn\" type=\"submit\">
                                                Sign in
                                            </button>
                                        </div>
                                        <p class=\"text-center\"
                                           style=\"margin-top: 1rem; margin-bottom: -5px\">
                                            Not yet a member ?
                                            <a href=\"{{ path('app_register') }}\"
                                               style=\"text-decoration: none; color: orangered\">Sign
                                                Up</a>
                                        </p>
                                        <p class=\"text-center\"
                                           style=\"margin-top: 1rem; margin-bottom: -5px\">
                                            Did you forget your password ?
                                            <a href=\"{{ path('app_forgot_password_request') }}\"
                                               style=\"text-decoration: none; color:
                                               orangered\">Reset it</a>
                                        </p>
                                    {% endif %}
                                </form>
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
{% endblock %}", "security/login-client.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\security\\login-client.html.twig");
    }
}
