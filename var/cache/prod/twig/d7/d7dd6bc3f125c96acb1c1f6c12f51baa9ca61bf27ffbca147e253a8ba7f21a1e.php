<?php

/* ERBundle:Membre:ajouter.html.twig */
class __TwigTemplate_7ce28a0102c995dd6ae42db4cdfc045343c8fd261e6cb80ad0f718524a1b100b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dream.html.twig", "ERBundle:Membre:ajouter.html.twig", 1);
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
                                <h3>Formulaire pour ajouter un membre</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\" style=\"width: 25%;\">
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
                                    <li class=\"\" style=\"width: 25%;\">
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
                                    ";
        // line 54
        $this->displayBlock('tab', $context, $blocks);
        // line 115
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
    }

    // line 54
    public function block_tab($context, array $blocks = array())
    {
        // line 55
        echo "                                    \t<br>

                                        ";
        // line 57
        if (($this->getAttribute(($context["message"] ?? null), "status", array()) == "succes")) {
            // line 58
            echo "                                        <div class=\"alert alert-success\">
                                            <strong>Succes!</strong> 
                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? null), "text", array()), "html", null, true);
            echo "
                                        </div>
                                        ";
        }
        // line 62
        echo " 
                                        ";
        // line 63
        if (($this->getAttribute(($context["message"] ?? null), "status", array()) == "erreur")) {
            // line 64
            echo "                                        <div class=\"alert alert-danger\">
                                            <strong>Erreur!</strong> 
                                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? null), "text", array()), "html", null, true);
            echo "
                                        </div>
                                        ";
        }
        // line 68
        echo "      

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t                            ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(        // line 72
($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        // line 75
        echo "
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>
\t\t\t                                            \tNom
\t\t\t                                            </label>
\t\t\t                                            ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
\t\t\t                                        </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>Prenom</label>
\t\t\t                                            ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
        echo "
\t\t\t                                        </div>
                                                    <div class=\"form-group\">
                                                        <label>Téléphone</label>
                                                        ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone")));
        echo "
                                                    </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t\t                                        <button 
\t\t\t\t                                        \ttype=\"submit\" 
\t\t\t\t                                        \tclass=\"btn btn-success\"
\t\t\t\t                                        >
\t\t\t\t                                    \t\tEnregister
\t\t\t\t                                    \t</button>
\t\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
                                                <div class=\"form-group\">
                                                    <label>Fonction</label>
                                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fonction")));
        echo "
                                                </div>
\t\t                                        <div class=\"form-group\">
\t\t                                            <label>CIN</label>
\t\t                                            ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cin", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "CIN")));
        echo "
\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t                                    ";
        // line 112
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t                            </div>
                                    ";
    }

    public function getTemplateName()
    {
        return "ERBundle:Membre:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 112,  192 => 108,  185 => 104,  167 => 89,  160 => 85,  153 => 81,  145 => 75,  143 => 72,  142 => 71,  137 => 68,  131 => 66,  127 => 64,  125 => 63,  122 => 62,  116 => 60,  112 => 58,  110 => 57,  106 => 55,  103 => 54,  95 => 115,  93 => 54,  69 => 33,  56 => 23,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ERBundle:Membre:ajouter.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/ajouter.html.twig");
    }
}
