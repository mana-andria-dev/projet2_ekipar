<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_4cba53fe70f86827f42a7c168caadd34e15973f3350ebddaad112f54c17a54a7 extends Twig_Template
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
        $__internal_eb10c3f94a1775b1bf220aa94f070ba0f7268444ee8df04c2018acbb9c9f8bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb10c3f94a1775b1bf220aa94f070ba0f7268444ee8df04c2018acbb9c9f8bab->enter($__internal_eb10c3f94a1775b1bf220aa94f070ba0f7268444ee8df04c2018acbb9c9f8bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_eb10c3f94a1775b1bf220aa94f070ba0f7268444ee8df04c2018acbb9c9f8bab->leave($__internal_eb10c3f94a1775b1bf220aa94f070ba0f7268444ee8df04c2018acbb9c9f8bab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
