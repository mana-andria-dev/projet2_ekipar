<?php

/* ::dream.html.twig */
class __TwigTemplate_4a0ff38f3dfb92a1d1e55df2d1992d6846f93f92a52d8a2920c5a563db2f5333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
            'tab' => array($this, 'block_tab'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25a8125860e7709959cd3cfee4ba68a11705e3418eb50e5ccf49d3639533b644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a8125860e7709959cd3cfee4ba68a11705e3418eb50e5ccf49d3639533b644->enter($__internal_25a8125860e7709959cd3cfee4ba68a11705e3418eb50e5ccf49d3639533b644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dream.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap Styles-->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- FontAwesome Styles-->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Morris Chart Styles-->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris/morris-0.4.3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom Styles-->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom-styles.css "), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "    </body>
</html>

";
        
        $__internal_25a8125860e7709959cd3cfee4ba68a11705e3418eb50e5ccf49d3639533b644->leave($__internal_25a8125860e7709959cd3cfee4ba68a11705e3418eb50e5ccf49d3639533b644_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45679d8ba38bedd4079313260442373fec40c42f555cbdb3d8c414b0b471c019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45679d8ba38bedd4079313260442373fec40c42f555cbdb3d8c414b0b471c019->enter($__internal_45679d8ba38bedd4079313260442373fec40c42f555cbdb3d8c414b0b471c019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet 2018";
        
        $__internal_45679d8ba38bedd4079313260442373fec40c42f555cbdb3d8c414b0b471c019->leave($__internal_45679d8ba38bedd4079313260442373fec40c42f555cbdb3d8c414b0b471c019_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_9650294f4f4eb1f87f9f43d3ddf7f77ab4572edc54b6ee010209c3c55df58fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9650294f4f4eb1f87f9f43d3ddf7f77ab4572edc54b6ee010209c3c55df58fb2->enter($__internal_9650294f4f4eb1f87f9f43d3ddf7f77ab4572edc54b6ee010209c3c55df58fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            <div id=\"wrapper\">

                ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 64
        echo "
                ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "

                ";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "
            </div>
        ";
        
        $__internal_9650294f4f4eb1f87f9f43d3ddf7f77ab4572edc54b6ee010209c3c55df58fb2->leave($__internal_9650294f4f4eb1f87f9f43d3ddf7f77ab4572edc54b6ee010209c3c55df58fb2_prof);

    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_7e1b6ac885052ca5dbe3227777ede0074579e229c29a86c116a5496c26d0532a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1b6ac885052ca5dbe3227777ede0074579e229c29a86c116a5496c26d0532a->enter($__internal_7e1b6ac885052ca5dbe3227777ede0074579e229c29a86c116a5496c26d0532a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 22
        echo "                    <nav class=\"navbar navbar-default top-navbar\" role=\"navigation\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\">
                                Projet 2018
                            </a>
                        </div>

                        <ul class=\"nav navbar-top-links navbar-right\">
                            <!-- /.dropdown -->
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                                    <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-user\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user fa-fw\"></i>Profile
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                            <i class=\"fa fa-sign-out fa-fw\"></i> Déconnexion
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <!-- /.dropdown -->
                        </ul>
                        <span style=\"color: white; float: right; margin-top: 19px;\">
                            Bonjour ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ", bienvenu à la gestion des membres.
                        </span>

                    </nav>
                ";
        
        $__internal_7e1b6ac885052ca5dbe3227777ede0074579e229c29a86c116a5496c26d0532a->leave($__internal_7e1b6ac885052ca5dbe3227777ede0074579e229c29a86c116a5496c26d0532a_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4688fef8f9110fe4d5b59ccf791819cdfdafe447b076868e0587f38fe225518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4688fef8f9110fe4d5b59ccf791819cdfdafe447b076868e0587f38fe225518->enter($__internal_e4688fef8f9110fe4d5b59ccf791819cdfdafe447b076868e0587f38fe225518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 66
        echo "                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Basic Tabs
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\" data-toggle=\"tab\">Ajouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" data-toggle=\"tab\">Listes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" data-toggle=\"tab\">Admin</a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"#tabaides\" data-toggle=\"tab\">Aides</a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    ";
        // line 90
        $this->displayBlock('tab', $context, $blocks);
        // line 96
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_e4688fef8f9110fe4d5b59ccf791819cdfdafe447b076868e0587f38fe225518->leave($__internal_e4688fef8f9110fe4d5b59ccf791819cdfdafe447b076868e0587f38fe225518_prof);

    }

    // line 90
    public function block_tab($context, array $blocks = array())
    {
        $__internal_f24894021b1e232d99ccbec7d360a2199f06d3e33de76318b7c973c6a1aa93cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24894021b1e232d99ccbec7d360a2199f06d3e33de76318b7c973c6a1aa93cb->enter($__internal_f24894021b1e232d99ccbec7d360a2199f06d3e33de76318b7c973c6a1aa93cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        // line 91
        echo "                                        <div class=\"tab-pane fade active in\" id=\"ajouter\">
                                            <h4>Home Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    ";
        
        $__internal_f24894021b1e232d99ccbec7d360a2199f06d3e33de76318b7c973c6a1aa93cb->leave($__internal_f24894021b1e232d99ccbec7d360a2199f06d3e33de76318b7c973c6a1aa93cb_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad519cae921fa0d2dfcefb6157d48cffd9f12b30a6c0678b4bb0bf2b19969c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad519cae921fa0d2dfcefb6157d48cffd9f12b30a6c0678b4bb0bf2b19969c6e->enter($__internal_ad519cae921fa0d2dfcefb6157d48cffd9f12b30a6c0678b4bb0bf2b19969c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "                    <!-- jQuery Js -->
                    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
                    <!-- Bootstrap Js -->
                    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    <!-- Metis Menu Js -->
                    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
                    <!-- Morris Chart Js -->
                    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris/morris.js"), "html", null, true);
        echo "\"></script>
                    <!-- Custom Js -->
                    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom-scripts.js"), "html", null, true);
        echo "\"></script>           
                ";
        
        $__internal_ad519cae921fa0d2dfcefb6157d48cffd9f12b30a6c0678b4bb0bf2b19969c6e->leave($__internal_ad519cae921fa0d2dfcefb6157d48cffd9f12b30a6c0678b4bb0bf2b19969c6e_prof);

    }

    public function getTemplateName()
    {
        return "::dream.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 114,  280 => 112,  276 => 111,  271 => 109,  266 => 107,  261 => 105,  258 => 104,  252 => 103,  241 => 91,  235 => 90,  224 => 96,  222 => 90,  211 => 82,  204 => 78,  197 => 74,  187 => 66,  181 => 65,  169 => 59,  156 => 49,  134 => 30,  124 => 22,  118 => 21,  109 => 116,  107 => 103,  103 => 101,  101 => 65,  98 => 64,  96 => 21,  92 => 19,  86 => 18,  74 => 7,  64 => 119,  62 => 18,  56 => 15,  51 => 13,  46 => 11,  41 => 9,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>{% block title %}Projet 2018{% endblock %}</title>
        <!-- Bootstrap Styles-->
        <link href=\"{{ asset('assets/css/bootstrap.css') }}\" rel=\"stylesheet\" />
        <!-- FontAwesome Styles-->
        <link href=\"{{ asset('assets/css/font-awesome.css') }}\" rel=\"stylesheet\" />
        <!-- Morris Chart Styles-->
        <link href=\"{{ asset('assets/js/morris/morris-0.4.3.min.css') }}\" rel=\"stylesheet\" />
        <!-- Custom Styles-->
        <link href=\"{{ asset('assets/css/custom-styles.css ') }}\" rel=\"stylesheet\" />
    </head>
    <body>
        {% block body %}
            <div id=\"wrapper\">

                {% block navbar %}
                    <nav class=\"navbar navbar-default top-navbar\" role=\"navigation\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"{{ path('er_ajout') }}\">
                                Projet 2018
                            </a>
                        </div>

                        <ul class=\"nav navbar-top-links navbar-right\">
                            <!-- /.dropdown -->
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                                    <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-user\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user fa-fw\"></i>Profile
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"{{ path('fos_user_security_logout') }}\">
                                            <i class=\"fa fa-sign-out fa-fw\"></i> Déconnexion
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <!-- /.dropdown -->
                        </ul>
                        <span style=\"color: white; float: right; margin-top: 19px;\">
                            Bonjour {{ app.user.username }}, bienvenu à la gestion des membres.
                        </span>

                    </nav>
                {% endblock %}

                {% block content %}
                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Basic Tabs
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"{{ path('er_ajout') }}\" data-toggle=\"tab\">Ajouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a href=\"{{ path('er_cherche') }}\" data-toggle=\"tab\">Listes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"{{ path('er_admin') }}\" data-toggle=\"tab\">Admin</a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"#tabaides\" data-toggle=\"tab\">Aides</a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    {% block tab %}
                                        <div class=\"tab-pane fade active in\" id=\"ajouter\">
                                            <h4>Home Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>                        
                    </div>
                {% endblock %}


                {% block javascripts %}
                    <!-- jQuery Js -->
                    <script src=\"{{ asset('assets/js/jquery-1.10.2.js') }}\"></script>
                    <!-- Bootstrap Js -->
                    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
                    <!-- Metis Menu Js -->
                    <script src=\"{{ asset('assets/js/jquery.metisMenu.js') }}\"></script>
                    <!-- Morris Chart Js -->
                    <script src=\"{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}\"></script>
                    <script src=\"{{ asset('assets/js/morris/morris.js') }}\"></script>
                    <!-- Custom Js -->
                    <script src=\"{{ asset('assets/js/custom-scripts.js') }}\"></script>           
                {% endblock %}

            </div>
        {% endblock %}
    </body>
</html>

", "::dream.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/dream.html.twig");
    }
}
