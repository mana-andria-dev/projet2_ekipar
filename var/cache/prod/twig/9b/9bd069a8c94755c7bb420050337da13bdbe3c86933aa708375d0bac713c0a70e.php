<?php

/* ERBundle:Membre:chercher.html.twig */
class __TwigTemplate_1433bdbcd2a92c349fc79a5e9c921b83e9835366972967712e2dc11287096741 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        // line 198
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
    }

    // line 58
    public function block_tab($context, array $blocks = array())
    {
        echo "                                   
                                        <div 
                                            class=\"table-responsive\" 
                                        >

                                            <div class=\"row\" style=\"margin-top: 10px;\">
                                                <div class=\"col-md-8\">
                                                    <form>
                                                        <div class=\"typeahead__container\">
                                                            <div class=\"typeahead__field\">

                                                                <span class=\"typeahead__query\">
                                                                    <input 
                                                                        class=\"js-typeahead\"
                                                                        name=\"q\"
                                                                        type=\"search\"
                                                                        autofocus
                                                                        autocomplete=\"off\"
                                                                        placeholder=\"Rechercher des membres\"
                                                                        style=\"font-size: 15px;\"
                                                                    >
                                                                </span>
                                                                <span class=\"typeahead__button\">
                                                                    <button 
                                                                        type=\"submit\" 
                                                                        style=\"height: 100%;font-size: 14px;\"
                                                                        onclick=\"return false;\" 
                                                                        >
                                                                        <span class=\"typeahead__search-icon\"></span>
                                                                    </button>
                                                                </span>                          
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <div style=\"margin-bottom: 5px; width: 300px; border: 1px solid #24691c; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #318407c9;\">
                                                        <i class=\"fa fa-users\"></i>
                                                        ";
        // line 96
        echo twig_escape_filter($this->env, ($context["TotalMembres"] ?? null), "html", null, true);
        echo " Enregistrements
                                                    </div>
                                                </div>
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
                                            <script type=\"text/javascript\">
                                                var datas = [];
                                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataSearch"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 114
            echo "                                                    datas.push(\"";
            echo twig_escape_filter($this->env, $context["s"], "html", null, true);
            echo "\");
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                            </script>
                                            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Membres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Membre"]) {
            // line 118
            echo "                                                <tr class=\"row\">
                                                    <td class=\"col-md-3\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 121
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
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\"
                                                                >
                                                                  Supprimer
                                                                </button>
                                                                <!-- <a 
                                                                    href=\"
                                                                    ";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 139
$context["Membre"], "id", array()))), "html", null, true);
            // line 141
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
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\" 
                                                    tabindex=\"-1\" 
                                                    role=\"dialog\" 
                                                    aria-labelledby=\"modalSuppression";
            // line 155
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
            // line 171
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
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 180
$context["Membre"], "id", array()))), "html", null, true);
            // line 182
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
        // line 192
        echo "                                            </table>
                                            <div class=\"text-center\">
                                                ";
        // line 194
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["Membres"] ?? null));
        echo "
                                            </div>
                                        </div>
                                    ";
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
        return array (  295 => 194,  291 => 192,  276 => 182,  274 => 180,  273 => 177,  262 => 171,  243 => 155,  237 => 152,  224 => 141,  222 => 139,  221 => 136,  212 => 130,  200 => 121,  196 => 120,  192 => 119,  189 => 118,  185 => 117,  182 => 116,  173 => 114,  169 => 113,  149 => 96,  107 => 58,  99 => 198,  97 => 58,  71 => 35,  57 => 24,  43 => 13,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ERBundle:Membre:chercher.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/chercher.html.twig");
    }
}
