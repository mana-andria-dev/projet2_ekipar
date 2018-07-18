<?php

/* ::membre.html.twig */
class __TwigTemplate_844a1a094e4e8a1c4405c1bd8983de63306c9f0d67236e8546015bbfd7c56205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bienvenu' => array($this, 'block_bienvenu'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fde35f3c728fdd73180f8b0d61009fd617cf32e2b4bdad1e2477b808c6a87baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde35f3c728fdd73180f8b0d61009fd617cf32e2b4bdad1e2477b808c6a87baa->enter($__internal_fde35f3c728fdd73180f8b0d61009fd617cf32e2b4bdad1e2477b808c6a87baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::membre.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Membre</title>
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/animate/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/util.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>
<body style=\"background: #ebebeb;\">

<div class=\"container-fluid\">
\t";
        // line 17
        $this->displayBlock('bienvenu', $context, $blocks);
        // line 34
        echo "
\t";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 84
        echo "
\t";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "
\t";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 102
        echo "\t
</div>

</body>
</html>";
        
        $__internal_fde35f3c728fdd73180f8b0d61009fd617cf32e2b4bdad1e2477b808c6a87baa->leave($__internal_fde35f3c728fdd73180f8b0d61009fd617cf32e2b4bdad1e2477b808c6a87baa_prof);

    }

    // line 17
    public function block_bienvenu($context, array $blocks = array())
    {
        $__internal_fa09a8672b6992d775190c9d1db4d756452a7c21f7cfeae42f0d7ce370ba9705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa09a8672b6992d775190c9d1db4d756452a7c21f7cfeae42f0d7ce370ba9705->enter($__internal_fa09a8672b6992d775190c9d1db4d756452a7c21f7cfeae42f0d7ce370ba9705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        // line 18
        echo "\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; color: white; background: #757272; text-align: left;\"
\t\t>
\t\t\t<div class=\"col-md-12\" style=\"padding-right: 0px;\">
\t\t\t\tBonjour ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ", bienvenu à la gestion des membres.
\t\t\t\t<a 
\t\t\t\t\thref=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
\t\t\t\t\tstyle=\"float: right;font-size: 18px;\"
\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t>
\t\t\t\t\tDéconnexion
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_fa09a8672b6992d775190c9d1db4d756452a7c21f7cfeae42f0d7ce370ba9705->leave($__internal_fa09a8672b6992d775190c9d1db4d756452a7c21f7cfeae42f0d7ce370ba9705_prof);

    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54078f302905730760f0696c91b14f7a931fcbacbee81512b6304dad8ee6c8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54078f302905730760f0696c91b14f7a931fcbacbee81512b6304dad8ee6c8c7->enter($__internal_54078f302905730760f0696c91b14f7a931fcbacbee81512b6304dad8ee6c8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 36
        echo "\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0px;\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\" class=\"btn btn-success\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/Actions-list-add-user-icon.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>
\t\t\t\t\t\tAjouter
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" class=\"btn btn-primary\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/Loupe-icon.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\tChercher
\t\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" class=\"btn btn-primary\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/User-Administrator-Red-icon.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\tAdmin
\t\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\" style=\"padding-right: 0px;\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/Help-icon.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\tAide
\t\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_54078f302905730760f0696c91b14f7a931fcbacbee81512b6304dad8ee6c8c7->leave($__internal_54078f302905730760f0696c91b14f7a931fcbacbee81512b6304dad8ee6c8c7_prof);

    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        $__internal_38a338032ed347fb11d5e16feed231cbc5fa421295fbcdb0cb8709b5f77ef20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a338032ed347fb11d5e16feed231cbc5fa421295fbcdb0cb8709b5f77ef20e->enter($__internal_38a338032ed347fb11d5e16feed231cbc5fa421295fbcdb0cb8709b5f77ef20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 86
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\tContent
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_38a338032ed347fb11d5e16feed231cbc5fa421295fbcdb0cb8709b5f77ef20e->leave($__internal_38a338032ed347fb11d5e16feed231cbc5fa421295fbcdb0cb8709b5f77ef20e_prof);

    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        $__internal_25a4d37022507c411e8828182111a9d946129f593b08aad1a10605040b52fbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a4d37022507c411e8828182111a9d946129f593b08aad1a10605040b52fbfd->enter($__internal_25a4d37022507c411e8828182111a9d946129f593b08aad1a10605040b52fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 94
        echo "\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; color: white; background: #757272; text-align: center;\"
\t\t>
\t\t\t<div class=\"col-md-12\">
\t\t\t\tContact
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_25a4d37022507c411e8828182111a9d946129f593b08aad1a10605040b52fbfd->leave($__internal_25a4d37022507c411e8828182111a9d946129f593b08aad1a10605040b52fbfd_prof);

    }

    public function getTemplateName()
    {
        return "::membre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 94,  229 => 93,  217 => 86,  211 => 85,  195 => 75,  181 => 64,  176 => 62,  164 => 53,  159 => 51,  147 => 42,  142 => 40,  136 => 36,  130 => 35,  114 => 25,  109 => 23,  102 => 18,  96 => 17,  85 => 102,  83 => 93,  80 => 92,  78 => 85,  75 => 84,  73 => 35,  70 => 34,  68 => 17,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title>Membre</title>
\t<link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('vendor/animate/animate.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('vendor/animsition/css/animsition.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('vendor/select2/select2.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('vendor/daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('css/util.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" />
</head>
<body style=\"background: #ebebeb;\">

<div class=\"container-fluid\">
\t{% block bienvenu %}
\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; color: white; background: #757272; text-align: left;\"
\t\t>
\t\t\t<div class=\"col-md-12\" style=\"padding-right: 0px;\">
\t\t\t\tBonjour {{ app.user.username }}, bienvenu à la gestion des membres.
\t\t\t\t<a 
\t\t\t\t\thref=\"{{ path('fos_user_security_logout') }}\"
\t\t\t\t\tstyle=\"float: right;font-size: 18px;\"
\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t>
\t\t\t\t\tDéconnexion
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t{% endblock%}

\t{% block menu %}
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0px;\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('er_ajout') }}\" class=\"btn btn-success\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"{{ asset('images/icons/Actions-list-add-user-icon.png') }}\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>
\t\t\t\t\t\tAjouter
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('er_cherche') }}\" class=\"btn btn-primary\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"{{ asset('images/icons/Loupe-icon.png') }}\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\tChercher
\t\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('er_admin') }}\" class=\"btn btn-primary\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"{{ asset('images/icons/User-Administrator-Red-icon.png') }}\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\tAdmin
\t\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\" style=\"padding-right: 0px;\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\" style=\"width: 100%\">
\t\t\t\t\t\t<img 
\t\t\t\t\t\t\tsrc=\"{{ asset('images/icons/Help-icon.png') }}\"
\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important;\" 
\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\tAide
\t\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t</div>
\t\t</div>
\t{% endblock %}

\t{% block content %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\tContent
\t\t\t</div>
\t\t</div>
\t{% endblock %}

\t{% block footer %}
\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; color: white; background: #757272; text-align: center;\"
\t\t>
\t\t\t<div class=\"col-md-12\">
\t\t\t\tContact
\t\t\t</div>
\t\t</div>
\t{% endblock %}\t
</div>

</body>
</html>", "::membre.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/membre.html.twig");
    }
}
