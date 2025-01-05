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

/* MainPages/client/service.html.twig */
class __TwigTemplate_00fe994a3ff92ed2010083929c91c8d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/service.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/service.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "MainPages/client/service.html.twig", 1);
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
        yield "    services
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    ";
        yield from         $this->loadTemplate("Fragments/breadcrumb.html.twig", "MainPages/client/service.html.twig", 6)->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_title" => "services"]));
        // line 7
        yield "<!-- Services Section Begin -->
<section class=\"services-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>What we do?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 order-lg-1 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/services/services-1.jpg"), "html", null, true);
        yield "\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-2 col-md-6 p-0\">
                <div class=\"ss-text\">
                    <h4>Personal training</h4>
                    <p>
                        Achieve your fitness goals with personalized training. Our
                        certified trainers create custom plans for your success. Start
                        today!
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-3 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/services/services-2.jpg"), "html", null, true);
        yield "\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-4 col-md-6 p-0\">
                <div class=\"ss-text\">
                    <h4>Group fitness classes</h4>
                    <p>
                        Join our dynamic group fitness classes for a fun workout with
                        others!
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-8 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/services/services-4.jpg"), "html", null, true);
        yield "\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-7 col-md-6 p-0\">
                <div class=\"ss-text second-row\">
                    <h4>Body building</h4>
                    <p>Transform your physique with our bodybuilding program!</p>
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-6 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/services/services-3.jpg"), "html", null, true);
        yield "\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-5 col-md-6 p-0\">
                <div class=\"ss-text second-row\">
                    <h4>Strength training</h4>
                    <p>
                        Build strength and redefine your limits with our strength
                        training programs!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Banner Section Begin -->
<section class=\"banner-section set-bg\" data-setbg=\"";
        // line 79
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images//banner-bg.jpg"), "html", null, true);
        yield "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"bs-text service-banner\">
                    <h2>Exercise until the body obeys.</h2>
                    <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
<section class=\"pricing-section service-pricing spad\">
    <div class=\"container\">
        <!-- plan section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>


        <div class=\"row justify-content-center\">

        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 110
            yield "            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>
                        ";
            // line 113
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 113), "html", null, true);
            yield "
                    </h3>
                    <div class=\"pi-price\">
                        <h2>TND
                            ";
            // line 117
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 117), "html", null, true);
            yield "
                        </h2>
                    </div>
                    <ul>
                        <li>Free riding</li>

                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>No time restriction</li>
                        <li>Indoor cycling</li>
                        <li>Cardio kickboxing</li>
                    </ul>

                    <form action=\"";
            // line 130
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pay");
            yield "\" method=\"post\">
                        <input type=\"hidden\" name=\"offreDuration\" value='";
            // line 131
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "duration", [], "any", false, false, false, 131), "html", null, true);
            yield "'>
                        <input type=\"hidden\" name=\"offreID\" value='";
            // line 132
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 132), "html", null, true);
            yield "'>
                        <input type=\"hidden\" name=\"offre\" value='";
            // line 133
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 133), "html", null, true);
            yield "'>
                        <input type=\"hidden\" name=\"price\" value='";
            // line 134
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 134), "html", null, true);
            yield "'>
                        <input class=\"btn btn-warning\" type=\"submit\" value=\"Enroll now\" name=\"submit\">
                    </form>

                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "        </div>

    </div>
</section>
<!-- Pricing Section End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 147
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 148
        yield "<!-- Google Font -->
<link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\" />

