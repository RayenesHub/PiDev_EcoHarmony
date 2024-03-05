<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* jardin/index.html.twig */
class __TwigTemplate_a439ad614e007f4931c1508861f66767 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jardin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "   <header>
            <h1 class=\"site-heading text-center text-faded d-none d-lg-block\">
                <span class=\"site-heading-upper text-primary mb-3\">Protégeons la nature, préservons notre avenir</span>
                <span class=\"site-heading-lower\">The Tree Well</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark py-lg-4\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand text-uppercase fw-bold d-lg-none\" href=\"index.html\">Start Bootstrap</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"index.html\">Acceuil</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"about.html\">à propos</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"foret.html\">Forêts</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"event.html\">Évènement</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"animaux.html\">Animaux</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"dechets.html\">déchets</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"puits.html\">Puits</a></li>
                        <li class=\"nav-item px-lg-6\"><a class=\"nav-link text-uppercase\" href=\"index.html\">Se Connecter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class=\"page-section clearfix\">
            <div class=\"container\">
                <div class=\"intro\">
                    <img class=\"intro-img img-fluid mb-3 mb-lg-0 rounded\" src=\"assets/img/logo.png\" alt=\"...\" />
                    <div class=\"intro-text left-0 text-center bg-faded p-5 rounded\">
                        <h2 class=\"section-heading mb-4\">
                            <span class=\"section-heading-upper\">Fresh Coffee</span>
                            <span class=\"section-heading-lower\">Worth Drinking</span>
                        </h2>
                        <p class=\"mb-3\">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!</p>
                        <div class=\"intro-button mx-auto\"><a class=\"btn btn-primary btn-xl\" href=\"#!\">Visit Us Today!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"page-section cta\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-9 mx-auto\">
                        <div class=\"cta-inner bg-faded text-center rounded\">
                            <h2 class=\"section-heading mb-4\">
                                <span class=\"section-heading-upper\">Our Promise</span>
                                <span class=\"section-heading-lower\">To You</span>
                            </h2>
                            <p class=\"mb-0\">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class=\"footer text-faded text-center py-5\">
            <div class=\"container\"><p class=\"m-0 small\">Copyright &copy; The Tree Well 2024</p></div>
        </footer>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "jardin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {%block body %}
   <header>
            <h1 class=\"site-heading text-center text-faded d-none d-lg-block\">
                <span class=\"site-heading-upper text-primary mb-3\">Protégeons la nature, préservons notre avenir</span>
                <span class=\"site-heading-lower\">The Tree Well</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark py-lg-4\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand text-uppercase fw-bold d-lg-none\" href=\"index.html\">Start Bootstrap</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"index.html\">Acceuil</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"about.html\">à propos</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"foret.html\">Forêts</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"event.html\">Évènement</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"animaux.html\">Animaux</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"dechets.html\">déchets</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"puits.html\">Puits</a></li>
                        <li class=\"nav-item px-lg-6\"><a class=\"nav-link text-uppercase\" href=\"index.html\">Se Connecter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class=\"page-section clearfix\">
            <div class=\"container\">
                <div class=\"intro\">
                    <img class=\"intro-img img-fluid mb-3 mb-lg-0 rounded\" src=\"assets/img/logo.png\" alt=\"...\" />
                    <div class=\"intro-text left-0 text-center bg-faded p-5 rounded\">
                        <h2 class=\"section-heading mb-4\">
                            <span class=\"section-heading-upper\">Fresh Coffee</span>
                            <span class=\"section-heading-lower\">Worth Drinking</span>
                        </h2>
                        <p class=\"mb-3\">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!</p>
                        <div class=\"intro-button mx-auto\"><a class=\"btn btn-primary btn-xl\" href=\"#!\">Visit Us Today!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"page-section cta\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-9 mx-auto\">
                        <div class=\"cta-inner bg-faded text-center rounded\">
                            <h2 class=\"section-heading mb-4\">
                                <span class=\"section-heading-upper\">Our Promise</span>
                                <span class=\"section-heading-lower\">To You</span>
                            </h2>
                            <p class=\"mb-0\">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class=\"footer text-faded text-center py-5\">
            <div class=\"container\"><p class=\"m-0 small\">Copyright &copy; The Tree Well 2024</p></div>
        </footer>
  {%endblock%}", "jardin/index.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\front\\templates\\jardin\\index.html.twig");
    }
}
