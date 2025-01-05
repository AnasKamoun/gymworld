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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_f49157fa1a0d52adcb7eb518b83a819c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 1);
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
        yield "    Error
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
        yield "    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\"
          rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\"
          rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/bootstrap.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/font-awesome.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/owl.carousel.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/barfiller.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/magnific-popup.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/slicknav.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "css/style.css\" type=\"text/css\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        yield "    <!-- 404 Section Begin -->
    <section class=\"section-404\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"text-404\">
                        <h1>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</h1>
                        <h3>\"An error has occurred while processing your request.\"</h3>
                        <p>";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::replaceFilter((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 38, $this->source); })()), ["-" => "/"]), "html", null, true);
        yield "</p>
                        <form action=\"#\" class=\"search-404\">
                            <input type=\"text\" placeholder=\"Enter your keyword\">
                            <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </form>
                        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-home\"></i> Go
                            back
                            home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        yield "    <!-- Js Plugins -->
    <script src=\"";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/jquery-3.3.1.min.js\"></script>
    <script src=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 68
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/jquery.magnific-popup.min.js\"></script>
    <script src=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/masonry.pkgd.min.js\"></script>
    <script src=\"";
        // line 70
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/jquery.barfiller.js\"></script>
    <script src=\"";
        // line 71
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/jquery.slicknav.js\"></script>
    <script src=\"";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/owl.carousel.min.js\"></script>
    <script src=\"";
        // line 73
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "js/main.js\"></script>
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
        return "@Twig/Exception/error.html.twig";
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
        return array (  255 => 73,  251 => 72,  247 => 71,  243 => 70,  239 => 69,  235 => 68,  231 => 67,  227 => 66,  224 => 65,  214 => 64,  182 => 43,  174 => 38,  169 => 36,  161 => 30,  151 => 29,  137 => 26,  132 => 24,  127 => 22,  122 => 20,  117 => 18,  113 => 17,  108 => 15,  103 => 13,  94 => 6,  84 => 5,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Error
{% endblock %}
{% block stylesheets %}
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\"
          rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\"
          rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/bootstrap.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/font-awesome.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/owl.carousel.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/barfiller.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/magnific-popup.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/slicknav.min.css\"
          type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/style.css\" type=\"text/css\">

{% endblock %}
{% block body %}
    <!-- 404 Section Begin -->
    <section class=\"section-404\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"text-404\">
                        <h1>{{ status_code }}</h1>
                        <h3>\"An error has occurred while processing your request.\"</h3>
                        <p>{{ status_text | replace({'-':'/'}) }}</p>
                        <form action=\"#\" class=\"search-404\">
                            <input type=\"text\" placeholder=\"Enter your keyword\">
                            <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </form>
                        <a href=\"{{ path('app_home') }}\"><i class=\"fa fa-home\"></i> Go
                            back
                            home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->
{% endblock %}
{% block javascripts %}
    <!-- Js Plugins -->
    <script src=\"{{ asset('assets/') }}js/jquery-3.3.1.min.js\"></script>
    <script src=\"{{ asset('assets/') }}js/bootstrap.min.js\"></script>
    <script src=\"{{ asset('assets/') }}js/jquery.magnific-popup.min.js\"></script>
    <script src=\"{{ asset('assets/') }}js/masonry.pkgd.min.js\"></script>
    <script src=\"{{ asset('assets/') }}js/jquery.barfiller.js\"></script>
    <script src=\"{{ asset('assets/') }}js/jquery.slicknav.js\"></script>
    <script src=\"{{ asset('assets/') }}js/owl.carousel.min.js\"></script>
    <script src=\"{{ asset('assets/') }}js/main.js\"></script>
{% endblock %}", "@Twig/Exception/error.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\bundles\\TwigBundle\\Exception\\error.html.twig");
    }
}
