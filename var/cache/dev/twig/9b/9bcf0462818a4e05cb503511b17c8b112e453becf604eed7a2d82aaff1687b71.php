<?php

/* ERBundle:Membre:chercher.html.twig */
class __TwigTemplate_15c820c94e0e5ddfd494d0468c6f3e21a7bfd80c28bc5503d533c4dd853b3992 extends Twig_Template
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
        $__internal_2f42f0c9d65e221ae95913ad37a2be4b1df40f4c0bc5a0951518e1d028fd024f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f42f0c9d65e221ae95913ad37a2be4b1df40f4c0bc5a0951518e1d028fd024f->enter($__internal_2f42f0c9d65e221ae95913ad37a2be4b1df40f4c0bc5a0951518e1d028fd024f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f42f0c9d65e221ae95913ad37a2be4b1df40f4c0bc5a0951518e1d028fd024f->leave($__internal_2f42f0c9d65e221ae95913ad37a2be4b1df40f4c0bc5a0951518e1d028fd024f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_878307f585af0f4fdd8902068573e1f35f464191a5c65f49b99b6181aee475f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878307f585af0f4fdd8902068573e1f35f464191a5c65f49b99b6181aee475f8->enter($__internal_878307f585af0f4fdd8902068573e1f35f464191a5c65f49b99b6181aee475f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\"> 
                                <h3 style=\"display: inline;\">Liste de toutes les membres</h3>
                                <div style=\"margin-bottom: 5px; width: 300px; border: 1px solid black; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #151105c9;\">
                                    <i class=\"fa fa-users\"></i>
                                    ";
        // line 10
        echo twig_escape_filter($this->env, ($context["TotalMembres"] ?? $this->getContext($context, "TotalMembres")), "html", null, true);
        echo " Enregistrements
                                    </div>                                  
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 17
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
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
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
        // line 39
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
        // line 62
        $this->displayBlock('tab', $context, $blocks);
        // line 155
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_878307f585af0f4fdd8902068573e1f35f464191a5c65f49b99b6181aee475f8->leave($__internal_878307f585af0f4fdd8902068573e1f35f464191a5c65f49b99b6181aee475f8_prof);

    }

    // line 62
    public function block_tab($context, array $blocks = array())
    {
        $__internal_dd20fa99de5928a58d1a82906d15286317dc8b5ae56e6aa73ec1333b8cfb2014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd20fa99de5928a58d1a82906d15286317dc8b5ae56e6aa73ec1333b8cfb2014->enter($__internal_dd20fa99de5928a58d1a82906d15286317dc8b5ae56e6aa73ec1333b8cfb2014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        echo "  
                                        <br>                                     
                                        <div 
                                            class=\"table-responsive\" 
                                        >
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
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Membres"] ?? $this->getContext($context, "Membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["Membre"]) {
            // line 78
            echo "                                                <tr class=\"row\">
                                                    <td class=\"col-md-3\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 81
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
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\"
                                                                >
                                                                  Supprimer
                                                                </button>
                                                                <!-- <a 
                                                                    href=\"
                                                                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 99
$context["Membre"], "id", array()))), "html", null, true);
            // line 101
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
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\" 
                                            tabindex=\"-1\" 
                                            role=\"dialog\" 
                                            aria-labelledby=\"modalSuppression";
            // line 115
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
            // line 131
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
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 140
$context["Membre"], "id", array()))), "html", null, true);
            // line 142
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
        // line 152
        echo "                                            </table>
                                        </div>
                                    ";
        
        $__internal_dd20fa99de5928a58d1a82906d15286317dc8b5ae56e6aa73ec1333b8cfb2014->leave($__internal_dd20fa99de5928a58d1a82906d15286317dc8b5ae56e6aa73ec1333b8cfb2014_prof);

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
        return array (  254 => 152,  239 => 142,  237 => 140,  236 => 137,  225 => 131,  206 => 115,  200 => 112,  187 => 101,  185 => 99,  184 => 96,  175 => 90,  163 => 81,  159 => 80,  155 => 79,  152 => 78,  148 => 77,  126 => 62,  115 => 155,  113 => 62,  87 => 39,  73 => 28,  59 => 17,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
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
                                <h3 style=\"display: inline;\">Liste de toutes les membres</h3>
                                <div style=\"margin-bottom: 5px; width: 300px; border: 1px solid black; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #151105c9;\">
                                    <i class=\"fa fa-users\"></i>
                                    {{ TotalMembres }} Enregistrements
                                    </div>                                  
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
                                        \thref=\"{{ path('er_cherche') }}\" 
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
                                        <br>                                     
                                        <div 
                                            class=\"table-responsive\" 
                                        >
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
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>                        
                    </div>
                {% endblock %}", "ERBundle:Membre:chercher.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/chercher.html.twig");
    }
}
