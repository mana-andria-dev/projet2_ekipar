<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f0c88ccb2c9f09bd162eac28fb4f9b671045f6bf5bbab71f457a95fce37bc32 extends Twig_Template
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
        $__internal_29874f63f95be3d052ee666ee2e3e5ceaf4fe59dfee8fb45fcf6b61981f5f898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29874f63f95be3d052ee666ee2e3e5ceaf4fe59dfee8fb45fcf6b61981f5f898->enter($__internal_29874f63f95be3d052ee666ee2e3e5ceaf4fe59dfee8fb45fcf6b61981f5f898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_29874f63f95be3d052ee666ee2e3e5ceaf4fe59dfee8fb45fcf6b61981f5f898->leave($__internal_29874f63f95be3d052ee666ee2e3e5ceaf4fe59dfee8fb45fcf6b61981f5f898_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
