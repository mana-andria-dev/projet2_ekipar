<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_77186431e36b3473567ae3be70e62732c80fc10f6cac9f6216ebf98076a3e5f0 extends Twig_Template
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
        $__internal_658af3631037ac5516a553d3466ac6bde07a63db6a1407ca7be6e701cf0be459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658af3631037ac5516a553d3466ac6bde07a63db6a1407ca7be6e701cf0be459->enter($__internal_658af3631037ac5516a553d3466ac6bde07a63db6a1407ca7be6e701cf0be459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_658af3631037ac5516a553d3466ac6bde07a63db6a1407ca7be6e701cf0be459->leave($__internal_658af3631037ac5516a553d3466ac6bde07a63db6a1407ca7be6e701cf0be459_prof);

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
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