<!-- Css Styles -->
<link rel=\"stylesheet\" href=\"";
        // line 153
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 154
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 155
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        yield "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 156
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 157
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/barfiller.css"), "html", null, true);
        yield "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 158
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        yield "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 159
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slicknav.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 160
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" type=\"text/css\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Js Plugins -->
    <script src=\"";
        // line 166
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 167
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 168
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 169
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/masonry.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 170
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.barfiller.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 171
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slicknav.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 172
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 173
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "MainPages/client/service.html.twig";
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
        return array (  395 => 173,  391 => 172,  387 => 171,  383 => 170,  379 => 169,  375 => 168,  371 => 167,  367 => 166,  361 => 164,  351 => 163,  338 => 160,  334 => 159,  330 => 158,  326 => 157,  322 => 156,  318 => 155,  314 => 154,  310 => 153,  303 => 148,  293 => 147,  277 => 141,  264 => 134,  260 => 133,  256 => 132,  252 => 131,  248 => 130,  232 => 117,  225 => 113,  220 => 110,  216 => 109,  183 => 79,  162 => 61,  148 => 50,  131 => 36,  113 => 21,  97 => 7,  94 => 6,  84 => 5,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    services
{% endblock %}
{% block content %}
    {% include 'Fragments/breadcrumb.html.twig' with {'page_title':'services'} %}
<!-- Services Section Begin -->
<section class=\"services-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>What we do?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 order-lg-1 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"{{ asset('assets/images/services/services-1.jpg')}}\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-2 col-md-6 p-0\">
                <div class=\"ss-text\">
                    <h4>Personal training</h4>
                    <p>
                        Achieve your fitness goals with personalized training. Our
                        certified trainers create custom plans for your success. Start
                        today!
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-3 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"{{ asset('assets/images/services/services-2.jpg')}}\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-4 col-md-6 p-0\">
                <div class=\"ss-text\">
                    <h4>Group fitness classes</h4>
                    <p>
                        Join our dynamic group fitness classes for a fun workout with
                        others!
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-8 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"{{ asset('assets/images/services/services-4.jpg') }}\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-7 col-md-6 p-0\">
                <div class=\"ss-text second-row\">
                    <h4>Body building</h4>
                    <p>Transform your physique with our bodybuilding program!</p>
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-6 col-md-6 p-0\">
                <div class=\"ss-pic\">
                    <img src=\"{{ asset('assets/images/services/services-3.jpg')}}\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-3 order-lg-5 col-md-6 p-0\">
                <div class=\"ss-text second-row\">
                    <h4>Strength training</h4>
                    <p>
                        Build strength and redefine your limits with our strength
                        training programs!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Banner Section Begin -->
<section class=\"banner-section set-bg\" data-setbg=\"{{ asset ('assets/images//banner-bg.jpg')}}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"bs-text service-banner\">
                    <h2>Exercise until the body obeys.</h2>
                    <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
<section class=\"pricing-section service-pricing spad\">
    <div class=\"container\">
        <!-- plan section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>


        <div class=\"row justify-content-center\">

        {% for service in services %}
            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>
                        {{service.name }}
                    </h3>
                    <div class=\"pi-price\">
                        <h2>TND
                            {{ service.price }}
                        </h2>
                    </div>
                    <ul>
                        <li>Free riding</li>

                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>No time restriction</li>
                        <li>Indoor cycling</li>
                        <li>Cardio kickboxing</li>
                    </ul>

                    <form action=\"{{ path('app_pay') }}\" method=\"post\">
                        <input type=\"hidden\" name=\"offreDuration\" value='{{ service.duration }}'>
                        <input type=\"hidden\" name=\"offreID\" value='{{ service.id }}'>
                        <input type=\"hidden\" name=\"offre\" value='{{ service.name }}'>
                        <input type=\"hidden\" name=\"price\" value='{{ service.price }}'>
                        <input class=\"btn btn-warning\" type=\"submit\" value=\"Enroll now\" name=\"submit\">
                    </form>

                </div>
            </div>
        {% endfor %}
        </div>

    </div>
</section>
<!-- Pricing Section End -->
{% endblock %}
{% block stylesheets %}
<!-- Google Font -->
<link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\" />

<!-- Css Styles -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/font-awesome.min.css')}}\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"{{  asset('assets/css/flaticon.css')}}\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css')}}\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/barfiller.css')}}\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"{{  asset('assets/css/magnific-popup.css')}}\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"{{  asset('assets/css/slicknav.min.css')}}\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"{{  asset('assets/css/style.css')}}\" type=\"text/css\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Js Plugins -->
    <script src=\"{{  asset('assets/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{  asset('assets/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{  asset('assets/js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{  asset('assets/js/masonry.pkgd.min.js')}}\"></script>
    <script src=\"{{  asset('assets/js/jquery.barfiller.js')}}\"></script>
    <script src=\"{{  asset('assets/js/jquery.slicknav.js')}}\"></script>
    <script src=\"{{  asset('assets/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{  asset('assets/js/main.js')}}\"></script>
{% endblock %}", "MainPages/client/service.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\client\\service.html.twig");
    }
}
