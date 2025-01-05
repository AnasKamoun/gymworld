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

/* Fragments/header.html.twig */
class __TwigTemplate_bb8b13294e36be660352eab01f11365a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/header.html.twig"));

        // line 1
        yield "<!-- Header Section Begin -->
<header class=\"header-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"logo\">
                    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <img src=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" alt=\"log gym
                        world\"/>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                        ";
        // line 17
        $context["currentPage"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17);
        // line 18
        yield "                        ";
        $context["pages"] = ["app_services" => "Services", "app_team" => "Team", "app_timetable" => "Timetable", "app_contact" => "Contact"];
        // line 24
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["route"] => $context["label"]) {
            // line 25
            yield "                            <li class=\"";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 25, $this->source); })()) == $context["route"])) {
                yield "active";
            }
            yield "\"><a
                                        href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($context["route"]);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["label"], "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['route'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                    </ul>
                </nav>
            </div>
            ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32)))) {
            // line 33
            yield "                <div class=\"button-container col-lg-4 mt-5 mx-auto mt-lg-0 ms-lg-0\">
                    <a href=\"";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_dashboard", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 35
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            // line 36
            yield "\"
                       class=\"primary-btn\">Profile </a>
                    <a href=\"";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_accesscard", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 39
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            // line 40
            yield "\"
                       class=\"primary-btn\">Access
                        Card </a>
                    <a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"primary-btn\">sign out </a>
                </div>
            ";
        }
        // line 46
        yield "        </div>
        <div class=\"canvas-open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>
<!-- Header End -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Fragments/header.html.twig";
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
        return array (  130 => 46,  124 => 43,  119 => 40,  117 => 39,  116 => 38,  112 => 36,  110 => 35,  109 => 34,  106 => 33,  104 => 32,  99 => 29,  88 => 26,  81 => 25,  76 => 24,  73 => 18,  71 => 17,  67 => 16,  56 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header Section Begin -->
<header class=\"header-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"logo\">
                    <a href=\"{{ path('app_home') }}\">
                        <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"log gym
                        world\"/>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                        {% set currentPage = app.request.get('_route') %}
                        {% set pages = {
                            'app_services': 'Services',
                            'app_team': 'Team',
                            'app_timetable': 'Timetable',
                            'app_contact': 'Contact'
                        } %}
                        {% for route, label in pages %}
                            <li class=\"{% if currentPage==route %}active{% endif %}\"><a
                                        href=\"{{ path(route) }}\">{{ label }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </nav>
            </div>
            {% if app.user and 'ROLE_USER' in app.user.roles %}
                <div class=\"button-container col-lg-4 mt-5 mx-auto mt-lg-0 ms-lg-0\">
                    <a href=\"{{ path('app_user_dashboard',{
                        'id': app.user.id,
                    }) }}\"
                       class=\"primary-btn\">Profile </a>
                    <a href=\"{{ path('app_user_accesscard',{
                        'id': app.user.id,
                    }) }}\"
                       class=\"primary-btn\">Access
                        Card </a>
                    <a href=\"{{ path('app_logout') }}\" class=\"primary-btn\">sign out </a>
                </div>
            {% endif %}
        </div>
        <div class=\"canvas-open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>
<!-- Header End -->", "Fragments/header.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\Fragments\\header.html.twig");
    }
}
