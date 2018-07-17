<?php

/* ERBundle:Membre:chercher.html.twig */
class __TwigTemplate_922f0da744410b8e2f754f76886906433cf4816b8c19a096f7dbf6c1bdc45b42 extends Twig_Template
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
        // line 4
        echo "                    <div id=\"page-wrapper\">
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
                                        >
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        \tListes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        \tAdmin
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a href=\"#tabaides\" data-toggle=\"tab\">Aides</a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    ";
        // line 44
        $this->displayBlock('tab', $context, $blocks);
        // line 82
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
    }

    // line 44
    public function block_tab($context, array $blocks = array())
    {
        // line 45
        echo "                                        <br>
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body\">
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-striped\">
                                                    <tr class=\"row\">
                                                        <td class=\"col-md-3\"><span style=\"color: black;\"><b>Nom</b></span></td>
                                                        <td class=\"col-md-3\"><span style=\"color: black;\"><b>Prenom</b></span></td>
                                                        <td class=\"col-md-3\"><span style=\"color: black;\"><b>Fonction</b></span></td>
                                                        <td class=\"col-md-3\"><span style=\"color: black;\"><b>Action</b></span></td>
                                                    </tr>
                                                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Membres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Membre"]) {
            // line 57
            echo "                                                        <tr class=\"row\">
                                                            <td class=\"col-md-3\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo "</td>
                                                            <td class=\"col-md-3\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</td>
                                                            <td class=\"col-md-3\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "fonction", array()), "html", null, true);
            echo "</td>
                                                            <td class=\"col-md-3\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-6\">
                                                                        <button class=\"btn btn-primary\"><i class=\"fa fa-edit \"></i> Modifier</button>
                                                                    </div>
                                                                    <div class=\"col-md-6\">
                                                                        <button 
                                                                            class=\"btn btn-danger\">
                                                                            <i class=\"fa fa-pencil\"></i> 
                                                                            Supprimer
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                                    </table>
                                                </div>
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
        return array (  147 => 77,  124 => 60,  120 => 59,  116 => 58,  113 => 57,  109 => 56,  96 => 45,  93 => 44,  85 => 82,  83 => 44,  67 => 31,  55 => 22,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
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
