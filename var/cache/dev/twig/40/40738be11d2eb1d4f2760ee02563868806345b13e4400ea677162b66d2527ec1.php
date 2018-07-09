<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_dc1ca239f2b31104beda48656d874d48d9e30cab56e866233b9a6c1446f99d73 extends Twig_Template
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
        $__internal_339b7b3b429aa0a4dc85547eb6e59b7f201440ba6562424a50784837500133b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339b7b3b429aa0a4dc85547eb6e59b7f201440ba6562424a50784837500133b4->enter($__internal_339b7b3b429aa0a4dc85547eb6e59b7f201440ba6562424a50784837500133b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_339b7b3b429aa0a4dc85547eb6e59b7f201440ba6562424a50784837500133b4->leave($__internal_339b7b3b429aa0a4dc85547eb6e59b7f201440ba6562424a50784837500133b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
