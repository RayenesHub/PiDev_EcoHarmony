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

/* event/adminIndex.html.twig */
class __TwigTemplate_8327158d5fa8d1ece01287f6cc4596e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/adminIndex.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/adminIndex.html.twig"));

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
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", ["success"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 70
            echo "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 71
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", ["modification"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 76
            echo "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 77
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", ["Supprimer"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 82
            echo "                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 83
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                    <h1 style=\"text-align: center;\">Liste des événements</h1>
                    <a style=\"margin-left: 20px;\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminAddEvent");
        echo "\" class=\"btn btn-primary\">Ajouter évènement</a>
    <a style=\"margin-left: 0px;\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminAddParticipant");
        echo "\" class=\"btn btn-primary\">Ajouter Participant</a>
    ";
        // line 90
        if (twig_test_empty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 90, $this->source); })()))) {
            // line 91
            echo "        <p>Aucun événement trouvé.</p>
    ";
        } else {
            // line 93
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
                <th>Date</th>
                <th>Heure Début</th>
                <th>Heure Fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 133, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 134
                echo "                <tr>
                    <td>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 135), "html", null, true);
                echo "</td>
                    <td>";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nomEvent", [], "any", false, false, false, 136), "html", null, true);
                echo "</td>
                    <td>";
                // line 137
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 137), "Y-m-d"), "html", null, true);
                echo "</td>
                    <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "heureDebut", [], "any", false, false, false, 138), "H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 139
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "heureFin", [], "any", false, false, false, 139), "H:i:s"), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherParticipant", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 141)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Voir Participants</a>
                        <a href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminEditEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Modifier</a>
                        <a href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminDeleteEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "        </tbody>
    </table>
    
    ";
        }
        // line 151
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
        return "event/adminIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 151,  280 => 147,  270 => 143,  266 => 142,  262 => 141,  257 => 139,  253 => 138,  249 => 137,  245 => 136,  241 => 135,  238 => 134,  234 => 133,  192 => 93,  188 => 91,  186 => 90,  182 => 89,  178 => 88,  175 => 87,  165 => 83,  162 => 82,  157 => 81,  147 => 77,  144 => 76,  139 => 75,  129 => 71,  126 => 70,  122 => 69,  108 => 58,  59 => 12,  54 => 10,  43 => 1,);
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
                    {% for flashMessage in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            {{ flashMessage }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                    {% for flashMessage in app.flashes('modification') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            {{ flashMessage }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                    {% for flashMessage in app.flashes('Supprimer') %}
                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                {{ flashMessage }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    <h1 style=\"text-align: center;\">Liste des événements</h1>
                    <a style=\"margin-left: 20px;\" href=\"{{ path('app_adminAddEvent')}}\" class=\"btn btn-primary\">Ajouter évènement</a>
    <a style=\"margin-left: 0px;\" href=\"{{ path('app_adminAddParticipant')}}\" class=\"btn btn-primary\">Ajouter Participant</a>
    {% if events is empty %}
        <p>Aucun événement trouvé.</p>
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
                <th>Date</th>
                <th>Heure Début</th>
                <th>Heure Fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for event in events %}
                <tr>
                    <td>{{ event.id }}</td>
                    <td>{{ event.nomEvent }}</td>
                    <td>{{ event.dateEvent|date('Y-m-d') }}</td>
                    <td>{{ event.heureDebut|date('H:i:s') }}</td>
                    <td>{{ event.heureFin|date('H:i:s') }}</td>
                    <td>
                        <a href=\"{{ path('app_afficherParticipant',{'id':event.id})}}\" class=\"btn btn-primary\">Voir Participants</a>
                        <a href=\"{{ path('app_adminEditEvent',{'id':event.id})}}\" class=\"btn btn-warning\">Modifier</a>
                        <a href=\"{{ path('app_adminDeleteEvent',{'id':event.id})}}\" class=\"btn btn-danger\">Supprimer</a>
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
", "event/adminIndex.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\templates\\event\\adminIndex.html.twig");
    }
}
