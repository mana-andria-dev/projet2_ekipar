<?php

/* ERBundle:Membre:ajouter.html.twig */
class __TwigTemplate_8bc751406694bc159cee2dbb5c0f3b893f9668ed6d66b7106e5e4e465c97a073 extends Twig_Template
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
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                        \tListes
                                    \t</a>
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
        // line 90
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
        echo "                                    \t<br>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t                            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(        // line 48
($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        // line 51
        echo "
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>
\t\t\t                                            \tNom
\t\t\t                                            </label>
\t\t\t                                            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
\t\t\t                                        </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>Prenom</label>
\t\t\t                                            ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
        echo "
\t\t\t                                        </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>Email</label>
\t\t\t                                            <input 
\t\t\t                                            \tclass=\"form-control\" 
\t\t\t                                            \tplaceholder=\"Email\"
\t\t\t                                            >
\t\t\t                                        </div>
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
\t\t                                        <div class=\"form-group\">
\t\t                                            <label>Fonctionnalité</label>
\t\t                                            ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fonction")));
        echo "
\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t                                    ";
        // line 87
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
        return array (  150 => 87,  143 => 83,  118 => 61,  111 => 57,  103 => 51,  101 => 48,  100 => 47,  96 => 45,  93 => 44,  85 => 90,  83 => 44,  67 => 31,  55 => 22,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
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
