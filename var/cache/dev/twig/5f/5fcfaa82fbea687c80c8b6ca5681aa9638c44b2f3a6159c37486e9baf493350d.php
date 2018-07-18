<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1d3a7a123d16b9babd9c10e014dd9c11cab2c9e7d2704c8dba648ef4dd64a943 extends Twig_Template
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
        $__internal_df713b04a4f284a425cc3589cec9a41c3501ac06efed583c7e730170acad1bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df713b04a4f284a425cc3589cec9a41c3501ac06efed583c7e730170acad1bcb->enter($__internal_df713b04a4f284a425cc3589cec9a41c3501ac06efed583c7e730170acad1bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_df713b04a4f284a425cc3589cec9a41c3501ac06efed583c7e730170acad1bcb->leave($__internal_df713b04a4f284a425cc3589cec9a41c3501ac06efed583c7e730170acad1bcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
