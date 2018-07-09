<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c8d994b9c2b87f44129d0894dfab47a3313d63814865c2e3be5c8c0afaf54762 extends Twig_Template
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
        $__internal_2ec7b3054eb78c6e88e97de0764b2829690007eb95a2d96cd3a0ff580c9a4e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec7b3054eb78c6e88e97de0764b2829690007eb95a2d96cd3a0ff580c9a4e4f->enter($__internal_2ec7b3054eb78c6e88e97de0764b2829690007eb95a2d96cd3a0ff580c9a4e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2ec7b3054eb78c6e88e97de0764b2829690007eb95a2d96cd3a0ff580c9a4e4f->leave($__internal_2ec7b3054eb78c6e88e97de0764b2829690007eb95a2d96cd3a0ff580c9a4e4f_prof);

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
", "@Framework/Form/container_attributes.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
