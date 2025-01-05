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

/* MainPages/client/dashboard.html.twig */
class __TwigTemplate_853b23d60fe9bb33776c19654aa87513 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "MainPages/client/dashboard.html.twig", 1);
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

        // line 4
        yield "Profile ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <h1>Welcome ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    ";
        // line 8
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    <div class=\"d-flex justify-content-center align-items-center \" style=\"height: 95vh\">

    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
    <div class=\"form-group\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), 'row');
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'row');
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row');
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "phone_number", [], "any", false, false, false, 16), 'row');
        yield "
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "submit", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "primary_btn"]]);
        yield "
    </div>

    <div class=\"offre\">
        <ul class=\"list-group\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "offreClients", [], "any", false, false, false, 22));
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
            // line 23
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "DateFin", [], "any", false, false, false, 23) > Twig\Extension\CoreExtension::dateConverter($this->env))) {
                // line 24
                yield "                    <li class=\"list-group-item\">
                        ";
                // line 25
                $context["dateDebut"] = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "DateDebut", [], "any", false, false, false, 25);
                // line 26
                yield "                        ";
                $context["dateFin"] = CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "DateFin", [], "any", false, false, false, 26);
                // line 27
                yield "                        ";
                $context["dureeTotale"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 27, $this->source); })()), "diff", [(isset($context["dateFin"]) || array_key_exists("dateFin", $context) ? $context["dateFin"] : (function () { throw new RuntimeError('Variable "dateFin" does not exist.', 27, $this->source); })())], "method", false, false, false, 27), "days", [], "any", false, false, false, 27);
                // line 28
                yield "                        ";
                $context["dureeEcoulee"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateDebut"]) || array_key_exists("dateDebut", $context) ? $context["dateDebut"] : (function () { throw new RuntimeError('Variable "dateDebut" does not exist.', 28, $this->source); })()), "diff", [(isset($context["dateActuelle"]) || array_key_exists("dateActuelle", $context) ? $context["dateActuelle"] : (function () { throw new RuntimeError('Variable "dateActuelle" does not exist.', 28, $this->source); })())], "method", false, false, false, 28), "days", [], "any", false, false, false, 28);
                // line 29
                yield "                        ";
                if (((isset($context["dureeTotale"]) || array_key_exists("dureeTotale", $context) ? $context["dureeTotale"] : (function () { throw new RuntimeError('Variable "dureeTotale" does not exist.', 29, $this->source); })()) == 0)) {
                    // line 30
                    yield "                        ";
                    $context["d"] = 100;
                    // line 31
                    yield "                        ";
                } else {
                    // line 32
                    yield "                        ";
                    $context["d"] = (((isset($context["dureeEcoulee"]) || array_key_exists("dureeEcoulee", $context) ? $context["dureeEcoulee"] : (function () { throw new RuntimeError('Variable "dureeEcoulee" does not exist.', 32, $this->source); })()) / (isset($context["dureeTotale"]) || array_key_exists("dureeTotale", $context) ? $context["dureeTotale"] : (function () { throw new RuntimeError('Variable "dureeTotale" does not exist.', 32, $this->source); })())) * 100);
                    // line 33
                    yield "                        ";
                }
                // line 34
                yield "                        ";
                yield from                 $this->loadTemplate("Fragments/progressbar.html.twig", "MainPages/client/dashboard.html.twig", 34)->unwrap()->yield(CoreExtension::arrayMerge($context, ["d" =>                 // line 36
(isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 36, $this->source); })()), "offre" =>                 // line 37
$context["subscription"]]));
                // line 39
                yield "                    </li>
                ";
            }
            // line 41
            yield "            ";
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
        // line 42
        yield "        </ul>
        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 46
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 47
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        body{
            margin: 100px;
        }
        .form-group{
            width: 800px;
            margin: 100px;

        }
        .btn {
            margin-left: 390px;
            margin-top: 20px;
            background-color: orangered;
            color: whitesmoke;
            text-decoration: none;
            height: 40px;
            padding: 10px;
        }
        .offre{
            width: 800px;
            margin: 100px;
        }
        h1{

            margin: 100px;
            text-align: center;
        }
         input.form-control:focus {
            border-color: orangered;
            box-shadow: 0 0 5px orange;
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
        return "MainPages/client/dashboard.html.twig";
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
        return array (  231 => 47,  221 => 46,  207 => 42,  193 => 41,  189 => 39,  187 => 37,  186 => 36,  184 => 34,  181 => 33,  178 => 32,  175 => 31,  172 => 30,  169 => 29,  166 => 28,  163 => 27,  160 => 26,  158 => 25,  155 => 24,  152 => 23,  135 => 22,  127 => 17,  123 => 16,  119 => 15,  115 => 14,  111 => 13,  106 => 11,  100 => 8,  95 => 7,  85 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Profile {{ user.name }}
{% endblock %}
{% block body %}
    <h1>Welcome {{ user.name }}</h1>
    {{ parent()}}
    <div class=\"d-flex justify-content-center align-items-center \" style=\"height: 95vh\">

    {{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_row(form.username) }}
        {{ form_row(form.name) }}
        {{ form_row(form.email) }}
        {{ form_row(form.phone_number) }}
        {{ form_row(form.submit,{ 'attr': {'class': 'primary_btn'} }) }}
    </div>

    <div class=\"offre\">
        <ul class=\"list-group\">
            {% for subscription in user.offreClients %}
                {% if subscription.DateFin > date() %}
                    <li class=\"list-group-item\">
                        {% set dateDebut = subscription.DateDebut %}
                        {% set dateFin = subscription.DateFin %}
                        {% set dureeTotale = dateDebut.diff(dateFin).days %}
                        {% set dureeEcoulee = dateDebut.diff(dateActuelle).days %}
                        {% if dureeTotale == 0  %}
                        {% set d = 100 %}
                        {% else %}
                        {% set d = (dureeEcoulee / dureeTotale) * 100 %}
                        {% endif %}
                        {% include 'Fragments/progressbar.html.twig'
                            with {
                            'd': d,
                            'offre': subscription
                        } %}
                    </li>
                {% endif %}
            {% endfor %}
        </ul>
        </div>

{% endblock %}
{% block stylesheets %}
{{ parent() }}
    <style>
        body{
            margin: 100px;
        }
        .form-group{
            width: 800px;
            margin: 100px;

        }
        .btn {
            margin-left: 390px;
            margin-top: 20px;
            background-color: orangered;
            color: whitesmoke;
            text-decoration: none;
            height: 40px;
            padding: 10px;
        }
        .offre{
            width: 800px;
            margin: 100px;
        }
        h1{

            margin: 100px;
            text-align: center;
        }
         input.form-control:focus {
            border-color: orangered;
            box-shadow: 0 0 5px orange;
        }

    </style>
{% endblock %}", "MainPages/client/dashboard.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\client\\dashboard.html.twig");
    }
}
