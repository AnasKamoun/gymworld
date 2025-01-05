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

/* MainPages/client/timetable-component.html.twig */
class __TwigTemplate_05d3d3bc452c07dd5f995b4cc7c24ab4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/timetable-component.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/timetable-component.html.twig"));

        // line 1
        yield "<section class=\"class-timetable-section spad\">
    <div class=\"container\">
        ";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "public/errors-success.html.twig");
        yield "
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title\">
                    <span>Find Your Time</span>
                    <h2>Find Your Time</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"table-controls\">
                    <ul>
                        <li class=\"active\" data-tsfilter=\"all\">All event</li>
                        <li data-tsfilter=\"fitness\">Fitness tips</li>
                        <li data-tsfilter=\"motivation\">Motivation</li>
                        <li data-tsfilter=\"workout\">Workout</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"class-timetable\">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["temps"]) || array_key_exists("temps", $context) ? $context["temps"] : (function () { throw new RuntimeError('Variable "temps" does not exist.', 39, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
            // line 40
            yield "                            ";
            $context["tps"] = CoreExtension::getAttribute($this->env, $this->source, $context["tmp"], "heureDebut", [], "any", false, false, false, 40);
            // line 41
            yield "                            ";
            $context["bigIndex"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41);
            // line 42
            yield "                            <tr>
                                <td class=\"class-time\">";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["tps"]) || array_key_exists("tps", $context) ? $context["tps"] : (function () { throw new RuntimeError('Variable "tps" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "h -
                                    ";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, ((isset($context["tps"]) || array_key_exists("tps", $context) ? $context["tps"] : (function () { throw new RuntimeError('Variable "tps" does not exist.', 44, $this->source); })()) + 2), "html", null, true);
            yield "h
                                </td>
                                ";
            // line 46
            $context["k"] = 0;
            // line 47
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 6));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
                yield "                                    ";
                $context["verif"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48) + (isset($context["bigIndex"]) || array_key_exists("bigIndex", $context) ? $context["bigIndex"] : (function () { throw new RuntimeError('Variable "bigIndex" does not exist.', 48, $this->source); })()));
                // line 49
                yield "                                    ";
                if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 49, $this->source); })()) < Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 49, $this->source); })()), (isset($context["tps"]) || array_key_exists("tps", $context) ? $context["tps"] : (function () { throw new RuntimeError('Variable "tps" does not exist.', 49, $this->source); })()), [], "array", false, false, false, 49)))) {
                    // line 50
                    yield "                                        ";
                    $context["act"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 50, $this->source); })()), (isset($context["tps"]) || array_key_exists("tps", $context) ? $context["tps"] : (function () { throw new RuntimeError('Variable "tps" does not exist.', 50, $this->source); })()), [], "array", false, false, false, 50), (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 50, $this->source); })()), [], "array", false, false, false, 50);
                    // line 51
                    yield "                                        ";
                    if (($context["i"] == (CoreExtension::getAttribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 51, $this->source); })()), "jour", [], "any", false, false, false, 51) - 1))) {
                        // line 52
                        yield "                                            <td class=\"";
                        if (((isset($context["verif"]) || array_key_exists("verif", $context) ? $context["verif"] : (function () { throw new RuntimeError('Variable "verif" does not exist.', 52, $this->source); })()) % 2 == 0)) {
                            yield "dark-bg";
                        }
                        yield " hover-bg ts-meta\"
                                                data-tsmeta=\"";
                        // line 53
                        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53)), "html", null, true);
                        yield "\"
                                                data-id=\"";
                        // line 54
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
                        yield "\"
                                            >
                                                <h5>";
                        // line 56
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), "html", null, true);
                        yield "</h5>
                                                <span>";
                        // line 57
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 57, $this->source); })()), "coach", [], "any", false, false, false, 57), "html", null, true);
                        yield "</span>
                                            </td>
                                            ";
                        // line 59
                        $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 59, $this->source); })()) + 1);
                        // line 60
                        yield "                                        ";
                    } else {
                        // line 61
                        yield "                                            <td class=\"";
                        if (((isset($context["verif"]) || array_key_exists("verif", $context) ? $context["verif"] : (function () { throw new RuntimeError('Variable "verif" does not exist.', 61, $this->source); })()) % 2 == 0)) {
                            yield "dark-bg";
                        }
                        yield " blank-td\"
                                                data-jour=\"";
                        // line 62
                        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["i"] + 1), "html", null, true);
                        yield "\"
                                                data-debut=\"";
                        // line 63
                        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["tps"]) || array_key_exists("tps", $context) ? $context["tps"] : (function () { throw new RuntimeError('Variable "tps" does not exist.', 63, $this->source); })()), "html", null, true);
                        yield "\"
                                                data-id=\"0\"
                                            ></td>
                                        ";
                    }
                    // line 67
                    yield "                                    ";
                } else {
                    // line 68
                    yield "                                        <td data-id=\"0\"
                                            data-jour=\"";
                    // line 69
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["i"] + 1), "html", null, true);
                    yield "\"
                                            data-debut=\"";
                    // line 70
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["tps"]) || array_key_exists("tps", $context) ? $context["tps"] : (function () { throw new RuntimeError('Variable "tps" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield "\"
                                            class=\"";
                    // line 71
                    if (((isset($context["verif"]) || array_key_exists("verif", $context) ? $context["verif"] : (function () { throw new RuntimeError('Variable "verif" does not exist.', 71, $this->source); })()) % 2 == 0)) {
                        yield "dark-bg";
                    }
                    yield " blank-td\"></td>
                                    ";
                }
                // line 73
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                            </tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MainPages/client/timetable-component.html.twig";
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
        return array (  252 => 76,  237 => 74,  223 => 73,  216 => 71,  212 => 70,  208 => 69,  205 => 68,  202 => 67,  195 => 63,  191 => 62,  184 => 61,  181 => 60,  179 => 59,  174 => 57,  170 => 56,  165 => 54,  161 => 53,  154 => 52,  151 => 51,  148 => 50,  145 => 49,  142 => 48,  124 => 47,  122 => 46,  117 => 44,  113 => 43,  110 => 42,  107 => 41,  104 => 40,  87 => 39,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"class-timetable-section spad\">
    <div class=\"container\">
        {{ include('public/errors-success.html.twig') }}
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title\">
                    <span>Find Your Time</span>
                    <h2>Find Your Time</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"table-controls\">
                    <ul>
                        <li class=\"active\" data-tsfilter=\"all\">All event</li>
                        <li data-tsfilter=\"fitness\">Fitness tips</li>
                        <li data-tsfilter=\"motivation\">Motivation</li>
                        <li data-tsfilter=\"workout\">Workout</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"class-timetable\">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for tmp in temps %}
                            {% set tps = tmp.heureDebut %}
                            {% set bigIndex = loop.index %}
                            <tr>
                                <td class=\"class-time\">{{ tps }}h -
                                    {{ tps+2 }}h
                                </td>
                                {% set k=0 %}
                                {% for i in 0..6 %}
                                    {% set verif = loop.index+bigIndex %}
                                    {% if k < activites[tps] | length %}
                                        {% set act = activites[tps][k] %}
                                        {% if i == act.jour-1 %}
                                            <td class=\"{% if verif is even %}dark-bg{% endif %} hover-bg ts-meta\"
                                                data-tsmeta=\"{{ act.type | lower }}\"
                                                data-id=\"{{ act.id }}\"
                                            >
                                                <h5>{{ act.nom }}</h5>
                                                <span>{{ act.coach }}</span>
                                            </td>
                                            {% set k= k+1 %}
                                        {% else %}
                                            <td class=\"{% if verif is even %}dark-bg{% endif %} blank-td\"
                                                data-jour=\"{{ i +1 }}\"
                                                data-debut=\"{{ tps }}\"
                                                data-id=\"0\"
                                            ></td>
                                        {% endif %}
                                    {% else %}
                                        <td data-id=\"0\"
                                            data-jour=\"{{ i +1 }}\"
                                            data-debut=\"{{ tps }}\"
                                            class=\"{% if verif is even %}dark-bg{% endif %} blank-td\"></td>
                                    {% endif %}
                                {% endfor %}
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
", "MainPages/client/timetable-component.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\client\\timetable-component.html.twig");
    }
}
