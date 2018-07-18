<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8b3888efc99066f74d4bcfab26d7c6f6748fe0be2e2c94ec435caa35cccb8be0 extends Twig_Template
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
        $__internal_c77a3c617eaa13947bf97b4a71ec91db17e527e69e8d4a8c017869eb4f2adffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77a3c617eaa13947bf97b4a71ec91db17e527e69e8d4a8c017869eb4f2adffb->enter($__internal_c77a3c617eaa13947bf97b4a71ec91db17e527e69e8d4a8c017869eb4f2adffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c77a3c617eaa13947bf97b4a71ec91db17e527e69e8d4a8c017869eb4f2adffb->leave($__internal_c77a3c617eaa13947bf97b4a71ec91db17e527e69e8d4a8c017869eb4f2adffb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
