<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5260a03c27bdc96364530efdefd50c8164b7d537b244a026d59df64213b79598 extends Twig_Template
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
        $__internal_c47bdd1a55bb01b25de44b5a298f10ea1ffb815f472817cffae0ca27eb151b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47bdd1a55bb01b25de44b5a298f10ea1ffb815f472817cffae0ca27eb151b55->enter($__internal_c47bdd1a55bb01b25de44b5a298f10ea1ffb815f472817cffae0ca27eb151b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c47bdd1a55bb01b25de44b5a298f10ea1ffb815f472817cffae0ca27eb151b55->leave($__internal_c47bdd1a55bb01b25de44b5a298f10ea1ffb815f472817cffae0ca27eb151b55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
