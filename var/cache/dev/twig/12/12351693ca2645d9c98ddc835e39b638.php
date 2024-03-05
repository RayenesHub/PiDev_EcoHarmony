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

/* base.html.twig */
class __TwigTemplate_983d984dfe8635fb6392b6f4bcf42996 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" />

        ";
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </head>
    <body>
        ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>
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
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"jardin.html\">Jardins</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event");
        echo "\">Évènement</a></li>
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
                    <img class=\"intro-img img-fluid mb-3 mb-lg-0 rounded\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"...\" />
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

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo " <!-- Bootstrap core JS-->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Core theme JS-->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  216 => 79,  210 => 76,  207 => 75,  197 => 74,  155 => 41,  140 => 29,  117 => 10,  107 => 9,  88 => 5,  76 => 85,  74 => 84,  70 => 82,  68 => 74,  65 => 73,  62 => 9,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
       <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/logo.png') }}\" />

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
  <link href=\"{{ asset( 'css/styles.css')}}\" rel=\"stylesheet\" />
    </head>
    <body>
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
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"jardin.html\">Jardins</a></li>
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"{{ path('app_event')}}\">Évènement</a></li>
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
                    <img class=\"intro-img img-fluid mb-3 mb-lg-0 rounded\" src=\"{{ asset('assets/img/logo.png') }}\" alt=\"...\" />
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
            
        {% endblock %}

        {% block javascripts %}
 <!-- Bootstrap core JS-->
    <script src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}\"></script>

        <!-- Core theme JS-->
<script src=\"{{ asset('js/scripts.js') }}\"></script>

        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\templates\\base.html.twig");
    }
}
