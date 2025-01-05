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

/* public/errors-success.html.twig */
class __TwigTemplate_9c204e596cbf0410bdf93b8821b34a21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/errors-success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/errors-success.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", ["success"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["succ"]) {
            // line 2
            yield "    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <div>";
            // line 3
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["succ"], "html", null, true);
            yield "</div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"
                aria-label=\"Close\"></button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['succ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["error"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 9
            yield "        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <div>";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["error"], "html", null, true);
            yield "</div>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"
                    aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "public/errors-success.html.twig";
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
        return array (  70 => 10,  67 => 9,  62 => 8,  51 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for succ in app.flashes('success') %}
    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <div>{{ succ }}</div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"
                aria-label=\"Close\"></button>
    </div>
{% endfor %}
    {% for error in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <div>{{ error }}</div>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"
                    aria-label=\"Close\"></button>
        </div>
    {% endfor %}", "public/errors-success.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\public\\errors-success.html.twig");
    }
}
