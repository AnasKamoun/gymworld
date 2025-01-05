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

/* Fragments/footer.html.twig */
class __TwigTemplate_710954704249823b404b65144e024ee9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Fragments/footer.html.twig"));

        // line 1
        yield "<?php ?>
<!-- Get In Touch Section Begin -->
<div class=\"gettouch-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-map-marker\"></i>
                    <p>Centre Urbain Nord ,Tunisie <br/>index 1082 </p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-mobile\"></i>
                    <ul>

                        <li>28 435 459</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text email\">
                    <i class=\"fa fa-envelope\"></i>
                    <p>gymworld135@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->
<!-- Get In Touch Section Begin -->
<section class=\"footer-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"fs-about\">
                <div class=\"fa-logo\">
                    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        // line 38
        yield "\" alt=\"gym logo\" /></a>
                </div>
                <p class=\"mx-auto text-center\">
                    Welcome to our gym website! Discover a supportive community,
                    state-of-the-art equipment, and expert trainers ready to help you
                    reach your fitness goals. Whether you're a beginner or a seasoned
                    athlete, our gym offers everything you need to stay motivated and
                    achieve results. Join us and start your fitness journey today!
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"copyright-text\">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;
                        ";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y"), "html", null, true);
        yield "
                        <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
                        <a href=\"https://colorlib.com\" target=\"_blank\"></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Fragments/footer.html.twig";
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
        return array (  105 => 55,  86 => 38,  82 => 37,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php ?>
<!-- Get In Touch Section Begin -->
<div class=\"gettouch-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-map-marker\"></i>
                    <p>Centre Urbain Nord ,Tunisie <br/>index 1082 </p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-mobile\"></i>
                    <ul>

                        <li>28 435 459</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text email\">
                    <i class=\"fa fa-envelope\"></i>
                    <p>gymworld135@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->
<!-- Get In Touch Section Begin -->
<section class=\"footer-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"fs-about\">
                <div class=\"fa-logo\">
                    <a href=\"{{ path('app_home') }}\"><img src=\"{{ asset
                            ('assets/images/logo.png') }}\" alt=\"gym logo\" /></a>
                </div>
                <p class=\"mx-auto text-center\">
                    Welcome to our gym website! Discover a supportive community,
                    state-of-the-art equipment, and expert trainers ready to help you
                    reach your fitness goals. Whether you're a beginner or a seasoned
                    athlete, our gym offers everything you need to stay motivated and
                    achieve results. Join us and start your fitness journey today!
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"copyright-text\">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy;
                        {{ 'now'|date('Y') }}
                        <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
                        <a href=\"https://colorlib.com\" target=\"_blank\"></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->", "Fragments/footer.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\Fragments\\footer.html.twig");
    }
}
