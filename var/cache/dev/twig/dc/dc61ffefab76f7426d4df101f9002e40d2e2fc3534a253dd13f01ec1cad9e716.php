<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1ef0b6169f7986197c95b1907854ecedba337238bfbc33d053d87f73c0e01f1d extends Twig_Template
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
        $__internal_247eed57fa7c0ddefc7e5066daad9ed151ce70ac18ca3cbdd51739d58068d2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247eed57fa7c0ddefc7e5066daad9ed151ce70ac18ca3cbdd51739d58068d2c4->enter($__internal_247eed57fa7c0ddefc7e5066daad9ed151ce70ac18ca3cbdd51739d58068d2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_247eed57fa7c0ddefc7e5066daad9ed151ce70ac18ca3cbdd51739d58068d2c4->leave($__internal_247eed57fa7c0ddefc7e5066daad9ed151ce70ac18ca3cbdd51739d58068d2c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
