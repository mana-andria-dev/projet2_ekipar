<?php

/* ERBundle:Membre:chercher.html.twig */
class __TwigTemplate_edfdd5668587613f003620814ba7ceecd6e68e1256b8b5fab289576da6c16704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dream.html.twig", "ERBundle:Membre:chercher.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'tab' => array($this, 'block_tab'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::dream.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_838387edde51fedbc2c596c8240a5e069139ed4ceff40d9c83c815369fc9b27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838387edde51fedbc2c596c8240a5e069139ed4ceff40d9c83c815369fc9b27f->enter($__internal_838387edde51fedbc2c596c8240a5e069139ed4ceff40d9c83c815369fc9b27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838387edde51fedbc2c596c8240a5e069139ed4ceff40d9c83c815369fc9b27f->leave($__internal_838387edde51fedbc2c596c8240a5e069139ed4ceff40d9c83c815369fc9b27f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b830ed34c540ea17f2f93e965ee62d59914ed99f4ba743cbf24b934c55b90e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b830ed34c540ea17f2f93e965ee62d59914ed99f4ba743cbf24b934c55b90e8->enter($__internal_5b830ed34c540ea17f2f93e965ee62d59914ed99f4ba743cbf24b934c55b90e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "             
                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\"> 
                                <h3>Liste de toutes les membres</h3>
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
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1));
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
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
                                            style=\"font-size: 15px;\" 
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    ";
        // line 58
        $this->displayBlock('tab', $context, $blocks);
        // line 157
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_5b830ed34c540ea17f2f93e965ee62d59914ed99f4ba743cbf24b934c55b90e8->leave($__internal_5b830ed34c540ea17f2f93e965ee62d59914ed99f4ba743cbf24b934c55b90e8_prof);

    }

    // line 58
    public function block_tab($context, array $blocks = array())
    {
        $__internal_98d090343a9f6932a48534c2be57b7008cc9a0ae5cde49e12822f6ce07e59fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d090343a9f6932a48534c2be57b7008cc9a0ae5cde49e12822f6ce07e59fe4->enter($__internal_98d090343a9f6932a48534c2be57b7008cc9a0ae5cde49e12822f6ce07e59fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        echo "                                   
                                        <div 
                                            class=\"table-responsive\" 
                                        >
                                            <div style=\"margin-bottom: 5px; width: 300px; border: 1px solid #24691c; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #318407c9;\">
                                                <i class=\"fa fa-users\"></i>
                                                ";
        // line 64
        echo twig_escape_filter($this->env, ($context["TotalMembres"] ?? $this->getContext($context, "TotalMembres")), "html", null, true);
        echo " Enregistrements
                                            </div>                                        
                                            <table 
                                                class=\"table table-striped\"
                                                style=\"border-right: 1px solid #dddddd; border-left: 1px solid #dddddd; border-bottom: 1px solid #dddddd;\"    
                                            >
                                            <tr class=\"row\">
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Nom</b></span></td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Prenom</b></span></td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Fonction</b></span></td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Action</b></span></td>
                                            </tr>
                                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Membres"] ?? $this->getContext($context, "Membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["Membre"]) {
            // line 77
            echo "                                                <tr class=\"row\">
                                                    <td class=\"col-md-3\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "fonction", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                <button class=\"btn btn-sm btn-primary\"><i class=\"fa fa-edit \"></i> Modifier</button>
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <button 
                                                                    class=\"btn btn-sm btn-danger\"
                                                                    data-toggle=\"modal\" data-target=\"#modalSuppression";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\"
                                                                >
                                                                  Supprimer
                                                                </button>
                                                                <!-- <a 
                                                                    href=\"
                                                                    ";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 98
$context["Membre"], "id", array()))), "html", null, true);
            // line 100
            echo "\" 
                                                                    class=\"btn btn-sm btn-danger\">
                                                                    <i class=\"fa fa-pencil\"></i> 
                                                                    Supprimer
                                                                </a> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div 
                                                    class=\"modal fade in\" 
                                                    id=\"modalSuppression";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\" 
                                                    tabindex=\"-1\" 
                                                    role=\"dialog\" 
                                                    aria-labelledby=\"modalSuppression";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\" 
                                                    aria-hidden=\"false\"
                                                >
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                                <h2 
                                                                    class=\"modal-title\" 
                                                                    id=\"myModalLabel\"
                                                                    style=\"color: #fff;\"
                                                                >
                                                                    Attention!
                                                                </h2>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <h4>Voulez vous vraiment supprimer le membre <b>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</b> ?</h3>
                                                            </div>
                                                            <div class=\"modal-footer\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                                <a 
                                                                    href=\"
                                                                    ";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 139
