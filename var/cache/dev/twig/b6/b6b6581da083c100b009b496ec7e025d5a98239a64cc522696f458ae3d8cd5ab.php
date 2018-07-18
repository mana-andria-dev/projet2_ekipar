<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c99b8f08079f696fec1ff391b46bd11c11d26883c28534e350ac4f7c6ac47bc9 extends Twig_Template
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
        $__internal_97b095eb5c35f66bf6a5da1556a5ed65590e1cd542ffddf3dc79bafe9612089a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b095eb5c35f66bf6a5da1556a5ed65590e1cd542ffddf3dc79bafe9612089a->enter($__internal_97b095eb5c35f66bf6a5da1556a5ed65590e1cd542ffddf3dc79bafe9612089a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_97b095eb5c35f66bf6a5da1556a5ed65590e1cd542ffddf3dc79bafe9612089a->leave($__internal_97b095eb5c35f66bf6a5da1556a5ed65590e1cd542ffddf3dc79bafe9612089a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
