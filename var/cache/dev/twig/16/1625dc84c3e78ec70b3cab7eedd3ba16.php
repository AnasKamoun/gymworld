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

/* MainPages/Admin/clients.html.twig */
class __TwigTemplate_c0e3512b16a0a0578ccb6691854d8028 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/Admin/clients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/Admin/clients.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "MainPages/Admin/clients.html.twig", 1);
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
        yield "    Consulter Client
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"
          rel=\"stylesheet\"/>
    <style>
        .bg-orangered {
            background-color: rgb(233, 96, 17);
        }

        .btn-outline-info {
            color: black !important;
            border-color: black !important;
            --bs-btn-hover-bg: rgb(233, 96, 17);
        }

        a, .page-link {
            color: grey;
            text-decoration: none;
        }

        .page-link:hover, .page-link:focus {
            color: orangered;
        }

        .active > .page-link, .page-link.active {
            background-color: darkorange;
            border-color: darkorange;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        yield "    <div class=\"bg-orangered\">
        <div class=\"container p-4\">
            ";
        // line 38
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
            <div class=\"row\">
                <div class=\"col-md-12 my-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-uppercase mb-0\">Manage Users</h5>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table no-wrap user-table mb-0\">
                                <thead>
                                <tr>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Access Card Id
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Name
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        UserName
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Email
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Details
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Modify
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Delete
                                    </th>
                                </tr>
                                </thead>

                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clt"]) {
            // line 81
            yield "                                    <tbody>
                                    <tr>
                                        <td>
                                            <h1>
                                                ";
            // line 85
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["clt"], "id", [], "any", false, false, false, 85), "html", null, true);
            yield "
                                            </h1>
                                        </td>
                                        <td>
                                            <h5 class=\"font-medium mb-0\">
                                                ";
            // line 90
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["clt"], "name", [], "any", false, false, false, 90), "html", null, true);
            yield "
                                            </h5>
                                        </td>
                                        <td>
                                            <h5 class=\"font-medium mb-0\">
                                                ";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["clt"], "username", [], "any", false, false, false, 95), "html", null, true);
            yield "
                                            </h5>
                                        </td>
                                        <td>
                      <span class=\"text-muted\">
                        ";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["clt"], "email", [], "any", false, false, false, 100), "html", null, true);
            yield "
                      </span><br>
                                        </td>
                                        <td>
                                            <button type=\"submit\"
                                                    class=\"btn btn-outline-info btn-circle btn-lg btn-circle ml-2\"
                                                    name=\"modify\"
                                            >
                                                <a href=\"";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client_id", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 110