$context["Membre"], "id", array()))), "html", null, true);
            // line 141
            echo "\"
                                                                    class=\"btn btn-danger\"
                                                                >
                                                                    Supprimer
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                            </table>
                                            <div class=\"text-center\">
                                                ";
        // line 153
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["Membres"] ?? $this->getContext($context, "Membres")));
        echo "
                                            </div>
                                        </div>
                                    ";
        
        $__internal_98d090343a9f6932a48534c2be57b7008cc9a0ae5cde49e12822f6ce07e59fe4->leave($__internal_98d090343a9f6932a48534c2be57b7008cc9a0ae5cde49e12822f6ce07e59fe4_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Membre:chercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 153,  253 => 151,  238 => 141,  236 => 139,  235 => 136,  224 => 130,  205 => 114,  199 => 111,  186 => 100,  184 => 98,  183 => 95,  174 => 89,  162 => 80,  158 => 79,  154 => 78,  151 => 77,  147 => 76,  132 => 64,  119 => 58,  108 => 157,  106 => 58,  80 => 35,  66 => 24,  52 => 13,  35 => 3,  11 => 1,);
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
                                <h3>Liste de toutes les membres</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_ajout') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_cherche', {'page': 1}) }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_admin') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
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
                                            style=\"font-size: 15px;\" 
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    {% block tab %}                                   
                                        <div 
                                            class=\"table-responsive\" 
                                        >
                                            <div style=\"margin-bottom: 5px; width: 300px; border: 1px solid #24691c; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #318407c9;\">
                                                <i class=\"fa fa-users\"></i>
                                                {{ TotalMembres }} Enregistrements
                                            </div>                                        
                                            <table 
                                                class=\"table table-striped\"
                                                style=\"border-right: 1px solid #dddddd; border-left: 1px solid #dddddd; border-bottom: 1px solid #dddddd;\"    
                                            >
                                            <tr class=\"row\">
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Nom</b></span></td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Prenom</b></span></td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Fonction</b></span></td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Action</b></span></td>
                                            </tr>
                                            {% for Membre in Membres %}
                                                <tr class=\"row\">
                                                    <td class=\"col-md-3\">{{ Membre.nom }}</td>
                                                    <td class=\"col-md-3\">{{ Membre.prenom }}</td>
                                                    <td class=\"col-md-3\">{{ Membre.fonction }}</td>
                                                    <td class=\"col-md-3\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                <button class=\"btn btn-sm btn-primary\"><i class=\"fa fa-edit \"></i> Modifier</button>
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <button 
                                                                    class=\"btn btn-sm btn-danger\"
                                                                    data-toggle=\"modal\" data-target=\"#modalSuppression{{Membre.id}}\"
                                                                >
                                                                  Supprimer
                                                                </button>
                                                                <!-- <a 
                                                                    href=\"
                                                                    {{ 
                                                                        path(
                                                                            'er_supprimer',
                                                                            { 'id': Membre.id }
                                                                        ) 
                                                                    }}\" 
                                                                    class=\"btn btn-sm btn-danger\">
                                                                    <i class=\"fa fa-pencil\"></i> 
                                                                    Supprimer
                                                                </a> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div 
                                                    class=\"modal fade in\" 
                                                    id=\"modalSuppression{{Membre.id}}\" 
                                                    tabindex=\"-1\" 
                                                    role=\"dialog\" 
                                                    aria-labelledby=\"modalSuppression{{Membre.id}}\" 
                                                    aria-hidden=\"false\"
                                                >
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                                <h2 
                                                                    class=\"modal-title\" 
                                                                    id=\"myModalLabel\"
                                                                    style=\"color: #fff;\"
                                                                >
                                                                    Attention!
                                                                </h2>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <h4>Voulez vous vraiment supprimer le membre <b>{{Membre.nom}} {{Membre.prenom}}</b> ?</h3>
                                                            </div>
                                                            <div class=\"modal-footer\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                                <a 
                                                                    href=\"
                                                                    {{ 
                                                                        path(
                                                                            'er_supprimer',
                                                                            { 'id': Membre.id }
                                                                        ) 
                                                                    }}\"
                                                                    class=\"btn btn-danger\"
                                                                >
                                                                    Supprimer
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            {% endfor %}
                                            </table>
                                            <div class=\"text-center\">
                                                {{ knp_pagination_render(Membres) }}
                                            </div>
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>                        
                    </div>
                {% endblock %}", "ERBundle:Membre:chercher.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/chercher.html.twig");
    }
}
