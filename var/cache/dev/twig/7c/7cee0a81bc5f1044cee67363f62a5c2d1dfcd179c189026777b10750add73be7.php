<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e631e0b17ce30287d7298781a18ed164a7fe289ec12c68cdfaa2e67c118bcd2f extends Twig_Template
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
        $__internal_8de8d7ce04e25d54f80b1cc3d453310c7b4a8323dc79e97905671f8feb5b07fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de8d7ce04e25d54f80b1cc3d453310c7b4a8323dc79e97905671f8feb5b07fa->enter($__internal_8de8d7ce04e25d54f80b1cc3d453310c7b4a8323dc79e97905671f8feb5b07fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8de8d7ce04e25d54f80b1cc3d453310c7b4a8323dc79e97905671f8feb5b07fa->leave($__internal_8de8d7ce04e25d54f80b1cc3d453310c7b4a8323dc79e97905671f8feb5b07fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
