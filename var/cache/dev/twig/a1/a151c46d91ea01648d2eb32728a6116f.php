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

/* security/login-admin.html.twig */
class __TwigTemplate_a41d1fcaf298b6f8998995d6a2a4baec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login-admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login-admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login-admin.html.twig", 1);
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

        yield "Login Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container-fluid position-relative d-flex p-0\">
    <div id=\"spinner\"
         class=\"show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem\"
             role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row h-100 align-items-center justify-content-center\"
             style=\"min-height: 100vh\">
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                <form id=\"form\" method=\"post\"
                      class=\"bg-secondary rounded p-4 p-sm-5 my-4 mx-3 js-form\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            <h3 class=\"text-primary\">
                                <img src=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\"
                                     alt=\"Gym Logo\"
                                     style=\"width: 75%\"/>
                            </h3>
                        </a>
                        <h3>Sign In</h3>
                    </div>
                    ";
        // line 29
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })())) {
            // line 30
            yield "                        <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageData", [], "any", false, false, false, 30), "security"), "html", null, true);
            yield "</div>
                    ";
        }
        // line 32
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            yield "                    <div class=\"mb-3\">
                        You are logged in
                        as ";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "userIdentifier", [], "any", false, false, false, 35), "html", null, true);
            yield ", <a
                                href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </div>
                    ";
        } else {
            // line 39
            yield "                        <div class=\"form-floating mb-3\">
                            <input type=\"text\" value=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\"
                                   name=\"username\"
                                   id=\"inputUsername\" class=\"form-control\"
                                   autocomplete=\"username\"
                                   placeholder=\"blabla\"
                                   required autofocus>
                            <label for=\"inputUsername\">Username</label>
                        </div>
                        <div class=\"form-floating mb-4\">
                            <input type=\"password\" name=\"password\"
                                   id=\"inputPassword\"
                                   placeholder=\"blabla\"
                                   class=\"form-control mb-3\"
                                   autocomplete=\"current-password\" required>
                            <label for=\"inputPassword\">Password</label>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
            // line 57
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\"
                        >
                        <div class=\"checkbox mb-3\">
                            <label>
                                <input type=\"checkbox\" name=\"_remember_me\" id=\"checkss\">
                                <label for=\"checkss\">Remember me</label>
                            </label>
                        </div>
                        <button type=\"submit\" class=\"btn py-3 w-100 mb-4 text-dark\"
                                style=\"background-color: rgb(186, 81, 0)\">
                            Sign In
                        </button>
                    ";
        }
        // line 70
        yield "                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 76
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 77
        yield "    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,
600,700&display=swap'>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 83
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.admin.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 84
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styleAdminLogin.css"), "html", null, true);
        yield "\">
    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        #checkss {
            accent-color: orangered;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        yield "    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script>
        var spinner = function () {
            setTimeout(function () {
                if (\$(\"#spinner\").length > 0) {
                    \$(\"#spinner\").removeClass(\"show\");
                }
            }, 1);
        };
        spinner();
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
        return "security/login-admin.html.twig";
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
        return array (  259 => 96,  249 => 95,  227 => 84,  223 => 83,  215 => 77,  205 => 76,  189 => 70,  173 => 57,  153 => 40,  150 => 39,  144 => 36,  140 => 35,  136 => 33,  133 => 32,  127 => 30,  125 => 29,  115 => 22,  110 => 20,  92 => 4,  82 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Login Admin{% endblock %}
{% block body %}
<div class=\"container-fluid position-relative d-flex p-0\">
    <div id=\"spinner\"
         class=\"show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem\"
             role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row h-100 align-items-center justify-content-center\"
             style=\"min-height: 100vh\">
            <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                <form id=\"form\" method=\"post\"
                      class=\"bg-secondary rounded p-4 p-sm-5 my-4 mx-3 js-form\">
                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                        <a href=\"{{ path('app_home') }}\">
                            <h3 class=\"text-primary\">
                                <img src=\"{{ asset('assets/images/logo.png') }}\"
                                     alt=\"Gym Logo\"
                                     style=\"width: 75%\"/>
                            </h3>
                        </a>
                        <h3>Sign In</h3>
                    </div>
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
                        <div class=\"form-floating mb-3\">
                            <input type=\"text\" value=\"{{ last_username }}\"
                                   name=\"username\"
                                   id=\"inputUsername\" class=\"form-control\"
                                   autocomplete=\"username\"
                                   placeholder=\"blabla\"
                                   required autofocus>
                            <label for=\"inputUsername\">Username</label>
                        </div>
                        <div class=\"form-floating mb-4\">
                            <input type=\"password\" name=\"password\"
                                   id=\"inputPassword\"
                                   placeholder=\"blabla\"
                                   class=\"form-control mb-3\"
                                   autocomplete=\"current-password\" required>
                            <label for=\"inputPassword\">Password</label>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\"
                        >
                        <div class=\"checkbox mb-3\">
                            <label>
                                <input type=\"checkbox\" name=\"_remember_me\" id=\"checkss\">
                                <label for=\"checkss\">Remember me</label>
                            </label>
                        </div>
                        <button type=\"submit\" class=\"btn py-3 w-100 mb-4 text-dark\"
                                style=\"background-color: rgb(186, 81, 0)\">
                            Sign In
                        </button>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,
600,700&display=swap'>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.admin.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styleAdminLogin.css') }}\">
    <style>
        * {
            font-family: \"Oswald\", sans-serif !important;
        }

        #checkss {
            accent-color: orangered;
        }
    </style>
{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script>
        var spinner = function () {
            setTimeout(function () {
                if (\$(\"#spinner\").length > 0) {
                    \$(\"#spinner\").removeClass(\"show\");
                }
            }, 1);
        };
        spinner();
    </script>
{% endblock %}
", "security/login-admin.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\security\\login-admin.html.twig");
    }
}
