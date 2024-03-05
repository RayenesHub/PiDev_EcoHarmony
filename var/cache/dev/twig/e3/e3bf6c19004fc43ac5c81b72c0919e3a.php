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

/* event/eventDetails.html.twig */
class __TwigTemplate_a556b9e85ba4dca70140575a7b66a3d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/eventDetails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/eventDetails.html.twig"));

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
        // line 109
        echo "
        ";
        // line 110
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "    </head>
    <body>
        ";
        // line 120
        $this->displayBlock('body', $context, $blocks);
        // line 121
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
                <h1 class=\"text-center text-uppercase\" > <span class=\"site-heading-lower\">";
        // line 47
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 47, $this->source); })()), "nomEvent", [], "any", false, false, false, 47)), "html", null, true);
        echo "</span> </h1>
                    <div class=\"\">
                        <div class=\"row\">
                            <div class=\"col-xl-11 mx-auto\">
                                <div class=\"cta-inner bg-faded rounded\">
                                    <h2 class=\"section-heading mb-4\">
                                    <table>
                                        <tr>
                                            <td><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "afficheEvent", [], "any", false, false, false, 55), "html", null, true);
        echo "\" alt=\"Description de l'image\" width=\"450\" height=\"600\"></td>
                                            <td style=\"width: 30px;\"></td>
                                            <td style=\"vertical-align: top;\">
                                                <span style=\"margin-top: 10px; display: inline-block;\" class=\"section-heading-upper\">-lieux:</span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">";
        // line 59
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "lieuxEvent", [], "any", false, false, false, 59)), "html", null, true);
        echo "</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-date: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "dateEvent", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
        echo "</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-heure: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "heureDebut", [], "any", false, false, false, 65), "H:i:s"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "heureFin", [], "any", false, false, false, 65), "H:i:s"), "html", null, true);
        echo "</span>
                                                <br>
                                                <span style=\"margin-top: 10px;\" class=\"section-heading-upper\">-Description: </span>
                                                <span style=\"margin-top: 10px;font-size: 16px;\" class=\" zone-texte9\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 68, $this->source); })()), "descriptionEvent", [], "any", false, false, false, 68), "html", null, true);
        echo "</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-nombre des participants: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; display: inline-block;\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["nbrP"]) || array_key_exists("nbrP", $context) ? $context["nbrP"] : (function () { throw new RuntimeError('Variable "nbrP" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "</span>
                                                <br>
                                                 <span style=\"margin-top: 30px;\" class=\"section-heading-upper\">-rempli le formulaire suivant pour participer à l'évènement:</span>
                                                 ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 74, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                                 ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), "nomParticipant", [], "any", false, false, false, 75), 'label');
        echo "
                                                 ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 76, $this->source); })()), "nomParticipant", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                 <span style=\"color: red; margin-top: 10px; font-size: 16px;\" >
                                                     ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 78, $this->source); })()), "nomParticipant", [], "any", false, false, false, 78), 'errors');
        echo "
                                                 </span>
                         
                                                 ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), "prenomParticipant", [], "any", false, false, false, 81), 'label');
        echo "
                                                                     ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 82, $this->source); })()), "prenomParticipant", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                 <span style=\"color: red; margin-top: 10px; font-size: 16px;\">
                                                     ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 84, $this->source); })()), "prenomParticipant", [], "any", false, false, false, 84), 'errors');
        echo "
                                                 </span>
                         
                                                 ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'label');
        echo "
                                                                     ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                 <span style=\"color: red; margin-top: 10px; font-size: 16px;\">
                                                     ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'errors');
        echo "
                                                 </span>
                         
                                                 
                                             ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
                                            </td>
                                        </tr>
                                    </table>
                                    </h2>
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

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo " <!-- Bootstrap core JS-->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Core theme JS-->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
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
        return "event/eventDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 120,  308 => 115,  302 => 112,  299 => 111,  289 => 110,  264 => 94,  257 => 90,  252 => 88,  248 => 87,  242 => 84,  237 => 82,  233 => 81,  227 => 78,  222 => 76,  218 => 75,  214 => 74,  208 => 71,  202 => 68,  194 => 65,  188 => 62,  182 => 59,  175 => 55,  164 => 47,  143 => 29,  137 => 26,  117 => 10,  107 => 9,  88 => 5,  76 => 121,  74 => 120,  70 => 118,  68 => 110,  65 => 109,  62 => 9,  57 => 6,  53 => 5,  47 => 1,);
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
                <h1 class=\"text-center text-uppercase\" > <span class=\"site-heading-lower\">{{event.nomEvent | upper}}</span> </h1>
                    <div class=\"\">
                        <div class=\"row\">
                            <div class=\"col-xl-11 mx-auto\">
                                <div class=\"cta-inner bg-faded rounded\">
                                    <h2 class=\"section-heading mb-4\">
                                    <table>
                                        <tr>
                                            <td><img src=\"{{event.afficheEvent}}\" alt=\"Description de l'image\" width=\"450\" height=\"600\"></td>
                                            <td style=\"width: 30px;\"></td>
                                            <td style=\"vertical-align: top;\">
                                                <span style=\"margin-top: 10px; display: inline-block;\" class=\"section-heading-upper\">-lieux:</span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">{{event.lieuxEvent | upper}}</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-date: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">{{event.dateEvent | date('Y-m-d')}}</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-heure: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">{{event.heureDebut | date('H:i:s')}} - {{event.heureFin | date('H:i:s')}}</span>
                                                <br>
                                                <span style=\"margin-top: 10px;\" class=\"section-heading-upper\">-Description: </span>
                                                <span style=\"margin-top: 10px;font-size: 16px;\" class=\" zone-texte9\">{{event.descriptionEvent}}</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-nombre des participants: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; display: inline-block;\">{{nbrP}}</span>
                                                <br>
                                                 <span style=\"margin-top: 30px;\" class=\"section-heading-upper\">-rempli le formulaire suivant pour participer à l'évènement:</span>
                                                 {{ form_start(f,{attr:{novalidate:'novalidate'}}) }}
                                                 {{ form_label(f.nomParticipant) }}
                                                 {{ form_widget(f.nomParticipant, {'attr': {'class': 'form-control'}}) }}
                                                 <span style=\"color: red; margin-top: 10px; font-size: 16px;\" >
                                                     {{ form_errors(f.nomParticipant) }}
                                                 </span>
                         
                                                 {{ form_label(f.prenomParticipant) }}
                                                                     {{ form_widget(f.prenomParticipant, {'attr': {'class': 'form-control'}}) }}
                                                 <span style=\"color: red; margin-top: 10px; font-size: 16px;\">
                                                     {{ form_errors(f.prenomParticipant) }}
                                                 </span>
                         
                                                 {{ form_label(f.email) }}
                                                                     {{ form_widget(f.email, {'attr': {'class': 'form-control'}}) }}
                                                 <span style=\"color: red; margin-top: 10px; font-size: 16px;\">
                                                     {{ form_errors(f.email) }}
                                                 </span>
                         
                                                 
                                             {{ form_end(f) }}
                                            </td>
                                        </tr>
                                    </table>
                                    </h2>
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
", "event/eventDetails.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\templates\\event\\eventDetails.html.twig");
    }
}
