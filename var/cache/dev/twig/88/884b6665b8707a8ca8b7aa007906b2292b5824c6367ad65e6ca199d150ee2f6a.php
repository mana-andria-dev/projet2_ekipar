<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3674d69e020e01fb93c13868bde3f879b229502ee4afe93a544d9950595b9490 extends Twig_Template
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
        $__internal_935e1c2e7ca0351a2bace8eeff1af74c2f85ce2049b47b2361a8e48aa5f9eb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935e1c2e7ca0351a2bace8eeff1af74c2f85ce2049b47b2361a8e48aa5f9eb3a->enter($__internal_935e1c2e7ca0351a2bace8eeff1af74c2f85ce2049b47b2361a8e48aa5f9eb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_935e1c2e7ca0351a2bace8eeff1af74c2f85ce2049b47b2361a8e48aa5f9eb3a->leave($__internal_935e1c2e7ca0351a2bace8eeff1af74c2f85ce2049b47b2361a8e48aa5f9eb3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
