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

/* MainPages/Admin/detail_client.html.twig */
class __TwigTemplate_d37aa38071b316a8334316c7e742d1ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/Admin/detail_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/Admin/detail_client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "MainPages/Admin/detail_client.html.twig", 1);
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
    <style>
        a, a:hover, a:active, a:visited, a:link {
            color: orangered;
        }

        .dropdown-item:active,
        .dropdown-item:visited {
            background-color: orangered;
            opacity: 50%;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        yield "    <div class=\"container my-4\">
        <div class=\"row\">
            <h1 class=\"col\">Consulter Client</h1>
        </div>
        ";
        // line 24
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
        <div class=\"card mb-3 position-relative\">
            <div class=\"dropdown-center position-absolute top-0 end-0\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                        data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <button class=\"dropdown-item\" type=\"button\"><a
                                    class=\"text-decoration-none\"
                                    href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client");
        yield "\">Back
                                to
                                main list</a></button>
                    </li>
                    <li>
                        <button class=\"dropdown-item\" type=\"button\"><a
                                    class=\"text-decoration-none\"
                                    href=\"";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client_id_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">Edit
                            </a></button>
                    </li>
                    <li>
                        <button class=\"dropdown-item\" type=\"button\"><a
                                    class=\"text-decoration-none\"
                                    href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_client_id_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\">Delete
                                User</a>
                        </button>
                    </li>
                </ul>
            </div>
            <img src=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/banner-bg.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\"
                 alt=\"...\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>";
        // line 68
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 68, $this->source); })()), "phoneNumber", [], "any", false, false, false, 68), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Subscriptions</th>
                        <td>
                            <ul class=\"list-group\">
                                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 78, $this->source); })()), "offreClients", [], "any", false, false, false, 78));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 79
            yield "                                    ";
            // line 81
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "DateFin", [], "any", false, false, false, 81) > Twig\Extension\CoreExtension::dateConverter($this->env))) {
                // line 82
                yield "                                        <li class=\"list-group-item\">
                                            ";
                // line 83
                $context["dateDebut"] = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "DateDebut", [], "any", false, false, false, 83);
                // line 84
                yield "                                            ";
                $context["dateFin"] = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "DateFin", [], "any", false, false, false, 84);
                // line 85
                yield "                                            ";
                $context["dureeTotale"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 85, $this->source); })()), "diff", [(isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 85, $this->source); })())], "method", false, false, false, 85), "days", [], "any", false, false, false, 85);
                // line 86
                yield "                                            ";
                $context["dureeEcoulee"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 86, $this->source); })()), "diff", [(isset($context["dateActuelle"]) || array_key_exists("dateActuelle", $context) ? $context["dateActuelle"] : (function () { throw new RuntimeError('Variable "dateActuelle" does not exist.', 86, $this->source); })())], "method", false, false, false, 86), "days", [], "any", false, false, false, 86);
                // line 87
                yield "                                            ";
                $context["d"] = (((isset($context["dureeEcoulee"]) || array_key_exists("dureeEcoulee", $context) ? $context["dureeEcoulee"] : (function () { throw new RuntimeError('Variable "dureeEcoulee" does not exist.', 87, $this->source); })()) / (isset($context["dureeTotale"]) || array_key_exists("dureeTotale", $context) ? $context["dureeTotale"] : (function () { throw new RuntimeError('Variable "dureeTotale" does not exist.', 87, $this->source); })())) * 100);
                // line 88
                yield "                                            ";
                yield from                 $this->loadTemplate("Fragments/progressbar.html.twig", "MainPages/Admin/detail_client.html.twig", 88)->unwrap()->yield(CoreExtension::arrayMerge($context, ["d" =>                 // line 90
(isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 90, $this->source); })()), "offre" =>                 // line 91
$context["subscription"]]));
                // line 93
                yield "                                        </li>
                                    ";
            }
            // line 95
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
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
        return "MainPages/Admin/detail_client.html.twig";
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
        return array (  277 => 96,  263 => 95,  259 => 93,  257 => 91,  256 => 90,  254 => 88,  251 => 87,  248 => 86,  245 => 85,  242 => 84,  240 => 83,  237 => 82,  234 => 81,  232 => 79,  215 => 78,  206 => 72,  199 => 68,  192 => 64,  185 => 60,  175 => 53,  166 => 47,  157 => 41,  147 => 34,  134 => 24,  128 => 20,  118 => 19,  93 => 6,  83 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Consulter Client
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <style>
        a, a:hover, a:active, a:visited, a:link {
            color: orangered;
        }

        .dropdown-item:active,
        .dropdown-item:visited {
            background-color: orangered;
            opacity: 50%;
        }
    </style>
{% endblock %}
{% block body %}
    <div class=\"container my-4\">
        <div class=\"row\">
            <h1 class=\"col\">Consulter Client</h1>
        </div>
        {{ parent() }}
        <div class=\"card mb-3 position-relative\">
            <div class=\"dropdown-center position-absolute top-0 end-0\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                        data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <button class=\"dropdown-item\" type=\"button\"><a
                                    class=\"text-decoration-none\"
                                    href=\"{{ path('app_admin_dashboard_client') }}\">Back
                                to
                                main list</a></button>
                    </li>
                    <li>
                        <button class=\"dropdown-item\" type=\"button\"><a
                                    class=\"text-decoration-none\"
                                    href=\"{{ path('app_admin_dashboard_client_id_edit', {'id': client.id}) }}\">Edit
                            </a></button>
                    </li>
                    <li>
                        <button class=\"dropdown-item\" type=\"button\"><a
                                    class=\"text-decoration-none\"
                                    href=\"{{ path('app_admin_dashboard_client_id_delete',{ 'id':client.id}) }}\">Delete
                                User</a>
                        </button>
                    </li>
                </ul>
            </div>
            <img src=\"{{ asset('assets/images/banner-bg.jpg') }}\" class=\"card-img-top\"
                 alt=\"...\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ client.id }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ client.name }}</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>{{ client.phoneNumber }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ client.email }}</td>
                    </tr>
                    <tr>
                        <th>Subscriptions</th>
                        <td>
                            <ul class=\"list-group\">
                                {% for subscription in client.offreClients %}
                                    {# afficher le client seulemnt si la date fin n'est
                                     pas encore arivée #}
                                    {% if subscription.DateFin > date() %}
                                        <li class=\"list-group-item\">
                                            {% set dateDebut = subscription.DateDebut %}
                                            {% set dateFin = subscription.DateFin %}
                                            {% set dureeTotale = dateDebut.diff(dateFin).days %}
                                            {% set dureeEcoulee = dateDebut.diff(dateActuelle).days %}
                                            {% set d = (dureeEcoulee / dureeTotale) * 100 %}
                                            {% include 'Fragments/progressbar.html.twig'
                                                with {
                                                'd': d,
                                                'offre': subscription
                                            } %}
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "MainPages/Admin/detail_client.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\Admin\\detail_client.html.twig");
    }
}