$context["clt"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            // line 111
            yield "\"><i
                                                            class=\"fa fa-info\"></i></a>

                                            </button>

                                        </td>
                                        <td>
                                            <button type=\"submit\"
                                                    class=\"btn btn-outline-info btn-circle btn-lg btn-circle ml-2\"
                                                    name=\"modify\">
                                                <a href=\"";
            // line 121
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 124
$context["clt"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            // line 126
            yield "\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </a>

                                            </button>
                                            <br>
                                        </td>
                                        <td>
                                            <button type=\"submit\" name=\"delete\"
                                                    class=\"btn btn-outline-info btn-circle btn-lg btn-circle ml-2\">
                                                <a href=\"";
            // line 136
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client_id_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 138
$context["clt"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            // line 139
            yield "\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </a>

                                            </button>
                                            <br>
                                        </td>
                                    </tr>
                                    </tbody>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex justify-content-between align-items-center\">
                <nav class=\"d-flex justify-content-center align-items-center\"
                     aria-label=\"Page navigation example\">
                    <ul class=\"pagination my-auto\">
                        <li class=\"page-item\">
                            <a class=\"page-link ";
        // line 159
        if (((isset($context["nbPageActuelle"]) || array_key_exists("nbPageActuelle", $context) ? $context["nbPageActuelle"] : (function () { throw new RuntimeError('Variable "nbPageActuelle" does not exist.', 159, $this->source); })()) == 1)) {
            yield "disabled";
        }
        yield "\"
                               href=\"";
        // line 160
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client_findAll", ["nbPage" => max((        // line 162
(isset($context["nbPageActuelle"]) || array_key_exists("nbPageActuelle", $context) ? $context["nbPageActuelle"] : (function () { throw new RuntimeError('Variable "nbPageActuelle" does not exist.', 162, $this->source); })()) - 1), 1), "nbPers" => (isset($context["nbPers"]) || array_key_exists("nbPers", $context) ? $context["nbPers"] : (function () { throw new RuntimeError('Variable "nbPers" does not exist.', 162, $this->source); })())]), "html", null, true);
        // line 163
        yield "\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["nbTotPages"]) || array_key_exists("nbTotPages", $context) ? $context["nbTotPages"] : (function () { throw new RuntimeError('Variable "nbTotPages" does not exist.', 167, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["pg"]) {
            // line 168
            yield "                            <li class=\"page-item\"><a
                                        class=\"page-link ";
            // line 169
            if (((isset($context["nbPageActuelle"]) || array_key_exists("nbPageActuelle", $context) ? $context["nbPageActuelle"] : (function () { throw new RuntimeError('Variable "nbPageActuelle" does not exist.', 169, $this->source); })()) == $context["pg"])) {
                // line 170
                yield "                 active ";
            }
            yield "\"
                                        href=\"";
            // line 171
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client_findAll", ["nbPage" =>             // line 172
$context["pg"], "nbPers" => (isset($context["nbPers"]) || array_key_exists("nbPers", $context) ? $context["nbPers"] : (function () { throw new RuntimeError('Variable "nbPers" does not exist.', 172, $this->source); })())]), "html", null, true);
            // line 173
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["pg"], "html", null, true);
            yield "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "                        <li class=\"page-item\">
                            <a class=\"page-link ";
        // line 176
        if (((isset($context["nbTotPages"]) || array_key_exists("nbTotPages", $context) ? $context["nbTotPages"] : (function () { throw new RuntimeError('Variable "nbTotPages" does not exist.', 176, $this->source); })()) == (isset($context["nbPageActuelle"]) || array_key_exists("nbPageActuelle", $context) ? $context["nbPageActuelle"] : (function () { throw new RuntimeError('Variable "nbPageActuelle" does not exist.', 176, $this->source); })()))) {
            yield " disabled";
        }
        yield "\"
                               href=\"";
        // line 177
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client_findAll", ["nbPage" => min((        // line 178
(isset($context["nbPageActuelle"]) || array_key_exists("nbPageActuelle", $context) ? $context["nbPageActuelle"] : (function () { throw new RuntimeError('Variable "nbPageActuelle" does not exist.', 178, $this->source); })()) + 1), (isset($context["nbTotPages"]) || array_key_exists("nbTotPages", $context) ? $context["nbTotPages"] : (function () { throw new RuntimeError('Variable "nbTotPages" does not exist.', 178, $this->source); })())), "nbPers" =>         // line 179
(isset($context["nbPers"]) || array_key_exists("nbPers", $context) ? $context["nbPers"] : (function () { throw new RuntimeError('Variable "nbPers" does not exist.', 179, $this->source); })())]), "html", null, true);
        // line 180
        yield "\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <button class=\"btn btn-dark mt-0\"><a
                            href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_add");
        yield "\"
                            class=\"btn-info\">
                        Add
                        Client</a></button>
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
        return "MainPages/Admin/clients.html.twig";
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
        return array (  362 => 188,  352 => 180,  350 => 179,  349 => 178,  348 => 177,  342 => 176,  339 => 175,  330 => 173,  328 => 172,  327 => 171,  322 => 170,  320 => 169,  317 => 168,  313 => 167,  307 => 163,  305 => 162,  304 => 160,  298 => 159,  286 => 149,  271 => 139,  269 => 138,  268 => 136,  256 => 126,  254 => 124,  253 => 121,  241 => 111,  239 => 110,  238 => 108,  227 => 100,  219 => 95,  211 => 90,  203 => 85,  197 => 81,  193 => 80,  148 => 38,  144 => 36,  134 => 35,  93 => 6,  83 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Consulter Client
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"
          rel=\"stylesheet\"/>
    <style>
        .bg-orangered {
            background-color: rgb(233, 96, 17);
        }

        .btn-outline-info {
            color: black !important;
            border-color: black !important;
            --bs-btn-hover-bg: rgb(233, 96, 17);
        }

        a, .page-link {
            color: grey;
            text-decoration: none;
        }

        .page-link:hover, .page-link:focus {
            color: orangered;
        }

        .active > .page-link, .page-link.active {
            background-color: darkorange;
            border-color: darkorange;
        }
    </style>
{% endblock %}
{% block body %}
    <div class=\"bg-orangered\">
        <div class=\"container p-4\">
            {{ parent() }}
            <div class=\"row\">
                <div class=\"col-md-12 my-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-uppercase mb-0\">Manage Users</h5>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table no-wrap user-table mb-0\">
                                <thead>
                                <tr>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Access Card Id
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Name
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        UserName
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Email
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Details
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Modify
                                    </th>
                                    <th scope=\"col\"
                                        class=\"border-0 text-uppercase font-medium\">
                                        Delete
                                    </th>
                                </tr>
                                </thead>

                                {% for clt in clients %}
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h1>
                                                {{ clt.id }}
                                            </h1>
                                        </td>
                                        <td>
                                            <h5 class=\"font-medium mb-0\">
                                                {{ clt.name }}
                                            </h5>
                                        </td>
                                        <td>
                                            <h5 class=\"font-medium mb-0\">
                                                {{ clt.username }}
                                            </h5>
                                        </td>
                                        <td>
                      <span class=\"text-muted\">
                        {{ clt.email }}
                      </span><br>
                                        </td>
                                        <td>
                                            <button type=\"submit\"
                                                    class=\"btn btn-outline-info btn-circle btn-lg btn-circle ml-2\"
                                                    name=\"modify\"
                                            >
                                                <a href=\"{{ path
                                                    ('app_admin_dashboard_client_id',{
                                                        'id':clt.id
                                                    }) }}\"><i
                                                            class=\"fa fa-info\"></i></a>

                                            </button>

                                        </td>
                                        <td>
                                            <button type=\"submit\"
                                                    class=\"btn btn-outline-info btn-circle btn-lg btn-circle ml-2\"
                                                    name=\"modify\">
                                                <a href=\"{{ path
                                                    ('app_admin_dashboard_edit',
                                                    {
                                                        'id':clt.id
                                                    }
                                                ) }}\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </a>

                                            </button>
                                            <br>
                                        </td>
                                        <td>
                                            <button type=\"submit\" name=\"delete\"
                                                    class=\"btn btn-outline-info btn-circle btn-lg btn-circle ml-2\">
                                                <a href=\"{{ path
                                                    ('app_admin_dashboard_client_id_delete',{
                                                        'id':clt.id
                                                    }) }}\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </a>

                                            </button>
                                            <br>
                                        </td>
                                    </tr>
                                    </tbody>
                                {% endfor %}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex justify-content-between align-items-center\">
                <nav class=\"d-flex justify-content-center align-items-center\"
                     aria-label=\"Page navigation example\">
                    <ul class=\"pagination my-auto\">
                        <li class=\"page-item\">
                            <a class=\"page-link {% if nbPageActuelle == 1 %}disabled{% endif %}\"
                               href=\"{{ path
                                   ('app_admin_dashboard_client_findAll',{
                                       nbPage : max(nbPageActuelle-1,1) , nbPers : nbPers
                                   }) }}\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                        {% for pg in 1..nbTotPages %}
                            <li class=\"page-item\"><a
                                        class=\"page-link {% if nbPageActuelle == pg %}
                 active {% endif %}\"
                                        href=\"{{ path('app_admin_dashboard_client_findAll',{
                                            nbPage : pg , nbPers : nbPers
                                        }) }}\">{{ pg }}</a></li>
                        {% endfor %}
                        <li class=\"page-item\">
                            <a class=\"page-link {% if nbTotPages==nbPageActuelle %} disabled{% endif %}\"
                               href=\"{{ path('app_admin_dashboard_client_findAll',{
                                   nbPage : min(nbPageActuelle+1,nbTotPages) , nbPers :
                                   nbPers
                               }) }}\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <button class=\"btn btn-dark mt-0\"><a
                            href=\"{{ path('app_admin_dashboard_add') }}\"
                            class=\"btn-info\">
                        Add
                        Client</a></button>
            </div>
        </div>
    </div>

{% endblock %}", "MainPages/Admin/clients.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\Admin\\clients.html.twig");
    }
}
