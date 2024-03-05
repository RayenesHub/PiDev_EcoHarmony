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

/* admin/indexAdmin.html.twig */
class __TwigTemplate_37fb8515238a9c58d16a4a9f52722294 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/indexAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/indexAdmin.html.twig"));

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
        return "admin/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  59 => 12,  54 => 10,  43 => 1,);
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
", "admin/indexAdmin.html.twig", "C:\\xampp\\htdocs\\TheTreeWell\\templates\\admin\\indexAdmin.html.twig");
    }
}
