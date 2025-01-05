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

/* MainPages/client/team.html.twig */
class __TwigTemplate_c7a6b79c08a9781860a8422fc3138327 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/team.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "MainPages/client/team.html.twig", 1);
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

        yield "Team";
        
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
        yield from         $this->loadTemplate("Fragments/breadcrumb.html.twig", "MainPages/client/team.html.twig", 6)->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_title" => "Team"]));
        // line 7
        yield "    <!-- Team Section Begin -->
    <section class=\"team-section team-page spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"team-title\">
                        <div class=\"section-title\">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-1.jpg"), "html", null, true);
        yield "\">
                        <div class=\"ts_text\">
                            <h4>Refka Mahjoub</h4>
                            <span>Gym Trainer</span>
                            <p>RefkaMahjoub@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-2.jpg"), "html", null, true);
        yield "\">
                        <div class=\"ts_text\">
                            <h4>Oussama Grami</h4>
                            <span>Gym Trainer</span>
                            <p>OussamaGrami@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-3.jpg"), "html", null, true);
        yield "\">
                        <div class=\"ts_text\">
                            <h4>Aziz Dhouibi</h4>
                            <span>Gym Trainer</span>
                            <p>AzizDhouibi@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-4.jpg"), "html", null, true);
        yield "\">
                        <div class=\"ts_text\">
                            <h4>Youcef Afli</h4>
                            <span>Gym Trainer</span>
                            <p>YoucefAfli@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 63
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-5.jpg"), "html", null, true);
        yield "\">
                        <div class=\"ts_text\">
                            <h4>Maram benrhouma</h4>
                            <span>Gym Trainer</span>
                            <p>Marambenrhouma@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 73
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-6.jpg"), "html", null, true);
        yield "\">
                        <div class=\"ts_text\">
                            <h4>Lina Saoud</h4>
                            <span>Gym Trainer</span>
                            <p>LinaSaoud@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    ";
        // line 86
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 101
        yield "
    ";
        // line 102
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 86
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 87
        yield "        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\" />

        <!-- Css Styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 92
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 93
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 94
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        yield "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 95
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 96
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/barfiller.css"), "html", null, true);
        yield "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 97
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        yield "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 98
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slicknav.min.css"), "html", null, true);
        yield "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 99
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" type=\"text/css\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <!-- Js Plugins -->
        <script src=\"";
        // line 105
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 106
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 107
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 108
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/masonry.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 109
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.barfiller.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 110
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slicknav.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 111
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 112
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
        return "MainPages/client/team.html.twig";
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
        return array (  312 => 112,  308 => 111,  304 => 110,  300 => 109,  296 => 108,  292 => 107,  288 => 106,  284 => 105,  278 => 103,  268 => 102,  255 => 99,  251 => 98,  247 => 97,  243 => 96,  239 => 95,  235 => 94,  231 => 93,  227 => 92,  220 => 87,  210 => 86,  199 => 102,  196 => 101,  194 => 86,  178 => 73,  165 => 63,  152 => 53,  139 => 43,  126 => 33,  113 => 23,  95 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Team{% endblock %}

{% block content %}
    {% include 'Fragments/breadcrumb.html.twig' with {'page_title':'Team'} %}
    <!-- Team Section Begin -->
    <section class=\"team-section team-page spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"team-title\">
                        <div class=\"section-title\">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('assets/images/team/team-1.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Refka Mahjoub</h4>
                            <span>Gym Trainer</span>
                            <p>RefkaMahjoub@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('assets/images/team/team-2.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Oussama Grami</h4>
                            <span>Gym Trainer</span>
                            <p>OussamaGrami@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('assets/images/team/team-3.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Aziz Dhouibi</h4>
                            <span>Gym Trainer</span>
                            <p>AzizDhouibi@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('assets/images/team/team-4.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Youcef Afli</h4>
                            <span>Gym Trainer</span>
                            <p>YoucefAfli@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('assets/images/team/team-5.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Maram benrhouma</h4>
                            <span>Gym Trainer</span>
                            <p>Marambenrhouma@gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('assets/images/team/team-6.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Lina Saoud</h4>
                            <span>Gym Trainer</span>
                            <p>LinaSaoud@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
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
    {% endblock %}
{% endblock %}
", "MainPages/client/team.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\client\\team.html.twig");
    }
}
