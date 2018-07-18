<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_aa7f07bda7553f8fe3d7829e22121da42055fca206c310448207228886f166d9 extends Twig_Template
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
        $__internal_7c4e2d2cab3c0b1b1b46a2e0a80701679c9b936589c5099106316f5074065efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4e2d2cab3c0b1b1b46a2e0a80701679c9b936589c5099106316f5074065efa->enter($__internal_7c4e2d2cab3c0b1b1b46a2e0a80701679c9b936589c5099106316f5074065efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7c4e2d2cab3c0b1b1b46a2e0a80701679c9b936589c5099106316f5074065efa->leave($__internal_7c4e2d2cab3c0b1b1b46a2e0a80701679c9b936589c5099106316f5074065efa_prof);

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
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
