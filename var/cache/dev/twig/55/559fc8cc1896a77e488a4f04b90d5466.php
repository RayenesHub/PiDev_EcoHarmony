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

/* event/adminListParticipants.html.twig */
class __TwigTemplate_a631f3684af43766dfc62507a04afdb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/adminListParticipants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/adminListParticipants.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Gestion dechet</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_back/img/logo.png"), "html", null, true);
        echo "\" />
        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_back/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html\">The Tree Well</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->            
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>                             
                            
                            <a class=\"nav-link\" href=\"user.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                               user
                            </a>
                            <a class=\"nav-link\" href=\"gestion_reserve_naturelle.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion reserve naturelle
                            </a>
                            <a class=\"nav-link\" href=\"gestion_dechet.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion Dechet
                            </a>
                            <a class=\"nav-link\" href=\"gestion_jardin.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion Jardin
                            </a>
                            <a class=\"nav-link\" href=\"gestion_nappe_d_eau.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion Nappe D Eau
                            </a>
                            <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventAdmin");
        echo "\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion evenement
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id=\"layoutSidenav_content\">
                <main>
                    <h1 style=\"text-align: center;\">Liste des participants</h1>
                    <a style=\"margin-left: 20px;\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventAdmin");
        echo "\" class=\"btn btn-primary\">Page précédente</a>
    ";
        // line 71
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 71, $this->source); })()), "participants", [], "any", false, false, false, 71))) {
            // line 72
            echo "        <p>Aucun Participant trouvé.</p>
    ";
        } else {
            // line 74
            echo "
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        margin: 20px auto; /* Centrer le tableau horizontalement avec une marge */
        }

        th, td {
            border: 1px solid #ddd; /* Utilisation d'une couleur de bordure plus douce */
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333; /* Couleur de texte plus foncée pour les en-têtes */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2; /* Légère modification de couleur au survol */
        }
    </style>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>ID événement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 114, $this->source); })()), "participants", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 115
                echo "                <tr>
                    <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
                    <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomParticipant", [], "any", false, false, false, 117), "html", null, true);
                echo "</td>
                    <td>";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prenomParticipant", [], "any", false, false, false, 118), "html", null, true);
                echo "</td>
                    <td>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", [], "any", false, false, false, 119), "html", null, true);
                echo "</td>
                    <td>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminEditParticipant", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 122)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Modifier</a>
                        <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminDeleteParticipant", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        </tbody>
    </table>
    
    ";
        }
        // line 131
        echo "



                </main>
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"js/scripts.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"js/datatables-simple-demo.js\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "event/adminListParticipants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 131,  217 => 127,  207 => 123,  203 => 122,  198 => 120,  194 => 119,  190 => 118,  186 => 117,  182 => 116,  179 => 115,  175 => 114,  133 => 74,  129 => 72,  127 => 71,  123 => 70,  108 => 58,  59 => 12,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Gestion dechet</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets_back/img/logo.png') }}\" />
        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('assets_back/css/styles.css') }}\" rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html\">The Tree Well</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->            
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>                             
                            
                            <a class=\"nav-link\" href=\"user.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                               user
                            </a>
                            <a class=\"nav-link\" href=\"gestion_reserve_naturelle.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion reserve naturelle
                            </a>
                            <a class=\"nav-link\" href=\"gestion_dechet.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion Dechet
                            </a>
                            <a class=\"nav-link\" href=\"gestion_jardin.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion Jardin
                            </a>
                            <a class=\"nav-link\" href=\"gestion_nappe_d_eau.html\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion Nappe D Eau
                            </a>
                            <a class=\"nav-link\" href=\"{{ path('app_eventAdmin')}}\">
                                <div class=\"sb-nav-link-icon\"></i></div>
                                Gestion evenement
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id=\"layoutSidenav_content\">
                <main>
                    <h1 style=\"text-align: center;\">Liste des participants</h1>
                    <a style=\"margin-left: 20px;\" href=\"{{ path('app_eventAdmin')}}\" class=\"btn btn-primary\">Page précédente</a>
    {% if event.participants is empty %}
        <p>Aucun Participant trouvé.</p>
    {% else %}

    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        margin: 20px auto; /* Centrer le tableau horizontalement avec une marge */
        }

        th, td {
            border: 1px solid #ddd; /* Utilisation d'une couleur de bordure plus douce */
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333; /* Couleur de texte plus foncée pour les en-têtes */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2; /* Légère modification de couleur au survol */
        }
    </style>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>ID événement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for p in event.participants %}
                <tr>
                    <td>{{ p.id }}</td>
                    <td>{{ p.nomParticipant }}</td>
                    <td>{{ p.prenomParticipant}}</td>
                    <td>{{ p.email}}</td>
                    <td>{{ p.event.id}}</td>
                    <td>
                        <a href=\"{{ path('app_adminEditParticipant',{'id':p.id})}}\" class=\"btn btn-warning\">Modifier</a>
                        <a href=\"{{ path('app_adminDeleteParticipant',{'id':p.id})}}\" class=\"btn btn-danger\">Supprimer</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    
    {% endif %}




                </main>
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"js/scripts.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"js/datatables-simple-demo.js\"></script>
    </body>
</html>
", "event/adminListParticipants.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\templates\\event\\adminListParticipants.html.twig");
    }
}
