<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c51376c5be38ab91098a1af3fcba48da9256415656a41c7ef222ce7ab95ad005 extends Twig_Template
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
        $__internal_531d2b91489f04e8a864239f91ece04d3a3bc02b791af37d7887722c0b919e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531d2b91489f04e8a864239f91ece04d3a3bc02b791af37d7887722c0b919e27->enter($__internal_531d2b91489f04e8a864239f91ece04d3a3bc02b791af37d7887722c0b919e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_531d2b91489f04e8a864239f91ece04d3a3bc02b791af37d7887722c0b919e27->leave($__internal_531d2b91489f04e8a864239f91ece04d3a3bc02b791af37d7887722c0b919e27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
