<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_099c24a645e9edf9a7f0aa6468881dfbf61ac6cc897316490a5dbf96b6b191f5 extends Twig_Template
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
        $__internal_bfbad91ed9d00c2b3016b4c94a6f8d6481cdf22320e7a78db23bcf0865d3d81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbad91ed9d00c2b3016b4c94a6f8d6481cdf22320e7a78db23bcf0865d3d81a->enter($__internal_bfbad91ed9d00c2b3016b4c94a6f8d6481cdf22320e7a78db23bcf0865d3d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bfbad91ed9d00c2b3016b4c94a6f8d6481cdf22320e7a78db23bcf0865d3d81a->leave($__internal_bfbad91ed9d00c2b3016b4c94a6f8d6481cdf22320e7a78db23bcf0865d3d81a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
