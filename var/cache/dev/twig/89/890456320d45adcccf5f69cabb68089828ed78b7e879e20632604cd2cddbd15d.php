<?php

/* ERBundle:Membre:admin.html.twig */
class __TwigTemplate_6d505bc1f00193efb14159e803a60bc582cde09c411e8cde4efc6beed4cbe992 extends Twig_Template
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
        $__internal_454c30bfd8048886ffd9f8f6299478e486acc56e37c6cc315cc799b31d2746d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454c30bfd8048886ffd9f8f6299478e486acc56e37c6cc315cc799b31d2746d2->enter($__internal_454c30bfd8048886ffd9f8f6299478e486acc56e37c6cc315cc799b31d2746d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454c30bfd8048886ffd9f8f6299478e486acc56e37c6cc315cc799b31d2746d2->leave($__internal_454c30bfd8048886ffd9f8f6299478e486acc56e37c6cc315cc799b31d2746d2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5be4e01750a732fc241768ff44fb7406b385de87671a6c2bac73c3fadf55d6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be4e01750a732fc241768ff44fb7406b385de87671a6c2bac73c3fadf55d6e2->enter($__internal_5be4e01750a732fc241768ff44fb7406b385de87671a6c2bac73c3fadf55d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_5be4e01750a732fc241768ff44fb7406b385de87671a6c2bac73c3fadf55d6e2->leave($__internal_5be4e01750a732fc241768ff44fb7406b385de87671a6c2bac73c3fadf55d6e2_prof);

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
        return array (  77 => 33,  64 => 23,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
                                </div>
                            </div>
                        </div>                        
                    </div>
                {% endblock %}", "ERBundle:Membre:admin.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/admin.html.twig");
    }
}
