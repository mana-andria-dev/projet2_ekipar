<?php

/* ::dream.html.twig */
class __TwigTemplate_421a6e0f4031dab8ce19cbef7b1b24e2672bb1e6ec6ac696642b91c36c9c24e5 extends Twig_Template
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
        // line 169
        echo "    </body>
</html>

";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Projet 2018";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "            <div id=\"wrapper\">

                ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 114
        echo "
                ";
        // line 115
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "

                ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 166
        echo "
            </div>
        ";
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
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
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                                    <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-messages\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>John Doe</strong>
                                                <span class=\"pull-right text-muted\">
                                                    <em>Today</em>
                                                </span>
                                            </div>
                                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>John Smith</strong>
                                                <span class=\"pull-right text-muted\">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>John Smith</strong>
                                                <span class=\"pull-right text-muted\">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>Read All Messages</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-messages -->
                            </li>
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
                                        <a href=\"#\">
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
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo ", bienvenu à la gestion des membres.
                        </span>

                    </nav>
                ";
    }

    // line 115
    public function block_content($context, array $blocks = array())
    {
        // line 116
        echo "                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Basic Tabs
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\" data-toggle=\"tab\">Ajouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" data-toggle=\"tab\">Listes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" data-toggle=\"tab\">Admin</a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"#tabaides\" data-toggle=\"tab\">Aides</a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    ";
        // line 140
        $this->displayBlock('tab', $context, $blocks);
        // line 146
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
    }

    // line 140
    public function block_tab($context, array $blocks = array())
    {
        // line 141
        echo "                                        <div class=\"tab-pane fade active in\" id=\"ajouter\">
                                            <h4>Home Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "                    <!-- jQuery Js -->
                    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
                    <!-- Bootstrap Js -->
                    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    <!-- Metis Menu Js -->
                    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
                    <!-- Morris Chart Js -->
                    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris/morris.js"), "html", null, true);
        echo "\"></script>
                    <!-- Custom Js -->
                    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom-scripts.js"), "html", null, true);
        echo "\"></script>           
                ";
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
        return array (  293 => 164,  288 => 162,  284 => 161,  279 => 159,  274 => 157,  269 => 155,  266 => 154,  263 => 153,  255 => 141,  252 => 140,  244 => 146,  242 => 140,  231 => 132,  224 => 128,  217 => 124,  207 => 116,  204 => 115,  195 => 109,  113 => 30,  103 => 22,  100 => 21,  94 => 166,  92 => 153,  88 => 151,  86 => 115,  83 => 114,  81 => 21,  77 => 19,  74 => 18,  68 => 7,  61 => 169,  59 => 18,  53 => 15,  48 => 13,  43 => 11,  38 => 9,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::dream.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/dream.html.twig");
    }
}
