<?php

/* ERBundle:Membre:admin.html.twig */
class __TwigTemplate_688986f797f584b3f6f0e30eca78ea4e839d4d45896be0dbe3bbe366bc84fbdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dream.html.twig", "ERBundle:Membre:admin.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::dream.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b5a688fff5c40cb6b5af7ce0eca3dadae8a37e56d5569271c19d94713326f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5a688fff5c40cb6b5af7ce0eca3dadae8a37e56d5569271c19d94713326f65->enter($__internal_1b5a688fff5c40cb6b5af7ce0eca3dadae8a37e56d5569271c19d94713326f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5a688fff5c40cb6b5af7ce0eca3dadae8a37e56d5569271c19d94713326f65->leave($__internal_1b5a688fff5c40cb6b5af7ce0eca3dadae8a37e56d5569271c19d94713326f65_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b80a5c9c54c63ebe746f2178be3b63833ceb985bc8759d5d4b98a64ccb9c441e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80a5c9c54c63ebe746f2178be3b63833ceb985bc8759d5d4b98a64ccb9c441e->enter($__internal_b80a5c9c54c63ebe746f2178be3b63833ceb985bc8759d5d4b98a64ccb9c441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3>Espace administration</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                    \t</a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        <i class=\"glyphicon glyphicon-lock\"></i>
                                        \tAdmin
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                            href=\"#tabaides\" 
                                            data-toggle=\"tab\"
                                            onclick=\"return false;\"
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    <br>
                                    <div class=\"alert alert-danger\">
                                        <strong>Attention !</strong> 
                                        Cette page est reservée à l'administarteur
                                    </div>   
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <a class=\"btn btn-success\" 
                                                href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_export");
        echo "\" 
                                            >
                                                <img 
                                                    src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/if_logo_brand_brands_logos_excel_2993694.png"), "html", null, true);
        echo "\"
                                                    style=\"width: 6%; float: left;\" 
                                                >
                                                Exporter les données en excel
                                            </a>
                                        </div>
                                    </div>                                 
                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_b80a5c9c54c63ebe746f2178be3b63833ceb985bc8759d5d4b98a64ccb9c441e->leave($__internal_b80a5c9c54c63ebe746f2178be3b63833ceb985bc8759d5d4b98a64ccb9c441e_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Membre:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 65,  109 => 62,  77 => 33,  64 => 23,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::dream.html.twig' %}

                {% block content %}
                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3>Espace administration</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_ajout') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_cherche') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                    \t</a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_admin') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        <i class=\"glyphicon glyphicon-lock\"></i>
                                        \tAdmin
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                            href=\"#tabaides\" 
                                            data-toggle=\"tab\"
                                            onclick=\"return false;\"
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    <br>
                                    <div class=\"alert alert-danger\">
                                        <strong>Attention !</strong> 
                                        Cette page est reservée à l'administarteur
                                    </div>   
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <a class=\"btn btn-success\" 
                                                href=\"{{ path('er_export') }}\" 
                                            >
                                                <img 
                                                    src=\"{{ asset('images/icons/if_logo_brand_brands_logos_excel_2993694.png') }}\"
                                                    style=\"width: 6%; float: left;\" 
                                                >
                                                Exporter les données en excel
                                            </a>
                                        </div>
                                    </div>                                 
                                </div>
                            </div>
                        </div>                        
                    </div>
                {% endblock %}", "ERBundle:Membre:admin.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/admin.html.twig");
    }
}
