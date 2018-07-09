<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_183b62ad5f4db770d97fda2d60635515c8f2d50e1b57fce2b1ec92baef8a2986 extends Twig_Template
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
        $__internal_b9c5d07040650562c3e0c901a7b237778ca81fe6c491f2fba067d1bd2d5747d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c5d07040650562c3e0c901a7b237778ca81fe6c491f2fba067d1bd2d5747d3->enter($__internal_b9c5d07040650562c3e0c901a7b237778ca81fe6c491f2fba067d1bd2d5747d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b9c5d07040650562c3e0c901a7b237778ca81fe6c491f2fba067d1bd2d5747d3->leave($__internal_b9c5d07040650562c3e0c901a7b237778ca81fe6c491f2fba067d1bd2d5747d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
