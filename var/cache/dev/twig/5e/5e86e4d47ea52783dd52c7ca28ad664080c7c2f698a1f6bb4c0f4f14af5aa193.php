<?php

/* ::dream.html.twig */
class __TwigTemplate_0989dd48e0c4e4a38a1fc7c65855e29930fadfeccc8ae45ae2e5aba9733e711d extends Twig_Template
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
        $__internal_2c951a36d22adf4203b3503b8eb694994dfaa961bd1f65e2fcedd9d280e67f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c951a36d22adf4203b3503b8eb694994dfaa961bd1f65e2fcedd9d280e67f12->enter($__internal_2c951a36d22adf4203b3503b8eb694994dfaa961bd1f65e2fcedd9d280e67f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dream.html.twig"));

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
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/typeahead/jquery.typeahead.css "), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "    </body>
</html>

";
        
        $__internal_2c951a36d22adf4203b3503b8eb694994dfaa961bd1f65e2fcedd9d280e67f12->leave($__internal_2c951a36d22adf4203b3503b8eb694994dfaa961bd1f65e2fcedd9d280e67f12_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a54d8f6d59f1036a7acca8b16bef167488e7650ce9fb6fcec154eacc6e43403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a54d8f6d59f1036a7acca8b16bef167488e7650ce9fb6fcec154eacc6e43403->enter($__internal_1a54d8f6d59f1036a7acca8b16bef167488e7650ce9fb6fcec154eacc6e43403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet 2018";
        
        $__internal_1a54d8f6d59f1036a7acca8b16bef167488e7650ce9fb6fcec154eacc6e43403->leave($__internal_1a54d8f6d59f1036a7acca8b16bef167488e7650ce9fb6fcec154eacc6e43403_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabcc729c05250d2cfea473deb206f531a9d7ecef34fa1ffcfb961558126a63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabcc729c05250d2cfea473deb206f531a9d7ecef34fa1ffcfb961558126a63f->enter($__internal_dabcc729c05250d2cfea473deb206f531a9d7ecef34fa1ffcfb961558126a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "            <div id=\"wrapper\">

                ";
        // line 22
        $this->displayBlock('navbar', $context, $blocks);
        // line 65
        echo "
                ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "

                ";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "
            </div>
        ";
        
        $__internal_dabcc729c05250d2cfea473deb206f531a9d7ecef34fa1ffcfb961558126a63f->leave($__internal_dabcc729c05250d2cfea473deb206f531a9d7ecef34fa1ffcfb961558126a63f_prof);

    }

    // line 22
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a4cce34319cf5e27f37cf6550300d2165e10b226488cf8a3f0256c2ea3b90446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cce34319cf5e27f37cf6550300d2165e10b226488cf8a3f0256c2ea3b90446->enter($__internal_a4cce34319cf5e27f37cf6550300d2165e10b226488cf8a3f0256c2ea3b90446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 23
        echo "                    <nav class=\"navbar navbar-default top-navbar\" role=\"navigation\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"";
        // line 31
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
        // line 50
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
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ", bienvenu à la gestion des membres.
                        </span>

                    </nav>
                ";
        
        $__internal_a4cce34319cf5e27f37cf6550300d2165e10b226488cf8a3f0256c2ea3b90446->leave($__internal_a4cce34319cf5e27f37cf6550300d2165e10b226488cf8a3f0256c2ea3b90446_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b661f317131e58271a47f1569ba5441675580a729c9c474765a8eed9461f6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b661f317131e58271a47f1569ba5441675580a729c9c474765a8eed9461f6ac->enter($__internal_4b661f317131e58271a47f1569ba5441675580a729c9c474765a8eed9461f6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 67
        echo "                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Basic Tabs
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\" data-toggle=\"tab\">Ajouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" data-toggle=\"tab\">Listes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" data-toggle=\"tab\">Admin</a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"#tabaides\" data-toggle=\"tab\">Aides</a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    ";
        // line 91
        $this->displayBlock('tab', $context, $blocks);
        // line 97
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_4b661f317131e58271a47f1569ba5441675580a729c9c474765a8eed9461f6ac->leave($__internal_4b661f317131e58271a47f1569ba5441675580a729c9c474765a8eed9461f6ac_prof);

    }

    // line 91
    public function block_tab($context, array $blocks = array())
    {
        $__internal_53f52b10c83dd7125bff0c9655549e4fec47f513ae9077a24e1459c79971658a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f52b10c83dd7125bff0c9655549e4fec47f513ae9077a24e1459c79971658a->enter($__internal_53f52b10c83dd7125bff0c9655549e4fec47f513ae9077a24e1459c79971658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        // line 92
        echo "                                        <div class=\"tab-pane fade active in\" id=\"ajouter\">
                                            <h4>Home Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    ";
        
        $__internal_53f52b10c83dd7125bff0c9655549e4fec47f513ae9077a24e1459c79971658a->leave($__internal_53f52b10c83dd7125bff0c9655549e4fec47f513ae9077a24e1459c79971658a_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_335e4d065f050da24a60d05fcf30e90b41185c8bfdf6e1fb08e88fc8c8a66c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335e4d065f050da24a60d05fcf30e90b41185c8bfdf6e1fb08e88fc8c8a66c58->enter($__internal_335e4d065f050da24a60d05fcf30e90b41185c8bfdf6e1fb08e88fc8c8a66c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "                    <!-- jQuery Js -->
                    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
                    <!-- Bootstrap Js -->
                    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    <!-- Metis Menu Js -->
                    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
                    <!-- Morris Chart Js -->
                    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
                    <!-- <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris/morris.js"), "html", null, true);
        echo "\"></script> -->
                    <!-- Custom Js -->
                    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/typeahead/jquery.typeahead.js"), "html", null, true);
        echo "\"></script>           
                    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom-scripts.js"), "html", null, true);
        echo "\"></script>           
                ";
        
        $__internal_335e4d065f050da24a60d05fcf30e90b41185c8bfdf6e1fb08e88fc8c8a66c58->leave($__internal_335e4d065f050da24a60d05fcf30e90b41185c8bfdf6e1fb08e88fc8c8a66c58_prof);

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
        return array (  293 => 116,  289 => 115,  284 => 113,  280 => 112,  275 => 110,  270 => 108,  265 => 106,  262 => 105,  256 => 104,  245 => 92,  239 => 91,  228 => 97,  226 => 91,  215 => 83,  208 => 79,  201 => 75,  191 => 67,  185 => 66,  173 => 60,  160 => 50,  138 => 31,  128 => 23,  122 => 22,  113 => 118,  111 => 104,  107 => 102,  105 => 66,  102 => 65,  100 => 22,  96 => 20,  90 => 19,  78 => 7,  68 => 121,  66 => 19,  60 => 16,  56 => 15,  51 => 13,  46 => 11,  41 => 9,  36 => 7,  28 => 1,);
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
        <link href=\"{{ asset('assets/typeahead/jquery.typeahead.css ') }}\" rel=\"stylesheet\" />
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
                    <script src=\"{{ asset('assets/js/jquery-2.1.0.min.js') }}\"></script>
                    <!-- Bootstrap Js -->
                    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
                    <!-- Metis Menu Js -->
                    <script src=\"{{ asset('assets/js/jquery.metisMenu.js') }}\"></script>
                    <!-- Morris Chart Js -->
                    <script src=\"{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}\"></script>
                    <!-- <script src=\"{{ asset('assets/js/morris/morris.js') }}\"></script> -->
                    <!-- Custom Js -->
                    <script src=\"{{ asset('assets/typeahead/jquery.typeahead.js') }}\"></script>           
                    <script src=\"{{ asset('assets/js/custom-scripts.js') }}\"></script>           
                {% endblock %}

            </div>
        {% endblock %}
    </body>
</html>

", "::dream.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/dream.html.twig");
    }
}
