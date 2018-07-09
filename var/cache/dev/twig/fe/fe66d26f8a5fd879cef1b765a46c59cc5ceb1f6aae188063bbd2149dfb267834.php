<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_aa0a73f87fb4282e8ee5b115f755b32d0d2a89f08cebedacfc6b2adc09046e3b extends Twig_Template
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
        $__internal_9224a4a9bfaa5d40f111619f7f4877b045db4487101742813cc87ccfd600ab0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9224a4a9bfaa5d40f111619f7f4877b045db4487101742813cc87ccfd600ab0e->enter($__internal_9224a4a9bfaa5d40f111619f7f4877b045db4487101742813cc87ccfd600ab0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9224a4a9bfaa5d40f111619f7f4877b045db4487101742813cc87ccfd600ab0e->leave($__internal_9224a4a9bfaa5d40f111619f7f4877b045db4487101742813cc87ccfd600ab0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
