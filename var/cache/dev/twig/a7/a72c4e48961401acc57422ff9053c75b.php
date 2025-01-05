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

/* Fragments/offcanvas.html.twig */
class __TwigTemplate_e65d9b66c0836c52dd1afe290deb91f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/offcanvas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/offcanvas.html.twig"));

        // line 1
        yield "<!-- Offcanvas Menu Section Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper show-offcanvas-menu-wrapper\">
    <div class=\"canvas-close\">
        <i class=\"fa fa-close\"></i>
    </div>
    <nav class=\"canvas-menu mobile-menu\">
        <ul>
            <li><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
            <li><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\">Our Team</a></li>
            <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_timetable");
        yield "\">Classes Timetable </a></li>
            <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
        </ul>
    </nav>
    <div id=\"mobile-menu-wrap\">
        <div class=\"slicknav_menu\">
            <a href=\"#\" aria-haspopup=\"true\" role=\"button\" tabindex=\"0\"
               class=\"slicknav_btn slicknav_collapsed\" style=\"outline: none;\">
                <span class=\"slicknav_menutxt\">MENU</span>
                <span class=\"slicknav_icon\">

                    <span class=\"slicknav_icon-bar\"></span>
                </span>
            </a>
        </div>
    </div>
</div>
<!-- Offcanvas Menu Section End -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Fragments/offcanvas.html.twig";
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
        return array (  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Offcanvas Menu Section Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper show-offcanvas-menu-wrapper\">
    <div class=\"canvas-close\">
        <i class=\"fa fa-close\"></i>
    </div>
    <nav class=\"canvas-menu mobile-menu\">
        <ul>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li><a href=\"{{ path('app_services') }}\">Services</a></li>
            <li><a href=\"{{ path('app_team') }}\">Our Team</a></li>
            <li><a href=\"{{ path('app_timetable') }}\">Classes Timetable </a></li>
            <li><a href=\"{{ path('app_contact') }}\">Contact</a></li>
        </ul>
    </nav>
    <div id=\"mobile-menu-wrap\">
        <div class=\"slicknav_menu\">
            <a href=\"#\" aria-haspopup=\"true\" role=\"button\" tabindex=\"0\"
               class=\"slicknav_btn slicknav_collapsed\" style=\"outline: none;\">
                <span class=\"slicknav_menutxt\">MENU</span>
                <span class=\"slicknav_icon\">

                    <span class=\"slicknav_icon-bar\"></span>
                </span>
            </a>
        </div>
    </div>
</div>
<!-- Offcanvas Menu Section End -->", "Fragments/offcanvas.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\Fragments\\offcanvas.html.twig");
    }
}
