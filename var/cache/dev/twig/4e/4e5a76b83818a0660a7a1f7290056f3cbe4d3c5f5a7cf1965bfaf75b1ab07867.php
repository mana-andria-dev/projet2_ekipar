<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_4e482a2c92544483038808559bd9bc6808e48b29efbf3fcdf69ffcfb5f62f160 extends Twig_Template
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
        $__internal_9c94160d124a3abf31d7de710b8fb1cf178ffa84eaa218317cdcbd555c2a7b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c94160d124a3abf31d7de710b8fb1cf178ffa84eaa218317cdcbd555c2a7b37->enter($__internal_9c94160d124a3abf31d7de710b8fb1cf178ffa84eaa218317cdcbd555c2a7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_9c94160d124a3abf31d7de710b8fb1cf178ffa84eaa218317cdcbd555c2a7b37->leave($__internal_9c94160d124a3abf31d7de710b8fb1cf178ffa84eaa218317cdcbd555c2a7b37_prof);

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
", "@Framework/Form/range_widget.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
