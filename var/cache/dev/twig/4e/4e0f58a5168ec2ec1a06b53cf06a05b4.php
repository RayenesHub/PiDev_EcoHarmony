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

/* event/addParticipant.html.twig */
class __TwigTemplate_0a6844a69369b70d71dca04f3fa1c80d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/addParticipant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/addParticipant.html.twig"));

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
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </head>
    <body>
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
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
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Acceuil</a></li>
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
        <section class=\"page-section cta\">
        <style>
    .zone-texte9 {
        max-width: 600px; /* Définit la largeur maximale à ne pas dépasser */
        display: inline-block; /* Permet à la balise span de respecter la propriété max-width */
        word-wrap: break-word; /* Permet au texte de revenir à la ligne lorsque la limite de largeur est atteinte */
        /* ou utilisez word-break: break-word; si vous avez des mots longs */
            }
        </style>
            <h1>add Book</h1>
                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 48, $this->source); })()), 'form');
        echo "
        </section>
        <footer class=\"footer text-faded text-center py-5\">
            <div class=\"container\"><p class=\"m-0 small\">Copyright &copy; The Tree Well 2024</p></div>
        </footer>
            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo " <!-- Bootstrap core JS-->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Core theme JS-->
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
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
        return "event/addParticipant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 66,  201 => 61,  195 => 58,  192 => 57,  182 => 56,  165 => 48,  143 => 29,  137 => 26,  117 => 10,  107 => 9,  88 => 5,  76 => 67,  74 => 66,  70 => 64,  68 => 56,  65 => 55,  62 => 9,  57 => 6,  53 => 5,  47 => 1,);
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
                        <li class=\"nav-item px-lg-4\"><a class=\"nav-link text-uppercase\" href=\"{{ path('app_index')}}\">Acceuil</a></li>
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
        <section class=\"page-section cta\">
        <style>
    .zone-texte9 {
        max-width: 600px; /* Définit la largeur maximale à ne pas dépasser */
        display: inline-block; /* Permet à la balise span de respecter la propriété max-width */
        word-wrap: break-word; /* Permet au texte de revenir à la ligne lorsque la limite de largeur est atteinte */
        /* ou utilisez word-break: break-word; si vous avez des mots longs */
            }
        </style>
            <h1>add Book</h1>
                {{ form(f)}}
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
", "event/addParticipant.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\templates\\event\\addParticipant.html.twig");
    }
}
