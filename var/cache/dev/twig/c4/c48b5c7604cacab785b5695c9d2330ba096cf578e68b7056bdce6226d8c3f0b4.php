<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0974efb6618876bfc25a22e212e2a461865425300379c8dcf8a76023ddb2c279 extends Twig_Template
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
        $__internal_a7b8b28ed18ecc1eee1fcb3ed57c2bf7049f6bf709fe82b9b4c181907c5cbb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b8b28ed18ecc1eee1fcb3ed57c2bf7049f6bf709fe82b9b4c181907c5cbb95->enter($__internal_a7b8b28ed18ecc1eee1fcb3ed57c2bf7049f6bf709fe82b9b4c181907c5cbb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a7b8b28ed18ecc1eee1fcb3ed57c2bf7049f6bf709fe82b9b4c181907c5cbb95->leave($__internal_a7b8b28ed18ecc1eee1fcb3ed57c2bf7049f6bf709fe82b9b4c181907c5cbb95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
