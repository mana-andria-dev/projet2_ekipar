<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0474b2b84b5427a26166694e032b9021999dca91a681e0aa6312bc842a60883f extends Twig_Template
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
        $__internal_0592f250d2402f6532ccbfb11e70b68620ee9954590960fcecdb57cae8c84d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0592f250d2402f6532ccbfb11e70b68620ee9954590960fcecdb57cae8c84d4f->enter($__internal_0592f250d2402f6532ccbfb11e70b68620ee9954590960fcecdb57cae8c84d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0592f250d2402f6532ccbfb11e70b68620ee9954590960fcecdb57cae8c84d4f->leave($__internal_0592f250d2402f6532ccbfb11e70b68620ee9954590960fcecdb57cae8c84d4f_prof);

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
", "@Framework/Form/attributes.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
