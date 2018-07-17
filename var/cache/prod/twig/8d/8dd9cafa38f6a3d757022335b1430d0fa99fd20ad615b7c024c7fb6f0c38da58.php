<?php

/* ERBundle:Membre:admin.html.twig */
class __TwigTemplate_735f9b2d430e2cc94b567e3e4cd466652f9214ac2b1d4630f6fe669c4dbe902a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dream.html.twig", "ERBundle:Membre:admin.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'tabajouter' => array($this, 'block_tabajouter'),
            'tablistes' => array($this, 'block_tablistes'),
            'tabadmin' => array($this, 'block_tabadmin'),
            'tabaides' => array($this, 'block_tabaides'),
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
                                Basic Tabs
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
                                    <li class=\"active\" style=\"width: 25%;\">
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
        $this->displayBlock('tabajouter', $context, $blocks);
        // line 50
        echo "                                    ";
        $this->displayBlock('tablistes', $context, $blocks);
        // line 56
        echo "                                    ";
        $this->displayBlock('tabadmin', $context, $blocks);
        // line 62
        echo "                                    ";
        $this->displayBlock('tabaides', $context, $blocks);
        // line 68
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
    }

    // line 44
    public function block_tabajouter($context, array $blocks = array())
    {
        // line 45
        echo "                                        <div class=\"tab-pane fade active in\" id=\"ajouter\">
                                            <h4>Home Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    ";
    }

    // line 50
    public function block_tablistes($context, array $blocks = array())
    {
        // line 51
        echo "                                        <div class=\"tab-pane fade\" id=\"profile\">
                                            <h4>Profile Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    ";
    }

    // line 56
    public function block_tabadmin($context, array $blocks = array())
    {
        // line 57
        echo "                                        <div class=\"tab-pane fade\" id=\"admin\">
                                            <h4>Messages Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    ";
    }

    // line 62
    public function block_tabaides($context, array $blocks = array())
    {
        // line 63
        echo "                                        <div class=\"tab-pane fade\" id=\"tabaides\">
                                            <h4>Settings Tab</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    ";
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
        return array (  141 => 63,  138 => 62,  130 => 57,  127 => 56,  119 => 51,  116 => 50,  108 => 45,  105 => 44,  97 => 68,  94 => 62,  91 => 56,  88 => 50,  86 => 44,  70 => 31,  58 => 22,  46 => 13,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ERBundle:Membre:admin.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/admin.html.twig");
    }
}
