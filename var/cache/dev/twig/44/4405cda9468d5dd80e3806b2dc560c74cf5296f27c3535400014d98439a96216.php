<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a8dc30c1a14e1cb364308ffa2baab60fa43e97b5c08733f9fe9db114bd5a2a57 extends Twig_Template
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
        $__internal_665e6df2c12dc34f26a3125c60fe88593650eeaa111b3433a0cbc93db68bce98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665e6df2c12dc34f26a3125c60fe88593650eeaa111b3433a0cbc93db68bce98->enter($__internal_665e6df2c12dc34f26a3125c60fe88593650eeaa111b3433a0cbc93db68bce98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_665e6df2c12dc34f26a3125c60fe88593650eeaa111b3433a0cbc93db68bce98->leave($__internal_665e6df2c12dc34f26a3125c60fe88593650eeaa111b3433a0cbc93db68bce98_prof);

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
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
