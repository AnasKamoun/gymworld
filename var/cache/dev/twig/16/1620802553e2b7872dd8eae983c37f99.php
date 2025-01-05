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

/* Fragments/progressbar.html.twig */
class __TwigTemplate_734f4908e232edb97b3bb693abb0a288 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/progressbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/progressbar.html.twig"));

        // line 1
        yield "<span
        class=\"mb-2\"
> Abonnement :
    ";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 4, $this->source); })()), "Offre", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " </span>
<br>
<span class=\"mb-2\">
    Date expiration :
    ";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 8, $this->source); })()), "DateFin", [], "any", false, false, false, 8), "d-m-Y"), "html", null, true);
        yield "
</span>
<br>
<div class=\"progress\" role=\"progressbar\" aria-label=\"Animated striped example\"
     aria-valuenow=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\"
     aria-valuemin=\"0\" aria-valuemax=\"100\">
    <div class=\"progress-bar progress-bar-striped progress-bar-animated\"
         style=\"width: ";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "%;background-color:orangered\">
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Fragments/progressbar.html.twig";
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
        return array (  69 => 15,  63 => 12,  56 => 8,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span
        class=\"mb-2\"
> Abonnement :
    {{ offre.Offre.name }} </span>
<br>
<span class=\"mb-2\">
    Date expiration :
    {{ offre.DateFin | date('d-m-Y') }}
</span>
<br>
<div class=\"progress\" role=\"progressbar\" aria-label=\"Animated striped example\"
     aria-valuenow=\"{{ d }}\"
     aria-valuemin=\"0\" aria-valuemax=\"100\">
    <div class=\"progress-bar progress-bar-striped progress-bar-animated\"
         style=\"width: {{ d }}%;background-color:orangered\">
    </div>
</div>", "Fragments/progressbar.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\Fragments\\progressbar.html.twig");
    }
}
