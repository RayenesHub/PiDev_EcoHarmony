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

/* event/index.html.twig */
class __TwigTemplate_931aa29104394a7e132356dfe0407f49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

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
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "    </head>
    <body>
        ";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 103
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
            ";
        // line 47
        if ((twig_test_empty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 47, $this->source); })())) ||  !array_key_exists("events", $context))) {
            // line 48
            echo "                <h1 class=\"text-center text-uppercase\" > <span class=\"site-heading-lower\">Pas d'évènements disponibles</span> </h1>
            ";
        } else {
            // line 50
            echo "                <h1 class=\"text-center text-uppercase\" > <span class=\"site-heading-lower\">Les évènements disponibles</span> </h1>
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 52
                echo "                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-9 mx-auto\">
                                <div class=\"cta-inner bg-faded rounded\">
                                    <h2 class=\"section-heading mb-4\">
                                    <table>
                                        <tr>
                                            <td><img src=\"";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "afficheEvent", [], "any", false, false, false, 59), "html", null, true);
                echo "\" alt=\"Description de l'image\" width=\"200\" height=\"300\"></td>
                                            <td style=\"width: 30px;\"></td>
                                            <td style=\"vertical-align: top;\">
                                                <span style=\"margin-top: 10px; display: inline-block;\" class=\"section-heading-upper\">-lieux:</span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">";
                // line 63
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "lieuxEvent", [], "any", false, false, false, 63)), "html", null, true);
                echo "</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-date: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true);
                echo "</span>
                                                <br>
                                                <span style=\"margin-top: 10px;display: inline-block;\" class=\"section-heading-upper\">-heure: </span>
                                                <span style=\"margin-top: 10px; font-size: 16px; \">";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "heureDebut", [], "any", false, false, false, 69), "H:i:s"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "heureFin", [], "any", false, false, false, 69), "H:i:s"), "html", null, true);
                echo "</span>
                                                <br>
                                                <span style=\"margin-top: 10px;\" class=\"section-heading-upper\">-Description: </span>
                                                <span style=\"margin-top: 10px;font-size: 16px;\" class=\" zone-texte9\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "descriptionEvent", [], "any", false, false, false, 72), "html", null, true);
                echo "</span>
                                                <br>
                                                <div ><a class=\"btn btn-primary\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addParticipant", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\">Voir Plus...</a></div>
                                            </td>
                                        </tr>
                                    </table>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "            ";
        }
        // line 85
        echo "        </section>
        <footer class=\"footer text-faded text-center py-5\">
            <div class=\"container\"><p class=\"m-0 small\">Copyright &copy; The Tree Well 2024</p></div>
        </footer>
            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo " <!-- Bootstrap core JS-->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Core theme JS-->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
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
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 102,  271 => 97,  265 => 94,  262 => 93,  252 => 92,  237 => 85,  234 => 84,  218 => 74,  213 => 72,  205 => 69,  199 => 66,  193 => 63,  186 => 59,  177 => 52,  173 => 51,  170 => 50,  166 => 48,  164 => 47,  143 => 29,  137 => 26,  117 => 10,  107 => 9,  88 => 5,  76 => 103,  74 => 102,  70 => 100,  68 => 92,  65 => 91,  62 => 9,  57 => 6,  53 => 5,  47 => 1,);
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
            {%if events is empty or events is not defined%}
                <h1 class=\"text-center text-uppercase\" > <span class=\"site-heading-lower\">Pas d'évènements disponibles</span> </h1>
            {%else%}
                <h1 class=\"text-center text-uppercase\" > <span class=\"site-heading-lower\">Les évènements disponibles</span> </h1>
                {% for event in events %}
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-9 mx-auto\">
                                <div class=\"cta-inner bg-faded rounded\">
                                    <h2 class=\"section-heading mb-4\">
                                    <table>
                                        <tr>
                                            <td><img src=\"{{event.afficheEvent}}\" alt=\"Description de l'image\" width=\"200\" height=\"300\"></td>
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
                                                <div ><a class=\"btn btn-primary\" href=\"{{ path('app_addParticipant',{'id':event.id})}}\">Voir Plus...</a></div>
                                            </td>
                                        </tr>
                                    </table>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {%endif%}
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
", "event/index.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\templates\\event\\index.html.twig");
    }
}
