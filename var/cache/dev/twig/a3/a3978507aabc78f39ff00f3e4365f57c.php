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

/* MainPages/client/index.html.twig */
class __TwigTemplate_bd15f03a1ac0f442910be5aa05d64e76 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MainPages/client/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "MainPages/client/index.html.twig", 1);
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

        yield "Power Gym";
        
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
        yield "    <!-- Hero Section Begin -->
    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\"
                 data-setbg=\"";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/hero/hero-1.jpg"), "html", null, true);
        yield "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> training hard</h1>
                                ";
        // line 17
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_user");
            yield "\"
                                       class=\"primary-btn\">Sign
                                        In</a>
                                    <a href=\"";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\"
                                       class=\"primary-btn\">Sign Up</a>
                                ";
        }
        // line 24
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\"
                 data-setbg=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/hero/hero-2.jpg"), "html", null, true);
        yield "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> training hard</h1>
                                ";
        // line 37
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
            // line 38
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_user");
            yield "\"
                                       class=\"primary-btn\">Sign
                                        In</a>
                                    <a href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\"
                                       class=\"primary-btn\">Sign Up</a>
                                ";
        }
        // line 44
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class=\"choseus-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-034-stationary-bike\"></span>
                        <h4>Modern equipment</h4>
                        <p>
                            Discover modern fitness! Our gym's high-tech equipment makes
                            workouts effective and engaging. Join us for the future of
                            fitness!
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-033-juice\"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>
                            Revamp your diet with our balanced nutrition plan, featuring a
                            variety of nutrient-rich foods for optimal health and energy.
                            Experience the benefits of healthy eating with us!
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-002-dumbell\"></span>
                        <h4>Profesional training plan</h4>
                        <p>
                            Achieve your fitness goals with our personalized professional
                            training plan, tailored to your needs and guided by expert
                            trainers.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-014-heart-beat\"></span>
                        <h4>Unique to your needs</h4>
                        <p>
                            Achieve your fitness goals with our personalized training
                            plan,
                            designed uniquely for you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class=\"classes-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">


                            <img src=\"";
        // line 131
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/classes/class-1.jpg"), "html", null, true);
        yield "\"
                                 alt=\"\"/>
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"";
        // line 144
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/classes/class-2.jpg"), "html", null, true);
        yield "\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"";
        // line 158
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/classes/class-3.jpg"), "html", null, true);
        yield "\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"";
        // line 172
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/classes/class-4.jpg"), "html", null, true);
        yield "\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"";
        // line 186
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/classes/class-5.jpg"), "html", null, true);
        yield "\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Begin -->
    <section class=\"team-section spad\">
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
                <div class=\"ts-slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"";
        // line 218
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-1.jpg"), "html", null, true);
        yield "\">
                            <div class=\"ts_text\">
                                <h4>Refka Mahjoub</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"";
        // line 227
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-2.jpg"), "html", null, true);
        yield "\">
                            <div class=\"ts_text\">
                                <h4>Oussama Grami</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"";
        // line 236
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-3.jpg"), "html", null, true);
        yield "\">
                            <div class=\"ts_text\">
                                <h4>Aziz Dhouibi</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"";
        // line 245
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-4.jpg"), "html", null, true);
        yield "\">
                            <div class=\"ts_text\">
                                <h4>Youcef Afli</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"";
        // line 254
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-5.jpg"), "html", null, true);
        yield "\">
                            <div class=\"ts_text\">
                                <h4>Maram benrhouma</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"";
        // line 263
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-6.jpg"), "html", null, true);
        yield "\">
                            <div class=\"ts_text\">
                                <h4>Lina saoud</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    <!-- Gallery Section Begin -->
    <div class=\"gallery-section\">
        <div class=\"gallery\">
            <div class=\"grid-sizer\"></div>
            <div
                    class=\"gs-item grid-wide set-bg\"
                    data-setbg=\"";
        // line 281
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-1.jpg"), "html", null, true);
        yield "\"
            >
                <a href=\"";
        // line 283
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-1.jpg"), "html", null, true);
        yield "\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"";
        // line 289
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-2.jpg"), "html", null, true);
        yield "\">
                <a href=\"";
        // line 290
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-2.jpg"), "html", null, true);
        yield "\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"";
        // line 296
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-3.jpg"), "html", null, true);
        yield "\">
                <a href=\"";
        // line 297
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-3.jpg"), "html", null, true);
        yield "\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"";
        // line 303
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-4.jpg"), "html", null, true);
        yield "\">
                <a href=\"";
        // line 304
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-4.jpg"), "html", null, true);
        yield "\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"";
        // line 310
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-5.jpg"), "html", null, true);
        yield "\">
                <a href=\"";
        // line 311
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-5.jpg"), "html", null, true);
        yield "\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div
                    class=\"gs-item grid-wide set-bg\"
                    data-setbg=\"";
        // line 318
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-6.jpg"), "html", null, true);
        yield "\"
            >
                <a href=\"";
        // line 320
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-6.jpg"), "html", null, true);
        yield "\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 329
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 330
        yield "    <!-- Js Plugins -->
    <script src=\"";
        // line 331
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 332
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 333
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 334
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/masonry.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 335
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.barfiller.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 336
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slicknav.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 337
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 338
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 339
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 340
        yield "    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\"
          rel=\"stylesheet\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\"
          rel=\"stylesheet\"/>

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 347
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 349
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 351
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 353
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 355
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/barfiller.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 357
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 359
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slicknav.min.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 361
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\"
          type=\"text/css\"/>
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
        return "MainPages/client/index.html.twig";
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
        return array (  628 => 361,  623 => 359,  618 => 357,  613 => 355,  608 => 353,  603 => 351,  598 => 349,  593 => 347,  584 => 340,  574 => 339,  561 => 338,  557 => 337,  553 => 336,  549 => 335,  545 => 334,  541 => 333,  537 => 332,  533 => 331,  530 => 330,  520 => 329,  500 => 320,  495 => 318,  485 => 311,  481 => 310,  472 => 304,  468 => 303,  459 => 297,  455 => 296,  446 => 290,  442 => 289,  433 => 283,  428 => 281,  407 => 263,  395 => 254,  383 => 245,  371 => 236,  359 => 227,  347 => 218,  312 => 186,  295 => 172,  278 => 158,  261 => 144,  245 => 131,  156 => 44,  150 => 41,  143 => 38,  141 => 37,  131 => 30,  123 => 24,  117 => 21,  110 => 18,  108 => 17,  98 => 10,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Power Gym{% endblock %}

{% block content %}
    <!-- Hero Section Begin -->
    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\"
                 data-setbg=\"{{ asset('assets/images/hero/hero-1.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> training hard</h1>
                                {% if not app.user %}
                                    <a href=\"{{ path('app_login_user') }}\"
                                       class=\"primary-btn\">Sign
                                        In</a>
                                    <a href=\"{{ path('app_register') }}\"
                                       class=\"primary-btn\">Sign Up</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\"
                 data-setbg=\"{{ asset('assets/images/hero/hero-2.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> training hard</h1>
                                {% if not app.user %}
                                    <a href=\"{{ path('app_login_user') }}\"
                                       class=\"primary-btn\">Sign
                                        In</a>
                                    <a href=\"{{ path('app_register') }}\"
                                       class=\"primary-btn\">Sign Up</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class=\"choseus-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-034-stationary-bike\"></span>
                        <h4>Modern equipment</h4>
                        <p>
                            Discover modern fitness! Our gym's high-tech equipment makes
                            workouts effective and engaging. Join us for the future of
                            fitness!
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-033-juice\"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>
                            Revamp your diet with our balanced nutrition plan, featuring a
                            variety of nutrient-rich foods for optimal health and energy.
                            Experience the benefits of healthy eating with us!
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-002-dumbell\"></span>
                        <h4>Profesional training plan</h4>
                        <p>
                            Achieve your fitness goals with our personalized professional
                            training plan, tailored to your needs and guided by expert
                            trainers.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-014-heart-beat\"></span>
                        <h4>Unique to your needs</h4>
                        <p>
                            Achieve your fitness goals with our personalized training
                            plan,
                            designed uniquely for you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class=\"classes-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">


                            <img src=\"{{ asset('assets/images/classes/class-1.jpg') }}\"
                                 alt=\"\"/>
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"{{ asset('assets/images/classes/class-2.jpg') }}\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"{{ asset('assets/images/classes/class-3.jpg') }}\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"{{ asset('assets/images/classes/class-4.jpg') }}\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"{{ asset('assets/images/classes/class-5.jpg') }}\"
                                 alt=\"\"/>

                        </div>
                        <div class=\"ci-text\">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Begin -->
    <section class=\"team-section spad\">
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
                <div class=\"ts-slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"{{ asset('assets/images/team/team-1.jpg') }}\">
                            <div class=\"ts_text\">
                                <h4>Refka Mahjoub</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"{{ asset('assets/images/team/team-2.jpg') }}\">
                            <div class=\"ts_text\">
                                <h4>Oussama Grami</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"{{ asset('assets/images/team/team-3.jpg') }}\">
                            <div class=\"ts_text\">
                                <h4>Aziz Dhouibi</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"{{ asset('assets/images/team/team-4.jpg') }}\">
                            <div class=\"ts_text\">
                                <h4>Youcef Afli</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"{{ asset('assets/images/team/team-5.jpg') }}\">
                            <div class=\"ts_text\">
                                <h4>Maram benrhouma</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\"
                             data-setbg=\"{{ asset('assets/images/team/team-6.jpg') }}\">
                            <div class=\"ts_text\">
                                <h4>Lina saoud</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    <!-- Gallery Section Begin -->
    <div class=\"gallery-section\">
        <div class=\"gallery\">
            <div class=\"grid-sizer\"></div>
            <div
                    class=\"gs-item grid-wide set-bg\"
                    data-setbg=\"{{ asset('assets/images/gallery/gallery-1.jpg') }}\"
            >
                <a href=\"{{ asset('assets/images/gallery/gallery-1.jpg') }}\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"{{ asset('assets/images/gallery/gallery-2.jpg') }}\">
                <a href=\"{{ asset('assets/images/gallery/gallery-2.jpg') }}\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"{{ asset('assets/images/gallery/gallery-3.jpg') }}\">
                <a href=\"{{ asset('assets/images/gallery/gallery-3.jpg') }}\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"{{ asset('assets/images/gallery/gallery-4.jpg') }}\">
                <a href=\"{{ asset('assets/images/gallery/gallery-4.jpg') }}\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div class=\"gs-item set-bg\"
                 data-setbg=\"{{ asset('assets/images/gallery/gallery-5.jpg') }}\">
                <a href=\"{{ asset('assets/images/gallery/gallery-5.jpg') }}\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
            <div
                    class=\"gs-item grid-wide set-bg\"
                    data-setbg=\"{{ asset('assets/images/gallery/gallery-6.jpg') }}\"
            >
                <a href=\"{{ asset('assets/images/gallery/gallery-6.jpg') }}\"
                   class=\"thumb-icon image-popup\"
                ><i class=\"fa fa-picture-o\"></i
                    ></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->
{% endblock %}
{% block javascripts %}
    <!-- Js Plugins -->
    <script src=\"{{ asset('assets/js/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/masonry.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.barfiller.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.slicknav.js') }}\"></script>
    <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
{% endblock %}{% block stylesheets %}
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\"
          rel=\"stylesheet\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\"
          rel=\"stylesheet\"/>

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/font-awesome.min.css') }}\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/flaticon.css') }}\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css') }}\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/barfiller.css') }}\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/magnific-popup.css') }}\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/slicknav.min.css') }}\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\"
          type=\"text/css\"/>
{% endblock %}", "MainPages/client/index.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\MainPages\\client\\index.html.twig");
    }
}
