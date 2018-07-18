<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d76f209a2ce81ec28e03890131a5afbe4ac0382b393f5c5611511c25e6598293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf974cd13f0fb29e5659b3bb0bc9d53078f97d64a05387efaa184f03f9c62baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf974cd13f0fb29e5659b3bb0bc9d53078f97d64a05387efaa184f03f9c62baf->enter($__internal_cf974cd13f0fb29e5659b3bb0bc9d53078f97d64a05387efaa184f03f9c62baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cf974cd13f0fb29e5659b3bb0bc9d53078f97d64a05387efaa184f03f9c62baf->leave($__internal_cf974cd13f0fb29e5659b3bb0bc9d53078f97d64a05387efaa184f03f9c62baf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
